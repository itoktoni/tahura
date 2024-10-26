<?php

namespace App\Livewire;

use App\Dao\Models\Event;
use App\Facades\Model\UserModel;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Xendit\Configuration;
use Xendit\Invoice\CreateInvoiceRequest;
use Xendit\Invoice\InvoiceApi;

class RegisterEvent extends Component
{
    #[Validate(['required', 'string', 'max:255'], ['key' => 'nomer ID'])]
    public $key = '';

    #[Validate(['string', 'max:255'], ['community' => 'Komunitas'])]
    public $community = '';

    #[Validate(['required', 'string', 'max:255'])]
    public $first_name = '';

    public $last_name = '';

    #[Validate(['required', 'email', 'string', 'max:255', 'unique:users'])]
    public $email = '';

    #[Validate(['required', 'string', 'max:15'])]
    public $phone = '';

    #[Validate(['required', 'date'])]
    public $date_birth = '';

    #[Validate(['string'])]
    public $place_birth = '';

    #[Validate(['string'])]
    public $country = '';

    #[Validate(['string'])]
    public $province = '';

    #[Validate(['string'])]
    public $city = '';

    #[Validate(['string'])]
    public $address = '';

    #[Validate(['string'])]
    public $blood = '';

    #[Validate(['string'])]
    public $ilness = '';

    #[Validate(['string'])]
    public $emergency_contact = '';

    #[Validate(['string'])]
    public $jersey = '';

    #[Validate(['string'])]
    public $relationship = '';

    #[Validate(['required' ,'integer'])]
    public $id_event = '';


    public $data_event = [];

    public function save()
    {
        $this->validate();

        $event = Event::find($this->id_event)->first();

        Configuration::setXenditKey(env('XENDIT_SECRET_KEY'));

        $apiInstance = new InvoiceApi;

        $create_invoice_request = new CreateInvoiceRequest([
            'external_id' => strtoupper(uniqid()),
            'description' => $event->field_name,
            'amount' => $event->event_price,
            'invoice_duration' => 172800,
            'currency' => 'IDR',
            'reminder_time' => 1,
            'customer' => [
                'email' => $this->email,
                'given_name' => $this->first_name.' '.$this->last_name,
            ],
            'success_redirect_url' => config('app.url'),
            'failure_redirect_url' => config('app.url'),
        ]);

        try {
            $result = $apiInstance->createInvoice($create_invoice_request);

            return redirect()->to($result->getInvoiceUrl());
        } catch (\Xendit\XenditSdkException $e) {
            echo 'Exception when calling InvoiceApi->createInvoice: ', $e->getMessage(), PHP_EOL;
            echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
        }

        session()->flash('status', 'Post successfully updated.');

        // return $this->redirect('/');
    }

    public function mount()
    {
        $this->first_name = auth()->user()->first_name;
        $this->last_name = auth()->user()->last_name;
        $this->email = auth()->user()->email;

        $this->data_event = Event::all();
    }

    public function render()
    {
        return view('livewire.register-event');
    }
}

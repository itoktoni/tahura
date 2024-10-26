<?php

namespace App\Livewire;

use App\Facades\Model\UserModel;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class RegisterForm extends Component
{
    #[Validate(['required', 'string', 'max:255'])]
    public $first_name = '';

    public $last_name = '';

    #[Validate(['required', 'email', 'string', 'max:255', 'unique:users'])]
    public $email = '';

    #[Validate(['required', 'string', 'max:15'])]
    public $phone = '';

    #[Validate(['required', 'string','min:8', 'confirmed'])]
    public $password = '';

    #[Validate(['required'])]
    public $password_confirmation = '';

    public function save()
    {
        $this->validate();

        try
        {
            $user = UserModel::create([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'name' => $this->first_name.' '.$this->last_name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);

            session()->flash('message', 'User Success!');

            event(new Registered($user));

            $credentials = [
                'email' => $this->email,
                'password' => $this->password,
            ];

            Auth::attempt($credentials);

            return $this->redirect('/events', navigate: true);

        } catch (\Throwable $th)
        {
            session()->flash('message', $th->getMessage());
        }



    }

    public function render()
    {
        return view('livewire.register-form');
    }
}

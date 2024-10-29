<?php

namespace App\Console\Commands;

use App\Dao\Models\Core\User;
use App\Mail\CreateScheduleReceiveRunningTools;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'untuk mengirimkan whatsapp otomatis';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $data = User::query()
            ->where('email', 'itok.toni@gmail.com')
            ->whereNotNull('bib')
            ->whereNotNull('email')
            ->where('is_paid', 'Yes')
            ->limit(2)->get();

            if(!empty($data))
            {
                foreach($data as $user)
                {
                    Mail::to($user->email)->send(new CreateScheduleReceiveRunningTools($user));
                    $user->update([
                        'check' => date('Y-m-d')
                    ]);
                }
            }

            $this->info('Success');
    }
}

<?php

namespace App\Console\Commands;

use App\Mail\NotifyEmail;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\console\Commands;

class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'notify user daily';

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
        //$emails = User::select('email')->get();
        $emails = User::pluck('email')->toArray();
        $data = ['title'=>'programming','body'=>'php'];
        foreach($emails as $email){
            Mail::To($email) ->send(new NotifyEmail($data));
        }
    }
}

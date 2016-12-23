<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class ResetPassword extends Command 
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'resetpassword {email : Email of user} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Change password of a user using the given email';

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
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
        $email = $this->argument('email');
        $pw = $this->argument('password');

        $user = User::where('email', $email)->first();
        $user->password = bcrypt($pw);
        $user->save();

        echo "Password successfully changed!";
    }
}

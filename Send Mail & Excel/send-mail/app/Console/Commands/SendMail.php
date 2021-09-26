<?php

namespace App\Console\Commands;

use App\Mail\testMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendMail extends Command
{

    protected $signature = 'command:sendmail';

    protected $description = 'Application Send Mail To a User';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $details = [
            'title' => 'Mail From Geeks And Technology',
            'body' => 'gooo'
        ];

        Mail::to('arefink9100@gmail.com')->send(new testMail($details));

        //echo "noo";
        
    }

}

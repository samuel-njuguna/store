<?php

namespace App\Jobs;

use App\Mail\OrderMail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $order;
    public $customer;
    public function __construct($order, $customer)
    {
        $this->order=$order;
        $this->customer=$customer;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new OrderMail($this->order,$this->customer);
        Mail::to($this->customer->email)->send($email);
    }
    //queues
    //queue driver == database, redis, beanstalk, aws
    //php artisan queue:table
}

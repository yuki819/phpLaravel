<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class DailytweetCount extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public User $toUser;
    public int $count;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $toUser, int $count)
    {
        $this->toUser = $toUser;
        $this->count = $count;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("昨日は{$this->count}件のつぶやきが追加されました！")
            ->markdown('email.daily_tweet_count');
    }
}

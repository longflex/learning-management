<?php

namespace App\Listeners;

use App\Events\RecordHistory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\UserHistory;
use Notification;
use App\Notifications\OffersNotification;
use Illuminate\Support\Facades\Auth;
class SaveHistory
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\vent=RecordHistory  $event
     * @return void
     */
    public function handle(RecordHistory $event)
    {
        $userSchema = Auth::user();
        $offerData = $event->message;
        UserHistory::create([
            'user_id' =>$userSchema->id,
            'data' =>$offerData
        ]);
        //Notification::send($userSchema, new OffersNotification($offerData));
    }
}

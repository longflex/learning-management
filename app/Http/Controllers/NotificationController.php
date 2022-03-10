<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Notification;
use App\Notifications\OffersNotification;
class NotificationController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
    {
        return view('product');
    }
    
    public function sendOfferNotification($id, $type) {
        $userSchema = User::find($id);
  

        $offerData = [
            'body' => 'You received an offer.',
            'offer_id' => 007
        ];
  
        Notification::send($userSchema, new OffersNotification($offerData));
   
        dd('Task completed!');
    }
}
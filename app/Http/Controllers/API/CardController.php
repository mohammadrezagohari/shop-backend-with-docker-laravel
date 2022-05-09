<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\InvoiceResource;
use App\Models\Card;
use App\Models\User;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Notification;

class CardController extends Controller
{
    public function sendNotification($cardId)
    {
            $card = Card::findOrFail($cardId);
        $cardResource = InvoiceResource::make($card);
//            $cardResource = [
//                'invoice_id' => $card->id,
//                'mobile' => $card->mobile,
//                'amount' => $card->price
//            ];
            $card->notify(new InvoicePaid($cardResource));
            dd($cardResource);
//           \Notification::send($card, new InvoicePaid($cardResource));


    }

    public function getNotification($cardId)
    {
        $card = Card::findOrFail($cardId);
        return $card->notifications;
    }

    public function UnreadNotification($cardId)
    {
        $card = Card::findOrFail($cardId);
        dd($card->unreadNotifications());
    }

    public function ReadNotification($cardId)
    {
        $card = Card::findOrFail($cardId);
        return $card->readNotifications();
    }


}

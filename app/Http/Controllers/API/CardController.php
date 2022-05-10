<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\InvoiceResource;
use App\Models\Card;
use App\Notifications\InvoicePaid;

class CardController extends Controller
{
    public function sendNotification($cardId)
    {
        $card = Card::findOrFail($cardId);
        $cardResource = InvoiceResource::make($card);
        $card->notify(new InvoicePaid($cardResource));
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

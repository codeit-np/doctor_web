<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    public function sendPushFaq($users)
    {

        Notification::send($users, new Faq(['message' => 'This is new faq']));

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class ManageNotificationController extends Controller
{
    public function all()
    {
        $notifications = Notification::all();

        return view('admin.manager.notification.view', [
            'notifications' => $notifications
        ]);
    }

    public function view($id)
    {
        $notification = Notification::findOrFail($id);
        $notifications = Notification::all();

        return view('admin.manager.notification.view', [
            'notification' => $notification,
            'notifications' => $notifications
        ]);
    }

    public function create(Request $request)
    {
        $notification = new Notification;
        $notification->message = $request->input('message');
        $notification->url = $request->input('url');
        $notification->status = "SEND";
        // TODO: Send Notification
        $notification->save();

        return redirect()->route('admin.manager.notification');
    }

    public function delete($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->status = "CANCEL";
        // TODO: Cancel Notification
        $notification->save();

        return redirect()->route('admin.manager.notification');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class ManageFeedbackController extends Controller
{
    public function all()
    {
        $feedbacks = Feedback::all();

        return view('admin.manager.feedback.view', [
            'feedbacks' => $feedbacks
        ]);
    }

    public function view($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedbacks = Feedback::all();

        return view('admin.manager.feedback.view', [
            'feedback' => $feedback,
            'feedbacks' => $feedbacks
        ]);
    }

    public function delete($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        return redirect()->route('admin.manager.feedback');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function view()
    {
        return view('feedbackForm', [
            'title' => 'Feedback'
        ]);
    }

    public function create(Request $request)
    {
        $feedback = new Feedback;
        $feedback->name = $request->input('name');
        $feedback->comment = $request->input('comment');
        $feedback->save();

        return redirect('/');
    }
}
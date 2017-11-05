<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\BillItem;
use App\Models\Notification;


class FeedbackController extends Controller
{
    public function view()
    {
        return view('feedbackForm', [
            'title' => 'Feedback'
        ]);
    }
}
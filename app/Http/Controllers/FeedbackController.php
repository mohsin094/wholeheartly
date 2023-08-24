<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function addFeedback(FeedbackRequest $request){
        Feedback::create($request->all());
        return response()->json(['message' => 'Form submitted successfully']);
    }
}

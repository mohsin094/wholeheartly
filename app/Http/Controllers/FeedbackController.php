<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
use App\Models\Media;
use App\Models\Setting;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{

    public function home(Request $request)
    {
        $setting = Setting::first();
        return view('welcome', compact('setting'));
    }
    public function addFeedback(FeedbackRequest $request)
    {
        $feedback = Feedback::create($request->except(['image']));
        if ($request->has('images') && $feedback) {
            foreach ($request->images as $key => $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $path = $image->storeAs('images', $filename, 'public');
                $med = Media::create([
                    'feedback_id' => $feedback->id,
                    'image' => $path
                ]);
            }
        }
        return response()->json(['message' => 'Form submitted successfully']);
    }
}

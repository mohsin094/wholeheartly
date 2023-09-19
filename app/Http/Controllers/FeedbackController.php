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
        $feedbackData = $request->except(['images']);
        $feedback = Feedback::create($feedbackData);

        if ($request->has('images') && $feedback) {
            foreach ($request->images as $key => $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $path = $image->storeAs('images', $filename, 'public');

                $feedback->images()->create([
                    'image' => $path,
                ]);
            }
        }

        return response()->json(['message' => 'Feedback submitted successfully']);
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $image = $request->file('upload');
            $filename = time() . '_' . $image->getClientOriginalName();

            $path = $image->storeAs('images', $filename, 'public');

            $url = asset('uploads/' . $path);

            return response()->json(['fileName' => $filename, 'uploaded' => 1, 'url' => $url]);
        }
    }
}

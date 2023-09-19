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
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
}

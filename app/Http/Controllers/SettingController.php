<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function saveSetting(Request $request)
    {
        if ($request->hasFile('bg_img')) {
            $image = $request->file('bg_img');
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = $image->storeAs('images', $filename, 'public');
            $requestData = $request->all(); // Get all the request data
            $requestData['bg_img'] = $path; // Update the bg_img field
            Setting::truncate();
            $setting =  Setting::create($requestData); // Create a new setting using the modified data
        } else {
            Setting::truncate();
            $setting =  Setting::create($request->except('bg_img')); // Create a new setting excluding bg_img
        }
        if ($request->has('images')) {
            foreach ($request->images as $key => $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $path = $image->storeAs('images', $filename, 'public');

                // Create a new SettingImage record and associate it with the setting
                $setting->images()->create([
                    'image' => $path,
                ]);
            }
        }
        session()->flash('success', 'Setting updated successfully');
        return redirect()->back();
    }

    public function deleteReviewImage($imageId)
    {
        $media = Media::find($imageId);

        if (!$media) {
            return response()->json(['message' => 'Image not found'], 404);
        }

        // Delete the file from storage
        Storage::delete('public/' . $media->image);

        // Delete the media record
        $media->delete();

        return response()->json(['message' => 'Image deleted successfully']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

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
            Setting::create($requestData); // Create a new setting using the modified data
        } else {
            Setting::truncate();
            Setting::create($request->except('bg_img')); // Create a new setting excluding bg_img
        }

        return redirect()->back();
    }
}

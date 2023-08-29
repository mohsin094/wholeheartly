<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function saveSetting(Request $request){
        // dd($request->all());
        $setting = Setting::first();
        $setting->delete();
        Setting::create($request->all());
        return redirect()->back();
    }
}

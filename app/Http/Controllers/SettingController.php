<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function saveSetting(Request $request){
        Setting::create($request->all());
    }
}

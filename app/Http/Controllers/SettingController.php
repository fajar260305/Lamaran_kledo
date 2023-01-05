<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function update(Request $request, $value)
    {
        // return $request;
        $validate = $request->validate([
            'key' => '',
            'value' => ''
        ]);
        // return $request;

        $setting = Setting::findOrFail($value);
        $setting->update($validate);

        // dd($setting);
        return response()->json($setting);
    }
}

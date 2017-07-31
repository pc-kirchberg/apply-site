<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function create(Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'class' => 'required',
            'pos1' => 'required',
            'pos2' => 'required',
            'email' => 'required',
            'phone' => 'nullable|phone',
        ]);

        /** @noinspection PhpDynamicAsStaticMethodCallInspection */
        $application = Application::create($request->all());

        return view('thankyou', ['sms' => $request->has('phone')]);
    }
}

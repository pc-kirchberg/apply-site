<?php

namespace App\Http\Controllers;

use App\Application;
use App\Notifications\Confirm;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function create(Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'class' => 'required',
            'pos1' => 'required|different:pos2',
            'pos2' => 'required',
            'email' => 'required',
            'phone' => 'nullable|phone',
        ], [
            'pos1.required' => 'Your two positions must be different'
        ]);

        /** @noinspection PhpDynamicAsStaticMethodCallInspection */
        $application = Application::create($request->all());

        $application->notify(new Confirm());

        return view('thankyou', ['sms' => $request->has('phone')]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Notifications\Issue as IssueNotify;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;

class IssueController extends Controller
{

    public function create_issue(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'topic' => 'required',
            'issue' => 'required',
        ])->validate(); 

        Http::post('https://discord.com/api/webhooks/1224763076394483844/FqAGxvwmfi1GGzE4Mf6gaEIrR4YRO91EVe817OQojHACEjMTGgQePXNyNj9R6DNTgQmq', [
            'content' => 'There is new issue!',
            'embeds' => [
                [
                    'author' => [
                        'name' => $request->name . ' ' . $request->last_name,
                    ],
                    'description' => $request->issue,
                    'fields' => [
                        'name' => 'E-mail',
                        'value' => $request->email,
                        'inline' => False,
                    ],
                    'footer' => [
                        'text' => 'Date: '. Date::now(),
                    ]
                ]
            ],
        ]);

        return back()->with('message', 'Issue successful created! We will send answer to Your e-mail.');
    }

}

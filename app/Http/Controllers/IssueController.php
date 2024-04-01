<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Notifications\Issue as IssueNotify;
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

        $notifiable = " ";

        $issue = Issue::create($request->all());
        // $issue->notify(new IssueNotify($notifiable));
        Notification::send(Issue::class, new IssueNotify());

        return back()->with('message', 'Issue successful created! We will send answer to Your e-mail.');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IssueController extends Controller
{
    public function create_issue(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'topic' => 'required',
            'issue' => 'required',
        ])->validate();

        Issue::create($request->all());

        return back()->with('message', 'Issue successful created! We will send answer to Your e-mail.');
    }
}

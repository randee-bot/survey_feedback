<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyFeedback;

class SurveyController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'customer' => 'nullable',
            'comments' => 'nullable',
        ]);

        $surveyFeedback = new SurveyFeedback();
        $surveyFeedback->customer = $request->input('customer');
        $surveyFeedback->comments = $request->input('comments');
        $surveyFeedback->save();

        return redirect()->route('thank_you');
}
}
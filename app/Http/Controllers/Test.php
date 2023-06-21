<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class Test extends Controller
{
    // public function sample()
    // {
    //     try {
    //         $dbconnect = DB::connection()->getPDO();
    //         $dbname = DB::connection()->getDatabaseName();
    //         echo "Connected successfully to the database. Database name is :".$dbname;
    //      } catch(Exception $e) {
    //         echo "Error in connecting to the database";
    //      }
    // }

    public function verify(Request $request){
        $id=$request->input('id');
        $verify_id=DB::select('select * from dbo.survey_feedback where ticket_id =?',[$id]);

        return view('details',['anything'=>$verify_id]);
      
    }

    public function insert(Request $request) {
        $comments = $request->input('comments');
        $customer = $request->input('customer');
        $id = $request->input('id');
        DB::update('UPDATE dbo.survey_feedback SET additional_comments = ?,customer_name = ?  where ticket_id = ? ',[$comments,$customer,$id]);

        return view('thank_you');
     }
    //  public function fetchid(Request $request){
    //      $id = $request->input('id');

    //  }
    public function verifyb(Request $request){
        $id=$request->input('id');
        $verify_id=DB::select('select * from dbo.survey_feedback where ticket_id =?',[$id]);
       
        return view('surveyfeedback',['mydata'=>$verify_id]);
      
    }
  }

//     public function showTestView()
// {
//     // Assuming you fetch the feedback submitted status from the database
//     $feedbackSubmitted = DB::table('dbo.survey_feedback')->where('ticket_id', $ticketId)->exists();

//     return view('test', ['feedbackSubmitted' => $feedbackSubmitted]);
// }

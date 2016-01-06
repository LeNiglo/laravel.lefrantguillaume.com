<?php

namespace LefrantGuillaume\Http\Controllers;

use Illuminate\Http\Request;
use LefrantGuillaume\Email;
use LefrantGuillaume\Experience;
use LefrantGuillaume\Http\Requests;
use LefrantGuillaume\Skill;
use LefrantGuillaume\Study;
use LefrantGuillaume\User;

class SiteController extends Controller
{

    public function __construct()
    {
        $this->me = User::first();
    }

    public function home()
    {
        return view('welcome');
    }

    public function cv()
    {

        $studies = Study::orderBy('year', 'DESC')->get();
        $skills = Skill::orderBy('progress', 'DESC')->get();
        $experiences = Experience::orderBy('begin_date', 'ASC')->get();

        return view('curriculum')->with([
            "me" => $this->me,
            "studies" => $studies,
            "skills" => $skills,
            "experiences" => $experiences
        ]);
    }

    public function contact()
    {

        return view('contact')->with([
            "me" => $this->me
        ]);
    }

    /*
     * POST routes
     */

    public function sendmail(Request $request)
    {

        if ($request->has(['from', 'email', 'subject', 'body'])) {

            $email = new Email();
            $email->from = $request->input('from');
            $email->email = $request->input('email');
            $email->subject = $request->input('subject');
            $email->body = $request->input('body');
            $email->save();

            return response()->json(['res' => \Mail::send('emails.contact', ['contact' => $email], function ($message) use ($email) {
                $message->to($email->email, $email->from);
                $message->to($this->me->email, $this->me->name);
                $message->subject($email->subject);
            })]);

        } else {
            return response()->json(['res' => false]);
        }

    }

}

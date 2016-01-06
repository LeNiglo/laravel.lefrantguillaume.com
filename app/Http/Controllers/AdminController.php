<?php

namespace LefrantGuillaume\Http\Controllers;

use Illuminate\Http\Request;
use LaravelAnalytics;
use LefrantGuillaume\Email;
use LefrantGuillaume\Experience;
use LefrantGuillaume\Http\Requests;
use LefrantGuillaume\Skill;
use LefrantGuillaume\Study;
use LefrantGuillaume\User;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->data['me'] = User::first();
        $this->data['users'] = User::all();
        $this->data['emailCount'] = Email::count();
        $this->data['emails'] = Email::orderBy('updated_at', 'DESC')->limit(5)->get();
    }

    public function dashboard()
    {

        try {
            $this->data['analytics']["visitors"] = LaravelAnalytics::getVisitorsAndPageViews(30);
            $this->data['analytics']["pages"] = LaravelAnalytics::getMostVisitedPages(30, 5);
        } catch (Exception $e) {
            $this->data['analytics'] = null;
        }

        return view('admin.dashboard')->with($this->data);
    }

    public function details()
    {
        return view('admin.details')->with($this->data);
    }

    public function studies()
    {
        $this->data['studies'] = Study::all();
        return view('admin.studies')->with($this->data);
    }

    public function skills()
    {
        $this->data['skills'] = Skill::all();
        return view('admin.skills')->with($this->data);
    }

    public function experiences()
    {
        $this->data['skills'] = Skill::all();
        $this->data['experiences'] = Experience::all();

        return view('admin.experiences')->with($this->data);
    }

    public function mails()
    {
        $this->data['emails'] = Email::orderBy('updated_at', 'DESC')->simplePaginate(20);
        return view('admin.mails')->with($this->data);
    }

    public function mail($id)
    {
        $this->data['email'] = Email::where("id", "=", $id)->firstOrFail();
        return view('admin.mail')->with($this->data);
    }

    /*
     * POST routes for utilies
     */

    public function changeEmail(Request $request)
    {
        if ($request->has('phone')) {
            $this->me->email2 = $request->input('email2');
            $this->me->phone = $request->input('phone');
            $this->me->save();
            return redirect()->route('admin::details')->with('status', 'Email updated!');
        } else {
            return redirect()->route('admin::details')->with('error', 'Phone is required.');
        }
    }

    public function changePassword(Request $request)
    {
        if ($request->has(['old', 'new', 'new2']) && $request->input('new') == $request->input('new2')) {

            if ($this->me->changePassword($request->input('old'), $request->input('new')))
                return redirect()->route('admin::details')->with('status', 'Password Changed!');
            else
                return redirect()->route('admin::details')->with('error', 'Incorrect old Password!')->withInput();
        } else {
            return redirect()->route('admin::details')->with('error', 'Password didn\'t match!')->withInput();
        }
    }

    public function changeAddress(Request $request)
    {
        if ($request->has('addr1')) {

            $this->me->addr1 = $request->input('addr1');
            $this->me->addr2 = $request->input('addr2');
            $this->me->addr3 = $request->input('addr3');
            $this->me->save();

            return redirect()->route('admin::details')->with('status', 'Address updated!');
        } else {
            return redirect()->route('admin::details')->with('error', 'Line 1 is required')->withInput();
        }
    }

    public function manageStudy(Request $request)
    {
        if ($request->has(['year', 'school', 'title'])) {
            if ($request->has('id')) {
                $id = $request->input('id');

                $study = Study::where('id', '=', $id)->firstOrFail();
                $study->year = $request->year;
                $study->school = $request->school;
                $study->title = $request->title;
                $study->save();
                return redirect()->route('admin::studies')->with('status', 'Study updated!');
            } else {
                $study = Study::firstOrNew([
                    "year" => $request->year,
                    "school" => $request->school,
                    "title" => $request->title
                ]);
                $study->save();
                return redirect()->route('admin::studies')->with('status', 'Study created!');
            }
        } elseif ($request->has(['delete', 'id'])) {
            return response()->json(['res' => Study::where('id', '=', $request->input('id'))->delete()]);
        } else {
            return redirect()->route('admin::studies')->with('error', 'Missing parameter')->withInput();
        }

    }

    public function manageSkill(Request $request)
    {
        if ($request->has(['name', 'progress'])) {
            if ($request->has('id')) {
                $id = $request->input('id');

                $skill = Skill::where('id', '=', $id)->firstOrFail();
                $skill->name = $request->name;
                $skill->progress = $request->progress;
                $skill->save();
                return redirect()->route('admin::skills')->with('status', 'Skill updated!');
            } else {
                $skill = Skill::firstOrNew([
                    "name" => $request->name,
                    "progress" => $request->progress
                ]);
                $skill->save();
                return redirect()->route('admin::skills')->with('status', 'Study created!');
            }
        } elseif ($request->has(['delete', 'id'])) {
            Skill::where('id', '=', $request->input('id'))->first()->experiences()->detach();
            return response()->json(['res' => Skill::where('id', '=', $request->input('id'))->delete()]);
        } else {
            return redirect()->route('admin::skills')->with('error', 'Missing parameter')->withInput();
        }

    }

    public function manageExperience(Request $request)
    {
        if ($request->has(['begin_date', 'end_date', 'company', 'subject', 'rating'])) {
            if ($request->has('id')) {
                $id = $request->input('id');

                $experience = Experience::where('id', '=', $id)->firstOrFail();
                $experience->begin_date = $request->begin_date;
                $experience->end_date = $request->end_date;
                $experience->company = $request->company;
                $experience->subject = $request->subject;
                $experience->rating = $request->rating;
                $experience->commentary = $request->has('commentary') ? $request->commentary : "";
                $experience->save();

                $skillIds = explode(",", $request->skills);
                foreach ($skillIds as $id) {
                    if ($experience->skills()->where('id', '=', $id)->first() == null)
                        $experience->skills()->save(Skill::where('id', '=', $id)->first());
                }

                return redirect()->route('admin::experiences')->with('status', 'Working Experience updated!');
            } else {
                $experience = Experience::firstOrNew([
                    "begin_date" => $request->begin_date,
                    "end_date" => $request->end_date,
                    "company" => $request->company,
                    "subject" => $request->subject,
                    "rating" => $request->rating,
                    "commentary" => $request->commentary
                ]);
                $experience->save();

                $skillIds = explode(",", $request->skills);
                foreach ($skillIds as $id) {
                    if ($experience->skills()->where('id', '=', $id)->first() == null)
                        $experience->skills()->save(Skill::where('id', '=', $id)->first());
                }

                return redirect()->route('admin::experiences')->with('status', 'Working Experience created!');
            }
        } elseif ($request->has(['delete', 'id'])) {
            Experience::where('id', '=', $request->input('id'))->first()->skills()->detach();
            return response()->json(['res' => Experience::where('id', '=', $request->input('id'))->delete()]);
        } else {
            return redirect()->route('admin::experiences')->with('error', 'Missing parameter')->withInput();
        }

    }

}

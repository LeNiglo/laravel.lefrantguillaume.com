<?php

namespace App\Http\Controllers;

use Mail;
use DB;
use Input;

class AjaxController extends Controller {

	public function thumbUp($id)
	{
		$id = intval($id);
		$data = new \stdClass();
		$data->id = $id;
		$data->state = DB::table('skills')->where('id', '=', $id)->increment('thumbs');
		$data->val = DB::table('skills')->where('id', '=', $id)->pluck('thumbs');
		echo json_encode($data);
	}

	public function sendMail()
	{
		Mail::send('emails.test', Input::all(),
			function($message) {
				$datas = Input::all();
				$vars = json_decode($datas['to'], true);
				$message->to($vars['email'], $vars['name']);
				$message->subject($datas['subject']);
			});
		$var = json_decode(Input::get('to'), true);
		echo json_encode(array('state' => DB::table('contacts')->where('email', '=', $var['email'])->increment('contacted'),
			'to' => $var['name']));
	}

	public function checkOutSeen($id)
	{
		$id = intval($id);
		echo json_encode(array('state' => DB::table('check_out')->where('id', '=', $id)->increment('seen')));
	}

	public function inputGoldenBook()
	{
		echo json_encode(array('state' => DB::table('golden_book')->insert(array(
			'name' => (Input::get('from') != "" ? Input::get('from') : "anonymous"),
			'rating' => Input::get('rating-input'),
			'commentary' => Input::get('comm')
			))));
	}

	public function loadGoldenBook()
	{
		dd("GOLDEN BOOK");
		$goldens = DB::table('golden_book')->orderBy('created', 'desc')->take(20)->get();
		foreach ($goldens as $golden) {
			echo '<div class="col-xs-12 col-sm-12 col-md-6"><div class="panel panel-default text-justify"><div class="panel-heading"><h2 class="panel-title"><span>'.
			$golden->name.
			'</span><div class="text-right">';
			$i = 0;
			while ($i < $golden->rating) {
				echo '<i class="glyphicon glyphicon-star"></i>';
				$i++;
			}
			while ($i < 10) {
				echo '<i class="glyphicon glyphicon-star-empty"></i>';
				$i++;
			}
			echo '</div></h2></div><div class="panel-body"><p>'.
			$golden->commentary.
			'</p></div><div class="panel-footer text-right"><em>'.
			date('m-d-o h:i A', strtotime($golden->created)).
			'</em></div></div></div>';
		}

	}

	public function loadAdminContacts()
	{
		$contacts = DB::table('contacts')->get();
		foreach ($contacts as $contact) {
			echo '<tr><th class="id-contact">'.$contact->id.
			'</th><td class="name-contact">'.$contact->name.
			'</td><td class="email-contact">'.$contact->email.
			'</td><td class="color-contact" style="color: '.$contact->color.'">'.$contact->color.
			'</td><td><a class="editContact" data-id="'.$contact->id.
			'"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&#124;&nbsp;<a class="removeContact" data-id="'.$contact->id.
			'"><span class="glyphicon glyphicon-remove"></span></a></td></tr>';
		}
	}

	public function loadAdminCheck()
	{
		$checks = DB::table('check_out')->get();
		foreach ($checks as $check) {
			echo '<tr><th class="id-check">'.$check->id.
			'</th><td class="title-check">'.$check->title.
			'</td><td class="html-check"><code>'.htmlspecialchars($check->html).
			'</code></td><td class="seen-check">'.$check->seen.
			'</td><td><a class="editCheckOut" data-id="'.$check->id.
			'"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&#124;&nbsp;<a class="removeCheckOut" data-id="'.$check->id.
			'"><span class="glyphicon glyphicon-remove"></span></a></td></tr>';
		}
	}

}

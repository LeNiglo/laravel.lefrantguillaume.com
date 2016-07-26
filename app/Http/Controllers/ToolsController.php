<?php

namespace LefrantGuillaume\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
	public function pictureProxying(Request $request)
	{
		if ($request->has('img')) {
			$imginfo = @getimagesize($request->get('img'));
			if ($imginfo) {
				header("Content-type: " . $imginfo['mime']);
				return readfile($request->get('img'));
			} else {
				abort(404);
			}
		} else {
			abort(401);
		}
	}
}

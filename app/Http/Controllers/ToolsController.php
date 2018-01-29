<?php

namespace LefrantGuillaume\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
	public function pictureProxying(Request $request)
	{
		if ($request->has('img')) {
			$imginfo = getimagesize($request->img);
			if (stripos($imginfo['mime'], 'image/') === false) {
				abort(400);
			}
			header("Content-type: ".$imginfo['mime']);
			return readfile($request->img);
		} else {
			abort(401);
		}
	}
}

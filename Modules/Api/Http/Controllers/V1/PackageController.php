<?php

namespace Modules\Api\Http\Controllers\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Api\Http\Controllers\BaseController;

class PackageController extends BaseController
{
	public function postSubcribe(Request $request){
		return 'postSubcribe';
	}

	public function getRenew($id , Request $request){
		return 'getRenew';
	}
}

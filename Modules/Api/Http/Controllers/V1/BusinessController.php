<?php

namespace Modules\Api\Http\Controllers\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Api\Http\Controllers\BaseController;

class BusinessController extends BaseController
{
	public function postCreate(Request $request){
		return 'postCreate';
	}

	public function getDetail($id , Request $request){
		return 'getDetail';
	}
}

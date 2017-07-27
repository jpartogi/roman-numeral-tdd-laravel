<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ConverterController extends BaseController
{

	public function convert(Request $request)
	{
		$romanNumber = $request->number;
        
        $result = 0;

        $response = [
            'result' => $result
        ];

        return response()->json($response);
	}

}
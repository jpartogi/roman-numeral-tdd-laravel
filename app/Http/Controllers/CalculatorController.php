<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CalculatorController extends BaseController
{

	public function add(Request $request)
	{
		$romanNumber1 = $request->number1;
		$romanNumber2 = $request->number2;
        
        $result = 0;

        $response = [
            'result' => $result
        ];

        return response()->json($response);
	}

}
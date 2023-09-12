<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BinaryConverterController extends Controller
{
    public function convert(Request $request)
    {
        $binaryNumber = $request->input('binary_number');
    
        if (!preg_match('/^[01]+$/', $binaryNumber)) {
            return view('converter', ['error' => 'Entrada inválida. Digite apenas 0s e 1s.']);
        }

        $decimalNumber = bindec($binaryNumber);
    
        return view('converter', compact('decimalNumber'));
    }
}

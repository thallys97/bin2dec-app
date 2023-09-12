<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BinaryConverterController extends Controller
{

    public function index()
    {

        return view('index');

    }


    public function convert(Request $request)
    {
        $binaryNumber = $request->input('binary_number');

        // Verifique se a entrada é um número binário válido
        if (!preg_match('/^[01]{1,8}$/', $binaryNumber)) {
            return redirect('/')->with('error', 'Digite apenas 0 ou 1 em até 8 dígitos binários.');
        }

        $decimalNumber = bindec($binaryNumber);

        return view('index', compact('decimalNumber'));
    }
}

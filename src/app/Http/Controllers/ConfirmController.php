<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmController extends Controller
{
    public function index (Request $request)
    {
        $item = [
            'content' => 'パラメータを渡す',
            'txt' => 'テキスト',
            'param' => $request->text

        ];
        return view('index', $item);
    }
}

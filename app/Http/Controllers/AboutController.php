<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
public function about($name = 'Angel', $NIM = '244107020076') {
    return 'My name is '.$name.' and my NIM is '.$NIM;
}
}
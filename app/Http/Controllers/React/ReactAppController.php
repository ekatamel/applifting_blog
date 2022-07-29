<?php

namespace App\Http\Controllers\React;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReactAppController extends Controller
{
    public function renderApp()
    {
      return view("index");
    }
}

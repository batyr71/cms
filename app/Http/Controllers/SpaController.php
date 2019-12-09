<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpaController extends Controller
{
  public function app()
  {
      return view('app');
  }

  public function admin()
  {
      return view('admin');
  }
}

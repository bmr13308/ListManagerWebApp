<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
  public function index()
  {

    $cname = 'selected';

    return view('pages.login');
  }
}

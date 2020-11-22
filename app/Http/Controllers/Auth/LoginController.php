<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function  index()
  {
    return view('pages.login');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'username' => 'required',
      'password' => 'required'
    ]);

    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
      return redirect('list');
    } else {
      return back()->with('status', 'The user name or password was incorrect.
      <br> Please try it again.');
    }
  }
}

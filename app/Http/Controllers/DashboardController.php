<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
  public function index(Request $req) {
      $users = User::query()->paginate(8);

      return view('hi',compact('users'));
  }
}

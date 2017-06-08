<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
      $this->middleware('editor')->except('logout');
  }


    public function index(){
      return view('admin.editor');
    }
}

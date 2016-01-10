<?php

namespace Todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use Todoparrot\Http\Requests;
use Todoparrot\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index(){
      $items = array(
        'items' =>[
          'Pack luggage',
          'Go to airport',
          'Arrive in San Juan'
          ]
        );
        \Debugbar::error('Something is definitely going wrong.');
        return view('welcome');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class SearchController extends Controller
{
   

    public function search()
    {
        return Input::get('query', false);;
    }

    public function filter()
    {
        return Input::get('type', false);;
    }
    

}

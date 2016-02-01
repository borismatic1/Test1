<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;

class AuthorsController extends Controller
{
    public $restful=true;

    public function getIndex(){
        $view = View::make('authors.index',array('name'=>'Bmatic'))->with('age','24');
        $view->location='California';
        $view['specialty']='php';
        $view->title='Authors and books';
        return $view;
    }
}

<?php namespace App\Http\Controllers;
use Request;

class TwigTestController extends Controller {

	public function index($name){
        $gender = Request::input('gender');
        $gender = empty($gender)?'select':$gender;
		return view('twig-test',['name'=>$name,'gender'=>$gender]);
	}

}

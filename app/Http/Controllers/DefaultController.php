<?php
/**
 * Created by PhpStorm.
 * User: Mike-berg
 * Date: 14-08-2017
 * Time: 23:16
 */
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Auth;

class DefaultController extends BaseController{

    public function login() {
        return view('default');
    }


}
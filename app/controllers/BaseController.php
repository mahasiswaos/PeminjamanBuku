<?php

namespace App\Controllers;

use Controller;
use View;

class BaseController extends Controller {

    public function home(){
        return View::make('bootstrap');
    }

    protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}

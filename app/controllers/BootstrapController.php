<?php

namespace App\Controllers;

use App\Controllers\BaseController;

/**
 * Description of BootstrapController
 *
 * @author HENDRA
 */
class BootstrapController extends BaseController {

    public function index() {
        
        return View::make('bootstrap');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Bark;

class UserController extends Controller
{
        public function account() {
                $barks = Bark::all();
                return view('userAccount',compact('barks'));
        }
}

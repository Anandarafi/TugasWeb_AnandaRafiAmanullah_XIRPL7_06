<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;
use App\ModelMobil;
use Auth;
use Validator;

class PageController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
        }
        public function pricing()
        {
            $data['datas']=ModelMobil::all();
            return view('index',$data);
        }
}

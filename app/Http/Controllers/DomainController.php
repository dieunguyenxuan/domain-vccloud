<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Domain;

class DomainController extends Controller
{
    public function getDomain () {
      $data = Domain::select('id','domain','type','register','exprires','update','dept','emaildept','manager','emailregister','nameserver','provider','note','status','updated_at') ->get()->toArray();
      return view('domains',['domain_data'=>$data]);
    }
}

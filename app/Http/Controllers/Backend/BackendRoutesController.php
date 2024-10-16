<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendRoutesController extends Controller
{
    public function dashbordPage()
    {
        return view ('Backend.Master');
    }
}

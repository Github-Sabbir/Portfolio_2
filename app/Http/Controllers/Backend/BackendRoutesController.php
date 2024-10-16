<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendRoutesController extends Controller
{
    public function admin_dashbord()
    {
        return view ('Backend.pages.dashbord');
    }
    public function admin_testimunial()
    {
        return view ('Backend.pages.testimunial');
    }
    public function admin_testimunial_edit()
    {
        return view ('Backend.pages.testimunialEdit');
    }
    public function admin_service()
    {
        return view ('Backend.pages.service');
    }
    public function admin_service_edit()
    {
        return view ('Backend.pages.serviceEdit');
    }
    public function admin_contactForm_edit()
    {
        return view ('Backend.pages.contactEdit');
    }
}

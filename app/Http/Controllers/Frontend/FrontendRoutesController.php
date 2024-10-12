<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendRoutesController extends Controller
{
    public function homePage()
    {
        return view ('Frontend.pages.Home');
    }

    // This function show homePage

    public function aboutPage()
    {
        return view ('Frontend.pages.About');
    }

    // This function show aboutPage

    public function resumePage()
    {
        return view ('Frontend.pages.Resume');
    }

    // This function show resumePage

    public function servicesPage()
    {
        return view ('Frontend.pages.Services');
    }

    // This function show servicesPage

    public function projectsPage()
    {
        return view ('Frontend.pages.Projects');
    }

    // This function show projectsPage

    public function contactPage()
    {
        return view ('Frontend.pages.Contact');
    }
    
    // This function show contactPage

}

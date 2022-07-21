<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // get the alpha training and recognitions details page
    public function atrDetails()
    {

        return view('pages.projectDetails.atr');
    }

    // get the unique college of technology details page
    public function uctDetails()
    {

        return view('pages.projectDetails.uct');
    }

    // get the itec details page
    public function itecDetails()
    {

        return view('pages.projectDetails.itec');
    }
}

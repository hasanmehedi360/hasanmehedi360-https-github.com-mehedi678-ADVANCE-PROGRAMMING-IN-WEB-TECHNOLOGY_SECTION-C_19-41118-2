<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller

    {
        public function index(){
            return view('home');
        }

        
          


            public function service(){
                $name = "Mr. x";
                $id="11-11111-1";
                $dob = "10-10-2010";
                $names=array("Mr. X", "Mr. Y", "Mr. Z");
                return view('service')
                ->with('name', $name)
                ->with('id', $id)
                ->with('dob', $dob)
                ->with('names', $names);
            }

            public function Ourteams(){
                return view('Ourteams');
            }


            public function aboutus(){
                return view('aboutus');
            }


            public function contactus(){
                return view('contactus');
            }

           
    
}

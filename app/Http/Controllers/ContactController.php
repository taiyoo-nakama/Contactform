<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        
        return view('index');
    }
    public function confirm(Request $request)
    {
        $validate_rule=[
            'fullname' => 'required',
        ];
        
        $inputs = $request->all();
        return view('confirm', ['inputs' => $inputs,]);
    }
    
    public function find(Request $request)
    {
        return view('find',['input' => '']);
    }
    public function search(Request $request)
    {
        $item = Contact::find($request->input);
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find',$param);
    }
    public function thanks(Request $request)
    {
        return view('thanks');
    }

}

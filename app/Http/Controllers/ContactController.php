<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(Request $request){

        return view('index');
    }
    public function confirm(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'middlename' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'postcode' => 'required',
            'address' => 'required',
            'opinion' => 'required',
        ]);
        $items = $request->all();
        return view('confirm', ['items' => $items,]);
    }
    public function thanks(Request $request)
    {
        if($request->action === 'back'){
            return redirect()->route('index')->withInput($items);
        }
        return view('thanks');
    }
    public function host(Request $request){
        $items = Contact::all();
        return view('host',['items' => $items]);
    }
    public function search(Request $request){
        $item = Contact::where('name','LIKE',"%{$request->input}%")->get();
        $item = Contact::where('date','LIKE',"%{$request->input}%")->get();
        $item = Contact::where('gender','LIKE',"%{$request->input}%")->get();
        $item = Contact::where('email','LIKE',"%{$request->input}%")->get();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return redirect('host',$param);
    }
    public function bind(Contact $contact)
    {
        $data = [
            'item'=>$contact,
        ];
        return view('contact.binds',$data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(Request $request){
        $items = Contact::all();
        return view('index',['items'=>$items]);
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
    public function host(Request $request)
    {
        $items = Contact::Paginate(10);
        return view('host', ['items' => $items]);
    }
    public function find()
    {
        return view('find',['input' => '']);
    }
    public function search(Request $request){
        $item = Contact::where('fullname','LIKE',"%{$request->input}%")->get();
        $item = Contact::where('updated_at','LIKE',"%{$request->input}%")->get();
        $item = Contact::where('gender','LIKE',"%{$request->input}%")->get();
        $item = Contact::where('email','LIKE',"%{$request->input}%")->get();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('host',$param);
    }
    public function bind(Contact $contact)
    {
        $data = [
            'item'=>$contact,
        ];
        return view('contact.binds',$data);
    }
    public function add(){
        return redirect('/');
    }
    public function create(Request $request)
    {
        $this->validate($request,Contact::$rules);
        $form = $request->all();
        Contact::create($form);
        return redirect('host');
    }
    public function delete(Request $request)
    {
        Contact::find($request ->id)->delete();
        return redirect('host');
    }
}

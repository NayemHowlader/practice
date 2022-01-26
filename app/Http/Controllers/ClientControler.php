<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
class ClientControler extends Controller
{
    public function index(){
        $clients = Client::get();
        return view('client.index')->with('client',$clients);
    }


    public function create(){
        return view('client.create');
    }


    public function store(Request $request){


        $this->validate($request,[
            'name'=>'required|string',
            'email'=>'required|string',
            'phone'=>'required|string',
            'address'=>'required|string'
        ]);
        $clients = new Client;
        $clients->name = $request->name;
        $clients->email = $request->email;
        $clients->phone = $request->phone;
        $clients->address = $request->address;

        $clients->save();
        
        return redirect()->route('client.index');
    }

    public function destroy($id)
    {
       $clients= Client::find($id);
        $clients->delete();
        return redirect()->route('client.index');
    }


    public function edit($id)
    {
        $clients = Client::find($id);
        return view('client.edit',compact('clients'));
    }


    public function update(Request $request, $id)
    {
        
    
        $this->validate($request,[
            'name'=>'required|string',
            'email'=>'required|string',
            'phone'=>'required|string',
            'address'=>'required|string'

        ]);
        $clients = Client::find($id);
        $clients->name = $request->name;
        $clients->email = $request->email;
        $clients->phone = $request->phone;
       
        $clients->save();
        return redirect()->route('client.index');
    }

    

}

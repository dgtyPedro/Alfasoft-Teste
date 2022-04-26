<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class Main extends Controller
{
    public function Home()
    {
        $data['contacts'] = Contact::all();
        return view('home', $data);
    }

    public function CreateContact(Request $request)
    {
        if($request->post('_token'))
        {
            $isvalidated = $request->validate([
                'name' => 'required|min:5',
                'contact' => 'required|digits:9',
                'email_address' => 'required|email:rfc,dns'
            ]);

            if($isvalidated)
            {
                $concact = Contact::create($request->except('_token'));
            }else{

            }
            
        }

        return view('createcontact');
    }
}

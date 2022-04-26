<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;


class Main extends Controller
{
    public function Home()
    {
        $data['contacts'] = Contact::all();
        return view('home', $data);
    }

    public function DeleteContact($id)
    {
        Contact::where('id', $id)->delete();
        header('Location: ../');
        exit();
    }

    public function SeeContact($id)
    {
        $data['contact'] = Contact::find($id);
        echo view('seecontact', $data);
    }

    public function EditContact($id)
    {
        Contact::where('id', $id)->delete();
        header('Location: ../');
        exit();
    }

    public function CreateContact(Request $request)
    {

        $data = [];

        if($request->post('_token'))
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:5',
                'contact' => 'required|digits:9',
                'email_address' => 'required|email:rfc,dns'
            ], $messages=[
                'required' => 'The :attribute field is required.',
                'digits' => 'The :attribute field must have 9 digits.',
                'email' => 'The :attribute must be a valid email.',
                'min' => 'The :attribute field must have at least 5 characters'
            ]);

            // $validated = $validator->validated();

            if($validator->fails())
            {
                $errors = $validator->errors();
                $data['errors'] = $errors;  
            }else{
                Contact::create($request->except('_token'));
                $data['response'] = 'Contact created successfully';
                // $validated = $validator->validated();
            }
            
        }

        return view('createcontact', $data);
    }
}

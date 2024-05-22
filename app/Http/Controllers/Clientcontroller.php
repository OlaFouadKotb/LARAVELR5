<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //private $columns = ['clientName', 'phone', 'email', 'website'];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view("clients", compact("clients"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addClient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages=$this->errMsg();
         //return dd($request->all());
        $data = $request->validate([
            'clientName' => 'required|string|min:10|max:100',
            'phone' => 'required|string|min:11|max:15',
            'email' => 'required|email:rfc,dns',
            'website' => 'required|url',
            'city' => 'required',
            'image' => 'required',
        ],$messages);
        $imgExt = $request->image->getClientOriginalExtension();
        $file_name = time() . '.' . $imgExt;
        $path = 'assets/images';
        $request->image->move($path, $file_name);
        $data['image']=$file_name;

        $data['active']=isset($request->active);
        Client::create($data);
        return redirect('clients');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
        return view('showClient', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
        return view('editClient', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = $this->errMsg();
    
        // Validate the incoming request data, including image
        $data = $request->validate([
            'clientName' => 'required|string|min:10|max:100',
            'phone' => 'required|string|min:11|max:15',
            'email' => 'required|email:rfc,dns',
            'website' => 'required|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Allow nullable image
        ], $messages);
    
        // Check if image file is present in the request
        if ($request->hasFile('image')) {
            $imgExt = $request->image->getClientOriginalExtension();
            $file_name = time() . '.' . $imgExt;
            $path = 'assets/images';
            $request->image->move($path, $file_name);
            $data['image'] = $file_name;
        }
    
        // Update client record in the database
        Client::where('id', $id)->update($data);
    
        return redirect('clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Client::where('id', $id)->delete();
        return redirect('clients');
    }

    /**
     * Display the list of trashed resources.
     */
    public function trash()
    {
        $trash = Client::onlyTrashed()->get();
        return view('trashClient', compact('trash'));
    }

    /**
     * Restore the specified resource from trash.
     */
    public function restore(string $id)
    {
        Client::withTrashed()->where('id', $id)->restore();
        return redirect('clients');
    }

    /**
     * Permanently delete the specified resource from storage.
     */
    public function forceDelete(Request $request)
    {
        $id = $request->id;
        Client::withTrashed()->where('id', $id)->forceDelete();
        return redirect('trashClient');
    }
    // error custom message
    public function errMsg()
    {
        return[
            'clientName.required'=>'The Client Name is required',
            'clientName.alpha'=>'Should be letters',
            'clientName.min'=> 'should be more than or equal 10 letters',
            ];
    }
    
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    private $columns = ['clientName', 'phone', 'email', 'website'];

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
        $data = $request->validate([
            'clientName' => 'required|string|min:10|max:100',
            'phone' => 'required|string|min:11|max:15',
            'email' => 'required|email:rfc,dns',
            'website' => 'required|url',
        ]);

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
        $data = $request->validate([
            'clientName' => 'required|string|min:10|max:100',
            'phone' => 'required|string|min:11|max:15',
            'email' => 'required|email:rfc,dns',
            'website' => 'required|url',
        ]);

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
}
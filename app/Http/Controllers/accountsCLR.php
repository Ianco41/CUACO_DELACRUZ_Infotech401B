<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accounts;
use Illuminate\Validation\Rules\Unique;

class accountsCLR extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $account = Accounts::all();
        return view('accounts.index',compact('account'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'brand' => 'required|string|max:255|unique:account',
            'framesize' => 'required|string|max:255',
            'material' => 'required|string|max:255',
            'ratio' => 'required|string|max:255',
            'price' => 'required|integer|min:1',
            'quantity' => 'required|integer|min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10048',
        ]);

        if ($request->hasFile('image')){
            $image=$request->file('image')->store('assets/images','public');
            $validate['image'] = $image;
        }else{
            return back()->withErrors(['image' => 'upload failed, please try again']);
        }

        try{
            Accounts::create($validate);
        } catch(\Exception $e){
            return back()->withErrors(['CD_database' => 'Brand Name Register Already'.$e->getMessage()]);
        }

        return redirect()->route('accounts.index')->with( 'Success','Item Added Successfully');
    }

    public function view()
    {
        $account = Accounts::all();
        return view('accounts.view', compact('account'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $account = Accounts::findOrFail($id);
        return view('accounts.show', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $account = Accounts::findOrFail($id);
       return view('accounts.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'brand' => 'required|string|max:255|unique:account',$id,
            'framesize' => 'required|string|max:255',
            'material' => 'required|string|max:255',
            'ratio' => 'required|string|max:255',
            'price' => 'required|integer|min:1',
            'quantity' => 'required|integer|min:1',
        ]);
        $account = Accounts::findOrFail($id);

        Accounts::create($validate);

        return redirect()->route('accounts.show')->with( 'Success','Item Added Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

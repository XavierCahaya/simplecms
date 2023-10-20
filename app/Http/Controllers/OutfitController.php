<?php

namespace App\Http\Controllers;

use App\Models\Outfit;
use Illuminate\Http\Request;

class OutfitController extends Controller
{
    public function index()
    {
        $outfit = Outfit::all();
        return view('outfitAdd', ['outfit' => $outfit]);
        
    }
    public function create()
    {
        return view('outfitAdd');
    }
    
    public function edit($id)
    {
        $outfit = Outfit::find($id);
        return view('outfitEdit', compact('outfit'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'outfit_name' => 'required',
            'size' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $outfit = Outfit::find($id);
        $outfit->update($validatedData);

        return redirect('home')->with('success', 'Outfit updated successfully!');
    }
    public function delete($id)
    {
    $outfit = Outfit::find($id);
    $outfit->delete();

    return redirect('home')->with('success', 'Outfit deleted successfully!');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'outfit_name' => 'required',
            'size' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);
        Outfit::create($validatedData);
        return redirect('home')->with('success', 'Outfit added successfully!');
    }
}

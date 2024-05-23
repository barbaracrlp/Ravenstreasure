<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignController extends Controller
{

    public function index()
    {
        //
        $designs = Design::all();
        return view('designs.index', compact('designs'));
    }


    public function create()
    {
        //
        return view('designs.create');
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'designer_id' => 'required|exists:designers,id',
            'name' => 'required|string|max:255',
            'collection_id' => 'nullable|exists:collections,id',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'type_id' => 'required|exists:types,id',
            'price' => 'required|numeric',
            'image' => 'nullable|file|image|max:2048',
        ]);

        //de momento voy a guardar las imagenes en public, ya miraré luego como se pueden hacer
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        Design::create($data);

        return redirect()->route('designs.index')->with('success', 'Design created successfully.');
    }

    public function show(Design $design)
    {
        //
        return view('designs.show', compact('design'));
    }

    public function edit(Design $design)
    {
        //
        return view('designs.edit', compact('design'));

    }

    public function update(Request $request, Design $design)
    {
        //
        $request->validate([
            'designer_id' => 'required|exists:designers,id',
            'name' => 'required|string|max:255',
            'collection_id' => 'nullable|exists:collections,id',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'type_id' => 'required|exists:types,id',
            'price' => 'required|numeric',
            'image' => 'nullable|file|image|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $design->update($data);

        return redirect()->route('designs.index')->with('success', 'Design updated successfully.');
    }

    public function destroy(Design $design)
    {
        //

        $design->delete();

        return redirect()->route('designs.index')->with('success', 'Design deleted successfully.');
    }
}

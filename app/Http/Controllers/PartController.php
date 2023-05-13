<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PartController extends Controller
{
    public function index()
    {
        // Retrieve all parts
        $parts = Part::all();
        return response()->json($parts);
    }

    public function store(Request $request)
    {
        // Validate and store a new part
        $request->validate([
            'style_id' => 'required',
            'name' => 'required',
            'color_name' => 'required',
        ]);

        $part = Part::create($request->all());
        return response()->json($part, 201);
    }

    public function show($id)
    {
        // Retrieve a specific part by ID
        $part = Part::findOrFail($id);
        return response()->json($part);
    }

    public function update(Request $request, $id)
    {
        // Validate and update a part
        $request->validate([
            'style_id' => 'required',
            'name' => 'required',
            'color_name' => 'required',
        ]);

        $part = Part::findOrFail($id);
        $part->update($request->all());
        return response()->json($part);
    }

    public function destroy($id)
    {
        // Delete a part
        $part = Part::findOrFail($id);
        $part->delete();
        return response()->json(null, 204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Style;
use Illuminate\Http\Request;
use App\Models\Part;
use App\Http\Controllers\Controller;

class StyleController extends Controller
{
    public function index()
    {
        // Retrieve all styles
        $styles = Style::all();
        return response()->json($styles);
    }

    public function store(Request $request)
    {
        // Validate and store a new style
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $style = Style::create($request->all());
        return response()->json($style, 201);
    }

    public function show($id)
    {
        // Retrieve a specific style by ID
        $style = Style::findOrFail($id);
        return response()->json($style);
    }

    public function update(Request $request, $id)
    {
        // Validate and update a style
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $style = Style::findOrFail($id);
        $style->update($request->all());
        return response()->json($style);
    }

    public function destroy($id)
    {
        // Delete a style
        $style = Style::findOrFail($id);
        $style->delete();
        return response()->json(null, 204);
    }

    public function getPartsByStyle($id)
    {
        // Retrieve style data with associated parts
        $style = Style::with('parts')->findOrFail($id);
        return response()->json($style);
    }
}

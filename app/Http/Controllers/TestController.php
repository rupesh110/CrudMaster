<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return response()->json(Test::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $test = Test::create($data);

        return response()->json($test, 201);
    }

    public function show(Test $test)
    {
        return response()->json($test);
    }

    public function update(Request $request, Test $test)
    {
        $data = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $test->update($data);

        return response()->json($test);
    }

    public function destroy(Test $test)
    {
        $test->delete();

        return response()->json(null, 204);
    }
}

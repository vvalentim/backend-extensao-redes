<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestEntryRequest;
use App\Models\TestEntry;

class TestEntryController extends Controller
{
    public function index()
    {
        return TestEntry::all();
    }

    public function show($id)
    {
        $entry = TestEntry::findOrFail($id);

        return $entry;
    }

    public function store(StoreTestEntryRequest $request)
    {
        $validated = $request->validated();

        $entry = TestEntry::create($validated);

        return response()->json($entry, 201);
    }

    public function update(StoreTestEntryRequest $request, $id)
    {
        $entry = TestEntry::findOrFail($id);

        $validated = $request->validated();

        $entry->update($validated);

        return response()->json($entry, 200);
    }

    public function destroy($id)
    {
        TestEntry::findOrFail($id)->delete();

        return response()->json(null, 204);
    }
}

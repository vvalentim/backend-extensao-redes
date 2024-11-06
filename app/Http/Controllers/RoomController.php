<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        return Room::all();
    }

    public function show($id)
    {
        $room = Room::with(['testEntries'])->findOrFail($id);

        return $room;
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_id' => 'required|exists:projects,id',
            'name' => 'required|min:3|max:30'
        ]);

        $room = Room::create($validated);

        return response()->json($room, 201);
    }

    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|min:3|max:30',
        ]);

        $room->update($validated);

        return response()->json($room, 200);
    }

    public function destroy($id)
    {
        Room::findOrFail($id)->delete();

        return response()->json(null, 204);
    }
}

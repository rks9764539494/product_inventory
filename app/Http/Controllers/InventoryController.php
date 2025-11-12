<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return view('inventory.index',['inventories'=>Inventory::all()]);
    }
    public function create()
    {
        return view('inventory.create');
    }
    public function store(Request $request)
    {
        Inventory::create($request->all());
        return redirect()->route('inventory.index')->with('success', 'Item created successfully!');
    }
    public function show($id)
    {
        return view('inventory.view',['item' => Inventory::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view('inventory.edit',['item' => Inventory::findOrFail($id)]);
    }
    public function update(Request $request, $id)
    {
        $item = Inventory::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('inventory.index')->with('success', 'Item updated successfully!');
    }
    public function destroy($id)
    {
        $item = Inventory::findOrFail($id);
        $item->delete();
        return redirect()->route('inventory.index')->with('success', 'Item deleted successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InventoryController extends Controller
{
    public function index()
    {
        return view('inventory.index',['inventories'=>Inventory::get()]);
    }
    public function create()
    {
        return view('inventory.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:inventories',
            'price' => 'required',
            'description' => 'nullable|string',
            'stock' => 'required',
        ]);
        $item = Inventory::create($validatedData);
        return redirect()->route('inventory.index')->with('success', 'Item created successfully with name: " '. $item->name .' "and stock: "'. $item->stock.'"');
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
        $validatedData = $request->validate([
            'name' => ['required','string','max:255',Rule::unique('inventories')->ignore($id)],
            'price' => 'required',
            'description' => 'nullable|string',
            'stock' => 'required',
        ]);
        $item->update($validatedData);

        return redirect()->route('inventory.index')->with('success', 'Item updated successfully with name: " '. $item->name .' "and stock: "'. $item->stock.'"');
    }
    public function destroy($id)
    {
        $item = Inventory::findOrFail($id);
        $item->delete();
        return redirect()->route('inventory.index')->with('success', 'Item deleted successfully!');
    }
}

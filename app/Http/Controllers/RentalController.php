<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\RentalPs;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function create() {
        return view('create', ["brands" => Brand::all()]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            "jenis" => 'required|unique:rental_ps|string:',
            "harga" => 'required|string|min:4',
            "per_week" => 'required|string|min:5',
            "brand_id" => 'required',
        ]);

        RentalPs::create($validateData);

        return redirect('/#pricelist')->with('success', 'Rental berhasil ditambahkan');
    }
    
    public function show(RentalPs $id) {
        return view('show', [
            'rentalps' => $id,
        ]);
    }
    
    public function edit(RentalPs $id) {
        return view('update', ["rentalps" => $id, "brands" => Brand::all()]);
    }
    
    public function update(Request $request, $id) {
        $rentalps = RentalPs::findOrFail($id);
        $validateData = $request->validate([
            "jenis" => 'required|unique:rental_ps|string:',
            "harga" => 'required|string|min:4',
            "per_week" => 'required|string|min:5',
            "brand_id" => 'required',
        ]);

        $rentalps->update($validateData);

        return redirect("/show/$id")->with('success', 'Rental berhasil diubah');
    }
    
    public function destroy($id) {
        $rentalps = RentalPs::findOrFail($id);
        $rentalps->delete();

        return redirect('/#pricelist')->with('success', 'Rental berhasil dihapus');
    }
}

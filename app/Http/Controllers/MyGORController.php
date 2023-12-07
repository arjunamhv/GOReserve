<?php

namespace App\Http\Controllers;

use App\Models\Gor;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use App\Models\Field;
use App\Models\Type;

use Illuminate\Http\Request;


class MyGORController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($userId)
    {
        $gorData = Gor::where('user_id', $userId)->first();
        if ($gorData && isset($gorData->address)) {
            $gorData->address = json_decode($gorData->address, true);

            $namaProvinsi = Province::find($gorData->address['provinsi'])->name;
            $namaKota = Regency::find($gorData->address['kota'])->name;
            $namaKecamatan = District::find($gorData->address['kecamatan'])->name;
            $namaKelurahan = Village::find($gorData->address['kelurahan'])->name;

            // Create a new array with modifications
            $updatedAddress = [
                'provinsi' => $namaProvinsi,
                'kota' => $namaKota,
                'kecamatan' => $namaKecamatan,
                'kelurahan' => $namaKelurahan,
                'detailAlamat' => $gorData->address['detailAlamat'],
            ];

            // Update the decoded address with names
            $gorData->address = $updatedAddress;

        }
        if ($gorData && isset($gorData->gor_photos)) {
            $gorData->gor_photos = json_decode($gorData->gor_photos, true);
        }
        
        if ($gorData && isset($gorData->facility)) {
            $gorData->facility = json_decode($gorData->facility, true);
        }
        $fieldsData = Field::where('gor_id', $gorData->id)->get();
        $types = Type::all();

        foreach ($fieldsData as $field) {
            $field->type = $types->where('id', $field->type)->first();

        }
        return view('admin.mygor', ['gorData' => $gorData, 'fieldsData' => $fieldsData]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GOR $gor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gor $gor)
    {
        //
    }
}

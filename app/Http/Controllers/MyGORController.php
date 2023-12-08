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
     * Display the specified resource.
     */
    public function show($userId)
    {
        $gorData = Gor::where('user_id', $userId)->first();
        if ($gorData && isset($gorData->address)) {
            $gorData->address = json_decode($gorData->address, true);

            $namaProvinsi = Province::where('name', $gorData->address['provinsi'])->first();
            $namaKota = Regency::where('name', $gorData->address['kota'])->first();
            $namaKecamatan = District::where('name', $gorData->address['kecamatan'])->first();
            $namaKelurahan = Village::where('name', $gorData->address['kelurahan'])->first();

            // Create a new array with modifications
            $updatedAddress = [
                'provinsi' => $namaProvinsi->name,
                'kota' => $namaKota->name,
                'kecamatan' => $namaKecamatan->name,
                'kelurahan' => $namaKelurahan->name,
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
}

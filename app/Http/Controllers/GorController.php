<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGorRequest;
use App\Http\Requests\UpdateGorRequest;

use App\Models\Gor;
use App\Models\User;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GorController extends Controller
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
    public function store(StoreGorRequest $request)
    {
        $validate = $request->validated();

        //gor banner
        $gorbanner = $validate['inpgorbanner'];
        $filename = time() . '_' . $gorbanner->getClientOriginalName();
        $path = 'images/gorbanner/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($gorbanner));

        //gor photos
        $gorPhotos = $validate['inpgorphotos'];
        $photoPaths = [];
        foreach ($gorPhotos as $photo) {
            $photoFilename = time() . $photo->getClientOriginalName();
            $photoPath = 'images/gorphotos/' . $photoFilename;
            Storage::disk('public')->put($photoPath, file_get_contents($photo));
            $photoPaths[] = $photoPath;
        }

        // Address
        $idProvinsi = $validate['inpprovinsi'];
        $idKota = $validate['inpkota'];
        $idKecamatan = $validate['inpkecamatan'];
        $idKelurahan = $validate['inpkelurahan'];

        $detailAlamat = $validate['inpdetail_alamat'];

        // Combine address components into an array
        $alamat = [
            'provinsi' => $idProvinsi,
            'kota' => $idKota,
            'kecamatan' => $idKecamatan,
            'kelurahan' => $idKelurahan,
            'detailAlamat' => $detailAlamat,
        ];


        //slug
        $slug =  Str::slug($validate['inpgorname']). '-' . uniqid();

        $gor = new Gor();
        $gor->user_id = $request->user_id;
        $gor->gor_banner = $filename;
        $gor->gor_photos = json_encode($photoPaths);
        $gor->name = $validate['inpgorname'];
        $gor->slug = $slug;
        $gor->address = json_encode($alamat);
        $gor->contact = $validate['inpgorcontact'];
        $gor->opening_hour = $validate['inpstartTime'];
        $gor->closing_hour = $validate['inpendTime'];
        $gor->facility = json_encode($request->inpfacilities);
        $gor->save();

        $user = User::find($request->user_id);
        $user->is_admin = true;
        $user->save();
        
        return redirect()->route('admin-dashboard')->with('message', 'Registrasi GOR Berhasil!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Gor $gor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gorData = Gor::find($id);
        if ($gorData && isset($gorData->address)) {
            $gorData->address = json_decode($gorData->address, true);
        }
        if ($gorData && isset($gorData->gor_photos)) {
            $gorData->gor_photos = json_decode($gorData->gor_photos, true);
        }
        if ($gorData && isset($gorData->facility)) {
            $gorData->facility = json_decode($gorData->facility, true);
        }
        $provinces = Province::all();
        $cities = Regency::where('province_id', $gorData->address['provinsi'])->get();
        $districts = District::where('regency_id', $gorData->address['kota'])->get();
        $sub_districts = Village::where('district_id', $gorData->address['kecamatan'])->get();
        return view('admin.goredit', compact('gorData', 'provinces', 'cities', 'districts', 'sub_districts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGorRequest $request, $id)
    {
        $validate = $request->validated();
        $gor = Gor::find($id);

        // gor banner
        if ($request->hasFile('inpgorbanner')) {
            $gorbanner = $validate['inpgorbanner'];
            $filename = time() . '_' . $gorbanner->getClientOriginalName();
            $path = 'images/gorbanner/' . $filename;
            Storage::disk('public')->put($path, file_get_contents($gorbanner));
        } else {
            $filename = $gor->gor_banner;
        }

        // gor photos
        if ($request->hasFile('inpgorphotos')) {
            $gorPhotos = $validate['inpgorphotos'];
            $photoPaths = [];
            foreach ($gorPhotos as $photo) {
                $photoFilename = time() . $photo->getClientOriginalName();
                $photoPath = 'images/gorphotos/' . $photoFilename;
                Storage::disk('public')->put($photoPath, file_get_contents($photo));
                $photoPaths[] = $photoPath;
            }
        } else {
            $photoPaths = json_decode($gor->gor_photos);
        }

        // Address
        $idProvinsi = $validate['inpprovinsi'];
        $idKota = $validate['inpkota'];
        $idKecamatan = $validate['inpkecamatan'];
        $idKelurahan = $validate['inpkelurahan'];

        $detailAlamat = $validate['inpdetail_alamat'];

        // Combine address components into an array
        $alamat = [
            'provinsi' => $idProvinsi,
            'kota' => $idKota,
            'kecamatan' => $idKecamatan,
            'kelurahan' => $idKelurahan,
            'detailAlamat' => $detailAlamat,
        ];

        // opening_hour
        $startTime = $validate['inpstartTime'];
        $endTime = $validate['inpendTime'];
        $openingHour = $startTime . '-' . $endTime;


        $gor->gor_banner = $filename;
        $gor->gor_photos = json_encode($photoPaths);
        $gor->name = $validate['inpgorname'];
        $gor->address = json_encode($alamat);
        $gor->contact = $validate['inpgorcontact'];
        $gor->opening_hour = $validate['inpstartTime'];
        $gor->closing_hour = $validate['inpendTime'];
        $gor->facility = json_encode($request->inpfacilities);
        $gor->save();

        return redirect()->route('mygor.show', ['id' => $gor->user_id])->with('success', 'berhasil mengupdate data');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gor $gor)
    {
        //
    }
}

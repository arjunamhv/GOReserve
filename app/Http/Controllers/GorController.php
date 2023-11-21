<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGORRequest;
use App\Http\Requests\UpdateGORRequest;

use App\Models\Gor;
use App\Models\User;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

use Illuminate\Support\Facades\Storage;

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

        // opening_hour
        $startTime = $validate['inpstartTime'];
        $endTime = $validate['inpendTime'];
        $openingHour = $startTime . '-' . $endTime;

        $gor = new Gor();
        $gor->user_id = $request->user_id;
        $gor->gor_banner = $filename;
        $gor->gor_photos = json_encode($photoPaths);
        $gor->name = $validate['inpgorname'];
        $gor->address = json_encode($alamat);
        $gor->contact = $validate['inpgorcontact'];
        $gor->opening_hour = $openingHour;
        $gor->facility = json_encode($request->inpfacilities);
        $gor->save();

        $user = User::find($request->user_id);
        $user->is_admin = true;
        $user->save();

        return redirect()->route('admin-dashboard')->with('success', 'berhasil menambahkan data');
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
        if ($gorData && isset($gorData->opening_hour)) {
            $separatedTimes = explode('-', $gorData->opening_hour);

            $gorData->opening_hour = [
                'startTime' => $separatedTimes[0],
                'endTime' => $separatedTimes[1]
            ];
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
    public function update(UpdateGORRequest $request, $id)
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
        $gor->opening_hour = $openingHour;
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

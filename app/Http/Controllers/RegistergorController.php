<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class RegistergorController extends Controller
{
    public function Form()
    {
        $provinces = Province::all();
        return view('admin.register', compact('provinces'));
    }
    public function getcity(Request $request)
    {
        $id_province = $request->id_province;
        $cities = Regency::where('province_id', $id_province)->get();
        echo "<option disabled selected>Pick one</option>";
        foreach ($cities as $city) {
            echo "<option value='$city->id'>$city->name</option>";
        } 
    }
    public function getdistrict(Request $request)
    {
        $id_city = $request->id_city;
        $districts = District::where("regency_id", $id_city)->get();
        echo "<option disabled selected>Pick one</option>";
        foreach ($districts as $district) {
            echo "<option value='$district->id'>$district->name</option>";
        }
    }
    public function getsubdistrict(Request $request)
    {
        $id_district = $request->id_district;
        $subdistricts = Village::where("district_id", $id_district)->get();
        echo "<option disabled selected>Pick one</option>";
        foreach ($subdistricts as $subdistrict) {
            echo "<option value='$subdistrict->id'>$subdistrict->name</option>";
        }
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'inpgorbanner' => 'image|mimes:png,jpg,jpeg|max:2048',
            'inpgorphotos'=> 'array|min:1',
            'inpgorphotos.*'=> 'image|mimes:jpeg,png,jpg',
            'inpgorname'=> 'required',
            'inpprovinsi'=> 'required',
            'inpkota'=> 'required',
            'inpkecamatan'=> 'required',
            'inpkelurahan'=> 'required',
            'inpdetail_alamat'=> ['required', 'regex:/^[a-zA-Z0-9\s,.]+$/'], // Hanya huruf, angka, spasi, koma, dan titik yang diizinkan
            'inpgorcontact'=> 'required|numeric|min:10',
            'inpstartTime'=> 'required',
            'inpendTime'=> 'required',
            'inpfacilities' => 'required|array|min:1',
            'inpfacilities.*' => 'string',
        ];
    }
    public function messages(): array
    {
        return [
            'inpgorbanner.image' => ':attribute harus berupa gambar',
            'inpgorbanner.mimes' => ':attribute harus berupa gambar dengan format jpeg, png, jpg',
            'inpgorbanner.max' => ':attribute maksimal 2MB',
            'inpgorphotos.array' => ':attribute harus berupa array',
            'inpgorphotos.min' => ':attribute minimal 1 gambar',
            'inpgorphotos.*.image' => ':attribute harus berupa gambar',
            'inpgorphotos.*.mimes' => ':attribute harus berupa gambar dengan format jpeg, png, jpg',
            'inpgorname.required' => ':attribute harus diisi',
            'inpprovinsi.required' => ':attribute harus diisi',
            'inpkota.required' => ':attribute harus diisi',
            'inpkecamatan.required' => ':attribute harus diisi',
            'inpkelurahan.required' => ':attribute harus diisi',
            'inpdetail_alamat.required' => ':attribute harus diisi',
            'inpdetail_alamat.regex' => 'Format :attribute tidak valid',
            'inpgorcontact.required' => ':attribute harus diisi',
            'inpgorcontact.numeric' => ':attribute harus berupa angka',
            'inpgorcontact.min' => ':attribute minimal 10 angka',
            'inpstarttime.required' => ':attribute harus diisi',
            'inpendtime.required' => ':attribute harus diisi',
            'inpfacilities.required' => ':attribute harus diisi',
            'inpfacilities.array' => ':attribute harus berupa array',
            'inpfacilities.min' => ':attribute minimal 1 fasilitas',
            'inpfacilities.*.string' => ':attribute harus berupa Tulisan',
        ]; 
    }
    public function attributes()
    {
        return [
            'inpgorbanner' => 'Banner GOR',
            'inpgorphotos'=> 'Foto GOR',
            'inpgorname'=> 'Nama GOR',
            'inpprovinsi'=> 'Provinsi',
            'inpkota'=> 'Kota',
            'inpkecamatan'=> 'Kecamatan',
            'inpkelurahan'=> 'Kelurahan',
            'inpdetail_alamat'=> 'Detail Alamat',
            'inpgorcontact'=> 'Kontak GOR',
            'inpstarttime'=> 'Jam Buka',
            'inpendtime'=> 'Jam Tutup',
            'inpfacilities.*' => 'Fasilitas',
        ];
    }
}

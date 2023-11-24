<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFieldRequest extends FormRequest
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
            'inpfieldbanner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'inpfieldphotos' => 'required',
            'inpfieldphotos.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'inpfieldname' => 'required',
            'inpfieldtype' => 'required',
            'inpfieldprice' => 'required|numeric',
            'gor_id'=> 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'inpfieldbanner.required' => ':attribute harus diisi',
            'inpfieldbanner.image' => ':attribute harus berupa gambar',
            'inpfieldbanner.mimes' => ':attribute harus berupa gambar dengan format jpeg, png, jpg',
            'inpfieldbanner.max' => ':attribute maksimal 2MB',
            'inpfieldphotos.required' => ':attribute harus diisi',
            'inpfieldphotos.*.image' => ':attribute harus berupa gambar',
            'inpfieldphotos.*.mimes' => ':attribute harus berupa gambar dengan format jpeg, png, jpg',
            'inpfieldname.required' => ':attribute harus diisi',
            'inpfieldtype.required' => ':attribute harus diisi',
            'inpfieldprice.required' => ':attribute harus diisi',
            'inpfieldprice.numeric' => ':attribute harus berupa angka',
        ];
    }
    public function attributes(): array
    {
        return [
            'inpfieldbanner' => 'Banner',
            'inpfieldphotos' => 'Foto',
            'inpfieldname' => 'Nama Lapangan',
            'inpfieldtype' => 'Tipe Lapangan',
            'inpfieldprice' => 'Harga',
        ];
    }
}

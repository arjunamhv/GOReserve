<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFieldRequest extends FormRequest
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
            'inpfieldbanner' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'inpfieldphotos' => 'nullable|array',
            'inpfieldphotos.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'inpfieldname' => 'required|string|max:255',
            'inpfieldtype' => 'required|integer',
        ];
    }
    public function messages(): array
    {
        return [
            'inpfieldbanner.image' => 'Banner harus berupa gambar',
            'inpfieldbanner.mimes' => 'Banner harus berupa gambar dengan format jpeg, png, jpg, gif, svg',
            'inpfieldbanner.max' => 'Ukuran banner maksimal 2MB',
            'inpfieldphotos.array' => 'Foto harus berupa gambar',
            'inpfieldphotos.*.image' => 'Foto harus berupa gambar',
            'inpfieldphotos.*.mimes' => 'Foto harus berupa gambar dengan format jpeg, png, jpg, gif, svg',
            'inpfieldname.required' => 'Nama lapangan harus diisi',
            'inpfieldname.string' => 'Nama lapangan harus berupa string',
            'inpfieldname.max' => 'Nama lapangan maksimal 255 karakter',
            'inpfieldtype.required' => 'Tipe lapangan harus diisi',
            'inpfieldtype.integer' => 'Tipe lapangan harus berupa angka',
        ];
    }
    public function attributes(): array
    {
        return [
            'inpfieldbanner' => 'Banner',
            'inpfieldphotos' => 'Foto',
            'inpfieldname' => 'Nama Lapangan',
            'inpfieldtype' => 'Tipe Lapangan',
        ];
    }
}

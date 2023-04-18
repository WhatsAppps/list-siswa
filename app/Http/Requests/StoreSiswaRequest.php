<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSiswaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => ['required', 'unique:siswas', 'max:100'],
            'lastname' => ['required', 'unique:siswas', 'max:100'],
            'nama' => ['required', 'max:100'],
            'kelas' => ['required', 'numeric', 'min:2'],
            'nis' => ['required', 'numeric', 'min:8'],
            'jurusan' => ['required', 'max:100'],
            'email' => ['required'],
            'alamat' => ['required', 'max:100'],
            'ttl' => ['required'],
            'mobile' => ['required', 'numeric', 'min:12'],
            'image' => 'required|image|max:5000',
            
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email Harus Diisi!',
            'email.unique' => 'Email  Sudah Terpakai!',
            'nama.required' => 'Nama Lengkap Harus Diisi!',
            'firstname.required' => 'Nama Depan Harus Diisi!',
            'lastname.required' => 'Nama Belakang  Harus Diisi!',
            'alamat.required' => 'Alamat Harus Diisi!',
            'ttl.required' => 'Tempat Tanggal Lahir Harus Diisi!',
            'jurusan.required' => 'Nama Jurusan Harus Diisi!',
            'nis.numeric' => 'Nis Harus Berupa Angka!',
            'nis.required' => 'Nis Harus Diisi!',
            'kelas.numeric' => 'Kelas Harus Berupa Angka!',
            'kelas.required' => 'Kelas Harus Diiisi!',
            'mobile.numeric' => 'Nomor Telepon Harus Berupa Angka!',
            'mobile.required' => 'Nomor Telepon Harus Diisi!',
            'image.required' => 'Gambar Harus Diisi!',
        ];
    }

}


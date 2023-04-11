<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateSiswaRequest extends FormRequest
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
            'firstname' => [
                'required',
                'max:100',
                Rule::unique('siswas')->ignore($this->id),
            ],
            'lastname' => [
                'required',
                'max:100',
                Rule::unique('siswas')->ignore($this->id),
            ],
            'nama' => [
                'required',
                'max:100',
                Rule::unique('siswas')->ignore($this->id),
            ],
            'kelas' => ['required', 'numeric', 'min:2'],
            'nis' => ['required', 'numeric', 'min:8'],
            'jurusan' => ['required', 'max:100'],
            'email' => ['required'],
            'alamat' => ['required', 'max:100'],
            'ttl' => ['required'],
            'mobile' => ['required', 'numeric', 'min:12'],
            'image' => 'required|max:5000',
        ];
    }
}

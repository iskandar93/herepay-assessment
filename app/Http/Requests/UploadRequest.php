<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
            'file' => 'required|mimes:xlsx,csv,xls',
        ];
    }

    public function messages(): array
    {
        return [
            'file.required' => 'Please insert file',
            'file.mimes' => 'The file must be a file of type: xlsx, csv, xls.',
        ];
    }
}

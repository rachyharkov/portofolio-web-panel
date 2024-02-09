<?php

namespace App\Http\Requests\Companies;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:1|max:255',
			'email' => 'required|email|unique:companies,email',
			'phone' => 'nullable|string|min:1|max:50|unique:companies,phone',
			'telepon' => 'nullable|string|min:1|max:50',
			'established_at' => 'nullable|date',
			'website' => 'nullable|url',
			'address' => 'nullable|string',
			'fax' => 'nullable|string|min:1|max:50',
			'logo' => 'nullable|image|max:1024',
			'is_active' => 'nullable|boolean',
			'description' => 'nullable|string',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreActivitiesRequest extends FormRequest
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
            'name' => 'required',
            'slug' => 'nullable',
            'image_path' => 'required',
            'content' => 'required',
            'year' => 'required',
        ];
    }
    /**
     * Get custom error messages for specific validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Молимо вас додајте име активности',
            'image_path.required' => 'Молимо вас да додате слику',
            'content.required' => 'Молимо вас додајте содржина',
            'year.required' => 'Одберите годину за активност',
        ];
    }
}

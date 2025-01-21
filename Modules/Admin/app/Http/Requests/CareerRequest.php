<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CareerRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'short_description' => 'required',
            'description' => 'required',
            'job_type_id' => 'required',
            'experience' => 'required|integer|min:0|max:2147483647',
            'state_id' => 'required',
            'city_id' => 'required',
            'sort_order' => 'nullable|integer|min:0|max:2147483647'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Define custom attribute names for validation errors.
     */
    public function attributes()
    {
        return [
            'job_type_id' => 'job type',
            'state_id' => 'state',
            'city_id' => 'city'
        ];
    }

    /**
     * Define custom error messages for specific validation rules.
     */
    public function messages()
    {
        return [
            'sort_order.max' => 'The sort order may not exceed the maximum allowable value.',
            'experience.max' => 'The experience may not exceed the maximum allowable value.'
        ];
    }
}

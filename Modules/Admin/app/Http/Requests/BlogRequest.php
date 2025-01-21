<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $rules = [
            'title' => 'required|max:255',
            'author' => 'max:255',
            'content' => 'required',
            'image' => 'required|file|mimes:jpeg,png,jpg,webp|max:300',
            'banner' => 'required|file|mimes:jpeg,png,jpg,webp|max:300',
            'sort_order' => 'nullable|integer|min:0|max:2147483647'
        ];
        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['image'] = 'nullable|file|mimes:jpeg,png,jpg,webp|max:300';
            $rules['banner'] = 'nullable|file|mimes:jpeg,png,jpg,webp|max:300';
        }
        return $rules;
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Define custom error messages for specific validation rules.
     */
    public function messages()
    {
        return [
            'sort_order.max' => 'The sort order may not exceed the maximum allowable value.'
        ];
    }
}

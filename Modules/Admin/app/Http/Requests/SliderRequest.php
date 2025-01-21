<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $rules = [
            'title' => 'required|max:255',
            'description' => 'nullable|max:500',
            'action_type' => 'required',
            'action_title' => 'nullable|required_if:action_type,url|max:255',
            'action_url' => 'nullable|url|required_if:action_type,url|max:500',
            'media_type' => 'required',
            'image' => 'required_if:media_type,image|file|mimes:jpeg,png,jpg,webp|max:300',
            'image_mobile' => 'required_if:media_type,image|file|mimes:jpeg,png,jpg,webp|max:300',
            'video_thumbnail_image' => 'required_if:media_type,video|file|mimes:jpeg,png,jpg,webp|max:300',
            'video' => 'required_if:media_type,video|file|mimes:mp4,avi,mov|max:5120',
            'video_url_thumbnail_image' => 'required_if:media_type,video_url|file|mimes:jpeg,png,jpg,webp|max:300',
            'video_url' => 'nullable|url|required_if:media_type,video_url|max:500',
            'sort_order' => 'nullable|integer|min:0|max:2147483647'
        ];
        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['image'] = 'nullable|file|mimes:jpeg,png,jpg,webp|max:300';
            $rules['image_mobile'] = 'nullable|file|mimes:jpeg,png,jpg,webp|max:300';
            $rules['thumbnail_image'] = 'nullable|file|mimes:jpeg,png,jpg,webp|max:300';
            $rules['video'] = 'nullable|file|mimes:mp4,avi,mov|max:5120';
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
     * Defines custom error messages for validation rules
     */
    public function messages()
    {
        return [
            'sort_order.max' => 'The sort order may not exceed the maximum allowable value.'
        ];
    }
}

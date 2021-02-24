<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTutorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'enterprise'     => 'required|max:255',
            'documentType' => 'required|in:nie,dni,otros',
            'document' => 'required',
            'name' => 'required',
            'lastName' => 'required',
            'lastName2' => 'required',
            'status' => 'required|in:active,inactive',
            'phone' => 'required|max:15',
            'email' => 'required',
        ];
    }
}

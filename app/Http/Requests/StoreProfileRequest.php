<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PhoneNumber;

class StoreProfileRequest extends FormRequest
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
            'name'  => 'required',
            'contact_no' => 'required',
            'id_no' => 'required',
            'id_file' => 'required|mimes:jpeg,jpg,bmp,png,gif,pdf',
            'profile_photo' => 'required|mimes:jpeg,jpg,bmp,png,gif,pdf',
            'guardian_name' => 'nullable',
            'guardian_contact_no' => 'nullable',
            'guardian_email' => 'nullable|email',
            'guardian_id_no' => 'nullable',
            'school_of_attendance' => 'required',
            'career_interests' => 'required',
            'dietary_requirements' => 'required',
            'tc_accepted' => 'required',
        ];
    }
}

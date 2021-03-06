<?php

namespace App\Http\Requests\AdminPanel;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Academy;

class UpdateAcademyRequest extends FormRequest
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
        $rules = Academy::rules();
        $rules['photos']       = 'sometimes|image|mimes:png,jpg,jpeg';
        $rules['icon']         = 'sometimes|image|mimes:png,jpg,jpeg';
        $rules['main_photo']   = 'sometimes|image|mimes:png,jpg,jpeg';

        return $rules;
    }
}

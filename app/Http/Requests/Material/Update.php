<?php

namespace App\Http\Requests\Material;

use App\Http\Requests\ExceptionInterface;
use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
{
    use ExceptionInterface;
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
            'measure_id'=>'required|integer',
            'category_id'=>'required|integer'
        ];
    }
}

<?php

namespace App\Http\Requests\MeasuresOfMaterial;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\ExceptionInterface;
class Create extends FormRequest 
{
    use ExceptionInterface;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   // use ExceptionInterface;
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
            'measures_id'=>'required|integer',
            'materials_id'=>'required|integer'
        ];
    }
}

<?php

namespace App\Http\Requests\Category;

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
            'name' =>'required|string|max:191|unique:categories',
            'category_id'=>'required|integer'
        ];
    }
}

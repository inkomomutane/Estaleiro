<?php

namespace App\Http\Requests\Invoice;

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
            'status_id'=>'required|integer',
            'payment_type'=>'required|integer'
        ];
    }
}

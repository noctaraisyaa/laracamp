<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreCheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $expiredValidation = date('Y-m', time());
        return [
            'occupation' => 'required|string',
            'card_number' => 'required|numeric',
            'expired' => 'required|date',
            'cvc' => 'required|numeric|min:3'
        ];
    }
}

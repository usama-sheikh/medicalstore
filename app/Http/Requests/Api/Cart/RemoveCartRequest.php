<?php

namespace App\Http\Requests\Api\Cart;

use App\Models\cart;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed $user_id
 * @property mixed $product_id
 */
class RemoveCartRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return cart::$rulesRemoveCart;
    }
}

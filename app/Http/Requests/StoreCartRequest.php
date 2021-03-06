<?php

namespace App\Http\Requests;

use App\Cart;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreCartRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('cart_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'identifier' => [
                'min:0',
                'max:255',
                'required',
                'unique:carts',
            ],
            'instance'   => [
                'min:0',
                'max:155',
                'required',
            ],
        ];
    }
}

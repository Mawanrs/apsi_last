<?php

namespace App\Http\Requests;

use App\Models\Datapelanggan;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDatapelangganRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('datapelanggan_create');
    }

    public function rules()
    {
        return [
            'nama' => [
                'string',
                'nullable',
            ],
            'alamat' => [
                'string',
                'nullable',
            ],
            'nomor_hp' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}

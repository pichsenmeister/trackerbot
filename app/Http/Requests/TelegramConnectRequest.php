<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TelegramConnectRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'app_id' => 'numeric|required|exists:apps,id',
            'chat_id' => 'numeric|required'
        ];
    }
}

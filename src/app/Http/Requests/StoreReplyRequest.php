<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReplyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'replyText' => ['required', 'string'],
            'attachment' => ['sometimes','file', 'mimes:jpg,jpeg,png,pdf'],
            'ticket_id' => ['numeric'],
            'user_id' => ['numeric']
        ];
    }
}

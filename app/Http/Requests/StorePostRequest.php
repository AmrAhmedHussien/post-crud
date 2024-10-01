<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required','string','min:1','max:60',Rule::unique('posts','title')], //as max length is not in requirements i assumed a total of 60 chars
            'content' => ['required','string','min:1','max:1000'], //as max length is not in requirements i assumed a total of 1000 chars,
            'author' => ['required','string','min:1','max:60'], // the author field is preferable to be the logged in user but as long as the requirements didn't have authentication system i added it as a text field
        ];
    }
}

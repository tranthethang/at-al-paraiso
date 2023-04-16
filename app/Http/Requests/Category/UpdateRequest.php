<?php

namespace App\Http\Requests\Category;

use App\Models\CategoryAttributes;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, Rule|array|string>
     */
    public function rules(): array
    {
        return [
            CategoryAttributes::CATEGORY_NAME => 'required|string|min:3|max:128'
        ];
    }
}
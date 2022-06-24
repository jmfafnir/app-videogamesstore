<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;

class UpdateGameRequest extends FormRequest
{
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $valid_categories = Category::all('name');
        $valid_categories = ['Deportivo','Accion','a','b'];

        return [
            'name' => ['required'],
            'developer_company' => ['required'],
            'game_hours' => ['required'],
            'classification' => ['required'],
            'release_date' => ['required'],
            'category_name' => ['required','String'],
            'price' => ['required'],
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
        return [
            'title' => ['required', Rule::unique('projects')->ignore($this->project), 'max:150'],
            'content' => ['nullable'],
            'date_project' => ['nullable','date_format:Y-m-d'],
            'type_id' => ['nullable', 'exixts:types,id']
        ];
    }

    public function messages()
    {
        return [
            'title.require' => 'A title is required',
            'title.unique' => 'There is another project with this title',
            'title.max' => 'The title cannot be longer than 150 characters',
            'type_id.exist' => 'Choose a valid type'
        ];
    }
}

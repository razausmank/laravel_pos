<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePage extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $id = $this->request->get('_method') == "POST" ? ','  : $this->route('page')->id;

        return [
            'name' => 'required',
            'url' => 'required',
            'sort_order' => ['required', 'unique:pages,sort_order,'.$id],
            'parent_page_id' => ['nullable' , 'exists:pages,parent_page_id'.$id ]
        ];
    }
}

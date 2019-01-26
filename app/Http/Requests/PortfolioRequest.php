<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PortfolioRequest extends Request {
     /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
         switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                    return array();
                }
            case 'POST': {
                    return array(
                        'name' => 'required|min:3',
                        'ar_name' => 'required|min:3',
                        'desc' => 'required',
                        'client_name' => 'required',
                        'ar_desc' => 'required',
                        'photo' => 'image',
                        'custom_url' => 'required|unique:projects',
                        'ar_custom_url' => 'required|unique:projects',
                    );
                }
            case 'PUT': {
                    return array(
                    );
                }

            case 'PATCH': {
                    return array(
                        'name' => 'required|min:3',
                        'desc' => 'required',
                        'ar_name' => 'required|min:3',
                        'ar_desc' => 'required',
                        'client_name' => 'required',
                        'photo' => 'image',
                        'custom_url' => 'required|unique:projects,custom_url,' . $this->route('projects'),
                        'ar_custom_url' => 'required|unique:projects,ar_custom_url,' . $this->route('projects'),
                    );
                }
        }
    }

}

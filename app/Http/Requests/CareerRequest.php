<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CareerRequest extends Request {
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
                        'job_title' => 'required|min:3',
                        'job_dep' => 'required|min:3',
                        'job_desc' => 'required|min:3',
                        'location' => 'required|min:3',
                        'deadline' => 'required|min:3',

                    );
                }
            case 'PUT': {
                    return array(
                    );
                }

            case 'PATCH': {
                    return array(
                        'job_title' => 'required|min:3',
                        'job_dep' => 'required|min:3',
                        'job_desc' => 'required|min:3',
                        'location' => 'required|min:3',
                        'deadline' => 'required|min:3',
                    );
                }
        }
    }

}

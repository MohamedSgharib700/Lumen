<?php

namespace App\Http\Controllers;

use App\Contactus;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Subscribe;
use Illuminate\Http\Request;
//=========== add by my ==========//
use App\Http\Requests\ContactUsRequest;
use Maatwebsite\Excel\Facades\Excel;  //============ request for this controller ==========//

class SubscribersController extends Controller
{

    //=======  request and model and view file =============//
    public function __construct( Request $request,Subscribe $model)
    {
        $this->request = $request;
        $this->model = $model;
        $this->view = 'admin/subscribers/';
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if (is_null($this->request->value)) {
            $services = $this->model->paginate(25);
        } else {
            $this->request->flash();
            $services = $this->model->where('email', 'like', "%{$this->request->value}%")
                ->paginate(25);
        }
        $services->setPath('subscribers');
        if ($this->request->ajax()) {
            return response()->json(view($this->view . 'loop', compact('services'))->render());
        }
        return View($this->view . 'index', compact('services'));
    }


    public function exportsubs()
    {
        $users = Subscribe::select('id', 'email')->get();
        Excel::create('subscribers', function($excel) use($users) {
            $excel->sheet('Subscribers Sheet', function($sheet) use($users) {
                $sheet->fromArray($users);
            });
        })->export('xls');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $delete = $this->model->destroy($id);
        if ($delete) {
            if ($this->request->ajax())
                return response()->json(array('status' => 'true', 'message' => trans('lang.deletedsuccessfully')));

            return redirect()->back()->with('failed', trans('lang.deletedsuccessfully'));
        }
        else {
            if ($this->request->ajax())
                return response()->json(array('status' => 'false', trans('lang.deletedfailed')));
            return redirect()->back()->with('failed', trans('lang.deletedfailed'));
        }
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//======== add by me ============//
use App\Add;
use App\Http\Requests\AddRequest;
use Illuminate\Support\Facades\Auth;

//use Auth;

class AddController extends Controller {

    //=======  request and model and view file =============//
    public function __construct(AddRequest $request, Add $model) {

            $this->request = $request;
        $this->model = $model;
        $this->view = 'admin/adds/';
        }



    public function index() {

        if (is_null($this->request->value)) {
            $cats = $this->model->paginate(25);
        } else {
            $this->request->flash();
            $cats = $this->model->where('title', 'like', "%{$this->request->value}%")
                    ->paginate(25);
        }
        $cats->setPath('adds');
        if ($this->request->ajax()) {
            return response()->json(view($this->view . 'loop', compact('cats', 'sections'))->render());
        }
        return View($this->view . 'index', compact('cats'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {

            $cat = $this->model->where('id', $id)->first();
        if ($cat) {
            return View($this->view . 'edit', compact('cat', 'sections'));
        } else {
            abort(404);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $update = $this->model->find($id)->update($this->request->all());
        if ($update) {
            if ($this->request->ajax())
                return response()->json(array('status' => 'true', 'message' => "Update Data done Successfully"));
            return redirect()->back()->with('success', 'Update Section Done');
        }else {
            if ($this->request->ajax())
                return response()->json(array('status' => 'false', 'message' => trans('lang.done')));

            return redirect()->back()->with('failed', 'Update Faild');
        }
        }




    

}

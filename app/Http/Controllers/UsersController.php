<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Orders;
use App\Product;
use App\Role;
use Carbon\Carbon;
use Cron\DayOfMonthField;
use Illuminate\Http\Request;
//======== add by me ============//
use App\User;
use App\Http\Requests\UserRequest;
//use Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\Country;

class UsersController extends Controller {

    //=======  request and model and view file =============//
    public function __construct(UserRequest $request, User $model) {


        $this->request = $request;
        $this->model = $model;
        $this->view = 'admin/users/';
//        $this->middleware('admin');


    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */




    public function index() {
        if (is_null($this->request->value)) {
            $users = $this->model->paginate(25);
        } else {
            $this->request->flash();
            $users = $this->model->where('name', 'like', "%{$this->request->value}%")->where('email', 'like', "%{$this->request->value}%")
                    ->paginate(25);
        }
        $users->setPath('users');
        if ($this->request->ajax()) {
            return response()->json(view($this->view . 'loop', compact('users'))->render());
        }
        return View($this->view . 'index', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $roles =Role::all()->lists('title','id');


        return View($this->view . 'create',  compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *  
     * @return Response
     */
    public function store() {
        $insert = $this->model->create($this->request->all());
        if ($insert) {
            if ($this->request->ajax())
                return response()->json(array('status' => 'true', 'message' => "Add user Done Sucessfully"));
            return redirect()->back()->with('success', trans('lang.addedsuccessfully'));
        }
        else {
            if ($this->request->ajax())
                return response()->json(array('status' => 'false', 'message' => trans('Error')));
            return redirect()->back()->with('failed', trans('lang.Error'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $user = $this->model->where('id', $id)->first();
        if ($user) {
            $roles =Role::all()->lists('title','id');

            return View($this->view . 'edit', compact('user','roles'));
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
                return response()->json(array('status' => 'true', 'message' => "Update Process Done Process"));

            return redirect()->back()->with('success', "Update Process Done Process");
        }else {
            if ($this->request->ajax())
                return response()->json(array('status' => 'false', 'message' => trans('lang.updatedfailed')));

            return redirect()->back()->with('failed', trans('message.updatedfailed'));
        }
    }

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

    public function information() {
        $admin = Admin::where('status', 1)->lists('name', 'id');
        return View($this->view . 'information', compact('admin'));
    }

}

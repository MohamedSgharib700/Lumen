<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Client;
use App\Clients;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//======== add by me ============//
use App\Category;
use App\ProductGalary;


//use Auth;
class ClientsController extends Controller {

    //=======  request and model and view file =============//
    public function __construct(Requests\ClientsRequest $request, Client $model) {
        $this->request = $request;
        $this->model = $model;
        $this->view = 'admin/clients/';
    }

    public function index() {


        if (is_null($this->request->value)) {
            $products = $this->model->paginate(25);
        } else {
            $this->request->flash();
            $products = $this->model->where('name', 'like', "%{$this->request->value}%")
                    ->paginate(25);
        }
        $products->setPath('slider');
        if ($this->request->ajax()) {
            return response()->json(view($this->view . 'loop', compact('products'))->render());
        }
        return View($this->view . 'index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {

        return View($this->view . 'create');
    }

    /**
     * Store a newly created resource in storage.
     *  
     * @return Response
     */
    public function store() {
        $insert = $this->model->create($this->request->all());
        if ($insert) {
            /**
             *  upload product galary
             */


            if ($this->request->ajax())
                return response()->json(array('status' => 'true', 'message' => "Add Product Done Sucessfully"));
            return redirect()->back()->with('success', "Add Product Done Sucessfully");
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
        $product = $this->model->find($id);

        return View($this->view . 'show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {

        $product = $this->model->where('id', $id)->first();

            return View($this->view . 'edit', compact('product'));

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
                return response()->json(array('status' => 'true', 'message' => 'Update Section Done'));
            return redirect()->back()->with('success', 'Update Section Done');
        }else {
            if ($this->request->ajax())
                return response()->json(array('status' => 'false', 'message' => 'Update Faild'));

            return redirect()->back()->with('failed', 'Update Faild');
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






}

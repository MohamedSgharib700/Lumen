<?php

namespace App\Http\Controllers;

use App\Contactus;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//=========== add by my ==========//
use App\Http\Requests\ContactUsRequest;  //============ request for this controller ==========//

class ContactUsController extends Controller
{

    //=======  request and model and view file =============//
    public function __construct(ContactUsRequest $request, Contactus $model)
    {
        $this->request = $request;
        $this->model = $model;
        $this->view = '/contactus';
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $insert = $this->model->create($this->request->all());
        if ($insert) {
            if ($this->request->ajax())
                return response()->json(array('status' => 'true', 'message' => "Done .. Your Message has been sent successfully"));
            return redirect()->back()->with('success', trans('lang.addedsuccessfully'));
        } else {
            if ($this->request->ajax())
                return response()->json(array('status' => 'false', 'message' => trans('lang.addedfailed')));
            return redirect()->back()->with('failed', trans('lang.addedfailed'));
        }
    }

    public function sendcarrer(ContactUsRequest $request ){
      $model = new Contactus();
      $insert = $model->create($request->all());
      if ($insert) {
  //            $message = url('admin/sitemessage/' . $insert->id);
  //            mail('pro.aya1993@gmail.com', 'Message', $message);
          if ($request->ajax())
              return response()->json(array('status' => 'true', 'message' => "Done Successfully, Your Message is Sent"));
          return redirect()->back()->with('success', "Done Successfully, Your Message is Sent");
      }
      else {
          if ($this->request->ajax())
              return response()->json(array('status' => 'false', 'message' => trans('lang.addedfailed')));
          return redirect()->back()->with('failed', trans('lang.addedfailed'));
      }
        $input = Input::all();
        // $rules = array('name'=>'required','email'=>'required|email','message'=>'required' ,'cv'=>'required|mimes:pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {


    }
}

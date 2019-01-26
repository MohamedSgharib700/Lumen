<?php

namespace App\Http\Controllers;

use App\Contactus;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MyInbox;
use App\User;
use Illuminate\Http\Request;
//=========== add by my ==========//
use App\Http\Requests\ContactUsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;  //============ request for this controller ==========//

class MyInboxController extends Controller
{

    //=======  request and model and view file =============//
    public function __construct(Requests\MyInboxRequest $request, MyInbox $model)
    {
        $this->request = $request;
        $this->model = $model;
        $this->view = 'admin/myinbox/';
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */



    public function autocomplete(){


        $term = Str::lower(Input::get('term'));
        $data = User::where('email', 'LIKE', '%'.$term.'%')
            ->take(5)->get();

        foreach ($data as $k => $v) {

            $return_array[] = array( 'id' => $v->id, 'value' => $v->email );

        }
        return Response::json($return_array);
    }

    public function index()
    {
        if (is_null($this->request->value)) {
            $myinbox = $this->model->where('receiver_id','=',Auth::user()->id)->orderBy('created_at', 'desc')->paginate(25);
            $new= $this->model->where('receiver_id','=',Auth::user()->id)->where('status','=','0')->paginate(25);
        } else {
            $this->request->flash();
            $myinbox = $this->model->where('name', 'like', "%{$this->request->value}%")
                ->paginate(25);
        }
        $myinbox->setPath('myinbox');
        if ($this->request->ajax()) {
            return response()->json(view($this->view . 'loop', compact('myinbox','new'))->render());
        }
        return View($this->view . 'index', compact('myinbox','new'));
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
    public function create() {
        $users=User::all()->lists('email','id');
        return View($this->view . 'create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {

        $insert = $this->model->create(['sender_id'=> Auth::user()->id,'receiver_id'=>$this->request['receiver_id'],'subject'=>$this->request['subject'],
            'message'=>$this->request['message'],]);

        if ($insert) {
            if ($this->request->ajax())
                return response()->json(array('status' => 'true', 'message' =>"Done .. This Add Process Done Successfully"));
            return redirect()->back()->with('success', trans('lang.addedsuccessfully'));
        }
        else {
            if ($this->request->ajax())
                return response()->json(array('status' => 'false', 'message' => trans('lang.addedfailed')));
            return redirect()->back()->with('failed', trans('lang.addedfailed'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $myinbox = MyInbox::find($id);
        $delete = $this->model->find($id)->update(['status'=>'1']);


        return View($this->view . 'show', compact('myinbox'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $admin = $this->model->find($id);

        if ($admin) {

            return View($this->view . 'edit', compact('admin'));
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
                return response()->json(array('status' => 'true', 'message' => "Done .. This Add Process Done Successfully"));

            return redirect()->back()->with('success', trans('message.updatedsuccessfully'));
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
        $delete = $this->model->find($id)->update(['status'=>'1']);
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

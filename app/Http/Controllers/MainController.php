<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//=========== add by my ==========//
use App\Http\Requests\MainRequest;  //============ request for this controller ==========//
use App\Main;
use App\Galary;
use App\Subscribe;
//========= admin model =============//
use App;
use Session;

class MainController extends Controller {

    //=======  request and model and view file =============//
    public function __construct(MainRequest $request, Main $model) {
        App::setLocale(Session::get('local'));
        $this->request = $request;
        $this->model = $model;
        $this->view = 'admin/main/';
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $main = $this->model->find(1);
        if ($main) {
            return View($this->view . 'settings', compact('main'));
        } else {
            abort(404);
        }
    }

    public function update() {
        $update = $this->model->find(1)->update($this->request->all());
        if ($update) {
            if ($this->request->ajax())
                return response()->json(array('status' => 'true', 'message' => trans(' Main Details have been updated successfully')));

            return redirect()->back()->with('success', trans('message.updatedsuccessfully'));
        }else {
            if ($this->request->ajax())
                return response()->json(array('status' => 'false', 'message' => trans('lang.updatedfailed')));

            return redirect()->back()->with('failed', trans('message.updatedfailed'));
        }
    }


    public function arindex() {
        $main = $this->model->find(1);
        if ($main) {
            return View($this->view . 'ar_settings', compact('main'));
        } else {
            abort(404);
        }
    }

    public function arupdate() {
        $update = $this->model->find(1)->update($this->request->all());
        if ($update) {
            if ($this->request->ajax())
                return response()->json(array('status' => 'true', 'message' => trans(' Main Details have been updated successfully')));

            return redirect()->back()->with('success', trans('message.updatedsuccessfully'));
        }else {
            if ($this->request->ajax())
                return response()->json(array('status' => 'false', 'message' => trans('lang.updatedfailed')));

            return redirect()->back()->with('failed', trans('message.updatedfailed'));
        }
    }

    public function create() {
        $photoes = Galary::ALL();
        return View($this->view . 'gallary', compact('photoes'));
    }

    public function store() {
        $model = new Galary();
        $insert = $model->create($this->request->all());
        if ($insert) {
            if ($this->request->ajax())
                return response()->json(array('status' => 'true', 'message' => trans('lang.addedsuccessfully')));
            return redirect()->back()->with('success', trans('lang.addedsuccessfully'));
        }
        else {
            if ($this->request->ajax())
                return response()->json(array('status' => 'false', 'message' => trans('lang.addedfailed')));
            return redirect()->back()->with('failed', trans('lang.addedfailed'));
        }
    }

    public function destroy($id) {
        $photo = Galary::find($id);
        $image = 'adminstyle/assets/images/gallery/' . $photo->photo;
        if (file_exists($image) && !empty($photo->photo)) {
            unlink($image);
        }
        $photo->delete();
        return redirect()->back();
    }

    public function subscribers() {
        $model = new Subscribe();
        if (is_null($this->request->value)) {
            $subscribers = $model->paginate(25);
        } else {
            $this->request->flash();
            $subscribers = $model->where('email', 'like', "%{$this->request->value}%")
                    ->paginate(50);
        }
        $subscribers->setPath('subscribers');
        if ($this->request->ajax()) {
            return response()->json(view($this->view . 'loop', compact('subscribers'))->render());
        }
        return View($this->view . 'subscribers', compact('subscribers'));
    }

    public function delsubs($id) {
        $del = Subscribe::find($id);
        $del->delete();
        return redirect()->back();
    }

}

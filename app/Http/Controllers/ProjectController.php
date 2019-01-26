<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use App\ProjectGalary;
use App\ProjecttGalary;
use App\SubCat;
use App\User;
use Illuminate\Http\Request;
//======== add by me ============//
use App\BlogCat;
use App\Blog;
use App\BlogGalary;
use App\Http\Requests\BlogRequest;

//use Auth;

class ProjectController extends Controller {

    //=======  request and model and view file =============//
    public function __construct(Requests\ProjectRequest $request, Project $model) {
        $this->request = $request;
        $this->model = $model;
        $this->view = 'admin/projects/';
    }

    public function index() {
        if (is_null($this->request->value)) {
            $blogs = $this->model->paginate(25);
        } else {
            $this->request->flash();
            $blogs = $this->model->where('name', 'like', "%{$this->request->value}%")
                    ->paginate(25);
        }
        $blogs->setPath('projects');
        if ($this->request->ajax()) {
            return response()->json(view($this->view . 'loop', compact('blogs', 'sections'))->render());
        }
        return View($this->view . 'index', compact('blogs', 'sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $cats = SubCat::all()->lists('name', 'id');
        return View($this->view . 'create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *  
     * @return Response
     */
    public function store() {
        $insert = $this->model->create($this->request->all());
        if ($insert) {
            if ($this->request->hasFile('gallary')) {
                $gallary = $this->request->file('gallary');
                foreach ($gallary as $photo) {
                    $name = str_random(6) . '_' . $photo->getClientOriginalName();
                    $extension = strtolower($photo->getClientOriginalExtension());
                    if ($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif") {
                        $galary = new ProjectGalary();
                        $galary->photo = $name;
                        $galary->project_id = $insert->id;
                        $galary->save();
                        $dest = 'admin-assets/images/projects/';
                        $photo->move($dest, $name);
                    }
                }
            }
            if ($this->request->ajax())
                return response()->json(array('status' => 'true', 'message' => "Add Category Done Sucessfully"));
            return redirect()->back()->with('success', "Add Category Done Sucessfully");
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
        $project = $this->model->find($id);

        return View($this->view . 'show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $blog = $this->model->where('id', $id)->first();
        $cats = SubCat::all()->lists('name', 'id');


        if ($blog) {
            return View($this->view . 'edit', compact('blog', 'cats'));
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
            if ($this->request->hasFile('gallary')) {
                $gallary = $this->request->file('gallary');
                foreach ($gallary as $photo) {
                    $name = str_random(6) . '_' . $photo->getClientOriginalName();
                    $extension = strtolower($photo->getClientOriginalExtension());
                    if ($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif") {
                        $galary = new ProjectGalary();
                        $galary->photo = $name;
                        $galary->project_id = $id;
                        $galary->save();
                        $dest = 'admin-assets/images/projects/';
                        $photo->move($dest, $name);
                    }
                }
            }
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
    public function delgal($id) {
        $photo = ProjectGalary::find($id);
        $image = 'admin-assets/images/projects/' . $photo->photo;
        if (file_exists($image) && !empty($photo->photo)) {
            unlink($image);
        }
        $photo->delete();
        return redirect()->back();
    }

}

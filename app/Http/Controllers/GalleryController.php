<?php

namespace App\Http\Controllers;


use App\Gallery;
use App\Galleryphoto;
use App\Http\Requests\GalleryRequest;
use App\Http\Requests\TagRequest;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests;

//======== add by me ============//

use App\Http\Requests\CategoryRequest;

class GalleryController extends Controller
{
    //=======  request and model and view file =============//
    public function __construct(GalleryRequest $request, Gallery $model)
    {
        $this->request = $request;
        $this->model = $model;
        $this->view = 'admin/gallery/';
    }

    public function index()
    {

        if (is_null($this->request->value)) {//
            $rows = $this->model->paginate(25);
        } else {
            
            $this->request->flash();
            $rows = $this->model->where('photo_Alt', 'like', "%{$this->request->value}%")
                ->paginate(25);
        }

//           return $rows;


        $rows->setPath('gallery');

        // return response()->json(view($this->view . 'loop', compact('rows'))->render());
        if ($this->request->ajax()) {
            return response()->json(view($this->view . 'loop', compact('rows'))->render());

         
            
        }
        return View($this->view . 'index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View($this->view . 'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
//        $this->request->merge(['slug' => $this->request->title_en]);
        $insert = $this->model->create($this->request->except('images'));

        if ($this->request->hasFile('images')) {
//
            $images = $this->request->file('images');
            foreach ($images as $image) {

                $addimage = new galleryphoto;
                $addimage->gallery_id=$insert->id;
                $addimage->image=$image;
                $addimage->save();
            }
        }
        if ($insert) {
//Insert Blog Gallary

            if ($this->request->ajax())
                return response()->json(array('status' => 'true', 'message' => "Add Tour Done Sucessfully"));
            return redirect()->back()->with('success', "Add Tour Done Sucessfully");


        } else {
            if ($this->request->ajax())
                return response()->json(array('status' => 'false', 'message' => trans('Error')));
            return redirect()->back()->with('failed', trans('lang.Error'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
//        $row = $this->model->find($id);
//        if (empty($row)) {
//            abort(404);
//        }
//        return View($this->view . 'single', compact('row'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $row = $this->model->where('id', $id)->first();

        if ($row) {
            return View($this->view . 'edit', compact('row', 'cats'));
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
//return $this->model->find($id);
        $update = $this->model->find($id);
//        return $update;
        $update->update($this->request->except('images'));
//        return $update;

        if ($this->request->hasFile('images')) {
//
            $images = $this->request->file('images');
            foreach ($images as $image) {

                $updateimage = new Galleryphoto;
                $updateimage->gallery_id=$update->id;
                $updateimage->image=$image;
                $updateimage->save();
            }
        }

//        ====================================
//        $update = $this->model->find($id)->update($this->request->all());
        if ($update) {
            if ($this->request->ajax())
                return response()->json(array('status' => 'true', 'message' => 'Update Section Done'));
            return redirect()->back()->with('success', 'Update Section Done');
        } else {
            if ($this->request->ajax())
                return response()->json(array('status' => 'false', 'message' => 'Update Faild'));

            return redirect()->back()->with('failed', 'Update Faild');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $delete = $this->model->destroy($id);
        if ($delete) {
            if ($this->request->ajax())
                return response()->json(array('status' => 'true', 'message' => trans('lang.deletedsuccessfully')));

            return redirect()->back()->with('failed', trans('lang.deletedsuccessfully'));
        } else {
            if ($this->request->ajax())
                return response()->json(array('status' => 'false', trans('lang.deletedfailed')));
            return redirect()->back()->with('failed', trans('lang.deletedfailed'));
        }
    }
}

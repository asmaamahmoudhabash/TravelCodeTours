<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//=========== add by my ==========//
use App\Http\Requests\MainRequest;  //============ request for this controller ==========//
use App\Http\Requests\FeaturesRequest;
use App\Main;
use App\Custom;
use App\Contactus;
use App\Product;
//========= admin model =============//
use App\Subscribe;

class MainController extends Controller {

    //=======  request and model and view file =============//
    public function __construct(MainRequest $request, Main $model) {
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

    public function pages() {
        $main = $this->model->find(1);
        if ($main) {
            return View($this->view . 'pages', compact('main'));
        } else {
            abort(404);
        }
    }



    public function update() {
        $update = $this->model->find(1)->update($this->request->all());
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

    //////////////////////////////////   Meta Pages ///////////////////////////////////////////////////


    public function custom() {
        $model = new Custom();
        $row = $model->find(1);
        if ($row) {
            return View($this->view . 'custom', compact('row'));
        } else {
            abort(404);
        }
    }

    public function edit($id) {
        $default=['header_services'=>0,'header_clients'=>0,'header_blogs'=>0,'header_program'=>0,'header_membership'=>0,'header_accreditation'=>0,'header_teamwork'=>0,
            'home_brief'=>0,'home_services'=>0,'home_testmonial'=>0,'home_posts'=>0];
        $model = new Custom();
        $update1 = $model->find($id)->update($default);
        $update = $model->find($id)->update($this->request->all());
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

    public function updatemeta($id) {
        $model = new Custom();
        $update = $model->find($id)->update($this->request->all());
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

    ////////////////////////////////////////////end meta pages ///////////////////////////////////////////

    public function create() {
        $photoes = Gallary::ALL();
        return View($this->view . 'gallary', compact('photoes'));
    }

    public function store() {
        $model = new Gallary();
        $insert = $model->create($this->request->all());
        if ($insert) {
            if ($this->request->ajax())
                return response()->json(array('status' => 'true', 'message' => "Done .. This Add Process Done Successfully"));
            return redirect()->back()->with('success', trans('lang.addedsuccessfully'));
        }
        else {
            if ($this->request->ajax())
                return response()->json(array('status' => 'false', 'message' => trans('lang.addedfailed')));
            return redirect()->back()->with('failed', trans('lang.addedfailed'));
        }
    }

    public function destroy($id) {
        $photo = Gallary::find($id);
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

    public function contact() {
        $model = new Contactus();
        if (is_null($this->request->value)) {
            $messages = $model->paginate(25);
        } else {
            $this->request->flash();
            $messages = $model->where('name', 'like', "%{$this->request->value}%")
                    ->paginate(25);
        }
        $messages->setPath('sitemessage');
        if ($this->request->ajax()) {
            return response()->json(view($this->view . 'loop1', compact('messages'))->render());
        }
        return View($this->view . 'contactus', compact('messages'));
    }

    public function unseen() {
        $model = new Contactus();
        if (is_null($this->request->value)) {
            $messages = $model->where('seen', 0)->paginate(25);
        } else {
            $this->request->flash();
            $messages = $model->where('name', 'like', "%{$this->request->value}%")
                    ->paginate(25);
        }
        $messages->setPath('sitemessage');
        if ($this->request->ajax()) {
            return response()->json(view($this->view . 'loop1', compact('messages'))->render());
        }
        return View($this->view . 'contactus', compact('messages'));
    }

    public function contactus($id) {
        $model = new Contactus();
        $m = $model->find($id);
        if ($m) {
            $m->seen = 1;
            $m->save();
            return View($this->view . 'message', compact('m'));
        } else {
            abort(404);
        }
    }

    public function delmessage($id) {
        $photo = Contactus::find($id);
        $photo->delete();
        return redirect()->back();
    }

}

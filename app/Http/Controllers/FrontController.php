<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Continent;
use App\Gallery;
use App\Galleryphoto;
use App\Http\Requests\ContactRequest;
use App\Main;
use App\News;
use App\Serviceimage;
use App\Slider;
use App\Tab;
use App\Tag;
use App\Team;
use App\Tour;
use App\Service;
use Illuminate\Http\Request;

use App\Http\Requests;
use PhpParser\Node\Expr\New_;
use Illuminate\Support\Facades\Session;


class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //

        $sliders = Slider::where('status', 1)->take(3)->get();
        $tours = Tour::take(6)->get();
        $continents = Continent::take(6)->get();
        $offers = Tour::where('has_offer', 1)->get();
//       return $offers;

        return view('front.home', compact('sliders', 'tours', 'continents', 'tags', 'offers', 'categories'));


    }



    public function tour($slug)
    {


//        $tour = Tour::find($id);
        $tour = Tour::where('slug',$slug)->first();
        return view('front.tour', compact('tour'));
    }


    public function category($slug,Request $request)

    {
//        return $request->order;
//        $categories=Category::find($id);
        $categories=Category::where('slug',$slug)->first();
//        return $categories;
//        $sorts=Tour::where('category_id',$id)->orderBy('price', 'desc')->paginate(6);
//        return $sorts;
        if($request->has('order')){
        $tours = Tour::where('category_id', $categories->id)->orderBy('price', $request->order)->paginate(4);
        }else{
        $tours = Tour::where('category_id', $categories->id)->paginate(4);
        }
//        return $tours;
        return view('front.category', compact('tours','categories','sorts'));


    }







    public function tourMap($slug)

    {
        $tours=Tour::where('slug',$slug)->first();
        return view('front.tour_map', compact('tours'));


    }


    public function booking()
    {

        return view('front.booking');


    }


    public function gallery()
    {
        $tabs=Tab::has('photoes')->get();
        $galleries=Gallery::has('tab')->get();
        return view('front.gallery',compact('galleries','tabs'));


    }



    public function singleGallery($slug)
    {

        $tours=Tour::take(3)->get();
        $photoes=Gallery::where('slug',$slug)->first();
        $sliders=Galleryphoto::where('gallery_id',$photoes->id)->get();

        return view('front.single_gallery',compact('photoes','sliders','rondoms','tours'));


    }

    public function about()
    {


        $teams = Team::take(3)->get();
        $settings = Main::find(1);
        return view('front.about_us', compact('settings', 'teams'));


    }



    
public function service($slug){


    $services=Service::where('slug',$slug)->first();
    $images=Serviceimage::where('service_id',$services->id)->get();
//    return $images;
    return view('front.service',compact('services','images'));
}



    public function blog(){

        $news=News::paginate(12);


        return view('front.blog',compact('news','tours'));
    }




    public function singleBlog($slug){


        $blogs=News::where('slug',$slug)->first();
        return view('front.single_blog',compact('blogs','tags'));
        
        
    }

    public function contact( ){
        
        
        $mains=Main::find(1);
        return view('front.contact',compact('mains'));
    }



    public function contactus(Request $request)
    {

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'comment' => 'required',
            'cat_id' => 'required',

        ]);
//return "aaaa";
        Contact::create($request->all());
//        flash()->success('sucess send');
        return back();
    }


    public function changeLanguage($language)
    {
       
//        $language = $request->language;

        if (!Session::has('locale')) {
            Session::put('locale', $language);
        } else {
            Session::set('locale', $language);
        }
//        return Session::get('locale');
        return back();
    }



    public function search(Request $request)
        
        
    {
        
        if ($request->input('keyword')) {

//            $categories=Category::find($id);
            $tours = Tour::where('place_en', 'LIKE', '%' . trim($request->input('keyword')) . '%')
                ->orWhere('description_en', 'LIKE', '%' . trim($request->input('keyword')) . '%')
               ->paginate(16);
            return view('front.search', compact('tours','categories'));

        } else {
            return back();
        }


    }


    public function post(Request $request)


    {




        if ($request->input('keyword')) {
            $news = News::where('title', 'LIKE', '%' . trim($request->input('keyword')) . '%')
                ->orWhere('body', 'LIKE', '%'. trim($request->input('keyword')) . '%')
                ->paginate(5);
            return view('front.post_search', compact('news'));

        } else {
            return back();
        }


    }

}

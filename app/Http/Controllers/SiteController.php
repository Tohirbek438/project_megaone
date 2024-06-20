<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AppointmentForm;
use App\Models\Blog;
use App\Models\CategoryForGallery;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Departments;
use App\Models\Gallery;
use App\Models\Header;
use App\Models\InformatinPatient;
use App\Models\Page;
use App\Models\TreatmentDisease;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $header = Header::first();
        $category_for_menu = CategoryForGallery::first();
        $menu_id_for_megaone = TreatmentDisease::first();
        if(isset($header) && isset($category_for_menu) && isset($menu_id_for_megaone)){
            $contacts =  About::all();

            $page_gallery = Page::where('menu_category', $category_for_menu->menu_id)->first();
            $page =$page_gallery;
            $blog_start = Blog::orderBy('id','ASC')->take(1)->get();
            $blog_end = Blog::orderBy('id','DESC')->take(1)->get();
            $forms = AppointmentForm::all();
            return view('site.index',[
                'header' => $header,
                'forms' => $forms,
                'contacts' =>$contacts,
                'page' => $page,
                'menu_id_for_megaone' => $menu_id_for_megaone,
                'blog_start' => $blog_start,
                'blog_end' => $blog_end,
                'happy_patients' => Comment::all(),
                'galleries' => Gallery::all(),
                'page_gallery'=>$page_gallery,
                'categories' => CategoryForGallery::all(),
                'information' => InformatinPatient::first(),
                //
                'appointments' => Page::where('tags','appointments'),
                //
                'departments' => Departments::all(),
            ]);
        }
        else{
          return "xato";
        }

    }



}

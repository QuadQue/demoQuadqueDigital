<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function login()
    {
        return view('auth.login');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function blogDetailed()
    {
        return view('pages.blog-detailed');
    }
    public function blogGrid()
    {
        return view('pages.blog-grid');
    }
    public function blogList()
    {

        $blogs =Blog::Orderby('id','desc')->paginate(4);
        $latest_blogs =Blog::latest()->limit(4)->get();
        $categories = Category::all();
      
        return view('pages.blog-list', ['blogs' => $blogs,'categories' => $categories, 'latest_blogs' => $latest_blogs]);
        
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function home()
    {
        return view('pages.index');
    }
    public function home2()
    {
        return view('pages.index-2');
    }
    public function projectDetailed()
    {
        return view('pages.project-detailed');
    }
    public function project1()
    {
        return view('pages.projects-1');
    }
    public function project2()
    {
        return view('pages.projects-2');
    }
    
    /** show the social media marketing page**/
    public function socialMediaMarketing()
    {
      
        return view('pages.socialMediaMarketing');
    }
    
     /** show the search engine optimization page**/
    public function searchEngineOptimization()
    {
        return view('pages.searchEngineOptimization');
    }
    
    
     /** show the search writing solutions page**/
     public function writingSolutions(){
         
         return view('pages.writingSolutions');
     }
     /** show the online advertising page**/
     public function onlineAdvertising(){
         
         return view('pages.onlineAdvertising');
     }
     
    public function pages404()
    {
        return view('pages.404');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}

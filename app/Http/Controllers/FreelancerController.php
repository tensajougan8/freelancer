<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Freelancer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FreelancerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:freelancer');
    }

    /*
     * After logging as client the dashboard for client
     * @return \Illuminate\Contracts\Support\Referable
     * */
    public function FreelancerDashboard()
    {
        return view('freelancer.dashboard');
    }

    public function FreelancerShowProfile()
    {

        $user = Auth::user();        
        
        $catid = Auth::user()->c_id;
        $current = Auth::user()->id;             
        $categories = DB::table('categories')->where('p_id','0');
        $category = $categories->get();
        $cat = DB::table('categories')->where('id','=',$catid)->get();     
        // $cat1 = $cat->get();
        
    
       
        //return view('freelancer.profile', compact('user'));
        return view('freelancer.profile', array('category'=>$category, 'user'=>$user, 'cat'=> $cat));
    }

    public function firstName(Request $request)
    {
       $freeid = $request->input('fid');

        $this->validate($request,[
        'fname' => ['required', 'string', 'max:255'],
       ]);

        $freelancer = Freelancer::find($freeid);
        $freelancer->fname = $request->get('fname');
        $freelancer->save();
        return redirect()->intended('/freelancer/profile');         
    }

    public function lastName(Request $request)
    {
       $freeid = $request->input('fid');

        $this->validate($request,[
        'lname' => ['required', 'string', 'max:255'],
       ]);

        $freelancer = Freelancer::find($freeid);
        $freelancer->lname = $request->get('lname');
        $freelancer->save();
        return redirect()->intended('/freelancer/profile');         
    }

    public function About(Request $request)
    {
        $freeid = $request->input('fid');
        $this->validate($request,[
        'about' => ['required', 'string', 'max:255'],
       ]);

        $freelancer = Freelancer::find($freeid);
        $freelancer->about = $request->get('about');
        $freelancer->save();
        return redirect()->intended('/freelancer/profile');
    }

    public function Category(Request $request)
    {
        $freeid = $request->input('fid');
        $freelancer = Freelancer::find($freeid);
        $freelancer->c_id = $request->get('cat');
        $freelancer->save();
        return redirect()->intended('/freelancer/profile');
    }
}

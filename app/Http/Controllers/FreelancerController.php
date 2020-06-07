<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Freelancer;
use App\FreelancerProject;
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
        $ca = Auth::user()->id;
        $catid = Auth::user()->c_id;
        $freelancer = Auth::user(); 
       if($catid == null)
       {
		       $job = DB::table('projects')->get();
           	}
           	else
           	{
           		$fp = DB::table('freelancer_projects')->get();   
		        $user = DB::table('freelancer_projects')->where('freelancer_id',Auth::user()->id)->first();
		           if($user == null)
		           	{
		           		
		           		if(blank($fp))
		           		{
		           			$job = DB::table('projects')->where('c_id','=',Auth::user()->c_id)->get();
		           		}
		           		else
		           		{
		           			$job = DB::table('projects')
		           			->where('c_id','=',Auth::user()->c_id)
		           			->get();
		           		}
		           		 
		           	}
		           	else
		           	{
		           		$job = DB::table('projects')
		           		->whereNotIn('id',function($query)
		           				{
		           					$query->select('project_id')->from('freelancer_projects')           					->where('freelancer_id','=',Auth::user()->id);
		           				})
		           		->whereNotIn('id', function($query)
			            {
			            	$query->select('project_id')->from('client_freelancer_projects');
			            })
		                ->get();
			           

		           	}

           	}     
            
	    return view('freelancer.dashboard', array('job'=> $job, 'freelancer'=>$freelancer ));     
    }

    public function FreelancerShowProfile()
    {

        $user = Auth::user();   
        $catid = Auth::user()->c_id;
        $current = Auth::user()->id;             
        $category = DB::table('categories')->where('p_id','0')->get();//fetch title where parent id = 0;
   
        $cat = DB::table('categories')->where('id','=',$catid)->get();//fetch categroy of the current user

        $tag = DB::table('categories')->where('p_id',$catid)->get();//fetch tags having parent id of the category

        $skills = DB::table('freelancer_tags')->where('freelancer_id',$current)->first();
        
        $sk = DB::table('categories')
            ->join('freelancer_tags','category_id','=','categories.id')
            ->where('freelancer_tags.freelancer_id',$current)
            ->get();
            
        return view('freelancer.profile', array('category'=>$category, 'user'=>$user, 'cat'=> $cat, 'tag'=>$tag, 'skills'=>$skills, 'sk'=>$sk));
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
        DB::table('freelancer_tags')->where('freelancer_id',$request->input('fid'))->delete();
        return redirect()->intended('/freelancer/profile');
    }

    public function Tags(Request $request)
    {
        //dd($request);
        DB::table('freelancer_tags')->where('freelancer_id',$request->input('fid'))->delete();
        $freeid = $request->input('fid');
        $freelancer = Freelancer::find($freeid);
        $freelancer->save();
        $freelancer->tag()->attach($request->input('tag'));
        return redirect()->intended('/freelancer/profile');
    }

    public function applyJob(Request $request)
    {
        $entry = new FreelancerProject;
        $entry->freelancer_id = $request->get('fid');
        $entry->project_id = $request->get('jid');
        $entry->req = $request->get('req');
        $entry->save();
        return redirect()->intended('/freelancer');
    }

    public function viewJob(Request $request)
    {
    	$jjid = $request->get('jid');
    	$show = DB::table('projects')->where('id','=',$request->input('jid'))->get();
    	$cat = DB::table('categories')
    	->join('project_tags','category_id','=','categories.id')
            ->where('project_tags.project_id',$request->input('jid'))
            ->get();

    	return view('freelancer.viewjob', array('cat'=>$cat, 'show'=>$show));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Project;
use App\ClientFreelancerProject;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:client');
    }

    /*
     * After logging as client the dashboard for client
     * @return \Illuminate\Contracts\Support\Referable
     * */
    public function clientDashboard()
    {
        return view('client.dashboard');
    }

    public function clientPostJob()
    {
        $current = Auth::user()->id; 
        $categories = DB::table('categories')->where('p_id','0')->get();
        $tag = DB::table('categories')->where('p_id','<>','0')->get();
        return view('client.postjob',array('categories'=>$categories, 'tag'=>$tag));
    }

    public function clientAddJob(Request $request)
    {
        //dd($request);
        $job = new Project;
        $job->job_title = $request->get('title');
        $job->budget = $request->get('amount');
        $job->months = $request->get('months');
        $job->c_id = $request->get('cat');
        $job->about = $request->get('about');
        $job->save();
        $job->tags()->sync($request->get('tags'));
        $job->projects()->sync($request->get('cid'));
    
    }

    public function projectRequest()
    {
        $data = DB::table('freelancers')
        ->join('freelancer_projects','freelancer_projects.freelancer_id','=','freelancers.id')
        ->join('client_projects', 'client_projects.project_id', '=', 'freelancer_projects.project_id')
        ->where('client_projects.client_id','=',Auth::user()->id)
        ->where('freelancer_projects.req','=','0')
        ->whereNotIn('client_projects.project_id', function($query)
        	{
        		$query->select('project_id')->from('client_freelancer_projects');
        	})
        ->get();

        return view('client.request', compact('data'));
    }

    public function acceptRequest(Request $request)
    {
        $dt = new DateTime;
        $newjob = new ClientFreelancerProject;
        $newjob->freelancer_id = $request->get('fid');
        $newjob->client_id = $request->get('cid');
        $newjob->project_id = $request->get('jid');
        $newjob->start_date = $dt->format('Y-m-d');
        $newjob->save();
        $up =  DB::table('freelancer_projects')
        ->where('project_id','=',$request->get('jid'))
        ->where('freelancer_id','=',$request->get('fid'))
        ->update(['req'=> 1]);
        return redirect()->intended('/client/request');
    }

    public function rejectRequest(Request $request)
    {
    	$up =  DB::table('freelancer_projects')->where('project_id','=',$request->get('jid'))->update(['req'=> 2]);
    	return redirect()->intended('/client/request');
    }

    public function myJobs()
    {
        $jobs = DB::('projects')
        ->join('client_projects','client_projects.project_id','=','projects.id')
        ->where('client_projects.client_id','=',Auth::user()->id)
        ->get();
        
    }
}

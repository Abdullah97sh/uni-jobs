<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Saved;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::orderBy('id', 'desc')->paginate(10);

        return view('all-jobs', ['jobs' => $jobs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // add new job

        $formfields = $request->all();
        unset($formfields['_token']);
        if ($request->company_logo == null) {
            unset($formfields['company_logo']);
        }
        $formfields['user_id'] = auth()->user()->id;
        Job::create($formfields);
        return redirect('/')->with('success', "Added Job Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::Find($id);
        $saved = Saved::where('user_id' , auth()->user()->id ? auth()->user()->id : -1)
        ->where('job_id' , $job->id)->get();
        count($saved)>0 ? $saved= true : $saved = false;
        return view('job-details', ['job' => $job , 'saved'=>$saved]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}

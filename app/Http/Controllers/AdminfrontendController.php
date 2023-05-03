<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frontend;
use Illuminate\Support\Facades\Log;

class AdminfrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Frontend::get();
        return view('admin.adminfrontend', compact('details'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminfrontend');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required'],
            'description'=>['required'],
            'duration'=>['required'],
            'commencement'=>['required']
        ]);
        try{
            Frontend::create([
                'title'=>$request->input('title'),
                'description'=>$request->input('description'),
                'duration'=>$request->input('duration'),
                'commencement'=>$request->input('commencement'),
            ]);
            return back();
          }
    
          catch(\Exception $exception){
              Log::info($exception->getMessage());
              return back()->with('error', 'Oops!!! something went wrong');
          }
          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $details = Frontend::findOrfail($id);
        return view('admin.adminfrontend', compact('details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        try{
            $details = Frontend::findOrfail($id);
            $details->update([
                'title'=>$request->input('title'),
                'description'=>$request->input('description'),
                'duration'=>$request->input('duration'),
                'commencement'=>$request->input('commencement'),
            ]);
            return back();
          }
    
          catch(\Exception $exception){
              Log::info($exception->getMessage());
              return back()->with('error', 'Oops!!! something went wrong');
          }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $details = Frontend::findOrfail($id);
        $details->delete();
        return back();
    }
}

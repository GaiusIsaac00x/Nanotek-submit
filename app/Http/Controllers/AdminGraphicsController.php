<?php

namespace App\Http\Controllers;

use App\Models\Graphics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminGraphicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admingraphics');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'title'=>['required'],
                'description'=>['required'],
                'duration'=>['required'],
                'commencement'=>['required']
            ]);
            try{
                Graphics::create([
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
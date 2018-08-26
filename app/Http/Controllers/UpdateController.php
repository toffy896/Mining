<?php

namespace App\Http\Controllers;

use App\Update;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $updates = Update::latest()->paginate(200);


        return view('pro_pages.table',compact('updates'))

            ->with('i', (request()->input('page', 1) - 1) * 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pro_pages.input');
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeclear()
    {
        {
            request()->validate([
    
                'mine' => 'required',
                'reg' => 'required',

    
            ]);
    
    
            Update::create($request->all());
    
    
            return redirect()->route('updates.index')
    
                            ->with('success','Update created successfully.');
        }
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([

            'mine' => 'required',
            'reg' => 'required',
            's1milled' => 'required',
            's2milled' => 'required',
            'bfine' => 'required',
            'percent' => 'required',
            'bgross' => 'required',
            'receipt' => 'required',
            'agency' => 'required',
            'status' => 'required',
            'amount' => 'required',
            'goldsold' => 'required',
            'comment' => 'required',

        ]);


        Update::create($request->all());


        return redirect()->route('updates.index')

                        ->with('success','Update created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Update  $update
     * @return \Illuminate\Http\Response
     */
    public function show(Update $update)
    {
        return view('pro_pages.table',compact('update'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Update  $update
     * @return \Illuminate\Http\Response
     */
    public function edit(Update $update)
    {
        return view('pro_pages.update',compact('update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Update  $update
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Update $update)
    {
        request()->validate([

            'mine' => 'required',
            'reg' => 'required',
            's1milled' => 'required',
            's2milled' => 'required',
            'bfine' => 'required',
            'percent' => 'required',
            'bgross' => 'required',
            'receipt' => 'required',
            'agency' => 'required',
            'status' => 'required',
            'amount' => 'required',
            'goldsold' => 'required',
            'comment' => 'required',


        ]);


        $update->update($request->all());


        return redirect()->route('updates.index')

                        ->with('success','update updated successfully');
    }

 /**
     * Display a listing of the resource.
     *
     * 
     */
    public function calender()

    {

          return view('pages.calender');


    }
    public function upload()

    {

           return view('rep_pages.upload');


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Update  $update
     * @return \Illuminate\Http\Response
     */
    public function destroy(Update $update)
    {
        $update->delete();


        return redirect()->route('updates.index')

                        ->with('success','update deleted successfully');
    }
}

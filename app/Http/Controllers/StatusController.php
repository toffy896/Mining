<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StatusController extends Controller
{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

       
        $statuss = Status::latest()->paginate(200);


        return view('pro_pages.status',compact('statuss'))

            ->with('i', (request()->input('page', 1) - 1) * 200);



    }


    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

       // return view('statuss.create');

    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function showtable()

    {

       return view('pro_pages.table');

    }

    public function inputg()

    {

       return view('pro_pages.input');

    }
    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        // request()->validate([

        //     'name' => 'required',

        //     'detail' => 'required',

        // ]);


        // Status::create($request->all());


        // return redirect()->route('statuss.index')

        //                 ->with('success','Status created successfully.');

    }


    /**

     * Display the specified resource.

     *

     * @param  \App\Status  $status

     * @return \Illuminate\Http\Response

     */

    public function show(Status $status)

    {

        // return view('statuss.show',compact('status'));

    }


    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\status  $status

     * @return \Illuminate\Http\Response

     */

    public function edit(status $status)

    {

    //     return view('statuss.edit',compact('status'));

    }


    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\status  $status

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, status $status)

    {

        //  request()->validate([

        //     'name' => 'required',

        //     'detail' => 'required',

        // ]);


        // $status->update($request->all());


        // return redirect()->route('statuss.index')

        //                 ->with('success','status updated successfully');

    }


    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\status  $status

     * @return \Illuminate\Http\Response

     */

    public function destroy(status $status)

    {

        // $status->delete();


        // return redirect()->route('statuss.index')

        //                 ->with('success','status deleted successfully');

    }

}
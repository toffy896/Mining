<?php


namespace App\Http\Controllers;


use App\Miner;

use Illuminate\Http\Request;


class MinerController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $Miners = Miner::latest()->paginate(200);


        return view('pages.miners',compact('Miners'))

            ->with('i', (request()->input('page', 1) - 1) * 200);

    }


    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('pages.create_prod');

        

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

            'fileno'=> 'required',
             'mine'=> 'required',
             'reg'=> 'required',
              'owner'=> 'required',
              'contact'=> 'required',
               'number'=> 'required',
               'email'=> 'required',
                'location'=> 'required',
                'province'=> 'required',
                 'district'=> 'required',
                 'type'=> 'required',
                  'output'=> 'required',

        ]);


        Miner::create($request->all());


        return redirect()->route('miners.index')

                        ->with('success','Miner created successfully.');

    }


    /**

     * Display the specified resource.

     *

     * @param  \App\Miner  $Miner

     * @return \Illuminate\Http\Response

     */

    public function show(Miner $Miner)

    {

        return view('pages.index_prod',compact('Miner'));

    }


    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Miner  $Miner

     * @return \Illuminate\Http\Response

     */

    public function edit(Miner $Miner)

    {

        return view('pages.contact',compact('Miner'));

    }


    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Miner  $Miner

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Miner $Miner)

    {

         request()->validate([

            'fileno'=> 'required',
             'mine'=> 'required',
             'reg'=> 'required',
              'owner'=> 'required',
              'contact'=> 'required',
               'number'=> 'required',
               'email'=> 'required',
                'location'=> 'required',
                'province'=> 'required',
                 'district'=> 'required',
                 'type'=> 'required',
                  'output'=> 'required',

        ]);


        $Miner->update($request->all());


        return redirect()->route('miners.index')

                        ->with('success','Miner updated successfully');

    }


    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Miner  $Miner

     * @return \Illuminate\Http\Response

     */

    public function destroy(Miner $Miner)

    {

        $Miner->delete();


        return redirect()->route('miners.index')

                        ->with('success','Miner deleted successfully');

    }

}
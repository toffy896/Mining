<?php

namespace App\Http\Controllers;

use App\Report;
use App\Update;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


       /**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function table()
    {
        
    $updates = Update::latest()->paginate(200);
        return view('reports.create-step2',compact('updates'))
        ->with('i', (request()->input('page', 1) - 1) * 200);
    }
    /**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::all();
        return view('reports.index',compact('reports',$reports));
    }
    /**
     * Show the step 1 Form for creating a new report.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep1(Request $request)
    {
        $report = $request->session()->get('report');
        return view('reports.create-step1',compact('report', $report));
    }
 
    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep1(Request $request)
    {
 
        $validatedData = $request->validate([
            'name' => 'required|unique:reports',
            'mine' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'type' => 'required',
            // 'content' => 'required',
            // 'table' => 'required',
            'author' => 'required',
        ]);
 
        if(empty($request->session()->get('report'))){
            $report = new Report();
            $report->fill($validatedData);
            $request->session()->put('report', $report);
        }else{
            $report = $request->session()->get('report');
            $report->fill($validatedData);
            $request->session()->put('report', $report);
        }
 
        return redirect('/reports/step2');
 
    }

     /**
     * Show the step 2 Form for creating a new report.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep2(Request $request)
    {
        $report = $request->session()->get('report');

        $updates = Update::latest()->paginate(200);
        return view('reports.create-step2',compact('updates'))
        ->with('i', (request()->input('page', 1) - 1) * 200);
        
       
    }
 
    /**
     * Post Request to store step2 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep2(Request $request)
    {
        $validatedData = $request->validate(['content' => 'required',]);

        if(empty($request->session()->get('product'))){
            $product = new Product();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }else{
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }
                
        return redirect('/reports/step3');
 
    }
 
    /**
     * Show the Report Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function removeImage(Request $request)
    {
        $report = $request->session()->get('report');
        $report->productImg = null;
        return view('reports.create-step2',compact('report', $report));
    }

    /**
     * Show the Report Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep3(Request $request)
    {
        $report = $request->session()->get('report');
        return view('reports.create-step3',compact('report',$report));
    }
 
    /**
     * Store report
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $report = $request->session()->get('report');
        $report->save();
        return redirect('/reports');
    }

    public function downloadPDF($id)
      {
        $report = Report::find($id);
        return view('reports.pdf', compact('report',$report));
      }

}


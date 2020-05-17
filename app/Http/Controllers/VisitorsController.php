<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator,Redirect,Response;

class VisitorsController extends Controller
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
       $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'msg'  => 'required'
        ]);

        
        $arr = array('msg' => 'Please check phone and email and try again!', 'status' => false);
        if($validator->passes()){ 
            $validator = $request->all();
             $result = Visitor::insert($validator);
            $arr = array('msg' => 'Thanks for contacting!', 'status' => true);
        }
        return Response()->json($arr);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show(Visitor $visitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitor $visitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $visitor)
    {
        //
    }

    public function name(Request $request){

          
        $n = Input::get('N');

        return view('home')->with('n', $n);


    }

     public function ajaxRequest()

    {

        return view('ajaxRequest');

    }

     public function ajaxRequestPost(Request $request)

    {

       // $input = request()->all();

        $data = new Visitor;
        $data->name =$request->input('name');
        $data->phone =$request->input('phone');
        $data->email =$request->input('email');
        $data->msg = $request->input('msg');
        $data->save();


        return response()->json(['success'=>'Got Simple Ajax Request.']);

    }

public function getDownload()
{

    //PDF file is stored under project/public/download/info.pdf

    $file= public_path(). "/docs/khalid-r.pdf";

 

$headers = [

              'Content-Type' => 'application/pdf',

           ];

 

return response()->download($file, 'Resume.pdf', $headers);

}




}

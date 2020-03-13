<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintext;
use Auth;
use App\Page;
use App\Http\Requests\FeedbackRequest;


class FeedbackController extends Controller
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
        $name = (Auth::guest()) ? '': Auth::user()->name;
        $email = (Auth::guest()) ? '': Auth::user()->email;
        $contact = Maintext::where('url','contact')->first();
        return view('feedback',compact('name','email','contact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeedbackRequest $request)
    {
        // dd($request);
        $subject = 'Вам письмо'.$request -> name;
        $body = 'Сообщение'.$request -> body;
        $header = 'Content-type: text/plain; charset=utf-8';
        $emailTo = 'ivan@com';
           mail($emailTo,
                $subject,
                $body,
                $header);
            return redirect('thankyoupage');
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

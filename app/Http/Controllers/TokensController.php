<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Token;

class TokensController extends Controller
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
        $tokenKey = Token::whereRaw('token = ? ', [$request->token])->get()->first();

        if (is_null($tokenKey)) { 
            return response()->json(['errors'=>array(['code'=>404,'message'=>'Incorrect token.'])],404);  
        }else{
            return response()->json(['status'=>'ok'],200);
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
    public function destroy($request)
    {
        $tokenKey = Token::whereRaw('token = ? ', [$request->token])->get()->first();
        if (!$tokenKey) { 
            return response()->json(['status'=>'error','errors'=>array(['code'=>404,'message'=>'Bad Token'])],404);
        }else{
            $tokenKey->delete();
           //OK
            return response()->json(['status'=>'ok'],200);
            }
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data ="";
        return view('web.login')->with('data',$data);
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
       $usuariDB = Usuari::whereRaw('Nick = ? ', [$request->Nick])->get()->first();
        $error = "The username or password is incorrect";
        if (is_null($usuariDB)) {   
            //User not found 
            return redirect('login')->with('data',$error);    
        } else {
            if ($request->Contrasenya == $usuariDB->Contrasenya) {

                //generate token
                $tokenKey = bin2hex(random_bytes(16));
                
                $params = array("token"=>$tokenKey, "usuari_id"=>$usuariDB->id);
                $token = Token::create($params);
                unset($usuariDB->Contrasenya);
                //OK
                return redirect('login')->with('data',$usuariDB);  
            }else{
                //Password incorrect
               return redirect('login')->with('data',$error);  
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

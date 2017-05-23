<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuari;

class LoginWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data ="OK";
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
        $error = "ERROR";
        if (is_null($usuariDB)) {   
            //User not found 
            return view('web.login')->with('data',$error);  
        } else {
            $sha1= sha1($request->Contrasenya);
            unset($request->Contrasenya);
            $request->request->add(['Contrasenya' => $sha1]);
            if ($request->Contrasenya == $usuariDB->Contrasenya) {
                //Delete deprecated token
                $tokenAntiga = Token::whereRaw('usuari_id = ? ', [$usuariDB->id])->get()->first();
                if($tokenAntiga){
                    $tokenAntiga->delete();
                }
                //generate token
                $tokenKey = bin2hex(random_bytes(16));
                
                $params = array("token"=>$tokenKey, "usuari_id"=>$usuariDB->id);
                $token = Token::create($params);
                unset($usuariDB->Contrasenya);
                //OK
                return view('web.profile')->with('data',$usuariDB);
            }else{
                //Password incorrect
               return view('web.login')->with('data',$error);  
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

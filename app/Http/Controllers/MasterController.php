<?php

namespace App\Http\Controllers;
use App\Master_user;
use Illuminate\Http\Request;
class MasterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        
        $data=Master_user::all();
        return $data;
    }
    public function store(Request $request){
        $data           =   new Master_user();
        $data->name     =   $request->input('username');
        $data->phone    =   $request->input('phone');
        $data->gender    =   $request->input('gander');

        $data->save();
        if($data==true){
            $sukses['status']='berhasil';
        }
        return response()->json($sukses);
        
    }
    //
}

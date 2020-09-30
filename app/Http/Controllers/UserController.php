<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Users;

class UserController extends Controller
{
    //
    public function read(){
        $user = DB::table('user')->get();
        $user_elo = Users::withTrashed()->get();

        return view('user',['user'=>$user,'elo'=>$user_elo]);
    }

    public function insert(request $req){
       // DB::table('user')->insert(
         //   [
           //     'nama' => $req->nama, 
            //    'username' => $req->username,
            //    'password' => $req->password,
          //  ]
        //);
         $user = new Users;
         $user->nama = $req->nama;
         $user->username = $req->username;
         $user->password = $req->password;

         $user->save();

        return redirect()->to('/user');
    }
     public function show_update($id){
      $user=Users::where('id',$id)->first();

        return view('update',compact('user'));
     }
      
     public function update(Request $req){
        // $userup = DB::table('user')
              // ->where('id', $req->id)
               //->update([
                   //     'nama' => $req->nama,
                    //    'username' => $req->username,
                   //  'password' => $req->password,
               //]);

               $user = Users::find($req->id);
               $user->nama = $req->nama;
               $user->username = $req->username;
               $user->password = $req->password;

               $user->save();

               return redirect()->to('/user');
     }
     
     public function delete($id){
       //DB::table('user')->where('id', $id)->delete();
       Users::where('id',$id)->delete();
       return redirect()->to('/user');
     }

}

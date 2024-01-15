<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Gamemode;



 

class AdminController extends Controller
{
    public function user()
{
$data=user:: all();
return view('admin.users', compact( 'data'));
}
public function deleteuser ($id)
{
$data=user::find($id);
$data->delete();
return redirect()->back();
}

public function gamemode()
{

return view('admin.gamemode');
}

public function upload(Request $request)
{

  $data = new gamemode;

    $image=$request->image;

    $imagename =time().'.'.$image->getClientOriginalExtension();

            $request->image->move('gameimage',$imagename);

            $data->image=$imagename;


            $data->title=$request->title;

            $data->price=$request->price;

            $data->description=$request->description;

            $data->save();

            return redirect()->back();

}

}
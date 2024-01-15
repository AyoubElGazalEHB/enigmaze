<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Gamemode;

use App\Models\Reservation;

use App\Models\Narrators;




 

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

public function deletegame($id)

{
 $data=gamemode::find($id);
 $data->delete();
return redirect()->back();
}

public function gamemode()
{
$data = gamemode::all();
return view('admin.gamemode',compact("data"));
}

public function updateview($id)
{
 $data=gamemode::find($id);
return view("admin.updateview", compact("data"));
}

public function update(Request $request , $id)
{
 $data=gamemode::find($id);
  

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


public function reservation(Request $request)
{

  $data = new reservation;


            $data->name=$request->name;

            $data->email=$request->email;

            $data->phone=$request->phone;

            $data->participants=$request->participants;

            $data->date=$request->date;

            $data->time=$request->time;

            $data->message=$request->message;




            $data->save();

            return redirect()->back();

}


public function viewreservation()

{
  $data=reservation::all();
  return view("admin.adminreservation", compact("data"));
}

public function viewnarrators()

{
  return view("admin.adminnarrators");
}

public function uploadnarrators(Request $request)

{
  $data=new narrators;

$image=$request->image;

    $imagename =time().'.'.$image->getClientOriginalExtension();

            $request->image->move('narratorsimage',$imagename);

            $data->image=$imagename;

            $data->name=$request->name;

            $data->save();

            return redirect()->back();

}

}

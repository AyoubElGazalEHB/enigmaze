<x-app-layout>
  <!-- Your content goes here -->
</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>

        <base href="/public">
        @include("admin.admincss")

  </head>
  <body>
    

    <div class="container-scroller">

    @include("admin.navbar")

        <form action="{{url('/updatnarrators',$data->id)}}" method="Post" enctype="multipart/form-data">


            @csrf
            <div>
                    <label>Narrators Name</label>
                    <input style="color:blue;" type="text" name="name" value="{{$data->name}}" >

            </div>

             <div>
                    <label>Old Image</label>
                    <img height="300" width="300" src="/narratorsimage/{{$data->image}}">

            </div>

             <div>
                    <label>New image</label>
                    <input type="file" name="image">

            </div>

             <div>
                    <input style="color:blue;" type="submit" value="Update Narrators" >

            </div>
        </form>
    
</div>
   @include("admin.adminscript")
  </body> 
</html> 


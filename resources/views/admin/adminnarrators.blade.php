<x-app-layout>
  <!-- Your content goes here -->
</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
        @include("admin.admincss")

  </head>
  <body>
    

    <div class="container-scroller">

    @include("admin.navbar")

     <form action="{{url('/uploadnarrators')}}" method="Post" enctype="multipart/form-data">
            @csrf
            <div>

                    <label>Name</label>
                    <input style="color:blue" type="text" name="name" required="" placeholder="Enter name">


            </div>

            <div>

                    <input type="file" name="image" required="">


            </div>

            <div>

                    <input type="submit" value="Save">


            </div>


    </form>
        <table bgcolor="black">

                <tr>
                        <th>Narrators Name</th>
                        <th>Image</th>
                        <th>Action</th>
                        <th>Action 2</th>

                </tr>

@foreach($data as $data)

                <tr align="center">

                        <td>{{$data->name}}</td>
                        <td><img height="100" width="100" src="/narratorsimage/{{$data->image}}"</td>
                        <td><a href="{{url('/updatenarrators',$data->id)}}">Update</td>
                        <td><a href="{{url('/deletenarrators',$data->id)}}">Delete</td>




                </tr>

@endforeach
        </table>

        
</div>


   @include("admin.adminscript")
  </body> 
</html> 


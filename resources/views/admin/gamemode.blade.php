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

        <div style="position: relative; top: 60px; right: -150px">
            <form action="{{ url('/uploadgamemode') }}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div>
                        <label>Title</label>
                        <input style="color:blue;" type="text" name="title" placeholder="
                        Write a title" required>
                    </div>

                    <div>
                        <label>Price</label>
                        <input style="color:blue;" type="number" name="price" placeholder="
                        price" required>
                    </div>


                    <div>
                        <label>Image</label>
                        <input type="file" name="image" required>
                    </div>

                    <div>
                        <label>Description</label>
                        <input style="color:blue;" type="text" name="description" placeholder="
                        description" required>
                    </div>

                    <div>
                        <input style="color: black background-color: white"  type="submit" value="Save">
                    </div>




            </form>

            <div>

                <table bgcolor="black">
                        <tr>
                                <th style="padding:30px">Game Name</th>
                                <th style="padding:30px">Price</th>
                                <th style="padding:30px">Description</th>
                                <th style="padding:30px">Image</th>
                                <th style="padding:30px">Action</th>
                                <th style="padding:30px">Action 2</th>
                        </tr>
                    @foreach($data as $data)
                        <tr align="center">
                                <td>{{$data->title}}</td>
                                <td>{{$data->price}}</td>
                                <td>{{$data->description}}</td>
                                <td><img height="200" width="200" src="/gameimage/{{$data->image}}"></td>

                                <td><a href="{{url('/deletegame',$data->id)}}">Delete</a></td>
                                <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>

                        </tr>
  @endforeach  
                </table>





            </div>

            </div>

            
</div>
   @include("admin.adminscript")
  </body> 
</html> 


<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>

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

        <div style="position: relative; top:60px; right: -60px" >
            <table bgcolor="grey" border="3px">

                <tr>
                    <th style="padding:30px">Name</th>
                    <th style="padding:30px">Email</th>
                    <th style="padding:30px">Action</th>
                </tr>
                @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>

                    @if($data->usertype=="0")
                    <td><a href="{{url('/deleteuser',$data->id)}}">delete</a></td>
                    @else
                    <td>Not Allowed</td>
                    @endif
                </tr>
                @endforeach
            </table>
    </div>
      
        
   
        </div>
    </div>

    @include("admin.adminscript")

</body>

</html>


    
</body>
</html>
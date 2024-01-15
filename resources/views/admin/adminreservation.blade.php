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



        <div style="position:relative; top:70px; right: -150;">
                <table bgcolor="grey" border="1px">
                        <tr>

                            <th style="padding:30px;">Name</th>
                            <th style="padding:30px;">email</th>
                            <th style="padding:30px;">phone</th>
                            <th style="padding:30px;">date</th>
                            <th style="padding:30px;">time</th>
                            <th style="padding:30px;">Message</th>
                    </tr>



                    @foreach($data as $data)
                    <tr align="center">

                            <th>{{$data->name}}</th>
                            <th>{{$data->email}}</th>
                            <th>{{$data->phone}}</th>
                            <th>{{$data->date}}</th>
                            <th>{{$data->time}}</th>
                            <th>{{$data->message}}</th>

                    </tr>
                    @endforeach




            </table>


        </div>
</div>
   @include("admin.adminscript")
  </body> 
</html> 


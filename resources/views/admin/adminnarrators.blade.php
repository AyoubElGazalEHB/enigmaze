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
</div>
   @include("admin.adminscript")
  </body> 
</html> 


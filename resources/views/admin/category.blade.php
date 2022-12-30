<!DOCTYPE html>
<html lang="en">
  <head>

                    @include('admin.css')
                    <style>
                        .div_center{
                            text-align: center;
                            padding-top: 40px;
                        }
                        .h2_font{
                            font-size: 40px;
                            padding-bottom: 40px;
                        }
                        .input_color{
                            color: black;
                        }
                        .center{
                            margin: auto;
                            text-align: center;
                            width: 50%;
                            margin-top: 30px;
                            border: 1px solid white;
                        }
                    </style>

                    @include('admin.sidebar')
                    <!-- partial -->
                    @include('admin.header')
                        <!-- partial -->
                        <div class="main-panel">
                            <div class="content-wrapper">
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close"  data-dismiss="alert" aria-hidden="true"></button>
                                        {{session()->get('message')}}
                                    </div>
                                 @endif
                                    <div class="div_center ">
                                        <h2 class="h2_font">Add Category</h2>
                                        <form action="{{ ('/add_category') }}" method="POST">
                                            @csrf

                                            <input type="text" class="input_color" name="category" placeholder="Write Category Name"><br><br>
                                            <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                        </form>

                                    </div>
                                  
                                    <table class="center">
                                        <tr>
                                            <td>Category Name</td>
                                            <td>Action</td>
                                        </tr>
                                        @foreach($data as $da)
                                        <tr>
                                            <td>{{ $da->category_name }}</td>
                                            <td>
                                                <a class="btn btn-success" href="">Edit</a>
                                                <a onclick="return confirm('Are You Sure you want to delete?')" class="btn btn-danger" href="{{ url('delete_category',$da->id) }}">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                      </table>

                              </div>
                        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.scripts')
</body>
</html>

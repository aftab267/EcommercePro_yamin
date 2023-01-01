<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
                            color: white;
                        }
                        label{
                            display: inline-block;
                            width: 200px;
                        }
                        .div_design{
                            padding-bottom: 15px;
                        }
                    </style>

                    @include('admin.sidebar')
                    <!-- partial -->
                    @include('admin.header')
                        <!-- partial -->
                        <div class="main-panel">
                            <div class="content-wrapper">
                                    <div class="div_center">
                                        <h1 class="h2_font">Add Product</h1>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="div_design">
                                            <label for="">Product Title :</label>
                                            <input class="input_color" type="text" name="title" placeholder="Write Title Here" required>
                                        </div>

                                        <div class="div_design">
                                            <label for="">Product Description :</label>
                                            <input class="input_color" type="text" name="description" placeholder="Write Description Here" required>
                                        </div>

                                        <div class="div_design">
                                            <label for="">Product Price :</label>
                                            <input class="input_color" type="number" name="price" placeholder="Write Price Here" required>
                                        </div>

                                        <div class="div_design">
                                            <label for="">Discount Price :</label>
                                            <input class="input_color" type="number" name="dis_price" placeholder="Write Discount Price Here">
                                            </div>

                                        <div class="div_design">
                                            <label for="">Product Quantity :</label>
                                            <input class="input_color" type="number" name="quantity" min="0" placeholder="Write Quantity Here" required>
                                        </div>

                                        <div class="div_design">
                                            <label for="">Product Category :</label>
                                            <select class="input_color" name="category" required>
                                                <option value="" selected>Add A Category Here</option>
                                                <option value="">Shirt</option>
                                            </select>
                                        </div>

                                        <div class="div_design">
                                            <label for="">Product Image here :</label>
                                            <input type="file" name="image" required>
                                        </div>
                                        <div class="div_design">

                                            <input  type="submit" value="Add Product" class="btn btn-primary">
                                        </div>
                                    </form>

                                </div>

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


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
                    </style>

                    @include('admin.sidebar')
                    <!-- partial -->
                    @include('admin.header')
                        <!-- partial -->
                        <div class="main-panel">
                            <div class="content-wrapper">

                                <div class="div_center">
                                    <h2 class="h2_font">Add Category</h2>
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

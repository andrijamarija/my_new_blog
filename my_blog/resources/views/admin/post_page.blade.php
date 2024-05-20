<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')

    <style type="text/css">
        .post_title{
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white;
        }

        .div_center{
            text-align: center;
            padding: 30px;
        }

        label{
            display: inline-block;
            width: 200px
        }
    </style>

  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">

        <h1 class='post_title'>Add Post</h1>

        <div>

            <form>
                <div class="div_center">
                    <label>Post_Title</label>
                    <input type="text" name="title">
                </div>

                 <div class="div_center">
                    <label>slug</label>
                    <textarea name="description"></textarea>
                </div>
                 <div class="div_center">
                    <label>Add Image</label>
                    <input type="file" name="image">
                </div>
                 <div class="div_center">

                    <input type="submit" name="btn btn-primary">
                </div>
            </form>
        </div>
      </div>
      @include('admin.footer')
  </body>
</html>

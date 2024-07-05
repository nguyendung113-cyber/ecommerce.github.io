<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    @include('admin.css')
  </head>

  <style type="text/css">
    input[type='text']{
        width: 400px;
        height: 50px;
    }

    .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin:30px;
    }
    .table_deg{
        text-align: center;
        margin:auto;
        border:2px solid #ccc;
        margin-top:50px;
        width: 600px;
    }

    th{
        background-color: skyblue;
        padding: 15px;
        font-size: 20px;
        font-weight: bold;
    }
    td{
        padding: 15px;
        color:white;
        border: 1px solid skyblue;
    }

  </style>

  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        @include('admin.sidebar')
        
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h1 style="color:white">Update Category</h1>
                    <div class="div_deg">
                        <form action="{{url('update_category',$data->id)}}" method="post">
                        @csrf    
                           <input type="text" name="category" value="{{$data->category_name}}">
                           <input type="submit" class="btn btn-primary" value="Update Category">
                        </form>
                    </div>
                </div>


            </div>

        </div>
    </div>

    </div>
 
    @include('admin.js')
</body>
</html>
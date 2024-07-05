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
                    <h1 style="color:white">Add Category</h1>
                    <div class="div_deg">
                        <form action="{{url('add_category')}}" method="post">
                        @csrf    
                            <div>
                                <input type="text" name="category" id="">
                            </div>
                            <div>
                                <input type="submit" class="btn btn-primary " value=" Add Category" >
                            </div>
                        </form>
                    </div>
                </div>

                <div>
                    <table class="table_deg">
                        <tr>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach ($data as $data)
                            <tr>
                                <td>{{$data->category_name}}</td>
                                <td><a href="{{url('edit_category',$data->id)}}" class="btn btn-success">Edit</a></td>
                                <td><a href="{{url('delete_category',$data->id)}}" onclick="confirmation(event)" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                       
                    </table>
                </div>
            </div>

        </div>
    </div>

    </div>
    <!-- JavaScript files-->

    <script type="text/javascript">
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');

            console.log(urlToRedirect);
            swal({
                titlle: "Are You Sure to Delete This",
                text:"This delete will be parmanent",
                icon: "warning",
                buttons: true,
                dangerMode: true,

            }).then((willCancel) => {
                if(willCancel) {
                    window.location.href=urlToRedirect;
                }
            })
        }
    </script>
    @include('admin.js')
</body>
</html>
<!DOCTYPE html>
<html>
  <head> 
  <head>
    @include('admin.css')
</head>
<body>
    <style>
            .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin:30px;
    }
    .table_deg{
        border: 2px solid greenyellow;
    }
    th{
        background-color: skyblue;
        color: white;
        font-size: 20px;
        padding:15px;
    }
    td{
        border: 1px solid black;
        padding:15px;
        color: white;
    }
    </style>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        @include('admin.sidebar')
        
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <div class="div_deg">
                        <table class="table_deg">
                            <tr>
                                <th>Product Title</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Image</th>
                            </tr>
                            @foreach ($data as $datas)
                            <tr>
                                <td>{{$datas->title}}</td>
                                <td>{{$datas->description}}</td>
                                <td>{{$datas->category}}</td>
                                <td>{{$datas->price}}</td>
                                <td>{{$datas->quantity}}</td>
                                <td>
                                    <img height="120" width="120" src="products/{{$datas->image}}" alt="">
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                        <div class="div_deg">
                            {{$data->onEachSide(1)->links()}}
                        </div>
                </div>


            </div>

        </div>
    </div>

    </div>
 
    @include('admin.js')
</body>
</html>
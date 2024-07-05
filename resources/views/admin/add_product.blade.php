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

    <style>
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top:60px;
        }

        textarea{
            width: 300px;
        }

        input[type="text"]{
            width: 300px;
            height:30px;
        }

        h1{
            color:white;
        }

        label{
            display: inline-block;
            width: 200px;
            font-size: 20px;
            color:wheat;
        }

        .input_deg{
            padding:10px
        }
    </style>

  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        @include('admin.sidebar')
        
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h1>Add Product</h1>
                    <div class="div_deg">
                        
                        <form action="{{url('upload_product')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input_deg">
                                <label>Product Title</label>
                                <input type="text" name="title" required>
                            </div>

                            <div class="input_deg">                                <label>Description</label>
                                <textarea required type="text" name="description"></textarea>
                            </div>

                            <div class="input_deg">                                <label>Price</label>
                                <input type="text" name="price">
                            </div>

                            <div class="input_deg">                                
                                <label>Quantity</label>
                                <input type="text" name="quantity">
                            </div>
                            <div class="input_deg">                                
                                <label>Product Category</label>
                                <select required style="width:200px; height:30px" name="category">
                                    <option>Select Option</option>
                                    @foreach ($category as $category)
                                        <option>{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input_deg">                                
                                <label>Product Image</label>
                                <input type="file" name="image">
                            </div>
                            <div class="input_deg">                                
                                <input type="submit" value="Add product" class="btn btn-success">
                            </div>
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
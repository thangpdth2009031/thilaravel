<!DOCTYPE html>
<html lang="en">
<head>
    <title>List Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}">
    <link rel="icon" href="{{url('https://icon2.cleanpng.com/20180816/tjw/kisspng-computer-icons-scalable-vector-graphics-portable-n--5b759b6eeeba07.1496287815344341589778.jpg')}}">
    <link rel="stylesheet"
          href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('https://pro.fontawesome.com/releases/v5.10.0/css/all.css')}}"/>
    <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>
    <script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}}"></script>
    <style>
        .li-phan-trang {
            padding: 5px;
            border: 1px solid #007bff;
        }
    </style>
</head>
<body>

<div>
    <form id="form-filter">
        <div class="col-md-3 form-group">
            <input type="text" placeholder="Search..." name="search" class="search-int form-control" id="search">
        </div>
    </form>
    <table class="table table-dark">
        <thead>
        <tr>
            <th>Id</th>
            <th>Book ID</th>
            <th style="width: 300px">Authorid</th>
            <th style="width: 300px">Title</th>
            <th style="width: 130px">ISBN</th>
            <th>Pub_year</th>
            <th>Available</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $products)
            <tr>
                <td>{{$products->id}}</td>
                <td>{{$products->bookid}}</td>
                <td>{{$products->authorid}}</td>
                <td>{{$products->title}}</td>
                <td>{{$products->ISBN}}</td>
                <td>{{$products->pub_year}}</td>
                <td>{{$products->available}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>

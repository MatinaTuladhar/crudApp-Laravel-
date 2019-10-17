<html>
<head>
    <title>Laravel Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>
<nav class = "navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Laravel</a>
        </div>
        <ul class = "nav navbar-nav">
            <li><a href="{{route('create')}}">Create</a></li>
            <li><a href="{{route('edit')}}">Edit</a></li>
            <li><a href="{{route('index')}}">Index</a></li>
        </ul>
    </div>
</nav>
@yield('content')
</body>
</html>
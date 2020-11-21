<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','BeeFlix')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9b362af9e1.js" crossorigin="anonymous"></script>
    <style>
        img {
            min-width: 200px;
            max-height: 300px;
        }
        h6{
            max-width: 200px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="../movies"><h2>BeeFlix</h2></a>
        </div>
        <div class="container">
            <form class="form-inline">
                <a href="{{URL::previous()}}" class="btn btn-sm btn-dark"><i class="fas fa-arrow-left"></i> Kembali</a>
                <a href="../movies" class="btn btn-sm btn-outline-secondary" type="button">Lihat Semua Film</a>
            </form>
        </div>
    </nav>
    <div class="navbar bg-light mt-0">
        <div class="container">
            <div class="container" style="background-color: #E8ECEF;">
                <div class="container-sm bg-white mt-4 mb-3">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>@yield('title')</title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <!-- Styles -->
      <style>
            html,
            body {
                  background-color: #fff;
                  color: #636b6f;
                  font-family: 'Nunito', sans-serif;
                  font-weight: 200;
                  height: 100vh;
                  margin: 0;
            }

            .full-height {
                  height: 100vh;
            }

            .flex-center {
                  align-items: center;
                  display: flex;
                  justify-content: center;
            }

            .position-ref {
                  position: relative;
            }

            .top-right {
                  position: absolute;
                  right: 10px;
                  top: 18px;
            }

            .content {
                  text-align: center;
            }

            .title {
                  font-size: 84px;
            }

            .links>a {
                  color: #636b6f;
                  padding: 0 25px;
                  font-size: 13px;
                  font-weight: 600;
                  letter-spacing: .1rem;
                  text-decoration: none;
                  text-transform: uppercase;
            }

            .m-b-md {
                  margin-bottom: 30px;
            }
      </style>
</head>

<body>
      <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                  <div class="navbar-header">
                        <a class="navbar-brand" href="#">Laravel</a>
                  </div>
                  <ul class="nav navbar-nav">
                        <li class="active"><a href="/myhome">Home</a></li>
                        <li><a href="/ourproducts">Products</a></li>
                        <li><a href="/aboutus">About Us</a></li>
                        <li><a href="/contactus">Contact Us</a></li>

                  </ul>
            </div>
      </nav>
      @yield('content')
</body>

</html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Posts</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
            integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
            crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
            crossorigin="anonymous"></script>
</head>

<body>

      <section>
            <div class="container">
                  <div class="row">
                        <div class="col-md-12">
                              <div class="card">
                                    <div class="card-header">
                                          All Posts
                                    </div>

                                    @if(Session::has('status'))
                                                            <div class="alert alert-info">
                                                                    {{ Session::get('status') }}
                                                            </div>
                                                      @endif

                                    <div class="card-body">


                                          <table class="table">
                                                <thead>
                                                      <tr>
                                                            <th>Post Title</th>
                                                            <th>Post Body</th>
                                                            <th>Actions</th>
                                                      </tr>
                                                </thead>

                                                <tbody>

                                                      @foreach($blogpost as $blog)
                                                                                      <tr>
                                                                                                <td>{{$blog->title}}</td>
                                                                                                <td>{{$blog->body}}</td>


                                                                                                <td>

                                                                                                        <a href="/viewblogpost/{{$blog->id}}"
                                                                                                                  class="btn btn-primary">View</a>
                                                                                                        <a href="/editblogpost/{{$blog->id}}"
                                                                                                                  class="btn btn-success">Edit</a>
                                                                                                        <a href="/deleteblogpost/{{$blog->id}}"
                                                                                                                  class="btn btn-danger">Delete</a>

                                                                                                </td>

                                                                                      </tr>
                                                                                @endforeach


                                                </tbody>
                                          </table>

                                    </div>

                              </div>

                        </div>

                  </div>
            </div>

      </section>


</body>

</html>
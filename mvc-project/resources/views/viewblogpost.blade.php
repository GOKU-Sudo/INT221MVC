<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>View Blog Post</title>
      <style>
            body {
                  font-family: Arial, sans-serif;
                  margin: 0;
                  padding: 0;
                  background-color: #f4f4f4;
                  color: #333;
            }
            .container {
                  width: 80%;
                  margin: 0 auto;
                  padding: 20px;
                  background-color: #fff;
                  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h1, h2 {
                  color: #333;
            }
            h1 {
                  border-bottom: 2px solid #333;
                  padding-bottom: 10px;
            }
            p {
                  line-height: 1.6;
            }
      </style>
</head>
<body>
      <div class="container">
            <h1>View Blog Post</h1>
            <h2>{{$blogpost->title}}</h2>
            <p>{{$blogpost->body}}</p>
      </div>
</body>
</html>
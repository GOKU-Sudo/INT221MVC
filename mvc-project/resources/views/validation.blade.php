<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Validation Form</title>
      <style>
            body {
                  font-family: Arial, sans-serif;
                  background-color: #f4f4f4;
                  margin: 0;
                  padding: 0;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  height: 100vh;
            }
            form {
                  background: #fff;
                  padding: 20px;
                  border-radius: 5px;
                  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            div {
                  margin-bottom: 15px;
            }
            label {
                  display: block;
                  margin-bottom: 5px;
            }
            input {
                  width: 100%;
                  padding: 8px;
                  box-sizing: border-box;
            }
            button {
                  background-color: #007BFF;
                  color: #fff;
                  border: none;
                  padding: 10px 20px;
                  cursor: pointer;
                  border-radius: 5px;
            }
            button:hover {
                  background-color: #0056b3;
            }
            .error {
                  color: red;
                  font-size: 0.875em;
            }
      </style>
</head>
<body>
      <h1>Validation Form</h1>
      <form action="{{ route('submit.form') }}" method="POST">
            @csrf
            <div>
                  <label for="name">Name:</label>
                  <input type="text" id="name" name="name" value="{{old('name')}}" required>
                  @error('name')
                        <div class="error">{{ $message}}</div>
                  @enderror
            </div>
            <div>
                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" value="{{old('email')}}" required>
                  @error('email')
                        <div class="error">{{ $message }}</div>
                  @enderror
            </div>
            <div>
                  <label for="password">Password:</label>
                  <input type="password" id="password" name="password" required>
                  @error('password')
                        <div class="error">{{ $message }}</div>
                  @enderror
            </div>
            <button type="submit">Submit</button>
      </form>
</body>
</html></div>
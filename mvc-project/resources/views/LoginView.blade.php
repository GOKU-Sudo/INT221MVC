<!-- View: LoginView -->
<form action="{{route('LoginController')}}" method="POST">

      @csrf
    <input type="text" name="username" placeholder="Username" required >
    <input type="password" name="password" placeholder="Password"  required>
    <button type="submit">Login</button>
</form>
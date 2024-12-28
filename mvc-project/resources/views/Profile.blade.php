<!-- View: Profile -->

<h1>Welcome, {{ session('data')['username'] }}</h1>
<a href="{{ route('Logout') }}">Logout</a>

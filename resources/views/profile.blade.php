@if (session('success'))
    {{session('success')}}
@endif

<h3>Hello {{session('userName')}}</h3>

<a href="/logout">Logout</a>


<h2>User Login</h2>

<form action="/login_user" method="POST">
    @csrf
    {{-- {{method_field('PUT')}} --}}
    {{method_field('PATCH')}}
    <input type="text" name="name"><br><br>
    <input type="text" name="pass"><br><br>
    <button type="submit">Submit</button>
</form>
{{-- {{$errors}} --}}
<form action="/form-data" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter Name">
    @error('name')
    <span style="color: red; margin-left: 10px">
        *{{$message}}  
    </span>
    @enderror
    <br><br>
    <input type="text" name="age" placeholder="Enter age">
    @error('age')
    <span style="color: red; margin-left: 10px">
        *{{$message}}  
    </span>
    @enderror
    <br><br>
    <input type="email" name="email" placeholder="Enter email">
    @error('email')
    <span style="color: red; margin-left: 10px">
        *{{$message}}  
    </span>
    @enderror
    <br><br>
    <input type="password" name="password" placeholder="Enter password">
    @error('password')
    <span style="color: red; margin-left: 10px">
        *{{$message}}  
    </span>
    @enderror
    <br><br>
    <input type="text" name="course" placeholder="Enter course"><br><br>
    <button type="submit">Save Data</button>

</form>
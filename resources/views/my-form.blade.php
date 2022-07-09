<h2>Enter your details...</h2>

<form action="add-student" method="POST">
  @csrf
  <p>
    Name: <input type="text" name="name" value="{{old('name')}}" placeholder="Enter name">
    @error('name')
      <span style="color: red">* {{$message}}</span>
    @enderror
  </p>
  <p>
    Email: <input type="email" name="email" value="{{old('email')}}" placeholder="Enter email">
    @error('email')
      <span style="color: red">* {{$message}}</span>
    @enderror
  </p>
  <p>
    Mobile: <input type="text" name="mobile" value="{{old('mobile')}}" placeholder="Enter mobile">
    @error('mobile')
      <span style="color: red">* {{$message}}</span>
    @enderror
  </p>
  <p>
   <input type="submit" name="submit" value="Submit">
  </p>
</form>
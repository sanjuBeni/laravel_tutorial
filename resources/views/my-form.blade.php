<h2>Enter your details...</h2>

<form action="add-student" method="POST">
  @csrf
  <p>
    Name: <input type="text" name="name" placeholder="Enter name">
  </p>
  <p>
    Email: <input type="email" name="email" placeholder="Enter email">
  </p>
  <p>
    Mobile: <input type="text" name="mobile" placeholder="Enter mobile">
  </p>
  <p>
   <input type="submit" name="submit" value="Submit">
  </p>
</form>
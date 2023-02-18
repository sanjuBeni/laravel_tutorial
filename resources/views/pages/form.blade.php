<form action="/form-data" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter Name"><br><br>
    <input type="text" name="age" placeholder="Enter age"><br><br>
    <input type="text" name="course" placeholder="Enter course"><br><br>
    <button type="submit">Save Data</button>

</form>
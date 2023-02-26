<h2>Add Data</h2>

<form action="add" method="POST">
    @csrf
    <input type="text" name="name" >
    <input type="text" name="email" >
    <button type="submit">Add</button>
</form>
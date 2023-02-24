<h1>{{__('upload.data')}}</h1>

<form method="POST" action="/upload" enctype="multipart/form-data">
    @csrf
    <br><br>
    <input type="file" name="file"><br><br>
    <input type="submit" value="Submit">
</form>
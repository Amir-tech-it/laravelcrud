<h1>Upload file </h1>
<form action="fileupload" method="POST" enctype="multipart/form-data">
    @csrf 
    <input type="file" name="file"><br> <br>
    <button type="submit">Submit</button>
</form>

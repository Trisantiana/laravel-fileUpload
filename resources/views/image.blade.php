<!DOCTYPE html>
<html>
<head>
    <title>image upload</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-R80DC0KVBO4GSTw+wZ5x2zn2pu4POSErBkf8/fSFhPXHxvHJydT0CSgAP2Yo2r4I" crossorigin="anonymous">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" crossorigin="anonymous" ></script>
</head>
<body>

    <div class="container">
        <div class="col-lg-4 col-lg-offset-4">
            <img src="images/{{$image->image}} " alt="default" width="200px" height="200">
            <form method="post" action="postImage" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="file" name="image">
            <button class="btn btn-info">Save</button>
            </form>
        </div>
    </div>

</body>
</html>
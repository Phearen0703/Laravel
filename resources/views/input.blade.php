<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>input</title>
</head>
<body>
    <div class="container mt-5">
        <form action="{{route('user.store')}}" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control">
            <button class="my-3 btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
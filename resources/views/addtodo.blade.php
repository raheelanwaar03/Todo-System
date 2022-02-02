<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Todo</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Add Todo</h1>
                <hr style="width: 300px">
                <div class="card">
                    <div class="card-body">
                        <form action="#" method="POST">
                            @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Add title for for Todo">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" rows="3" >Description</textarea>
                        </div>
                        <button type="submit" class="btn btn-info btn-block">Add</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Index Page</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Add Todo</h1>
                <hr style="width: 300px">
                @if(session('massage'))
            <p class="text-success text-center mt-3">{{session('massage')}}</p>
            @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('store') }}" method="POST">
                            @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Add title for for Todo">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" ></textarea>
                        </div>
                        <button type="submit" class="btn btn-info btn-block">Add</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        @if (session('massage'))
        <p class="text-center text-danger">{{ session('delete') }}</p>
        @endif
        <div class="row">
            <div class="col-5 d-flex justify-content-center align-items-center" style="height: 60vh">
                <table class="table table-hover table-light">
                    <thead>
                        <tr>
                        <th>#ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($todos as $todo)
                            <tr>
                                <td>{{ $todo->id }}</td>
                                <td>{{ $todo->title }}</td>
                                <td>{{ $todo->description }}</td>
                                <td>{{ $todo->status }}</td>
                                <td><a href="{{ route('completeTodo',['id' => $todo->id ]) }}" class="btn btn-sm btn-success">Mark Complete</a></td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center" style="height: 60vh">
                <table class="table table-hover table-light">
                    <thead>
                        <tr>
                        <th>#ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($completeTodos as $todo)
                            <tr>
                                <td>{{ $todo->id }}</td>
                                <td>{{ $todo->title }}</td>
                                <td>{{ $todo->description }}</td>
                                <td>{{ $todo->status }}</td>
                                <td>
                                    <form action="{{ route('destroy',['id'=> $todo->id ]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                            </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
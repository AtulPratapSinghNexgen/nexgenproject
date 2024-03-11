<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>NexGen | Posts</title>
    <style>
        table  td, table th{
        vertical-align:middle;
        text-align:right;
        padding:20px!important;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>NexGen | Posts</h1>
            <div>
                <a href="{{route('posts.create')}}" class="btn btn-primary">Add New Post</a>
                <a href="{{url('logout')}}" class="btn btn-danger">Logout</a>
            </div>
            
        </header>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <Th>User ID</Th>
                    <th>Post Title</th>
                    <th>Post Content</th>
                    
                </tr>
            </thead>
            <tbody>
               
                @foreach($posts as $post)
                    <tr>

                        <td>{{ $post->id }}</td>
                        <td>{{ $post->user_id }}</td>
                        <td>{{ $post->post_title }}</td>
                        <td>{{ $post->post_content }}</td>
                    </tr>
                @endforeach
           
        </tbody>
        </table>
    </div>
</body>
</html>
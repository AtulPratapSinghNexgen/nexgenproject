<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>NexGen | Edit Posts</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Edit Post Here</h1>
            <div>
            <a href="{{route('index')}}" class="btn btn-primary">Back</a>
            </div>
        </header>
        
        <form action="{{route('posts.store')}}" method="post">
            {{ csrf_field() }}
            @if(session('error'))
            <div>{{ session('error') }}</div>
        @endif
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="post_title" placeholder="Post Title:">
            </div>
            
        
            <div class="form-element my-4">
                <textarea name="post_content" id="" class="form-control" placeholder="Post Content"></textarea>
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Add Post" class="btn btn-primary">
            </div>
        </form>
        
        
    </div>
</body>
</html>
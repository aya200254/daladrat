<!DOCTYPE html>
<html>
<head>
    <title>Reddit Posts</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Reddit Posts</h1>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Thumbnail</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Created</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td><img src="{{ $post['data']['thumbnail'] }}" class="img-fluid" alt="Thumbnail"></td>
                        <td>{{ $post['data']['title'] }}</td>
                        <td>{{ $post['data']['author'] }}</td>
                        <td>{{ $post['data']['created_utc'] }}</td>
                        <td><a href="{{ $post['data']['url'] }}" class="btn btn-primary btn-sm" target="_blank">View Post</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

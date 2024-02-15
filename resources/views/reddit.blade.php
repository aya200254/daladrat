<!DOCTYPE html>
<html>
<head>
    <title>Reddit Posts</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Reddit Posts</h1>
        <div class="row mt-3">
            @foreach ($posts as $post)
                <div class="mb-4">
                    <div class="card">
                        <img src="{{ $post['data']['thumbnail'] }}" class="card-img-top" alt="Thumbnail">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post['data']['title'] }}</h5>
                            <p class="card-text">{{ $post['data']['selftext'] }}</p>
                            <p class="card-text"><small class="text-muted">Author: {{ $post['data']['author'] }}</small></p>
                            <a href="{{ $post['data']['url'] }}" class="btn btn-primary btn-sm" target="_blank">View Post</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

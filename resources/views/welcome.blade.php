<!DOCTYPE html>
<html>
<head>
    <title>Reddit Posts</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="mt-5">Reddit Posts</h1>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="hot-tab" data-toggle="tab" href="#hot" role="tab" aria-controls="hot" aria-selected="true">Hot</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="false">New</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="rising-tab" data-toggle="tab" href="#rising" role="tab" aria-controls="rising" aria-selected="false">Rising</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="hot" role="tabpanel" aria-labelledby="hot-tab">
            @foreach ($hotPosts as $post)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post['data']['title'] }}</h5>
                        <p class="card-text">{{ $post['data']['selftext'] }}</p>
                        <p class="card-text"><small class="text-muted">Author: {{ $post['data']['author'] }}</small></p>
                        <a href="{{ $post['data']['url'] }}" class="btn btn-primary btn-sm" target="_blank">View Post</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
            @foreach ($newPosts as $post)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post['data']['title'] }}</h5>
                        <p class="card-text">{{ $post['data']['selftext'] }}</p>
                        <p class="card-text"><small class="text-muted">Author: {{ $post['data']['author'] }}</small></p>
                        <a href="{{ $post['data']['url'] }}" class="btn btn-primary btn-sm" target="_blank">View Post</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="tab-pane fade" id="rising" role="tabpanel" aria-labelledby="rising-tab">
            @foreach ($risingPosts as $post)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post['data']['title'] }}</h5>
                        <p class="card-text">{{ $post['data']['selftext'] }}</p>
                        <p class="card-text"><small class="text-muted">Author: {{ $post['data']['author'] }}</small></p>
                        <a href="{{ $post['data']['url'] }}" class="btn btn-primary btn-sm" target="_blank">View Post</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Reddit Posts</title>
</head>
<body>
    <h1>Reddit Posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post['data']['title'] }}</li>
        @endforeach
    </ul>
</body>
</html>

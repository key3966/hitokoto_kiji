<!DOCTYPE HTML>
<html>
<head>
    <title>home</title>
</head>
<body>
<h1>Hello World</h1>
@foreach($posts as $post)
{{$post->content}}<br>
@endforeach
</body>
</html>

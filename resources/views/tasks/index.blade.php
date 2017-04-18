<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    @foreach($tasks as $task)
        {{--<li> <a href="/tasks/{{$task->id}}">{{$task->body}}</a></li>--}}
        <li><a href="{{$task->id}}">{{$task->body}}</a></li>
    @endforeach

</body>
</html>
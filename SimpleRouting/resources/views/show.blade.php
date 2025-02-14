<!-- resources/views/tasks/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Task Details</title>
</head>
<body>
    <h1>Task Details</h1>
    <p>Name: {{ $task->name }}</p>
    <p>Description: {{ $task->description }}</p>
    <a href="{{ route('tasks.index') }}">Back to Task List</a>
</body>
</html>
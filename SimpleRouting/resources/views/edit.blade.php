<!-- resources/views/tasks/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $task->name }}">
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $task->description }}</textarea>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('tasks.index') }}">Back to Task List</a>
</body>
</html>
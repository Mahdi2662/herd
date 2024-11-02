<!DOCTYPE html>
<html>
<head>
    <title>Job Posted</title>
</head>
<body>
    <h1>{{ $job->title }}</h1>
    <p>{{ $job->description }}</p>
    <p>Salary: {{ $job->salary }}</p>
</body>
</html>
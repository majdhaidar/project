<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create new project</h1>
    <div>
        <form action="/projects" method="POST">
            {{ csrf_field() }}
            <p><input type="text" name="title" placeholder="Project Title"></p>
            <p><textarea name="description" placeholder="Project Description" id="" cols="30" rows="10"></textarea></p>
            <p><button type="submit">Create Project</button></p>
        </form>
    </div>
</body>
</html>
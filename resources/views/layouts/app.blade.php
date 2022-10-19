<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel | {{$title}}</title>
    @vite('resources/css/app.css')
    {{$styles}}
</head>
<body>
    <x-navbar></x-navbar>
    {{$slot}}
</body>
</html>
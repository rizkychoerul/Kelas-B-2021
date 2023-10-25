<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <h1>Document</h1>
    <x-badge type="danger">
        <x-slot:header>Badge</x-slot:header>
        ini adalah badge
        <img src="#"/>
    </x-badge>
</body>
</html>
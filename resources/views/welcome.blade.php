<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire Basics </title>
    @livewireStyles
    @livewireScripts
</head>
<style>
    body{
        background-color: #000;
        h1,h2,p
    }
</style>
<body>
    <livewire:counter />
    <livewire:hello-world />
    <br />
    <h2>Properties</h2>
    <livewire:properties /> <br>
    <h2>Life Cycle</h2>
    <livewire:life-cycle /> <br>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Include</title>
    <style>
        .nav{
            display: grid;
            grid-template: auto / auto auto;
            align-items: center;
            justify-items: center;
        }
        ul{
            width: 5rem;
        }
        ul:hover{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <header>
        <div class="nav">
            <ul><a href="#">Inicia</a></ul>
            <ul><a href="#">Volta</a></ul>
        </div>
    </header>

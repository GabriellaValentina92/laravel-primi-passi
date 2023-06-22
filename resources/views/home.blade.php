<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container" style="background: linear-gradient(to right, red,orange,yellow,green,blue,indigo,violet);">
            <h1 style="text-align: center; font-size: 50px; color: white; text-shadow: 4px 4px; padding: 0.6rem;">HELLO WORLD</h1>
            <div class="navmenu" style="background-color: acquamarine; display: flex; align-items: center; justify-content:space-between;">
                <h2 style="padding: 0.7rem; font-size: 2rem; color: white;">Laravel</h2>
                <div class="links" style="padding: 0.6rem;">
                    <a href="http://localhost:8000/dobby" style="text-decoration: none; color: black; border: 1px solid black; border-radius: 0.5rem; padding: 0.5rem; margin-right: 0.7rem; background-color: white;"> Lumos</a>
                    <a href="http://localhost:8000/moria" style="text-decoration: none; color: black; border: 1px solid black; border-radius: 0.5rem; padding: 0.5rem; background-color: white;"> Hobbit</a>
                </div>
            </div>
        </div>
    </body>
</html>

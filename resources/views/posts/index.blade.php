<x-app-layout>
    <x-slot name="index">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('Index') }}
        </h2>
    </x-slot>
    
    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>job</title>
            <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
        </head>
        <body>
            <div class='color'>
            <div class='inner'>
                <h1 class='title'>ファイト　就活！</h1>
            </div>
            <div class='circle_parent'>
                <a href='./group.blade.php'><p class='circle'></p></a>
                <a href='./create.blade.php'><p class='circle'></p></a>
                <a href='./me.blade.php'><p class='circle'></p></a>
                <a href='./management.blade.php'><p class='circle'></p></a>
            </div>
            </div>
        </body>
    </html>
</x-app-layout>
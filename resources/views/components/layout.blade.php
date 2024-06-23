<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$pageTitle ?? 'Todo List'}}</title>
    <link rel="stylesheet" href="/assets/style/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img width="100%" src="/assets/images/logo.png" alt="">
        </div>
        <div class="content">
            <nav>
                {{$btn ?? null}}
            </nav>
            <main>

                {{$slot}}
                
            </main>
        </div>
    </div>
</body>
</html>
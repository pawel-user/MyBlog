<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

    <div class="container">

    <nav class="navbar bg-nav">
        <header>
            <h1><a class="nav-header" href="/">My blog</a></h1>
        </header>

            <ul class="nav">
                <li class="nav-item"><a class="nav-link nav-txt" href="/">Home</a></li>

                <?php if (Auth::isLoggedIn()) : ?>
                    
                    <li class="nav-item"><a class="nav-link nav-txt" href="/admin/">Admin</a></li>
                    <li class="nav-item"><a class="nav-link nav-txt" href="/logout.php">Log out</a></li>

                <?php else : ?>
                    
                    <li class="nav-item"><a class="nav-link nav-txt" href="/login.php">Log in</a></li>

                <?php endif; ?>

                <li class="nav-item"><a class="nav-link nav-txt" href="/contact.php">Contact</a></li>
            </ul>
    </nav>

    <main>

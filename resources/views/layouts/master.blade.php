<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title', 'Caitlin Rouille - A4 Assignment')
    </title>

    <meta charset='utf-8'>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
	<link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
    <link href="/css/a4.css" type='text/css' rel='stylesheet'>

    @stack('head')

</head>
<body>
    <div class="container-fluid mg-top-20">
        <img class="img-responsive mg-top-15" src="img/golf-course.png" alt="Golf Course"/>
        <h3>9-Hole Golf Score Card</h3>
        <p>This is a 1-4 player score card for the game of Golf. Enter in the name of each player (up to 4 players) and this tool will add your score and declare a winner. Enjoy and good luck!</p>
        <section>
            @yield('content')
        </section>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    @stack('body')

</body>
</html>

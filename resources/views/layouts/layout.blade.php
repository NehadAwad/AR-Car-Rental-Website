<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AR Car Rental</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Grandstander:ital,wght@1,200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300,400;0,400;1,300&display=swap"
        rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Grandstander:ital,wght@1,200,300&display=swap" >
        
        <!-- vendors and resources -->

        <link rel="stylesheet" type="text/css" href="/vendors/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="/vendors/css/grid.css" />
        <link
        rel="stylesheet"
        type="text/css"
        href="/vendors/css/ionicons.min.css"
        />
        <link rel="stylesheet" type="text/css" href="/vendors/css/animate.css" />
        <link rel="stylesheet" type="text/css" href="/resources/css/style.css" />
        <link rel="stylesheet" type="text/css" href="/resources/css/queries.css" />
        
        <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap"
        rel="stylesheet"
        />
        
        <!-- Styles -->
        <link rel="stylesheet" href="/css/main.css">
        
        <!-- font-awsome -->
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


    
    </head>
    <body>
        @yield('content')
 
        <footer>
            <div class="footer-content">
                <h3>AR Car Rental</h3>
                <p>We want that everyone who travels in Bangladesh should get the best possible transportation experience. Since it is so, we provide different services for the convenience of our consumers. We facilitate your booking with the car rental company and ensure that you get the preferred car if it is available on the fleet.
                Safety is something that every traveller seeks for.
                </p>
                <ul class="socials">
                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                </ul>
            </div>

            <div class="footer-bottom">
                <p>copyright &copy;2021. Designed by <span>Akash</span>.</p>
            </div>
        </footer>
    
    </body>
</html>
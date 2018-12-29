<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset("css/uikit-rtl.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("css/uikit-rtl.min.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("css/uikit.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("css/uikit.min.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("css/style.css")}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Jobify - Home</title>

    </head>
    <body>
        <header>
            <nav class="uk-navbar-container" uk-navbar>
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="#">Test</a></li>
                        <li><a href="{{route("our-service")}}">Our Services</a></li>
                        <li><a href="{{route("company")}}">Company</a></li>
                        <li class="uk-active"><a href="#">Contact Us</a></li>
                        <li><a href="#"><button class="uk-button uk-button-get-start">Get Started</button></a></li>
                        <li><a href="#">Log In</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div id="showcase2">
            <h2>GET IN TOUCH</h2>
            <p>Drop us the line, or give us a heads up if you're interested in visiting us.</p>
</div>
        
        <section class="container">
            <article id="map">
                <p>map</p>
            </article>

            <aside id="sidebar">
                <h3>MESSAGE US</h3>
            </aside>
        </section>

        <footer>
            <h2>Footer</h2>
        </footer>

    </body>
</html>

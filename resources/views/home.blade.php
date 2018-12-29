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
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="#">Home</a></li>
                        <li><a href="#">Test</a></li>
                        <li><a href="{{route("our-service")}}">Our Services</a></li>
                        <li><a href="{{route("company")}}">Company</a></li>
                        <li><a href="{{route("contact-us")}}">Contact Us</a></li>
                        <li><a href="#"><button class="uk-button uk-button-get-start">Get Started</button></a></li>
                        <li><a href="#">Log In</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <section id="showcase">
            <h2>Search For Better - Find Jobs On Jobify</h2>
            <p>Find local jobs in your area</p>
                <form>
                    <div class="uk-margin">
                        <div class="input-with-icon">
                            <i class="fa fa-search"></i>
                            <input class="uk-input" type="text" placeholder="Search Jobs">
                        </div>
                        <div class="input-with-icon">
                            <i class="fa fa-map-marker"></i>
                            <input class="uk-input" type="text" placeholder="Location">
                        </div>
                        <button class="uk-button uk-button-primary">Search</button>
                    </div>
                </form>
        </section>
        
        <section id="main">
            <div class="container">
                <article id="main-col">
                    <ul id="sidebox">
                        <li>
                            <h3>Filter</h3>
                        </li>
                        <li>
                            <h3>Job Category</h3>
                        </li>
                    </ul>
                </article>

                <aside id="main-content">
                    <div class="dark">
                        <h3> Lastest Job </h3>
                    </div>
                </aside>
            </div>
        </section>

        <footer>
            <h2>Footer</h2>
        </footer>

    </body>
</html>

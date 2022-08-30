<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <title>Klassy Cafe</title>
    <!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="jquery-3.6.0.min.js"></script>

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                            <!--
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                            {{-- <li class="scroll-to-section">
                                <a href="javascript:;">Features</a>

                            </li> --}}
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>

                            {{-- <li class="javascript:;"><a href="#">Cart[{{ $count }}]</a></li> --}}


                            <li class="scroll-to-section" style="color: red;"><a href="#reservation">

                                    @auth
                                        <a href="{{ route('showcart', Auth::user()->id) }}" style="margin-top:-40px;">
                                            Cart[{{ $count }}]

                                        </a>
                                    @endauth

                                    @guest
                                        Cart[0]

                                    @endguest

                                    {{-- </a></li>

                            </a></li> --}}
                            <li>


                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                <li>

                                    <x-app-layout>

                                    </x-app-layout>

                                    {{-- <a href="{{ url('/dashboard') }}"
                                                class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}
                                </li>
                            @else
                                <li><a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                @if (Route::has('register'))
                                    <li> <a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    </li>
                                @endif
                            @endauth
                </div>
                @endif

                </li>


                </ul>
                <a class='menu-trigger'>
                    {{-- <span>Menu</span> --}}
                </a>
                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->

    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                        </div>
                        <p>

                            This cafe is one of the best cafes in Palestine, especially in Gaza, due to the presence
                            of different foods and the wonderful taste that distinguishes it from other restaurants,
                            and also due to the presence of decorations, trees and picturesque nature in the place
                            <hr>
                            We are proud of you

                        </p>
                        <div class="row">
         
                        </div>
                    </div>
                </div> --}}
            <table class="table">
                <tr>
                    <th>Food Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th></th>
                </tr>
                <form method="POST" action="{{ url('orderconfirm') }}">
                    @csrf
                    @foreach ($data as $data)
                        <tr>
                            <td>
                                <input type="text" name="foodname[]" value="{{ $data->title }}" hidden>
                                {{ $data->title }}
                            </td>
                            <td>
                                <input type="number" name="price[]" value="{{ $data->price }}" hidden>

                                {{ $data->price }}
                            </td>
                            <td>
                                <input type="text" name="quantity[]" value="{{ $data->quantity }}" hidden>

                                {{ $data->quantity }}
                            </td>


                        </tr>
                    @endforeach

                        @foreach ($data2 as $data2)
                            <tr style="position: relative;top:-105px;left:900px;">
                                <td><a href="{{ route('deletecart', $data2->id) }}"><button
                                            class="btn btn-danger">Delete</button></a></td>
                            </tr>
                        @endforeach

            </table>

            <div align="center" style="padding:10px;">
                <button class="btn btn-primary" type="button" id="order">Order Now</button>
            </div>

            <div align="center" style="padding:10px; " id="appear">

                <div style="padding:10px;">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Name">
                </div>

                <div style="padding: 10px;">
                    <label>Phone</label>
                    <input type="number" name="phone" placeholder="Phone Number">
                </div>

                <div style="padding: 10px;">
                    <label>Address</label>
                    <input type="text" name="address" placeholder="address">
                </div>

                <div style="padding: 10px;">
                    <input type="submit" class="btn btn-success" style="background: green;" value="Order Confirm">
                    <button id="close" class="btn btn-danger">Close</button>
                </div>
            </div>
            <form>

        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="right-content">
                <div class="thumb">

                    {{-- <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="assets/images/about-video-bg.jpg" alt=""> --}}

                </div>
            </div>
        </div>
        </div>
        </div>
    </section>


    <script type="text/javascript">
        $("#order").click(
            function() {
                $("#appear").show();
            }
        );

        $("#close").click(
            function() {
                $("#appear").hide();
            }
        );
    </script>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>

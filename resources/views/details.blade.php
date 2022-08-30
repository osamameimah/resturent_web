  <!DOCTYPE html>
<html lang="en">

<head>

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

              <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- End layout styles -->
 
</head>
<body>

                <div class="row">
                {{-- @foreach ($datah as $data2) --}}
                    <div class="col-md-9">
                        <div class="chef-item">
                            <div class="thumb">
                                <div class="overlay"></div>
            
                                <img src="{{ asset('storage') }}/{{ $datah->image }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>{{ $datah->title }}</h4>
                                <span>{{ $datah->price }}</span>
                                <span>{{ $datah->description }}</span>
                                <hr>
                                <a href="">
                                    <button class="btn btn-primary">Add Cart</button> 
                                </a>
                            </div>
                        </div>
                    </div>
                {{-- @endforeach --}}


            </div>

         <script src="{{ asset('js.bootstrap.min.js') }}"></script>  
 
</body>

</html>

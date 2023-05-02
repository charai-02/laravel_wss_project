<!doctype html>
<html lang="ar" dir="rtl">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product details</title>
    <link rel="stylesheet" href="/css/product.css">
    <link rel="stylesheet" href="/css/header.css">
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Changa&display=swap" rel="stylesheet">
    <!--Bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <!--header-->
    <div class="HF-container">
        <div class="nav-container sticky-top shadow p-1 bg-body-tertiary white">
            <a href="/"><img src="/images/Laneige.jpeg" class="logo"> </a>
        </div>
        <!--Carousel-->
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/front_imgs/tt1.jpg" class="d-block w-100 cover" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/front_imgs/cov2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/front_imgs/cov1.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class=" mx-auto mt-20 mb-20">
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4">
                @foreach ($products as $product)
                    <div class="col col-xs-12 col-sm-6 col-lg-3 col-xxl-3 container d-flex justify-content-center">
                        <div class=" s card flex-row flex-wrap " style="width: 18rem;">
                            <img src="images/{{ $product->p_img }}" class="card-img-left img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $product->p_name }}</h5>
                                <p style="color:#FFBF9B" class="text text-center"><b>{{ $product->p_price }} درهم</b>
                                </p>
                                <?php
                                $lists = explode(',', $product->p_description);
                                echo "<UL class=\"list-sp\">";
                                foreach ($lists as $list) {
                                    echo "<LI><p class=\"card-text\" style=\"font-size:14px\">$list</p></LI>";
                                }
                                echo '</UL>';
                                ?>
                                <button class="fcta-btn rounded-5" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    onclick="window.location.href='{{ route('AboutProduct', $product->id) }}';"><span
                                        class="text">اختار</span></button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <br>
        <br>
        <!--THE PRODUCT-->
        <div class="container mt-20">
            <div class="pd-container">
                <h2 style="font-family: 'Abril Fatface', cursive; font-family: 'Cairo', sans-serif;">المنتوج</h2>
                <p style="color:rgb(197, 196, 196) " class="text text-center">خصم 20% توصيل بالمجان و الدفع عند
                    الاستلام، سارعو و اطلبوا الان !</p>
                {{-- <img src="dash-lg.svg" width="30px"> --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-dash-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                </svg>
                <!---->
                {{-- row-cols-1 row-cols-md-3 row-cols-lg-4 --}}
                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4">
                    @foreach ($products as $product)
                        <div class="col d-flex align-items-center flex-column">
                            <img src="images/{{ $product->p_img_sec }}" class="img-des-product img-fluid">
                            <button class=" cta-btn  rounded-5" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                onclick="window.location.href='{{ route('AboutProduct', $product->id) }}';"><span
                                    class="text">شراء
                                    الآن
                                </span>
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
            <br>
            <br>
        </div>

        <!--footer-->
        <hr style="color:rgb(164, 163, 163)">
        <div class="d-flex align-items-center justify-content-center container">
            <img src="/images/Laneige.jpeg" class="logo">
        </div>
        <hr style="color:rgb(164, 163, 163)">
        <div class="container text-center">
            <br>
            <div class="row">
                <div class="col col-md-4 col-xs-12 ">
                    <div class="text text-center mb-0 p-0" style="font-weight:bold">اتصل بنا</div>
                    <hr width="25%" class="sm-line">
                    <div>
                        <p style="font-size:12px">اتصل بنا</p>
                        <p style="font-size:12px">الأسئلة المتكررة</p>
                    </div>
                </div>
                <div class="col col-xs-12 col-md-4">
                    <div class="text-center text" style="font-weight:bold">الشروط و السياسة</div>
                    <hr width="25%" class="sm-line">
                    <div>
                        <P style="font-size:12px">شروط اللإستخدام</P>
                        <p style="font-size:12px">سياسة اللإستبدال و الإسترجاع </p>
                        <p style="font-size:12px">سياسة الخصوصية</p>
                    </div>
                </div>
                <div class="col col-xs-12 col-md-4 text" style="font-weight:bold">
                    عن المتجر
                    <hr width="25%" class="sm-line">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>

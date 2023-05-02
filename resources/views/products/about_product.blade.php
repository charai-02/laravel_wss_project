<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product details</title>
    <!--Css Stylesheet-->
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="/css/product.css">
    <link rel="stylesheet" href="/css/header.css">
    <!--GOOGLE_FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Changa&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!--header-->
    <div class="HF-container">
        <div class="nav-container sticky-top shadow p-1 bg-body-tertiary white">
            <a href="/"><img src="/images/Laneige.jpeg" class="logo"> </a>
        </div>
        <!--product l_P -->
        <div class="d-flex flex-wrap container justify-content-between">
            <!--CAROUSEL-->
            <div class="  col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <div id="carouselExample" class="carousel slide border rounded-3"
                    style="padding:10px; background-color: rgba(211, 211, 211 , 0.2);">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/{{ $product->p_img }}" class=" d-block w-100 rounded-3">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/{{ $product->p_img }}" class="d-block w-100 ">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/{{ $product->p_img }}" class="d-block w-100 ">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!--DESCRIPTION PRODUCT-->
            <!--CARD-->
            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-6 ">
                <div class="card w-100 border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between flex-row mr-0 "
                            style="width:120px; margin-right:0px; margin-bottom:10px;">
                            <img src="Icons/star-fill.svg"class="star">
                            <img src="Icons/star-fill.svg" class="star">
                            <img src="Icons/star-fill.svg" class="star">
                            <img src="Icons/star-fill.svg" class="star">
                            <img src="Icons/star-fill.svg" class="star">
                        </div>
                        <h4 class="card-title" style="font-family:Cairo">{{ $product->p_name }}</h4>
                        <p style="color:rgb(180, 178, 178)" class="card-text">{{ $product->p_description }}</p>
                        <h3 style="color:#f7a678; margin-bottom: 12px;font-family:'Jomhuria', cursive; font-size:35px;"
                            class="text">درهم {{ $product->p_price }}</h3>
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <DIV style=" border-radius:4px; width:100%"
                                class="container d-flex flex-row justify-content-between">
                                <h6>الكمية :</h6>
                                <input
                                    style="border:none; background-color:rgb(240,240,240); text-align:center; width:100px;"
                                    type="number" min="1" max="100" value="1">
                            </DIV>
                        </div>
                        <!--button trigerred modal formulaire-->
                        <button class="cta-btn container btnform" type="button" class="btn btn-primary"
                            data-toggle="modal" data-target="#exampleModal">اضغط هنا للطلب</button>
                        <!-- Modal formulaire -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">إضافة تقييمك</h5>
                                        <button type="button" class="close"
                                            style="border:none; background-color: white;" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-group ml-20">
                                            <h2 class="text" style="margin-top:10px">معلومات الزبون</h2>
                                            <p
                                                style="color:rgb(177, 177, 177); font-size: 15px; margin-top:0px; margin-bottom:0px;">
                                                للطلب المرجوا إدخال معلوماتك في الخانات أسفله</p>
                                            <div class="row">
                                                <div class="col-12" height="40px">
                                                    <label for="Name" class="text">الإسم الكامل</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="الإسم الكامل">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-10">
                                                    <label for="Tel">رقم الهاتف</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="رقم الهاتف">
                                                </div>
                                            </div>
                                            <div class="row mb-10">
                                                <div class="col-12 mb-10">
                                                    <label for="City">المدينة</label>
                                                    <input type="text" class="form-control mb-10"
                                                        placeholder="المدينة">
                                                </div>
                                            </div>
                                            <div class="row mb-10 ">
                                                <div class="col-12">

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="vstack gap-2 col-md-5 mx-auto">
                                            <button type="button" class="btn" style="background-color:#f7a678">
                                                <p style="margin:0px; padding:0px;">تأكيد الطلب </p>
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary">
                                                <p style="margin:0px; padding:0px;">الخروج</p>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            


                <br>
                <!--Accordion: INGREDIENT , HOWITWORKS , BENEFITS-->
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button dir="rtl" class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                aria-expanded="false" aria-controls="flush-collapseOne">
                                <P> المكونات</P>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <?php
                                $lists = explode(',', $product->p_components);
                                echo "<UL class=\"list-sp\">";
                                foreach ($lists as $list) {
                                    echo "<LI><p class=\"card-text\" style=\"font-size:14px\">$list</p></LI>";
                                }
                                echo '</UL>';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button dir="rtl" class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                <P> كيفية الإستعمال</P>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">{{ $product->p_usage }}</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button dir="rtl" class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                aria-expanded="false" aria-controls="flush-collapseThree">
                                <P> المميزات</P>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <?php
                                $lists = explode(',', $product->p_avantage);
                                echo "<UL class=\"list-sp\">";
                                foreach ($lists as $list) {
                                    echo "<LI><p class=\"card-text\" style=\"font-size:14px\">$list</p></LI>";
                                }
                                echo '</UL>';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--CARD ADDED-->
        <div class="card text-white text-center p-15 border-right-0 border-left-0">
            <blockquote class="blockquote mb-0">
                <img src="/images/{{ $product->p_icon }}" width="50px" height="50px" style="margin-top:15px;">
                {{-- <p style="color:#f9cd09;">الليمون</p> --}}
                <p>  </p>
                <footer class="blockquote-footer">
                    <small>
                        <P>من أجل شفاه رطبة</P>
                    </small>
                </footer>
            </blockquote>
        </div>
        <br>

        <!--clients-opinion-->
        <div class="container-rating container d-flex flex-column align-items-center justify-content-center">
            <h3>تقييم الزبون</h3>
            <h6>أضف تقييمك</h6>
            <!--stars rating-->

            <!--button AO-->
            <!--using modals-->
            <!-- Button trigger modal -->
            <button class="cta-btn" type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#exampleModal">أضف تقييمك</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">إضافة تقييمك</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="recipient-name"
                                        placeholder="البريد الإلكتروني">
                                </div>
                                <br>
                                <div class="form-group">
                                    <textarea class="form-control" id="message-text" placeholder="اكتب تعليقك"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">الخروج</button>
                            <button type="button" class="btn btn-dark">حفظ تقييمك</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>




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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.min.js"
            integrity="sha384-VmD+lKnI0Y4FPvr6hvZRw6xvdt/QZoNHQ4h5k0RL30aGkR9ylHU56BzrE2UoohWK" crossorigin="anonymous">
        </script>
        <script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.bundle.min.js"
            integrity="sha384-40ix5a3dj6/qaC7tfz0Yr+p9fqWLzzAXiwxVLt9dw7UjQzGYw6rWRhFAnRapuQyK" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
</body>

</html>

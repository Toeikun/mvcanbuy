<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('template/head.php'); ?>
    <style type="text/css">
        html,
        body,
        header,
        .carousel {
            height: 60vh;
        }

        @media (max-width: 740px) {
            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #929FBA !important;
            }
        }
        .dropdown-toggle::after, .dropup .dropdown-toggle::after{
            content: none;
        }
        .truncate {
            width: 250px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .scrollspy-example {
            display: block;
            max-height: 230px;
            overflow-y: auto;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }
        #m-dropcart {
            right: -50px
        }
    </style>
</head>

<body>

    <?php include('template/header.php'); ?>

    <!--Main layout-->
    <main>
        <div class="container">
            <section class="mt-3 wowfadeIn">
                <div class="row">
                    <div class="col-3 text-center">
                        <div class="card hoverable clearfix" style="border-radius: 5rem;">
                            <div class="media">
                                <img class="d-flex mr-3 rounded-circle" width="60" src="./img/partner/taobao.png" alt="Generic placeholder image">
                                <div class="media-body truncate m-auto">
                                    Taobao
                                </div>
                                <div class="media-body truncate m-auto">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 text-center">
                        <div class="card hoverable clearfix" style="border-radius: 5rem;">
                            <div class="media">
                                <img class="d-flex mr-3 rounded-circle" width="60" src="./img/partner/1688.png" alt="Generic placeholder image">
                                <div class="media-body truncate m-auto">
                                    1688
                                </div>
                                <div class="media-body truncate m-auto">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 text-center">
                        <div class="card hoverable clearfix" style="border-radius: 5rem;">
                            <div class="media">
                                <img class="d-flex mr-3 rounded-circle" width="60" src="./img/partner/Tmall.png" alt="Generic placeholder image">
                                <div class="media-body truncate m-auto">
                                    Tmall
                                </div>
                                <div class="media-body truncate m-auto">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 text-center">
                        <div class="card hoverable clearfix" style="border-radius: 5rem;">
                            <div class="media">
                                <img class="d-flex mr-3 rounded-circle" width="60" src="./img/partner/JD.com.png" alt="Generic placeholder image">
                                <div class="media-body truncate m-auto">
                                    JD.com
                                </div>
                                <div class="media-body truncate m-auto">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mt-5">
                <h3 class="h3 text-center mb-5">อีเว้นท์ & โปรโมชั่น</h3>
                <div class="row wow fadeIn">
                    <div class="col-lg-4 col-md-12 mb-3">
                        <img src="https://mdbootstrap.com/img/Others/documentation/1.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-lg-4 col-md-12 mb-3">
                        <img src="https://mdbootstrap.com/img/Others/documentation/1.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-lg-4 col-md-12 mb-3">
                        <img src="https://mdbootstrap.com/img/Others/documentation/1.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </section>
            <section class="mt-5">
                <div class="clearfix">
                    <h3 class="float-left">สินค้ายอดนิยม</h3>
                    <a href="" class="text-dark float-right">ดูเพิ่ม ></a>
                </div>
            </section>
        </div>
    </main>
    <!--Main layout-->

    <?php include('template/script.php'); ?>
</body>

</html>
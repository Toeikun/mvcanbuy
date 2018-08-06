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
    
    <!--Main layout-->

    <?php include('template/script.php'); ?>
</body>

</html>
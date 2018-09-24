<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home Search</title>
        <link rel="stylesheet" href="../css/searchasset.css">
        <script type="text/javascript" src="searchproducts.js"></script>
    </head>
    <body>
       <?php include('../../gautam/html/navbar.html');echo("<style>.title{text-align: center;}</style>"); ?>
        <?php
        echo("<h2 style='text-align: center; color:grey'>Searched for " . $_GET["searchfor"] . "</h2><hr>");
        echo("<br>");
        ?>
        <div class="container">
            <div class="row">

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                    <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                    <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                    <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                    <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                    <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                    <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                </div>
            </div>
        </div>

    <?php include('../../gautam/html/footer.html'); ?>

    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home Page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <?php include('../../gautam/html/navbar.html');echo("<style>.title{text-align: center;}</style>"); ?>

        <section>
            <h1 style="text-align: center; font-size: 70px; margin-top: 35px;" class="content-title"></h1>
            <form class="search" action="../php/search.php" method="get">
                <div class="search__wrapper">
                    <input type="text" name="searchfor" placeholder="Search for the asset you are looking for.." class="search__field">
                    <button type="submit" class="fa fa-search search__icon"></button>
                </div>
            </form>
        </section>
        <style>
            footer {
                bottom: 0;
                height: 900px;
                left: 0;
                position: absolute;
                width: 100%;
            }</style>
        <?php include('../../gautam/html/footer.html'); ?>

    </body>
</html>

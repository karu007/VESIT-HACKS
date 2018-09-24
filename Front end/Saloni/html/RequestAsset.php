<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="../css/stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Request Asset</title>
        <style>
            h1
            {
                text-align:center;
                font-family: 'Anton', sans-serif;
            }
            #content1 {
                float: left;
                width: 50%;
                height:80%;
                background-color: #DDD;
            }
            #content2 {
                float: left;
                width: 50%;
                height:80%;
                background-color: #CCC;
            }
            .label {
                color: white;
                padding: 8px;
                font-family: Arial;
            }
            .info {background-color: #2196F3;} /* Blue */
            h2
            {
                font-family: Arial;
            }
            p
            {
                font-family: Arial;
            }
            footer
            {
                color: aliceblue;
            }
        </style>
    </head>
    <body>
        <?php include('../../gautam/html/navbar.html');echo("<style>.title{text-align: center;}</style>"); ?>

        <h1>Asset Name</h1>
        <div id="content1">
            <h2>Marker</h2>
            <p>This is used by.... </p>
            <hr>
            <span class="label info">Price:</span> Rs. <strong>15/-</strong><hr>
            <span class="label info">Current Holder:</span> <strong>Sheetal Ma'am</strong>
            <hr>
            <span class="label info">Quantity:</span> 
            <input type="number" name="quantity">

        </div>
        <div id="content2">
            <img src="../images/marker.jpg" class="img-thumbnail" alt="Asset" width="700px"><hr>
            <span class="label info">Type:</span>
            <span style="margin-left: 20px">
                <input type="radio" name="type" value="Hardware" style="margin-left: 20px">Hardware  <input type="radio" name="type" style="margin-left: 20px"> Software <input type="radio" name="type" style="margin-left: 20px">General
            </span>
        </div>
        <center>
            <button type="button" class="btn btn-primary" style="margin-top: 20px;margin-bottom: 20px">Request Access</button>
        </center>
        <?php include('../../gautam/html/footer.html'); ?>


    </body>
</html>

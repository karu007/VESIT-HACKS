<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="../css/stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Approval of Asset</title>
        <style>
            h1
            {
                text-align:center;
                font-family: 'Anton', sans-serif;
            }
            .wrapper {
                text-align: center;
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
        <div class="container">
            <div class="form-group">
                <label for="ProfName">Professor Name:</label>
                <input type="text" class="form-control" id="profname" placeholder="Enter Professor Name" name="email">
            </div>
            <hr>
            <div class="form-group">
                <label for="assetreq">Asset Required:</label>
                <input type="text" class="form-control" id="assetreq" placeholder="Enter your requirement" name="pwd">
            </div>
            <hr>
            <div class="form-group">
                <label for="assetreq">Status for Required Asset</label>
                <br>
                <label class="checkbox-inline">
                    <input type="checkbox" value="">New Asset
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="">Damaged Asset
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="">Currently Used
                </label>
                <hr>
            </div>
            <div>
                <label for="assetreq">Purpose:</label>
                <textarea class="form-control" rows="5" id="purpose"></textarea>
            </div>
            <br>
            <div>
                <button type="button" class="btn btn-primary">Approve</button>
            </div>
        </div>
        <?php include('../../gautam/html/footer.html'); ?>
    </body>
</html>

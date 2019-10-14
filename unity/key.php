<?php
    if(!isset($_GET['key']) || !isset($_GET['type'])){
        header("Location: 404");
        die();
    }
    else{
        $uniqueString = $_GET["key"];
        $type = $_GET["type"];
        $hashed = md5($uniqueString . $type);
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Serial Key - NullZerep</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Material-Style-Ripple-Button.css">
    <link rel="stylesheet" href="assets/css/Customizable-Background--Overlay.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <script>
        function copyFunc(){
            var copyText = document.getElementById("hash");
            document.getElementById("copyBtn").innerText = "COPIED";
            copyText.select();
            document.execCommand("copy");
        }
    </script>
</head>

<body>
    <div class="container d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center h-100 d-flex">
        <div class="jumbotron my-auto">
            <div style="height: 135px;background-color: #938c8c;margin-bottom: 7px;"></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group text-center">
                        <label style="font-weight: bold;">SERIAL KEY</label>
                        <input id="hash" style="text-align:center" type="text" class="form-control" value="<?php echo $hashed;?>">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-success" type="button" id="copyBtn" onclick="copyFunc()">COPY</button>
                    </div>
                    <div class="text-center"><label style="font-style: italic;color: rgb(111,111,111);margin-top: 34px;">Note : Copy the key and paste it on the mod menu</label></div>
                </div>
            </div>
            <div style="height: 135px;background-color: #938c8c;margin-top: 7px;"></div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Material-Style-Ripple-Button.js"></script>
</body>

</html>
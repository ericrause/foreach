<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" href="/bootstrap/js/bootstrap.bundle.js" />
<link rel="stylesheet" href="/bootstrap/css/bootstrap.css" />
<script src="/application/jQuery/jQuery.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <script type="text/javascript">

        let form = {};
        $(document).ready(function() {
            form.test = $('#test');
            form.test.on("click", function () {
                alert('test(((');
            })
        })
    </script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            test here
        </div>
        <div class="col-md-6" id="test">
            and also here
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            333
        </div>
        <div class="col-md-3">
            333
        </div>
        <div class="col-md-2">
            222
        </div>
        <div class="col-md-4">
            444
        </div>
    </div>
</div>

</body>
</html>
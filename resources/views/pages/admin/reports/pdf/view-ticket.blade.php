<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Daftar Pengguna</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: monospace;
        }
    </style>
</head>

<body>
    <img src="images/ticket.jpg" width="900" style="position: absolute; top:0; left:0;">
    <h3 style="position: absolute; bottom:122; right:83; z-index: 9999; color:#000000;">{{$swap_trash->date}}</h3>
    <h3 style="position: absolute; bottom:55; right:43; z-index: 9999; color:white;">{{$swap_trash->token}}</h3>

</body>

</html>
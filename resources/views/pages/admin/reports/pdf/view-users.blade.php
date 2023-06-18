<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Daftar Pengguna</title>
</head>

<body>
    <img src="images/logo.png" width="200" style="position: absolute; top:0; left:0;">
    <table width="770" style="margin-bottom: 15px;">
        <tr>
            <th colspan="7" style="text-align: center; vertical-align: middle;"><b><span style="font-size: 17px;">LITTER LIFT (Bank Sampah)</span><br>WISATA PANTAI SENDANG BIRU MALANG<br>Telp 0811-3785-758 | e-mail : pantaisendangbiru@gmail.com<br>MALANG 65176</b></th>
        </tr>
    </table>
    <hr style="border-bottom: gray double;">
    <h3 style="text-align: center;">Daftar Semua Pengguna</h3>

    <table>
        <tr>
            <td></td>
            <td>Tanggal : <?= date('l, d M Y'); ?></td>
        </tr>
        <tr>
            <td></td>
            <td>Jam : <?= date('H:i a'); ?></td>
        </tr>
    </table>

    <table border="1" cellpadding="5" width="770" style="margin-top: 10px;">
        <thead>
            <tr>
                <th width="3"><b>No.</b></th>
                <th width="30"><b>Nama</b></th>
                <th width="15"><b>Email</b></th>
                <th width="15"><b>Jenis Kelamin</b></th>
                <th width="23"><b>Alamat</b></th>
                <th width="15"><b>Telepon</b></th>
                <th width="11"><b>Role</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->phone}}</td>
                <td>
                    @if($user->role == 'admin')
                    Admin
                    @elseif($user->role == 'user')
                    User
                    @endif
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
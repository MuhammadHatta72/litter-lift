<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Daftar Tukar Sampah</title>
</head>

<body>

    <img src="images/logo.png" width="200" style="position: absolute; top:0; left:0;">
    <table width="770" style="margin-bottom: 15px;">
        <tr>
            <td></td>
            <th colspan="6" style="text-align: center; vertical-align: middle;"><b><span style="font-size: 17px;">LITTER LIFT (Bank Sampah)</span><br>WISATA PANTAI SENDANG BIRU MALANG<br>Telp 0811-3785-758 | e-mail : pantaisendangbiru@gmail.com<br>MALANG 65176</b></th>
        </tr>
    </table>

    <h3 style="text-align: center;">Daftar Tukar Sampah</h3>

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

    <table border="1" width="770" style="margin-bottom: 15px;">
        <thead>
            <tr>
                <th width="3"><b style="text-align: center;">No.</b></th>
                <th width="35"><b>Pengguna</b></th>
                <th width="8"><b>Token</b></th>
                <th width="15"><b>Tanggal</b></th>
                <th width="15"><b>Total Sampah</b></th>
                <th width="30"><b>Total Uang</b></th>
                <th width="11"><b>Tukar Dengan</b></th>
                <th width="11"><b>Bank</b></th>
                <th width="11"><b>Nomor Rekening</b></th>
                <th width="11"><b>Pesan</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach($swaptrashs as $swaptrash)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$swaptrash->user->name}}</td>
                <td>{{$swaptrash->token}}</td>
                <td>{{$swaptrash->date}}</td>
                <td>{{$swaptrash->total_weight}} Gram</td>
                <td>Rp. {{number_format($swaptrash->total_money, 0, ',', '.')}}</td>
                <td>
                    @if($swaptrash->choose_ticket_money == 'money')
                    Uang
                    @else
                    Tiket
                    @endif
                </td>
                <td>{{$swaptrash->bank_name}}</td>
                <td>{{$swaptrash->no_rekening}}</td>
                <td>{{$swaptrash->message}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
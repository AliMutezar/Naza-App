<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Lead Notification</title>
</head>
<body>
    <h2>Pemberitahuan Calon Klien Baru</h2>
    
    <p>Halo Tim Nazaconsults,</p>
    
    <p>Ada calon klien nih, baru saja dia melakukan submit data</p>
    
    <p>Beberapa rincian informasi dari calon klien bisa dilihat ya :</p>

    <ul>
        <li><strong>Nama:</strong> {{ $customerName }}</li>
        <li><strong>Email:</strong> {{ $customerPhone }}</li>
        <!-- Tambahkan rincian lainnya sesuai kebutuhan -->
    </ul>

    <p>Yuk, segara hubungi calon klien. Terimakasih ya</p>

    <!-- Button/link ke halaman administrasi atau formulir pengelolaan lead -->
    <a href="{{ route('customer.data') }}" style="display: inline-block; padding: 10px 20px; background-color: #3490dc; color: #ffffff; text-decoration: none; border-radius: 5px;">Lihat Client</a>
</body>
</html>

<!-- home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
</head>
<body>
    <div>
        <h2>{{ $judulTentang }}</h2>
        <p>{{ $isiTentang }}</p>
    </div>
    <div>
        <h2>{{ $judulLayanan }}</h2>
        <ul>
            @foreach($daftarLayanan as $layanan)
                <li>{{ $layanan }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>

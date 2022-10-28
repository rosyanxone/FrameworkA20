<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Web Icon -->
    <title>Pixel: Rental Ps</title>
    <link rel="shortcut icon" href="img/background/logo-p.png">

    <!-- Link Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/213e56f9ea368890b9d2da0577e49dab?family=Zona+Pro" rel="stylesheet" type="text/css"/>

    <!-- CSS -->
    <link rel="stylesheet" href={{ asset('stylesheet/style.css') }}>
    <link rel="stylesheet" href="stylesheet/style-mobile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <section class="con-card {{ $rentalps->brand_id == 1 ? 'read-con' : 'read-con2' }}">
        <div class="card w-50">
            <div class="card-body">
                <h3><strong>READ DATA</strong></h3>
                <hr>
                <table class="table table-borderless">
                    <tr>
                        <td>
                            <h4>Consoles</h4>
                        </td>
                        <td>
                            <h4>:</h4>
                        </td>
                        <td>
                            <h4>{{ $rentalps->brand->merek }}</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Type</h4>
                        </td>
                        <td>
                            <h4>:</h4>
                        </td>
                        <td>
                            <h4>{{ $rentalps->jenis }}</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Price per day</h4>
                        </td>
                        <td>
                            <h4>:</h4>
                        </td>
                        <td>
                            <h4>Rp.{{ $rentalps->harga }}</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Price per week</h4>
                        </td>
                        <td>
                            <h4>:</h4>
                        </td>
                        <td>
                            <h4>Rp.{{ $rentalps->per_week }}</h4>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
</body>
</html>
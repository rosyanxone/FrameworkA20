<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Web Icon -->
    <title>Pixel: Rental Ps</title>
    <link rel="shortcut icon" href={{ asset("img/background/logo-p.png") }}>

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
    <section class="update-con con-card">
        <div class="card w-50">
            <form action="{{ route('update', $rentalps->id) }}" method="post" class="card-body">
                <h3><strong>UPDATE DATA</strong></h3>
                <hr>
                <div class="btn-success">
                    <a class="text-dark btn btn-success text-white" href="/"><i class="fa-sharp fa-solid fa-arrow-left"></i> Back</a>
                </div>
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="jenis" class="form-label">Type</label>
                    <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" value="{{ $rentalps->jenis }}" placeholder="Console Type" required>

                    @error('jenis')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Price</label>
                    <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ $rentalps->harga }}" placeholder="Price per day" required>

                    @error('harga')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="per_week" class="form-label">Price/week</label>
                    <input type="number" class="form-control @error('per_week') is-invalid @enderror" id="per_week" name="per_week" value="{{ $rentalps->per_week }}" placeholder="Price per week" required>

                    @error('per_week')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="brand_id" class="form-label ">Publisher</label>
                    <select name="brand_id" id="brand_id" class="form-select @error('brand_id') is-invalid @enderror" aria-label="Default select example">
                        <option value="" selected disabled>Choose publisher</option>
                        @foreach ($brands as $brand)
                            <option value={{ $brand->id }} @php echo $brand->id == $rentalps->brand_id ? 'selected' : ''; @endphp>{{ $brand->merek }}</option>
                        @endforeach
                    </select>

                    @error('brand_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-warning w-100">Update List</button>
                </div>
            </form>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/a374d5ed26.js" crossorigin="anonymous"></script>
</body>
</html>
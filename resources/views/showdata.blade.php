<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Data Pengeluaran || Rajendra Rakha</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>

    <h4>Nama : Rajendra Rakha</h4>
    <div class="row">
        <form action="" method="get">
            <div class="col-2">
                <div class="form-group">
                    <select id="my-select" class="form-control" name="tahun">
                        <option value="">Pilih Tahun</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary">
                    Tampilkan
                </button>
            </div>
        </form>
    </div>
    <div class="container">
        <table class="table table-borderless table-dark">
            <thead>
                <tr class="table-dark">
                    <th rowspan="2" style="text-align:center;vertical-align: middle;width: 250px;">Menu</th>
                    <th colspan="12" style="text-align: center;">Periode Pada 2021
                    </th>
                    <th rowspan="2" style="text-align:center;vertical-align: middle;width:75px">Total</th>
                </tr>


                <tr class="table-dark">
                    <th style="text-align: center;width: 75px;">Jan</th>
                    <th style="text-align: center;width: 75px;">Feb</th>
                    <th style="text-align: center;width: 75px;">Mar</th>
                    <th style="text-align: center;width: 75px;">Apr</th>
                    <th style="text-align: center;width: 75px;">Mei</th>
                    <th style="text-align: center;width: 75px;">Jun</th>
                    <th style="text-align: center;width: 75px;">Jul</th>
                    <th style="text-align: center;width: 75px;">Ags</th>
                    <th style="text-align: center;width: 75px;">Sep</th>
                    <th style="text-align: center;width: 75px;">Okt</th>
                    <th style="text-align: center;width: 75px;">Nov</th>
                    <th style="text-align: center;width: 75px;">Des</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td class="table-secondary" colspan="14"><b>Makanan</b></td>
                </tr>

                @foreach ($datamenu as $menu )

                @if ($menu['kategori'] == 'makanan')
                
                <tr>
                    <td class="table" style="text-align: left;">{{$menu['menu']}} </td>
                    <td class="table" style="text-align: left;">1111111111</td>
                    <td class="table" style="text-align: left;">1111111111</td>
                   

                </tr>
                
                @endif
                @endforeach




                <tr>
                    <td class="table-secondary" colspan="14"><b>Minuman</b></td>
                </tr>

                @foreach ($datamenu as $menu)
                @if ($menu['kategori'] == 'minuman')
                <tr>
                    <td class="table" style="text-align: left;">{{$menu['menu']}}</td>
                </tr>
                @endif
                @endforeach



            </tbody>


        </table>
    </div>
</body>

</html>
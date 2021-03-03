<html>

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="description" content="Login TiketSaya Admin">
    <meta name="keywords" content="TiketSaya, Web Dashboard TiketSaya, Login TiketSaya">
    <meta name="author" content="BWA Team">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>


    @include('includes.sidebar')
    
    <div class="main-content">
        <div class="header row">
            <div class="col-lg-12">
                <p class="header-title">
                    Ticket Sales
                </p>
                <p class="sub-header-title">
                    The items are bought around the world
                </p>
            </div>
        </div>

        <div class="row report-group">
            <div class="col-lg-12">
                <div class="item-big-report col-lg-12">


                    <table class="table-tiketsaya table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Teknisi</th>
                                <th scope="col">Nama Inventaris</th>
                                <th scope="col">Merk / Type</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">No.Inventaris</th>
                                <th scope="col">Jangka Waktu</br>Pemeliharaan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <!---<td scope="row user-table-item"></td> -->
                                <td>1</td>
                                <td>Kiki Krestanto</td>
                                <td>AC</td>
                                <td>Panasonic / Split / CUPN 12 RKJ</td>
                                <td>G.A</td>
                                <td>2.5 PK</td>
                                <td>3 Bulan</td>
                                <td>
                                    <a href="sales_detail.html" class="btn btn-small-table btn-primary ">Details</a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Mamat Ngebut</td>
                                <td>Control Exhaust Fan</td>
                                <td>Test</td>
                                <td>Toilet</td>
                                <td>2.5 PK</td>
                                <td>1 Bulan</td>
                                <td>
                                    <a href="#" class="btn btn-small-table btn-primary ">Details</a>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Jamal</td>
                                <td>Mobil</td>
                                <td>Kijang Innova</td>
                                <td>Parkiran</td>
                                <td>Test</td>
                                <td>1 Minggu</td>
                                <td>
                                    <a href="#" class="btn btn-small-table btn-primary ">Details</a>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Sobar</td>
                                <td>APAR</td>
                                <td>Test</td>
                                <td>Pantry</td>
                                <td>Test</td>
                                <td>6 Bulan</td>
                                <td>
                                    <a href="#" class="btn btn-small-table btn-primary ">Details</a>
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>Malih</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td><td>
                                    <a href="#" class="btn btn-small-table btn-primary ">Details</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>

    @include('includes.script')
</body>

</html>

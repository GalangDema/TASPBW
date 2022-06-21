<!doctype html>
<html lang="en">
    <head>
        <title>Data Mahasiswa</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">  
    </head>

    <style>
        body{
            background:rgb(21, 18, 18);
            font-family:sans-serif;
        }
        
        .banner-area{
            width:100%;
            height:100vh;
            background-image:linear-gradient(rgba(0, 0, 0, 0.675),rgba(0, 0, 0, 0.615)),
            url(https://images4.alphacoders.com/936/936378.jpg);
            background-size:cover;
        }
    </style>
     
     <body>
        <div class="body">
            <div class="banner-area">
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 p-1 text-center bg-info">
                            <div class="mt-2 mr-2">
                                <h1 class="float-left text-white">&nbsp HOME</h1>
                                <div class="dropdown float-right" > 
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-person-square"></i>User
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">{{Auth::user()->nama_user ?? ''}}</a>
                                    <a class="dropdown-item" href="/user">Data Pengguna</a>
                                    <a class="dropdown-item" href="/logout">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div></div></div>
                    
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-3 col-sm-4 col-12">
                                        <div class="nav flex-column nav-pills" role="tablist" ariaorientation="vertical">
                                            <a class="nav-link bg-info text-white rounded-0 p-4 border active" href="/home">Home</a>
                                            <a class="nav-link bg-info text-white rounded-0 p-4 border" href="#">Dosen</a>
                                            <a class="nav-link bg-info text-white rounded-0 p-4 border" href="/mahasiswa">Mahasiswa</a>
                                            <a class="nav-link bg-info text-white rounded-0 p-4 border" href="#">Skripsi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            <tbody class="text-white text-center">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <br>
                                                        <h5 class="text-white">
                                                            Halo Selamat Datang di Website Ini.<br>
                                                            Tujuan Website ini untuk menyelesaikan TAS PRAKTIK PEMROGRAMAN WEB.<br>
                                                            Terima kasih
                                                        </h5>
                                                </div>
                                            </div> 
                                        </tbody>
                                    </div>
                                </div>

                        </div>
                    
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
        q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    </body>
    </html>
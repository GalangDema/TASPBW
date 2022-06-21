<!doctype html>
<html lang="en">
    <head>
        <title>Tambah Data User</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    </head>

    <style>
        body{
            background:rgb(21, 18, 18);
            font-family:sans-serif;
        }
        
        .banner-area{
            width:100%;
            height:100vh;
            background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),
            url(https://images4.alphacoders.com/936/936378.jpg);
            background-size:cover;
        }
    </style>

    <body>
        <div class="body">
            <div class="banner-area">

                <div class="container-fluid mt-4 rounded text-white">
                    <h1 class="text-white text-center"><br>Tambah User</h1>
                    <form action="/user/saveuser" method="POST" class="pt-2 pb-2"> 
                    @csrf
                    <div class="form-group w-25">
                        <label>NIK User</label>
                        <input type="text" name="nik_user" class="form-control" placeholder="Masukkan NIK User" autofocus required> 
                    </div>

                    <div class="form-group w-25">
                        <label>Nama User</label>
                        <input type="text" name="nama_user" class="form-control" placeholder="Masukkan Nama User" required> 
                    </div> 
                    
                    <div class="form-group w-25">
                        <label>No HP User</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No HP User" required>
                    </div> 
                    
                    <div class="form-group w-25">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                    </div> 
                    
                    <div class="form-group pt-4">
                        <input type="submit" value="SIMPAN" class="btn btn-outline-primary float-left">
                        
                    </div>
                </form>
            </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
<!doctype html>
<html lang="en">
    <head>
        <title>Data User</title>
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
                background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),
                url(https://images4.alphacoders.com/936/936378.jpg);
                background-size:cover;
            }
            .input-form {
              margin: 0;
              display: flex;
              justify-content: center;
              height: 15vh;
            }
        </style>
        <div class="banner-area">
          <br><br>
          
          <body class="text-center text-white">
            <div class="body">
              <div class="input-form">
                <main class="form-signin w-10 m-auto">
                  <form action="/user/ceklogin" method="POST">
                    @csrf
                    <img class="mb-4"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ63YrK2kHLHgo96STywVLVyicOO0rNfqs9YA&usqp=CAU" 
                    alt="" width="120" height="120">
                    <h1 class="h3 mb-3 fw-normal">Silakan sign in</h1>
                    
                    @if (session('alert-logout'))
                    <div class="alert alert-warning alert-dis,issable fade show" role="alert">
                        <strong>{{ session('alert-logout') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">
                            <i class="bi bi-plug-fill"></i>
                          </span>
                        </button>
                    </div>

                    @endif

                    <div class="input-form">
                      <div class="form-floating">
                        <label for="floatingInput">No HP</label>
                        <input type="number" name="no_hp" class="form-control" id="floatingInput" placeholder="no_hp">
                      </div>
                    </div>

                    <div class="input-form">
                      <div class="form-floating">
                        <label for="floatingPassword">Password</label>
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                      </div>
                    </div>
                    
                
                    <button class="w-10 btn btn-lg btn-primary" type="submit" value="simpan">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; By Galang Nichola Demalima <br> Since 2022 </p>
                  
                </form>
              </main>
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
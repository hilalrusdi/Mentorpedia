<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="profil.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
        <div class="position-absolute top-50 start-50 translate-middle">
        <div class="body-profil d-md-flex">
            <div class="box-1 mt-md-0 mt-5"> 
                

                <div class="m-3 text-start text-color-prymary">
                    <h1 class="fs-5 mt-0">Setup Profil</h1>
                    <div class="d-flex flex-column mt-2">
                        <form action="/setup-profile" class="mt-2" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="nama" class=" form-control @error('nama') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="text" name="alamat" class=" form-control @error('alamat') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="text" name="no_telp" class=" form-control @error('no_telp') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Telp">
                                @error('no_telp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- <div class="pict card-body text-center border">
                                <div class="mt-4 mb-4 d-none d-md-block">
                                    <img id="frame" src="images (1).jpg" class="img-fluid frame" />
                                </div>
                            </div> --}}
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Default file input example</label>
                                <input class="form-control @error('foto_profil') is-invalid @enderror" name="foto_profil" type="file" id="formFile">
                                @error('foto_profil')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <input type="hidden" name="id_user" value="{{ $id }}">
                            <div class="d-grid gap-2 mt-lg-4">
                                <button class="btn btn-primary" type="submit">Simpan Profil</button>
                            </div>
                            

                        </form>
                    </div>
                </div> 

            </div>
           
        </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
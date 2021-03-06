<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
        <div class="position-absolute top-50 start-50 translate-middle">
        <div class="body-create-data d-md-flex">
            <div class="box-1 d-flex flex-column h-100">
                <div class="m-5 text-start text-color-prymary">
                    <h1 class="fs-3 mt-0">Profil Pengajar</h1>
                    <div class="d-flex flex-column mt-2">
                        <form class="mt-2" action="/setup-pengajar" method="post">

                            <input type="hidden" name="id_user" value="{{ $id }}">

                            <div class="mb-3">
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama ( Sesuai KTP )">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="tl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"  placeholder="Alamat ( Sesuai KTP )"></textarea>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="domisili" id="exampleFormControlTextarea1" rows="4"  placeholder="Domisili"></textarea>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="biodata" id="exampleFormControlTextarea1" rows="6"  placeholder="Biodata ( Termasuk riwayat pendidikan dan prestasi )"></textarea>
                            </div>

                            <input type="hidden" name="account_status" value="unverified">

                            {{-- Picture file dummy for now --}}
                            <input type="hidden" name="scan_ktp" value="dummy_ktp">
                            <input type="hidden" name="scan_ijazah" value="dummy_ijazah">
                            <input type="hidden" name="transkrip_nilai" value="dummy_nilai">
                            
                                                        

                            
                        </form>
                    </div>
                </div> 
                
            </div>

            <div class=" box-2 d-flex flex-column h-100">
                <div class="m-5 text-start text-color-prymary">
                    <div class="pict card-body text-center border">
                        <div class="mt-4 mb-4 d-none d-md-block">
                            <img id="frame" src="https://bootstrapious.com/i/snippets/sn-img-upload/image.svg" class="img-fluid" />
                        </div>
                    </div>
                    <div class="ml-2 mt-2">
                        <div class="mb-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" for="formFile">Scan KTP</span>
                                </div>
                                
                                <input class="form-control text-center border input-group" type="file" id="formFile" onchange="preview()">
                                
                                
                            </div>

                            
                        </div>
                        <div class="mb-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class=" input-group-text" for="formFile">Scan Ijazah</span>
                                </div>
                                
                                <input class="form-control text-center border input-group" type="file" id="" >
                                
                                
                            </div>

                            
                        </div>
                        <div class="mb-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class=" input-group-text" for="formFile">Scan Transkripnilai</span>
                                </div>
                                
                                <input class="form-control text-center border input-group" type="file" id="" >
                                
                                
                            </div>

                            
                        </div>
                        
                        
                    </div>

                    <div class="d-grid gap-2 mt-lg-3">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>

                    
                </div>
                

                
            </div>


        </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="review_image.js"></script>
  </body>
</html>
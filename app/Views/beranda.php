<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="assets/logopaku.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />

    <link href="<?= base_url() ?> /public/vendor/fontawesome-free/css/fontawesome.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>/public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>/public/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="<?= base_url() ?>/public/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css"/>


    <title>SB_USER</title>
  </head>
  <body>
   
    <!-- NAVBAR -->
    <div class="row" id="navbar">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="col-sm-12 text-center mb-5 ml-5">
                <center>
                <h1 class="text-center ml-">Daftar pesan lapangan di YupiBear</h1>
                </center>
                <a href="#About" onclick="tryLaporan()" class="badge badge-info">About</a>
                <a href="#Fasilitas" onclick="tryPengaturan()" class="badge badge-info">Fasilitas</a>
                <a href="#Contact" onclick="tryPass()" class="badge badge-info">Contact</a>
                
                <a href="#" class="badge badge-info"" onclick="tryLogin()">Admin</a>
            </div>

        </div>
      </nav>
    </div>
    <!--Akhir Navbar-->

    <!--carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="public/images/lapangandua.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="public/images/lapangandua.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="public/images/lapangandua.jpeg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--akhir carousel-->
  
    


  <!--about-->

       <section class="about" id="About" >
        <div class="container py-5 px-5">
            <div class="row text-center ">
                <div class="col">
                    <h2>Lapangan Futsal YupiBear </h2>

                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                 <div class="col-5 mb-5 ">
                     <p>Lapangan Futsal Vinyl: Material yang terdiri dari tiga lapisan utama yaitu compact layer, glass fiber, dan printing layer. Lapisan paling luar adalah UV Coated Wear Layer. Lapisan ini nampak mengkilap dan terkesan licin. dan mempunyai pencahayaan sangat terang dan bagus , dan memiliki papan skor  </p>
                 </div>
                 <div class="col-5">
                     <p>Jenis lapangan futsal rumput sintetis merupakan salah satu jenis lapangan yang paling banyak dijumpai dan populer di Indonesia. Material rumput sintetis yang digunakan membuat bola menjadi lebih mudah dikontrol dan juga aman saat ada pemain yang terjatuh. </p>
                 </div>
            </div>
        </div>
    </section>
    <!--end about-->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#6cdeff" fill-opacity="1" d="M0,32L80,69.3C160,107,320,181,480,176C640,171,800,85,960,69.3C1120,53,1280,107,1360,133.3L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">

      </path>
    </svg>



    <!--fasilitas-->
    
    <section class="skills " id="Fasilitas">
        <div class="container">
        <h1 class="text-center" mt-6>Fasilitas</h1>
        <div class="row text-center" data-aos="flip-right" data-aos-duration="2000">
          <div class="col"><img src="public/images/parkiran.jpg" alt="HTML" width="200">
          <h3 mb-6>Parkiran </h3>
          </div>
          <div class="col"><img src="public/images/toilet.jpeg" alt="CSS" width="200">
          <h3 mb-6>Toilet</h3>
          </div>
          <div class="col"><img src="public/images/musholaa.jpeg" alt="JavaScript" height="150" width="200">
          <h3>Mushola</h3>
          </div>
          <div class="col"><img src="public/images/kantin.jpeg" alt="PHP" height="150"width="200">
          <h3>Kantin</h3>
          </div>
       
         
        </div>

  

      </div>
       
      </section>
      
  
      <!--END FASILITAS-->


    
    

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6cdeff" fill-opacity="1" d="M0,32L80,69.3C160,107,320,181,480,176C640,171,800,85,960,69.3C1120,53,1280,107,1360,133.3L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>

        <center>
      <div class="col-md-7 mt-5 ">
                <div class="card">
                    <div class="card-header">
                        
                        <h4 class="card-title">Tambah Pesanan</h4>
                        <p class="badge badge-danger" id="pesanError"></p>
                    
                    <div class="card-body ">

                        <form class="">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Jam</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="jam" name="jam">
                                        <?php if ($pengaturan["jamBuka"] > $pengaturan["jamTutup"]) {
                                            for ($i = $pengaturan["jamBuka"]; $i < 24; $i++) {
                                                echo "<option value='" . $i . "'>" . $i . ":00</option>";
                                            }
                                            for ($i = 1; $i < $pengaturan["jamTutup"] + 1; $i++) {
                                                echo "<option value='" . $i . "'>" . $i . ":00</option>";
                                            }
                                        } else {
                                            for ($i = $pengaturan["jamBuka"]; $i < $pengaturan["jamTutup"] + 1; $i++) {
                                                echo "<option value='" . $i . "'>" . $i . ":00</option>";
                                            }
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Lapangan</label>
                                <div class="col-sm-10">
                                    <select id="lapangan" class="form-control">
                                        <?php for ($i = 0; $i < $pengaturan["jmlLap"]; $i++) : ?>
                                            <option value="<?= $i + 1 ?>">Lapangan <?= $i + 1 ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Bayar/DP</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="bayar" name="bayar">
                                </div>
                            </div>
                        </form>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <button class="btn btn-info" onclick="tambah()" id="tambah">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            

    </div>

    </center>

    <!--end model -->

     <!-- Modal -->
     <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Log in Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="pesanError" class="badge badge-danger"></p>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="pass" name="password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="login" onClick="login()" class="btn btn-info">Log in</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
    <!--end modal-->
    
    

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6cdeff" fill-opacity="1" d="M0,32L80,69.3C160,107,320,181,480,176C640,171,800,85,960,69.3C1120,53,1280,107,1360,133.3L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>

    
     <!--contact-->

     <section class="contact"  id="Contact">
        <div class="container">
            <div class="row text-center ">
                <div class="col mb-5">
                    <h2>MAPS</h2>
    
                  
                    <iframe class="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3314.7440150405637!2d106.71105978064529!3d-6.1848351279612395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9d20357f0f1%3A0xb7f0d9ea25ba04b6!2sJl.%20Gg.%20Darun%20Gholi%20No.75%2C%20RT.003%2FRW.003%2C%20Petir%2C%20Kec.%20Cipondoh%2C%20Kota%20Tangerang%2C%20Banten%2015147%2C%20Indonesia!5e1!3m2!1sen!2sus!4v1642595820926!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                          <div class="jud-section mb-5">Find Us Here</div>
    
                    <div class="medias">
                     
                      <a href="https://instagram.com/frankyqiryna_">
                        <i class="fab fa-instagram media"></i>
                      </a>
                     
                      <a href="https://wa.me/+6282110872609">
                        <i class="fab fa-whatsapp media"></i>
                      </a>
                    </div>
    
    
                    </div>
    
                </div>
            </div>
       </div>
    </section>
       <!--end  contact-->  


   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src=
    "https://code.jquery.com/jquery-3.3.1.min.js">
      </script>
    <script>
      const galleryCard = document.querySelectorAll('.allcard');

      galleryCard.forEach((img, i) => {
          img.dataset.aos = 'fade-right';
          img.dataset.aosDelay = i * 500;
      })

      AOS.init({
        once: true,
      });
      
      //Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 520 || document.documentElement.scrollTop > 520) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  documentcontainerFFGG.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
    </script>
    </script>
  
  


    <script src="index.js"></script>



    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>/public/vendor/jquery/jquery.min.js"></script>

    <script>
        tampilkan()

        function tambah() {
            $("#pesanError").html("")
            var nama = $("#nama").val()
            var tanggal = $("#tanggal").val()
            var jam = $("#jam").val()
            var lapangan = $("#lapangan").val()
            var bayar = $("#bayar").val()
            if (nama == "") {
                $("#nama").focus()
            } else if (tanggal == "") {
                $("#tanggal").focus()
            } else if (bayar == "") {
                $("#bayar").focus()
            } else {
                $.ajax({
                    url: '<?= base_url() ?>/admin/tambah',
                    method: 'post',
                    data: "nama=" + nama + "&tanggal=" + tanggal + "&jam=" + jam + "&lapangan=" + lapangan + "&bayar=" + bayar,
                    dataType: 'json',
                    success: function(data) {
                        console.log(data)
                        if (data) {
                            $("#pesanError").html(data)
                        } else {
                            $("#nama").val("")
                            $("#tanggal").val("")
                            $("#bayar").val("")
                            tampilkan()
                        }
                    }
                });
            }

        }

        function tryLogin() {
            $("#pass").val("")
            $("#pesanError").html("")
            $("#modalLogin").modal("show")
            $("#pass").focus()
        }

        function login() {
            var pass = $("#pass").val()
            $.ajax({
                url: '<?= base_url() ?>/beranda/login',
                method: 'post',
                data: "pass=" + pass,
                dataType: 'json',
                success: function(data) {
                    if (data) {
                        $("#pesanError").html(data)
                    } else {
                        $("#modalLogin").modal("hide")
                        window.location.href = "<?= base_url("/admin") ?>"
                    }
                }
            });
        }

        function tampilkan() {
            var tanggal, jam = "";

            $.ajax({
                url: '<?= base_url() ?>/beranda/pesanan',
                method: 'post',
                data: "",
                dataType: 'json',
                success: function(data) {
                    for (let i = 0; i < data.length; i++) {
                        tanggal = data[i].tanggal;
                        jam = data[i].jam;
                        $("#k" + tanggal + jam + data[i].lapangan).html(data[i].nama)

                    }
                }
            });
        }

        function ubahWarna() {
            noWarna = parseInt($("#noWarna").val(), 10)
            var warna = ["#ADFF2F", "#7FFF00", "#7CFC00", "#00FF00", "#32CD32", "#98FB98", "#90EE90", "#00FA9A", "#00FF7F", "#3CB371", "#2E8B57", "#228B22", "#008000", "#006400", "#9ACD32", "#6B8E23", "#556B2F", "#66CDAA", "#8FBC8F", "#20B2AA", "#008B8B", "#008080", "#00FFFF", "#00FFFF", "#E0FFFF", "#AFEEEE", "#7FFFD4", "#40E0D0", "#48D1CC", "#00CED1", "#5F9EA0", "#4682B4", "#B0C4DE", "#ADD8E6", "#B0E0E6", "#87CEFA", "#87CEEB", "#6495ED", "#00BFFF", "#1E90FF", "#4169E1", "#0000FF", "#0000CD", "#00008B", "#000080", "#191970"]
            $(".borderya td").css({
                "border": "1px solid " + warna[noWarna]
            })
            $(".borderya th").css({
                "border": "1px solid " + warna[noWarna]
            })
            if (noWarna >= warna.length) {
                noWarna = -1
            }
            noWarna += 1
            $("#noWarna").val(noWarna)
        }

        // const interval = setInterval(function() {
        //     ubahWarna()
        // }, 2000);
    </script>

    <script src="<?php echo base_url() ?>/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>/public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>/public/js/sb-admin-2.min.js"></script>









   
  </body>
</html>

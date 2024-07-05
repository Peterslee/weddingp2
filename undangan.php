<?php
if (isset($_GET['nama']) OR isset($_GET['email']))
{
   $nama=$_GET['nama'];
//    $email=$_GET['email'];
   $nama=htmlspecialchars($nama);
//    $email=strip_tags($email);
}
else
{
   header("Location:index.php?error=variabel_belum_diset");
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Pria & Wanita</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/chtbox.css">
</head>

<body>
    <div class="d-flex flex-row">
        <img src="asset/image/flowerOne.svg" class="rounded float-start img-fluid componen-left">
    </div>
    <div class="d-flex flex-row-reverse">
        <img src="asset/image/flowerTwo.svg" class="rounded float-end img-fluid componen-right">
    </div>
    <div class="container">
        <section class="componen-one">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <img src="asset/image/image.svg" class="img-u-berdua">
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <p class="font-one fs-2 color-one">Ujang Patimuara Gajali & Rabiatul Adawiya</p>
                    <p class="mt-4 fs-6 font-two text-dark">
                        Kepada Bapak/Ibu/Saudara/i
                    </p>
                    <p class="fs-4 text-bod font-two fw-bold text-dark">
                        <?php echo $nama ?>
                    </p>
                    <p class="fs-6 font-two text-dark">
                        Kami Mengundang Anda Untuk Hadir Di Acara Pernikahan Kami.
                    </p>
                    <a class="btn btn-default font-two fw-bold" href="weding.html" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="18    " height="18    " fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                        </svg>&nbsp; Buka Undangan
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section>
        <audio id="audio" autoplay loop="loop">
            <source src="tes2.mp3" type="audio/mp3">
        </audio>

        <button id="playPauseBTN" class="btn btn-audio" onclick="playPause()">
            <label for="click" class="label-box">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-play-circle icon-chatbox" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
                </svg>
            </label>
        </button>

        <script>
            var audio = document.getElementById('audio');
            var playPauseBTN = document.getElementById('playPauseBTN');
            var count = 0;

            function playPause() {
                if (count == 0) {
                    count = 1;
                    audio.pause();
                } else {
                    count = 0;
                    audio.play();
                }
            }

            function stop() {
                playPause()
                audio.pause();
                audio.currentTime = 0
            }
        </script>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
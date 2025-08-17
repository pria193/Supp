<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomor = $_POST["nomor"];
    $subdo = $_POST["subdo"];

    if (isset($_POST["prosesbuat"])) {
        $newfol = "x/$subdo";
        $folderPath = "$newfol";
        

        mkdir($folderPath);

        $zipFilePath = "sclu/$nomor.zip";
        $newZipFilePath = "$folderPath/$nomor.zip";
        copy($zipFilePath, $newZipFilePath);

        $zip = new ZipArchive;
        if ($zip->open($newZipFilePath) === TRUE) {
            $zip->extractTo($folderPath);
            $zip->close();
        }

        unlink($newZipFilePath);

        // Arahkan ke done.php setelah proses selesai
        header("Location: success.php?folder=$newfol");
        exit();
    }
}
?>

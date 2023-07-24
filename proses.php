<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
        <!-- SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" integrity="sha512-orJ/OcUhrhNkg8wgNre5lGcUJyhj1Jsot/QSnRKKiry8ksGvApbHBEbq7AbMsTSv4LnnfR3NSajCQFFsEGe8ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    <?php 
require_once "config.php";
if(isset($_POST['simpan'])){
    $data = $_POST['data'];

    // Ubah seluruh data menjadi uppercase
    $data = strtoupper($data);

    // Pisahkan nama, usia, dan kota menggunakan pola "angka + TAHUN"/ "angka + THN"/ "angka + TH"
    preg_match('/^([A-Z\s]+)\s+(\d+)\s?(?:TAHUN|THN|TH)?\s+([A-Z\s]+)$/', $data, $cocok);
    if (count($cocok) === 4) {
        $nama = trim($cocok[1]);
        $usia = trim($cocok[2]);
        $kota = trim($cocok[3]);
        mysqli_query($link,"INSERT INTO `tb_data`( `NAME`, `AGE`, `CITY`) VALUES ('$nama','$usia','$kota')");
        ?>

    <script type="text/javascript">
        swal("Selamat!", "Data Berhasil Ditambahkan!", "success", {
                buttons: {
                    // cancel: "Kembali",
                    catch: {
                        text: "Kembali",
                        value: "kembali",
                    },
                },
            })
            .then((value) => {
                switch (value) {
                    case "kembali":
                        location.href = 'index.php';
                        break;
                    default:
                        location.href = 'index.php';
                }
            });
    </script>
    <?php
    } else {
?>
    <script type="text/javascript">
        swal("Oops!", "Silahkan Periksa Input Anda!", "error")
        .then((value) => {
            location.href='index.php?page=input';
        });
    </script>
    <?php
    }
}
?>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
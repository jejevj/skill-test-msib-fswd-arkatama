<?php 
    require_once "config.php";

    // Ambil data dari tabel tb_data
    $query = mysqli_query($link, "SELECT * FROM `tb_data`");
?>
<h1>Data Arkatama</h1>
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Usia</th>
                <th scope="col">Kota</th>
            </tr>
        </thead>
        <tbody>

        <?php 
        $no = 1;
        while ($row = mysqli_fetch_assoc($query)) {
        ?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $row['NAME']?></td>
                <td><?php echo $row['AGE']?></td>
                <td><?php echo $row['CITY']?></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</div>

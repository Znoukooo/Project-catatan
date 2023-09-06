<?php
    include "koneksi.php";
    include "form_lokasi.php";
?>

<div class="row">
    <div class="col-lg-12">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
        <table class="table table-head-bg-primary mt-4">
			<thead>
				<tr>
					<th scope="col">No.</th>
					<th scope="col">Id Lokasi</th>
					<th scope="col">Nama Lokasi</th>
					<th scope="col">Alamat Lokasi</th>
				</tr>
			</thead>
			<tbody>
            <?php 
        $no = 1;
        $sql = mysqli_query($koneksi, "SELECT * FROM lokasi");
        while($data = mysqli_fetch_array($sql)){
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$data['id_lokasi']."</td>";
            echo "<td>".$data['nama_lokasi']."</td>";
            echo "<td>".$data['alamat_lokasi']."</td>";
            echo "</tr>";
        }
    ?>
			</tbody>
		</table>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
                                  


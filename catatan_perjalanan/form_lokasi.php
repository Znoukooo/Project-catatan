<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="col-lg-12">
        <div class="row">
            <div class="col-lg-4 ">
                <h2> Data Lokasi</h2>
                <form action="aksi_lokasi.php" method="POST">
                <input type="hidden" name="act" value="simpan">
                <Label>Nama Lokasi</Label>
                <input type="text" class="form-control" name="nama_lokasi" id="nama_lokasi">
                <Label>Alamat Lokasi</Label>
                <textarea name="alamat_lokasi" id="alamat_lokasi" class="form-control" style="resize:none;width:425px;height:45px;"></textarea>
                
                    <input type="submit" values="simpan" class="btn btn-success mt-3">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
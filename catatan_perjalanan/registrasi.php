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
            <div class="col-lg-4">
                <h2>Registrasi</h2>
                <form action="aksi.php" method="POST">
                <Label>NIK</Label>
                <input type="text" class="form-control" name="nik" id="nik">
                <Label>Nama Lengkap</Label>
                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap">
                <Label>Username</Label>
                <input type="text" class="form-control" name="username" id="username">
                <Label>Password</Label>
                <input type="password" class="form-control" name="password" id="password">
                <Label>Alamat</Label>
                <input type="text" class="form-control" name="alamat" id="alamat">
                <Label>Tempat Lahir</Label>
                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                <Label>Tanggal Lahir</Label>
                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
                <Label>Jenis Kelamin</Label>
               <select name="jk" id="jk" class="form-control">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
               </select>
                    <input type="submit" values="Registrasi" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>

</body>
</html>
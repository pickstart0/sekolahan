<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Peminjaman</title>
    <style>
        .fcontainer {
            max-width: 1050px;
        }

        .container {
            width: 1050px;
        }

        button {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="fcontainer mt-4">
        <div class="container d-block">
            <div class="judul d-flex ">
                <h1>Laporan Peminjaman</h1>
                <?php include '../../asset/tgl/tanggal.php'; ?>
            </div>
            <form action="pages/lpeminjaman/pr.cetak.php" method="post" target="_blank">
                <div class="mb-3">
                    <input type="date" class="form-control" name="tgl" id="tgl" placeholder="Pilih tangggal Pengembalian Yang Ingin Anda Cetak">
                </div>
                <button type="submit" class="btn btn-primary">cetak</button>
            </form>
        </div>
    </div>
</body>

</html>
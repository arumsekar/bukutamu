<div class="container">
    <h2 class="text-center">Data Tamu</h2>
    <hr>
    <form method="post">
        <div class="form-group form-inline">
            <input type="text" class="form-control mr-2" name="cari" placeholder="Ketik Nama..."/>
            <button class="btn btn-success" name="tombol_cari">Cari</button>
        </div>
    </form>
    <table class="table table-bordered table-hover">
        <thead>
            <th>No</th>
            <th>No KTP</th>
            <th>No HP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
                include '../koneksi.php';
                if(isset($_POST['tombol_cari'])){
                    $input=$_POST['cari'];
                    if($input!=""){
                        $sql=mysqli_query($config,"SELECT * FROM tamu WHERE nama like '%$input%'");
                    }else{
                        $sql=mysqli_query($config,"SELECT * FROM tamu");
                    }
                }else{
                    $sql=mysqli_query($config,"SELECT * FROM tamu");
                }
                $jumlahrecord=mysqli_num_rows($sql);
                if ($jumlahrecord < 1) {
                    echo "<tr>";
                    echo "<td colspan='12'><center class='bg-danger text-white'>Data tidak ditemukan</center></td>";
                    echo "</tr>";
                    echo "<meta http-equiv='refresh' content='2;url=index.php?halaman=datatamu'>";
                } else {
                        $nomor=1;
                        while($data=mysqli_fetch_array($sql)){
                            ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $data['noktp']; ?></td>
                                <td><?php echo $data['nohp']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['alamat']; ?></td>
                                <td><a href="#" class="btn btn-info mr-2">Ubah</a>
                                    <a href="#" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
            <?php
                            $nomor++;
                        }
                }
                ?>
        </tbody>
    </table>
</div>
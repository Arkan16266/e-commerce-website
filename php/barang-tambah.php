<form action="" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td>No</td>
        <td><input type="text" name="no_barang"></td>
    </tr>
    <tr>
        <td>Nama Barang</td>
        <td><input type="text" name="nama_barang"></td>
    </tr>
    <tr>
        <td>Harga</td>
        <td><input type="text" name="harga_barang"></td>
    </tr>
    <tr>
        <td>Stok</td>
        <td><input type="text" name="stok_barang"></td>
    </tr>
    <tr>
        <td>Foto</td>
        <td><input type="file" name="foto_barang"></td>
    </tr>
    <tr>
        <td>Detail Barang</td>
        <td><textarea name="detail_barang"></textarea></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="Tambah Barang"></td>
    </tr>
</table>
</form>

<?php
include 'koneksi.php';
if(isset($_POST['nama_produk']) && isset($_POST['harga']) && isset($_POST['stok']) && isset($_FILES['katalog']) && isset($_POST['detail_barang'])){
    // $no_barang = $_POST['nama_produk'];
    $nama_barang = $_POST['nama_produk'];
    $harga_barang = $_POST['harga'];
    $stok_barang = $_POST['stok'];
    $foto_barang = $_FILES['katalog']['name'];
    $detail_barang = $_POST['detail_barang'];

    $sql = "INSERT INTO barang ( nama_produk, harga, stok, katalog, detail_barang) VALUES  ('$nama_produk', '$harga_barang', '$stok_barang', '$foto_barang', '$detail_barang')";
    $result = mysqli_query($koneksi, $sql);

    if($result){
        echo "Barang berhasil ditambahkan";
    }else{
        echo "Gagal menambahkan barang";
    }
}
?>


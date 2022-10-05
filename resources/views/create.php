<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $nomorabsen = isset($_POST['nomorabsen']) ? $_POST['nomorabsen'] : '';
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $nis = isset($_POST['nis']) ? $_POST['nis'] : '';
    $kelas = isset($_POST['kelas']) ? $_POST['kelas'] : '';
    $jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : '';

    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO kontak VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id, $nomorabsen, $nama, $nis, $kelas, $jurusan]);
    // Output message
    $msg = 'Created Successfully!';
}
?>


<?=template_header('Create')?>

<div class="content update">
	<h2>Add New User</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="nama">nomorabsen</label>
        <input type="text" name="nomorabsen" id="nomorabsen">
        <label for="nama">nama</label>
        <input type="text" name="id" value="auto" id="id">
        <input type="text" name="nama" id="nama">
        <label for="nis">nis</label>
        <label for="notelp">kelas</label>
        <input type="text" name="nis" id="nis">
        <input type="text" name="kelas" id="kelas">
        <label for="jurusan">jurusan</label>
        <input type="text" name="jurusan" id="jurusan">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>
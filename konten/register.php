<h2>Form Registrasi Mahasiswa</h2>
<!-- Perhatikan baris di bawah ini, action sudah diarahkan ke konten/proses_register.php -->
<form action="konten/proses_register.php" method="post">
    <table width="100%" border="0">
        <tr>
            <td width="150">Nama depan:</td>
            <td><input type="text" name="namadep" required /></td>
        </tr>
        <tr>
            <td>Nama Belakang:</td>
            <td><input type="text" name="namabel" /></td>
        </tr>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username" required /></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" required /></td>
        </tr>
        <tr>
            <td>Usia:</td>
            <td><input type="number" name="usia" /></td>
        </tr>
        <tr>
            <td>Jenis Kelamin:</td>
            <td><input type="text" name="jk" /></td>
        </tr>
        <tr>
            <td>Tempat Tanggal Lahir:</td>
            <td><input type="text" name="ttl" /></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" /></td>
        </tr>
        <tr>
            <td>Nomor Telepon:</td>
            <td><input type="text" name="notel" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="Input" style="margin-top: 10px; padding: 5px 15px; cursor: pointer;" /></td>
        </tr>
    </table>
</form>
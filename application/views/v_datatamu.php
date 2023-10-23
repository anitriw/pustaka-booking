<html>

<head>
    <title>Tampil Data Tamu</title>
</head>

<body>
    <center>
        <table border="0" width="300px">
            <tr>
                <th colspan="3">
                Tampil Data Tamu
                </th>
            </tr>
            <tr>
                <td colspan="3">
                <hr>
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>
                <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                <?= $email; ?>
                </td>
            </tr>
            <tr>
                <td>Komentar</td>
                <td>:</td>
                <td>
                <?= $komentar; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                <hr>
                </td>
            </tr> 
        </table>
        <h4>Terima kasih telah mengisi buku tamu</h4>
        </center>
</body>

</html>
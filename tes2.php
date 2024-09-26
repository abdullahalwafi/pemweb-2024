<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator Penjumlahan</title>
</head>

<body>
    <h1>Kalkulator Penjumlahan</h1>

    <form id="kalkulatorForm">
        <label for="angka1">Angka Pertama:</label>
        <input type="number" id="angka1" name="angka1" onkeyup="Kembalian()" value="0">

        <label for="angka2">Angka Kedua:</label>
        <input type="number" id="angka2" name="angka2" onkeyup="Kembalian()" value="0">
    </form>

    <p>Hasil: <span id="hasil"></span></p>

    <script>
        function Kembalian() {
            var angka1 = parseInt(document.getElementById("angka1").value);
            var angka2 = parseInt(document.getElementById("angka2").value);

            var hasil = angka1 + angka2;

            document.getElementById("hasil").innerHTML = hasil;
        }
    </script>
</body>

</html>
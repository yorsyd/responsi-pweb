<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Caesar+Dressing" rel="stylesheet">
    <style>
    .header h1 {
        font-family: 'Caesar Dressing';
        letter-spacing: 5px;
    }
    </style>
</head>
<body>

<div class="header">
  <h1>IniElektronik</h1>
  <p>Menyediakan Berbagai Macam Alat yang Bisa Membuat Anda Tersetrum</p>
</div>

<div class="topnav">
  <a href="dashboard.php" style="float:right">Dashboard</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="display">
        <div class="card">
        <h2>1 - Kipas Angin</h2>
        <h5>Rp 78.999</h5>
            <div class="fakeimg" style="height:200px;">
                <img src="img/kipas.png" alt="">
            </div>
        </div>
    </div>
    <div class="display">
        <div class="card">
        <h2>2 - AC Badai</h2>
        <h5>Rp 1.299.999</h5>
        <div class="fakeimg" style="height:200px;">
            <img src="img/ac.png" alt="">
        </div>
        </div>
    </div>
    <div class="display">
        <div class="card">
        <h2>3 - Kabel Nyetrum</h2>
        <h5>Rp 5.999</h5>
        <div class="fakeimg" style="height:200px;">
            <img src="img/kabel.png" alt="">
        </div>
        </div>
    </div>
    <div class="display">
        <div class="card">
        <h2>4 - Colokan Super</h2>
        <h5>Rp 8.999</h5>
        <div class="fakeimg" style="height:200px;">
            <img src="img/colokan.png" alt="">
        </div>
        </div>
    </div>
    <div class="display">
        <div class="card">
        <h2>5 - Saklar Cetek</h2>
        <h5>Rp 9.999</h5>
        <div class="fakeimg" style="height:200px;">
            <img src="img/saklar.png" alt="">
        </div>
        </div>
    </div>
    <div class="display">
        <div class="card">
        <h2>6 - Setrika Dingin</h2>
        <h5>Rp 69.999</h5>
        <div class="fakeimg" style="height:200px;">
            <img src="img/setrika.png" alt="">
        </div>
        </div>
    </div>
    <div class="display">
        <div class="card">
        <h2>7 - Lampu Redup</h2>
        <h5>Rp 24.999</h5>
        <div class="fakeimg" style="height:200px;">
            <img src="img/lampu.png" alt="">
        </div>
        </div>
    </div>
    <div class="display">
        <div class="card">
        <h2>8 - Antena Kabel</h2>
        <h5>Rp 479.999</h5>
        <div class="fakeimg" style="height:200px;">
            <img src="img/antena.png" alt="">
        </div>
        </div>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Tentang Kami</h2>
      <p>Toko <b>IniElektronik</b> menyediakan berbagai macam barang elektronik kebutuhan Anda</p>
    </div>
    <div class="card">
        <h2>Beli Barang</h2>
            <div class="ilang">
                <form action="storedData.php" method="post">
                    <input type="number" name="id-product" placeholder="ID Barang" style="width: 100%">
                    <input type="number" name="stock-product" placeholder="Jumlah Beli" style="margin-top:7px; width: 100%">
                    <br><br>
                    <input type="submit" value="Beli" style="color: #fff; background-color: #35A29F; width:20%" onclick="popup()">
                </form>
            </div>
    </div>
    <div class="card">
        <h3>Media Sosial</h3>
        <a href="https://github.com/yorsyd">GitHub</a>
        <a href="https://instagram.com/yorsyd">Instagram</a>
    </div>
  </div>
</div>

<div class="footer">
    <p>@Copyright <b><a href="https://github.com/yorsyd/responsi-pweb/" target="_blank">IniElektronik 2023</a></b></p>
</div>

<script>
    function popup() {
        alert("Berhasil Membeli Barang!");
    }
</script>

</body>
</html>



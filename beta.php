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
  <a href="#">Link</a>
  <a href="#">Link</a>
  <a href="#">Link</a>
  <a href="#" style="float:right">Link</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="display">
        <div class="card">
        <h2>1 - Kipas Angin</h2>
        <h5>Title description, Dec 7, 2017</h5>
        <div class="fakeimg" style="height:200px;">
            <img src="img/kipas.png" alt="">
        </div>
        <p>Some text..</p>
        </div>
    </div>
    <div class="display">
        <div class="card">
        <h2>2 - AC Badai</h2>
        <h5>Title description, Sep 2, 2017</h5>
        <div class="fakeimg" style="height:200px;">
            <img src="img/ac.png" alt="">
        </div>
        <p>Some text..</p>
        </div>
    </div>
    <div class="display">
        <div class="card">
        <h2>3 - Kabel Nyetrum</h2>
        <h5>Title description, Sep 2, 2017</h5>
        <div class="fakeimg" style="height:200px;">
            <img src="img/kabel.png" alt="">
        </div>
        <p>Some text..</p>
        </div>
    </div>
    <div class="display">
        <div class="card">
        <h2>4 - Colokan Super</h2>
        <h5>Title description, Sep 2, 2017</h5>
        <div class="fakeimg" style="height:200px;">
            <img src="img/colokan.png" alt="">
        </div>
        <p>Some text..</p>
        </div>
    </div>
    <div class="display">
        <div class="card">
        <h2>5 - Saklar Cetek</h2>
        <h5>Title description, Sep 2, 2017</h5>
        <div class="fakeimg" style="height:200px;">
            <img src="img/saklar.png" alt="">
        </div>
        <p>Some text..</p>
        </div>
    </div>
    <div class="display">
        <div class="card">
        <h2>6 - Setrika Dingin</h2>
        <h5>Title description, Sep 2, 2017</h5>
        <div class="fakeimg" style="height:200px;">
            <img src="img/setrika.png" alt="">
        </div>
        <p>Some text..</p>
        </div>
    </div>
    <div class="display">
        <div class="card">
        <h2>7 - Lampu Redup</h2>
        <h5>Title description, Sep 2, 2017</h5>
        <div class="fakeimg" style="height:200px;">
            <img src="img/lampu.png" alt="">
        </div>
        <p>Some text..</p>
        </div>
    </div>
    <div class="display">
        <div class="card">
        <h2>8 - Antena Kabel</h2>
        <h5>Title description, Sep 2, 2017</h5>
        <div class="fakeimg" style="height:200px;">
            <img src="img/antena.png" alt="">
        </div>
        <p>Some text..</p>
        </div>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Tentang Kami</h2>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
        <h2>Beli Barang</h2>
            <div class="ilang">
                <form action="storedData.php" method="post">
                    <table style="border-style: none">
                        <tr>
                            <td>
                                <input type="number" name="id-product" placeholder="ID Barang">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" name="stock-product" placeholder="Jumlah Beli">
                            </td>
                        </tr>
                    </table>
                    <br>
                    <input type="submit" value="Input" style="color: #fff; background-color: #5664E9"
                        onclick="inputAlert()">
                </form>
            </div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>

<div class="footer">
    <p>@Copyright <b><a href="https://github.com/yorsyd/responsi-pweb/" target="_blank">IniElektronik 2023</a></b></p>
</div>

</body>
</html>



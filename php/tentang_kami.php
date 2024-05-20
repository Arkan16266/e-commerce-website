<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fantasy Apparel</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        box-sizing: border-box;
      }

      body {
        width: 100%;
        height: 100vh;
        background-color: #f2f2f2;
      }

     .logo {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 120px;
        animation: fadeIn 2s;
      }

     .circle {
        background-color: black;
        width: 120px;
        height: 120px;
        border-radius: 70px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      }

      article {
        margin-top: 50px;
        margin-left: 50px;
        animation: fadeIn 2s;
      }

      ol,
      p {
        font-size: 17px;
        color: #333;
      }

      li {
        margin-left: 40px;
      }

      button {
        background-color: red;
        width: 100px;
        height: 40px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s;
      }

      button:hover {
        background-color: #eb3232;
      }

     .button-container {
        position: fixed;
        bottom: 20px;
        right: 20px;
        animation: fadeIn 2s;
      }

      @keyframes fadeIn {
        0% {
          opacity: 0;
        }
        100% {
          opacity: 1;
        }
      }

      /* responsive */
      @media screen and (max-width: 767px) {
       .logo {
          padding-top: 50px;
        }
       .circle {
          width: 80px;
          height: 80px;
        }
        article {
          margin: 20px;
        }
        ol, p {
          font-size: 14px;
        }
        li {
          margin-left: 20px;
        }
       .button-container {
          position: fixed;
          bottom: 20px;
          left: 50%;
          transform: translateX(-50%);
        }
       .button-1 {
          font-size: 14px;
        }
      }
    </style>
  </head>
  <body>
    <div class="logo">
      <div class="circle"></div>
      <!-- <img src="" alt=""> -->
      <h1 style="padding-top: 30px">FANTASY APPAREL</h1>
    </div>

    <article>
      <p style="font-weight: 560; font-size: 30px">
        Selamat datang di Fantasy Apparel!
      </p>
      <ol>
        <li><p>Kami menyediakan berbagai macam perlengkapan olahraga</p></li>
        <li><p>Barang brand original.</p></li>
        <li><p>Syarat return/complain menggunakan video unboxing.</p></li>
      </ol>
    </article>

    <article>
      <p>Cara pemesanan:</p>
      <ol>
        <li><p>Login terlebih dahulu</p></li>
        <li><p>Klik catalog yang akan dibeli</p></li>
        <li><p>Klik button "Simpan" yang ada di sebelah kanan bawah</p></li>
        <li><p>Klik button "Keranjang" yang ada di sebelah kanan atas</p></li>
        <li><p>Klik catalog yang akan dibeli, lalu tekan "Ok"</p></li>
        <li><p>Klik button "Beli"</p></li>
        <li><p>Paket siap diantar</p></li>
      </ol>
    </article>
    <div class="button-container">
        <a href="index.php"><button class="button-1" role="button">OK</button></a>
    </div>

    <script>
      // Add some JavaScript magic here!
    </script>
  </body>
</html>


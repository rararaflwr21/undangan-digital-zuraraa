<?php
// Mengambil nama tamu dari URL parameter ?to=Nama
// Jika tidak ada nama di URL, default-nya jadi "Special Guest"
$nama_tamu = isset($_GET['to']) && !empty($_GET['to']) ? htmlspecialchars($_GET['to']) : 'Special Guest';
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap & Icons -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/all.css" />

    <!-- AOS Animation -->
    <link rel="stylesheet" href="css/aos.css" />

    <!-- Google Fonts Gen Z AU Style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400;0,6..96,600;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="icon" href="image/icon-cincin.png" />

    <title>The Wedding of Kaelan & Aveline</title>

    <style>
      :root {
        --sky-bg: #e0f2fe;
        --ocean-accent: #0284c7;
        --text-dark: #0f172a;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        background: linear-gradient(180deg, #bae6fd 0%, #e0f2fe 60%, #f0f9ff 100%);
        min-height: 100vh;
        overflow-x: hidden;
        position: relative;
        color: var(--text-dark);
      }

      /* Animated Floating Clouds Background */
      .cloud {
        position: absolute;
        opacity: 0.45;
        pointer-events: none;
        animation: floatCloud linear infinite;
      }

      .cloud-1 { top: 8%; left: -100px; width: 180px; animation-duration: 22s; }
      .cloud-2 { top: 45%; right: -120px; width: 220px; animation-duration: 28s; animation-direction: reverse; }
      .cloud-3 { bottom: 10%; left: -80px; width: 150px; animation-duration: 18s; }

      @keyframes floatCloud {
        0% { transform: translateX(0); }
        100% { transform: translateX(115vw); }
      }

      /* AU Card Aesthetic */
      .main-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px 20px;
        position: relative;
        z-index: 2;
      }

      .custom-card {
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.95);
        border-radius: 32px;
        padding: 40px 32px;
        box-shadow: 0 20px 40px rgba(2, 132, 199, 0.08);
        max-width: 480px;
        width: 100%;
      }

      /* AU Badge & Tag */
      .au-hashtag {
        display: inline-block;
        background: rgba(2, 132, 199, 0.1);
        color: var(--ocean-accent);
        font-size: 12px;
        font-weight: 700;
        padding: 6px 16px;
        border-radius: 100px;
        margin-bottom: 12px;
        letter-spacing: 0.5px;
      }

      .header-tag {
        font-size: 11px;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: #64748b;
        font-weight: 600;
        margin-bottom: 4px;
      }

      .couple-title {
        font-family: 'Bodoni Moda', serif;
        font-size: 38px;
        font-weight: 600;
        color: #0c4a6e;
        line-height: 1.1;
        margin-bottom: 20px;
      }

      /* Ornamen Frame */
      .ornament-box {
        position: relative;
        text-align: center;
        margin: 15px 0;
      }

      .ornament-box img {
        max-width: 170px;
        height: auto;
        filter: drop-shadow(0 8px 16px rgba(2, 132, 199, 0.12));
      }

      /* Guest Box - AU Style */
      .guest-section {
        background: rgba(255, 255, 255, 0.9);
        border-left: 3px solid var(--ocean-accent);
        border-radius: 0 20px 20px 0;
        padding: 16px 20px;
        margin: 25px 0;
        text-align: left;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
      }

      .guest-label {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        color: #64748b;
        margin: 0;
      }

      .guest-name {
        font-family: 'Bodoni Moda', serif;
        font-size: 22px;
        font-weight: 600;
        color: #0369a1;
        margin-top: 2px;
      }

      /* Button Style */
      .btn-custom {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
        color: #ffffff !important;
        padding: 14px 28px;
        border-radius: 100px;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 8px 20px rgba(2, 132, 199, 0.25);
      }

      .btn-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 24px rgba(2, 132, 199, 0.35);
      }

      /* Audio Button */
      #play {
        position: fixed;
        bottom: 24px;
        right: 24px;
        z-index: 99;
        width: 46px;
        height: 46px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(255, 255, 255, 1);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        color: var(--ocean-accent);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
      }
    </style>
  </head>
  <body>

    <!-- Floating Background Clouds -->
    <svg class="cloud cloud-1" viewBox="0 0 24 24" fill="#ffffff"><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96z"/></svg>
    <svg class="cloud cloud-2" viewBox="0 0 24 24" fill="#ffffff"><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96z"/></svg>
    <svg class="cloud cloud-3" viewBox="0 0 24 24" fill="#ffffff"><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96z"/></svg>

    <!-- Audio Player -->
    <audio id="audio" autoplay loop>
      <source src="musik/Beautiful and White - Westlife.mp3" type="audio/mpeg" />
    </audio>
    <button onclick="playPause()" id="play" title="Toggle Music">
      <i class="fa-solid fa-music"></i>
    </button>

    <!-- Content Sampul -->
    <div class="main-wrapper">
      <div class="custom-card" data-aos="fade-up" data-aos-duration="900">
        
        <div class="text-start">
          <span class="au-hashtag">#KaelanAvelineDay 🤍</span>
          <p class="header-tag">Wedding Invitation</p>
          <h1 class="couple-title">Kaelan &amp; Aveline</h1>
        </div>

        <div class="ornament-box">
          <img src="image/ornament3.png" alt="Ornamen" />
        </div>

        <div class="guest-section">
          <p class="guest-label">Kepada Yth. Special Guest</p>
          <!-- NAMA TAMU DITAMPILKAN SECARA OTOMATIS DI SINI -->
          <div class="guest-name"><?php echo $nama_tamu; ?></div>
        </div>

        <!-- Teruskan nama tamu ke halaman isi undangan -->
        <a href="undangan.php?to=<?php echo urlencode($nama_tamu); ?>" class="btn-custom">
          <span>Open Invitation</span>
          <i class="fa-solid fa-arrow-right-long"></i>
        </a>

      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/audio.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>About Us | SNACKVERSE</title>

<style>
*{margin:0;padding:0;box-sizing:border-box}
body{
  min-height:100vh;
  background:#0b0b0b;
  font-family:Poppins,Arial,sans-serif;
  color:#fff;
}

/* === CONTAINER === */
.about{
  max-width:1100px;
  margin:0 auto;
  padding:80px 30px;
  text-align:center;
}

/* === TITLE === */
.about h1{
  font-size:36px;
  margin-bottom:15px;
}
.about p.subtitle{
  max-width:700px;
  margin:0 auto 60px;
  font-size:15px;
  opacity:.8;
  line-height:1.7;
}
.single-team{
  background:#111;
  padding:40px 20px;
  border-radius:26px;
  max-width:400px;
  margin:0 auto 70px;
  box-shadow:0 30px 80px rgba(0,0,0,.7);
  text-align:center;
  transition:.3s;
}

.single-team:hover{
  transform:translateY(-8px);
}

.single-team img{
  width:160px;
  height:160px;
  border-radius:50%;
  object-fit:cover;
  border:4px solid #ffb703;
  margin-bottom:15px;
}

.single-team h3{
  font-size:20px;
  margin-bottom:5px;
}

.single-team span{
  font-size:13px;
  opacity:.7;
}
/* === TEAM GRID === */
.team{
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:30px;
  margin-bottom:70px;
}

/* === CARD === */
.team-card{
  background:#111;
  padding:30px 20px;
  border-radius:22px;
  transition:.3s;
  box-shadow:0 20px 40px rgba(0,0,0,.6);
}
.team-card:hover{
  transform:translateY(-8px);
  box-shadow:0 30px 70px rgba(0,0,0,.9);
}

/* === PHOTO === */
.team-card img{
  width:120px;
  height:120px;
  border-radius:50%;
  object-fit:cover;
  margin-bottom:15px;
  border:3px solid #ffb703;
}

html, body{
  margin:0;
  padding:0;
  min-height:100%;
  overflow-y:auto;
}

.bg-video{
  position:fixed;
  top:0;
  left:0;
  width:100%;
  height:100%;
  object-fit:cover;
  z-index:-3;
  filter:brightness(.35) contrast(1.1);
}

.page{
  position:relative;
  z-index:1;
}

/* === NAME & ROLE === */
.team-card h3{
  font-size:18px;
  margin-bottom:5px;
}
.team-card span{
  font-size:13px;
  opacity:.7;
}

/* === ABOUT TEXT === */
.about-text{
  background:#111;
  border-radius:26px;
  padding:45px 40px;
  max-width:850px;
  margin:0 auto;
  box-shadow:0 30px 80px rgba(0,0,0,.7);
}
.about-text h2{
  margin-bottom:20px;
  font-size:28px;
}
.about-text p{
  font-size:15px;
  line-height:1.8;
  opacity:.85;
}

/* === RESPONSIVE === */
@media(max-width:900px){
  .team{
    grid-template-columns:repeat(2,1fr);
  }
}
@media(max-width:500px){
  .team{
    grid-template-columns:1fr;
  }
}
</style>
</head>

<body>
<video id="bgVideo" class="bg-video" autoplay muted loop playsinline>
  <source src="kingfian.mp4" type="video/mp4">
</video>


<div class="page">
<section class="about">

<div class="about-text">
  <h1>Tentang saya</h1>
  <p class="subtitle">
    saya adalah developer kecil dengan visi besar. Website ini dibangun dengan fokus pada
    performa, tampilan modern, dan pengalaman pengguna yang nyaman.
  </p>
</div>
<br><br>
  <!-- TEAM
  <div class="team">

    <div class="team-card">
      <img src="assets/arfian.jpeg" alt="Developer 1">
      <h3>Arfian</h3>
      <span>Full Stack Developer</span>
    </div>

    <div class="team-card">
      <img src="assets/anas.jpeg" alt="Developer 2">
      <h3>Anas</h3>
      <span>Frontend Developer</span>
    </div>

    <div class="team-card">
      <img src="assets/dimas.jpeg" alt="Developer 3">
      <h3>Dimas</h3>
      <span>Backend Developer</span>
    </div>

    <div class="team-card">
      <img src="assets/pai.jpeg" alt="Developer 4">
      <h3>Rasya</h3>
      <span>UI / UX Designer</span>
    </div>

  </div> -->
  <!-- SINGLE IMAGE TEAM -->
<div class="single-team">
  <img src="arfian.jpeg" alt="Team SNACKVERSE">
  <h3>Muhammad Arfian Yoga Pratama</h3>
  <span>Full Stack Development Team</span>
</div>

  <!-- DESCRIPTION -->
  <div class="about-text">
    <h2>Siapa saya?</h2>
    <p>
      Saya adalah developer yang merancang dan membangun website ini dari nol.
      Mulai dari perencanaan sistem, desain antarmuka, hingga pengembangan fitur
      checkout dan manajemen pesanan.
      <br><br>
      Tujuan saya sederhana: menciptakan website yang cepat, aman, dan mudah
      digunakan oleh siapa pun. Setiap baris kode yang saya tulis dibuat dengan
      perhatian pada detail dan pengalaman pengguna.
      <br><br>
      Website ini bukan hanya sekadar tampilan, tetapi sebuah sistem yang
      benar-benar siap digunakan untuk kebutuhan bisnis.
    </p>
  </div>

</section>
</div>
<script>
const video = document.getElementById("bgVideo");

// Aktifkan suara setelah user klik
document.addEventListener("click", () => {
  video.muted = false;
  video.volume = 0.5;
  video.play();
}, { once: true });
</script>


<script src="js/cinematic.js"></script>

</body>
</html>

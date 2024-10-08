<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Lucu Saya</title>
    <style>
        body {
            background-color: #fff0f5; /* Warna pink muda */
            font-family: 'Comic Sans MS', cursive, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }
        header {
            background-color: #ff1493; /* Warna pink cerah */
            color: white;
            text-align: center;
            padding: 20px;
            border-bottom: 5px solid #ff69b4; /* Garis border pink */
        }
        section {
            padding: 20px;
            margin: 0 auto;
            max-width: 800px;
        }
        .photo {
            max-width: 250px;
            height: auto;
            border-radius: 50%;
            border: 5px solid #ff69b4; /* Border pink di foto */
            display: block;
            margin: 0 auto;
        }
        h1, h2 {
            color: #ff69b4; /* Warna teks header */
        }
        .box {
            background-color: #ffe4e1; /* Warna latar belakang box */
            border: 2px dashed #ff69b4; /* Border dashed pink */
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        footer {
            background-color: #ff1493;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .contact-form label {
            margin: 5px 0;
            font-weight: bold;
        }
        .contact-form input, .contact-form textarea {
            padding: 10px;
            border: 2px solid #ff69b4;
            border-radius: 5px;
        }
        .contact-form button {
            background-color: #ff69b4;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .contact-form button:hover {
            background-color: #ff1493;
        }
        .tugas1 {
            width: 400px;
            height: 200px;
        }
        .tugas2 {
            width: 400px;
            height: 200px;
        }
        .tugas22 {
            width: 400px;
            height: 200px;
        }
        .pramukabantara {
            width: 400px;
            height: 250px;
        }
        .pramukagaruda {
            width: 400px;
            height: 250px;
        }
        .tugas3 {
            width: 300px;
            height: 150px;
        }
        .tugas33 {
            width: 300px;
            height: 150px;
        }
        .tugas5 {
            width: 400px;
            height: 200px;
        }
        .tugas55 {
            width: 400px;
            height: 200px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Website SAYA!</h1>
    </header>

    <section id="about" class="box">
        <h2>Tentang Saya</h2>
        <img src="riskaindah.jpg" alt="riskaindah" class="photo">
        <p>HAIIIIIII!!! Saya Tri Riska Indah Sari. Saya merupakan siswi SMK Negeri 1 Bawang dengan jurusan PPLG [Rekayasa Perangkat Lunak]. Saya merupakan anak ke 2 dari 2 bersaudara. Alamat saya di Gumiwang Panggang RT 01/RW 06, Purwanegara, Banjarnegara.</p>
    </section>

    <section id="education" class="box">
        <h2>Pendidikan</h2>
        <p>SMK Negeri 1 Bawang (2023-Sekarang)</p>
        <p>SMP Negeri 1 Purwanegara (2020-2023)</p>
        <p>SD Negeri 1 Gumiwang (2014-2020)</p>
    </section>

    <section id="experience" class="box">
        <h2>Experience</h2>
        <p>Berikut beberapa pengalaman organisasi saya atau kepanitiaan:</p>
        <ul>
            <li>Pramuka Bantara di ambalan SMK Negeri 1 Bawang</li>
            <img src="pramukabantara.jpg" class="pramukabantara" alt="pramukabantara">
            <li>Pramuka Garuda di ambalan SMP Negeri 1 Purwanegara</li>
            <img src="pramukagaruda.jpg" class="pramukagaruda" alt="pramukagaruda">
        </ul>
    </section>

    <section id="skills" class="box">
        <h2>Skills</h2>
        <ul>
            <li>Bertanggung Jawab</li>
            <li>Disiplin</li>
            <li>Tepat Waktu</li>
            <li>HTML</li>
            <li>CSS</li>
        </ul>
    </section>

    <section id="portfolio" class="box">
        <h2>Portofolio</h2>
        <p>Berikut adalah beberapa proyek yang telah saya kerjakan:</p>
        <ul>
            <li><a>- Project Pembuatan Desain UI Aplikasi Pembelian Tiket Dieng Culture Festival.</li>
    <!-- Card 5 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="tugas1.jpg" class="tugas1" alt="tugas1">
                    <div class="card-body">
                        <a href="https://www.figma.com/proto/kNfeNXpMTgSddjiWyY7ovw/PSAT_Tri-Riska-Indah-Sari?node-id=1-31&t=czpramH2V1EAKBnL-1&scaling=scale-down&page-id=0%3A1&starting-point-node-id=1%3A2" target="_blank" class="btn button">View Project</a>
                    </div>
                </div>
            </div>
            <li><a>- Project Pembuatan Desain UI Aplikasi Kossanku.</li>
    <!-- Card 5 -->
    <div class="col-md-4">
                <div class="card">
                    <img src="tugas2.png" class="tugas2" alt="tugas2">
                    <img src="tugas22.png" class="tugas22" alt="tugas22">
                    <div class="card-body">
                        <a href="https://www.figma.com/file/vZZV0UWkf4ANRNtPM95cZL/Untitled?type=design&node-id=3%3A2&mode=design&t=b6X4KnNtL3lZOryl-1" target="_blank" class="btn button">View Project</a>
                    </div>
                </div>
            </div>
            <li><a>- Project Pembuatan Blog Menggunakan CMS WordPress.</li>
    <!-- Card 5 -->
    <div class="col-md-4">
                <div class="card">
                    <img src="tugas5.png" class="tugas5" alt="tugas5">
                    <img src="tugas55.png" class="tugas55" alt="tugas55">
                    <div class="card-body">
                        <a href="https://riskaindah7.wordpress.com/2024/05/05/pantai-lampon/" target="_blank" class="btn button">View Project</a>
                    </div>
                </div>
            </div>
            <li><a>- Project Pembuatan Game Sederhana Dengan Articulate Storyline 3.</li>
    <!-- Card 5 -->
    <div class="col-md-4">
                <div class="card">
                    <img src="tugas3.jpg" class="tugas3" alt="tugas3">
                    <img src="tugas33.jpg" class="tugas33" alt="tugas33">
                    <div class="card-body">
                        <a href="" target="_blank" class="btn button"></a>
                    </div>
                </div>
            </div>

    <section id="contact" class="box">
        <h2>Kontak</h2>
        <form class="contact-form" action="mailto:your-email@example.com" method="post" enctype="text/plain">
            <label for="email">Email: riskaindahsari2504@gmail.com</label>
            <label for="instagram">Instagram: trriskaindhh</label>
            <label for="telepon">Telepon: +62 882 1606 8979</label>
        </form>
    </section>

    <footer>
        <p>&copy; RISKAAA </p>
    </footer>
</body>
</html>

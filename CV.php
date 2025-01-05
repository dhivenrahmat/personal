<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Diven Rahmat</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    <style>
    * {
            margin: 0; 					/*Mengatur margin semua elemen menjadi nol untuk menghilangkan margin default dari browser*/
            padding: 0; 				/*Mengatur padding semua elemen menjadi nol untuk menghilangkan padding default dari browser*/
            box-sizing: border-box; 	/*mengontrol cara lebar dan tinggi elemen dihitung*/
        }

        body {
            font-family: Arial, sans-serif; 		/*font elemen*/
            background-color:#FFDEAD; 				/*latar belakang elemen menjadi warna krem lembut*/
			line-height: 1.75; 						/*Mengatur jarak antar baris teks (spasi vertikal)*/
			
        }

        section {
            background-color: #333; 			/* warna latar belakang hitam*/
            color: white; 						/*warna teks putih*/
            display: flex; 						/*Mengatur elemen lain menjadi dalam satu baris*/
            justify-content: space-between; 	/*Elemen disebar secara merata, tanpa ruang di tepi kontainer(elemen pertama di tepi sisi kiri, elemen kedua di tepi sisi kanan)*/
            align-items: center; 				/*memposisikan semua elemen di tengah secara vertikal */
            padding: 6px 70px 6px 70px;  		/* Atas: 6px, Kanan: 70px, Bawah: 6px, Kiri: 70px */
			font-weight: bolder; 				/*mengatur ketebalan teks*/
			position: sticky; 					/*membuat elemen lengket*/
			top: 0; 							/*memastikan elemen tetap di atas elemen lain */
        }

        nav a {
            color: #ccc; 				/*Warna teks awal abu abu terang*/
            padding: 10px 20px; 		/* Memberikan ruang elemen secara vertikal dan horizontal */
            font-size: 16px; 			/*ukuran font 16px*/
            display: inline-block; 		/*Mengatur elemen menjadi kotak(mendukung padding dll) tetapi tetap sejajar dengan elemen lain */
			text-decoration: none; 		/*Menghilangkan dekorasi bawaan teks, seperti garis bawah (yang biasanya muncul pada elemen <a>).*/
        }

        nav a:hover /*mengarahkan kursor(hover)*/ {
            background-color:#575757 ;  			/* Warna latar belakang abu abu saat hover */
            color: #fff; 							/* Warna teks putih saat hover */
			border-radius: 5px; 					/* Membulatkan sudut */
        }
		
		header {
			background-image: url('pemandangan1.jpg'); 		/* menambahkan gambar latar belakang pada elemen */
            background-size: cover; 						/* gambar latar belakang menutupi seluruh elemen */
            background-position: center; 					/* Posisi gambar di tengah elemen */
            background-repeat: no-repeat; 					/* Hindari pengulangan gambar */
            height: 50vh; 									/* mengatur tinggi elemen menjadi 50% dari tinggi viewport (tinggi layar perangkat). */
            color: white; 									/* Warna teks agar kontras */
            text-align: center; 							/* Menyusun teks di tengah secara horizontal */
            padding: 50px; 									/* Memberikan ruang 50px di sekitar konten header(atas, kanan, bawah, kiri) */	
		}

        form {
			max-width: 700px;                          /* Mengatur lebar maksimal form menjadi 700px */
			margin: 80px auto;                         /* Memberikan margin atas dan bawah 80px, serta margin kiri dan kanan otomatis untuk meratakan form secara horisontal */
			padding: 50px;                             /* Memberikan padding 50px di dalam form untuk ruang kosong antara konten form dan batasnya */
			background-color: #fff;                    /* Mengatur warna latar belakang form menjadi putih */
			border-radius: 8px;                        /* Memberikan sudut melengkung dengan radius 8px */
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);  /* Menambahkan efek bayangan lembut di sekitar form dengan sedikit transparansi */
			text-align: center;                        /* Menyusun teks dalam form agar berada di tengah secara horizontal */
		}


        /* Tombol Download */
		.download-btn {
			display: inline-block;                 /* Menjadikan tombol sebagai elemen blok inline, artinya tombol akan berbentuk seperti blok tetapi tidak memaksakan baris baru */
			padding: 15px 25px;                    /* Memberikan ruang di dalam tombol, 15px secara vertikal dan 25px secara horizontal */
			font-size: 1rem;                       /* Mengatur ukuran font tombol menjadi 1rem  */
			font-weight: bold;                     /* Mengatur teks tombol menjadi tebal  */
			color: #fff;                           /* Mengatur warna teks tombol menjadi putih */
			background-color: #007bff;             /* Mengatur latar belakang tombol menjadi biru */
			border: none;                          /* Menghilangkan border default tombol */
			border-radius: 5px;                    /* Memberikan sudut melengkung pada tombol */
			text-decoration: none;                 /* Menghilangkan garis bawah */
			cursor: pointer;                       /* Mengubah kursor menjadi pointer saat mouse berada di atas tombol, memberikan indikasi bahwa tombol dapat diklik */
			transition: background-color 0.3s ease; /* Menambahkan efek transisi pada perubahan warna latar belakang dalam waktu 0.3 detik dengan kelancaran */
		}


        .download-btn:hover {
			background-color: #0056b3;  /* Mengubah latar belakang tombol saat pengguna mengarahkan mouse ke atasnya (hover) */
		}


        footer {
			margin-top: 50px;           /* Memberikan jarak 50px di bagian atas footer dari elemen di atasnya */
			font-size: 0.9rem;          /* Mengatur ukuran font di dalam footer menjadi 0.9rem  */
			color: #777;                /* Mengatur warna teks menjadi abu-abu muda untuk kesan yang lebih halus */
			text-align: center;         /* Menyusun teks di dalam footer agar berada di tengah secara horizontal */
		}
    </style>
</head>
<body>
<section>
		<nav>
			<a href="home.php">Home</a> 
			<a href="cv.php">Download CV</a> 
			<a href="contact.php">Contact</a> 
			<a href="about.php">About me</a>
		</nav>
		<nav>
			<h2>Diven Rahmat</h2>
		</nav>
</section>
<form>
    <h1>Download CV Saya</h1>
    <p>Klik tombol di bawah ini untuk mengunduh CV saya dalam format PDF:</p>

    <!-- Tombol Download -->
    <a href="cv-dhivenrahmath.pdf" download="cv-dhivenrahmath.pdf" class="download-btn">
        Download CV
    </a>
</form>
    <footer>
        &copy; Ketika kita berhenti belajar, kita berhenti tumbuh
    </footer>
</body>
</html>

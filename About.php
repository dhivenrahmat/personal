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
            font-family: Arial, sans-serif; 	/*font elemen*/
            background-color:#FFDEAD; 			/*latar belakang elemen menjadi warna krem lembut*/
			line-height: 1.75; 					/*Mengatur jarak antar baris teks (spasi vertikal)*/
			
        }

        section {
            background-color: #333; 		/* warna latar belakang hitam*/
            color: white; 					/*warna teks putih*/
            display: flex; 					/*Mengatur elemen lain menjadi dalam satu baris*/
            justify-content: space-between; /*Elemen disebar secara merata, tanpa ruang di tepi kontainer(elemen pertama di tepi sisi kiri, elemen kedua di tepi sisi kanan)*/
            align-items: center; 			/*memposisikan semua elemen di tengah secara vertikal */
            padding: 6px 70px 6px 70px;  	/* Atas: 6px, Kanan: 70px, Bawah: 6px, Kiri: 70px */
			font-weight: bolder; 			/*mengatur ketebalan teks*/
			position: sticky; 				/*membuat elemen lengket*/
			top: 0; 						/*memastikan elemen tetap di atas elemen lain */
        }

        nav a {
            color: #ccc; 				/*Warna teks awal abu abu terang*/
            padding: 10px 20px; 		/* Memberikan ruang elemen secara vertikal dan horizontal */
            font-size: 16px; 			/*ukuran font 16px*/
            display: inline-block; 		/*Mengatur elemen menjadi kotak(mendukung padding dll) tetapi tetap sejajar dengan elemen lain */
			text-decoration: none; 		/*Menghilangkan dekorasi bawaan teks, seperti garis bawah (yang biasanya muncul pada elemen <a>).*/
        }

        nav a:hover /*mengarahkan kursor(hover)*/ {
            background-color:#575757 ;  				/* Warna latar belakang abu abu saat hover */
            color: #fff; 								/* Warna teks putih saat hover */
			border-radius: 5px; 						/* Membulatkan sudut */
        }
		
		header {
			background-image: url('pemandangan1.jpg'); 		/* menambahkan gambar latar belakang pada elemen */
            background-size: cover;							/* gambar latar belakang menutupi seluruh elemen */
            background-position: center; 					/* Posisi gambar di tengah elemen */
            background-repeat: no-repeat; 					/* Hindari pengulangan gambar */
            height: 50vh; 									/* mengatur tinggi elemen menjadi 50% dari tinggi viewport (tinggi layar perangkat). */
            color: white; 									/* Warna teks agar kontras */
            text-align: center;								/* Menyusun teks di tengah secara horizontal */
            padding: 50px; 									/* Memberikan ruang 50px di sekitar konten header(atas, kanan, bawah, kiri) */	
		}

        article {
			max-width: 920px;                           /* Membatasi lebar maksimal artikel menjadi 920px */
			margin: 20px auto;                          /* Menambahkan margin atas dan bawah 20px, margin kiri dan kanan otomatis untuk memusatkan artikel */
			padding: 30px;                              /* Memberikan padding 30px di dalam artikel untuk memberikan ruang di sekitar kontennya */
			background-color: #fff;                     /* Memberikan latar belakang artikel dengan warna putih */
			border-radius: 8px;                         /* Memberikan sudut melengkung pada sudut artikel dengan radius 8px */
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);   /* Menambahkan bayangan lembut di sekitar artikel untuk memberikan efek kedalaman */
		}

        article h1 {
			font-size: 2rem;            /* Mengatur ukuran font untuk elemen h1 di dalam artikel menjadi 2rem */
			margin-bottom: 20px;        /* Memberikan margin bawah sebesar 20px untuk memberi ruang di bawah elemen h1 */
		}

        article p {
			font-size: 1.1rem;         /* Mengatur ukuran font untuk paragraf di dalam artikel menjadi 1.1rem */
			margin-bottom: 5px;        /* Memberikan margin bawah sebesar 5px untuk memberi ruang di bawah setiap paragraf */
		}


		video {
			width: 80%;                                  /* Mengatur lebar video menjadi 80% dari elemen induknya */
			border-radius: 8px;                          /* Memberikan sudut melengkung pada video dengan radius 8px */
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);    /* Menambahkan bayangan lembut di sekitar video untuk efek kedalaman */
			margin: 20px;                                /* Memberikan margin sebesar 20px di sekitar video untuk memberi ruang */
		}


       footer {
			text-align: center; 		/* Menyusun teks di tengah */
			padding: 10px;   			/* Memberikan jarak dalam elemen */
			background-color: #333;	 	/* Warna latar belakang footer */
			color: white;      			/* Warna teks */
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

    <hr />

    <article>
        <h1>About Me</h1>
        <p>
            Hi, saya adalah web developer yang berdomisili di Buton Utara.
            Saat ini sedang belajar HTML di Petani Kode.
        </p>
        <p>
            Saya memang masih baru dalam web development, karena itu
            saya tidak akan pernah berhenti belajar.
        </p>
        <p>
            Saya ingin menguasai bahasa HTML, CSS, dan Javascript.
            Simak video lengkap tentang saya.
        </p>
        <p>
            <video controls play >
                <source src="download.mp4" type="video/mp4" />
            </video>
        </p>
    </article>
    <hr>
    <footer>
       &copy; Ketika kita berhenti belajar, kita berhenti tumbuh
    </footer>

</body>
</html>

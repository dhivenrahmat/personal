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

        /* Form Container */
        form {
            max-width: 600px; 								/*Mengatur lebar maksimum elemen article menjadi 600px*/
            margin: 50px auto; 								/*memusatkan artikel secara horizontal dan memberi ruang 50px di atas dan bawah */
            padding: 20px; 									/*memberikan jarak di sekitar konten dalam artikel, ini membuat teks tidak menempel ke tepi*/
            background-color: #fff;  						/*Warna latar belakang putih*/
            border-radius: 8px; 							/*memberikan sudut yang membulat sebesar 8px*/
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 		/* Menambahkan bayangan lembut di bawah elemen */
        }

        form h1 {
            text-align: center; 							/*memusatkan teks di dalam artikel di tengah */	
            margin-bottom: 20px; margin-bottom: 20px; 		/*Properti ini memberikan jarak (spasi) sebesar 20px pada bagian bawah elemen <h1>*/
            font-size: 32px; 								/*ukuran font*/
            color:  #333; 									/*warna teks hitam*/
        }

        form label {
            font-weight: bold; 			/*menebalkan teks*/
            display: block; 			/*memaksa label menjadi elemen block yang menempati baris baru*/
            margin-bottom: 8px; 		/*memberi jarak di bawah label untuk tata letak yang lebih rapi*/
        }

        form input, form textarea {
			width: 100%;               /* Membuat elemen 100% lebar dari kontainer */
			padding: 10px;             /* Memberikan ruang 10px di dalam elemen */
			margin-bottom: 20px;       /* Memberikan jarak 20px di bawah elemen untuk pemisahan dengan elemen lainnya */
			border: 1px solid #ccc;    /* Menambahkan batas 1px dengan warna abu-abu terang */
			border-radius: 4px;        /* Memberikan sudut melengkung dengan radius 4px agar tampak lebih modern */
			font-size: 1rem;           /* Mengatur ukuran font menjadi 1rem atau 16px */
		}

        form input:focus, form textarea:focus {
			outline: none;                  	 			/* Menghilangkan outline saat elemen difokuskan */
			border-color: #007bff;          	 			/* Mengubah warna border menjadi biru saat elemen difokuskan */
			box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); 	/* Menambahkan efek bayangan biru dengan sedikit transparansi saat elemen difokuskan */
		}

        form input[type="submit"] {
			background-color: #007bff;            		/* Mengatur warna latar belakang tombol menjadi biru */
			color: white;                         		/* Mengubah warna teks tombol menjadi putih */
			border: none;                         		/* Menghilangkan border default dari tombol */
			cursor: pointer;                      		/* Mengubah kursor menjadi pointer ketika mouse berada di atas tombol */
			padding: 12px 20px;                   		/* Memberikan ruang dalam tombol dengan padding 12px secara vertikal dan 20px secara horizontal */
			font-size: 1rem;                      		/* Mengatur ukuran font tombol menjadi 1rem */
			border-radius: 4px;                   		/* Memberikan sudut melengkung pada tombol */
			transition: background-color 0.3s ease; 	/* Menambahkan efek transisi pada perubahan warna latar belakang dalam 0.3 detik */
		}


        form input[type="submit"]:hover {
			background-color: #0056b3;  	/* Mengubah warna latar belakang tombol menjadi biru yang lebih gelap (#0056b3) saat tombol di-hover */
		}


        .status {
			max-width: 600px; 		/* Membatasi lebar maksimal elemen menjadi 600px */
			margin: 20px auto; 		/* Memberikan margin atas/bawah 20px dan rata tengah secara horizontal */
			padding: 15px; 			/* Memberikan ruang di dalam elemen sebesar 15px */
			border-radius: 8px; 	/* Membuat sudut elemen melengkung sebesar 8px */
			text-align: center; 	/* Mengatur teks di dalam elemen agar rata tengah */
			font-size: 1rem; 		/* Mengatur ukuran font menjadi 1rem atau 16px */
		}

		.status.sukses {
			background-color: #d4edda; 		/* Warna latar belakang hijau muda (tanda sukses) */
			color: #155724; 				/* Warna teks hijau gelap */
			border: 1px solid #c3e6cb; 		/* Memberikan garis tepi hijau lembut */
		}

		.status.gagal {
			background-color: #f8d7da; 		/* Warna latar belakang merah muda (tanda gagal) */
			color: #721c24; 				/* Warna teks merah gelap */
			border: 1px solid #f5c6cb; 		/* Memberikan garis tepi merah lembut */
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

    <!-- Pesan Status -->
    <?php if (isset($_GET['status'])): ?>
        <div class="status <?php echo ($_GET['status'] == 'sukses') ? 'sukses' : 'gagal'; ?>">
            <?php
                if ($_GET['status'] == 'sukses') {
                    echo "Pesan Anda Berhasil terkirim";
                } else {
                    echo "Pesan Anda Gagal terkirim";
                }
            ?>
        </div>
    <?php endif; ?>

    <!-- Formulir -->
    <form action="form-kirim.php" method="POST">
        <h1>Contact Me</h1>

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Alamat email Anda" required />

        <label for="message">Pesan</label>
        <textarea name="message" placeholder="Tulis pesan Anda di sini..." rows="4" required></textarea>

        <input type="submit" name="Kirim" value="Kirim" />
    </form>
	<footer>
        &copy; Ketika kita berhenti belajar, kita berhenti tumbuh
    </footer>
</body>
</html>

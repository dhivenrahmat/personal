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
		
		article {
            max-width: 950px; 							/*Mengatur lebar maksimum elemen article menjadi 950px*/
            margin: 20px auto; 							/*memusatkan artikel secara horizontal dan memberi ruang 50px di atas dan bawah */
            padding: 30px; 								/*memberikan jarak di sekitar konten dalam artikel, ini membuat teks tidak menempel ke tepi*/
            background-color: #fff;	 					/*Warna latar belakang putih*/
            border-radius: 8px; 						/*memberikan sudut yang membulat sebesar 8px*/
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 	/* Menambahkan bayangan lembut di bawah elemen */
            text-align: center; 						/*memusatkan teks di dalam artikel di tengah */	
        }
		
        p {
           
            margin-bottom: 20px; 				/*Properti ini memberikan jarak (spasi) sebesar 20px pada bagian bawah elemen <p>*/
        }

        div {
            display: flex; 				/*Mengatur elemen menjadi dalam 1 baris*/
            justify-content: center; 	/*Menyusun elemen-elemen yang menjadi satu baris tadi di tengah kontainer, baik secara horizontal maupun vertikal*/
            gap: 20px; 					/*Memberikan jarak 20px antara setiap elemen <div> di dalam kontainer*/
        }

        div > div {
			max-width: 350px; 								/*Mengatur lebar maksimum elemen article menjadi 350px*/
            background: #F5FFFA; 							/* latar belakang elemen/kotak warna hijau muda pucat*/
            padding: 20px;  								/*memberikan jarak di sekitar konten dalam artikel, ini membuat teks tidak menempel ke tepi*/
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);  		/* Menambahkan bayangan lembut di bawah elemen */
            border-radius: 8px; 							/*memberikan sudut yang membulat sebesar 8px*/
            width: 100%; 									/*Mengatur lebar elemen menjadi 100% dari lebar kontainer induk*/
            flex-direction: column; 						/*Menyusun elemen secara vertikal didalam kontainer flexbox*/ 
        }

        div > div h3 {
            font-size: 1.3rem; 			/*ukuran font sama dengan 20.8px*/
        }

        div > div ul {
            list-style: none; 			/*menghapus bullet point dari elemen <ul>*/
            text-align: left; 			/*Mengatur teks dalam elemen <ul> agar rata kiri*/
        }

        div > div li {
            margin-left: 20px; 			/*Memberikan margin kiri sebesar 20px untuk setiap elemen <li>*/
			
        }

        div > div li::before {
            content: "•"; 				/* Menambahkan simbol bullet point (•) sebelum konten setiap elemen <li>*/
            margin-right: 20px;			/*Memberikan margin kanan sebesar 20px setelah bullet point*/
        }
		
		footer {
			text-align: center; 		/* Menyusun teks di tengah */
			padding: 10px;   			/* Memberikan jarak dalam elemen */
			background-color: #333; 	/* Warna latar belakang footer */
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
    <header >
        <img src="Rahmat.jpg" width="200" height="200" style="border-radius: 50%;"/>
        <h1>Diven Rahmat</h1>
        <p>Web Developer</p>
    </header>
	<hr>
    <article>
        <h2>Overview</h2>
        <p>Hi, saya adalah web developer yang berdomisili di Buton Utara. Saat ini sedang belajar HTML di Petani Kode</p>
        <div>
            <div>
                <h3>Pengalaman</h3>
                <ul>
                    <li>HTML (Expert)</li>
                    <li>CSS (Beginner)</li>
                    <li>Javascript (Beginner)</li>
                </ul>
            </div>
            <div>
                <h3>Skill</h3>
                <ul>
                    <li>Freelancer di Internet</li>
                    <li>Leader Local Linux Community</li>
                    <li>Leader Local Linux Community</li>
                </ul>
            </div>
        </div>
    </article>
	</hr>
	<hr>
    <footer >
        &copy; Ketika kita berhenti belajar, kita berhenti tumbuh
    </footer>
	</hr>
</body>
</html>
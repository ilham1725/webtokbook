-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 04:55 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokbuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_akun` varchar(100) NOT NULL,
  `akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `telepon`, `username`, `password`, `foto_akun`, `akses`) VALUES
(1, 'Ilham Gadang Murakabi', '089611346', 'ilham', '202cb962ac59075b964b07152d234b70', 'IMG-20191213-WA0027.jpg', 'pelanggan'),
(10, 'Lina Khoirunnisa', '08213991882', 'lina', '202cb962ac59075b964b07152d234b70', '0', 'pelanggan'),
(11, 'Young Lex', '081231231', 'young', '202cb962ac59075b964b07152d234b70', '0', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(5) NOT NULL,
  `id_kat` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `detail` mediumtext NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_kat`, `judul`, `penulis`, `detail`, `jumlah`, `harga`, `foto`) VALUES
(14, 2, 'Wingit', 'Sarah Wijayanto', '\0Penelusuran sebuah kompleks perumahan tua terbengkalai di daerah Jakarta Timur malam itu awalnya berjalan menyenangkan. Sebelum masuk ke area kompleks, saya bersama Wisnu, Fadi, dan Demian membuka vlog dengan gimmick seru untuk mencairkan suasana. Namun, saat tiba di sebuah lokasi rumah tingkat yang dikelilingi pepohonan dan semak, saya melihat semakin banyak makhluk tak kasatmata yang membuat saya terkejut. Tidak jauh dari situ, saya merasakan kehadiran sesosok hantu yang ingin berkomunikasi dengan saya. Hantu tersebut ternyata berwujud seorang anak kecil laki-laki. Fadi mengambil alih penelusuran saat makhluk tersebut berkomunikasi dengan saya. Selanjutnya, kami menyebut hantu anak kecil tersebut dengan nama Adik. Ia memiliki kebiasaan mengangkat kaki kanannya lalu menggesekkan tulang kering kaki kanannya ke betis kaki kiri seperti merasakan gatal. Ternyata, Adik tidak sendirian. Ia bersama dengan seorang kuntilanak yang ia panggil Tante. Adik bahkan menunjukkan di mana lokasi Tante berada, tepatnya di sebuah pohon. Inilah penelusuran kisah Adik dan Tante Kun....', 0, 80000, 'wingit.jpg'),
(15, 11, 'Mommyclopedia: 78 Resep MPASI', 'dr. Meta Hanindita, Sp.A', 'MPASI harus diberikan saat ASI saja sudah tidak dapat mencukupi kebutuhan nutrisi bayi. Selama periode MPASI, seorang bayi secara perlahan dilatih agar kelak dapat mengonsumsi makanan keluarga. Masa transisi dari ASI eksklusif sampai makanan keluarga ini terjadi saat bayi berusia sekitar 6-23 bulan. Periode ini adalah masa kritis untuk pertumbuhan dan perkembangan optimal bayi. \r\n\r\nBuku yang berisi 78 resep MPASI yang lezat, bergizi, dan mudah dibuat ini dikategorikan untuk anak berumur 6-8 bulan, 9-11 bulan, dan 12-23 bulan. Selain makanan utama,juga disediakan beberapa resep camilan anak. \r\n\r\nResep yang tersaji di sini antara \r\n\r\n- bubur opor ayam \r\n\r\n- bubur udang tahu \r\n\r\n- tim semur daging tempe \r\n\r\n- tim cah ikan kembung \r\n\r\n- makaroni keju \r\n\r\n-siomay udang ayam \r\n\r\n- bitterbalen \r\n\r\n- nasi ayam katsu \r\n\r\n- nasi bakar tuna \r\n\r\n- mi tek-tek\r\n\r\n- agar-agar buah', 0, 30000, 'mommy.jpg'),
(16, 12, 'Sebuah Seni untuk Bersikap Bodo Amat', 'Mark Manson', '\"Selama beberapa tahun belakangan, Mark Manson melalui blognya yang sangat populer telah membantu mengoreksi harapan harapan delusional kita, baik mengenai diri kita sendiri maupun dunia. Ia kini menuangkan buah pikirnya yang keren itu di dalam buku hebat ini.\r\n\r\n“Dalam hidup ini, kita hanya punya kepedulian dalam jumlah yang terbatas. Makanya, Anda harus bijaksana dalam menentukan kepedulian Anda.” Manson menciptakan momen perbincangan yang serius dan mendalam, dibungkus dengan cerita-cerita yang menghibur dan “kekinian”, serta humor yang cadas. Buku ini merupakan tamparan di wajah yang menyegarkan untuk kita semua, supaya kita bisa mulai menjalani kehidupan yang lebih memuaskan, dan apa adanya.\r\n\"', 0, 100000, 'sebuah.jpg'),
(17, 2, 'Shine', 'Jessica Jung', 'Apa yang bersedia kaupertaruhkan demi mewujudkan impianmu? \r\nBagi Rachel Kim, remaja Korea-Amerika yang berusia tujuh belas tahun, jawabannya adalah: hampir segalanya. Enam tahun lalu ia direkrut oleh DB Entertainment—salah satu perusahaan musik K-pop terbesar di Seoul. Aturan menjadi trainee DB Entertainment cukup sederhana: latihan 24 jam sehari dan 7 hari seminggu, tampil sempurna, dilarang berkencan. Mudah, bukan? \r\nTidak juga. \r\nKetika skandal-skandal mulai bermunculan dalam industri yang berusaha keras mempertahankan citra kesempurnaan tersebut, apakah Rachel cukup kuat untuk menjadi pemenang? Atau apakah ia akan berakhir dalam keadaan hancur? \r\n\r\nJESSICA JUNG, bintang K-pop dan mantan vokalis utama dalam girl group paling terkenal di Korea, Girls Generation, mengajak kita masuk ke dunia K-pop yang penuh warna dan intrik, di mana harga yang harus dibayar untuk kesuksesan—dan cinta—sangat tinggi. Kini saatnya bagi dunia untuk mengetahui apa yang harus dilalui seorang gadis untuk mencapai impiannya sebagai bintang K-pop yang BERSINAR.', 2, 120000, 'shine.jpeg'),
(18, 2, 'Selamat Tinggal', 'Tere Liye', 'Kita tidak sempurna. Kita mungkin punya keburukan, melakukan kesalahan, bahkan berbuat jahat, menyakiti orang lain. Tapi beruntunglah yang mau berubah. Berjanji tidak melakukannya lagi, memperbaiki, dan menebus kesalahan tersebut. \r\n\r\nMari tutup masa lalu yang kelam, mari membuka halaman yang baru. Jangan ragu-ragu. Jangan cemas. Tinggalkanlah kebodohan dan ketidakpedulian. “Selamat Tinggal” suka berbohong, “Selamat Tinggal” kecurangan, “Selamat Tinggal” sifat-sifat buruk lainnya.\r\n\r\nKarena sejatinya, kita tahu persis apakah kita memang benar-benar bahagia, baik, dan jujur. Sungguh “Selamat Tinggal” kepalsuan hidup.  \r\n\r\nSelamat membaca novel ini. Dan jika kamu telah tiba di halaman terakhirnya, merasa novel ini menginspirasimu, maka kabarkan kepada teman, kerabat, keluarga lainnya. Semoga inspirasinya menyebar luas.', 0, 112000, 'selamat tinggal.jpg'),
(20, 2, 'Inestable', 'Eko Ivano Winata', 'Harusnya semua jadi indah ketika pacar elo balik lagi ke Indonesia setelah LDR-an penuh Skype selama tiga bulan. Dan ya, Aluna girang bukan main waktu Nakula kembali dari Seville untuk kembali bersekolah di Sevit bersamanya. Hidup Aluna kembali menjadi sempurna. Sampai akhirnya Nakula mulai bersikap tidak menyenangkan. Aluna heran mengapa Nakula cemburu bukan main kepada Arjuna. Lalu kedatangan cewek baru dari Amerika itu tampaknya membuat suasana hati Nakula berubah. Cewek itu merebut waktu Nakula dari Aluna. Semua janji-janji Nakula dilanggarnya demi bersama cewek itu. \r\nAluna jelas cemburu. Tapi dia dilarang cemburu karena Nakula berkali-kali meyakinkannya, ini semua salah paham. Kalau memang salah paham, mengapa tidak dijelaskan saja? Mengapa Nakula menganggap Aluna tidak mengerti, tetapi Nakula tidak menceritakan yang sebenarnya? Apakah hubungan ini harus berakhir di sini saja?', 60, 65000, 'inestable.jpg'),
(21, 2, 'CITYLITE: Midnight Prince', 'Titi Sanaria', '\"Menurutku, kamu menyukaiku.\"\r\n\"Menurutku, kamu terlalu percaya diri.\" \"Aku mengenalmu, Ka. Sebelum sesuatu yang aku nggak tahu itu apa, kamu nyaman denganku.” Mika sadar, sudah saatnya dia meninggalkan masa-masa terpuruk dalam hidupnya. Menjalani kehidupan normal selaiknya seorang perempuan dewasa yang bahagia, seperti kata sahabatnya. Menemukan seseorang yang tepat, menjalani hubungan yang serius, kemudian menikah. Lalu Mika bertemu Rajata. \r\n\r\n\r\nSemua nyaris sempurna seperti harapan semua orang untuknya, sebelum sebuah kenyataan menyakitkan menghantamnya telak. Membuatnya perlahan-lahan menghindari laki-laki itu, mengubah haluan menjadi seorang pesimis yang tak percaya pada kekuatan cinta. Dia berusaha mematikan perasaannya tanpa tahu kalau Rajata justru mati-matian memperjuangkannya. Jika dua orang yang sudah tak sejalan bertahan di atas kapal yang nyaris karam, akankah mereka bertahan bersama, atau mencari kapal lain untuk menyelamatkan diri masing-masing?', 40, 64800, 'midnight prince.jpg'),
(22, 2, 'Boys do Write Love Letters', 'Kansa Airlangga', 'Shenaya mulai percaya, bahwa bukan hanya anak perempuan yang suka menulis. Sebab gadis itu menemukan surat-surat tersebut di lokernya yang tak pernah dikunci. Ia pikir, semuanya adalah surat salah kirim dari seorang siswi, sampai akhirnya Shenaya temukan kode jelas tentang siapa yang menuliskan semuanya. \r\n\r\n\r\n\r\nNamun permasalahannya adalah, Shenaya sudah lebih dulu menyukai Dipo jauh sebelum surat-suratnya datang. Dan permasalahannya lagi adalah, Argado datang entah atas perintah siapa. Hati Shenaya semakin bimbang. \r\n\r\n\r\n\r\nNanti, setelah puluhan surat datang, setelah Argado semakin dekat, dan setelah Dipo tetap tidak berkutik, Shenaya akhirnya tahu, ke mana hatinya harus jatuh.', 100, 59000, 'bdwll.jpg'),
(23, 2, 'Warm Heart', 'ulliane', 'Dua insan manusia harus terjebak dalam dilema\r\ncinta yang memaksa salah satu dari mereka pergi\r\nmenjauh. Setelah menghilang selama lima  tahun,\r\nClara kembali masuk ke dalam kehidupan Andre,\r\npria yang dicintainya dalam ikatan pertunangan yang\r\norangtua mereka buat. Namun sayangnya Andre yang\r\ndikenalnya kini bukanlah Andre yang sama dengan\r\nyang dikenalnya lima tahun yang lalu. Dapatkah Clara\r\nmendapatkan cinta pertamanya kembali?', 0, 49000, 'warm heart.jpg'),
(24, 2, 'My Own Private Mr. Cool', 'Indah Hanaco', 'Bagi Heidy Theapila, latar belakang keluarga membuatnya tak mudah menemukan pasangan sejiwa. Tapi, ceritanya berbeda dengan Mirza. Heidy meyakini lelaki itu mencintainya dengan tulus. Namun, keyakinannya tumbang. Pertemuan mereka bukan cuma karena campur tangan Allah semata. Melainkan karena skenario rapi yang berkaitan dengan materi. Marah sekaligus patah hati, Heidy membatalkan rencana masa depannya dan memilih kabur ke Italia. Langkahnya mungkin tak dewasa, tapi Heidy butuh ruang untuk meninjau ulang semua rencana dalam hidupnya. Lalu, Allah memberinya kejutan. \r\n\r\n\r\nDalam pelayaran menyusuri Venesia, Heidy bertemu raksasa bermata biru. Graeme MacLeod, pria yang mencuri napasnya di pertemuan pertama mereka. Meski ketertarikan di antara mereka begitu besar, Heidy tidak berniat menjalin asmara singkat. Graeme harus dilupakan. Ketika apa yang terjadi di Venesia tidak bisa tetap ditinggal di Venesia, Heidy mulai goyah. Apalagi Graeme ternyata lelaki gigih yang mengejarnya hingga ke Jakarta dan tak putus asa tatkala ditolak. Meski akhirnya satu per satu rahasia kelam lelaki itu terbuka, Heidy justru kian jatuh cinta. Pertanyaannya, apakah cinta memang benar-benar mampu menyatukan mereka?', 70, 75000, 'myown.jpg'),
(25, 3, 'Demon Slayer: Kimetsu no Yaiba 01', 'Koyoharu Gotouge', 'Yuji Itadori seorang murid SMA dengan kemampuan atletik yang luar biasa. Kesehariannya adalah menjenguk kakeknya yang terbaring di rumah sakit. Suatu hari, segel \"objek terkutuk\" yang berada di sekolahnya terlepas, monster-monster pun mulai bermunculan. Yuji menyusup ke dalam gedung sekolah demi menolong senior di klubnya, akan tetapi...!?', 50, 40000, 'demon hunter.jpg'),
(26, 3, 'Kariage Kun 42 (Terbit Ulang)', 'Masashi Ueda', 'Ayo, ceriakan harimu dengan cerita kekonyolan Kariage yang nggak ada matinya!!', 16, 22500, 'kariage kun.jpg'),
(27, 3, 'New Kobochan 32', 'Masashi Ueda', 'Saat Kobo berdebat dengan Kakek soal pot mana yang nilainya lebih tinggi, pilihan dan jawaban Kobo benar-benar menggelitik hati. Bahkan saat Kobo sedang rajinnya membantu ibu membersihkan rumah, hasilnya di luar dugaan, lho ^__^', 40, 22500, 'kobochan.jpg'),
(28, 3, 'Detektif Conan 96', 'Aoyama Gosho', 'Pertama kalinya Heiji Hattori berhadapan dengan si Kid Pencuri yang mengincar \"Fairy Lip \"! Di kasus lain Makoto Kyogoku terlibat dalam insiden di lokasi syuting TV drama. . . ! ? Selanjutnya ada informasi baru terkuaknya bos Organisasi Baju Hitam!!', 45, 25000, 'conan.jpg'),
(29, 3, 'New Kobochan 31', 'Masashi Ueda', 'Pola tingkah lucu dan menggemaskan Kobo dan Miho kembali lagi!! Saat malam mendung dan turun hujan, ibu melarang Kobo dan Miho menonton film horor. Mungkin karena takut tidak bisa tidur, ya. Tapi ternyata alasan ibu...', 10, 22500, '9786020445168_new-kobochan-31__w150_hauto.jpg'),
(30, 1, 'Z1-Smp/Mts Buku Siswa Kl.7 Pendidikan Pancasila Dan Kewarganegaraan', 'KHILYA FA`IZIA, AMIN SUPRIHATINI', '\"Bangsa yang besar adalah bangsa yang menghargai jasa dan meneruskan perjuangan para pahlawannya\" \r\nPernyataan presiden pertama Indonesia tersebut mengisyaratkan pentingnya karakter nasionalis. Seseorang yang memiliki karakter nasionalis akan mampu meneruskan perjuangan dan melanjutkan cita-cita para pahlawan. Menciptakan masyarakat yang berkarakter nasionalis dapat dibentuk melalui Pendidikan Pancasila dan Kewarganegaraan. Melalui Pendidikan Pancasila dan Kewarganegaraan generasi penerus dididik, dibina, dan diarahkan dapat berpikir, bersikap, dan berbuat yang menunjukkan kepedulian serta penghargaan yang tinggi terhadap bangsanya. Selain itu, generasi penerus dapat menempatkan kepentingan bangsa dan negara di atas kepentingan diri dan kelompoknya. Pendidikan Pancasila dan Kewarganegaraan dapat mengantarkan generasi penerus mampu menghadapi tantangan masa depan. Berbekal falsafah Pancasila, peserta didik mampu mengikuti perubahan dan perkembangan zaman, tetapi tetap mempertahankan karakter bangsa Indonesia.', 25, 23000, 'Buku_Siswa_Kl_7_P_Pancasila_dan_Kewarganegaraan__w149_hauto.jpg'),
(31, 1, 'Kisah Menakjubkan 25 Nabi & Rasul 1', 'Watiek Ideo', 'Di dalam Islam ada 25 Nabi dan Rasul yang wajib kita ketahui. Semuanya memiliki tugas yang sama dengan tantangan berbeda-beda. Mari kita pelajari kisah nabi-nabi tersebut! Nabi Adam a.s.: Manusia pertama yang diciptakan Allah Swt. Nabi Idris a.s.: Manusia pertama yang bisa menulis. Nabi Nuh a.s.: Membuat kapal untuk menyelamatkan diri dan pengikutnya dari azab Allah Swt. kepada kaum yang zalim. \r\n\r\n\r\n\r\nNabi Hud a.s.: Nabi yang berasal dari suku â€˜Ad di Jazirah Arab. Nabi Sholeh a.s.: Mengeluarkan unta betina yang sedang hamil dari batu besar. Kisah Menakjubkan 25 Nabi dan Rasul pantas jadi pilihan orangtua karena buku ini berperan aktif membantu orangtua untuk membentuk karakter anak-anak mereka seperti sifat-sifat para nabi. H. Yanuar Isfanie, SS. Ketua Bidang Kurikulum Pembelajaran Al Qurâ€™an Di Lembaga Pendidikan Ilmu Al Qurâ€™an (LPIQ Nasional) Masjid Istiqlal, Jakarta', 17, 60000, 'ID_KM25NR2018MTH04KM01.jpg'),
(32, 1, 'Kls.Iii/Bk Penilaian Tematik (Bupetik) Jl.3G /K13N', 'Tim Mitra Pendidikan', 'Inti Sari Materi berupa materi per muatan pelajaran (BI, Mat, PPKn, SBdP, dan PJOK) yang disajikan secara tuntas.\r\n    Penilaian Pengetahuan berupa latihan per muatan pelajaran dan latihan soal subtema.\r\n    Penilaian Keterampilan berupa kegiatan per muatan pelajaran dan kegiatan terpadu.\r\n    HOTS (Higher Order Thingking Skills) beruapa soal-soal untuk melatih siswa berpikir tingkat lebih tinggi.\r\n    Soal Terpadu berupa soal-soal yang diselesaikan berdasarkan beberapa konsep muatan pelajaran.', 30, 65000, 'Kls.Ii_Bk_Penilaian_Tematik_Bupetik_Jl.2G__K13N__w149_hauto.jpg'),
(33, 1, 'Z1-Sd/Mi Buku Siswa Tematik Terpadu Kl.4 Tema 3 Peduli Terhadap Lingkungan', 'Arifah Rizky Aviliyah', 'Kamu tentu sudah mengetahui jika saat ini proses pembelajaran akan dilakukan dengan Kurikulum 2013. Apabila ada yang menyebut kurikulum ini sebagai sesuatu yang menambah bebanmu sebagai seorang pelajar, orang tersebut tentu belum memahami Kurikulum 2013 dengan baik. Faktanya, Kurikulum 2013 menjadikan proses pembelajaran lebih menyenangkan. \r\nSalah satu daya tarik dari Kurikulum 2013 adalah hadirnya lima mata pelajaran yang dipelajari menggunakan sistem tematik terpadu. Pelajaran dimaksud yaitu Bahasa Indonesia, limu Pengetahuan Alam, Ilmu Pengetahuan Sosial, Pendidikan Pancasila dan Kewarganegaraan, serta Seni Budaya dan Prakarya. Selain itu, ada banyak kegiatan menarik yang menjadi salah satu ciri Kurikulum 2013. \r\nBukalah buku ini. Kamu akan menemukan berbagai kegiatan seru yang bisa dilakukan bersama teman-temanmu. Bahkan, ada rubrik Mari Bermain yang dapat kamu gunakan sebagai salah satu alternatif dalam memilih permainan. Aneka kegiatan tersebut tentu bukan tanpa maksud. Kegiatan-kegiatan tersebut dibuat agar kamu berhasil mencapai kompetensi yang diharapkan \r\nBuku ini hadir untuk melengkapi materi pembelajaran yang ada di buku tematik dari pemerintah. Buku ini juga terbit secara berseri seperti buku tematik terpadu dari pemerintah. Judul-judul seri buku ini yaitu: Indahnya Kebersamaan, Selalu Berhemat Energi, Peduli terhadap Makhluk Hidup, Berbagai Pekerjaan, Pahlawanku, Cita-citaku, lndahnya Keragaman di Negeriku. Daerah Tempat Tinggalku, dan Kayanya Negeriku.', 15, 25000, 'Buku_siswa_Tema_3_Peduli_terhadap_makhluk_hidup__w149_hauto.jpg'),
(34, 1, 'Atlas Pelajar Superlengkap Indonesia & Dunia Edisi 34 Provinsi Terbaru', 'Sev Sukandar', 'Atlas ini disusun berdasarkan data terbaru perkembangan geograï¬s di Indonesia maupun di dunia,\r\nsehingga sangat cocok digunakan sebagai penunjang belajar bagi siswa SD, SMP, dan SMA, khususnya\r\ndi mata pelajaran Geograï¬ atau limu Pengetahuan Sosial (IPS).', 20, 60000, '9786027428232.jpg'),
(35, 4, 'Kosmos: Aneka Ragam Dunia', 'Ann Druyan', 'Cosmos: Possible Worlds adalah saga lanjutan petualangan besar yang diawali bersama oleh Carl Sagan dan Ann Druyan. Cosmos: A SpaceTime Odyssey Druyan yang meraih Emmy Award dan Peabody Award merupakan fenomena global, ditayangkan di 181 negara di seantero planet ini. Kini, dengan Possible Worlds, Druyan melanjutkan perjalanan menarik yang akan membawa Anda melintas 14 miliar evolusi kosmik dan berbagai rahasia alam. Inilah kisah-kisah penanya tanpa takut yang belum pernah disampaikan, yang pencariannyaâ€”bahkan kadang dengan biaya setinggi-tingginyaâ€”memberi kita gambaran alam semesta luas yang baru kita mulai kenali. Dalam buku memukau ini, Druyan membayangkan masa depan penuh inspirasi yang kita masih dapatkan di dunia iniâ€”jika kita sadar pada waktunya untuk menggunakan sains dan teknologi canggih dengan kebijaksanaan. Siap-siap berlayar ke bintang-bintang!', 28, 115000, '9786020639222_kosmos_C_1_4_DCP-1__w149_hauto.jpg'),
(36, 4, 'Sanitasi, Hygiene&Keselamatan Kerja', 'SRI REJEKI & GUNADI DWI HANTORO', 'Kebersihan baik diri dan lingkungan menjadi kebutuhan utama demi keselamatan dan kesehatan baik di dunia kerja maupun dalam kehidupan sehari-hari. Edukasi tentang pentingnya menjaga kebersihan dan bagaimana cara menjaga kebersihan secara teknis, harus dimiliki oleh setiap individu. Kesadaran akan budaya hidup bersih pun harus ditanamkan pada setiap individu. \r\n\r\nBuku sanitasi, hygiene dan keselamatan kerja ini dapat membantu memberikan edukasi dasar tentang cara menjaga kebersihan baik individu maupun lingkungan, menjelaskan arti pentingnya menjaga kebersihan dan edukasi tentang cara menjaga kebersihan agar tercipta kesehatan dan keselamatan dalam melakukan aktivitas baik di tempat kerja maupun di lingkungan sekitar indvidu. \r\n\r\nMENS SANA IN CORPORE SANO, di dalam tubuh yang sehat terdapat jiwa yang kuat. Semoga setiap individu memiliki kesadaran hidup bersih dan hidup sehat agar menjadi pribadi yang kuat dan menjadi bagian bangsa yang kuat.', 21, 68000, 'img20201211_16284397__w149_hauto.jpg'),
(37, 4, 'Modul Paten Lolos Tes Cpns Cat 2021/2022', 'TIM PEMBINA EDUKA', 'Apa yang ada dalam buku Modul Paten Lolos Tes CPNS ini? \r\nâ€¢ Seputar tentang CPNS, fakta menarik CPNS 2021, persyaratan, dokumen yang harus dipersiapkan, tahapan seleksi, dan lain sebagainya. â€¢ Rangkuman Materi, Soal dan Pembahasan Tes Wawasan Kebangsaan, yang terdiri dari Subtes Bela Negara, Integritas Nasional Nasionalisme, Pilar Negara, dan Bahasa Indonesia. â€¢ Rangkuman Materi, Soal dan Pembahasan Tes Intelegensi Umum, yang terdiri dari Subtes sinonim, antonim, analogi, deret, hitung cepat (aljabar), matematika sederhana (aritmetika sosial) matematika berpola, penalaran Iogis, penalaran analitis, tes spastal â€¢ Rangkuman Materi, Soal dan Pembahasan Tes Karakteristik Pribadi. â€¢ Soal-soal merupakan soal HOTS (Higher Order Thinking Skills) â€¢ Metode Pembahasan Menggunakan Metode Penalaran dan Analitis â€¢ Dengan membeli buku ini, Anda akan mendapatkan software gratis CAT yang berisi Try Out dengan soal kisi-kisi tes CPNS 2021 beserta kunci jawabannya. â€¢ Dengan membeli buku ini, Anda akan mendapatkan free e-book TPA dan e-book TOEFL', 26, 140000, 'Modul_Paten_Lolos_Tes_Cpns_Cat_2021_2022__w149_hauto.jpg'),
(38, 4, 'Emas Indonesia (Hc)', 'IRWANDY ARIF', 'Sejak dulu, emas adalah salah satu logam yang paling banyak digunakan di dunia. Sifatnya yang kuat, tahan korosi, dan mudah dibentuk, serta warnanya yang menarik, membuatnya sangat populer untuk dimanfaatkan. Di Indonesia, pertambangan emas memiliki sejarah panjang. Mulai dari ribuan tahun lalu, ke masa penjajahan Belanda, hingga saat ini, eksplorasi dan penambangan emas masih terus dilakukan. Di antara banyaknya pertambangan emas di Indonesia, beberapa bahkan menjadi legenda karena telah berhasil melampaui tantangan zaman. Tak hanya sejarah emas dan uraian proses pertambangan emas secara lengkap, dalam buku ini dibahas juga topik-topik berikut: â€¢ Keterdapatan emas di dunia; â€¢ Tipe-tipe endapan emas; â€¢ Potensi sumber daya dan cadangan emas di Indonesia; â€¢ Tahapan pertambangan emas; â€¢ Berbagai metode pemanfaatan emas; â€¢ Tata cara pengusahaan emas; â€¢ Kontribusi pertambangan emas terhadap kondisi sosial kemasyarakatan; dan â€¢ Prospek pertambangan emas di masa depan. Melalui buku ini, Prof. Dr. Ir. Irwandy Arif M. Sc., yang kini merupakan Guru Besar Program Studi Teknik Pertambangan Institut Teknologi Bandung, membagikan pengetahuan serta pandangan yang aktual dan menyeluruh untuk menuntun dan mengajak kita semua memahami betul potensi sumber daya alam emas.', 23, 150000, '9786020648422_Emas_Indonesia_C_1_4_HC_R3-1__w149_hauto.jpg'),
(39, 4, 'Siap Jadi Juara OSN Fisika SMP Sederajat', 'Sarwadi', 'Buku ini siap menjadi teman kamu menggapai prestasi dan siap hadapi USN\r\nFISIKA. lsinya SUPER LENGKAP dan SUPER KOMPLET.\r\n\r\n>> Ringkasan materi yang jelas dan praktis\r\n>> BANK SOAL OLIMPIADE SAINS NASIONAL FISIKA terlengkap;\r\n     baik tingkat KABUPATEN, PROVINSI, maupun NASIONAL.\r\n>> FULL Pembahasan X-tra Lengkap dan Jelas\r\n>> X-tra BONUS SOAL-SOAL Ujian Nasional\r\n\r\nS0, tunggu apa lagi? Buku yang kamu pegang ini siap jadi pendamping\r\nuntuk persiapan hadapi OSN FISIKA.', 45, 45000, '9786020874371.jpg'),
(40, 8, 'Dasar-Dasar Teori Bilangan', 'Al Jupri, S.Pd.,M.Sc., Ph.D.', 'Buku Dasar-dasar Teori Bilangan disusun berdasarkan mata kuliah Teori Bilangan di lingkungan Departemen Pendidikan Matematika, Fakultas Pendidikan Matematika dan Ilmu Pengetahuan Alam, Universitas Pendidikan Indonesia.\r\n\r\nSusunan buku ini terdiri atas tujuh bab. Enam bab pertama berisi materi pokok dalam Teori Bilangan, meliputi: metode pembuktian dalam matematika, keterbagian bilangan bulat, persamaan Diophantine, teori kongruensi, kongruensi dan sistem kongruensi linear, dan bilangan prima. Satu bab terakhir berisi serba-serbi Teori Bilangan, meliputi materi-materi penting dalam Teori Bilangan serta berisi kumpulan soal tentang teori bilangan dan pembahasannya. Materi pokok yang dituangkan dalam buku ini sebagian besar mengacu pada buku Elementary Number Theory karangan David M. Burton. Sedangkan soal-soal yang dibahas merupakan soal-soal yang diambil dari berbagai sumber, baik dari buku-buku teori bilangan, maupun dari soal-soal kompetisi matematika untuk siswa sekolah menengah.\r\n\r\nDengan kandungan buku seperti di atas, buku ini dapat digunakan oleh para dosen pengampu mata kuliah teori bilangan, mahasiswa matematika, mahasiswa calon guru matematika, siswa sekolah menengah peminat matematika, siswa penggemar kompetisi matematika, serta guru pengajar kompetisi matematika.', 18, 32000, '9786232050341__w149_hauto.jpg'),
(41, 8, 'Statistik Non-Parametrik Model Analisis Diskriminan Berganda', 'Prof. Dr. A. Yusuf Imam Suja\'i, S.E., M.P.', 'llmu Statistik, dikelompokkan ke dalam dua katagori yaitu Statistik Parametrik dan Statistik Non-parametrik. Parametrik dan Non-pararnetrik dikaitkan dengan metode pengujian hipotesis. Untuk suatu penelitian yang semua data variabel berupa data parametrik (yaitu data dengan ukuran skala rasio da skala interval) pengujian hipotesis menggunakan uji statistik parametrik dan apabila datanya merupakan data non-parameteri (yaitu data dengan ukuran skala katagorikal dan nominal) dan/atau kombinasi antara data parametrik dengan data non-parametrik pengujian hipotesis menggunakan Uji Statistik Non-Paramterik. \r\n   Buku yang ada di tangan pembaca merupakan penjelasan teoritik dan praktik berkaitan dengan penggunaan Multiple Discriminant Analysis Model (MDAM) sebaga alat analisis dalam sebuah penelitian. MDAM merupakan model Regresi Linear Berganda di mana variabel dependen dengan ukuran skala katagorikal dan semua variabel independen merupakan variabel dengan ukuran skala rasio. Hadirnya buku ini dapat dijadikan referensi dalam sebuali penelitian yang menggunakan alat analisis yang sama baik dalam bidang ilmu ekonomi, administrasi maupun bidang-bidang ilmu lainnya.', -9, 58000, '9786239207403__w149_hauto.jpg'),
(42, 8, 'Statistika Deskriptif Dan Konsep Peluang, Aplikasi R-Stat', 'PROF. DR. IR. SUGIARTO, M. SC. & IR. HONGYANTO SET', 'Buku ini disajikan sebagai salah satu sarana yang memungkinkan mahasiswa lebih mendalamai materi-materi statistika. Materi dalam buku yang merupakan seri pertama ini tersusun dari 8 bab yang memaparkan tentang statistika deskriptif hingga konsep peluang.\r\nDalam buku ini juga disampaikan penjelasan terkait penggunaan software R-Stat yang sangat berguna terutama dalam penyelesaian analisis data terkait big data yang akan dihadapi pembaca dalam dunia kerja. Penekanan dari buku ini adalah pada pendalaman materi dan latihan soal-soal.', 65, 50000, 'img20200828_14475060__w149_hauto.jpg'),
(43, 8, 'Statistika Terapan Edisi Ketiga', 'Kadir', 'Ilmu pengetahuan adalah mengkaji secara ilmiah hubungan sebab-akibat antar gejala alam, baik dalam konstelasi makrokosmos (kabir) maupun mikrokosmos (sagir) untuk kemaslahatan umat manusia. Fokus penelitian kuantitatif adalah mempelajari gejala alam dengan ciri tertentu yang bervariasi yang dinamakan variabel. Pengukuran terhadap variabel adalah elemen penting dalam penelitian kuantitatif. Hasil kuantifikasi dari pengukuran disebut sebagai data, dan metode yang digunakan dalam pengumpulan, pengolahan, penyajian, dan analisis data hingga pengambilan kesimpulan dikenal sebagai metode statistika. Buku ini menyajikan penerapan metode statistika dalam menganalisis data penelitian kuantitatif asosiatif dan komparatif, yang terinspirasi dari pengalaman penelitian penulis.\r\n\r\nâ€œKonsep, contoh, perhitungan manual dan aplikasi SPSS/LISREL dalam pembahasan model regresi, model regresi komponen utama, model struktural (Jalur),  model ANOVA (1, 2, dan 3) Jalan, dan Model ANCOVA disertai penentuan effect size di dalam buku ini membantu peneliti dalam menganalisis data hasil penelitian. Model ini telah diterapkan dalam beberapa tesis dan disertasi pada Program Pascasarjana UNJ, terutama bagi mahasiswa yang melakukan penelitian kuantitatif asosiatif atau komparatif guna penyelesaian tugas akhir.â€\r\n\r\nProf. Dr. Burhanuddin Tola, M.A.\r\n\r\nGuru Besar Penelitian dan Evaluasi Program Pascasarjana UNJ\r\n\r\nâ€œBuku ini menyajikan interpretasi hasil pengujian hipotesis dengan perhitungan manual dan aplikasi SPSS serta LISREL didukung oleh konsep-konsep penting dalam statistika. Pembahasan, analisis data dan contoh-contoh yang relevan dengan penelitian pendidikan matematika dapat memotivasi peneliti untuk mengungkapkan kebaruan (novelty) penelitiannya.â€\r\n\r\nProf. Dr. Hamzah Upu, M.Ed.', 43, 160000, 'statistik-terapan-edisi-ke3-kadir__w149_hauto.png'),
(44, 8, 'Sinyal Dan Sistem Dengan Matlab', 'Eng R.h. Sianipar', 'Tujuan utama dari buku ini adalah memberikan kesempatan bagi para mahasiswa untuk menerapkan pemrograman MATLAB dalm mengimplementasikan teknik-teknik untuk menyelesaikan berbagai permasalahan dalam Sinyal dan Sistem. Buku ini mendorong para mahasiswa untuk mengeksplorasi terapan MATLAB sebagai perangkat pembantu dalam menyelesaikan topik-topik yang lebih rumit. Tujuan lain yang ingin dicapai adalah untuk mengintroduksi pemrograman MATLAB sebagai suatu alat bantu komputasi dan simulasi bagi para (calon)insinyur dan (calon) ilmuwan yang (sebelumnya) tidak memilikki pemahaman tentang MATLAB. Buku ini menganut pendekatan belajar sendiri, yaitu pembaca ditantang untuk mencoba sendiri dalam menemukan cara pemrograman MATLAB yang efesien. Kode-kode MATLAB yang yang disediakan pada buku ini dapat dengan mudah dimodifikasi untuk menyelesaikan masalah-masalah yang hampir sama.\r\nBerikut adalah topik-topik kupasan yang secara komprehensif dibahas: Bab 1. Sinyal dan Sistem Linier; Bab 2. Proses Acak; Bab 3. Sistem Diskret; Bab 4. Deret dan Transformasi Fourier; Bab 5. Transformasi Z; Bab 6. Ruang Keadaan; Bab 7. Pemodelan; Bab 8. DFT; Bab 9. Modulasi.', 13, 190000, 'img20200705_11051710__w149_hauto.jpg'),
(45, 6, '100 Resep Nusantara Favorit Keluarga Ala Dapur Susie', 'SUSIE AGUNG', '100 RESEP NUSANTARA FAVORIT KELUARGA \r\n\r\nSusie Agung penulis buku ini, adalah ibu rumah tangga yang multitasking dan multitalenta. Memasak, menata masakan, memotret, dan mempostingnya di Instagram, semua dikerjakan sendiri. Kini akun Instagramnya @susie.agung mencapai 147K+ followers. Buku ini berisi 100 resep Nusanta ra pilihan favorit keluarganya, terdiri atas 8 kategori yaitu: 1. Lauk Ikan: Balado Selar, Cakalang Santan Pedas, Cilok Teri Medan, Gurame Sambel Cobek, Ikan Asam Padeh, lwak Pe Cabe Ijo, Mangut Lele, dan lainnya, 2. Lauk Ayam & Bebek: Ayam Kampung Pedas Banyuwangi, Ayam Tangkap, Bebek Rica-rica, Kare Langsa Ayam Kampung, Tongseng Ayam, dan lainnya, 3. Lauk Daging Sapi & Kambing: Coto Makassar, Empal Gentong, Gongso Bablga Penyet, Krengsengan Kambing, Oseng Mercon Paru, Sop Janda, 4. Nasi & Mi: Mi Kangkung, Mi Tumis Aceh, Nasi Gandul Pati, Nasi Kebuli Kambing, Nasi Kuning Samarinda, Nasi Liwet Rice Cooker, dan lainnya, 5. Sayuran: Balado Jengkol, Beberuk Terong, Gulai Pakis Udang, Sayur Godog, Rendang Jengkol, dan lainnya, 6. Telor. Tempe, Tahu: Hintalu Masak Habang, Semur Tahu Telur, 7. Sambal: Sambal Ganja, Sambal Hejo, Sambal Tumpang.', 45, 125000, '9786020644455_Resep_Nusantara_Fav_ala_Dapur_Susie_C_1_4_R1_1-1__w149_hauto.jpg'),
(46, 6, 'Nasi Goreng Indonesia, Cita Rasa Mendunia', 'MURDIJATI, GARDJITO DAN DWI LARASATIE NUR FIBRI', 'Nasi goreng menjadi sebuah hidangan \"lintas kelas\" karena dari mulai meja makan di kampung-kampung kecil hingga Istana Kepresidenan...', 35, 95000, 'img20201215_16110918__w149_hauto.jpg'),
(47, 6, 'Resep Masakan Favorit Generasi Milenial', 'Daniza Ds.', 'Buku ini menyajikan resep lengkap. Dari mulai resep olahan mi sampai dengan resep makanan zaman dulu yang dikemas sedemikian rupa hingga berubah menjadi tampilan baru. Bahan-bahan yang mudah didapatkan dan menggunakan alat-alat yang dipakai sehari-hari, membuat resep-resep tersebut gampang dipraktikkan.', 42, 70000, '9786237219507__w149_hauto.jpg'),
(48, 6, 'Resep Masakan Padang Sederhana & Murah Meriah', 'Anissa Nurhidayati', 'Berbekal Buku Ini, Anda Dapat Mempratikan Resep Masakan Padang Yang Paling Terkenal', 34, 30000, '9786025169892_RESEP_MASAKAN_PADANG_SEDERHANA___MURAH_MERIAH__w149_hauto.jpg'),
(49, 6, 'Masak Tanpa Ribet Bersama Cooking With Sheila', 'SHEILA GONDOWIJOYO', 'Buku ini ditulis pada saat dunia tengah berjibaku melawan Pandemik Corona dan kita harus menahan diri untuk Stay at Home serta melakukan Social Distancing. Termasuk membatasi untuk ke pasar dan menyimpan bahan makanan untuk 1-2 minggu hingga 1 bulan ke depan.\r\n\r\nMenginspirasi penulis untuk menghasilkan resep yang praktis dan mengamankan bahan-bahan yang tidak bertahan lama. Nah, membuat BUMBU DASAR sendiri di rumah adalah salah satu jalan keluarnya. NO Pengawet and NO MSG!!! Jadinya awet dan tidak mubazir serta pasti kepakenya. Ada juga kreasi kaldu dan minyak bawang yang praktis dan berbagai resep variasi MENU UNTUK SEBULAN menggunakan Bumbu Dasar buatan sendiri ini. Menarik kan?\r\n\r\nBuku ini cocok untuk semua sahabat Cooking with Sheila yang sering masak di rumah maupun untuk kalian yang tidak punya banyak waktu untuk memasak karena harus bekerja atau mempunyai seabrek aktivitas lainnya.', 32, 95000, 'MASAK_TANPA_RIBET_ACC_OKE__w149_hauto.jpg'),
(50, 5, 'Best Score Tes Cpns 2021', 'Tim Presiden Eduka', 'DESKRIPSI \"MODUL & BANK SOAL TERLENGKAP\r\nâ€¢ TWK\r\nâ€¢ TIU\r\nâ€¢ PSIKOTES\r\nâ€¢ PnP â€¢ KESAMAPTAAN\r\nâ€¢ WAWANCARA â€¢ TOEIC\r\nâ€¢ TOEFL\r\n\r\n- INFORMASI CPNS\r\n- RINGKASAN MATERI\r\n- SOAL LATIHAN FULL PEMBAHASAN\r\n- TIPS & TRIK MENGERJAKAN PSIKOTES\r\n- TIPS & TRIK KESAMAPTAAN\r\n- TIPS & TRIK WAWANCARA KERJA\r\n- TOEFL & TOEIC\r\n- PAKET PREDIKSI SOAL FULL PEMBAHASAN', 55, 175000, 'BEST_SCORE_TES_CPNS_2021__w149_hauto.jpg'),
(51, 5, 'Panduan Sukses Tes Cpns 2021', 'Tim Presiden Eduka', 'Buku ini dilengkapi dengan Bonus DVD yang berisikan  sebagai berikut :\r\n\r\n1.Video Tips dan Trik Pengerjaan Psikotes\r\n2.Video Panduan Latihan Tes Kesehatan/ Kesamaptaan\r\n3.Software Simulasi Psikotes TPA+TBS\r\n4.Software Simulasi CAT SKD+SKB CPNS\r\n5.Software Simulasi TOEFL\r\n6.Software Simulasi TOEIC\r\n7.eBook lengkap : Petunjuk Pendaftaran CPNS, UUD 1945, PU EBI, Tes Buta Warna\r\n\r\nBuku ini juga dilengkapi Bonus Aplikasi Android+ IOS yang memudahkan Anda berlatih dimanapun dan kapanpun.', -61, 21000, 'img20210112_11043715__w149_hauto.jpg'),
(52, 7, 'Mulanya Reunian Jadi Triliunan', 'YAYASAN HARAPAN MULYA INSANI - YAHMI', 'â€œKesadaran pengurus dalam mengembangkan BPRS HIK tidak hanya bergerak dalam tataran Ar Rahman, membawa rahmat bagi sekalian alam, tetapi juga pada sifat Ar Rahim Allah, yakni membangun dan memelihara jalinan ukhuwah seluruh potensi kaum muslimin. Dengan demikian inshaAllah kehadiran BPRS HIK dapat menjadi setitik cahaya penerang bagi kehidupan umat. Cahaya itu akan tumbuh dan berada di mana-mana antara satu dengan lainnya terjalin baik, yang suatu saat akan menjadi suatu kekuatan dahsyat dalam membangun peradaban umat, inshaAllahâ€. â€“ Fuad Bawazir, Satu pendiri YAHMI dan mantan Menteri Keuangan RI â€œBuku ini layak sebagai buku pembelajaran bagi generasi muda. Pengalaman saya menjadi wakil presiden dua kali, ketua dewan Masjid dan ketua PMI, tidak terlepas dari ajaran Islam dan praktik nyata di lapangan. Teruskan perjuangan, sebab berlian sekalipun ditaruh di lumpur akan tetap bersinar gemerlap. Dalam pengelolaan pembiayaan, tetaplah menerapkan sistem manajemen profesionalâ€. â€“ M. Jusuf Kalla, Ketua Umum PMI, Ketua Dewan Masjid dan mantan wakil Presiden RI â€œPenguatan keuangan Syariah sudah menjadi political will pemerintah. Oleh karena itu, terbitnya buku ini diharapkan betul-betul merupakan implementasi pengembangan ekonomi dan pembiayaan syariah. Kini yang jadi pekerjaan rumah YAHMI adalah mengedukasi masyarakat bagaimana syariah menjadi way of lifeâ€. - Prof. Dr. Mardiasmo, MBA., Akt., wakil Menteri keuangan RI', 24, 80000, '9786230020872_CoverDepan_Mulanya_Reunian_jadi_Triliunan__w149_hauto.jpg'),
(53, 7, 'Pengantar Manajemen Syariah', '    Hendri Tanjung, Didin Hafidhuddin', 'Buku ini membahas manajemen dengan landasan Al-Qurâ€™an dan Sunnah.  Terdiri dari 12 bab, buku ini membahas manajemen dalam praktik beberapa nabi dan rasul, organisasi, globalisasi, budaya, fungsi-fungsi manajemen (seperti perencanaan, pengorganisasian, dan pengawasan), pemimpin dan kepemimpinan, manajemen konflik, manajemen motivasi, manajemen pemasaran dan manajemen kompensasi.\r\n\r\nBuku ini ditujukan sebagai buku pegangan bagi mahasiswa S1 yang ingin mempelajari manajemen dalam perspektif Islam.  Bagi mahasiswa pascasarjana S2 dan S3, dapat menjadikan buku ini sebagai penunjang referensi dalam membahas manajemen.  Bagi professional, buku ini dapat dijadikan bahan untuk bedah kasus, khususnya kasus-kasus actual yang diberikan pada setiap Bab Buku ini.  Selamat Membaca!', 29, 95000, '9786024258399-edit__w149_hauto.jpg'),
(54, 9, 'Memahami Trauma Dengan Perhatian Khusus Pada Masa Kanak-kanak', '    PROF. IRWANTO, PH.D., HANI KUMALA, M.PSI., PSI', 'Buku kecil ini mencoba untuk menjelaskan mengenai Trauma Psikologis sebagaimana yang dipahami oleh klinisi di bidang kesehatan mental. Hal ini kami anggap penting karena dalam berbahasa sehari-hari, istilah trauma sudah digunakan untuk menggambarkan pengalaman yang mencekam serta memberikan efek jera jangka panjang dalam diri individu. Agar pemahaman terhadap trauma bisa sesuai dengan perkembangan riset dan praktik di bidang layanan kesehatan mental, maka disajikan tiga perspektif untuk membantu para pembaca mengonstruksikan gambaran pengalaman traumatis yang berbeda-beda, yaitu perspektif model medis, psikologi positif, dan psikologi perkembangan. Masing-masing perspektif memberikan asumsi dan cara menjelaskan trauma yang sangat memengaruhi pandangan profesional atau praktisi sampai saat ini. Diskusi yang penting dalam buku ini adalah mengenai keadaan traumagenik, yaitu bagaimana individu yang mengalami trauma akan memproses berbagai krisis yang dialami pascaperistiwa traumatis tersebut agar dapat menjadi penyintas (survivor). Dalam hal ini, penjelasan mengenai keadaan traumagenik juga membantu praktisi memahami mengapa korban kekerasan di masa kanak-kanak rentan terhadap reviktimisasi dan berisiko menjadi pelaku. Pembaca juga diajak mendiskusikan mengenai resiliensi, posttraumic growth, PTSD, dan proses pemulihan dalam konteks kultural. Pada bagian apendiks, disajikan berbagai instrumen untuk asesmen yang kami anggap bermanfaat dalam membantu praktik untuk para pembaca.', 67, 45000, '9786020642215_MEMAHAMI_TRAUMA_C_1_4_R-1__w149_hauto.jpg'),
(55, 10, 'Panduan Lengkap Belajar Bahasa Arab Ilmu Nahwu', 'Fuad Nikma', 'Mengapa belajar bahasa Arab dianggap sulit? Lebih sulit dari belajar bahasa lainnya. Bahkan pada banyak orang, sudah menyerah sebelum memulai. Ia dianggap sebagai salah satu bahasa tersulit di dunia. Ada belasan juta kosa kata di dalamnya. Tentu saja ini stigma yang keliru dan harus diluruskan. Di sisi lain, di era globalisasi ini Bahasa Arab justru makin eksis, semakin banyak dipakai, bahkan mengalami perkembangan yang signifikan di negara-negara non-Arab.\r\n\r\nPotensi dan pengembangan bahasa Arab dalam berbagai bidang kehidupan semakin besar dan semakin menjanjikan. Buktinya, banyak orang non-Arab dan sarjana non- muslim yang menekuninya, dan bisa. Soal tujuan dan mindset menjadi kunci pembeda di sini. Itulah mengapa buku ini diterbitkan. Didorong keinginan untuk menjawab persoalan di atas, buku ini disusun dan diterbitkan. Lengkap, sistematis dan bisa dipelajari secara otodidak. Buku ini sangat layak menjadi referensi pustaka bagi para pelajar/santri, mahasiswa, guru/dosen, dan profesional yang ingin mendalami bahasa Arab secara baik.', 11, 125000, '9786237327448__w149_hauto.jpg'),
(56, 11, 'Mendidik Anak Tanpa Teriakan&Bentakan', 'Ayah Edy', 'Barangkali tidak ada orangtua yang tidak pernah sekali pun berteriak atau membentak anak. Dan celakanya, untuk sebagian orangtua, teriakan dan bentakan malah menjadi kebiasaan. Padahal sejumlah penelitian menunjukkan, teriakan dan bentakan justru memperburuk perilaku anak.\r\n\r\nDalam buku ini, Ayah Edy tidak sekadar membantu Ayah-Bunda mencari jalan keluar dari kebiasaan berteriak dan membentak tetapi, yang lebih penting lagi, mencari â€œjalan ke dalamâ€. Kita akan mempelajari cara-cara mengatasi konflik antara orangtua dan anak secara benar, disusun berdasarkan pengalaman Ayah Edy mendidik anak-anak di rumah dan di sekolah.', 88, 69000, 'WhatsApp-Image-2020-12-07-at-10.51.18__w149_hauto.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kat` int(10) NOT NULL,
  `nm_kat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `nm_kat`) VALUES
(1, 'Pendidikan'),
(2, 'Novel'),
(3, 'komik'),
(4, 'sains'),
(5, 'persiapan_ujian'),
(6, 'masakan'),
(7, 'finansial'),
(8, 'matematika'),
(9, 'psikologi'),
(10, 'kamus'),
(11, 'keluarga'),
(12, 'hiburan');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `nm_daerah` varchar(100) NOT NULL,
  `biaya_ongkir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nm_daerah`, `biaya_ongkir`) VALUES
(1, 'Jabodetabek', 10000),
(2, 'Luar Jabodetabek', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_transaksi`, `id_akun`, `id_buku`, `jumlah`, `tanggal_pembelian`) VALUES
(1, 7, 1, 14, 2, '2021-02-10'),
(2, 7, 1, 15, 10, '2021-02-10'),
(3, 8, 1, 15, 70, '2021-02-10'),
(4, 9, 1, 17, 3, '2021-02-10'),
(5, 10, 1, 14, 2, '2021-02-11'),
(6, 10, 1, 17, 2, '2021-02-11'),
(7, 11, 1, 14, 4, '2021-02-11'),
(8, 12, 1, 24, 10, '2021-02-13'),
(9, 12, 1, 51, 34, '2021-02-13'),
(10, 12, 1, 41, 12, '2021-02-13'),
(11, 13, 1, 24, 10, '2021-02-13'),
(12, 13, 1, 51, 34, '2021-02-13'),
(13, 13, 1, 41, 12, '2021-02-13'),
(14, 14, 1, 24, 10, '2021-02-13'),
(15, 14, 1, 51, 34, '2021-02-13'),
(16, 14, 1, 41, 12, '2021-02-13'),
(17, 15, 1, 14, 12, '2021-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `tambah_stok_buku`
--

CREATE TABLE `tambah_stok_buku` (
  `id_tambah` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `tanggal_tambah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `biaya` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `foto_upload` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_akun`, `id_ongkir`, `tanggal_transaksi`, `biaya`, `alamat`, `foto_upload`, `status`) VALUES
(6, 1, 1, '2021-02-08', 970000, 'jl.baiturrahman', '', 'Ditolak'),
(7, 1, 1, '2021-02-10', 470000, 'jl.nusantara', 'IMG_20191124_100613_701.jpg', 'Ditolak'),
(8, 1, 2, '2021-02-10', 2120000, 'jl.asudahlah', 'IMG-20191213-WA0039.jpg', 'Ditolak'),
(9, 1, 1, '2021-02-10', 370000, 'jl.asudahlah', 'IMG-20191213-WA0033.jpg', 'Ditolak'),
(10, 1, 2, '2021-02-11', 420000, 'jl asudahlah', '', 'Sedang Di Kirim'),
(11, 1, 2, '2021-02-11', 340000, 'jl asudahlah', '', 'proses'),
(12, 1, 1, '2021-02-13', 2170000, 'jl. nusel', '', 'proses'),
(13, 1, 2, '2021-02-13', 2180000, 'jln', '', 'proses'),
(14, 1, 2, '2021-02-13', 2180000, 'jlnaaa', '', 'proses'),
(15, 1, 2, '2021-02-23', 980000, 'jl.kasjdkasd', '', 'proses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `tambah_stok_buku`
--
ALTER TABLE `tambah_stok_buku`
  ADD PRIMARY KEY (`id_tambah`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tambah_stok_buku`
--
ALTER TABLE `tambah_stok_buku`
  MODIFY `id_tambah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

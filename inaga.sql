-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 09:40 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_inaga`
--

-- --------------------------------------------------------

--
-- Table structure for table `adsspace`
--

CREATE TABLE `adsspace` (
  `id_iklan` int(11) NOT NULL,
  `nama_iklan` varchar(250) NOT NULL,
  `foto_iklan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `adsspace`
--

INSERT INTO `adsspace` (`id_iklan`, `nama_iklan`, `foto_iklan`) VALUES
(1, 'Workshop CSMS', 'Brosur_CSMS_11.jpg'),
(2, 'Workshop', 'Brosur_CSMS_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `judul_banner` varchar(100) NOT NULL,
  `text_banner` text NOT NULL,
  `foto_banner` text NOT NULL,
  `url` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `judul_banner`, `text_banner`, `foto_banner`, `url`) VALUES
(1, 'We are INAGA', '<pre id=\"line1\"><span style=\"font-family: &quot;Verdana&quot;;\">Being a trusted partner of government, companies and professionals in the geothermal energy business.</span></pre>', 'slide_a2.jpg', NULL),
(2, 'We are INAGA', '<pre id=\"line1\"><span style=\"background-color: inherit;\"><font color=\"#000000\"><span></span><span style=\"font-family: &quot;Verdana&quot;;\">Educate the public about the potential and positive values, to support the creation of conducive conditions in geothermal development efforts.</span></font></span></pre>', 'slide_b1.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_geothermal_regulation`
--

CREATE TABLE `category_geothermal_regulation` (
  `id_kategori_geothermal` int(11) NOT NULL,
  `nama_kategori` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_geothermal_regulation`
--

INSERT INTO `category_geothermal_regulation` (`id_kategori_geothermal`, `nama_kategori`) VALUES
(2, 'UNDANG-UNDANG – GEOTHERMAL LAW'),
(3, 'PERATURAN PEMERINTAH – GOVERNMENT REGULATION');

-- --------------------------------------------------------

--
-- Table structure for table `category_related_regulation`
--

CREATE TABLE `category_related_regulation` (
  `id_kategori_related` int(11) NOT NULL,
  `nama_kategori` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_related_regulation`
--

INSERT INTO `category_related_regulation` (`id_kategori_related`, `nama_kategori`) VALUES
(1, 'Categoryyy1');

-- --------------------------------------------------------

--
-- Table structure for table `currentprogram`
--

CREATE TABLE `currentprogram` (
  `id_current` int(11) NOT NULL,
  `text_current` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currentprogram`
--

INSERT INTO `currentprogram` (`id_current`, `text_current`) VALUES
(1, '<p><strong style=\"font-weight: bold; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\">»</strong><span style=\"color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\">&nbsp; To give constructive and balanced inputs to the government to create harmonious, conducive and equitable of the policies and regulations.</span><br style=\"color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\"><strong style=\"font-weight: bold; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\">»</strong><span style=\"color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\">&nbsp; Together with the government, take an active role in efforts to socialize the benefits of geothermal exploitation to minimize environmental and social issues in the regions.</span><br style=\"color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\"><strong style=\"font-weight: bold; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\">»</strong><span style=\"color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\">&nbsp; Organizing an Annual Scientific Week in conjunction with the International Indonesian Geothermal Convention and Exhibition (IIGCE) to be held annually.</span><br style=\"color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\"><strong style=\"font-weight: bold; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\">»</strong><span style=\"color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\">&nbsp; Take an active role in supporting the Human Resource Development program by continuing the competency and training programs in cooperation with professional institutions</span><br style=\"color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\"><span style=\"color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\">&nbsp; &nbsp; &nbsp;both nationally and internationally to improve the capacity of geothermal experts.</span><br style=\"color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\"><strong style=\"font-weight: bold; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\">»</strong><span style=\"color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\">&nbsp; Expansion and empowerment of the organization by activating and forming new Student Chapters.</span><br style=\"color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\"><strong style=\"font-weight: bold; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\">»</strong><span style=\"color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\">&nbsp; Engage the media to help create a conductive investment climate by giving more proportion to positive and balanced news.</span><br style=\"color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\"><strong style=\"font-weight: bold; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\">»</strong><span style=\"color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\">&nbsp; To make API an Information Center by enabling the existence of Website API and API Newsletter.</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id_district` int(11) NOT NULL,
  `nama_district` varchar(250) NOT NULL,
  `id_province` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id_district`, `nama_district`, `id_province`) VALUES
(1, 'Sabang', 2),
(4, 'Sintang', 3),
(5, 'Hulu Sungai Selatan', 4),
(6, 'Nunukan', 5),
(7, 'Bulungan', 5);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(250) NOT NULL,
  `mulai_event` datetime NOT NULL,
  `berakhir_event` datetime NOT NULL,
  `lokasi_event` varchar(250) NOT NULL,
  `foto_event` text NOT NULL,
  `website_event` text NOT NULL,
  `deskripsi_event` text NOT NULL,
  `slug_event` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `mulai_event`, `berakhir_event`, `lokasi_event`, `foto_event`, `website_event`, `deskripsi_event`, `slug_event`) VALUES
(3, 'World Geothermal Congress 2020', '2020-04-27 01:00:00', '2020-05-03 12:00:00', 'Reykjavik, Iceland', 'wgc2020_geothermal_01.png', 'https://www.wgc2020.com/registration-and-info/', '<p>The World Geothermal Congress is a unique platform which attracts a \r\nglobal audience of decision makers in the geothermal world. The event \r\nbrings together industry leaders, and key stakeholders both from \r\nestablished and emerging geothermal countries as well as government \r\nofficials and international financial institutions.</p>\r\n<p>WGC will bring together more than 3,000 delegates attending from \r\nAfrica, Asia, Europe and the Americas, sharing their experience and \r\nvision for our industry and shaping the direction of geothermal for \r\ndecades to come. The delegates will have a unique opportunity to see \r\nfirst-hand how Iceland became a global leader in geothermal utilization \r\nduring short field trips in the evenings or longer excursions to the \r\nislands many geothermal areas. Hopefully they will go home to their \r\nrespective countries ready to take the next step towards implementing \r\nsustainable energy solutions based on their own geothermal resources.</p>', 'world-geothermal-congress-2020'),
(5, 'The 8th IIGCE 2020', '2020-08-12 08:00:00', '2020-08-14 05:00:00', 'Jakarta Convention Center', 'IIGCE_2020.png', 'https://iigce.com', '<p class=\"p1\" style=\"margin-bottom: 1.3em; color: rgb(241, 241, 241); font-family: Raleway, sans-serif; font-size: medium; text-align: justify;\"><span data-text-color=\"primary\" style=\"color: rgb(13, 39, 74) !important;\">Continuous interests in geothermal energy, its strategic importance in the energy-mix portfolio, huge potential of the resources in Indonesia, and the need to advancing further its development are some of the very compelling facts for an annual international business and technical forum to be held. Indonesia has a long history and experience in geothermal - yet there is still plenty of opportunities to leverage and benefit from all the players. The Indonesia International Geothermal Convention & Exhibition (IIGCE) thus provide a strategic avenue for geothermal forum in the region that promotes and advances broader collaboration and sharing of innovative technologies and experiences amongst geothermal stakeholders. For the seventh consecutive years, Indonesia Geothermal Association (INAGA)  is proud to host and present again <span style=\"font-weight: bolder;\">The 8<sup>th </sup>Indonesia International Geothermal Convention & Exhibition (IIGCE) 2020</span>, which is held in conjunction with INAGA’s Annual Scientific Meeting from 12 - 14 August 2020. The IIGCE 2020’s theme of <span style=\"font-weight: bolder;\">“</span>The Critical Role of Geothermal Energy in Managing Indonesia’s Energy Transition<span style=\"font-weight: bolder;\">”</span> is a compelling desire of all stakeholders to advance the geothermal development in meeting the country’s energy needs.</span></p><p class=\"p1\" style=\"margin-bottom: 1.3em; color: rgb(241, 241, 241); font-family: Raleway, sans-serif; font-size: medium; text-align: justify;\"><span data-text-color=\"primary\" style=\"color: rgb(13, 39, 74) !important;\">To successfully develop geothermal resources in Indonesia, all stakeholders must communicate, commit, working together and understanding each other’s interest and constrains. So, let’s make geothermal great again and We proudly encourage you to take part in this premier event of geothermal industry in the region and benefit from its strategic programs.</span></p>', 'the-8th-iigce-2020');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` varchar(250) NOT NULL,
  `tanggal_galeri` date NOT NULL,
  `foto_galeri` text NOT NULL,
  `slug_galeri` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_galeri`, `nama_galeri`, `tanggal_galeri`, `foto_galeri`, `slug_galeri`) VALUES
(7, 'LUNCHEON TALK', '2018-08-24', '1071.jpg', 'luncheon-talk'),
(8, 'MISC', '2018-05-21', '14.jpg', 'misc'),
(9, 'PHOTO COMPETITION', '2018-09-06', '61.jpg', 'photo-competition'),
(10, 'EXHIBITION', '2018-09-06', '15.jpg', 'exhibition'),
(11, 'CONFERENCE', '2018-09-06', '31.jpg', 'conference'),
(12, 'OPENING CEREMONY', '2018-09-06', '16.jpg', 'opening-ceremony'),
(13, 'PRE-CONFERENCE', '2018-09-03', '32.jpg', 'pre-conference');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_details`
--

CREATE TABLE `gallery_details` (
  `id_galeri_detail` int(11) NOT NULL,
  `nama_galeri_detail` varchar(250) NOT NULL,
  `foto_galeri_detail` text NOT NULL,
  `deskripsi_galeri_detail` text NOT NULL,
  `id_galeri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `gallery_details`
--

INSERT INTO `gallery_details` (`id_galeri_detail`, `nama_galeri_detail`, `foto_galeri_detail`, `deskripsi_galeri_detail`, `id_galeri`) VALUES
(4, 'image1', 'Screenshot_(131).png', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrudexercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p>', 3),
(5, 'image2', 'Screenshot_(111).png', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrudexercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p>', 3),
(6, 'test1', 'Screenshot_(56).png', '<p>test</p>', 4),
(7, 'image test', 'slide.jpg', '<p>test description</p>', 5),
(8, 'test image', 'wp1833522.jpg', 'description test', 6),
(9, 'Tech Sharing: Modular Geothermal Power Plant', '1061.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Venue:&nbsp;</span><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Board Room Bimasena Club, Graha Bimasena</span></span></p>', 7),
(10, 'Tech Sharing: Modular Geothermal Power Plant', '1062.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Venue:&nbsp;</span><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Board Room Bimasena Club, Graha Bimasena</span></span></p>', 7),
(11, 'Tech Sharing: Modular Geothermal Power Plant', '1051.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Venue:&nbsp;</span><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Board Room Bimasena Club, Graha Bimasena</span></span></p>', 7),
(12, 'Tech Sharing: Modular Geothermal Power Plant', '1041.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Venue:&nbsp;</span><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Board Room Bimasena Club, Graha Bimasena</span></span></p>', 7),
(13, 'Tech Sharing: Modular Geothermal Power Plant', '1031.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Venue:&nbsp;</span><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Board Room Bimasena Club, Graha Bimasena</span></span></p>', 7),
(14, 'Tech Sharing: Modular Geothermal Power Plant', '1021.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Venue:&nbsp;</span><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Board Room Bimasena Club, Graha Bimasena</span></span></p>', 7),
(15, 'Tech Sharing: Modular Geothermal Power Plant', '1011.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Venue:&nbsp;</span><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Board Room Bimasena Club, Graha Bimasena</span></span></p>', 7),
(16, 'Tech Sharing: Modular Geothermal Power Plant', '1001.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Venue:&nbsp;</span><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Board Room Bimasena Club, Graha Bimasena</span></span></p>', 7),
(17, 'Tech Sharing: Modular Geothermal Power Plant', '611.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Venue:&nbsp;</span><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Board Room Bimasena Club, Graha Bimasena</span></span></p>', 7),
(18, 'Tech Sharing: Modular Geothermal Power Plant', '601.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Venue:&nbsp;</span><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Board Room Bimasena Club, Graha Bimasena</span></span></p>', 7),
(19, 'Tech Sharing: Modular Geothermal Power Plant', '591.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Venue:&nbsp;</span><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Board Room Bimasena Club, Graha Bimasena</span></span></p>', 7),
(20, 'Tech Sharing: Modular Geothermal Power Plant', '581.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Venue:&nbsp;</span><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Board Room Bimasena Club, Graha Bimasena</span></span></p>', 7),
(21, 'Tech Sharing: Modular Geothermal Power Plant', '571.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Venue:&nbsp;</span><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Board Room Bimasena Club, Graha Bimasena</span></span></p>', 7),
(22, 'Tech Sharing: Modular Geothermal Power Plant', '561.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Venue:&nbsp;</span><span style=\"font-size: 13.3333px; font-family: &quot;Verdana&quot;;\">Board Room Bimasena Club, Graha Bimasena</span></span></p>', 7),
(23, 'TM-IIGCE-1', '63.jpg', '<p>-<br></p>', 8),
(24, 'DSC-47', '26.jpg', '<p>-<br></p>', 8),
(25, 'DSC-25', '35.jpg', '<p>-<br></p>', 8),
(26, 'DSC-5', '43.jpg', '<p>-<br></p>', 8),
(27, 'DSC-4-2', '53.jpg', '<p>-<br></p>', 8),
(28, 'DSC_3575', '64.jpg', '<p>-<br></p>', 8),
(29, 'IIGCE PHOTO COMPETITION INDRA MANTIK', '16.jpg', '<p>-<br></p>', 9),
(30, 'IIGCE PHOTO COMPETITION HASBI', '27.jpg', '<p>-<br></p>', 9),
(31, 'IIGCE PHOTO COMPETITION FIRDAUS S SEPARATOR', '36.jpg', '<p>-<br></p>', 9),
(32, 'THE CREATER - WEST JAVA BUDI KRISTIANTO', '44.jpg', '<p>-<br></p>', 9),
(33, 'IIGCE PHOTO COMPETITION AZIZ LAS', '54.jpg', '<p>-<br></p>', 9),
(34, 'IIGCE PHOTO COMPETITION AWR', '65.jpg', '<p>-<br></p>', 9),
(35, 'DCS-13', '17.jpg', '<p>-<br></p>', 10),
(36, 'DSC-21', '28.jpg', '<p>-<br></p>', 10),
(37, 'DSC-120', '18.jpg', '<p>-<br></p>', 11),
(38, 'DSC-102', '29.jpg', '<p>-<br></p>', 11),
(39, 'DSC-71', '19.jpg', '<p>-<br></p>', 11),
(40, 'Day 1 - Opening Speech', '110.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 10pt; font-family: &quot;Verdana&quot;;\">Opening Speech by Ignasius Jonan from MEMR</span></span></p><span style=\"background-color: inherit; font-family: &quot;Verdana&quot;;\">\r\n</span><p><strong style=\"color: #ff9900;\"><span style=\"font-size: 10pt;\"><span style=\"background-color: inherit; font-family: &quot;Verdana&quot;;\"><font color=\"#000000\">Venue: Jakarta Convention Center</font></span><span style=\"font-family: verdana, helvetica, sans-serif;\"><br></span></span></strong></p>', 12),
(41, 'Day 1 - Opening Speech', '210.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 10pt; font-family: &quot;Verdana&quot;;\">Opening Speech by Ignasius Jonan from MEMR</span></span></p><span style=\"background-color: inherit; font-family: &quot;Verdana&quot;;\">\r\n</span><p><strong style=\"color: #ff9900;\"><span style=\"font-size: 10pt;\"><span style=\"background-color: inherit; font-family: &quot;Verdana&quot;;\"><font color=\"#000000\">Venue: Jakarta Convention Center</font></span><span style=\"font-family: verdana, helvetica, sans-serif;\"><br></span></span></strong></p>', 12),
(42, 'Day 1 - Opening Ceremony', '37.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 10pt; font-family: &quot;Verdana&quot;;\">Gong Beating by Ignasius Jonan (MEMR)</span></span></p><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Verdana&quot;;\">\r\n</span><strong><span style=\"font-size: 10pt; font-family: &quot;Verdana&quot;;\">Venue: Jakarta Convention Center</span></strong></span>', 12),
(43, 'Day 1 - Opening Ceremony', '45.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 10pt;\"><span style=\"font-family: &quot;Verdana&quot;;\">The 6</span><sup><span style=\"font-family: &quot;Verdana&quot;;\">th</span></sup><span style=\"font-family: &quot;Verdana&quot;;\"> IIGCE was&nbsp;officially opened</span></span></span></p><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Verdana&quot;;\">\r\n</span></span><p><span style=\"background-color: inherit;\"><strong><span style=\"font-size: 10pt; font-family: &quot;Verdana&quot;;\">Venue: Jakarta Convention Center</span></strong></span></p>', 12),
(44, 'Day 1 - Visiting Booth', '55.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 10pt; font-family: &quot;Verdana&quot;;\">Ministry of MEMR, Ignasius Jonan was visiting Star Energy Booth</span></span></p><span style=\"background-color: inherit;\"><span style=\"font-family: &quot;Verdana&quot;;\">\r\n</span></span><p><span style=\"background-color: inherit;\"><strong><span style=\"font-size: 10pt; font-family: &quot;Verdana&quot;;\">Venue: Jakarta Convention Center</span></strong></span></p>', 12),
(45, 'Day 1 - Irene Wallis', '38.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 10pt; font-family: &quot;Verdana&quot;;\">Venue : Bimasena - The Dharmawangsa Hotel, Jakarta</span></span></p>', 13),
(46, 'Day 1 - Steven Sewell', '211.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"font-size: 10pt; font-family: &quot;Verdana&quot;;\">Venue : Bimasena - The Dharmawangsa Hotel, Jakarta</span></span></p>', 13),
(47, 'Day 2 - Case Studies', '111.jpg', '<p><span style=\"background-color: inherit;\"><span style=\"color: rgb(255, 153, 0); font-size: 10pt; font-family: &quot;Verdana&quot;;\">Venue: Bimasena - The Dharmawangsa Hotel, Jakarta</span></span></p>', 13);

-- --------------------------------------------------------

--
-- Table structure for table `geothermal_business`
--

CREATE TABLE `geothermal_business` (
  `id_business` int(11) NOT NULL,
  `description_business` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geothermal_business`
--

INSERT INTO `geothermal_business` (`id_business`, `description_business`) VALUES
(3, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `geothermal_potency`
--

CREATE TABLE `geothermal_potency` (
  `id_potency` int(11) NOT NULL,
  `foto_map` text NOT NULL,
  `text_overview_resources` text NOT NULL,
  `text_overview_workingarea` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geothermal_potency`
--

INSERT INTO `geothermal_potency` (`id_potency`, `foto_map`, `text_overview_resources`, `text_overview_workingarea`) VALUES
(2, 'Web_Map.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `geothermal_regulation`
--

CREATE TABLE `geothermal_regulation` (
  `id_geothermal_regulation` int(11) NOT NULL,
  `nama_regulation_ind` text NOT NULL,
  `nama_regulation_eng` text NOT NULL,
  `pdf_ind` text NOT NULL,
  `pdf_eng` text NOT NULL,
  `id_kategori_geothermal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geothermal_regulation`
--

INSERT INTO `geothermal_regulation` (`id_geothermal_regulation`, `nama_regulation_ind`, `nama_regulation_eng`, `pdf_ind`, `pdf_eng`, `id_kategori_geothermal`) VALUES
(2, 'Undang-Undang No. 21/2014 tentang Panas Bumi', 'Law No 21/2014 regarding Geothermal', 'sertifikat_skkni.pdf', '', 2),
(3, 'Peraturan Pemerintah No 28/2016 tentang Bonus Produksi', 'Government Regulation No 28/2016 on Geothermal Production Bonuses and Its Procedures', 'PP_Nomor_28_Tahun_2016.pdf', '', 3),
(4, 'Peraturan Pemerintah No 7/2017 tentang Panasbumi Untuk Pemanfaatan Tidak Langsung', 'Government Regulation No 7/2017 on Geothermal for Indirect Use', 'PP_Nomor_28_Tahun_20161.pdf', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `geothermal_resources`
--

CREATE TABLE `geothermal_resources` (
  `id_resources` int(11) NOT NULL,
  `index_no` int(10) NOT NULL,
  `field_name` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `id_island` int(11) NOT NULL,
  `id_province` int(11) NOT NULL,
  `id_district` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geothermal_resources`
--

INSERT INTO `geothermal_resources` (`id_resources`, `index_no`, `field_name`, `status`, `id_island`, `id_province`, `id_district`) VALUES
(5, 183, 'Iboih', 'GWA Jaboi', 3, 3, 4),
(6, 270, 'Batubini', 'Preliminary Survey', 3, 4, 5),
(7, 184, 'Jagol Babang', 'Preliminary Survey', 3, 3, 4),
(8, 278, 'Sajau', 'Preliminary Survey', 3, 5, 7),
(9, 277, 'Sebakis', 'Preliminary Survey', 3, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `geothermal_workingarea`
--

CREATE TABLE `geothermal_workingarea` (
  `id_workingarea` int(11) NOT NULL,
  `gwa_name` varchar(250) NOT NULL,
  `developer` varchar(250) NOT NULL,
  `test_kolom` varchar(11) NOT NULL,
  `id_province` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geothermal_workingarea`
--

INSERT INTO `geothermal_workingarea` (`id_workingarea`, `gwa_name`, `developer`, `test_kolom`, `id_province`) VALUES
(2, 'Jaboi', 'Sabang Geothermal Energy, PT', '2', 2),
(3, 'Seulawah Agam', 'Pertamina Geothermal Energy, PT-PDPA (JOC)', '2', 2),
(4, 'G. Sibayak - G. Sinabung', 'Pertamina Geothermal Energy, PT', '6', 6),
(5, 'Simbolon-Samosir', 'N/A', '6', 6),
(6, 'Bonjol', 'N/A', '7', 7),
(7, 'Sipoholon - Ria Ria', 'N/A', '6', 6);

-- --------------------------------------------------------

--
-- Table structure for table `infographics`
--

CREATE TABLE `infographics` (
  `id_infografis` int(11) NOT NULL,
  `nama_infografis` varchar(250) NOT NULL,
  `foto_infografis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `infographics`
--

INSERT INTO `infographics` (`id_infografis`, `nama_infografis`, `foto_infografis`) VALUES
(1, 'Infografis2', 'infographic-with-step-options_52683-16342.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `island`
--

CREATE TABLE `island` (
  `id_island` int(11) NOT NULL,
  `nama_island` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `island`
--

INSERT INTO `island` (`id_island`, `nama_island`) VALUES
(3, 'KALIMANTAN'),
(2, 'SUMATRA');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id_library` int(11) NOT NULL,
  `nama_library` varchar(250) NOT NULL,
  `kategori_library` varchar(250) NOT NULL,
  `tanggal_library` date NOT NULL,
  `foto_library` text NOT NULL,
  `pdf_library` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id_library`, `nama_library`, `kategori_library`, `tanggal_library`, `foto_library`, `pdf_library`) VALUES
(4, 'PROCEEDING BOOK IIGCE 2017', 'IIGCE Techninal Paper', '2017-12-01', 'IIGCE2017_COVER.jpg', 'IIGCE2017_COVER.pdf'),
(6, 'PROCEEDING BOOK IIGCE 2018', 'IIGCE Techninal Paper', '2018-12-01', 'slide.jpg', 'IIGCE2017_COVER1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(250) NOT NULL,
  `foto_member` varchar(250) NOT NULL,
  `deskripsi_member` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id_member`, `nama_member`, `foto_member`, `deskripsi_member`) VALUES
(2, 'PT. EDC Indonesia', 'edc.png', '<p>-<br></p>'),
(3, 'PT. Ormat Geothermal Indonesia', 'OGI.png', '<p>-<br></p>'),
(4, 'PT. Sintesa Banten Geothermal', 'sbg.png', '<p>-<br></p>'),
(5, 'PT. Jabar Rekind Geothermal', 'JRG.png', '<p>-<br></p>'),
(6, 'Sarulla Operation, Ltd.', 'SOL.png', '<p>-<br></p>'),
(7, 'PT. Sejahtera Alam Energy', 'SAE.png', '<p>-<br></p>'),
(9, 'PT. Geo Dipa Energi', 'GDE.png', '<p>-<br></p>'),
(11, 'PT. Bakrie Power', 'Bakrie.png', '<p>-<br></p>'),
(12, 'PT. Supreme Energy', 'SPE.png', '<p>-<br></p>'),
(13, 'PT. Schlumberger Geophysics Nusantara', 'Schlumberger1.png', '<p>-<br></p>'),
(14, 'PT. Hitay Daya Energy', 'Hitay_Energy1.png', '<p>-<br></p>'),
(15, 'Star Energy Geothermal, Ltd.', 'Star_Energy.png', '<p>-<br></p>'),
(16, 'PT. Medco Power Indonesia', 'Medco_Power.png', '<p>-<br></p>'),
(17, 'PT. Wijaya Karya Jabar Power', 'WJP.png', '<p>-<br></p>'),
(18, 'PT. Pertamina Geothermal Energy', 'PGE.png', '<p>-</p><p>dkhfadkjhfjadhfjahd</p>'),
(19, 'PT. Sumbawa Timur Mining', 'STM.png', '<p>-</p>'),
(20, 'PT. Sorik Marapi Geothermal Power', 'SMGP.png', '<p>-</p>');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` text NOT NULL,
  `foto_berita` text NOT NULL,
  `tanggal_berita` date NOT NULL,
  `text_berita` longtext NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `slug_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_berita`, `judul_berita`, `foto_berita`, `tanggal_berita`, `text_berita`, `penulis`, `slug_berita`) VALUES
(6, 'Kementerian ESDM Mengumumkan Calon Pemenang Lelang', 'img-news-51.png', '2020-01-20', '<p>Jakarta, inaga-api.or.id - Kementerian Energi dan Sumber Daya Mineral (ESDM) mengumumkan calon \r\npemenang lelang wilayah penugasan survei pendahuluan dan eksplorasi \r\n(WPSPE) panas bumi.</p><p><br></p><p>Kementerian ESDM melalui Direktorat Jenderal \r\nEnergi Baru Terbarukan dan Konseravasi Energi (EBTKE) melakukan lelang \r\ndalam dua tahap dengan jangka waktu masing-masing 1 bulan, yakni tahap \r\npertama 27 Februari-26 Maret 2018 meliputi WPSPE Geureudong dan WPSPE \r\nHu’u Daha. Sedangkan tahap kedua 14 Maret-13 April 2018 meliputi WPSPE \r\nCubadak dan WPSPE Pentadio.</p><p><br></p><p>Dari empat wilayah PSPE yang \r\nditawarkan tersebut, hanya tiga yang sudah ada calon pemenangnya, \r\nsementara satu wilayah, yaitu WPSPE Cubadak, belum mendapatkan calon \r\npemenang.</p><p><br></p><p>Terdapat dua calon pemenang di wilayah PSPE Geureudong \r\ndengan potensi kapasitas 160 MWe (cadangan mungkin), antara lain \r\nmenduduki peringkat pertama, yakni PT Hitay Bumi Energy dan peringkat \r\nkedua adalah PT OTP Geothermal Services Indonesia.</p><p><br></p><p>Lalu, pada \r\nwilayah PSPE Hu’u Daha yang memiliki potensi 65 MWe, calon pemenangnya \r\nadalah PT Sumbawa Timur Mining dan PT OTP Geothermal Services Indonesia.</p><p><br></p><p>Sementara\r\n itu, untuk wilayah PSPE Pentadio hanya ada satu calon pemenang, yakni \r\nPT Tri Ariesta Dinamika. Wilayah PSPE Pentadio sendiri memiliki potensi \r\n25 MWe.</p><p><br></p><p>Direktur Panas Bumi Ditjen EBTKE Kementerian ESDM Ida \r\nNuryatin Finahari mengatakan terdapat sejumlah indikator dalam \r\nmenentukan calon pemenang tersebut. Penilaiannya meliputi persyaratan \r\nadministrasi, teknis, dan keuangan.</p><p><br></p><p>“Dievaluasi dan dinilai \r\nprogram kerjanya, kemampuan teknis operasional dilihat dari pengalaman \r\nperusahaan, dan dilihat juga tenaga ahli perusahaan pemohon,” ujar Ida \r\nkepada Bisnis, pekan lalu.&nbsp;</p><p><br></p><p>Sedangkan pada persyaratan keuangan, \r\nkata Ida, dilihat dari sisi laporan keuangan serta besaran komitmen \r\neksplorasi yang diajukan masing-masing perusahaan.</p><p><br></p><p>Badan usaha \r\nyang terpilih menjadi pelaksana PSPE tersebut nantinya tidak akan \r\nlangsung otomatis menjadi pemengang izin wilayah kerja panas bumi (WKP),\r\n namun akan diprioritaskan dalam pelelangan terbatas WKP hasil PSPE.</p><p><br></p><p><a href=\"https://ekonomi.bisnis.com/read/20180529/44/800868/kementeria\" target=\"_blank\">SUMBER : ekonomi.bisnis.com</a><br></p>', 'INAGA', 'kementerian-esdm-mengumumkan-calon-pemenang-lelang'),
(7, 'Pemerintah Lengkapi Payung Hukum Percepatan Pengembangan Panas Bumi', 'n11.jpeg', '2020-01-20', '<p>Jakarta, inaga-api.or.id&nbsp;– Kementerian ESDM terus berupaya membuat \r\nkebijakan untuk percepatan pengembangan panas bumi, diantaranya \r\nmemfasilitasi pelaksanaan pengusahaan, menyederhanakan proses bisnis \r\nuntuk menciptakan iklim investasi yang semakin kondusif, serta \r\nmelengkapi perangkat regulasi yang telah ada. Hal ini disampaikan \r\nDirektur Jenderal Energi Baru, Terbarukan dan Konservasi Energi, Rida \r\nMulyana saat membuka acara <em>Coffee Morning&nbsp; </em>Peluncuran Peraturan Menteri ESDM Nomor 33 Tahun 2018 dan Peraturan Menteri ESDM Nomor 37 Tahun 2018 di Jakarta (20/7).\r\n</p><p><br></p><p style=\"text-align: justify;\">\"Pengembangan Panas Bumi telah didukung \r\noleh perangkat regulasi yang termasuk komplit,\" tutur Rida. \"Ada \r\nUndang-Undang Nomor 21 Tahun 2014 tentang Panas Bumi, Peraturan \r\nPemerintah Nomor 79 Tahun 2014 tentang Kebijakan Energi Nasional, \r\nPeraturan Pemerintah Nomor 28 Tahun 2016 tentang Bonus Produksi, \r\nPeraturan Pemerintah Nomor 7 Tahun 2017 tentang Panas Bumi untuk \r\nPemanfaatan Tidak Langsung, Peraturan Presiden Nomor 3 Tahun 2016 dan \r\nPeraturan Presiden Nomor 14 Tahun 2017 terkait percepatan proyek \r\nstrategis nasional, dan 9 (sembilan) Peraturan Menteri ESDM sebagai \r\nperaturan pelaksana dalam pengembangan panas bumi. Namun demikian, kami \r\nmasih terus berupaya melengkapi perangkat panas bumi yang telah ada \r\nuntuk mendukung akselerasi pengembangan panas bumi\", tambah Rida.</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">Peraturan Menteri ESDM Nomor 33 Tahun \r\n2018 merupakan amanat Pasal 25, 33 dan 112 Peraturan Pemerintah Nomor 7 \r\nTahun 2017 yang dimaksudkan untuk memberikan kemudahan dan kepastian \r\nkepada stakeholders dalam memanfaatkan data dan informasi panas bumi \r\nsecara transparan, serta mendukung pelaksanaan government drilling \r\nutamanya terkait substansi kompensasi harga data dan informasi panas \r\nbumi. Layanan data dan informasi panas bumi diberikan kepada \r\nstakeholders sesuai syarat dan ketentuan tanpa dikenakan biaya. \r\nBerdasarkan aturan ini, data umum dan data interpretasi bersifat \r\nterbuka, sedangkan data mentah dan data olahan dapat diperoleh melalui \r\npermohonan dengan perjanjian tidak mengungkap (kecuali pengalihan data \r\ndan informasi dalam kegiatan pengusahaan Panas Bumi oleh Badan Usaha \r\npemegang IPB atau pelaksana penugasan).</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">Sementara itu, Peraturan Menteri ESDM \r\nNomor 37 Tahun 2018 merupakan amanat Pasal 67 dan 68 Peraturan \r\nPemerintah Nomor 7 Tahun 2017. Regulasi ini merupakan upaya Pemerintah \r\ndalam bentuk kebijakan untuk memberikan pedoman dan landasan hukum yang \r\njelas kepada para stakeholders terhadap penyelenggaraan yang dilakukan \r\noleh Pemerintah terkait dengan penawaran WKP, pemberian IPB, dan \r\npenugasan pengusahaan panas bumi. Secara substansi, Peraturan ini \r\nmengatur tata cara dan mekanisme penawaran WKP dengan cara lelang, \r\npemberian IPB, dan penugasan pengusahaan panas bumi kepada BLU/BUMN \r\nserta kriteria WKP yang dapat diberikan penugasan. Selain itu, peraturan\r\n ini juga mengatur terkait Penugasan pengusahaan panas bumi kepada \r\nBLU/BUMN yang merupakan salah satu kebijakan terobosan dalam \r\npenyelenggaraan panas bumi berdasarkan Peraturan Pemerintah Nomor 7 \r\nTahun 2017.</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">\"Peraturan Menteri ESDM Nomor 37 Tahun \r\n2018 ini berbeda dengan mekanisme pelelangan yang berdasarkan Peraturan \r\nPemerintah Nomor 75 Tahun 2014 dimana harga penawaran merupakan penentu \r\nutama dalam memilih pemenang pelelangan WKP, sedangkan penentuan usulan \r\ncalon pemenang pelelangan berdasarkan Peraturan Menteri ESDM Nomor 37 \r\nTahun 2018 ditentukan dengan mempertimbangkan hasil evaluasi terhadap \r\nproposal pengembangan proyek dan komitmen eksplorasi. Hal ini memberikan\r\n kesempatan para calon pengembang panas bumi untuk dapat membuat \r\nproposal pengembangan proyek yang detil, realistis, dan dapat \r\ndipertanggungjawabkan,\" ungkap Direktur Panas Bumi, Ida Nuryatin \r\nFinahari, pada kesempatan yang sama.</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">Ida menambahkan dengan Peraturan Menteri\r\n ini diharapkan dapat meningkatkan kepastian pencapaian COD dalam \r\npengembangan panas bumi di Indonesia dan dapat membantu Pemerintah dalam\r\n melakukan pengawasan terhadap pengembangan panas bumi. (RWS)</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">Berikut tautan untuk&nbsp;mengunduh salinan peraturan :</p><p style=\"text-align: justify;\"><a href=\"http://drive.esdm.go.id/wl/?id=YMRtbvhCRkG2Frkh66A5nBzdpfsPxag3\" target=\"_blank\">Permen ESDM No 33 Tahun 2018</a></p><p style=\"text-align: justify;\"><a href=\"http://drive.esdm.go.id/wl/?id=XPMNNwc0GQzCngmD7VZSKRmu2pl29uSH\" target=\"_blank\">Penjelasan Permen ESDM No 33 Tahun 2018</a></p><p style=\"text-align: justify;\"><a href=\"http://drive.esdm.go.id/wl/?id=8cLyzQwW4rRulYgcVoATOA15BBOEovZt\" target=\"_blank\">Permen ESDM No 37 Tahun 2018</a></p><p style=\"text-align: justify;\"><a href=\"http://drive.esdm.go.id/wl/?id=pDRsCJag1851MQp7Xdlr5JDplffXfZrg\" target=\"_blank\">Penjelasan Permen ESDM No 37 Tahun 2018</a></p><p style=\"text-align: justify;\"><br><br><br><a href=\"http://ebtke.esdm.go.id/post/2018/07/20/1982/konsisten.capai.target.pemerintah.lengkapi.payung.hukum.percepatan.pengembangan.panas.bumi\" target=\"_blank\">SUMBER : ebtke.esdm.go.id</a><br></p>', 'INAGA', 'pemerintah-lengkapi-payung-hukum-percepatan-pengembangan-panas-bumi'),
(8, 'Eksplorasi Panas Bumi Gunung Slamet Berlanjut', 'img-news-8.jpg', '2020-01-20', '<p>Jakarta, inaga.or.id - PT Sejahtera Alam Energy mendapatkan perpanjangan izin eksplorasi \r\npembangkit listrik tenaga panas bumi Gunung Slamet atau Baturraden \r\nhingga Juli 2020. Setelah mengebor di wellpad H, pekan ketiga Agustus, \r\nperusahaan bakal mengebor di WP F.</p><p><br></p><p>\"Kami juga sudah izin pinjam pakai kawasan hutan ke Kementerian \r\nLingkungan Hidup dan Kehutanan. Izin harus diajukan supaya kami lebih \r\nfleksibel dalam melakukan proteksi dampak lingkungan,\" ungkap Kepala \r\nTeknik Panas Bumi PT SAE Albaren Simbolon, di Banyumas, Jawa Tengah, \r\nkemarin.</p><p><br></p><p>Untuk eksplorasi WP H, PT SAE sudah mengeluarkan dana US$8,5 juta. \r\nPerusahaan akan melakukan eksplorasi di tiga titik, dan diharapkan bisa \r\nmenghasilkan listrik berkapasitas 110 megawatt.\r\n\r\n</p><p><br></p><p>Di sisi lain, Community Relations PT SAE Yusuf Riyanto mengaku telah \r\nmemberikan kompensasi bagi warga yang terkena dampak kekeruhan air di \r\nKecamatan Cilongok. Pihaknya juga telah membangun penyedia air bersih di\r\n tujuh desa di kecamatan itu.</p><p><br></p><p><a href=\"https://mediaindonesia.com/read/detail/175736-eksplorasi-panas-bumi-gunung-slamet-berlanjut\" target=\"_blank\">SUMBER : mediaindonesia.com</a><br></p>', 'INAGA', 'eksplorasi-panas-bumi-gunung-slamet-berlanjut'),
(9, 'Memulai Eksploitasi Rantau Dedap Akan Hasilkan 220 MW', 'noww-1.png', '2020-01-20', '<p>Jakarta, inaga-api.or.id - Pembangkit Listrik Tenaga Panas  (PLTP) Rantau Dedap yang berada di \r\nKabupaten Muara Enim, Kabupaten Lahat dan Kota Pagar Alam, Provinsi \r\nSumatera Selatan telah memasuki tahap eksploitasi yang ditandai dengan \r\npenajakan sumur RD-I3 yang merupakan sumur eksploitasi pertama oleh \r\nDirektur Jenderal EBTKE Kementerian ESDM, Rida Mulyana, didampingi oleh \r\nDirektur Panas Bumi, Ida Nuryatin Finahari.\r\n</p><p><br></p><p>Mengutip keterangan Kementerian ESDM yang dikutip <strong>Okezone</strong>,\r\n Minggu (5/8/2018), proyek PLTP Rantau Dedap ini akan memberikan \r\ntambahan penerimaan negara dalam bentuk Penerimaan Negara Bukan Pajak \r\n(PNBP) sebesar USD106,87 juta untuk masa eksploitasi dan pemanfaatan dan\r\n pendapatan lainnya seperti, total iuran eksplorasi sebesar USD626.460. </p><p><br></p>\r\n<p>Kemudian, total iuran tetap selama eksploitasi dan pemanfaatan (30 \r\nTahun) sebesar USD4,25 juta,  PNBP Iuran produksi/royalti dengan asumsi \r\npembangkitan listrik 681,9 GWh/tahun sebesar USD85 juta selama masa \r\neksploitasi dan pemanfaatan, serta bonus produksi untuk 3 Kabupaten \r\nMuara Enim, Lahat dan Pagar Alam sebesar USD17 juta selama masa \r\nProduksi. Penerimaan negara ini belum termasuk penerimaan dari sektor \r\npajak.\r\n</p><p><br></p><p>PLTP Rantau Dedap akan dikembangkan dalam 2 tahap dengan \r\nkapasitas keseluruhan sebesar 220 mega watt (Mw). Tahap I sebesar 86 mw \r\ndirencanakan akan COD pada pertengahan tahun 2020 sedangkan tahap 2 \r\nsebesar 134 mwditargetkan akan COD tahun 2025. Setelah beroperasi, \r\nnantinya PLTP Rantau Dedap akan mampu melistriki lebih dari 130 ribu \r\nrumah. Selain itu pada tahap konstruksi, proyek ini akan menciptakan \r\n1200 lapangan kerja baru.</p><p><br></p><p>Energi panas bumi menjadi salah satu prioritas nasional di bidang \r\nenergi, mengingat besarnya sumber daya panas bumi Indonesia mencapai \r\n28,5 giga watt (Gw). Kapasitas terpasang PLTP di Indonesia sampai dengan\r\n saat sekitar 1.948,5 mw, dan merupakan peringkat kedua terbesar \r\npenghasil listrik dari panas bumi di dunia, setelah Amerika Serikat.\r\n</p><p><br></p><p>Pemerintah melalui Kementerian ESDM telah memberikan persetujuan \r\nkepada PT Supreme Energy Rantau Dedap (PT. SERD) untuk memasuki tahap \r\neksploitasi melalui surat Menteri ESDM Nomor 2224/31/MEM.E/2018 tanggal 9\r\n Maret 2018. Persetujuan ini diberikan dengan pertimbangan bahwa PT. \r\nSERD telah menyelesaikan kegiatan eksplorasi (2010-2018) meliputi survei\r\n geosains, pembangunan infrastruktur, pengeboran 6 sumur eksplorasi dan \r\nuji sumur serta penyusunan dokumen studi kelayakan.\r\n</p><p><br></p><p>PT SERD selaku pemegang Izin Panas Bumi, telah mencapai financial \r\nclose pada tanggal 23 Maret 2018 dengan Japan Bank for International \r\nCooperation (JBIC), Asian Development Bank (ADB), Nippon Export and \r\nInvestment Insurance (NEXI) dan international commercial banks (Mizuho \r\nBank, Ltd., Bank of Tokyo-Mitsubishi UFJ, Sumitomo Mitsui Banking \r\nCorporation) sebesar USD 540 juta untuk pengembangan Unit 1.\r\n</p><p><br></p><p>Adapun total biaya yang dibutuhkan untuk proyek ini sekitar \r\nUSD700 juta. Selain itu, PT SERD juga telah mendapatkan penyesuaian \r\nharga melalui amandemen power purchase agreement (PPA) dengan PT. PLN \r\n(Persero) pada tanggal 6 November 2017 yang semula 8,86 cent USD/kWh \r\nmenjadi sebesar 11,76 cent USD/kWh.\r\n</p><p><br></p><p><a href=\"https://economy.okezone.com/read/2018/08/05/320/1931971/masuki-tahap-eksploitasi-pltp-rantau-dedap-akan-hasilkan-listrik-220-mw\" target=\"_blank\">SUMBER : economy.okezone.com</a><br></p>', 'INAGA', 'memulai-eksploitasi-rantau-dedap-akan-hasilkan-220-mw'),
(10, 'Membedah Aturan Terbaru Terkait Panas Bumi', 'N41.jpeg', '2020-01-20', '<p>Jakarta, inaga-api.or.id - Pemerintah telah menerbitkan peraturan \r\nbaru bidang panas bumi yaitu Peraturan Menteri Energi dan Sumber Daya \r\nMineral (Permen ESDM) Nomor 37 Tahun 2018 tentang Penawaran Wilayah \r\nKerja Panas Bumi, Pemberian Izin Panas Bumi, dan Penugasan Pengusahaan \r\nPanas Bumi dan Peraturan Menteri ESDM Nomor 33 Tahun 2018 tentang \r\nPengelolaan dan Pemanfaatan Data dan Informasi Panas Bumi Untuk \r\nPemanfaatan Tidak Langsung.</p><p><br></p><p>\r\n</p><p style=\"text-align: justify;\">Secara substansi Permen ESDM Nomor 37 \r\nTahun 2018 mengatur hal-hal yang terkait tata cara dan mekanisme \r\npenawaran Wilayah Kerja Panas Bumi (WKP) dengan cara lelang, tata cara \r\ndan mekanisme pemberian Izin Panas Bumi (IPB), dan tata cara dan \r\nmekanisme penugasan pengusahaan panas bumi kepada BLU/BUMN serta \r\nkriteria WKP yang dapat diberikan penugasan.</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">Permen ESDM ini memberikan ruang \r\npartisipasi yang lebih besar bagi PT PLN (Persero) untuk terlibat dalam \r\npenawaran wilayah kerja agar dapat mempercepat proses bisnis dalam \r\npengembangan energi panas bumi. PT PLN (Persero) memiliki kesempatan \r\nuntuk menyampaikan usulan harga jual tenaga listrik dari energi panas \r\nbumi untuk WKP yang akan dilelang dan menyampaikan bentuk perjanjian \r\nawal transaksi (pretransaction agreement). Perjanjian awal transaksi \r\nnantinya diharapkan dapat menjadi panduan bagi PT PLN (Persero) dan \r\nBadan Usaha dalam interaksi berbisnis sebelum PJBL.</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">Permen ini juga memberikan perbedaan \r\ndalam hal pemilihan pemenang pelelangan WKP untuk meningkatkan kepastian\r\n pencapaian COD dalam pengembangan panas bumi di Indonesia dan dapat \r\nmembantu pemerintah dalam melakukan pengawasan terhadap pengembangan \r\npanas bumi. Berbeda dengan mekanisme pelelangan yang berdasarkan PP \r\nNomor 75 Tahun 2014 dimana harga penawaran merupakan penentu utama dalam\r\n memilih pemenang pelelangan WKP, penentuan usulan calon pemenang \r\npelelangan berdasarkan Permen ESDM Nomor 37 Tahun 2018 ditentukan dengan\r\n mempertimbangkan hasil evaluasi terhadap proposal pengembangan proyek. \r\nSehingga para calon pengembang panas bumi untuk dapat membuat proposal \r\npengembangan proyek yang detil, realistis, dan dapat \r\ndipertanggungjawabkan.</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">Terakhir, pengaturan penugasan \r\npengusahaan panas bumi pada Permen ESDM Nomor 37 Tahun 2018 menjadi \r\nsalah satu kebijakan terobosan dalam penyelenggaraan panas bumi \r\nberdasarkan PP Nomor 7 Tahun 2017. Pengaturan ini bertujuan untuk \r\nmemberikan kepastian terhadap kriteria WKP yang dapat ditugaskan serta&nbsp; \r\nmenjaga iklim investasi pihak swasta dalam pengembangan panas bumi di \r\nIndonesia dan menjaga kemampuan BLU/BUMN dalam mengembangkan energi \r\npanas bumi di Indonesia. Pemberian tanggung jawab pengembangan panas \r\nbumi kepada BLU/BUMN yang terlalu besar tentu beresiko membebani \r\nkeuangan BLU/BUMN dalam melaksanakan penugasan dan dapat terganggunya \r\niklim investasi swasta dalam pengembangan energi panas bumi. Sementara, \r\nuntuk menjaga kesehatan BLU/BUMN tersebut, peran investasi swasta dalam \r\npengembangan panas bumi masih sangat diperlukan.</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">Sementara itu, Permen ESDM Nomor 33 \r\nTahun 2018 diterbitkan sebagai pelaksanaan ketentuan Pasal 25, Pasal 33 \r\ndan Pasal 112 PP Nomor 7 Tahun 2017 tentang Panas Bumi untuk Pemanfaatan\r\n Tidak Langsung sebagai turunan Pasal 57 Undang-Undang Nomor 21 Tahun \r\n2014 tentang Panas Bumi yang menyatakan bahwa semua data dan informasi \r\nyang diperoleh dari kegiatan Panas Bumi merupakan milik Negara yang \r\npemanfaatan dan pengelolaannya atas izin Pemerintah. Data dan Informasi \r\nPanas Bumi merupakan salah satu aset yang memerlukan pengelolaan dan \r\npengawasan.</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">Permen ESDM ini dimaksudkan untuk \r\nmemberikan kemudahan dan kepastian kepada stakeholders dalam \r\nmemanfaatkan Data dan Informasi Panas Bumi secara transparan, serta \r\nmendukung pelaksanaan <em>government drilling</em> utamanya terkait \r\nsubstansi kompensasi harga Data dan Informasi Panas Bumi. Layanan Data \r\ndan Informasi Panas Bumi diberikan kepada pemangku kepentingan sesuai \r\nsyarat dan ketentuan tanpa dikenakan biaya.</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">Data dan Informasi Panas Bumi berasal \r\ndari hasil: (1) Survei Pendahuluan; (2) Survei Pendahuluan dan \r\nEksplorasi;Penugasan Survei Pendahuluan (PSP); (3) Penugasan Survei \r\nPendahuluan dan Eksplorasi (PSPE);&nbsp; (4) Penambahan data pada Wilayah \r\nKerja; dan (5) Pelaksanaan pengusahaan Panas Bumi oleh pemegang Izin \r\nPanas Bumi (IPB).</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">Data umum dan data interpretasi bersifat\r\n terbuka, sedangkan data mentah dan data olahan dapat diperoleh melalui \r\npermohonan dengan perjanjian tidak mengungkap (kecuali pengalihan data \r\ndan informasi dalam kegiatan pengusahaan Panas Bumi oleh Badan Usaha \r\npemegang IPB atau pelaksana penugasan).</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">Badan Usaha pemegang IPB atau pelaksana \r\npenugasan harus menyampaikan laporan pemuktahiran Data dan Informasi \r\nPanas Bumi kepada Menteri melalui Direktur Jenderal setiap 1 (satu) \r\ntahun sekali yang dapat disampaikan melalui sistem informasi secara \r\nonline.</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">Kedua peraturan tersebut pada dasarnya \r\nmerupakan upaya Pemerintah dalam membuat kebijakan untuk percepatan \r\npengembangan panas bumi, diantaranya memfasilitasi pelaksanaan \r\npengusahaan, menyederhanakan proses bisnis untuk menciptakan iklim \r\ninvestasi yang semakin kondusif, serta melengkapi perangkat regulasi \r\nyang telah ada.</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">Untuk memberikan pemahaman yang lebih \r\nmendalam kepada pemangku kepentingan, Pemerintah melalui Direktorat \r\nJenderal Energi Baru, Terbarukan dan Konservasi Energi telah melakukan \r\nsosialisasi kedua peraturan tersebut kepada Kementerian/Lembaga terkait,\r\n PT PLN (Persero), PT Pertamina (Persero), serta Badan Usaha Bidang \r\nPanas Bumi sebanyak dua kali yaitu pada tanggal 20 Juli 2018 dan 3 \r\nAgustus 2018 yang lalu. (RWS)</p><p style=\"text-align: justify;\"><br></p><p style=\"text-align: justify;\"><a href=\"http://ebtke.esdm.go.id/post/2018/08/09/1992/ulasan.dua.peraturan.terbaru.bidang.panas.bumi\" target=\"_blank\">SUMBER : ebtke.esdm.go.id</a><br></p>', 'INAGA', 'membedah-aturan-terbaru-terkait-panas-bumi'),
(11, 'Menkeu: Indonesia Butuh Energi-Terbarukan Alternatif Untuk Ekonomi Kuat', 'N91.jpg', '2020-01-20', '<p>Jakarta, inaga-api.or.id - Kemenkeu-Menteri Keuangan&nbsp; (Menkeu) Sri \r\nMulyani Indrawati memberikan keynote speech pada acara The 6th Indonesia\r\n International Geothermal Convention &amp; Exhibition (IIGCE) 2018 di \r\nJakarta Convention Center (JCC) pada Kamis (06/09). Ia mengungkapkan \r\nbahwa untuk mendapatkan ekonomi yang kuat, Indonesia membutuhkan \r\nalternatif sumber energi.\r\n\r\n</p><p><br></p><p style=\"text-align:justify\">\"Energi yang terbarukan sangat dibutuhkan oleh Indonesia,\" jelasnya.</p><p style=\"text-align:justify\"><br></p>\r\n\r\n<p style=\"text-align:justify\">Permintaan akan sumber energi menjadi \r\nsangat besar dengan tingkat pertumbuhan seperti saat ini. Oleh karena \r\nitu, Indonesia perlu untuk mendiversifikasi sumber energi agar dapat \r\nmemproduksi energi dengan cara yang baik dan berkelanjutan.</p><p style=\"text-align:justify\"><br></p>\r\n\r\n<p style=\"text-align:justify\">\"Saya yakin ini tidak hanya baik untuk lingkungan tetapi juga baik untuk ekonomi Indonesia,\" tegasnya.</p><p style=\"text-align:justify\"><br></p>\r\n\r\n<p style=\"text-align:justify\">Geothermal merupakan salah satu sumber \r\nenergi alternatif yang memiliki potensi besar di Indonesia. Ia \r\nmenuturkan bahwa Indonesia harus belajar dari krisis energi yang terjadi\r\n di Islandia.&nbsp;</p><p style=\"text-align:justify\"><br></p>\r\n\r\n<p style=\"text-align:justify\">\"Dulu Iceland sangat tergantung pada \r\nminyak sampai neraca pembayarannya defisit tinggi akibat tingginya impor\r\n minyak. Kemudian dia (Iceland) menghentikan pemakaian minyak dan \r\nmenggantinya dengan geothermal,\" ujar Menkeu.</p><p style=\"text-align:justify\"><br></p>\r\n\r\n<p style=\"text-align:justify\">Menkeu pun berpesan agar Indonesia \r\nmengubah strategi supaya mampu mengakselerasi semua energi terbarukan. \r\nIa berharap di masa depan, geothermal dapat menjadi sumber energi utama \r\natau setidaknya memegang porsi besar di Indonesia.&nbsp;</p><p style=\"text-align:justify\"><br></p>\r\n\r\n<p style=\"text-align:justify\">Pada kesempatan itu, Menkeu juga \r\nmenjelaskan bahwa Kementerian Keuangan memiliki BUMN yang dapat membantu\r\n akselerasi perkembangan sumber energi yaitu PT SMI dan PT Geodipa. \r\n(mra/ind/nr) </p><p style=\"text-align:justify\"><br></p><p style=\"text-align:justify\"><a href=\"https://www.kemenkeu.go.id/publikasi/berita/menkeu-indonesia-butuh-energi-terbarukan-alternatif-untuk-ekonomi-kuat/\" target=\"_blank\">SUMBER : kemenkeu.go.id</a><br></p>', 'INAGA', 'menkeu-indonesia-butuh-energi-terbarukan-alternatif-untuk-ekonomi-kuat'),
(12, 'Sinergi Geo Dipa-SMI Kembangkan PLTP Dieng 10 MW', 'n1901.png', '2020-01-20', '<p></p><p>Jakarta, inaga-api.or.id - Perusahaan BUMN panas bumi, PT Geo Dipa Energi (Geo Dipa) menggandeng\r\n BUMN pembiayaan yaitu PT Sarana Multi Infrastruktur (SMI) guna \r\npengembangan Pembangkit Listrik Tenaga Panas Bumi (PLTP) Dieng Small \r\nScale 10 MW.\r\n</p><p><br></p><p>Penandatanganan naskah kerja sama kedua BUMN tersebut dilakukan oleh \r\nDirektur Keuangan Geo Dipa, M Ikbal Nur dengan Direktur Pengembangan \r\nProyek dan Advisory SMI, Edwin Syahruzad saat kegiatan Indonesia \r\nInternational Geothermal Convention &amp; Exhibition (IIGCE) di Jakarta, Jumat (7/9).</p><p><br></p>\r\n<p>\"Kerja sama ini merupakan realisasi dari sinergi antar Badan Usaha \r\nMilik Negara (BUMN) sebagai salah satu strategi kami untuk pengembangan \r\nkapasitas Wilayah Kerja Panas Bumi Dieng, Jateng,\" kata Ikbal.</p><p><br></p>\r\n<p>Ikbal yang juga Chairman pada IIGCE 2018 itu berharap mendapat \r\ndukungan penuh dari kementerian Energi &amp; Sumber Daya Mineral (ESDM) \r\ndan Kementerian Keuangan sehingga para investor menjadi lebih percaya \r\ndiri untuk mengembangkan energi terbarukan, khususnya panas bumi.</p><p><br></p>\r\n<p>\"Dengan dukungan sinergi antar kementerian tersebut, maka para \r\npengembang akan lebih agresif untuk melakukan percepatan pengembangan \r\nproyek panas bumi secara masif,\" kata Iqbal.</p><p><br></p>\r\n<p>Ikbal menjelaskan, saat ini potensi panas bumi Indonesia mencapai \r\n28,5 Giga Watt (GW) yang terdiri dari total cadangan sebesar 17,5 GW dan\r\n sumber daya sebesar 11 GW. Sedangkan, kapasitas terpasang Pembangkit \r\nListrik Panas Bumi (PLTP) saat ini sebesar 1.948,5 MW.</p><p><br></p>\r\n<p>Hingga akhir tahun 2018, diharapkan kapasitas PLTP akan meningkat \r\nmenjadi 2 GW dengan dibangunnya beberapa pembangkit yang saat ini dalam \r\ntahap penyelesaian.</p><p><br></p>\r\n<p>Untuk diketahui, IIGCE pada saat ini sudah memasuki usia ke 6 itu, \r\nkali ini mengusung tema \'Empowering Geothermal for Indonesia Energy \r\nSustainability\' yang dibuka oleh Menteri Energi dan Sumber Daya Mineral,\r\n Ignasius Jonan.</p><p><br></p>\r\n<p>Dalam acara tersebut, Menteri Keuangan, Sri Mulyani juga berkesempatan untuk memberikan keynote speech bertemakan \'Toward \r\nAchieving Sustainable Energy Security and Economic Growth in Indonesia\' \r\ndi depan seluruh peserta convention yang merupakan investor, pengembang,\r\n dan regulator di bidang panas bumi.</p><p><br></p>\r\nSedangkan BUMN Geo Dipa kali ini menjadi tuan rumah pada kegiatan \r\nIIGCE 2018, yang diselenggarakan oleh Kementerian ESDM melalui \r\nDirektorat Jenderal EBTKE bersama dengan Asosiasi Panas Bumi Indonesia \r\n(API), yang akan berlangsung hingga 8 September 2018.<p></p><p><br></p><p><a href=\"https://www.merdeka.com/uang/geo-dipa-gandeng-smi-kembangkan-pltp-dieng-10-mw.html\" target=\"_blank\">SUMBER : merdeka.com</a><br></p>', 'INAGA', 'sinergi-geo-dipa-smi-kembangkan-pltp-dieng-10-mw'),
(13, 'Penawaran Pada Wilayah Penugasan Survey Pendahuluan dan Eksplorasi (WPSPE) Panas Bumi di Daerah Bonjol, Sumatera Barat', 'n1991.png', '2020-01-20', '<p style=\"text-align: justify;\">Jakarta, inaga-api.or.id - Panitia Pemilihan pada Kementerian \r\nEnergi dan Sumber Daya Mineral akan melaksanakan penawaran Wilayah \r\nPenugasan Survei Pendahuluan dan Eksplorasi (WPSPE) Panas Bumi di Daerah\r\n Bonjol, Kabupaten Pasaman, Provinsi Sumatera Barat. Informasi WPSPE \r\nPanas Bumi yang akan ditawarkan adalah sebagai berikut:</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">1. Nama WPSPE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Bonjol</p>\r\n<p>2. Lokasi WPSPE Panas Bumi&nbsp; &nbsp; &nbsp; : Kabupaten Pasaman, Provinsi Sumatera Barat</p>\r\n<p>3. Luas WPSPE&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 7.411 Ha</p>\r\n<p style=\"text-align: justify;\">4. Sumber Daya&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 200 MWe</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">Tata cara Penawaran WPSPE Panas Bumi mengikuti ketentuan peraturan perundang-undangan di bidang Panas Bumi, diantaranya:</p><p style=\"text-align: justify;\"><br>1.\r\n Peserta yang dapat mengikuti Penawaran WPSPE Panas Bumi di Daerah \r\nBonjol adalah Badan Usaha yang berpengalaman atau bergerak di bidang \r\nPanas Bumi, hulu migas, pertambangan mineral/batubara atau pembangkit \r\ntenaga listrik.</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">2. Badan Usaha yang berminat untuk \r\nmengikuti Penawaran WPSPE Panas Bumi di Daerah Bonjol wajib memasukkan \r\nsurat permohonan yang dilengkapi persyaratan administratif, teknis, dan \r\nkeuangan. Persyaratan administratif dimaksud, yaitu:</p>\r\n<p style=\"text-align: justify;\">a. Salinan akta pendirian Badan Usaha \r\ndan/atau akta perubahan Badan Usaha terakhir yang telah disahkan oleh \r\nKementerian Hukum dan HAM Republik Indonesia dan perubahan terakhir;<br>b.\r\n Salinan Nomor Pokok Wajib Pajak Badan Usaha, Dewan Direksi, Dewan \r\nKomisaris serta bukti setoran pajak 1 (satu) tahun terakhir;<br>c. Profil perusahaan;</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">3. Surat pernyataan tidak sedang dalam \r\npengawasan pengadilan, tidak pailit, perusahaannya tidak sedang \r\ndihentikan dan/atau tidak sedang menjalani sanksi pidana yang \r\nditandatangani oleh Direktur Utama/pimpinan perusahaan.Perjanjian Awal \r\nTransaksi (Pre Transaction Agreement/PTA) dengan PT PLN (Persero) akan \r\ndilakukan setelah eksplorasi selesai dan Izin Panas Bumi diterbitkan. \r\nAcuan harga listrik dalam PTA dimaksud mengikuti ketentuan peraturan \r\nperundang-undangan.</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">4. Proses Penawaran WPSPE Panas Bumi di \r\nDaerah Bonjol meliputi pengembalian formulir pendaftaran, pengambilan \r\ndan penjelasan Dokumen Pemilihan, serta penyampaian Dokumen Permohonan \r\nPenugasan pada:</p>\r\n<p style=\"text-align: justify;\">Tanggal : 22 Oktober 2018 s.d. 21 November 2018<br>Waktu&nbsp; &nbsp; : 08.00 s.d. 16.00 WIB <br>Tempat&nbsp; : Sekretariat Panitia Pemilihan PSPE Panas Bumi<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Gedung Ditjen EBTKE lt.3<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Jl. Pegangsaan Timur No. 1, Menteng, Jakarta Pusat</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">5. Pendaftaran Penawaran WPSPE Panas \r\nBumi di Daerah Bonjol dapat diwakilkan dengan membawa surat kuasa dari \r\nDirektur Utama/pimpinan perusahaan.</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">6. Pengumuman dan formulir pendaftaran \r\nPenawaran WPSPE, serta profil WPSPE dapat diunduh pada laman \r\nwww.ebtke.esdm.go.id mulai tanggal 22 Oktober 2018 s.d. 21 November \r\n2018.</p><p style=\"text-align: justify;\"><br></p>\r\n<p style=\"text-align: justify;\">Jakarta, 22 Oktober 2018</p>\r\n<p>Panitia Pemilihan PSPE Panas Bumi</p><p><br></p>\r\n<p>File dapat di download pada link di bawah ini:</p><p><a href=\"http://ebtke.esdm.go.id/download/index/95f19d133887612a745ad7d0c4e8b88d\" target=\"_blank\">WPSPE Bonjol</a></p><p><br></p><p>atau</p><p><br></p><p><a href=\"http://ebtke.esdm.go.id/download/index/a7a409b6c79c29d7cb51f7251e8cf4b7\" target=\"_blank\">1. Pengumuman Penawaran PSPE_Bonjol.</a></p><p><a href=\"http://ebtke.esdm.go.id/download/index/180254fb97bd05f1d53532bfd5ec1e1a\" target=\"_blank\">2. Formulir_Pendaftaran_Bonjol</a></p><p><a href=\"http://ebtke.esdm.go.id/download/index/9d5ddadefb2cb782dd0413fc4ef36f03\" target=\"_blank\">3. Profil WPSPE bonjol</a></p><p><a href=\"http://ebtke.esdm.go.id/download/index/82df924a18afb564d316077a133f6a92\" target=\"_blank\">4. Prosedur Pelaksanaan PSPE_Bonjol</a></p><p><br></p><p><a href=\"http://ebtke.esdm.go.id/post/2018/10/22/2039/penawaran.wilayah.penugasan.survey.pendahuluan.dan.eksplorasi.wpspe.panas.bumi.di.daerah.bonjol.kabupaten.pasaman.provinsi.sumatera.barat\" target=\"_blank\">SUMBER : ebtke.esdm.go.id</a><br></p>', 'INAGA', 'penawaran-pada-wilayah-penugasan-survey-pendahuluan-dan-eksplorasi-wpspe-panas-bumi-di-daerah-bonjol-sumatera-barat'),
(14, 'Kerjakan Guntur Masigit, PGE Urus Perubahan Status Zona Kamojang', 'sasd1.png', '2020-01-20', '<p>Jakarta, inaga-api.or.id&nbsp;- PT Pertamina Georthermal Energy (PGE), \r\nanak usaha PT Pertamina (Persero) berupaya memperluas area pemanfaatan \r\npanas bumi di wilayah Garut, Jawa Barat.</p><p><br></p><p>\r\n\r\n</p><div align=\"left\">\r\n<p dir=\"ltr\">Ali Mundakir, Direktur Utama PGE, mengatakan di Garut ada \r\nprospek Guntur Masigit. Untuk itu, PGE sedang mengurus perubahan status \r\nzona agar&nbsp; masuk WKP Kamojang Darajat.</p><p dir=\"ltr\"><br></p>\r\n<p dir=\"ltr\">“Status Guntur Masigit ada di lahan konservasi, untuk itu \r\nizin pengelolaan jasa lingkungan harus berubah terlebih dulu dari hutan \r\nkonsevasi ke taman wisata alam,” kata Ali, baru-baru ini.</p><p dir=\"ltr\"><br></p>\r\n<p dir=\"ltr\">Potensi cadangan energi panas bumi di wilayah Garut diprediksikan mencapai 500 megawatt (MW).</p><p dir=\"ltr\"><br></p>\r\n</div>\r\n<div align=\"left\">\r\n<p dir=\"ltr\">Rudi Gunawan, Bupati Garut, mengatakan dengan potensi \r\nenergi panas bumi sebesar itu maka bonus produksi yang akan didapat bisa\r\n mencapai Rp70 miliar setiap tahun.</p><p dir=\"ltr\"><br></p>\r\n</div>\r\n\r\n<div align=\"left\">\r\n<p dir=\"ltr\">“Potensi dari Guntur Masigit 70 MW, paling besar itu di \r\nGunung Papandayan 225 MW Ada juga di Cilayu, dan wilayah lainnya. Dengan\r\n potensi panas bumi sampai 500 MW, maka potensi bonus produksinya Rp 70 \r\nmiliar per tahun, dan dana bagi hasil Rp 125miliar,” kata Rudi kepada \r\nDunia Energi saat ditemui di Garut, belum lama ini.</p><p dir=\"ltr\"><br></p>\r\n</div>\r\n<div align=\"left\">\r\n<p dir=\"ltr\">Menurut dia, selama periode 2006 – 2018 total dana bagi hasil pemanfaatan panas bumi di Garut mencapai Rp265 miliar.</p><p dir=\"ltr\"><br></p>\r\n</div>\r\n<div align=\"left\">\r\n<p dir=\"ltr\">“Bonus produksi saat ini Rp 13 miliar per tahun, paling besar dari Darajat. Dana bagi hasil Rp33 miliar per tahun,” tukas Rudi.</p><p dir=\"ltr\"><br></p>\r\n</div>\r\n\r\n<div align=\"left\">\r\n<p dir=\"ltr\">Kontribusi pengembangan panas bumi di Provinsi Jawa Barat \r\n(Jabar) sampai dengan kuartal III 2018 sebesar Rp 1,102 triliun. Bonus \r\nproduksi Provinsi Jawa Barat (Jabar) sampai kuartal II 2018 sebesar \r\nRp30,98 miliar. Kabupaten Bandung penerima terbesar yaitu Rp79,06 \r\nmiliar, dimana masyarakat sekitar Wilayah Kerja/Area PLTP yang \r\ndiprioritaskan menerima bonus produksi.</p><p dir=\"ltr\"><br></p>\r\n<p dir=\"ltr\">Bonus produksi Kabupaten Garut periode 2015 hingga kuartal \r\nII&nbsp; 2018 sebesar Rp38,69 miliar. Sementara Tasikmalaya baru berproduksi \r\nsampai dengan kuartal II&nbsp; 2018 sebesar Rp172,9 juta.</p><p dir=\"ltr\"><br></p>\r\n</div>\r\n<div align=\"left\">\r\n<p dir=\"ltr\">Kapasitas terpasang PLTP di Jawa Barat terdiri dari PLTP \r\nSalak di Cibeureum, Parabakti dengan kapasitas 377 MW, PLTP Wayang Windu\r\n di Pengalengan dengan kapasitas 227 MW, PLTP Patuha dengan kapasitas 55\r\n MW, PLTP Kamojang dengan kapasitas 235 MW, PLTP Darajat dengan \r\nkapasitas total 270MW, dan PLTP Karaha dengan kapasitas total 30 MW.</p><p dir=\"ltr\"><br></p>\r\n</div>\r\n<div align=\"left\">\r\n<p dir=\"ltr\">Pemkab Garut berkomitmen untuk tetap menjaga pelestarian \r\nlingkungan. Wilayah kecamatan yang mempunyai energi panas bumi sangat \r\nmerasakan dampak positif, salah satunya kecamatan Karangtengah yang \r\nberdekatan dengan panas bumi Karaha Bodas.</p><p dir=\"ltr\"><br></p>\r\n</div>\r\n<div align=\"left\">\r\n<p dir=\"ltr\">Rudi menekankan bahwa keberadaan energi panas bumi sangat \r\ntergantung dengan keberadaan sumber air, oleh karena pasokan sumber air \r\nharus tetap terjaga. Selain itu, potensi pariwisata juga menjadi \r\nprioritas yang dikembangkan dengan adanya energi panas bumi tersebut, \r\ncontohnya yang saat ini ada di Pasirwangi dan Wanaraja.</p><p dir=\"ltr\"><br></p>\r\n</div>\r\n<div align=\"left\">\r\n<p dir=\"ltr\">“Luas wilayah Garut 3.000 kilometer persegi. Bonus produksi\r\n sebaiknya digunakan untuk pengembangan masyarakat sekitar sehingga \r\ndipastikan tidak akan ada keributan,” kata Rudi.(RA)</p><p dir=\"ltr\"><br></p><p dir=\"ltr\"><a href=\"https://www.dunia-energi.com/garap-guntur-masigit-pge-urus-perubahan-status-zona-kamojang/\" target=\"_blank\">SUMBER : dunia-energi.com</a><br></p>\r\n</div>', 'INAGA', 'kerjakan-guntur-masigit-pge-urus-perubahan-status-zona-kamojang'),
(15, 'Geotermal Sangat Prospektif, Sri Mulyani: Pemerintah Berusaha Kurangi Risiko Pengelolaannya', 'dsd1.png', '2020-01-20', '<p>Jakarta, inaga-api.or.id - Menteri Keuangan Sri Mulyani Indrawati menghadiri acara Penyerahan Program Community Development PT Geo Dipa Energi (Persero) Unit Patuha di Hotel Abang Ciwidey, Kabupaten Bandung, Kamis (13/12/2018).</p><p><br></p><div class=\"tribun-mark\">\r\n<p>Sri Mulyani berjanji, Kementerian Keuangan dan Kementerian ESDM \r\n(Energi Sumber Daya Mineral)&nbsp; akan bersama-sama mengembangkan \r\nkebijakan-kebijakan mengdiversifikasikan energi, terutama energi geotermal atau panas bumi.<br></p><p><br></p><div class=\"tribun-mark\"><p>Menurutnya, energi panas bumi ini termasuk energi yang punya prospek sangat besar tapi tingkat kesulitan&nbsp;untuk proses pengelolaannya cukup banyak.</p><p><br></p>\r\n<p>\"Dulu kesulitannya adalah koordinasi dengan lingkungan karena tempat geotermalnya\r\n bisa berlapis dengan hutan yang dilindungi atau daerah pertambangan \r\nlain sehingga ini menimbulkan tantangan untuk bisa menatanya,\" kata Sri Mulyani Ciwidey, Kamis siang.</p><p><br></p>\r\n<p>Selain itu, eksplorasi (panas bumi) juga&nbsp;punya risiko yang sangat \r\nbesar. Pemerintah, ucapnya, berusaha meminimalisasi risiko \r\ntersebut&nbsp;melalui&nbsp;kebijakan-kebijakan&nbsp;untuk pengembangan energi panas \r\nbumi.</p><p><br></p><div class=\"tribun-mark\"><p>\"Sekarang sudah dibuat untuk bisa menanggung resiko tersebut sehingga setiap pengusaha yang ingin melakukan usaha di&nbsp;bidang geotermal tetap bisa beroperasi,\" katanya.</p><p><br></p>\r\n<p>Selain itu&nbsp;soal&nbsp;pengembangaan geotermal\r\n ini,&nbsp;imbuh&nbsp;Sri Mulyani, Indonesia juga patut belajar pada negara-negara\r\n yang sudah maju pengembangan energi&nbsp;ini di Selandia Baru dan Islandia.</p><p><br></p>\r\n<p>\"Jadi kita sebagai negara tidak boleh segan belajar pada negara yang sudah baik kelola geotermal.\r\n Banyak negara-negara yang tadinya tak memiliki energi atau tergantung \r\npada minyak sekarang bisa berubah. Seperti Iceland (Islandia) sehingga \r\nperekonomian mereka bisa kuat,\" katanya.</p><p><br></p>\r\n<p>Bupati Bandung Dadang M Naser menuturkan potensi geotermal energi Kabupaten Bandung mencapai hampir 3000 megawatt.</p><p><br></p><div class=\"tribun-mark\"><p>Saat ini, dikelola oleh lima perusahaan baik swasta maupun negara melalui BUMN seperti oleh Pertamina dan Geo Dipa.</p><p><br></p>\r\n<p>\"Yang baru terproduksi oleh 5 perusahaan itu baru di 697 megawatt \r\natau sekitar 700 megawatt. Seperti oleh PT Geo Dipa potensinya mencapai \r\n400 megawatt tapi yang baru diambilnya baru 60 megawatt,\" tuturnya.</p><p><br></p>\r\n<p>Menurutnya, kekayaan fosil di Kabupaten Bandung ini masih sangat banyak. Jika ingin sumber energi ini abadi, hutan di kawasan harus tetap baik.</p><p><br></p>\r\n<p>\"Pengelolaan investasi berbentuk DBH (Dana Bagi Hasil) dan supporting\r\n bonus. Harapannya, pemerintah (daerah) ada saham tapi jangan yang \r\nexisting (diberi 5 persen). Kita beli lagi 5 persen jadi 10 persen, \r\nkalau bisa beli hingga 20 persen kita bisa,\"&nbsp;kata&nbsp;Dadang M Naser.</p><p><br></p><p><a href=\"https://jabar.tribunnews.com/2018/12/13/sebut-geotermal-sangat-prospektif-sri-mulyani-pemerintah-berusaha-kurangi-risiko-pengelolaannya\" target=\"_blank\">SUMBER : jabar.tribunnews.com</a><br></p></div></div></div></div>', 'INAGA', 'geotermal-sangat-prospektif-sri-mulyani-pemerintah-berusaha-kurangi-risiko-pengelolaannya'),
(16, 'PLN Tak Jadi Ambil Wilayah Panas Bumi Wapsalit', 'img-news-341.png', '2020-01-20', '<p>JAKARTA, inaga-api.or.id - PT Perusahaan Listrik Negara (persero) memutuskan tidak mengambil \r\npenugasan wilayah panas bumi Wapsalit di Maluku berkapasitas 5 megawatt \r\n(MW) setelah mengevaluasi hasil kajian konsultan.</p><p><br></p><p>Direktur Bisnis \r\nRegional Jawa Bagian Timur, Bali dan Nusa Tenggara PLN Djoko Rahardjo \r\nmengatakan kendati dari potensi kelistrikan, wilayah itu cukup kuat, \r\nakan tetapi merupakan volcano tua. Djoko menyebut potensi dengan resiko \r\nyang lebih baik adalah wilayah volcano aktif.</p><p><br></p><p>“PLN mengutamakan \r\nstudi geothermal. Menurut kajian konsulta baik juga dicoba tapi kalau \r\nuntuk pengembangan saya kira perlu effort yang agak panjang dan tidak \r\nmenjamin kemungkinan potensinya. Sehingga disarankan tidak diambil \r\ndahulu,”katanya kepada <em>Bisnis.com</em>, Senin (14/1/2019).</p><p><br></p><p>Menurut\r\n Djoko, lazimnya pemerintah menugaskan proyek kurang potensial kepada \r\nperusahaan setrum negara ketimbang dilelang. Namun, Djoko meyakini, jika\r\n proyek itu nantinya juga akan dilelang, peserta akan mengambil langkah \r\nyang sama dengan perseroan.</p><p><br></p><p>Djoko melanjutkan untuk proyek panas \r\nbumi lainnya, yakni di wilayah Sumani di Sumatra Barat sebesar 20 MW, \r\nsedang dilakukan kajiannya oleh konsultan.</p><p><br></p><p>Ida Nuryatin Finahari, \r\nDirektur Panas Bumi, Ditjen Energi Baru Terbarukan dan Konservasi \r\nEnergi, Kementerian ESDM mengatakan pihaknya juga telah menerima \r\npernyataan tertulis dari PLN yang menyatakan bahwa dari sisi teknis, \r\nproyek itu memiliki kapasitas terlalu kecil.</p><p><br></p><p>“Sementara untuk WKP \r\nSumani, keputusannya, mereka [PLN] akan sampaikan program kerja Januari \r\nini. Kami koordinasikan kembali dengan mengundang mereka,”katanya.</p><p><br></p><p>Tahun\r\n lalu, Kementerian ESDM telah menargetkan mampu menawarkan sebanyak lima\r\n wilayah kerja panas bumi. Ida menuturkan, pihaknya memutuskan \r\nkeseluruhan rencana penawaran tersebut dilakukan melalui penugasan \r\nkepada PLN.</p><p><br></p><p>Namun, pada Juli 2018, penugasan pengelolaan tiga \r\nwilayah kerja panas bumi (WKP) telah diserahkan ke PLN. WKP yang telah \r\ndiserahkan kepada BUMN ketenagalistrikan itu terdiri atas WKP Gunung \r\nSirung berkapasitas 5 MW, Danau Ranau 40 MW, dan Oka Ile Ange 10 MW.</p><p><br></p><p>Semula\r\n Kementerian ESDM berencana menawarkan tiga WKP melalui mekanisme lelang\r\n umum tahun ini. Namun, rencana tersebut urung dilakukan karena PLN \r\nmasih menyiapkan skema perjanjian awal transaksi (pre-transaction \r\nagreement/PTA). Lewat regulasi baru lelang panas bumi, Permen ESDM No. \r\n37/2018 tentang Penawaran Wilayah Kerja Panas Bumi, perjanjian transaksi\r\n awal menjadi salah satu persyaratan dalam melakukan lelang wilayah \r\nkerja panas bumi.</p><p><br></p><p>Perjanjian awal transaksi tersebut salah satunya\r\n berisi mengenai rentang tarif sliding scale (skala harga sesuai \r\nkapasitas). Melalui skema tersebut, harga listrik panas bumi yang \r\ndikenakan sesuai dengan estimasi pasokan listrik yang akan dihasilkan. \r\nSkema tersebut bertujuan untuk mempermudah dan mempersingkat waktu \r\nnegosiasi tarif antara PLN dan pengembang listrik swasta.Draf perjanjian\r\n transaksi awal yang disiapkan PLN harus melalui persetujuan dari \r\nKementerian ESDM.</p><p><br></p><p><a href=\"https://ekonomi.bisnis.com/read/20190115/44/878372/pln-putuskan-tak-ambil-wilayah-panas-bumi-wapsalit\" target=\"_blank\">SUMBER : ekonomi.bisnis.com</a><br></p>', 'INAGA', 'pln-tak-jadi-ambil-wilayah-panas-bumi-wapsalit'),
(17, 'PLTP Muara Laboh Tahap I: Terangi 340 Ribu Rumah, Serap 1.800 Tenaga Kerja', 'News_1.jpeg', '2020-03-16', '<p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\"><strong style=\"font-weight: bold;\">Jakarta, inaga-api.or.id –&nbsp;</strong>Hadirnya Pembangkit Listrik Tenaga Panas Bumi (PLTP) Muara Laboh Tahap I yang berlokasi di Kabupaten Solok Selatan, Sumatera Barat meningkatkan kehandalan ketenagalistrikan wilayah Sumatera. Pembangkit berkapasitas 85 Mega Watt (MW) ini mampu memasok daya listrik bagi 340 ribu Rumah Tangga (RT) khususnya di Solok Selatan dan daerah lainnya.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Tak hanya itu, pembangkit yang beroperasi secara komersial pada tanggal 16 Desember 2019 tersebut pada masa konstruksi menyerap tenaga kerja hingga 1.800 tenaga kerja.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">“Selain menyerap hingga 1.800 tenaga kerja setempat, proyek ini juga mendapat dukungan masyarakat, mereka paham bahwa proyek panas bumi tidak merusak lingkungan dan justru bersinergi dengan alam,” ungkap Kepala Biro Komunikasi, Layanan Informasi Publik dan Kerja Sama Kementerian ESDM, Agung Pribadi, di Jakarta, Kamis (20/2/2020).</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Agung mengungkapkan, PT Supreme Energy Muara Laboh (SEML) sebagai operator PLTP juga telah berencana meningkatkan kapasitas pembangkit dengan tambahan sebesar 65 MW melalui pengembangan tahap II.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">“PPA ditargetkan akhir tahun 2020 dan bisa mulai beroperasi pada 2024,” ujar Agung, merujuk komitmen yang disampaikan Founder &amp; Chairman PT SEML, Supramu Santosa pada peresmian pemakaian arus PLTP ke jaringan Sumatera, Senin (17/2/2020).</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Pembangunan PLTP Muara Laboh I sendiri menghabiskan dana sekitar Rp 8 Triliun dan menjadi WKP yang pertama kali dikeluarkan oleh Kementerian ESDM untuk panas bumi di Provinsi Sumatera Barat.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">“Dengan beroperasinya PLTP Muara Laboh Tahap I diharapkan dapat menjadi solusi krisis kelistrikan untuk daerah Sumatera khususnya daerah Solok Selatan, selain itu juga ke depannya akan memacu lebih banyak investasi yang masuk untuk mengembangkan potensi panas bumi yang lain sehingga gerak perekonomian pun bertambah,” tandas Agung.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Selain meningkatkan keandalan pasokan, tambahan daya listrik dari PLTP Muara Laboh ini juga menambah bauran porsi EBT sebesar 1,93 persen di Sumatera dan hingga 1,94 persen di Sumatera Barat. Sumatera Barat tercatat memiliki potensi panas bumi mencapai 1.700 MW di 17 titik.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">PLTP Muara Laboh dikembangkan melalui PT SEML yang merupakan perusahaan patungan Supreme Energy, ENGIE dari Perancis dan Sumitomo Corp asal Jepang. Untuk PLTP Muara Laboh 1, SEML mengebor 18 sumur yang terdiri atas enam sumur eksplorasi dan 12 sumur produksi masing-masing sembilan sumur pengembangandan tiga sumur injeksi. Saat ini PT SEML sedang melakukan pembicaraan perjanjian jual beli listrk (Power Purchase Agreement/PPA) Muara Laboh Tahap II dengan PT PLN (Persero).<br><br>Source: <a href=\"https://pontas.id/2020/02/21/pltp-muara-laboh-tahap-i-terangi-340-ribu-rumah-serap-1-800-tenaga-kerja/\" target=\"_blank\"><i>Pontas.ID</i></a></p>', 'AP', 'pltp-muara-laboh-tahap-i-terangi-340-ribu-rumah-serap-1800-tenaga-kerja');

-- --------------------------------------------------------

--
-- Table structure for table `nzte_directory`
--

CREATE TABLE `nzte_directory` (
  `id_directory` int(11) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `website` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_position` varchar(100) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nzte_directory`
--

INSERT INTO `nzte_directory` (`id_directory`, `company_name`, `website`, `description`, `contact_name`, `contact_position`, `contact_number`, `contact_email`, `foto`, `logo`) VALUES
(3, 'AECOM', 'https://www.aecom.com/id/?utm_source=indonesia&utm_campaign=location_dropdown', '<p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt\"><span lang=\"EN-NZ\">AECOM is the world’s premier infrastructure firm, partnering with\r\nclients to solve the world’s most complex challenges and build legacies for\r\ngenerations to come. AECOM is a leading engineering services consultant with\r\nprojects spanning transportation, buildings, water, governments, energy and the\r\nenvironment throughout the entire project lifecycle. Within the geothermal\r\nindustry we have over 30 years of experience throughout the world. AECOM\r\nprovide a full range of solutions to our geothermal clients from early studies,\r\nto planning and environmental assessments, to engineering and design,\r\nprocurement, program and construction management including commissioning on\r\nover 50 geothermal developments worldwide. To service the growing geothermal\r\nmarket, AECOM has developed a dedicated, highly qualified and experienced team,\r\nled by domestic and international engineers who have designed and built\r\nnumerous successful geothermal projects. We have provided services to various\r\nGeothermal energy enterprises around the world including; PLN, Pertamina\r\nGeothermal Energy, Indonesia Power Supreme Energy, Star Energy, Sejahtera Alam\r\nEnergy, OTP/KS Orka, Hitay, Energy Development Cooperation, Contact Energy,\r\nMighty River Power/Mercury, and KenGen. To date, our global power and energy\r\nteam have engineered and/or constructed more than 280,000 MW of electricity\r\ninfrastructure worldwide. Our energy professionals strive to ensure we will\r\nhave renewable energy solutions for the future. Our 90 years of global history\r\nin efficiency and sustainable design, transmission and distribution projects,\r\nand thermal power generation means that we will be able to sustain our\r\ncommunities for tomorrow. AECOM is supporting the cause and providing services\r\naround Energy Planning, Environmental and Economics, Energy Efficiency and\r\nCarbon Management, Geothermal, Wind, Solar, Hydropower and Dams, Fossil Fuel,\r\nand Transmission and Distribution. Feel free to reach out to us for a\r\nconversation on how we can help you develop your power business.&nbsp;<o:p></o:p></span></p>', 'Edo Hendriks', 'Associate Director', '628158975021', 'edorahman.hendriks@aecom.com', 'aecom1.png', 'logoaecom.png'),
(4, 'Seequent', 'https://www.seequent.com/products-solutions/energy/ https://www.gns.cri.nz/Home/Services/', '<p class=\"Pa0\" style=\"margin-bottom:5.0pt\"><span lang=\"EN-NZ\" style=\"font-size:\r\n11.0pt;font-family:\"Calibri\",\"sans-serif\";mso-ascii-theme-font:minor-latin;\r\nmso-hansi-theme-font:minor-latin;mso-bidi-font-family:\"Times New Roman\";\r\nmso-bidi-theme-font:minor-bidi;mso-fareast-language:EN-US\">Seequent is a world\r\nleader in the development of geoscience analysis, modelling and collaborative\r\ntechnologies. Our solutions enable people to create rich stories and uncover\r\nvaluable insights from geological data, and ultimately make better decisions\r\nabout earth, environment and energy challenges. <o:p></o:p></span></p><p class=\"BodyIndent\" style=\"margin-left:0cm;text-align:justify\"><span lang=\"EN-NZ\" style=\"font-family:\"Calibri\",\"sans-serif\";mso-ascii-theme-font:minor-latin;\r\nmso-hansi-theme-font:minor-latin;mso-bidi-font-family:\"Times New Roman\";\r\nmso-bidi-theme-font:minor-bidi;color:windowtext\">Our solutions support ~50% of\r\nglobal installed geothermal capacity as well as exploration and development\r\nprojects. Our solutions bridge across subsurface disciplines in geothermal\r\ndevelopment and Leapfrog Geothermal is the only geothermal specific 3D\r\nmodelling tool in the market. Seequent’s geothermal solutions bring clarity and\r\nunderstanding to the geothermal development life cycle, reducing risk from\r\nexploration to field operation. <o:p></o:p></span></p><p class=\"Pa0\" style=\"margin-bottom:5.0pt\"><span lang=\"EN-NZ\" style=\"font-size:\r\n11.0pt;font-family:\"Calibri\",\"sans-serif\";mso-ascii-theme-font:minor-latin;\r\nmso-hansi-theme-font:minor-latin;mso-bidi-font-family:\"Times New Roman\";\r\nmso-bidi-theme-font:minor-bidi;mso-fareast-language:EN-US\">Leapfrog Geothermal\r\nis the turnkey product in an ecosystem of solutions which support decision\r\nmaking, data and model management, and collaboration. <o:p></o:p></span></p><p class=\"BodyIndent\" style=\"margin-left:0cm;text-align:justify\"><span lang=\"EN-NZ\" style=\"font-family:\"Calibri\",\"sans-serif\";mso-ascii-theme-font:minor-latin;\r\nmso-hansi-theme-font:minor-latin;mso-bidi-font-family:\"Times New Roman\";\r\nmso-bidi-theme-font:minor-bidi;color:windowtext\">Our products include:<o:p></o:p></span></p><p class=\"BodyIndent\" style=\"margin-left:36.0pt;text-align:justify;text-indent:\r\n-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-NZ\" style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol;color:windowtext\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span lang=\"EN-NZ\" style=\"font-family:\"Calibri\",\"sans-serif\";\r\nmso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:\r\n\"Times New Roman\";mso-bidi-theme-font:minor-bidi;color:windowtext\">Leapfrog\r\nGeothermal<o:p></o:p></span></p><p class=\"BodyIndent\" style=\"margin-left:36.0pt;text-align:justify;text-indent:\r\n-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-NZ\" style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol;color:windowtext\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span lang=\"EN-NZ\" style=\"font-family:\"Calibri\",\"sans-serif\";\r\nmso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:\r\n\"Times New Roman\";mso-bidi-theme-font:minor-bidi;color:windowtext\">Central<o:p></o:p></span></p><p class=\"BodyIndent\" style=\"margin-left:36.0pt;text-align:justify;text-indent:\r\n-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-NZ\" style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol;color:windowtext\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span lang=\"EN-NZ\" style=\"font-family:\"Calibri\",\"sans-serif\";\r\nmso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:\r\n\"Times New Roman\";mso-bidi-theme-font:minor-bidi;color:windowtext\">View<o:p></o:p></span></p><p class=\"BodyIndent\" style=\"margin-left:36.0pt;text-align:justify;text-indent:\r\n-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-NZ\" style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol;color:windowtext\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span lang=\"EN-NZ\" style=\"font-family:\"Calibri\",\"sans-serif\";\r\nmso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:\r\n\"Times New Roman\";mso-bidi-theme-font:minor-bidi;color:windowtext\">Edge<o:p></o:p></span></p><p class=\"BodyIndent\" style=\"margin-left:36.0pt;text-align:justify;text-indent:\r\n-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-NZ\" style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol;color:windowtext\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span lang=\"EN-NZ\" style=\"font-family:\"Calibri\",\"sans-serif\";\r\nmso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:\r\n\"Times New Roman\";mso-bidi-theme-font:minor-bidi;color:windowtext\">Oasis Montaj<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"BodyIndent\" style=\"margin-left:36.0pt;text-align:justify;text-indent:\r\n-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span lang=\"EN-NZ\" style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol;color:windowtext\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \"Times New Roman\";\">        \r\n</span></span><!--[endif]--><span lang=\"EN-NZ\" style=\"font-family:\"Calibri\",\"sans-serif\";\r\nmso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:\r\n\"Times New Roman\";mso-bidi-theme-font:minor-bidi;color:windowtext\">GM - SYS<o:p></o:p></span></p>', 'Andrew McMahon', 'Technical Sales Advisor - Energy - Asia Pacific', '61488088486', 'andrew.mcmahon@seequent.com', 'seequent.png', 'logoseequent.png'),
(5, 'GNS', 'https://www.gns.cri.nz/Home/Services/', '<p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt\"><span lang=\"EN-NZ\">The GNS Science geothermal team is internationally recognised for\r\ninnovative, robust geoscientific research, expertise and consultancy advice.\r\nOur experienced professionals integrate geology, geophysics, geochemistry, and\r\nmodelling expertise for exploration, drilling advice, environmental\r\nsustainability, field development, optimal production and ongoing resource\r\nmanagement. We have supported the global geothermal community for over 50\r\nyears, with experience in over 25 countries, including New Zealand, Indonesia,\r\nPhilippines, Iran, Ethiopia, Madagascar, El Salvador, Turkey, Japan, Papua New\r\nGuinea and Chile.<o:p></o:p></span></p>', 'German Orozco', 'Business Development Manager - Geothermal Sciences', '64274712187', 'g.orozco@gns.cri.nz', 'gns.jpg', 'logogns.jpg'),
(6, 'MTL', 'https://www.mtlnz.co.nz/services/geothermal-power/', '<p class=\"MsoNormal\"><span lang=\"EN-NZ\">MTL provides a complete service from\r\nproject inception and feasibility studies through to installation, plant\r\nprocurement, power station/steamfield construction management, supervision, and\r\ncommissioning. With the ability to<o:p></o:p></span></p><p>\r\n\r\n<span lang=\"EN-NZ\" style=\"font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-ascii-theme-font:minor-latin;mso-fareast-font-family:Calibri;mso-fareast-theme-font:\r\nminor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-NZ;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA\">see the big picture; MTL has the capability to\r\nconcentrate on the complex design details of steamfields and power plants,\r\nwhich ultimately make a geothermal design project successful. MTL\'s project\r\nmanagement skills are a key part of the package. Many of the team members have\r\nworked together for 20+ years delivering successful geothermal power projects\r\nboth within New Zealand and internationally</span><br></p>', 'Chris Mann', 'Managing Director', '64274763632', 'chrism@mtlnz.co.nz', 'mtl.png', 'logomtl.png'),
(7, 'Wintec', 'http://www.wintec.ac.nz/', '<p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt\"><span lang=\"EN-NZ\">Waikato Institute of Technology (Wintec) is a Category 1 state owned\r\nNew Zealand institute of technology. It provides technical training to post\r\ngraduate level in a wide range of subject areas. Specifically, in SouthEast\r\nAsia it focuses on supportingskill development for plant,<o:p></o:p></span></p><p>\r\n\r\n</p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt\"><span lang=\"EN-NZ\">operations and maintenance.<o:p></o:p></span></p>', 'Jo Douglas', 'Executive Director Commercial Initiatives', '640272836032', 'Jo.Douglas@wintec.ac.nz', 'wintec.png', 'logowintec.png'),
(8, 'GeoNZ', '-', '<p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal;mso-layout-grid-align:none;text-autospace:none\"><span lang=\"EN-NZ\">“\r\nGeothermal New Zealand Inc. (GEONZ) is an industry association that has an\r\nexport focus promoting and marketing New Zealand companies with particular\r\ngeothermal capabilities and interests in international markets. Geothermal as a\r\nreliable, cleaner alternative, has provided secure base load generation within\r\nNew Zealand’s electricity market for over 60 years and this experience has been\r\nshared worldwide. Drawing from a wide national industry base, GEONZ can help\r\nbuild teams that offer support through all phases of geothermal development,\r\npartnering with national and international contractors to bring major projects\r\non line”<o:p></o:p></span></p>', 'Mike Allen', 'Executive Director ', '6421899039', 'mike.allen@xtra.co.nz', 'geonz.png', 'logogeonz.png'),
(9, 'Auckland University', 'http://www.geothermal.auckland.ac.nz', '<p class=\"MsoNormal\"><span lang=\"EN-NZ\" style=\"color:#212121\">The Geothermal\r\nInstitute is hosted in the Faculty of Engineering at the University of\r\nAuckland. It is the portal for engaging with the University on all matters\r\nrelated to geothermal energy. Scientists spread across several Faculties,\r\nInstitutes and Research Centres at the university carry out the geothermal\r\nrelated research, education, consulting and training programmes while the\r\nGeothermal Institute coordinates the expertise.<o:p></o:p></span></p>', 'Professor Rosalind Archer', 'Geothermal Institute Director', '0', 'r.archer@auckland.ac.nz', 'auckland.png', 'ckland.png'),
(10, 'Progen', '-', '<p class=\"MsoNormal\"><span lang=\"EN-NZ\">ProGen Ltd is a leading specialist provider\r\nof expert technical supervision and project management services for a wide\r\nvariety of plant overhaul and construction projects. Their team gas extensive\r\nand in-depth experience in the electricity generating industry and offer these\r\nskills in the thermal, geothermal, and gas turbine power generation, mining,\r\ndairy and pulp and paper industries. Over recent years, ProGen has completed\r\nmajor engineering projects for companies and key New Zealand clients such as\r\nGenesis Energy, Contact Energy, Mighty River Power and Fonterra, and\r\ninternationally, Newcrest mining in PNG, Star Energy in Indonesia and EDC in\r\nThe Philippines<o:p></o:p></span></p>', 'Brett Houston', 'Director', '64212457311', 'brett@progen.co.nz', 'progen.png', 'logoprogen.png'),
(11, 'Jacobs', 'http://www.jacobs.com/', '<p>PT. Jacobs Group Indonesia is part of the Jacobs Engineering Group (www.jacobs.com). Jacobs is one of the world\'s largest and most diverse providers of the technical, professional and construction services, including architecture, engineering and construction, operations and maintenance as well as scientific and specialty consulting.</p><p>We have over 40 years geothermal exploration, development and engineering experience from assisting the development of over 3000 MW of global geothermal projects notably in Indonesia, the Philippines, New Zealand, Kenya, USA, Central America, and the Carib bean.</p><p><b>PROJECT HIGHLIGHT IN INDONESIA</b></p><p class=\"BodyIndent\" style=\"margin-left: 36pt; text-align: justify; text-indent: -18pt;\"><span lang=\"EN-NZ\" style=\"font-family: Symbol; color: windowtext;\">·&nbsp; &nbsp;</span><span style=\"font-size: 1rem; text-align: left;\">Lead Consultant for Accelerating Geothermal Energy Development in Indonesia (NZAGED), with NZ Govt, EBTKE, Badan Geologi and PT SMI.</span></p><p class=\"BodyIndent\" style=\"margin-left: 36pt; text-align: justify; text-indent: -18pt;\"><span style=\"text-indent: -18pt; font-size: 1rem; font-family: Symbol;\">·</span><span style=\"text-indent: -18pt; font-size: 1rem; font-family: Symbol;\"><font size=\"1\">&nbsp; &nbsp;</font></span><span style=\"text-indent: -18pt; font-size: 1rem; text-align: left;\">Baturaden Geothermal Exploration Infrastructure Design.</span></p><p class=\"BodyIndent\" style=\"margin-left: 36pt; text-align: justify; text-indent: -18pt;\"><span style=\"font-size: 1rem; font-family: Symbol;\">·</span><span times=\"\" new=\"\" roman\";\"=\"\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: Symbol;\">&nbsp;&nbsp;</span><span style=\"font-size: 1rem; text-align: left;\">Muara Laboh - Rajabasa - Rantau Dedap Geothermal Project (Owner\'s Engineer, Civil &amp; Infrastructure Works).</span></p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style=\"font-size: 1rem; font-family: Symbol; text-align: justify; text-indent: -24px;\">·</span><span times=\"\" new=\"\" roman\";\"=\"\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: Symbol; text-align: justify; text-indent: -24px;\">&nbsp; &nbsp;&nbsp;</span><span style=\"font-size: 1rem;\">Chevron Geothermal Master Engineering Services.</span></p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style=\"font-size: 1rem; font-family: Symbol; text-align: justify; text-indent: -24px;\">·</span><span times=\"\" new=\"\" roman\";\"=\"\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: Symbol; text-align: justify; text-indent: -24px;\">&nbsp; &nbsp;&nbsp;</span><span style=\"font-size: 1rem;\">Darajat Unit III Steamfield and Power Plant Design.</span></p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style=\"font-size: 1rem; font-family: Symbol; text-align: justify; text-indent: -24px;\">·</span><span times=\"\" new=\"\" roman\";\"=\"\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: Symbol; text-align: justify; text-indent: -24px;\">&nbsp; &nbsp;&nbsp;</span><span style=\"font-size: 1rem;\">Sarulla Lender\'s Enviromental &amp; Social Consultant.</span></p><p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style=\"font-size: 1rem; font-family: Symbol; text-align: justify; text-indent: -24px;\">·</span><span times=\"\" new=\"\" roman\";\"=\"\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: Symbol; text-align: justify; text-indent: -24px;\">&nbsp; &nbsp;&nbsp;</span><span style=\"font-size: 1rem;\">Blawan-Ijen Due Diligence and Resource Assessment.</span></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size: 1rem; font-family: Symbol; text-align: justify; text-indent: -24px;\">·</span><span style=\"font-family: Symbol; text-align: justify; text-indent: -24px;\"><font size=\"1\">&nbsp; &nbsp;</font></span>Dieng Improvement &amp; Optimisation Steam Production of Unit 1.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size: 1rem; font-family: Symbol; text-align: justify; text-indent: -24px;\">·</span><span style=\"font-family: Symbol; text-align: justify; text-indent: -24px;\"><font size=\"1\">&nbsp; &nbsp;</font></span>Jailolo Geochemistry &amp; Heat Flow Survey.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size: 1rem; font-family: Symbol; text-align: justify; text-indent: -24px;\">·</span><span style=\"font-family: Symbol; text-align: justify; text-indent: -24px;\"><font size=\"1\">&nbsp; &nbsp;</font></span>Wayang Windu Drilling Workover &amp; Well Testing Advisory.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size: 1rem; font-family: Symbol; text-align: justify; text-indent: -24px;\">·</span><span style=\"font-family: Symbol; text-align: justify; text-indent: -24px;\"><font size=\"1\">&nbsp; &nbsp;</font></span>Lumut Balai Geothermal Project Cross Country Pipelines.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size: 1rem; font-family: Symbol; text-align: justify; text-indent: -24px;\">·</span><span style=\"font-family: Symbol; text-align: justify; text-indent: -24px;\"><font size=\"1\">&nbsp; &nbsp;</font></span>Sorik Marapi Geothermal Project Exploration and Transmission Line.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size: 1rem; font-family: Symbol; text-align: justify; text-indent: -24px;\">·</span><span style=\"font-family: Symbol; text-align: justify; text-indent: -24px;\"><font size=\"1\">&nbsp; &nbsp;</font></span>Gunung Lawu Geothermal Project FEED Study.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size: 1rem; font-family: Symbol; text-align: justify; text-indent: -24px;\">·</span><span style=\"font-family: Symbol; text-align: justify; text-indent: -24px;\"><font size=\"1\">&nbsp; &nbsp;</font></span>Karaha Geothermal Project Civil &amp; Pipeline Works.</p>', 'Tim Anderson - Ridwan Febrianto', '', '0', 'E.tim.anderson@jacobs.com', 'jacobs.png', 'logojacobs.png');

-- --------------------------------------------------------

--
-- Table structure for table `nzte_story`
--

CREATE TABLE `nzte_story` (
  `id_nzte` int(11) NOT NULL,
  `description_nzte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `nzte_story`
--

INSERT INTO `nzte_story` (`id_nzte`, `description_nzte`) VALUES
(1, '<p class=\"MsoNormal\"><span lang=\"EN-NZ\" style=\"font-size: 10pt; line-height: 14.2667px;\">New Zealand – Indonesia Geothermal story<o:p></o:p></span></p><p class=\"MsoNormal\"><span lang=\"EN-NZ\" style=\"font-size: 10pt; line-height: 14.2667px;\"><o:p>&nbsp;</o:p></span></p><p class=\"MsoNormal\"><span lang=\"EN-NZ\" style=\"font-size: 10pt; line-height: 14.2667px;\">Indonesia is aiming for an affordable, secure and sustainable energy system, with already ambitious targets to increase its use of renewable energy. The country has set an overall target to have modern?new and?renewables?energy,?provide 23% of total primary energy supply (TPES) by 2025, and 31% by 2050.??<o:p></o:p></span></p><p class=\"MsoNormal\"><span lang=\"EN-NZ\" style=\"font-size: 10pt; line-height: 14.2667px;\">With Indonesia possessing the second-largest geothermal resources in the world, the geothermal share of the fuel mix is expected to double from 4.7% in 2017 to 9% in 2026. A key strength of geothermal is its ability to act as base-load power, offsetting one of the traditional weaknesses of renewable energy.<o:p></o:p></span></p><p class=\"MsoNormal\"><span lang=\"EN-NZ\" style=\"font-size: 10pt; line-height: 14.2667px;\">Just like Indonesia, New Zealand sits on the ring of fire, with geothermal energy potential. In New Zealand, Geothermal plays important role in energy generation of the country with current installed capacity of 900MW, enabling it to provide approximately 17% of the electricity (New Zealand Electricity Authority, 2018). Some of the earliest large-scale use of geothermal in the world were in New Zealand, with Wairakei being the first geothermal plant opened in 1958. At that moment, Wairakei was the second large-scale plant existing worldwide.</span><span lang=\"EN-NZ\">&nbsp;</span><span lang=\"EN-NZ\" style=\"font-size: 10pt; line-height: 14.2667px;\">Science and engineering skills from New Zealand have contributed to a wide range of geothermal power developments internationally, and to the identification of potential resources in geographies far from our own, including in the Pacific, Latin America, and of course South East Asia, in Indonesia<o:p></o:p></span></p><p class=\"MsoNormal\"><span lang=\"EN-NZ\" style=\"font-size: 10pt; line-height: 14.2667px;\">Both Indonesia and New Zealand place great importance on geothermal energy as part of renewable energy and are committed to further develop and increase utilization of geothermal energy, as electricity supply and direct use, as part of the decarbonization of energy market in achieving sustainability and fighting climate change.<o:p></o:p></span></p><p class=\"MsoNormal\"><span lang=\"EN-NZ\" style=\"font-size: 10pt; line-height: 14.2667px;\">New Zealand’s first direct major involvement in Indonesia’s geothermal industry was assistance for the Kamojang power project, with support for an initial feasibility study in 1972. The New Zealand government later provided US$40 million dollar of finance for the development, which resulted in the first stage power plant entering commercial operation in 1983. Other units were added at Kamojang and it remains a major part of the Indonesian geothermal scene to the present day. It now has an effective installed capacity of about 200 MW.&nbsp; Kamojang stands as an enduring testimony to our commitment and support for Indonesia. Not only in G2G, but For New&nbsp;Zealand, partnership with the private sector was – and remains – essential for developing Indonesia’s geothermal resources<o:p></o:p></span></p><p class=\"MsoNormal\"><span lang=\"EN-NZ\" style=\"font-size: 10pt; line-height: 14.2667px;\">Geothermal is essentially taking a major part in achieving this target of energy mix as well as contributing to Indonesia’s sustainability effort in achieving the world’s Sustainable Development Goal. The development and progress of Indonesia’s geothermal energy sector is indeed has been supported by the New Zealand’s business player – from consultant, EPC, to software, with reliable expertise over the years. In Indonesia, these New Zealand Geothermal businesses is assisted by NZTE.<o:p></o:p></span></p><p class=\"MsoNormal\"><span lang=\"EN-NZ\" style=\"font-size: 10pt; line-height: 14.2667px;\">NZTE ( New Zealand Trade &amp; Enterprise) is the New Zealand Government’s international business development agency. Our purpose is to grow companies internationally – bigger, better, faster – for the benefit of New Zealand. NZTE’s strategy supports the Government’s Business Growth Agenda, which creates conditions that encourage successful businesses to grow globally.<o:p></o:p></span></p><p></p><p class=\"MsoNormal\"><span lang=\"EN-NZ\" style=\"font-size: 10pt; line-height: 14.2667px;\">NZTE Jakarta has been actively providing services to New Zealand’s geothermal related business in Indonesia– from engineering Consultant Company to Subsurface Modelling Software, New Zealand has been a prominent name and holding a reliable reputation, by years of expertise and technology innovation.&nbsp; &nbsp;</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `objective`
--

CREATE TABLE `objective` (
  `id_objective` int(11) NOT NULL,
  `text_objective` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `objective`
--

INSERT INTO `objective` (`id_objective`, `text_objective`) VALUES
(1, '<p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\"><strong style=\"font-weight: bold; text-align: left;\">»</strong><span style=\"text-align: left;\">&nbsp; To drive a close cooperation with the government, PLN and the developers as well as financial institution on the obstacles that may occur in order to make the program on the</span><br style=\"text-align: left;\"><span style=\"text-align: left;\">&nbsp; &nbsp; &nbsp;geothermal development acceleration become success.</span><br style=\"text-align: left;\"><strong style=\"font-weight: bold; text-align: left;\">»</strong><span style=\"text-align: left;\">&nbsp; To drive in creating the support from all levels of the government and the related community through education to the institutions, the government departments, and the</span><br style=\"text-align: left;\"><span style=\"text-align: left;\">&nbsp; &nbsp; &nbsp;community in order to increase the knowledge on the positive values and geothermal contribution in supporting the national energy needs as well as to produce clean energy.</span><br style=\"text-align: left;\"><strong style=\"font-weight: bold; text-align: left;\">»</strong><span style=\"text-align: left;\">&nbsp;&nbsp;To drive the Human Resources Development and the geothermal technology through a cooperation with the government, the education institutions, and the geothermal</span><br style=\"text-align: left;\"><span style=\"text-align: left;\">&nbsp; &nbsp; &nbsp;developers, in order to create and to implement the education and the trainings including the implementation of the Annual Scientific Gathering/Indonesia International</span><br style=\"text-align: left;\"><span style=\"text-align: left;\">&nbsp; &nbsp; &nbsp;Convention and Exhibition, Seminars, Workshop, Luncheon Talks in the geothermal sector as well as to strengthen the international cooperation in the geothermal science.</span><br style=\"text-align: left;\"><strong style=\"font-weight: bold; text-align: left;\">»</strong><span style=\"text-align: left;\">&nbsp; To accelerate the implementation on the system of Competency certification or the Expertness of the geothermal professionals in order to produce the standardization of</span><br style=\"text-align: left;\"><span style=\"text-align: left;\">&nbsp; &nbsp; &nbsp;expertise.</span><br style=\"text-align: left;\"><strong style=\"font-weight: bold; text-align: left;\">»</strong><span style=\"text-align: left;\">&nbsp; To drive and to assist the government in completing the regulations in the geothermal sector, particularly the issues related with the working area tendering, electricity tariff, fiscal</span><br style=\"text-align: left;\"><span style=\"text-align: left;\">&nbsp; &nbsp; &nbsp;policy, utilization of the forest area as well as to identify and to give inputs if there is any overlapping in the central and local governments in order to accelerate the geothermal</span><br style=\"text-align: left;\"><span style=\"text-align: left;\">&nbsp; &nbsp; &nbsp;development.</span><br style=\"text-align: left;\"><strong style=\"font-weight: bold; text-align: left;\">»</strong><span style=\"text-align: left;\">&nbsp; To assist the government in promoting the geothermal potency in Indonesia to the domestic and international investors.</span><br style=\"text-align: left;\"><strong style=\"font-weight: bold; text-align: left;\">»</strong><span style=\"text-align: left;\">&nbsp; To drive the growth of the geothermal vendors as well as to utilize the Local product in order to grab the active role in the process of the geothermal development.</span><br style=\"text-align: left;\"><strong style=\"font-weight: bold; text-align: left;\">»</strong><span style=\"text-align: left;\">&nbsp; To establish and to strengthen the working relationship with the profession organization either in the domestic level as well as in the international.</span><br style=\"text-align: left;\"><strong style=\"font-weight: bold; text-align: left;\">»</strong><span style=\"text-align: left;\">&nbsp; To drive in creating the good governance in managing the organization in order to achieve the organization independence.</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `president`
--

CREATE TABLE `president` (
  `id_president` int(11) NOT NULL,
  `nama_president` varchar(250) NOT NULL,
  `masa_jabatan` text NOT NULL,
  `foto_president` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `president`
--

INSERT INTO `president` (`id_president`, `nama_president`, `masa_jabatan`, `foto_president`) VALUES
(1, 'Prijanto', '1994-1998', 'Tanpa_Foto1.jpg'),
(2, 'Vincent T. Radja (alm)', '1991-1994', 'Tanpa_Foto.jpg'),
(3, 'Puguh Sugiharto', '1998-2001', 'Tanpa_Foto2.jpg'),
(4, 'Herman D. Ibrahim', '2001-2004', 'Tanpa_Foto3.jpg'),
(5, 'Alimin Ginting', '2004-2007', 'Tanpa_Foto4.jpg'),
(6, 'Suryadharma', '2007-2011', 'Tanpa_Foto5.jpg'),
(7, 'Abadi Poernomo', '2011-2017', 'Abadi.jpg'),
(8, 'Prijandaru Effendi', '2017-2020', 'prijandaru.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `presidentmessage`
--

CREATE TABLE `presidentmessage` (
  `id_message` int(11) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `presidentmessage`
--

INSERT INTO `presidentmessage` (`id_message`, `message`) VALUES
(1, '<p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\"><img src=\"http://www.inaga-api.or.id/images/presmes.jpg\" alt=\"\" data-mce-src=\"images/presmes.jpg\" style=\"border: 0px; height: auto; max-width: 100%;\"></p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">Asosiasi Panas Bumi Indonesia (API) adalah organisasi profesi yang mewakili sektor Panas Bumi dan merupakan wadah bagi para profesional dan pengembang industri Panas Bumi yang bersifat non politik, non-profit serta tidak memiliki afiliasi politik. API tidak menginduk kepada Asosiasi Energi Terbarukan lainnya di Indonesia. API berdiri sendiri tapi API akan bekerjasama dan berkoordinasi dengan Asosiasi-Asosiasi Energi Terbarukan lainnya untuk memajukan Energi Terbarukan di Indonesia, khususnya Panasbumi. Kami mengucapkan banyak terima kasih kepada Pemerintah, dalam hal ini Kementerian ESDM, atas supportnya yang luar biasa bagi pengembangan Panasbumi dan API tetap berkomitmen untuk menjadi mitra terpercaya Pemerintah dalam mensupport pengembangan Panas Bumi di Indonesia.</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">Selama periode kepengurusan baru ini, fokus kita adalah mensupport Pemerintah memaksimalkan kontribusi Panasbumi didalam bauran “energy mix” ditahun 2025 sebagai bagian dari kemandirian energi dan ketahanan energi nasional seperti yang tertuang didalam PP 79/14 mengenai Kebijakan Energi Nasional. Kontribusi Pabum yang ditagetkan didalam bauran energi ditahun 2025 adalah sekitar 7,200 MW dimana saat ini baru sekitar 1,808.5 MW yang telah dan akan segera COD. Kekurangan sekitar 5,390 MW, tidak mungkin terkejar dalam waktu sisa 7 tahun ini. Sehingga saat ini Pemerintah merencanakan untuk merevisi target di atas menjadi sekitar 3,000 MW ditahun 2025 dan menjadi 3,580 MW ditahun 2027. API akan terus mengawal target baru ini supaya bisa tercapai dan tidak perlu direvisi lagi agar dapat memaksimalkan kontribusi Pabum didalam bauran energi tahun 2025.</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">Tahun 2017 akan segera berganti. Tahun ini adalah tahun yang berat bagi pengusahaan Panas Bumi di Indonesia setelah berlari cukup cepat mulai tahun 2009. Kita masih ingat, industri Panasbumi ini sempat mati suri setelah krisis ditahun 1998 dimana industri ini sempat booming ditahun 80-90an. Banyak investor yang saat itu berinvestasi di Indonesia melakukan kerjasama dengan Pertamina melalui Kerjasama operasi dibeberapa wilayah tertentu, sebut saja Wayang Windu, SOL, dll. Sayangnya terjadi krisis moneter ditahun 1998 yang membuat beberapa investor membatalkan investasinya di Indonesia dan bahkan ada yang hengkang dengan tuntutan yang akhirnya dimenangkannya.</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">Deregulasi Panasbumi terjadi ditahun 2003 dengan disahkannya peraturan perundangan Pabum yang baru yaitu Undang-undang Panas Bumi Nomor 27/2003, yang kemudian disusul oleh Peraturan Pemerintah Nomor 59/2007. Deregulasi ini memungkinkan IPP mempunyai Wilayah Kerja Panasbumi sendiri tanpa harus melakukan kerjasama operasi dengan Pertamina. API kemudian bekerja bersama-sama Pemerintah untuk merumuskan peraturan-peraturan penunjang yang mendukung roda investasi Panasbumi bergulir lagi. API dan Pemerintah sepakat bahwa untuk menarik investasi di panasbumi, diperlukan tarif yang menarik yang sesuai dengan resiko yang diambil oleh Pengembang. Evolusi tarif panasbumi dimulai dengan dikeluarkannya Permen tarif yang berdasarkan BPP, HPS dan akhirnya dikeluarkan Permen tarif dengan ceiling 9.7 sen diikuti oleh Permen Penugasan ke PLN dan Permen-Permen penunjang lainnya. Puncaknya adalah ditahun 2014, dikeluarkannya Permen Ceiling Tariff dengan metodologi Avoided Cost serta diterbitkannya UU Panasbumi yang baru dan rencana penerbitan Permen Sliding Scale Tariff yang semakin membuat industri Panasbumi menjadi sangat seksi. Namun, pergantian kepemimpinan di tubuh Kementrian ESDM yang lebih menekankan azas affordability to the people membuat roda pergerakan industri Panas Bumi mendingin kembali.</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">Peraturan perundangan meminta harga Panas Bumi sesuai dengan azas keekonomian yang berkeadilan, yaitu memenuhi keekonomian proyek serta harganya terjangkau oleh pembeli. Karena azasnya saat ini lebih menekankan kepada affordability to the people, maka dikeluarkanlah peraturan baru terhadap tarif yang kembali memakai referensi Biaya Pokok Produksi (BPP) dari pembeli. Didalam peraturan tersebut di atur bahwa harga sesuai dengan BPP setempat kecuali untuk Sumatera, Jawa dan Bali, jika BPP setempat lebih kecil atau sama dengan BPP nasional, penyelesaiannya adalah B to B.</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">Untuk kondisi saat ini, yang didominasi oleh penemuan cadangan dengan kapasitas kecil, memenuhi azas keekonomian yang berkeadilan seperti yang dimaksud diatas selalu akan menghasilkan ‘gap’ yang cukup besar (kalo penemuan kapasitas besar, ceritanya akan lain). Gap ini biasanya selalu diambil oleh Pemerintah melalui penugasan kepada Pembeli. Karena Pemerintah sudah mendeklarasikan tidak akan ada subsidi lagi kedepannya, gap ini harus dibagi antara Pengembang dan Pembeli yang tentu saja sangat berat bagi kedua belah pihak. Namun begitu, baru-baru ini PLTP Rantau Dedap dan PLN dapat membuktikan bahwa mekanisme perundingan B to B bisa juga dilaksanakan dan mendapatkan kesepakatan yang sesuai dengan azas keekonomian yang berkeadilan. API percaya bahwa ini adalah niat serius Pemerintah dan PLN untuk tetap mendukung pengembangan Panasbumi di Indonesia. Sehingga, API berharap kepada Pemerintah agar proses penyelesaian perundingan antara Rantau Dedap dengan PLN dapat juga diterapkan ke proyek-proyek lainnya yang saat ini sedang dalam permasalahan yang sama untuk memberikan semangat baru bahwa PLN dan Pemerintah tidak akan menelantarkan pengembang-pengembang yang serius.</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">API melihat masih banyak cara yang bisa diusahakan oleh Pemerintah dan Pengembang untuk bisa menurunkan gap tersebut yang antara lain berupa:</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">1. Incentives</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">* PPN dalam negeri tidak dipungut. Sudah pernah didsikusikan tapi kelihatannya agak susah implementasinya</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">* Penghapusan pungutan-pungutan pajak atau non pajak saat masa sebelum produksi. Kalo perlu penghapusan PPH Badan. Panasbumi sebagai penggerak ekonomi saja. Pemerintah menikmati multiplier effectnya. Karena panasbumi bukan komoditi sehingga kalo dibiarkan menjadi dormant resources</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">2. Kepastian Regulasi</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">Regulasi yang berubah-ubah membuat pengusahaan kurang menarik dan menaikan tingkat resiko investasi</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">3. Kepastian Tata Waktu</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">Waktu COD yang lebih cepat (6 tahun) dengan kepastian. PPA, perijinan-perijinan utama serta konsep sliding scale tariff sudah ada saat tender</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">4. Dukungan Aktif Pemerintah</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">* Pemerintah Daerah turut aktif membantu dengan mensinkronisasikan program infrastruktur daerah dengan pengembangan Panasbumi di daerahnya serta terjun langsung untuk ikut mensosialisasikan proyek tersebut sehingga dapat meredam isu sosial yang biasanya selalu terjadi dan memperlancar proses pembebasan tanah</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">* Government drilling untuk mengurangi resiko eksplorasi</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">* Dana murah untuk mensupport competitiveness. Saat ini keberadaan SMI masih diprioritaskan bagi perusahaan Pemerintah</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">5. Efficiency dan Teknologi Breakthorugh</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">Efficiency dan optimisasi biaya di hulu dan hilir agar mendapatkan harga yang kompetitif dan komitment pengembang untuk menjalankan program sesuai dengan janji didalam paket tender</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">Usulan diatas sudah pernah disampaikan ke Menteri ESDM sebagai masukan dari API saat Permen 12 yang mengatur harga baru EBT dikeluarkan. Sehingga API menawarkan forum bersama antara ESDM (EBTKE, DJK) dan PLN sebagai tindak lanjutnya untuk melakukan kajian perhitungan dengan asumsi-asumsi diatas dengan tujuan untuk mengetahui seberapa besar “gap” keekonomian berkeadilan dapat diturunkan.</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">Kami juga mengerti bahwa saat ini penugasan kebeberapa BUMN menjadi salah satu prioritas Pemerintah didalam usahanya menurunkan ‘gap’ tersebut. Namun yang harus diingat adalah pendanaan untuk membangun Panasbumi tidak murah. Saat ini biayanya sekitar 4-5 juta dollar/MW, kalo kita bicara 1000 MW saja besarnya biaya yang dibutuhkan sekitar 4-5 billion dollars atau 50-60 trilyun. Ini tidak mungkin tanpa adanya keterlibatan swasta didalam pembiayaannya. Jadi apapun strateginya, keterlibatan swasta tetap diperlukan bagi pengembangan Panasbumi di Indonesia.</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">Selain hal-hal diatas, API juga akan tetap melanjutkan program-program yang telah dilaksanakan sebelumnya seperti event tahunan IIGCE yang penyelenggaraan tahun depan akan dipimpin oleh Sdr. Ikbal Nur dari Geodipa, program kerjasama pengembangan SDM dengan lembaga-lembaga nasional dan internasional, perluasan organisasi dengan mengaktifkan beberapa Komisariat Daerah baru dan Student Chapter serta memberdayakan keberadaan website API dengan menjadikannya sebagai pusat informasi Panasbumi di Indonesia.</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\">Sebagai penutup, pengembangan panasbumi adalah kepentingan kita bersama sehingga perlu kerjasama yang erat dan komitmen semua stakeholders dibawah leadership kementerian ESDM. Untuk pengurus baru, terimakasih atas kesediannya. Bersama kita bisa membuat panasbumi menjadi hebat lagi.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `status` varchar(250) NOT NULL,
  `id_workingarea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `status`, `id_workingarea`) VALUES
(1, 'Exploration Drilling', 2),
(3, 'Exploration Drilling', 3);

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id_province` int(11) NOT NULL,
  `nama_province` varchar(250) NOT NULL,
  `id_island` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id_province`, `nama_province`, `id_island`) VALUES
(2, 'Nangroe Aceh Darussalam', 2),
(3, 'West Kalimantan', 3),
(4, 'South Kalimantan', 3),
(5, 'North Kalimantan', 3),
(6, 'North Sumatra', 2),
(7, 'West Sumatra', 2);

-- --------------------------------------------------------

--
-- Table structure for table `related_regulation`
--

CREATE TABLE `related_regulation` (
  `id_related_regulation` int(11) NOT NULL,
  `nama_regulation_ind` text NOT NULL,
  `nama_regulation_eng` text NOT NULL,
  `pdf_ind` text NOT NULL,
  `pdf_eng` text NOT NULL,
  `id_kategori_related` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `related_regulation`
--

INSERT INTO `related_regulation` (`id_related_regulation`, `nama_regulation_ind`, `nama_regulation_eng`, `pdf_ind`, `pdf_eng`, `id_kategori_related`) VALUES
(1, 'Peraturan Menteri Keuangan No 21/PMK.011/2010 tentang Pemberian Fasilitas Perpajakan dan Kepabeanan untuk Kegiatan Pemanfaatan Sumber Energi Terbarukan', 'Ministry of Finance Regulation No 21/PMK.011/2010 on Provision of Tax Facilities and Customs for Renewable Energy Source Utilization Activities', '1843106-Muhammad_Fachrian_Noor.pdf', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sejarah_api`
--

CREATE TABLE `sejarah_api` (
  `id_sejarahapi` int(11) NOT NULL,
  `text_sejarah` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sejarah_api`
--

INSERT INTO `sejarah_api` (`id_sejarahapi`, `text_sejarah`) VALUES
(4, '<p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\"><strong style=\"font-weight: bold;\">INAGA</strong>&nbsp;- Indonesian Geothermal Association (Asosiasi Panasbumi Indonesia - API) was establish in September 25th, 1991 in Jakarta. INAGA is a nonprofit organization, which function as a forum of communication, coordination and consultation in order to improve its capabilities, understanding, cooperation and responsibility of the role of geothermal energy development in Indonesia and member of IGA (International Geothermal Association).</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\"><strong style=\"font-weight: bold;\">CONTRIBUTION</strong><br><strong style=\"font-weight: bold;\">»&nbsp;&nbsp;</strong>INAGA actively get involved in drafting Academic Paper for the several geothermal regulations and reviewing the draft of regulations before the draft become the regulation;<br><strong style=\"font-weight: bold;\">»&nbsp;&nbsp;</strong>Continuously seeking solutions for issues related to geothermal development in Indonesia as inputs to the government;<br><strong style=\"font-weight: bold;\">»&nbsp;&nbsp;</strong>Advocating and facilitating resolution for geothermal development; and<br><strong style=\"font-weight: bold;\">»&nbsp;&nbsp;</strong>Provide seminars, luncheon talk, panel discussion, convention &amp; exhibition in supporting geothermal development.</p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\"><strong style=\"font-weight: bold;\">MEMBER</strong><br>There are around 600 members and geothermal companies, among others :<br><strong style=\"font-weight: bold;\">»</strong>&nbsp; Geothermal Companies (17): Star Energy, Pertamina Geothermal Energy, Supreme Energy, Geo Dipa Energi, Sarulla Operations, Ormat Geothermal Indonesia, Wijaya Karya Jabar<br>&nbsp; &nbsp; Power, Hitay Energy Holdings, Bakrie Power, Dalle Energy, Jabar Rekind Geothermal, EDC Indonesia, Medco Power Indonesia, Schlumberger, Green Energy Geothermal, Sejahtera<br>&nbsp; &nbsp; Alam Energi &amp; Sintesa Banten Geothermal.<br><strong style=\"font-weight: bold;\">»</strong>&nbsp; Academic: Bandung Institute of Technology (ITB), University of Indonesia (UI),University of Gadjah Mada (UGM), University of Lampung (UNILA) and Trisakti.<br><strong style=\"font-weight: bold;\">»</strong>&nbsp; Regional Chapter: Central Java - Yogyakarta (DIY) and Lampung.<br><strong style=\"font-weight: bold;\">»</strong>&nbsp; Professionals and Individuals.<br></p><p data-mce-style=\"text-align: justify;\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px; text-align: justify;\"><strong style=\"font-weight: bold;\">INAGA MEMBERS CAPABILITIES</strong><br><strong style=\"font-weight: bold;\">»</strong>&nbsp; Upstream and Downstream Geothermal Field Development;<br><strong style=\"font-weight: bold;\">»</strong>&nbsp; Front End Engineering Design;<br><strong style=\"font-weight: bold;\">»</strong>&nbsp; Engineering, Procurement and Construction; and<br><strong style=\"font-weight: bold;\">»&nbsp;&nbsp;</strong>Training in Geothermal Development.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `stakeholder`
--

CREATE TABLE `stakeholder` (
  `id_stakeholder` int(11) NOT NULL,
  `nama_stakeholder` varchar(250) NOT NULL,
  `kategori` varchar(250) NOT NULL,
  `link_website` text NOT NULL,
  `description` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stakeholder`
--

INSERT INTO `stakeholder` (`id_stakeholder`, `nama_stakeholder`, `kategori`, `link_website`, `description`, `foto`) VALUES
(2, 'Pertamina Geothermal Energy, PT', 'State-owned Geothermal Dev', 'http://pge.pertamina.com', '<div style=\"text-align: justify; \"><font face=\"Tahoma\"><span style=\"font-size: 13.3333px;\">PT Pertamina Geothermal Energy is one of the largest geothermal energy resources companies in Indonesia. The Company is a subsidiary of PT Pertamina (Persero) with PT Pertamina Dana Ventura. The company does business in geothermal energy utilizations.</span></font></div><div style=\"text-align: justify; \"><font face=\"Tahoma\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div style=\"text-align: justify; \"><font face=\"Tahoma\"><span style=\"font-size: 13.3333px;\">When established in 2006, PGE was mandated by the government to develop 15 Geothermal Business Working Areas in Indonesia. PGE has management rights to 15 Geothermal Working Areas (WKPs) with a total potential of 8,480 MW equivalent to 4,392 MMBOE. Out of the 15 WKPs, 10 WKPs are managed by PT PGE alone, namely (1) Seulawah Agam, (2) Sibayak-Sinabung: 12 MW, (3) Sungai Penuh, (4) Hululais, (5) Lumut Balai-Margabayur, (6) Ulubelu: 220 MW, (7) Kamojang: 235 MW, (8) Karaha: 30 MW, (9) G. Lawu, (10) Lahendong: 120 MW. Five of these areas have been in production with a total capacity of 617 MW.</span></font></div><div style=\"text-align: justify; \"><font face=\"Tahoma\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><ul><li style=\"text-align: justify;\"><font face=\"Tahoma\"><span style=\"font-size: 13.3333px;\">Address<span style=\"white-space:pre\">	</span>:<span style=\"white-space:pre\">	</span>Menara Cakrawala 11th Floor. Jl. MH. Thamrin Kav. 9, Jakarta 10340 - Indonesia</span></font></li><li style=\"text-align: justify;\"><font face=\"Tahoma\"><span style=\"font-size: 13.3333px;\">Phone<span style=\"white-space:pre\">	</span>:<span style=\"white-space:pre\">	</span>500-000 or +62 21 79173000</span></font></li><li style=\"text-align: justify;\"><font face=\"Tahoma\"><span style=\"font-size: 13.3333px;\">Email<span style=\"white-space:pre\">	</span>:<span style=\"white-space:pre\">	</span>pcc@pertamina.com</span></font></li></ul>', 'PGE_.png'),
(3, 'Geo Dipa Energi, PT', 'State-owned Geothermal Dev', 'https://www.geodipa.co.id', '<p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;\r\nmargin-left:3.4pt;text-align:justify\"><span class=\"fontstyle21\"><span lang=\"EN-US\" style=\"font-size:10.0pt;font-family:&quot;Tw Cen MT&quot;,sans-serif;mso-bidi-font-family:\r\nArial\">Founded on July 5, 2002, Geo Dipa Energi has since dedicated itself to\r\ncapitalizing the</span></span><span lang=\"EN-US\" style=\"font-size:10.0pt;\r\nfont-family:&quot;Tw Cen MT&quot;,sans-serif;mso-bidi-font-family:Arial\"> economical <span class=\"fontstyle21\">and environmental value of\r\ngeothermal energy. Leveraging the vast capacity of</span> <span class=\"fontstyle21\">their power generator projects in\r\nDieng and Patuha with potential energy being 400 MW of</span> <span class=\"fontstyle21\">each. Geo Dipa Energi strives to\r\nmeet national electrical power demand by capitalizing on</span> <span class=\"fontstyle21\">the cost-efficient and environmental\r\nqualities of geothermal energy.<o:p></o:p></span></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;\r\nmargin-left:3.4pt;text-align:justify\"><span class=\"fontstyle21\"><span lang=\"EN-US\" style=\"font-size:10.0pt;font-family:&quot;Tw Cen MT&quot;,sans-serif;mso-bidi-font-family:\r\nArial\">Geo Dipa Energi was a joint subsidiary of PT Pertamina (Persero) and PT\r\nPLN (Persero), a</span></span><span lang=\"EN-US\" style=\"font-size:10.0pt;\r\nfont-family:&quot;Tw Cen MT&quot;,sans-serif;mso-bidi-font-family:Arial\"> <span class=\"fontstyle21\">leading state owned enterprise in\r\nenergy exploration and generation with proven experience</span> <span class=\"fontstyle21\">in developing and operating\r\ngeothermal power plants. In February 2011, the composition of</span> <span class=\"fontstyle21\">the Company\'s shareholders has been\r\nchanged, whereby PT Pertamina\'s shares were taken</span> <span class=\"fontstyle21\">over by the Government of Indonesia.\r\nAs a consequence from that corporate action, in</span> <span class=\"fontstyle21\">December 2011, Geo Dipa Energi\r\ntransform into a new State-Owned Company.<o:p></o:p></span></span></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:4.0pt;\r\nmargin-left:3.4pt;text-align:justify\"><span class=\"fontstyle21\"><span lang=\"EN-US\" style=\"font-size:10.0pt;font-family:&quot;Tw Cen MT&quot;,sans-serif;mso-bidi-font-family:\r\nArial\">Geo Dipa Energi develop 4 WKPs and 2 (two) of these are Patuha and Dieng\r\nhas been fully managed by Geo Dipa Energi. These WKPs namely (1) Pangalengan\r\n(Patuha): 55 MW, (2) Dieng: 60 MW, (3) Candi Umbul Telomoyo, (4) G. Arjuno\r\nWelirang. Geo Dipa Energi have been production with a total capacity of 115 MW.</span></span><span lang=\"EN-US\" style=\"font-size:10.0pt;font-family:&quot;Tw Cen MT&quot;,sans-serif;\r\nmso-bidi-font-family:Arial\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-left:3.4pt;text-align:justify;tab-stops:70.9pt 78.0pt\"><span lang=\"EN-US\" style=\"font-size:10.0pt;font-family:&quot;Tw Cen MT&quot;,sans-serif;\r\nmso-fareast-font-family:&quot;MS PGothic&quot;;mso-bidi-font-family:Arial\"><o:p>&nbsp;</o:p></span></p><p class=\"MsoNormal\" style=\"margin-left:45.95pt;text-align:justify;text-indent:\r\n-42.55pt;tab-stops:38.85pt 47.3pt\"><span lang=\"EN-US\" style=\"font-size:10.0pt;\r\nfont-family:&quot;Tw Cen MT&quot;,sans-serif;mso-fareast-font-family:&quot;MS PGothic&quot;;\r\nmso-bidi-font-family:Arial\">Address :&nbsp; </span><span lang=\"EN-US\" style=\"font-size:10.0pt;\r\nmso-bidi-font-size:11.0pt;font-family:&quot;Tw Cen MT&quot;,sans-serif;mso-fareast-font-family:\r\n&quot;MS PGothic&quot;;mso-bidi-font-family:Arial\">Recapital Building 8<sup>th</sup>\r\nFloor. Jl. Aditiawarman Kav. 55, South Jakarta 12160 - Indonesia</span><span lang=\"EN-US\" style=\"font-size:10.0pt;font-family:&quot;Tw Cen MT&quot;,sans-serif;\r\nmso-fareast-font-family:&quot;MS PGothic&quot;;mso-bidi-font-family:Arial\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-left:45.95pt;text-align:justify;text-indent:\r\n-42.55pt;tab-stops:38.85pt 47.3pt\"><span lang=\"EN-US\" style=\"font-size:10.0pt;\r\nfont-family:&quot;Tw Cen MT&quot;,sans-serif;mso-fareast-font-family:&quot;MS PGothic&quot;;\r\nmso-bidi-font-family:Arial\">Phone&nbsp;&nbsp;&nbsp; :&nbsp; </span><span lang=\"EN-US\" style=\"font-size:10.0pt;\r\nmso-bidi-font-size:11.0pt;font-family:&quot;Tw Cen MT&quot;,sans-serif;mso-fareast-font-family:\r\n&quot;MS PGothic&quot;;mso-bidi-font-family:Arial\">+62 21 7245673</span><span lang=\"EN-US\" style=\"font-size:10.0pt;font-family:&quot;Tw Cen MT&quot;,sans-serif;mso-fareast-font-family:\r\n&quot;MS PGothic&quot;;mso-bidi-font-family:Arial\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-left:45.95pt;text-align:justify;text-indent:\r\n-42.55pt;tab-stops:38.85pt 47.3pt\"><span lang=\"EN-US\" style=\"font-size:10.0pt;\r\nfont-family:&quot;Tw Cen MT&quot;,sans-serif;mso-fareast-font-family:&quot;MS PGothic&quot;;\r\nmso-bidi-font-family:Arial\">Web&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; https://www.geodipa.co.id <o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<span lang=\"EN-US\" style=\"font-size:10.0pt;font-family:&quot;Tw Cen MT&quot;,sans-serif;\r\nmso-fareast-font-family:&quot;MS PGothic&quot;;mso-bidi-font-family:Arial;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">Email&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span lang=\"EN-US\" style=\"font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:&quot;Tw Cen MT&quot;,sans-serif;\r\nmso-fareast-font-family:&quot;MS PGothic&quot;;mso-bidi-font-family:Arial;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">info@geodipa.co.id</span><br></p>', 'GDE.png');

-- --------------------------------------------------------

--
-- Table structure for table `stakeholder_overview`
--

CREATE TABLE `stakeholder_overview` (
  `id_stakeholder_overview` int(11) NOT NULL,
  `text_overview` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stakeholder_overview`
--

INSERT INTO `stakeholder_overview` (`id_stakeholder_overview`, `text_overview`) VALUES
(2, '<p>The stakeholders include Developers, Utility/off taker, Government supporting industry and Financial Institutions, etc. The Government consists of the Ministries and relevant agencies of the energy mineral resources, provinces, regencies and cities are prime stakeholders. The 542 autonomous regions consist of 34 provinces, 410 regencies and 98 municipalities. The Developers are those that are invested and are investing in geothermal Indonesia including 3 State Own Enterprises or its subsidiaries. The Utility is PLN that remains the single off taker/buyer for geothermal developers. The Financial Institutions are lending institutions and equity investors always have a major role to play in any private sector investment, and are significant stakeholders in this process.<br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `studentchapter`
--

CREATE TABLE `studentchapter` (
  `id_student` int(11) NOT NULL,
  `nama_student` varchar(250) NOT NULL,
  `foto_student` varchar(250) NOT NULL,
  `deskripsi_student` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentchapter`
--

INSERT INTO `studentchapter` (`id_student`, `nama_student`, `foto_student`, `deskripsi_student`) VALUES
(2, 'University of Brawijaya', '1200px-Logo_Universitas_Brawijaya_svg1.png', '<p>SC-008<br></p>'),
(3, 'University of Proklamasi 45', 'Logo-universitas-proklamasi-45-UP451.png', '<p>SC - 007<br></p>'),
(4, 'University of Gadjah Mada', 'Logo_Universitas_Gadjah_Mada1.png', '<p>SC - 006<br></p>'),
(5, 'University of Indonesia', 'Makara_UI1.png', 'SC - 005<br>'),
(6, 'University of Trisakti', 'LOGO_UNIVERSITAS_TRISAKTI1.png', '<p>SC - 004<br></p>'),
(7, 'Bandung Institute of Technology', 'Logo_Institut_Teknologi_Bandung1.png', '<p>SC - 003<br></p>'),
(8, 'Swiss German University', '1200px-Logo_Swiss_German_University_HiRes1.jpg', '<p>SC - 002<br></p>'),
(9, 'UPN Veteran', 'Logo_UPNVJ1.png', 'SC - 001<br>');

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE `tender` (
  `id_tender` int(11) NOT NULL,
  `location` varchar(250) NOT NULL,
  `potency` int(11) NOT NULL,
  `development_plan` int(11) NOT NULL,
  `id_workingarea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`id_tender`, `location`, `potency`, `development_plan`, `id_workingarea`) VALUES
(1, 'Samosir - Taput - Dairi', 150, 110, 5),
(3, 'Tapanuli Utara', 147, 20, 7);

-- --------------------------------------------------------

--
-- Table structure for table `theboard`
--

CREATE TABLE `theboard` (
  `id_board` int(11) NOT NULL,
  `foto_board` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theboard`
--

INSERT INTO `theboard` (`id_board`, `foto_board`) VALUES
(1, 'board.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `nama_user` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `foto_user` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `akses` tinyint(1) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `nama_user`, `password`, `foto_user`, `email`, `akses`, `token`) VALUES
(2, 'admin', 'Admistrator', '7001f92347ea212c16d1999298220b9b8796e7fd9c8b6a62ea00651454817d9f45b5d1514651cdec5f9399e924038f5956fb321ec0e522b4b20e0c850196deb1', '', 'fachrimarquez93@gmail.com', 1, 'xRD3NrCHeyYJt9qcOub6QWgkhVBUEIsm1oPdjfXTZM4wL28z5S');

-- --------------------------------------------------------

--
-- Table structure for table `visionmission`
--

CREATE TABLE `visionmission` (
  `id_visi` int(11) NOT NULL,
  `visimisi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visionmission`
--

INSERT INTO `visionmission` (`id_visi`, `visimisi`) VALUES
(1, '<p><span style=\"color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\"><span style=\"font-weight: bolder;\">VISION</span></span></p><p><span style=\"color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\">Being a trusted partner of government, companies and professionals in the geothermal energy business, in encouraging and facilitating the development of Indonesia\'s geothermal potential as an main energy choice in order to support energy security and sustainable national economic growth and ensure the creation of Indonesia as the \"Super Power\" in the geothermal energy utilization.</span></p><p><span style=\"color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\"><span style=\"font-weight: bolder;\">Mission</span><br></span></p><ul style=\"margin-bottom: 10px; list-style: none; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\"><li data-mce-style=\"text-align: justify;\" style=\"list-style: none; text-align: justify;\">Encouraging conducive investment climate of geothermal development through close&nbsp; cooperation and mutual benefit between the government and employers and ensure the creation of government regulations, both national and local that are supportive and aligned.</li></ul><ul style=\"margin-bottom: 10px; list-style: none; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\"><li data-mce-style=\"text-align: justify;\" style=\"list-style: none; text-align: justify;\">Overseeing road map of government in the development of geothermal energy as a new and renewable energy as the implementation of the national energy mix 25/25 policy (25% in 2025).</li></ul><ul style=\"margin-bottom: 10px; list-style: none; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\"><li data-mce-style=\"text-align: justify;\" style=\"list-style: none; text-align: justify;\">To encourage the development of human resources and geothermal energy technology development through cooperation with governments, educational institutions, companies and professional organizations, both national and international, towards the independence of Indonesia as a \"geothermal center of excellence\".</li></ul><ul style=\"margin-bottom: 10px; list-style: none; color: rgb(153, 153, 153); font-family: Raleway, sans-serif; font-size: 12px;\"><li data-mce-style=\"text-align: justify;\" style=\"list-style: none; text-align: justify;\">To socialize and educate the public about the potential, contributions and positive values, to support the creation of conducive conditions in geothermal development efforts.</li></ul>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adsspace`
--
ALTER TABLE `adsspace`
  ADD PRIMARY KEY (`id_iklan`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `category_geothermal_regulation`
--
ALTER TABLE `category_geothermal_regulation`
  ADD PRIMARY KEY (`id_kategori_geothermal`);

--
-- Indexes for table `category_related_regulation`
--
ALTER TABLE `category_related_regulation`
  ADD PRIMARY KEY (`id_kategori_related`);

--
-- Indexes for table `currentprogram`
--
ALTER TABLE `currentprogram`
  ADD PRIMARY KEY (`id_current`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id_district`),
  ADD UNIQUE KEY `nama_district` (`nama_district`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `gallery_details`
--
ALTER TABLE `gallery_details`
  ADD PRIMARY KEY (`id_galeri_detail`),
  ADD KEY `id_galeri` (`id_galeri`);

--
-- Indexes for table `geothermal_business`
--
ALTER TABLE `geothermal_business`
  ADD PRIMARY KEY (`id_business`);

--
-- Indexes for table `geothermal_potency`
--
ALTER TABLE `geothermal_potency`
  ADD PRIMARY KEY (`id_potency`);

--
-- Indexes for table `geothermal_regulation`
--
ALTER TABLE `geothermal_regulation`
  ADD PRIMARY KEY (`id_geothermal_regulation`);

--
-- Indexes for table `geothermal_resources`
--
ALTER TABLE `geothermal_resources`
  ADD PRIMARY KEY (`id_resources`);

--
-- Indexes for table `geothermal_workingarea`
--
ALTER TABLE `geothermal_workingarea`
  ADD PRIMARY KEY (`id_workingarea`);

--
-- Indexes for table `infographics`
--
ALTER TABLE `infographics`
  ADD PRIMARY KEY (`id_infografis`);

--
-- Indexes for table `island`
--
ALTER TABLE `island`
  ADD PRIMARY KEY (`id_island`),
  ADD UNIQUE KEY `nama_island` (`nama_island`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id_library`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `nzte_directory`
--
ALTER TABLE `nzte_directory`
  ADD PRIMARY KEY (`id_directory`);

--
-- Indexes for table `nzte_story`
--
ALTER TABLE `nzte_story`
  ADD PRIMARY KEY (`id_nzte`);

--
-- Indexes for table `objective`
--
ALTER TABLE `objective`
  ADD PRIMARY KEY (`id_objective`);

--
-- Indexes for table `president`
--
ALTER TABLE `president`
  ADD PRIMARY KEY (`id_president`);

--
-- Indexes for table `presidentmessage`
--
ALTER TABLE `presidentmessage`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id_province`),
  ADD UNIQUE KEY `nama_province` (`nama_province`);

--
-- Indexes for table `related_regulation`
--
ALTER TABLE `related_regulation`
  ADD PRIMARY KEY (`id_related_regulation`);

--
-- Indexes for table `sejarah_api`
--
ALTER TABLE `sejarah_api`
  ADD PRIMARY KEY (`id_sejarahapi`);

--
-- Indexes for table `stakeholder`
--
ALTER TABLE `stakeholder`
  ADD PRIMARY KEY (`id_stakeholder`);

--
-- Indexes for table `stakeholder_overview`
--
ALTER TABLE `stakeholder_overview`
  ADD PRIMARY KEY (`id_stakeholder_overview`);

--
-- Indexes for table `studentchapter`
--
ALTER TABLE `studentchapter`
  ADD PRIMARY KEY (`id_student`);

--
-- Indexes for table `tender`
--
ALTER TABLE `tender`
  ADD PRIMARY KEY (`id_tender`);

--
-- Indexes for table `theboard`
--
ALTER TABLE `theboard`
  ADD PRIMARY KEY (`id_board`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `visionmission`
--
ALTER TABLE `visionmission`
  ADD PRIMARY KEY (`id_visi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adsspace`
--
ALTER TABLE `adsspace`
  MODIFY `id_iklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_geothermal_regulation`
--
ALTER TABLE `category_geothermal_regulation`
  MODIFY `id_kategori_geothermal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_related_regulation`
--
ALTER TABLE `category_related_regulation`
  MODIFY `id_kategori_related` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `currentprogram`
--
ALTER TABLE `currentprogram`
  MODIFY `id_current` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id_district` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gallery_details`
--
ALTER TABLE `gallery_details`
  MODIFY `id_galeri_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `geothermal_business`
--
ALTER TABLE `geothermal_business`
  MODIFY `id_business` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `geothermal_potency`
--
ALTER TABLE `geothermal_potency`
  MODIFY `id_potency` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `geothermal_regulation`
--
ALTER TABLE `geothermal_regulation`
  MODIFY `id_geothermal_regulation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `geothermal_resources`
--
ALTER TABLE `geothermal_resources`
  MODIFY `id_resources` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `geothermal_workingarea`
--
ALTER TABLE `geothermal_workingarea`
  MODIFY `id_workingarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `infographics`
--
ALTER TABLE `infographics`
  MODIFY `id_infografis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `island`
--
ALTER TABLE `island`
  MODIFY `id_island` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id_library` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `nzte_directory`
--
ALTER TABLE `nzte_directory`
  MODIFY `id_directory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nzte_story`
--
ALTER TABLE `nzte_story`
  MODIFY `id_nzte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `objective`
--
ALTER TABLE `objective`
  MODIFY `id_objective` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `president`
--
ALTER TABLE `president`
  MODIFY `id_president` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `presidentmessage`
--
ALTER TABLE `presidentmessage`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id_province` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `related_regulation`
--
ALTER TABLE `related_regulation`
  MODIFY `id_related_regulation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sejarah_api`
--
ALTER TABLE `sejarah_api`
  MODIFY `id_sejarahapi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stakeholder`
--
ALTER TABLE `stakeholder`
  MODIFY `id_stakeholder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stakeholder_overview`
--
ALTER TABLE `stakeholder_overview`
  MODIFY `id_stakeholder_overview` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentchapter`
--
ALTER TABLE `studentchapter`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tender`
--
ALTER TABLE `tender`
  MODIFY `id_tender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `theboard`
--
ALTER TABLE `theboard`
  MODIFY `id_board` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visionmission`
--
ALTER TABLE `visionmission`
  MODIFY `id_visi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

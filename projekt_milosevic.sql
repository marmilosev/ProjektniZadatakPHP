-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2022 at 01:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt_milosevic`
--

-- --------------------------------------------------------

--
-- Table structure for table `administratori`
--

CREATE TABLE `administratori` (
  `id_admin` int(11) NOT NULL,
  `ime` varchar(50) DEFAULT NULL,
  `prezime` varchar(50) DEFAULT NULL,
  `korisnicko_ime` varchar(50) DEFAULT NULL,
  `lozinka` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administratori`
--

INSERT INTO `administratori` (`id_admin`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`) VALUES
(1, 'Marija', 'Milošević', 'marija', 'marija123'),
(2, 'Pero', 'Perić', 'pero', 'pero123');

-- --------------------------------------------------------

--
-- Table structure for table `filmovi`
--

CREATE TABLE `filmovi` (
  `id_film` int(11) NOT NULL,
  `naziv` varchar(50) DEFAULT NULL,
  `ocjena` int(10) DEFAULT NULL,
  `redatelj` varchar(50) DEFAULT NULL,
  `glumci` varchar(100) DEFAULT NULL,
  `godina_izlaska` int(10) DEFAULT NULL,
  `sadrzaj` mediumtext DEFAULT NULL,
  `slika` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filmovi`
--

INSERT INTO `filmovi` (`id_film`, `naziv`, `ocjena`, `redatelj`, `glumci`, `godina_izlaska`, `sadrzaj`, `slika`) VALUES
(1, 'Slumdog Millionaire', 5, 'Danny Boyle', 'Dev Patel, Freida Pinto', 2008, 'Priča o Jamalu Maliku, 18-godišnjem siročiću iz predgrađa Mumbaija koji će doživjeti najluđi dan svog života. Dok ga cijela nacija gleda u kvizu Tko želi biti milijunaš? samo je jedno pitanje udaljen od osvajanja milijun rupija. No, u pauzi snimanja između dva kviza Jamala uhite pod optužbom za varanje. Kako bi dijete s ulice moglo toliko znati? U očajničkom pokušaju da dokaže svoju nevinost, Jamal priča priču o svom životu u predgrađu u kojem su odrasli njegov brat i on, njihovim avanturama na ulici, susretima s lokalnim bandama i o djevojci Latiki koju je volio i izgubio...', 'SlumdogMillionaire.jpg'),
(2, 'The Shawshank Redemption', 5, 'Frank Darabont', 'Tim Robbinson, Morgan Freeman', 1994, 'Nakon što je nepravedno optužen zbog ubojstva supruge i njezina ljubavnika, Andy Dufresne je osuđen na dvije doživotne robije i poslan u zloglasni zatvor Shawshank. Tijekom njegove prve noći, barbarsko ponašanje zatvorskih čuvara, predvođenih šefom Byronom Hadleyjem, dovodi do smrti jednog drugog zatvorenika koji je došao isti dan. Nakon mjesec dana, Dufresne se upoznaje s Ellisom Reddingom, znanog kao Red, i njegovim prijateljima. Prijateljstvo počinje nakon što Red nabavlja Dufresneu čekić, koji će on koristiti za svoj hobi skupljanja i oblikovanja kamenja...', 'TheShawshankRedemption.jpg'),
(3, 'Forrest Gump', 5, 'Robert Zemeckis', 'Tom Hanks, Robin Wright Penn', 1994, 'Alabama, 1940-ih. Forrest Gump je mali dječak kojeg odgaja samohrana majka i kojemu je ustanovljen ispodprosječan IQ od samo 75. Zbog toga ga druga djeca zovu idiotom i jedina mu je prijateljica djevojčica Jenny. Kada je Forrest odrastao i otkrio da može brzo trčati, jedan ga je trener upisao na fakultet kako bi mogao trčati u njegovoj momčadi američkog nogometa. U međuvremenu je Jenny napustila Alabamu kako bi postala slavna dok je Forrest unovačen kao vojnik u ratu u Vijetnamu. Tamo je spasio poručnika Dana, koji je ostao paraliziran za kolica, te se s njim vratio u SAD kako bi započeo posao ribara koji lovi škampe...', 'ForrestGump.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administratori`
--
ALTER TABLE `administratori`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `filmovi`
--
ALTER TABLE `filmovi`
  ADD PRIMARY KEY (`id_film`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administratori`
--
ALTER TABLE `administratori`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `filmovi`
--
ALTER TABLE `filmovi`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

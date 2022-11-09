/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.22-MariaDB : Database - purwo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`purwo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `purwo`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

insert  into `admin`(`id`,`nama`,`username`,`password`) values 
(1,'Nurwihadi','nurwihadi@gmail.com','admin'),
(2,'admin','admin','admin');

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notlp` varchar(15) NOT NULL,
  `jmlpesan` int(5) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `nmproduk` varchar(20) NOT NULL,
  `jnskelamin` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `customer` */

insert  into `customer`(`id`,`nama`,`alamat`,`email`,`notlp`,`jmlpesan`,`kategori`,`nmproduk`,`jnskelamin`) values 
(7,'Laora ','Ngadiluwih','laoraimelda@gmail.com','087880130934',1,'Kulit','Wayang Arjuna','Perempuan');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nm_kategori` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kategori` */

insert  into `kategori`(`id_kategori`,`nm_kategori`,`deskripsi`) values 
(1,'Wayang Kayu','Terbuat Dari Kayu Asli Tumbuhan, Ukuran Standart Wayang, Kode WK-01, Bisa Pre - Order Melalui WhatsApp Yang Sudah Tertera Pada Website Kami'),
(2,'Wayang Kulit','Terbuat Dari Kulit Asli, Ukuran Standart Wayang, Kode WK-02, Bisa Pre - Order Melalui WhatsApp Yang Sudah Tertera Pada Website Kami'),
(3,'Wayang Kertas','Terbuat Dari Kertas Berbahan Kardus, Ukuran Standart Wayang, Kode WK-03, Bisa Pre - Order Melalui WhatsApp Yang Sudah Tertera Pada Website Kami');

/*Table structure for table `pengiriman` */

DROP TABLE IF EXISTS `pengiriman`;

CREATE TABLE `pengiriman` (
  `id_kirim` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) NOT NULL,
  `jns_paket` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kirim`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pengiriman` */

insert  into `pengiriman`(`id_kirim`,`gambar`,`jns_paket`) values 
(9,'resi1.png','Express');

/*Table structure for table `produk` */

DROP TABLE IF EXISTS `produk`;

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(255) CHARACTER SET latin1 NOT NULL,
  `deskripsi` text CHARACTER SET latin1 NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) CHARACTER SET latin1 NOT NULL,
  `stok` varchar(255) NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `produk` */

insert  into `produk`(`id_produk`,`nama_produk`,`deskripsi`,`harga`,`gambar`,`stok`) values 
(11,'Wayang Anoman','Bahan : - Kayu -Kulit -Kertas',170000,'450-anoman.png','1'),
(12,'Wayang Bima','Bahan : - Kayu -Kulit -Kertas',235000,'45-bima.png','5'),
(13,'Wayang Srikandi','Bahan : - Kayu -Kulit -Kertas',155000,'srikandi.png','4'),
(14,'Wayang Arjuna','Bahan : - Kayu -Kulit -Kertas',200000,'770-arjuna.png','1'),
(16,'Wayang Pandawa','Bahan : - Kayu -Kulit -Kertas',750000,'303-pandawa.png','2'),
(17,'Wayang Krisna','Bahan : - Kayu -Kulit -Kertas',180000,'728-krisna.png','2');

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) NOT NULL,
  `jns_bayar` varchar(50) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id_transaksi`,`foto`,`jns_bayar`) values 
(6,'bukti1.png','Transfer');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

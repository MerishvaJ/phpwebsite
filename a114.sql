/*
SQLyog v4.07
Host - 5.0.26-community-nt : Database - a045
*********************************************************************
Server version : 5.0.26-community-nt
*/


create database if not exists `a144`;

USE `a144`;

/*Table structure for table `product` */

drop table if exists `product`;

CREATE TABLE `product` (
  `sno` int(11) NOT NULL auto_increment,
  `pname` varchar(9999) default NULL,
  `qty` int(11) default NULL,
  `cat` varchar(89) default NULL,
  `brand` varchar(88) default NULL,
  `desc1` varchar(9999) default NULL,
  `aprice` int(11) default NULL,
  `oprice` int(11) default NULL,
  `img` varchar(333) default NULL,
  `email` varchar(55) default NULL,
  PRIMARY KEY  (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `product` */

insert into `product` values (22,'Oppo Z',7,'Mobile','oppo','3 GB RAM | 32 GB ROM | Expandable Upto 256 GB\r\n16.51 cm (6.5 inch) HD+ Display\r\n13MP + 2MP + 2MP | 8MP Front Camera\r\n5000 mAh Lithium-ion Polymer Battery\r\nQualcomm Snapdragon 460 Processor\r\n90 Hz Punch Hole Display\r\n18W Fast Charging',12578,8759,'uploads/657.jpg',''),(23,'Crystal Furnitech Skyler Engineered Wood Queen Bed  (Finish Color - Dark ELM, Delivery Condition - Knock Down)',5,'Furniture','furniture','Bed Material Subtype: Particle Board\r\nW x H x D: 160 cm x 91.5 cm x 223.5 cm (5 ft 2 in x 3 ft x 7 ft 3 in)\r\nRecommended Mattress Size: 60 x 78\r\nDelivery Condition: Knock Down - Delivered in non-assembled pieces, installation by service partner',17576,11875,'uploads/75656.jpeg','sureshmca8@gmail.com'),(24,'sggd',5,'Fashion','gdfgdf','gdfgdf',1000,600,'uploads/gents-formal-250x250.jpg','sureshmca8@gmail.com');

/*Table structure for table `purchase` */

drop table if exists `purchase`;

CREATE TABLE `purchase` (
  `pcode` int(11) default NULL,
  `pname` varchar(55) default NULL,
  `price` varchar(55) default NULL,
  `addr` varchar(99) default NULL,
  `email` varchar(55) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `purchase` */

insert into `purchase` values (1,'sgdfg','3400','fff,fff,yrtytr,yryrt7,KK,629001,3645645','sureshmca8@gmail.com'),(3,'sgdfg','87','fff,fff,yrtytr,yryrt7,KK,629001,3645645','sureshmca8@gmail.com'),(3,'sgdfg','87','fff,fff,yrtytr,yryrt7,KK,629001,3645645','sureshmca8@gmail.com'),(3,'sgdfg','87','fff,fff,yrtytr,yryrt7,KK,629001,3645645','sureshmca8@gmail.com'),(20,'sgdfg','54','fff,fff,yrtytr,yryrt7,KK,629001,3645645','sureshmca8@gmail.com'),(22,'Oppo Z','8759','fff,fff,yrtytr,yryrt7,KK,629001,3645645','sureshmca8@gmail.com');

/*Table structure for table `user` */

drop table if exists `user`;

CREATE TABLE `user` (
  `name` varchar(55) default NULL,
  `fname` varchar(55) default NULL,
  `place` varchar(55) default NULL,
  `street` varchar(55) default NULL,
  `dist` varchar(55) default NULL,
  `pcode` varchar(55) default NULL,
  `cno` varchar(55) default NULL,
  `email` varchar(55) default NULL,
  `pass` varchar(55) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert into `user` values ('fff','fff','yrtytr','yryrt7','KK','629001','3645645','sureshmca8@gmail.com','aaa'),('Coding','','fsdf','sdf','fsdf','5345','5354','sureshmca8@gmail.com','aaa'),('Coding','','fsdf','sdf','fsdf','5345','5354','sureshmca8@gmail.com','aaa');

/*Table structure for table `vendor` */

drop table if exists `vendor`;

CREATE TABLE `vendor` (
  `name` varchar(55) default NULL,
  `cname` varchar(55) default NULL,
  `place` varchar(55) default NULL,
  `street` varchar(55) default NULL,
  `dist` varchar(55) default NULL,
  `pcode` varchar(55) default NULL,
  `cno` varchar(55) default NULL,
  `email` varchar(55) default NULL,
  `pass` varchar(55) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vendor` */

insert into `vendor` values ('P.Suresh','itech','gfdg','gdfgdf','gdfg','645645','456456','sureshmca8@gmail.com','aaa');

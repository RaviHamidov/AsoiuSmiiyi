-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 10:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smiiyi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_username` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_category` varchar(255) NOT NULL,
  `a_status` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_img` varchar(255) NOT NULL,
  `a_creater_id` varchar(255) NOT NULL,
  `a_creat_date` varchar(255) NOT NULL,
  `a_updater_id` varchar(255) NOT NULL,
  `a_update_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_username`, `a_password`, `a_category`, `a_status`, `a_email`, `a_img`, `a_creater_id`, `a_creat_date`, `a_updater_id`, `a_update_date`) VALUES
(21, 'Fakhri', 'hunter', 'c5ca28f67333e12198c8cd4fa5c60c4a', '1', '1', 'faxri.nifdalizade@gmail.com', '248939_513857_badge.jpg', '20', '2021-09-08 04:04:32', '21', '2022-07-02 18:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `admincategory`
--

CREATE TABLE `admincategory` (
  `a_c_id` int(11) NOT NULL,
  `a_c_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admincategory`
--

INSERT INTO `admincategory` (`a_c_id`, `a_c_value`) VALUES
(1, 'Admin'),
(2, 'Redactor');

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ad_surname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ad_patronimic` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ad_mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ad_scientific_level_id` tinyint(4) NOT NULL,
  `duty` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ad_description` text COLLATE utf8_unicode_ci NOT NULL,
  `ad_img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`ad_id`, `ad_name`, `ad_surname`, `ad_patronimic`, `ad_mail`, `ad_scientific_level_id`, `duty`, `ad_description`, `ad_img`, `status`) VALUES
(4, 'Mustafa', 'Babanl??', 'Baba', 'm.babanli@asoiu.edu.az', 3, 'Rektor', '<p>Mustafa Baba o??lu Babanl?? 1968-ci il fevral ay??n??n 21-d?? Saatl??da m????lliml??r ail??sind?? anadan olub. 1983-c?? ild?? Bak?? ????h??ri 1 sayl?? Fizika-Riyaziyyat t??may??ll?? orta m??kt??bi bitirib, el?? h??min il d?? Kiyev Politexnik ??nstitutuna q??bul olaraq m??h??ndis fizikas?? fak??lt??sinin metallar fizikas?? ixtisas?? ??zr?? t??hsil alma??a ba??lay??b. 1989???cu ild?? Ukrayna Milli Texniki Universitetinin m??h??ndis-fizikas?? fak??lt??sinin metallar fizikas?? ixtisas??n?? f??rql??nm?? diplomu il?? bitirdikd??n sonra g??nc m??t??x??ssis kimi Az??rbaycan Milli Elml??r Akademiyas??n??n ???Kristal??? t??cr??b?? zavodlu x??susi konstruktor b??rosunda m??h??ndis-texnoloq kimi ??m??k f??aliyy??tin?? ba??lay??b.</p><p>Babanl?? 1990-1992-ci ill??rd?? Ukrayna Milli Elml??r Akademiyas??n??n Metallar Fizikas?? ??nstitutunda aspiranturada t??hsil al??b, 1993-c?? ild?? vaxt??ndan ??vv??l, ???B??rk cisiml??rin fizikas????? ixtisas?? ??zr??, ?????frat s??r??tl?? soyudulmu?? TiNiCu ??rintil??rind?? faza ??evirm??l??ri??? m??vzusunda namiz??dlik dissertasiyas??n?? m??dafi?? ed??r??k, fizika-riyaziyyat elml??ri namiz??di elmi d??r??c??si al??b.</p><p>1996-c?? ild??n Az??rbaycan Texniki Universitetinin metallurgiya v?? metal????nasl??q kafedras??nda i??l??yib. ??vv??lc?? assistent, 2001-2010-cu ill??rd?? dosent, 2010-2015-ci ill??rd?? professor v??zif??l??rind?? i??l??yib. 2010-2015-ci ill??rd?? Az??rbaycan Texniki Universitetinin beyn??lxalq ??laq??l??r ??zr?? prorektoru v??zif??sind?? ??al??????b.</p><p>27 fevral 2008-ci ild?? Az??rbaycan Texniki Universitetind?? texnika elml??ri ??zr?? doktorluq dissertasiyas??n?? m??dafi?? ed??r??k ???material????nasl??q??? ixtisas?? ??zr?? texnika elml??ri doktoru alimlik d??r??c??si al??b. Mustafa Babanl?? Az??rbaycan Texniki Universitetinin n??zdind?? D-02.171 Dissertasiya ??uras??n??n, h??m??inin T??hsil Nazirliyi yan??nda Metodiki ??laq??l??ndirm?? ??uras??n??n ??zv??d??r.</p><p>Az??rbaycan Respublikas?? Prezidentinin 3 sentyabr 2015-ci il tarixli S??r??ncam?? il?? Az??rbaycan D??vl??t Neft v?? S??naye Universitetinin rektoru t??yin edilib. Universitet Prezidentl??rinin Beyn??lxalq Assosiasiyas??n??n ??zv??d??r.</p><h4>Elmi i??l??rinin istiqam??ti</h4><ul><li>Massiv amorf ??rintil??rin i??l??nm??si</li><li>Forma yadda??l?? ??rintil??rin i??l??nm??si</li><li>Materiallar??n yeni texnologiyalarla haz??rlanmas??</li><li>Nanoqurulu??lu forma yadda??l?? ??rintil??rin i??l??nm??si</li></ul><p>Professor M. Babanl??n??n ??ap olunmu?? 204 elmi v?? elmi-metodik i??i var. M??dafi??d??n sonra M. Babanl??n??n 124 elmi v?? elmi-metodik i??i, o c??ml??d??n 73 m??qal??, 8 patent, 28 beyn??lxalq v?? respublika elmi-texniki konfrans materiallar??, 4 d??rslik, 4 d??rs v??saiti, 6 monoqrafiya v?? 3 f??nn proqram?? n????r olunub. 1994-c?? ild??n etibar??n Ukrayna Milli Elml??r Akademiyas?? Metallar Fizikas?? ??nstitutu (Kiyev, Ukrayna), Fransa Ali Kimya M??kt??bi (Paris, Fransa), Fransa Elmi Ara??d??rmalar M??rk??zi (Vitri, Fransa), Balear adalar?? Universiteti (Palma de Mayorka, ??spaniya), Frayberq Texniki Universiteti (Frayberq, Almaniya) il?? s??x elmi ??m??kda??l??q edir.</p><h4>Bu ??m??kda??l??q n??tic??sind?? Professor Mustafa Babanl?? a??a????da qeyd edil??n beyn??lxalq elmi layih??l??r?? r??hb??rlik edib:</h4><ul><li><i>???STCU-453??? </i>(1997-1999)</li><li><i>???DNIPRO??? </i>(1999-2002)</li><li><i>???ECONET???</i> (2002-2005)</li><li><i>???STCU-3520???</i> (2006-2009)</li><li><i>???CNRS-ANAS???</i> (2009-2010)</li><li><i>???CNRS-ANAS???</i> (2010-2011)</li><li><i>???STCU-5078???</i> (2010-2011)</li><li><i>???STCU-5595??? </i>(2012-2013)</li></ul>', '52b72d16203bda32c588b54f8307f8a9.jpg', 1),
(5, 'Hamlet', 'H??seynov', 'B??kir', 'hamlet.huseynov@asoiu.edu.az', 2, 'Direktor', '<p>1955-ci il noyabr ay??n??n 1-d?? G??rc??stan Respublikas??, Dmanisi rayonu Saatl?? k??ndind?? anadan olub.</p><p>Ali t??hsilini 1975-ci il??Az??rbaycan D??vl??t Pedaqoji Universitetind?? Riyaziyyat m????llimliyi ixtisas?? ??zr?? alm????d??r,</p><p>1985-ci ild?? ADNA-n??n ???Ali riyaziyyat??? kafedras??nin dosenti kimi elmi f??aliyy??t?? ba??lam????d??r.??</p><p>40-dan ??ox elmi-metodiki i??l??ri,o c??ml??d??n d??rslik v?? d??rs v??saitl??ri ??ap olunub.</p><p>Hal-haz??rda S??naye M????ssis??l??ri ??????il??rinin ??xtisasart??rma v?? Yenid??nhaz??rlanmas?? ??nstitutunun direktorudur.</p><p>??laq????</p><p>Telefon:</p><ul><li>012 498-03-93??</li><li>012 598-29-12??</li><li>012 498-07-57??</li></ul><p>E-mail:</p><ul><li>hamlet.huseynov@asoiu.edu.az</li></ul>', 'a8833ccd97b6c437ad360d3430c2081c.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_ru` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `description_en` longtext DEFAULT NULL,
  `description_ru` longtext DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `file` varchar(255) NOT NULL,
  `img_ext` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `title_en`, `title_ru`, `description`, `description_en`, `description_ru`, `date`, `img`, `file`, `img_ext`, `status`) VALUES
(39, '??mtahana giri?? ballar?? (II M??rh??l??)', '', '', '<p><strong>050608??? Elektroenergetika m??h??ndisliyi ixtisas??n??n???? ??</strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EYgU7rzD5RRNrc9nPBzvEIQBql1qSgoxYScxbO-ZkNp0Kw?e=ZE4fIA\"><strong>Semestr: IV?????????????????????????? Qr.???: EM 2.21</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EUiBoS0ftEBKk_TRu1IDkw8Br6acRu9QuMgTfv3-pAc_Kw?e=hKybyU\"><strong>Semestr: VI?????????????????????????? Qr.???: EEM 3.21</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EWPx6EJNG3xPsn1CszzKBIUBXVXpGzJFnxDk2HaElvcsXw?e=tQGKS0\"><strong>Semestr: VI?????????????????????????? Qr.???: EM?? 2.20.1</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EUq-EHp29MVDnOT_B4nY72EB9AL_VkTJGCxPIY7HBkUmtA?e=MpiCgs\"><strong>Semestr: VI?????????????????????????? Qr.???: EM?? 2.20.2</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EXGG6MaIyjxDqW5Yo1Tq4sABemtxMkNjt7nIQPVgRo9m2Q?e=uBZ66W\"><strong>Semestr: VIII?????????????????????? Qr.???: EM?? 3.20</strong></a><br><strong>050626??? Elektrik m??h??ndisliyi ixtisas??n??n</strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EQnlEagygF9MiE9JpOGfnSIBBpvatCy50D-PWefh_7yzvA?e=va4U6m\"><strong>Semestr:?? VIII?????????????????? Qr.???: EM?? 2.19.1</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EXrBMnpR8apAvi0PcY5-edgBxOz3Io8rEiqWXcWeeVIscA?e=QIa7Dc\"><strong>Semestr:?? VIII?????????????????? Qr.???: EM 2.19.2</strong></a><br><a href=\"http://www.smiiyi.az//tedris/2022/Girishbal/merhele2/Girish_bal_Mer2_EM-3_19.pdf\"><strong>Semestr:?? X?????????????????????????? Qr.???: EM?? 3.19</strong></a><br><strong>050641??? Kimya m??h??ndisliyi ixtisas??n??n</strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/Ea3DwkOVhklHqbMeg-SuHFgB3LfVobry5mKFwKWYkUmjxg?e=17sD5N\"><strong>Semestr?? IV???????????????????????? Qr.????? KM-2.21</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/ERW8BQMjfAFBov-bqUZ8u_cB7OQlaayr_Ofj5bRzsf7oJw?e=MaQuE9\"><strong>Semestr?? VI???????????????????????? Qr.????? KM-2.20</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EaIyCH4Ze9JAgicuoSp1tAEB7zplEN1N6EjHewCnUnpDUQ?e=HofdFn\"><strong>Semestr?? VIII???????????????????? Qr.????? KM-2.19</strong></a><br><strong>050607???Neft- qaz qur??ular?? m??h??ndisliyi ixtisas??n??n</strong><br><a href=\"http://www.smiiyi.az//tedris/2022/Girishbal/merhele2/Girish_bal_Mer2_NQQM-2_19.pdf\"><strong>Semestr:???? VIII???????????????? Qr.???: NQQM 2.19</strong></a></p>', '', '', '2022-06-19', 'e9a91d28a7426d130159694473f42c75.jpg', '', '.png', 1),
(43, '??mtahana giri?? ballar?? (III M??rh??l??)', '', '', '<p><strong>??nformasiya texnologiyalar</strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EVtiqbyNraJPtRf-nKZ5WE0Blur9OqNblV95XFA_con5Hg?e=3QEeRw\">Semestr IV???????????????? Qr.????? ??T 2.21</a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EcrO5UIYDz9NpM21-IPV0WoBNvOx4pXV-OrVOOdzF-PVsg?e=2l0PbZ\">Semestr VI???????????????? Qr.????? ??T 2.20</a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/ERRft1MbyhhClAcR5VCJYBoBaHnqDGyV353x1cOrQcPLtA?e=W6EDbn\">Semestr VIII?????????? Qr.???: ??T 2.19</a><br><strong>??qtisadiyyat</strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EffQcR-rfJRJs8EYfy0mk4oBCco87U44yQj98nL8OAET8w?e=Uoc5Nb\">Semestr IV?????????????? Qr.???: ?? 2.21</a><br><strong>Komp??ter elml??ri</strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EZm81LEaZy9Ml1l1b8n2gSUBunnwmSwMtvHRbAHB5CV8cA?e=FFnEGW\">Semestr IV?????????????????? Qr.????? KE 2.21</a><br><strong>Menecment</strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EauLsFDk1R1Ekv8f_C5kWHgB433Pg33GfRp5MFqTxCC6Gg?e=w8FGvE\">Semestr IV?????????????????????? Qr.???: M 2.21</a><br><strong>S??nayenin t????kili v?? idar?? olunmas??</strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EclmiOWKV0NFk545JuvbbBwBXAhdB6U93BXI07m6JwdFag?e=fLsNf2\">Semestr VI?????????????????????????? Qr.???: ST??O 2.20.1</a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EQiElgF_4LZHmmiMIJdHQrUBeVJXHUmS9_hPiUCAFHIp5A?e=DzkNBA\">Semestr VI?????????????????????????? Qr.???: ST??O 2.20.2</a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EWDSSBBcxzRLh0iHf90m3_4BkR1YTOWq0HYCptgn6mdMHQ?e=O5KEpk\">Semestr VI?????????????????????????? Qr.???: ST??O 2.20.3</a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EXWuas2TuFZMlL0n0bCJRocB_ojTLJpZoJuQHykkLlxnZQ?e=RCWrhg\">Semestr VI?????????????????????????? Qr.????? ST??O-3.21</a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EfQp0G0O0hZCtDWVygnHRrkBAjmVeM9Gg1YYfTeEjpk3Ww?e=FdlJlv\">Semestr VIII?????????????????????? Qr.???: ST??O 3.20</a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EQzhKHc-HkFIrJLNwVe3t_EBaNcFrZSuMNYdNepPXnlv-A?e=NbV7co\">Semestr VIII?????????????????????? Qr.????? ST??O-2.19.1</a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EZwFTudcBDVGvrN1nNey_VABJptUYj88paM3JjXFV8QQmQ?e=61bPNO\">Semestr VIII?????????????????????? Qr.????? ST??O-2.19.2</a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/ERNF6oaKi5ZCgTjxpbjNKfsBqJJBTSi-sr4zqsWsUlP4Eg?e=DlUL7t\">Semestr VIII?????????????????????? Qr.????? ST??O-2.19.3</a></p>', '', '', '2022-07-05', 'daa1189d8ffb19d0a0215c23afa08500.jpg', '', '.png', 1),
(44, 'SM????Y?? s??n??d q??bulu elan edir', '', '', '<h4>Az??rbaycan D??vl??t Neft v?? S??naye Universiteti 2022/2023-c?? t??dris ilind?? a??a????dak?? ixtisaslar ??zr?? ??d??ni??li ??saslarla qiyabi formada t??krar ali t??hsil almaq ??????n s??n??d q??bulu elan edir:</h4><p>??</p><ul><li>050611 ???Geologiya v?? geofizika m??h??ndisliyi???</li><li>050631 ???Neft-qaz m??h??ndisliyi???</li><li>050617 ?????n??aat m??h??ndisliyi??? (yanacaq-energetika kompleksi sah??l??ri ??????n)</li><li>050621 ???Logistika v?? n??qliyyat texnologiyalar?? m??h??ndisliyi???</li><li>050624 ???M??d??n m??h??ndisliyi???</li><li>050614 ???H??yat f??aliyy??tinin t??hl??k??sizliyi m??h??ndisliyi???</li><li>050618 ???Kimya m??h??ndisliyi???</li><li>050628 ???Mexanika m??h??ndisliyi???</li><li>050607 ???Elektrik v?? elektronika m??h??ndisliyi???</li><li>050608 ???Energetika m??h??ndisliyi???</li><li>050509 ???Komp??ter elml??ri???</li><li>050616 ?????nformasiya texnologiyalar?????</li><li>050405 ?????qtisadiyyat???</li><li>050408 ???Menecment???</li><li>050402 ???Biznesin idar?? edilm??si???</li></ul><p>T??krar ali t??hsil ??zr?? s??n??dl??rin q??bulu <strong>01.02.2022-ci</strong> il tarixind??n <strong>29.07.2022-ci</strong> il tarixin??d??k davam ed??c??k. Q??bul olmaq ist??y??nl??r ????nb?? v?? bazar g??nl??rind??n ba??qa saat <strong>10.00-dan 16.00-d??k </strong>Universitetin ??sas binas??na g??l??r??k Q??bul Komissiyas??na s??n??dl??ri r??smi qaydada t??qdim edir v?? ilkin baza t??hsilind??ki t??dris proqram?? il?? almaq ist??diyi ixtisas ??zr?? baza t??hsilinin t??dris proqram?? aras??ndak?? f??rqd??n as??l?? olaraq t??krar ali t??hsil almaq h??ququnu qazan??rlar.<br>T??krar ali t??hsil almaq ist??y??nl??r a??a????dak?? s??n??dl??ri t??qdim etm??lidirl??r:</p><ul><li>Universitet rektorunun ad??na ??riz??;</li><li>Ali t??hsil haqq??nda diplomun notarial qaydada t??sdiql??nmi?? sur??ti (??lav?? il?? birlikd??) v?? iki n??sx?? adi sur??t;</li><li>??m??k kitab??as??ndan ????xar???? (i??l??diyi halda)</li><li>????xsiyy??t v??siq??sinin sur??ti (2 n??sx??);</li><li>3x4 sm. ??l????d?? 3 ??d??d foto????kil;</li><li>Sa??laml??q haqq??nda aray????;</li><li>T??rc??meyi hal;</li><li>Covid-19 vaksin sertifikat??n??n v?? ya Covid-19 immunitet sertifikat??n??n s??r??ti</li></ul><p>1993-c?? ild??n sonra Xarici Ali T??hsil m????ssis??l??rini bitirmi?? m??zunlar ald??qlar?? diplomlar??n Az??rbaycan Respublikas?? ??razisind?? tan??nmas?? v?? ekvivalentliyi bar??d?? T??hsil Nazirliyi t??r??find??n verilmi?? ????had??tnam?? t??qdim etm??lidirl??r.<br><strong>Qeyd:</strong> H??r hans?? bir ixtisas ??zr?? s??n??d ver??n t??l??b?? say?? 7 n??f??rd??n az oldu??u halda h??min ixtisas ??zr?? q??bul prosesi apar??lm??r.</p><p>??nvan: Bak?? ????h??ri, Azadl??q prospekti 20, ADNSU-nun ??sas binas??, I m??rt??b??</p><p><strong>??laq?? telefonlar??:</strong></p><ul><li>(012) 498-03-93</li><li>(012) 498-07-57</li><li>(012)598-29-12</li><li>(070) 498-03-93</li></ul><p><br><i>E-mail:</i> <a href=\"mailto:smiiyi@asoiu.edu.az\">smiiyi@asoiu.edu.az</a><br><i><strong>Q??bul Komissiyas??.</strong></i></p>', '', '', '2022-07-01', 'f619fa69646d1ec1609838aa08b68d7c.jpg', '', '.PNG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `items2`
--

CREATE TABLE `items2` (
  `c_id` int(11) NOT NULL,
  `s_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_patronimic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `s_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_group_id` tinyint(2) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items2`
--

INSERT INTO `items2` (`c_id`, `s_name`, `s_surname`, `s_patronimic`, `s_email`, `s_password`, `s_phone`, `s_group_id`, `status`) VALUES
(1, '??br??him', 'Babayev', 'Z??rqulu', 'ibrahimbabayev79@mail.ru', '275ae97209d0cef115e0a6020b42d696', '077 4848640', 3, 1),
(2, 'Vasif', 'N??hm??dov', 'B??xtiyar', 'vasif.nahmadov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 9570563', 3, 1),
(3, 'Namiq', 'Muxtarov', 'Muxtar', 'namiq_muxtarov@inbox.ru', '275ae97209d0cef115e0a6020b42d696', '055 2257790', 3, 1),
(4, 'M??zh??r', '??br??himov', 'Tofiq', 'mezher.ibrahimov.92@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3504822', 3, 1),
(5, 'Akif', '??sg??rov', 'Osman', 'askarovakif123@inbox.ru', '275ae97209d0cef115e0a6020b42d696', '050 5384148', 3, 1),
(6, 'Ayd??n', '??brahimov', 'Firuddin', 'ayd??n.ibrahimov.2016@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 5918381', 3, 1),
(7, '??l??sg??r', 'H????imzad??', '??l??kb??r', 'alaskar.hashimzada@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 4283633', 3, 1),
(8, 'Zamir', 'Tal??bov', 'Zakir', 'z.talibov.n1981@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 3311382', 3, 1),
(9, '??ahin', 'Abbasov', 'Arif', 'shahin-5@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2563637', 3, 1),
(10, 'V??sal', 'Abbasov', 'Allahverdi', 'vabbasov534@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 2409939', 3, 1),
(11, 'El????n', 'R??sulov', '??smay??l', 'resulov367@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 8868086', 3, 1),
(12, 'Tofiq', 'S??ft??rli', 'Sahil', 'sefterl??t@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2002005', 3, 1),
(13, 'C??sar??t', '??h??dov', 'M??h??bb??t', 'jasarat.ahadov@atet.az', '275ae97209d0cef115e0a6020b42d696', '051 2507838', 3, 1),
(14, 'Fuad', 'Zeynalov', 'El??in', 'fuad.zeynalov257@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 7446009', 4, 1),
(15, 'Emil', '??bd??r??himov', '??bd??r??himov', 'abduraqimovemil@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 3640242', 4, 1),
(16, 'Qo??qar', 'Bax??iyev', 'Mirz??ki??i', 'Qoshqarbaxshiyev972@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 8159696', 4, 1),
(17, 'Ziya', '????r??fzad??', 'Mustafa', 'ziyaashrafzadem@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 7749444', 4, 1),
(18, 'Salik', '??hm??dov', 'N??rman', 'salik.ahmadov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 6401718', 4, 1),
(19, 'S??nan', 'Buludzad??', 'Namiq', 'senen_066@bk.ru', '275ae97209d0cef115e0a6020b42d696', '055 2527327', 4, 1),
(20, 'K??nan', 'M??mm??dli', 'Xeyrulla', 'k-mammadli@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 5221100', 4, 1),
(21, '??ingiz', 'Abdullayev', 'Mahir', 'cingiz87@inbox.ru', '275ae97209d0cef115e0a6020b42d696', '055 2141707', 4, 1),
(22, 'Ramil', 'Hac??yev', 'Hac??baba', '', '275ae97209d0cef115e0a6020b42d696', '050 2256687', 4, 1),
(23, 'Fuad', 'Muradov', 'Da??d??mir', 'Fuad.muradov1988@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 2886598', 4, 1),
(24, 'X??yyam', '??h??dzad??', 'S??f??r??li', 'khayyamzadeh22@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 7182939', 4, 1),
(25, 'Orxan', 'N??sirov', 'Tahir', 'nesirovorxan90@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 8440500', 4, 1),
(26, '??amo', 'N??sirov', 'Tahir', 'nesirov.samo91@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 9991819', 4, 1),
(27, 'Seymur', 'Rzayev', 'Lo??man', 'seymurrzayev@hotmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2102480', 4, 1),
(28, '??zeyir', 'Mikay??lov', 'Arif', 'uzeyirmikayil@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 6880187', 5, 1),
(29, 'Ruslan', '??hm??dov', 'G??l??hm??d', 'Melissa-85@yandex.ru', '275ae97209d0cef115e0a6020b42d696', '050 2088810', 5, 1),
(30, 'Eld??niz', 'M??mm??dov', 'M????daba', 'ELDENIZUGURUM@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2023902', 5, 1),
(31, 'F??rid', '??bilov', 'Nur??ddin', 'ferid11.91@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2463669', 5, 1),
(32, 'El????n', 'H??seynov', '????ms??ddin', 'elshan.official17@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2771717', 5, 1),
(33, 'Elnur', 'Ocaql??', 'Subhi', 'elnurocaqli@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '055 4114456', 5, 1),
(34, 'Seymur', 'Ocaql??', 'S??bhi', 'seymurocaqli@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3459230', 5, 1),
(35, 'Emil', '??kb??rli', 'Rafail', 'akbarov_rafail@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 5441573', 5, 1),
(36, 'Elnur', 'H??s??nov', '????r??f', 'Elnur.gasanov500@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2059889', 5, 1),
(37, 'Elvin', 'M??h??rr??mov', 'Raqub', 'mr.elvin099@bk.ru', '275ae97209d0cef115e0a6020b42d696', '050 2120064', 5, 1),
(38, 'Ayxan', 'M??seyibli', '??hli??t', 'ayxan.91@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 4838108', 5, 1),
(39, 'H??c??r', 'M??mm??dzad??', 'Az??r', 'hajar.mammadzada@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '055 8426498', 5, 1),
(40, 'Elvin', '??hm??dzad??', 'Can??hm??d', 'elvin.axmedzadee@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2891155', 6, 1),
(41, 'B??hruz', 'Ta????zad??', 'Oktay', 'behruz.tagizade.84.@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 5702800', 6, 1),
(42, 'S??fa', '??irinov', 'V??fadar', 'shirinov.safa@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2119117', 6, 1),
(43, 'M??mm??d', 'Rzayev', 'Ayd??n', 'mamed.rzayev1985@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2057052', 6, 1),
(44, 'Tural', 'Abbasov', 'Marif', 'abbaszade087@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2256647', 6, 1),
(45, 'R??st??m', 'Quliyev', 'El????n', 'guliyevrustam.e@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2112964', 6, 1),
(46, 'Taleh', 'Mehral??yev', 'Tal??b', 'mehreliyevtaleh@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3780610', 6, 1),
(47, 'Emil', 'B??d??lov', 'S??rdar', 'badalov.emil88@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 2717777', 6, 1),
(48, 'S??leyman', '????kiyev', '??dal??t', 'Suleyman_Yi@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 8486146', 6, 1),
(49, 'Xaqani', 'Sar??yev', '??kb??r', 'xaqani_sar??yev@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 4986759', 6, 1),
(50, 'V??qar', '??liyev', 'H??s??n', 'ss_651@mail.ru', '275ae97209d0cef115e0a6020b42d696', '077 4223588', 6, 1),
(51, 'Rza', 'Rzazad??', '??slam', 'rzazada24@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 3508888', 6, 1),
(52, '??ahmir', '??ahverdiyev', '??amil', 'shakhmirs@hotmail.com', '275ae97209d0cef115e0a6020b42d696', '050 4167171', 6, 1),
(53, 'F??hmin', '??lizad??', '??l??ddin', 'fecki@list.ru', '275ae97209d0cef115e0a6020b42d696', '055 5871757', 6, 1),
(54, 'Ramin', 'Quluzad??', 'Rafiq', 'ramin.guluzada@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '055 7065201', 6, 1),
(55, 'R??f??t', 'Babayev', '??sif', 'rufat2333112@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2333112', 6, 1),
(56, 'R??sul', 'S??f??rov', 'Cabir', 'resul_seferov_2015@mail.ru', '275ae97209d0cef115e0a6020b42d696', '077 5217926', 6, 1),
(57, 'F??rid', 'Eynalov', '??ingiz', 'eynalovfarid@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 2959753', 6, 1),
(58, '??lkin', 'H??seynov', 'Azad', 'ilkinhuseynli@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 3722000', 6, 1),
(59, 'R??hman', 'Yahyayev', '??li', 'yahyayev.rahman@mail.ru', '275ae97209d0cef115e0a6020b42d696', '077 2177878', 6, 1),
(60, 'R????ad', 'C??f??rov', '??amil', '', '275ae97209d0cef115e0a6020b42d696', '055 8389966', 7, 1),
(61, 'F??rid', '??liyev', 'Telman', 'ferid9394@list.ru', '275ae97209d0cef115e0a6020b42d696', '055 9423223', 7, 1),
(62, 'P??rviz', 'C??f??rov', 'Sahib', 'ceferovperviz99@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2030331', 7, 1),
(63, 'Teymur', 'R??st??mov', 'Mejlum', 'Rustamovteymur@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 6275097', 7, 1),
(64, 'Cavad', 'C??f??rov', 'C??f??r', 'cavad-ceferov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 4911295', 7, 1),
(65, 'Zaur', '??ir??liyev', 'M??h??mm??d??li', 'Zaurshireliyev@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2438383', 7, 1),
(66, 'Abdulla', '??sayev', 'Vidadi', 'Abdulla.isayev@azerenerji.gov.az', '275ae97209d0cef115e0a6020b42d696', '050 2557359', 7, 1),
(67, 'Amil', '??iraqov', 'Fazil', 'ciraqov89@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 8528866', 7, 1),
(68, 'Sabit', 'Quluzad??', '??l??kb??r', 'quluzadesabit@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2548150', 7, 1),
(69, 'S??buhi', 'H??s??nzad??', 'C??mil', 'hasanzadeh.sabuhi@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 5834919', 7, 1),
(70, '??lia??a', 'Quliyev', 'Natiq', 'aliaga.ip6@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2005464', 7, 1),
(71, 'V??qar', 'M??mm??dov', '??mirxan', 'Vuqar_148@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 7420505', 7, 1),
(72, 'S??nan', 'Muradov', '??flatun', 'sanan_muradov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 6864440', 7, 1),
(73, 'Orxan', 'M??mm??dov', '??nqilab', 'as_orxan@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 3333741', 7, 1),
(74, 'S??nan', 'S??leymanov', 'S??bhan', 'senan.suleymanov.2019@bk.ru', '275ae97209d0cef115e0a6020b42d696', '050 2954758', 7, 1),
(75, 'R??him', 'H??seynli', 'Qurban', 'rehim-93@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 6020620', 7, 1),
(76, 'B??hruz', 'K??rimov', 'Firq??nd', 'kerimov1984@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2113496', 7, 1),
(77, 'Samir', 'Almaszad??', 'Hac??a??a', 'Samir_Almas@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2123366', 7, 1),
(78, 'El??ad', 'Bayramov', 'N??bi', 'elsad_bayramov_75@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2202868', 7, 1),
(79, 'El??in', 'Kaz??mov', 'Sahib', '', '275ae97209d0cef115e0a6020b42d696', '055 2036606', 7, 1),
(80, 'N??c??f', 'M??mm??dov', 'M??mm??d', 'memmedoqlu70@gmail.ru', '275ae97209d0cef115e0a6020b42d696', '050 3180463', 7, 1),
(81, 'S??bin??', '??liyeva', '??liy??ddin', 'az-lab@yandex.ru', '275ae97209d0cef115e0a6020b42d696', '050 2504010', 7, 1),
(82, 'V??qar', '??hm??dov', 'C??bray??l', 'v.ahmadov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2202868', 7, 1),
(83, 'Asif', 'M??mm??dov      Mammadov', 'Vaqif', 'asif.v.mammadov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2951267', 8, 1),
(84, 'El????n', 'Allahverdiyev', 'V??liy??ddin', 'elshanallahverdi@hotmail.com', '275ae97209d0cef115e0a6020b42d696', '050 6252126', 8, 1),
(85, 'V??qar', 'M??mm??dov', 'Z??lfiqar', 'vugarmammadov157@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 6401199', 8, 1),
(86, '??lkin', 'Novruzov', 'M??h??mm??d', 'ilkin054@hotmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2656771', 8, 1),
(87, 'Elvin', 'M??mm??dov      Mammadov', 'Elman', 'elvinmemmedov@list.ru', '275ae97209d0cef115e0a6020b42d696', '051 9005767', 8, 1),
(88, 'Cavan??ir', 'H??seynsoy', '??li', 'guseynsoy@inbox.ru', '275ae97209d0cef115e0a6020b42d696', '055 9903430', 8, 1),
(89, 'Mehman', 'H??s??nov', 'F??xr??ddin', 'hesenovmehman@hotmail.com', '275ae97209d0cef115e0a6020b42d696', '050 4003425', 8, 1),
(90, 'Emil', 'Xasiyev', 'N??var', 'emilxasiyev323@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2559878', 8, 1),
(91, 'T??hmiraz', 'Mejdunov', 'Alim', 'tahmiraz.mejdunov002@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2280102', 8, 1),
(92, 'Yunis', 'Haqverdiyev', 'M??z??ff??r', 'y.m.haqverdiyev@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 7160628', 8, 1),
(93, 'Emin', 'C??lilov', 'Ay??ddin', 'emincelilov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 4580150', 8, 1),
(94, 'Ayg??l', 'Ba????rova', 'Saday', 'aaygul1025@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 7199888', 9, 1),
(95, '??li', 'H??s??nov', 'Q??dr??t', '', '275ae97209d0cef115e0a6020b42d696', '055 4800967', 9, 1),
(96, 'V??qar', 'Mirz??yev', 'B??y??ka??a', 'vugar.mirzayev.hse@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2906880', 9, 1),
(97, 'R????ad', '??kb??rli', 'H??s??n', 'rashad.akberli@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 5833292', 9, 1),
(98, 'R??hman', 'M??mm??dov', 'K??rim', 'rehman.memmedov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '077 6152570', 9, 1),
(99, '??ahin', 'C??f??rov', 'Novruz', 'cafarov.shahin@hotmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3388855', 9, 1),
(100, 'H??mid', 'H??midli', 'Ya??ar', 'Hamid.Hamidli1992@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 7372445', 9, 1),
(101, 'Nicat', 'C??bray??lov', '??dal??t', 'nicat.cebrayilov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 6779954', 9, 1),
(102, 'N??simi', 'Qurbanov', 'Rahim', 'nasimi.gurbanov88@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2805585', 9, 1),
(103, 'Kamran', 'H??s??nov', '??lyaz', 'kmrnhsnv9191@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 4569191', 9, 1),
(104, 'T??briz', 'A??ayev', 'N??sir', 'tebriz_agazade@mail.ru', '275ae97209d0cef115e0a6020b42d696', '077 4741424', 9, 1),
(105, 'Kamal', '??lizad??', 'Zahid', 'alizadakamalzahid@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 5552922', 10, 1),
(106, 'Eltun', 'H??s??nov', 'Xur??ud', 'hesenlieltun@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 8857610', 10, 1),
(107, '??slam', 'Quliyev', 'Az??r', 'islam.guliyev@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '050 3653330', 10, 1),
(108, 'X??yal', '??lyasov', 'Akif', 'xeyalilyasov11121989@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 8938586', 10, 1),
(109, 'Emil', '??s??dov', 'Dolxan', 'emilesedov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 5934344', 10, 1),
(110, 'Elman', '??brahimov', 'El??ad', 'elman.imov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2651765', 10, 1),
(111, 'Adil', 'Al??yev', 'Telman', 'blAckCASPIAN@YAHOO.com', '275ae97209d0cef115e0a6020b42d696', '051 7898868', 12, 1),
(112, 'Nurlan ', '??mirzad??', 'Ziyad??li', 'Nurlan.Amirzadeh.mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 9999041', 12, 1),
(113, 'Ucal', 'H??seynov', 'V??sal', 'ucal.huseynov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 4121011', 12, 1),
(114, 'Orxan', 'Musayev ', 'Namiq', 'orxan.musayev@list.ru', '275ae97209d0cef115e0a6020b42d696', '050 5681235', 12, 1),
(115, 'G??ley????', 'H??seynova ', '??li', 'guleyshehuseynova@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 8547075', 12, 1),
(116, 'Qo??qar', 'H??s??nov', '??ahbaz', 'qosqar.haanov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 9389541', 12, 1),
(117, '??li', 'Q??nb??rov', 'Rafiq', 'Ali.qanbarov@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '055 2111449', 12, 1),
(118, 'V??sal', 'H??seynov', '??smi??li', 'vusal.huseynov120@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 9480006', 12, 1),
(119, 'Allahyar', 'Zeynalov', 'F??rman', 'allahyar -zeynalov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 5313330', 12, 1),
(120, 'S??rdar', 'Quliyev', 'Sultan', 'sardar.s.quliyev@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 2409443', 12, 1),
(121, 'R??him', '??hm??dov', '??lham', 'Rahim.Ahmedov 92@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2832310', 12, 1),
(122, 'P??nah', 'Bayramov', 'Bayram', 'bayramov.P??nah94@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 9878069', 12, 1),
(123, 'L??tif', 'Na????yev', 'Yusif', 'nagiyev -letif@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 6963646', 12, 1),
(124, 'H??seyin', 'H??seyinov', 'Namik', 'huseyinovhuseyin090gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 5757145', 12, 1),
(125, 'H??mid', 'Ataki??iyev', 'Rahib', 'Hemidatakishiyev@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '055 6974980', 13, 1),
(126, 'Mehman', 'H??seynov', '??li', 'Mehman.e.huseynov@socar.az', '275ae97209d0cef115e0a6020b42d696', '070 2772701', 13, 1),
(127, 'Ramin', 'Na????zad??', 'S??rdar', '', '275ae97209d0cef115e0a6020b42d696', '055 5019292', 13, 1),
(128, 'M??zahir', 'Dada??zad??', 'T??rlan', 'mezahir.dadashzade@hotmail.com', '275ae97209d0cef115e0a6020b42d696', '055 5869806', 13, 1),
(129, 'V??sal ', 'Qurbanov ', 'X??lil', 'gvusal@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2256805', 13, 1),
(130, 'El????n', 'Zeynalov ', 'Musa', 'elshen.zeynalov.1993@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 3103921', 13, 1),
(131, 'Eltun ', 'Q??ribov ', 'Azad ', 'justeltun@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 7125565', 13, 1),
(132, 'Ayxan', '??s??dullayev', 'Madar', 'Aykhan.Asadullayev@saffron.az', '275ae97209d0cef115e0a6020b42d696', '050 4200576', 13, 1),
(133, 'Amaliya', 'Qurbanova', 'Arif', 'amaliya.qurbanova@socar.az', '275ae97209d0cef115e0a6020b42d696', '055 2039757', 13, 1),
(134, 'M??lah??t', 'Qurbanova', 'R??st??m', 'qurbanova1979@inbox.ru     ', '275ae97209d0cef115e0a6020b42d696', '055 7338582', 13, 1),
(135, 'R??f??t', '??sg??rov', 'Arzu', 'rufataskerov1993@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2835704', 13, 1),
(136, 'F??rhad', 'V??lili', '??smay??l', 'Valili.farkhad@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2050817', 13, 1),
(137, 'Sad??q', 'B??d??lzad??', 'Xaqani', 'sadiq.badalzade@arpii.gov.az', '275ae97209d0cef115e0a6020b42d696', '050 5747414', 13, 1),
(138, 'Hikm??t', 'M??mm??dov', 'B??yxuda', 'hikmetmemmedov1995@gmail.com', '275ae97209d0cef115e0a6020b42d696', '0 ', 14, 1),
(139, 'Fidan', 'B??d??vi', 'Namus', 'fidan.badavi@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2847060', 14, 1),
(140, 'Sabir', 'M??mm??dov', 'Fuad', 'Sabir190785@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2706464', 14, 1),
(141, 'Beyr??k', 'Mirz??li', 'P??nah', '', '275ae97209d0cef115e0a6020b42d696', '070 2597955', 14, 1),
(142, 'V??qar', 'Quliyev', '????ad??t', 'gulievugar@outlook.com', '275ae97209d0cef115e0a6020b42d696', '055 5819653', 14, 1),
(143, 'Orxan', 'M??mm??dli', 'Etibar', 'mamedlii@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 4030393', 14, 1),
(144, 'Xan??m', '??l??kb??rova', 'R??hman', 'alekperova965@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3714055', 14, 1),
(145, 'Samir', 'N??biyev', 'Adil', 'snebiyev@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3811822', 14, 1),
(146, 'Elnur', 'H??s??nzad??', 'Firuz', 'Elnurfh@code.edu.az', '275ae97209d0cef115e0a6020b42d696', '055 7033641', 14, 1),
(147, 'Cavid', 'H??s??nov', 'R??st??m', 'h.cavid@gmail.com', '275ae97209d0cef115e0a6020b42d696', '077 3203023', 14, 1),
(148, '??ntizar', 'Azadov', '??lixan', 'azadova.intizar@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2066072', 14, 1),
(149, 'Namiq', 'Musayev', 'M??h??rr??m', 'musayevnamiq@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 7635081', 14, 1),
(150, '??lk??r', '??liyeva', '??libala', 'ulker644@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 5738934', 14, 1),
(151, 'Z??rb??li', 'Badamov', 'Az??rovi??', 'zerbeli.badamov@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 2882003', 14, 1),
(152, 'Elxan', 'Tamirazov', 'Cambul', 'etamirazov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 9141272', 14, 1),
(153, 'Firuz??', 'S??m??ndova', 'Firuz', 'ibrahimovaf91@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 6539053', 15, 1),
(154, 'Ceyhun', 'M??rs??lov', 'H??mid', 'ceyhun.mursalov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2171010', 15, 1),
(155, 'Elnur', 'N??biyev', 'K??rim', 'nabiyev.elnur1995@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 7287819', 15, 1),
(156, 'R??sul', 'R??sulzad??', 'Yusif', 'rassulzadeh@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 2004613', 15, 1),
(157, 'S??buhi', 'M??mm??dov', '??amo', 'sabuhi.mammadov01@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3619536', 15, 1),
(158, 'K??nan', 'Salayev', 'K??nan', 'rssalayev@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2312396', 15, 1),
(159, 'Cahangir', 'R??himov', 'Qafar', 'jahangir.barristen@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 9142021', 16, 1),
(160, 'L??man', 'H??t??mova', '??ahin', 'hatamova.90@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 6920699', 16, 1),
(161, '??hm??d', '??hm??dli', '??slam', 'ehmedehmedli095@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 8643502', 16, 1),
(162, 'Af??t', 'Xal??qova', 'Qacar', 'afatxaliq@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 8898874', 17, 1),
(163, 'Nigar', '??liyeva', 'R??sul', 'nigar.resulzade1992@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 7982548', 17, 1),
(164, 'M??nsur', '??eydayev', 'Eyvaz', 'sheydayev-m@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 8555678', 17, 1),
(165, 'R??v????n', '??albuzov', 'Sufi', 'shalbuzov83@list.ru', '275ae97209d0cef115e0a6020b42d696', '050 5816463', 17, 1),
(166, 'Elzamin', 'C??lilov', 'Tahir', 'elismamadov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 2822777', 17, 1),
(167, 'R??f??t', 'Qurbanov', 'Adil', 'qurbanovrufet397@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 5481158', 17, 1),
(168, 'Elvin', 'Ba????rov ', 'Eldar', 'elvin_bagirov_87@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 5585850', 17, 1),
(169, 'S??rxan', 'M??mm??dov', 'Ayd??n', 'serxan_memmedov_89@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 5504257', 17, 1),
(170, 'Ceyhun', 'Yusifov', 'Elman', 'ceyhunyusifov982@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 3662233', 17, 1),
(171, 'V??qar', 'Hac??yev', '??hm??d', 'vuqar-socar@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 5103626', 17, 1),
(172, 'F??qani', 'A??urov', 'F??zuli', 'asurovfeqani@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 6446008', 17, 1),
(173, '????r??f', 'M??mm??dzad??', 'N??c??f', 'esrefbanu97@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 5152143', 17, 1),
(174, 'S??nan', 'M??mm??dli', 'Ramiz', 'sanan.mammadli.92@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 4646655', 17, 1),
(175, 'Sevinc', '??l??sg??rova', 'Ramazan', 'servoserbo@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 8944521', 17, 1),
(176, 'Asiman', '????liyev', 'Az??r', 'asiman3498@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 5588091', 17, 1),
(177, 'Tural', 'Yaraliyev', 'Maarif', 'yaraliyevtural@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 8787868', 17, 1),
(178, 'Seymur', 'K??rimli', 'Teymur', 'Kerimlseymur89@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 5131038', 18, 1),
(179, 'El??in', 'Babayev', 'Fazil', 'babayevelcin@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '055 7615957', 18, 1),
(180, 'Elmir', 'Qurbanl?? ', 'Rauf', 'elmirqurbanli3@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 7150670', 18, 1),
(181, 'M??bariz', 'H??s??n??liyev', 'Kamandar', 'mubariz_h@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 8416645', 18, 1),
(182, 'K??nan', 'Sar??yev', 'Dilman', 'k.senan@mail.ru', '275ae97209d0cef115e0a6020b42d696', '077 5663882', 18, 1),
(183, '??lfad B??y', 'Babacanov', 'G??l??li', 'ilfad_babacan@inbox.ru', '275ae97209d0cef115e0a6020b42d696', '055 5933674', 18, 1),
(184, 'Tural', 'Balaki??iyev', '??b??lf??z', 'turalseker@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 5370225', 18, 1),
(185, '??hm??d', '??hm??dov', '??yyub', 'ahmedahmedov36@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 3691144', 18, 1),
(186, 'Ayg??n', 'X??lilova', 'Qnyaz', 'aygun844@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 7700006', 18, 1),
(187, 'Ziyatxan', 'Babacanov', 'G??l??li', 'babacanov89@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 5367734', 18, 1),
(188, 'Orxan', 'M??mm??dov', 'Tofiq', 'mamedovorxan4145@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 6224145', 19, 1),
(189, 'Elvin', '??liyev', 'M??h??rr??m', 'elvin.aliyev333@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2828900', 19, 1),
(190, 'Elmir', 'H??s??nov', 'Emin', 'Elmir-15@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 4422562', 19, 1),
(191, 'Ayxan', 'M??mm??dli', 'Qalib', 'mammedli.ayxan23@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 9795937', 19, 1),
(192, 'Orxan', 'H??mm??tzad??', 'P??rviz', 'orxan.H??mmetzade@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '055 4109015', 19, 1),
(193, 'Abbas', 'Allahverdiyev', '??liq??mz??', 'abbas127a1@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 3290991', 19, 1),
(194, 'Ruslan', 'Sad??qov', 'R??v????n', 'ruslan_sad??qov666@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 3662466', 19, 1),
(195, 'V??sal', 'Muxtarof', 'Elman', 'Vusal_bbu@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 5553063', 19, 1),
(196, 'Seymur', '??l??kb??rov', 'R??hman', 'seymurelekberov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 5008575', 19, 1),
(197, 'Oqtay', 'Mikay??lov', 'Rafail', 'oqtay.m@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 8431507', 19, 1),
(198, 'R??yal', '??brahimov', '??zeyir', 'royal199629@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3701802', 19, 1),
(199, 'F??rid', 'P??nahov', 'M??zahir', 'ferid-penahov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 6781404', 19, 1),
(200, 'Leyla', 'Abu??ova', 'M????fiq', 'leyla.abusova.96@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 3303301', 19, 1),
(201, 'G??nay', 'Selimova', 'Qoca', 'gunay.selimova@socar.az', '275ae97209d0cef115e0a6020b42d696', '077 2440595', 19, 1),
(202, 'Araz', 'H??midov', 'Ayaz', 'arazhemidov15@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3220077', 19, 1),
(203, 'Fatim??', 'C??f??rova', 'M??zahir', 'fatima.cafarova.95@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 3220077', 19, 1),
(204, 'Nicat', '??liyev', 'M??zahir', 'n.aliyev52@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 7074307', 19, 1),
(205, 'Emil', '??l??sk??rov', 'Semur', 'elesgerovemil60@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2333750', 19, 1),
(206, 'Bahar', 'Ab????ova', 'Altay', 'baharabisova@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 3330164', 19, 1),
(207, 'Arzu', 'Muradl??', 'Zakir', 'arzumuradli82@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3818835', 19, 1),
(208, '??li', 'Q??dirov', '????raf??t', 'ali.gadirov02@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 3523735', 19, 1),
(209, 'Elton', 'S??leymanov', 'S??n??tkar', '', '275ae97209d0cef115e0a6020b42d696', '051 5550707', 20, 1),
(210, 'N??rgiz ', 'C??f??rova ', 'P??rviz ', 'nergizazeri@rambler.ru ', '275ae97209d0cef115e0a6020b42d696', '070 5127007', 20, 1),
(211, ' ??lk??r ', 'H??s??nova', 'Mehman ', '', '275ae97209d0cef115e0a6020b42d696', '051 3306300', 20, 1),
(212, ' Lami?? ', '??ahv??l??dova', 'M??h??b??t ', '', '275ae97209d0cef115e0a6020b42d696', '055 8209950', 20, 1),
(213, 'M??h??mm??d', 'Bayramov', 'Vaqif', 'mehemmedbayramov2@gmail.com ', '275ae97209d0cef115e0a6020b42d696', '051 9295664', 20, 1),
(214, '????hriyar', '??liyev ', 'Yusif', 'shehriyar-1982@mail.ru ', '275ae97209d0cef115e0a6020b42d696', '055 6122299', 20, 1),
(215, 'G??nay', 'Cavadzad??', 'Mahir', 'gunaycavadzade@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 8419082', 20, 1),
(216, 'Aynur', 'Ramazanova', 'Muxtar', 'aynur.ramazanova@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 4458656', 20, 1),
(217, 'Q??z??nf??r', 'Kaz??mov', 'Qinyaz', 'qezenferkazimov@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '055 6180282', 20, 1),
(218, 'X??yal??', 'Novruzova', 'Nizami', 'xeyalenovruzova@socar.az', '275ae97209d0cef115e0a6020b42d696', '055 7890151', 20, 1),
(219, 'F??rid', 'Orucov', 'Temraz', 'orujov80@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2258283', 20, 1),
(220, 'G??nay', 'Quliyeva', 'Yusif', 'gunayquliyeva.87@mail.ru', '275ae97209d0cef115e0a6020b42d696', '077 2332033', 20, 1),
(221, 'Zaur', '??zimli', 'Akif', 'pienaa@mail.ru', '275ae97209d0cef115e0a6020b42d696', '077 7677037', 20, 1),
(222, 'El??in', '??m??nullayev', '??saq', 'Amanullayev@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2794221', 20, 1),
(223, 'Aqil', 'H??seynov', 'Nizami', 'aqil.huseynov@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 5774988', 20, 1),
(224, 'S??kin??', '????k??rova', 'Qa??ay', 'sukurovasekine@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 2690887', 20, 1),
(225, 'Zeyn??b', 'Diniyeva', 'Qa??ay', 'zeyneb_dini@list.ru', '275ae97209d0cef115e0a6020b42d696', '050 8816241', 20, 1),
(226, 'Arzu', 'Musayeva', '??smay??l', '', '275ae97209d0cef115e0a6020b42d696', '055 2185710', 20, 1),
(227, '??inar??', 'Cabbarl??', '??saq', 'cinaraayhan@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 5787573', 20, 1),
(228, 'G??nay', 'Abdinova', 'Ramiz', '', '275ae97209d0cef115e0a6020b42d696', '050 4445080', 20, 1),
(229, 'Aynur', 'M??s??vi', 'Nadir', '', '275ae97209d0cef115e0a6020b42d696', '050 5745656', 20, 1),
(230, 'Mir????mil', 'Seyidov', 'Mirsakit', 'mirshamil.seyidzadeh@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2111614', 20, 1),
(231, 'M??mm??d', 'M??mm??dov', 'S??leyman', 'mr.memo@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 5566663', 20, 1),
(232, 'F??rrux', 'M??mm??dov', 'Rafael', 'Mamedov.Farrukh@yandex.com', '275ae97209d0cef115e0a6020b42d696', '050 4027721', 21, 1),
(233, 'M??h??mm??d', 'Quliyev', 'Af??r', 'm.quliyev56@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 7565626', 21, 1),
(234, 'Hafiz', 'M??mm??dov', 'H??seyn', 'hafizmammadov1980@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 8989866', 21, 1),
(235, 'Aqil', '??smay??lov', '??man', '7Aqil.ismayilov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 4607032', 21, 1),
(236, 'Az??r', '??smay??lov', '??man', 'azer.ismayilov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 4217791', 21, 1),
(237, 'Anar', 'Z??rg??rov', 'C??m????d', '', '275ae97209d0cef115e0a6020b42d696', '055 2104094', 21, 1),
(238, 'Ehram', 'Zeynalov', 'B??hruz', 'ezeynalov@socar-Aqs.com', '275ae97209d0cef115e0a6020b42d696', '055 9095207', 21, 1),
(239, 'Elnur', 'M??mm??dzad??', 'Eldar', 'm.elnur95gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 6056835', 21, 1),
(240, 'R??fael', 'M??mm??dov', '??v??z', 'rafaelmamedow@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 7444724', 21, 1),
(241, '??rad??', 'M??h??mm??dova', 'M??h??mm??d', 'irada41@yandex.ru', '275ae97209d0cef115e0a6020b42d696', '050 6201207', 21, 1),
(242, 'Habil', 'Quliyev', 'Baba', 'habil.guliyev@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 2254115', 21, 1),
(243, 'Q??dr??t', 'Quliyev', 'Qulu', 'quliyevqudret@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2087477', 21, 1),
(244, 'El????n', 'Mirz??yev', '??amil', 'elshenhrac@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3104872', 21, 1),
(245, 'Ceyhun', 'Mirz??zad??', 'Ziyaf??t', 'c.mirzazada@Gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 5433414', 21, 1),
(246, '??lifa??a', 'Qas??mov', 'R??him', 'ali-qasimov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2030722', 21, 1),
(247, 'Elnur', 'Babayev', 'M??h??mm??d', 'e.b80@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 3161750', 21, 1),
(248, 'Xan??m', 'Na????yeva', '??lqar', 'naghiyevakhanim@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 7942454', 21, 1),
(249, 'Az??r', 'Sayadov', 'S??leyman', 'sayadov.azer@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 6362121', 21, 1),
(250, 'Emin', 'N??biyev', '??limirz??', 'emin.nabiyev1991@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 8286496', 22, 1),
(251, 'Murad??li', 'Murtuzov', '??s??d', 'murtuzovmuradali@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 4833339', 22, 1),
(252, 'Asif', '??smayilov', 'Arif', 'asif_992@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 7875777', 22, 1),
(253, 'Ramil', 'H??seynov', 'R??sul', 'ramil.huseynov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 9066968', 22, 1),
(254, 'Orxan', 'Sad??ql??', '??sg??r', 'orkhan.sadigli@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 4800767', 22, 1),
(255, 'Samir', 'K??rimov', 'Asim', 'samir_kerimov@mail.ru ', '275ae97209d0cef115e0a6020b42d696', '070 5775747', 22, 1),
(256, 'Zaur', 'Qurbanov', 'Qurban', 'qurbanovzaur1986@mail.ru ', '275ae97209d0cef115e0a6020b42d696', '050 8713540', 22, 1),
(257, 'D??yan??t', 'Qurbanov', 'Rafiq', 'deyanetg@mail.ru ', '275ae97209d0cef115e0a6020b42d696', '050 3001900', 22, 1),
(258, '??v??z', '??zizb??yli', 'Vahid', 'evez.ezizbey@gmail.com ', '275ae97209d0cef115e0a6020b42d696', '051 5377281', 22, 1),
(259, 'Polad', '??liyev', '??dris', 'polad.aliyev1982@mail.ru ', '275ae97209d0cef115e0a6020b42d696', '055 7679897', 22, 1),
(260, 'Zahid', 'M??n??fov', 'M??mm??dba????r', 'Zahid-manafov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 9644646', 22, 1),
(261, 'M??tl??b', 'N??sirov', '??smixan', 'metlebnesirov92@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 9994554', 22, 1),
(262, 'G??l??r', 'N??c??fova', 'N??sib', 'guler.necefova.92@mail.ru', '275ae97209d0cef115e0a6020b42d696', '077 2551317', 22, 1),
(263, 'Nicat', 'Mehdiyev', 'Yaqub', 'mmehtiyev@bk.ru', '275ae97209d0cef115e0a6020b42d696', '077 3313912', 22, 1),
(264, 'Siruz', '??s??dov', 'Famil', 'siruz.asadzade@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 2880300', 22, 1),
(265, '??fqan', 'Pir??liyev', 'Xeyrulla', 'pireliyevefqan@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 8870587', 22, 1),
(266, 'F??rid', '??sayev', 'Qalib', 'isayev.farid@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 4371329', 22, 1),
(267, 'Elg??n', '??hm??dov', 'M??mm??da??a', 'elqun_axmedov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 4648488', 22, 1),
(268, 'Mahmud', 'H??seynov', 'M??bariz', 'mahmud_huseynli@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2067359', 22, 1),
(269, 'Yusif', 'Mirz??yev', '??ahin', 'yusifmirzayev@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 4096952', 22, 1),
(270, 'Cavad', 'Mustafayev', 'G??lmal??', 'cavad-1986@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 2650086', 22, 1),
(271, 'Yunis', '??bilov', 'Eldar', 'yunis_ebilov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 9275357', 22, 1),
(272, 'Q??dir', 'Eminov', '??lqar', 'qadireminov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 8469388', 22, 1),
(273, ' Orxan  ', 'M??mm??dov ', 'Rauf', 'orxan685@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 3535730', 23, 1),
(274, ' G??nel ', 'Hac??yeva', 'R??v????n ', 'gunel-haciyeva-84@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 9587848', 23, 1),
(275, ' Ayg??n ', 'V??liyeva', 'C??m????d ', 'aygun.valiyeva@socar.az', '275ae97209d0cef115e0a6020b42d696', '055 5101378', 23, 1),
(276, ' Vahid ', 'Mahmudov ', 'Zabit ', 'vahidmahmudov8@gmail.com ', '275ae97209d0cef115e0a6020b42d696', '050 4834720', 23, 1),
(277, ' Cabir ', 'X??lilov', 'Cahangir ', 'cabir.xalilov@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 6056060', 23, 1),
(278, ' Murad ', 'H??midzad??', 'Arzu ', 'hemidzadem@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 6654612', 23, 1),
(279, ' B??hruz ', '??sg??rov ', '????msi ', 'bahruz.Asgarov85@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2010744', 23, 1),
(280, ' Vur??un ', 'A??ayev', 'A??amir ', 'vurguna??ayev85@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2878815', 23, 1),
(281, ' Orxan ', 'Na????yev ', 'Ceyhun ', 'orik_vip@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 5636364', 23, 1),
(282, ' Hikm??t ', 'Vaqifzad?? ', 'Polad ', 'hikm??t.vaqifzad??@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 5051195', 23, 1),
(283, ' V??li ', 'H??s??nov', '??lqar ', 'veli-hesenov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 8899666', 23, 1),
(284, ' Murad ', 'A??aki??iyev', '??ahsuvar ', 'murada??akisiyev42@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 8426960', 23, 1),
(285, ' Heyb??t ', 'N??m??tov', '??lham ', '90sx403@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2595458', 23, 1),
(286, ' ??lqar ', '??sk??nd??rov ', 'Rafik', 'asxab_11@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 9188999', 23, 1),
(287, ' V??sal ', 'R??himov', 'Fazil ', 'vusal.s.a@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2494706', 23, 1),
(288, ' Malik ', '??irinov', 'Xamis ', 'shirinov-2020@list.ru', '275ae97209d0cef115e0a6020b42d696', '055 2393814', 23, 1),
(289, ' R????ad ', 'Quliyev', 'R??c??b ', 'quliyevreshad87@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2950404', 23, 1),
(290, ' El??in ', 'H??seynov ', '??hliman ', 'elchin.huseynov.1992@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2251464', 23, 1),
(291, ' N??sib ', 'Oruczad??', 'Q??rib ', 'nesiboruczad??2018@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 5381413', 23, 1),
(292, ' Davud', 'Mamedov ', ' ????msi ', 'davud-mamedov@bk.ru', '275ae97209d0cef115e0a6020b42d696', '050 6782826', 23, 1),
(293, ' S??bhan ', '??ahbazzad?? ', 'C??lil ', 'subhan_94@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 7644484', 23, 1),
(294, ' Fuad ', 'Balab??yov', 'Safal?? ', 'fuadbalabeyov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 3294203', 23, 1),
(295, ' Taleh ', '????r??fov', 'Fikr??t ', 'talehashrafov85@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 4462265', 23, 1),
(296, ' M??h??rr??m ', 'V??liyev ', 'Mehman ', 'maga.306@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 6341525', 23, 1),
(297, ' Ramiq ', 'Ta????yev', 'Vaqif ', 'ram315@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 5669300', 23, 1),
(298, ' Zaur ', 'M??mm??dzad?? ', 'Rauf ', 'zaur-mammadzada@rambler.ru', '275ae97209d0cef115e0a6020b42d696', '055 3387390', 23, 1),
(299, ' R????ad ', '??liyev', '??lqar ', 'rashad.i.aliyev@socar.az', '275ae97209d0cef115e0a6020b42d696', '051 4443333', 23, 1),
(300, 'Yegan?? ', 'M??mm??dova ', 'Ya??ar ', 'yega1101@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2250420', 24, 1),
(301, 'L??man ', 'Qurbanova ', 'M??zahir ', 'qurbanovaleman@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 3938708', 24, 1),
(302, 'Telman ', '??lirzayev', 'B??hr??m ', 'telman.alirzayev@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 8428010', 24, 1),
(303, 'X??yal?? ', 'M??vs??mova ', 'Akif ', 'khayala.movsumova@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 4669111', 24, 1),
(304, 'Samir ', 'Abdur??hmanov', 'H??t??m ', 'samirabdurahmanov6@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 3992248', 24, 1),
(305, 'Ariz ', 'Bax??iyev', 'Araz ', 'Arizirsad@gmail.com ', '275ae97209d0cef115e0a6020b42d696', '070 3707934', 24, 1),
(306, 'Novruz  ', 'Ad??g??z??lov ', 'Yusif ', 'novruz.adigozalov@gmail.com ', '275ae97209d0cef115e0a6020b42d696', '012 4361107', 24, 1),
(307, 'Nigar ', 'Qurbanova ', 'Yaqub ', 'nigar.qurbanova.1982@bk.ru', '275ae97209d0cef115e0a6020b42d696', '050 2848084', 24, 1),
(308, 'C??mil?? ', '??liyeva', '??li ', 'aliyja@bp.com', '275ae97209d0cef115e0a6020b42d696', '055 4251788', 24, 1),
(309, 'Cavad ', 'Q??dirov', 'Balaqulu  ', 'qedirovcavad@mail.ru ', '275ae97209d0cef115e0a6020b42d696', '055 6415411', 24, 1),
(310, 'Az??r ', 'Abdullayev ', 'V??qar ', 'azer_abdullayev@hotmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2901333', 24, 1),
(311, 'Davud ', 'Davudov', '??v??z ', 'davudavudov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 8536375', 24, 1),
(312, 'Seymur ', '??sg??rov ', 'Tofiq ', 'seymur.esgerov.89.@mail.ru ', '275ae97209d0cef115e0a6020b42d696', '051 8111133', 24, 1),
(313, '??ntiqam ', '??smay??lov ', 'Valeh ', 'intiqamismayilov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 8600201', 24, 1),
(314, 'Etibar ', 'B??hr??mov', '??bad??t ', 'etibar_behremov@mail.ru ', '275ae97209d0cef115e0a6020b42d696', '050 7223311', 24, 1),
(315, 'Ziya ', 'M??mm??dov ', '??l??vs??t ', 'ziya-memmedov-82@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 3223805', 24, 1),
(316, 'Nuran?? ', 'Hac??yeva', 'Arif ', 'nurana.hajiyeva81@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 9290373', 24, 1),
(317, 'Elg??n ', '??brahimov', '??h??d ', 'elgunibrahimov954@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2148787', 24, 1),
(318, 'Samir ', 'Ba????rov', 'Tarverdi ', '', '275ae97209d0cef115e0a6020b42d696', '055 7661918', 24, 1),
(319, 'R????ad ', 'S??f??rov', 'N??sl??t ', 'resadseferov09@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 8856575', 24, 1),
(320, 'Orxan  ', 'Abdullayev ', 'V??qar ', 'ORXAN_ABDULLAYEV_91@??NBOX.RU ', '275ae97209d0cef115e0a6020b42d696', '055 3480084', 24, 1),
(321, 'Nigar ', '??s??dova ', 'Maqsud ', 'n.m.asadova@gmail.com ', '275ae97209d0cef115e0a6020b42d696', '050 2512334', 24, 1),
(322, 'F??rid  ', '??sk??nd??rov ', 'Zakir ', 'iskandarov.farid87@yahoo.com ', '275ae97209d0cef115e0a6020b42d696', '050 7441414', 24, 1),
(323, 'Hikm??t ', 'C??f??rov', 'T??l??t ', 'cafarov.h@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 2421763', 24, 1),
(324, '??lkin ', 'Behbudov', 'M??tl??b ', '??lkin.Behbudov@socar.az ', '275ae97209d0cef115e0a6020b42d696', '050 7531622', 24, 1),
(325, ' Anar ', 'Xudiyev', '??dal??t ', 'anar.xudiyev@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 5055553', 24, 1),
(326, 'Mirseymur ', 'H??s??nov ', 'Mirqafar ', 'sundarqasanov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2857713', 25, 1),
(327, 'Mahmud ', 'M??mm??dli', 'N??sr??ddin ', 'Mahmud.Mamedov.8787@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 3155355', 25, 1),
(328, 'Rauf ', 'S??ttarov ', 'Urfat ', 'rauf.urfatoglu@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2958484', 25, 1),
(329, 'Sahib ', 'Mustafayev ', 'Ziyaf??t ', 'sahibmustafayev_kcad@hotmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2031596', 25, 1),
(330, ' Qurban ', 'Eyvazov', 'Firidun ', 'qurban.eyvazov.91@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 5031703', 25, 1),
(331, ' Rasim ', 'Qas??mov', 'Ramiz ', 'rasim.gasimov@hotmail.com', '275ae97209d0cef115e0a6020b42d696', '050 3801275', 25, 1),
(332, 'V??qar ', 'Abdullab??yli ', 'H????im ', 'vuqar_46@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 4445061', 25, 1),
(333, ' Ayd??n ', 'Zeynalov', 'El??in ', 'azeynalov86@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 7912557', 25, 1),
(334, '??lkin', 'Qurbanl?? ', ' Mahir ', 'iqurbanli8@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2636391', 25, 1),
(335, 'Abdulla ', 'M??mm??dov ', '??l??kr??m ', 'abdullam??mm??dov@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '050 5612197', 25, 1),
(336, ' Fuad ', 'Q??dirov', 'Sahib ', 'qedirovfuad@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 8007666', 25, 1),
(337, ' H??seyn ', '??smay??lov', 'M??h??mm??d ', 'huseyn_89@list.ru', '275ae97209d0cef115e0a6020b42d696', '051 8740000', 25, 1),
(338, ' ??v??z ', 'Qurbanov', 'R??v????n ', 'gurbanoffavaz@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2532888', 25, 1),
(339, ' M??h??rr??m ', '??manov', 'M??mm??d ', 'Imanov_maharram@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 4446688', 25, 1),
(340, 'R??st??m ', 'Alm??mm??dov ', 'M??h??mm??d ', 'almammadov.rustam1451@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 5675887', 25, 1),
(341, 'Ramin ', 'Quluzad?? ', 'Rafiq ', 'raminguluzadeh@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 7065201', 25, 1),
(342, ' Leyla ', 'C??f??rova', 'Kamran ', 'leylahuseyova.02@gamil.ru', '275ae97209d0cef115e0a6020b42d696', '055 2793828', 25, 1),
(343, 'V??sal ', 'K??rimov ', 'M??zahir ', 'qedir.esgerli@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 4103000', 25, 1),
(344, ' Ziya ', '??zimov', '??ahin ', 'ziyaazimov1988@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 7296463', 25, 1),
(345, ' Tofiq ', '????l??biyev', 'Oktay ', 'tofiq.celebiyev@bk.ru', '275ae97209d0cef115e0a6020b42d696', '050 4667699', 25, 1),
(346, 'Ramin ', 'Bax???? ', 'Rauf ', 'bakhishrr@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 3339399', 25, 1),
(347, 'Seymur ', '??kb??rov ', '??nv??r ', 'avtomatik_87@mailru', '275ae97209d0cef115e0a6020b42d696', '055 5365101', 25, 1),
(348, 'Rasim ', 'Quliyev ', '??srail ', 'quliyevrasim80@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 9451407', 25, 1),
(349, 'Orxan ', 'Cavan??irli ', 'S??rdar ', 'cavansirliorxan@gmail.ru', '275ae97209d0cef115e0a6020b42d696', '055 4010136', 25, 1),
(350, ' Fuad ', 'Hac??yev', '??smiran ', 'Hafiz.misirli.91@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 3551845', 26, 1),
(351, 'Orxan ', '??sg??nd??rov ', 'Vali ', '', '275ae97209d0cef115e0a6020b42d696', '055 2985862', 26, 1),
(352, ' ??li', 'S??f??rov', ' Namiq ', 'Eli.seferov.1995@list.ru', '275ae97209d0cef115e0a6020b42d696', '050 6606242', 26, 1),
(353, '??am', 'Qarayev ', ' Niyaz ', 'qarayevsham@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2766909', 26, 1),
(354, ' V??qar ', 'H??seynzad??', 'Uc??ddin ', '', '275ae97209d0cef115e0a6020b42d696', '051 5863121', 26, 1),
(355, 'Xalid', 'M??mm??dov ', 'Vali ', 'Xalid_96@icland.com', '275ae97209d0cef115e0a6020b42d696', '070 3150006', 26, 1),
(356, ' Rahib ', 'H??s??nov', '??aban ', 'Rahib.Hesenov.91@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 8101609', 26, 1),
(357, ' Hafiz ', 'Misirli', 'Muxtar ', 'Hafiz.misirli.91@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 5552117', 26, 1),
(358, 'V??sal?? ', 'Sad??qova', 'P??rviz ', 'Vusale.verdiyeva@socar.az', '275ae97209d0cef115e0a6020b42d696', '055 6688489', 26, 1),
(359, 'Yegan?? ', 'Bax????ova ', 'Selman ', 'Yegane.baxishova@socar.az', '275ae97209d0cef115e0a6020b42d696', '055 6737465', 26, 1),
(360, 'Eltac ', 'Ad??g??z??lzad?? ', '??lham ', 'E_azadeh@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2000026', 26, 1),
(361, 'Turan ', 'Qas??mzad??', 'M??h??mm??d ', 'Turan.qasimzade@inbox.ru', '275ae97209d0cef115e0a6020b42d696', '051 7757518', 26, 1),
(362, ' N??rgiz', 'Cavadova', ' Nazim ', 'Cavadova.nargiz@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2555123', 26, 1),
(363, ' Fatim??', '??smay??lova', ' Rayy??t ', 'Fatima.ismayilova@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 8193537', 26, 1),
(364, 'Kamil ', 'Eyyubov ', 'Akif ', '', '275ae97209d0cef115e0a6020b42d696', '050 3070233', 26, 1),
(365, 'Minur?? ', 'S??limli ', 'Kamil ', 'minurafattahova@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2753177', 26, 1),
(366, ' V??sal  ', '??liyev', 'Asif', 'Vusal.aliyev@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 3345246', 26, 1),
(367, 'Lamiy?? ', 'Sar??yeva ', 'M??h??rr??m ', 'Turkan.efendi1995@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 6824089', 26, 1),
(368, ' Elfaq  ', 'Babayev', 'F??rman', 'babayevelfaq@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 3430400', 26, 1),
(369, 'G??nel  ', 'Abbasova ', 'M??lik', '', '275ae97209d0cef115e0a6020b42d696', '055 4231010', 26, 1),
(370, 'S??dulla ', 'R??sulov ', 'Camal ', 'Sadulla.rasulov@temizqaz.az', '275ae97209d0cef115e0a6020b42d696', '050 2334033', 26, 1),
(371, 'El????n', 'Hac??yev', 'Nizami', '', '275ae97209d0cef115e0a6020b42d696', '055 9517885', 27, 1),
(372, 'Tural ', 'Abd??yev ', 'R??fael ', 'Turkan1-turkan@mail.ru', '275ae97209d0cef115e0a6020b42d696', '077 6091990', 27, 1),
(373, ' Kamil??', 'Abub??kirova', ' Z??f??r ', 'Kamav95@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 5822228', 27, 1),
(374, 'Ramin ', 'Quliyev ', 'Qa??ayevi?? ', 'Murad.fuad2208@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 4877751', 27, 1),
(375, 'Natiq ', 'Mailov ', '??lisahib ', 'Natiq_mailov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 6353939', 27, 1),
(376, 'Elmar ', 'Heyd??rzad?? ', 'Heyd??r ', 'Natiq_mailov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 3551967', 27, 1),
(377, ' K??nan ', '??liyev', 'Qurban ', 'Kenan.aliyev240@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 4739352', 27, 1),
(378, 'Mirnuhbala ', 'Musayev ', 'L??tif ', 'mirnuhbala@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 7697997', 27, 1),
(379, ' V??sal ', 'Ab????ov', 'Sabir ', 'Perviz.abishov@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 3306017', 27, 1),
(380, ' Sirus ', 'K??rimov', 'Oqtay ', '', '275ae97209d0cef115e0a6020b42d696', '051 8292121', 27, 1),
(381, '??ntiqam ', '??brahimov ', 'Nurulla ', 'i.intiqam17@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 6731700', 27, 1),
(382, ' ??kb??r ', '??kb??rli', 'Namiq ', 'Akbarli.a077@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2167700', 27, 1),
(383, 'P??rviz ', '??smay??lov ', ' Nadir ', '??sm.perviz@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 7971797', 27, 1),
(384, ' Tofiq ', 'H??seynov', '??l??vs??t', 'Vip.tofiq.2014@mail.ru', '275ae97209d0cef115e0a6020b42d696', '077 3640008', 27, 1),
(385, 'El??in ', 'Zeynalov ', 'Sabir ', 'elchinrynev@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 3555542', 27, 1),
(386, ' Nazir ', 'M??mm??dov', 'A??ayar ', 'Nazir.mammadov89@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 9523388', 27, 1),
(387, 'Taleh ', 'Quliyev ', 'Cavan??ir ', 'Taleh422@.mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 6663999', 27, 1),
(388, 'Tahir  ', '??ahbazl?? ', 'M??rdan ', 'Tahir.sahbazli@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 3593664', 27, 1),
(389, ' Ramin', 'B??dirxanov', ' ??dal??t ', 'Badirxanov.ramin@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3304488', 27, 1),
(390, 'Cavid', 'Abdalov ', ' ??ahin ', '', '275ae97209d0cef115e0a6020b42d696', '050 5986898', 27, 1),
(391, 'V??qar', 'Mahmudov ', ' Elton ', 'Vuqar-mahmudov-1989@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 7997939', 27, 1),
(392, 'Elvin', 'H??bibov', 'Vilay??t', 'elvin.habibov842@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 4071711', 27, 1),
(393, ' ??lah?? ', 'Hac??liyeva', 'Kamran ', 'lacin.zulfuqarov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 9890888', 27, 1),
(394, ' Yusif', 'Mirz??yev', ' M??h??mm??d ', 'Yusifmirzeyev00gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 8360664', 28, 1),
(395, ' R??f??t  ', 'Q??dimov', 'R??him', 'Qadimov.rufat@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 9353504', 28, 1),
(396, 'Sadiq', 'Hax??yev ', ' Sad??ddin ', 'Sadig.hakhiyev@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 6729666', 28, 1),
(397, 'Aysel', 'N??sibli ', ' Saday ', 'Aysel9r411@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 5793997', 28, 1),
(398, ' Elmar ', 'Abbasov', 'Nazim ', 'Abbasov.elmar@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2021116', 28, 1),
(399, 'R????ad', 'K??rimov ', ' Tahir ', 'Reshad_117@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2642288', 28, 1),
(400, ' Orxan ', '??mrahov', 'M??tl??b ', 'Orkancik007@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 8801959', 28, 1),
(401, ' Osman ', '??hm??dov', 'Zabit ', 'o.z.ahmedov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 7027482', 28, 1),
(402, ' Altay ', 'Rzayev', 'Ayd??n ', 'rzayevaltay@yaho.com', '275ae97209d0cef115e0a6020b42d696', '070 9340096', 28, 1),
(403, ' Azad', 'H??s??nov', ' ??lyas ', 'Azad.hasanov.72.@bk.ru', '275ae97209d0cef115e0a6020b42d696', '050 2640500', 28, 1),
(404, '??amil ', 'Na????yev ', 'Arif ', 'Shamil_na@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2407879', 28, 1),
(405, ' Yusif ', 'Yusibli', 'Mehdi', 'yusifyusibli@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2412713', 28, 1),
(406, ' Samir ', 'Xansuvarl??', '??l??ddin ', 'xansuvarli@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2001393', 28, 1),
(407, 'H??mid ', '??hm??dov ', 'Tofiq ', '', '275ae97209d0cef115e0a6020b42d696', '070 8718384', 28, 1),
(408, ' Yusif ', '??l??sg??rov', '??l??sg??r ', 'Yuska-@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 4400102', 28, 1),
(409, '  S??bin??', 'Mirz??yeva', 'V??kil ', 'Sabina.mirzoyeva.78@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 7552729', 28, 1),
(410, ' T??nzal?? ', 'Abdullayeva', 'Yaquba??a ', 'Abdullayeva.tunzala@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 6211233', 28, 1),
(411, '??lviyye', 'Urucova ', 'F??xr??ddin ', 'ulviyyaurujeva@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 9755504', 28, 1),
(412, ' F??rid', 'H??mz??yev', ' ??s??d ', 'Hamzayev70@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2990344', 28, 1),
(413, 'Bilal ', 'Musayev ', 'Azay ', '', '275ae97209d0cef115e0a6020b42d696', '050 6757804', 28, 1),
(414, 'H??seyn ', '??irinov ', 'G??lm??mm??d ', '', '275ae97209d0cef115e0a6020b42d696', '050 2106524', 28, 1),
(415, 'Maya', 'Quliyeva ', 'Vaqif', 'maya-scarlet@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '050 2256574', 28, 1),
(416, 'Hikm??t', '??hm??dli', 'Fikr??t', 'hikmetaxmedov28@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 3555633', 28, 1);
INSERT INTO `items2` (`c_id`, `s_name`, `s_surname`, `s_patronimic`, `s_email`, `s_password`, `s_phone`, `s_group_id`, `status`) VALUES
(417, 'Sadiq', 'Yusifov', 'Vaqif', 'yusifov.2016@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2970047', 28, 1),
(418, '??l??sg??r ', 'Mahmudlu ', 'V??qar', 'alesker.mahmudlu@bk.ru', '275ae97209d0cef115e0a6020b42d696', '055 2108891', 28, 1),
(419, '??irzad', 'H??s??nov ', ' Bayram', 'sirzadhsnov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 7910910', 28, 1),
(420, ' Cavid ', 'M??r????dov', ' ??smay??l-L??mb??li ', 'Cvdmrshdv@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 0881128', 28, 1),
(421, ' Sevda ', 'Kaz??mova', '????k??r??li ', 'Elnur1986-10@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 9546777', 28, 1),
(422, 'Yasin', 'C??f??rov', 'Ceyhun', 'c.cafarov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2571348', 29, 1),
(423, 'Oruc', 'S??f??rov', 'Qorxmaz', 'c.cafarov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 7081757', 29, 1),
(424, 'R??smiy?? ', 'X??lilova ', 'M??sr??f ', 'Rasnamamedova618@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 8510374', 29, 1),
(425, 'Emin ', 'F??ttayev ', '??ziz ', 'emin.fattayev@socar.az', '275ae97209d0cef115e0a6020b42d696', '055 8441133', 29, 1),
(426, ' ??li  ', 'S??leymanov', '??ntiqam', 'Suleymanov.@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 4157310', 29, 1),
(427, 'P??rviz ', '??liyev ', 'Muxtar ', 'Pliyev75@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3002875', 29, 1),
(428, 'Murad  ', 'Axundlu ', 'H??mid', 'Murad-murik@hotmail.com', '275ae97209d0cef115e0a6020b42d696', '051 3277782', 29, 1),
(429, '??lkin ', 'Axundl?? ', '??ingiz ', 'Murad-murik@hotmail.com', '275ae97209d0cef115e0a6020b42d696', '050 4210540', 29, 1),
(430, '??smay??l ', 'Mans??rov ', 'B??xtiyar ', '??smayil.mansirov97@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 9862412', 29, 1),
(431, ' Rabil ', 'Pa??ayev', 'El??ad ', 'Rabil.pashayev@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 7928283', 29, 1),
(432, ' Natiq', 'M??mm??dov', ' S??rac ', '', '275ae97209d0cef115e0a6020b42d696', '055 8370150', 29, 1),
(433, ' Ruslan', 'Na????yev', ' C??f??r ', 'Anar209@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 7413133', 29, 1),
(434, ' Araz ', '??irinov', 'Surxay ', 'arazss@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2105666', 29, 1),
(435, 'Malik ', 'Muradzad?? ', 'Telman ', 'Malik.muradzadeh@regulator.gov.az', '275ae97209d0cef115e0a6020b42d696', '050 2057047', 29, 1),
(436, ' Kamran ', 'V??kilov', 'Qurban ', 'Vekilovkamran6@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 4111914', 29, 1),
(437, ' Asiman ', 'Aslanov', 'Mehman ', 'Asiman_aslanov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 5668585', 29, 1),
(438, ' R????ad ', 'Qaz??-zad??', 'F??xr??ddin ', 'RASHAD.GAZI-ZADE@hotmail.com', '275ae97209d0cef115e0a6020b42d696', '055 9772227', 29, 1),
(439, ' Kamran  ', 'Bayramov', 'Vaqif', 'Samina.bayramova@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 3797944', 29, 1),
(440, ' Anar', 'M??h??rr??mov', ' Vidadi ', 'Anar_meharrov@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '050 2471878', 29, 1),
(441, 'Elm??ddin ', 'Cabbarl?? ', '??nv??r ', 'Elmeddin2396@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2030037', 29, 1),
(442, 'P??rvin ', 'H??s??nli ', 'V??li ', 'pervinhasanli@hotmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2855555', 29, 1),
(443, ' Natiq ', 'X??lilov ', '??mira??a ', 'Xalilov753@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2934484', 29, 1),
(444, 'R??v????n ', 'R??st??mov ', 'G??lo??lan ', 'Rovshan.rustamov1992@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2078262', 29, 1),
(445, ' ??lah?? ', 'S??f??r-Pur', 'Ramiz ', '', '275ae97209d0cef115e0a6020b42d696', '055 7053393', 29, 1),
(446, 'Ayg??n', 'Mirz??yeva ', ' ??srail', 'aygunyusifli@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 5574647', 29, 1),
(447, 'Z??lfiyy??', 'Axundova', 'El??in', 'zuliyazuzu@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 3345783', 30, 1),
(448, 'Sevinc', 'Dadayeva', 'R????id', 'sevinc.dadayeva@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 6276008', 30, 1),
(449, 'Vasif', 'K??lbiyev', 'Vaqif', 'vvasifkelbiyev@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2266599', 30, 1),
(450, 'El??in', 'Xancanov', 'Oktay', 'farid8105@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2200450', 30, 1),
(451, '??lvi', 'N??c??f-zad??', 'Vaqif', 'necefzade.ulvi@inbox.ru', '275ae97209d0cef115e0a6020b42d696', '055 4275500', 30, 1),
(452, 'Orxan', 'Davudov', 'Hac??', 'o-davudov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 6601424', 30, 1),
(453, 'Zurab', 'Bandzava', 'Camalovi??', 'zurab.745@rambler.ru', '275ae97209d0cef115e0a6020b42d696', '055 7450707', 30, 1),
(454, '??ziz', 'Novruzov', 'Adil', 'novruzov.eziz@list.ru', '275ae97209d0cef115e0a6020b42d696', '050 8417634', 30, 1),
(455, 'V??qar', 'H??seynzad??', 'H??seyn', 'v.h.huseynzada@socar-stp.az', '275ae97209d0cef115e0a6020b42d696', '050 5955519', 30, 1),
(456, 'Tamara', '??sayeva', 'Natiq', 'tamaraisayeva53@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 9552998', 30, 1),
(457, 'Elmir', '??smay??lov', 'S??hrab', 'ielmir267@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 7863141', 30, 1),
(458, 'Arif', 'H??seynov', '??l??ddin', 'arif.huseynov.1996@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 2374242', 30, 1),
(459, 'Lal??', 'H??seynova', 'N??sr??t', 'babazadetarlan@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3861498', 30, 1),
(460, 'C??rulla', 'Yaqubov', 'Eynulla', 'oilfieldaz@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 5665507', 30, 1),
(461, 'Sakit', 'K??rimli', 'Sahib', 'sakit.kerimli56@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2004342', 30, 1),
(462, 'Anar', '??mancanov', 'Af??t', 'anarimancanov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 4902090', 30, 1),
(463, 'P??rvin', 'Eyniyev', 'Nazim', 'eyniyevparvin1990@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 3765544', 30, 1),
(464, 'Nem??t', 'Abdullayev', 'M??tl??b', '', '275ae97209d0cef115e0a6020b42d696', '055 3237666', 30, 1),
(465, 'Elnar??', 'Rzayeva', 'Akif', 'elnara1977@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 7557468', 30, 1),
(466, 'Mahir', '??mirov', 'N??rimanov', 'mahir.amirov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2258297', 30, 1),
(467, 'Asif', 'Muxtarof', 'N??sr??t', 'muxtarof.asif205@gmail.com', '275ae97209d0cef115e0a6020b42d696', '077 3135939', 30, 1),
(468, 'Zeynab', 'B??yl??rova', 'Tofiq', 'qehremanovazeyneb2019@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2122422', 30, 1),
(469, 'M??z??ff??r', 'H??seyinb??yli', 'Natiq', 'huseynbeyli@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 4332313', 30, 1),
(470, 'Elvin', 'Allahverdiyev', 'Hiday??t', 'bulmix@inbox.ru', '275ae97209d0cef115e0a6020b42d696', '050 2575964', 30, 1),
(471, 'V??sal', 'Abbasov', 'Abbasov', 'vusal.i.abbasov@socar.az', '275ae97209d0cef115e0a6020b42d696', '077 4424417', 30, 1),
(472, '??l??kb??r', 'Quliyev', 'M??tl??b', 'alekber_91@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2433663', 30, 1),
(473, 'F??rid', 'H??seynov', 'B??hruz', 'ferid271291@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 7161216', 30, 1),
(474, 'B??yl??r', 'A??ayev', 'Nazim', 'baylaraghayev@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 8700690', 30, 1),
(475, 'Fariz', 'Quliyev ', 'H??s??n', 'guliyevfariz@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '055 3693938', 31, 1),
(476, 'Murad', 'Allahverdiyev ', 'El??in', 'murad.allahverdiyev@temirqaz.az', '275ae97209d0cef115e0a6020b42d696', '055 3551711', 31, 1),
(477, '??lqar', 'Quliyev ', '??mran', 'quliyevilqar2021@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3142123', 31, 1),
(478, 'H??seyn', 'Musayev', 'Yusif', 'huseyn.musayev@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 5271377', 31, 1),
(479, '????hriyar', 'C??f??rov', 'T??v??kk??l', 'shceferov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2948444', 31, 1),
(480, 'Asif', 'Qaibzad??', 'Vaqif', '', '275ae97209d0cef115e0a6020b42d696', '055 9387718', 31, 1),
(481, 'P??rviz', 'H??s??nov', 'H??s??n', 'hesenovph@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 2144451', 31, 1),
(482, 'K??nan', '??smay??lov', 'Ya??ar', 'kanishcik.gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 5617745', 31, 1),
(483, 'Samir', 'Zamanov', 'Sabir', 'samir.zamanov@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 8461124', 31, 1),
(484, 'V??qar ', '??liyev', 'Mikay??l', '', '275ae97209d0cef115e0a6020b42d696', '070 6417373', 31, 1),
(485, 'Fuad', 'Suleymanl??', 'Afiq', 'fuad.suleymanl??@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 5101616', 31, 1),
(486, 'Samir', '??sayev', 'Feyruz', 'isayevsamir@rambler.ru', '275ae97209d0cef115e0a6020b42d696', '055 5348444', 31, 1),
(487, 'Zaur', '??kb??rov', '??kb??r', 'rashad.aliyev1986@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 7026662', 31, 1),
(488, 'Taleh', 'H??seynov', '??dal??t', 'taleh.huseynovth.@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 7334055', 31, 1),
(489, 'Samir', 'Yusifli', 'Novruz', 'samir.yusifli.1993@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 4025150', 31, 1),
(490, 'Leyla', 'Hac??zad??', 'Mal??k', 'hac??zade.leyle@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 3443168', 31, 1),
(491, 'Fidan', 'H??s??nova', 'Sakit', 'fidashka.hasanova@mail.ru', '275ae97209d0cef115e0a6020b42d696', '077 4084818', 31, 1),
(492, 'Aqil', 'Qarda??ov', 'G??lbaba', 'aqil.qarda??ov@bk.ru', '275ae97209d0cef115e0a6020b42d696', '050 3776404', 31, 1),
(493, 'Aris', 'K??rimov', 'Kaz??m', 'aris.kerimov81@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 8461062', 31, 1),
(494, 'Nurpa??a', 'H??midov', 'Siyavu??', '', '275ae97209d0cef115e0a6020b42d696', '055 2660323', 31, 1),
(495, 'G??nay', 'Usubova', 'Natiq', 'gunayusubova@socar.az', '275ae97209d0cef115e0a6020b42d696', '055 9906768', 31, 1),
(496, 'R????ad', 'Q??l??nd??rli', '????r??f', 'mr.reshad999@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 5002616', 31, 1),
(497, 'G??nel', 'Xanlarova', 'Mahir', 'aslanovagunka@iclond.com', '275ae97209d0cef115e0a6020b42d696', '050 5546444', 31, 1),
(498, 'N??rgiz', '??ahbazova', 'Valeriy', 'geiran2008@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 6839716', 31, 1),
(499, 'Elnur', '??brahimli', '??mrah', 'ibrahimli.elnur5757@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 6822069', 31, 1),
(500, 'Cavid', 'C??lilov', 'Abid', 'cavidcelilov022@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3032122', 32, 1),
(501, 'Bayram', 'Pirm??mm??dov', 'Mustafa', 'bayrampirm??mm??dov@gmal.com', '275ae97209d0cef115e0a6020b42d696', '070 3677173', 32, 1),
(502, '??dal??t', 'S??leymanov', 'Eldar', 'edalet-socar@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 8910500', 32, 1),
(503, 'Namik', 'Nuriyev', 'Nazim', 'namiq.nuriyev79@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 5385457', 32, 1),
(504, 'G??nay', 'M??mm??dova', 'G??nay', 'gunaykafidaska15@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 3300396', 32, 1),
(505, 'Nurlan', '??liyev', 'Arif', 'nurlan.aliyev@live.com', '275ae97209d0cef115e0a6020b42d696', '055 2106459', 32, 1),
(506, 'R??st??m', 'Babazad??', 'Xanlar', 'rustam32@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 8929223', 32, 1),
(507, 'Elxan', 'Umudlu', 'Ayd??n', 'elxan.umudlu@rambler.ru', '275ae97209d0cef115e0a6020b42d696', '055 5647196', 32, 1),
(508, '??lkin', 'Mehdiyev', 'Rza', 'ilkinmehdiyev@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 2070889', 32, 1),
(509, 'Cabir', 'M??mm??dov', '??fqan', '', '275ae97209d0cef115e0a6020b42d696', '070 3350838', 32, 1),
(510, 'Rinat', 'N??c??fov', 'Ramiz', 'Nadjafov.Rinat@mail.ru ', '275ae97209d0cef115e0a6020b42d696', '055 6128132', 32, 1),
(511, 'Famil', '??s??dullayev', 'Bahadur', 'kiknut_007@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 3330300', 32, 1),
(512, 'Samir', 'H??seynov', 'Nizami', 'samirbaku65@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 9664178', 32, 1),
(513, 'F??rqan??', 'Cabbarova', 'Qurban', 'farganajabbarova8@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 4748818', 32, 1),
(514, 'Elvin ', 'Z??rb??liyev', 'A??arza', 'elvin.589@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 6141323', 32, 1),
(515, 'Ramiz', 'Xocaxov', 'Ramazan', 'zagatalagis.ramiz@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 8257733', 32, 1),
(516, '??mran', 'Novruzov', '??mran', 'imrannovruzovov@list.ru ', '275ae97209d0cef115e0a6020b42d696', '051 9661585', 32, 1),
(517, 'Sabit', '??liyev', '??brahim', 'sabit93@gmail.com ', '275ae97209d0cef115e0a6020b42d696', '055 4830251', 32, 1),
(518, 'Mirz??', 'A??ar??himov', 'Bax????', 'Agarahimov.mirza@ekol.az', '275ae97209d0cef115e0a6020b42d696', '055 8226733', 32, 1),
(519, 'Yusif', 'Hac??yev', 'B??y??ka??a', 'haciyev.yusif085@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2440002', 32, 1),
(520, 'Ruslan', 'Namazov', 'Araz', 'namazovruslann@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 8021600', 32, 1),
(521, 'Hac??', 'Mustafab??yli', 'Astan', 'hacimustafabeyli@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 2777270', 32, 1),
(522, 'Ayd??n', '??kb??rov', 'Ziyatxan', 'Ayd??n.akbarov@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 2847252', 32, 1),
(523, 'F??rid??', 'Yaqubova', 'Maqsud', 'farida.yaqubova91@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2332290', 32, 1),
(524, 'Kamran', 'Sar??yev', 'Fikr??t', 'kamran.sariyev1991@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 6087997', 32, 1),
(525, 'Elvin ', 'V??liyev', 'B??hr??m', 'elvin.valiyev25@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2924146', 32, 1),
(526, 'K??nan', 'Qulamov', 'Bayram', 'qulamovkenan266@gmail.com', '275ae97209d0cef115e0a6020b42d696', '077 4843430', 32, 1),
(527, 'Cabir', 'Abbasov', 'Cavan??ir', 'geekmen646@gmail.ru', '275ae97209d0cef115e0a6020b42d696', '055 6468485', 33, 1),
(528, 'X??yyam', 'Ba????rov', '??e??miaz??r', '', '275ae97209d0cef115e0a6020b42d696', '055 9996789', 33, 1),
(529, 'Namiq', 'Alxasov', 'Akif', 'namiqaa@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 6710808', 33, 1),
(530, 'Yusif', 'Abdulk??rimov', 'Vasif', '', '275ae97209d0cef115e0a6020b42d696', '055 8557500', 33, 1),
(531, 'Anar', 'Canm??mm??dov', 'Fikr??t', 'canmemmedov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3038292', 33, 1),
(532, 'S??rxan', '??liyev', 'Nazim', 'sarkhanaliyev94@gmail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2772337', 33, 1),
(533, 'Elnur', 'Mollayev', 'Adil', '', '275ae97209d0cef115e0a6020b42d696', '050 3050901', 33, 1),
(534, 'V??qar', 'Mustafayev', 'Sabir', 'mustafayev.vuqar72@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2146319', 33, 1),
(535, 'To??rul', 'Bax??iyev', 'Malik', 'coglu_94@list.ru', '275ae97209d0cef115e0a6020b42d696', '050 2182894', 33, 1),
(536, 'El????n', 'Yaqubov', 'B??xtiyar', 'elshan.yaqubov@hotmail.com', '275ae97209d0cef115e0a6020b42d696', '055 9228897', 33, 1),
(537, 'R??f??t', 'A??ayev', 'Namus', 'rufat.az@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 9537613', 33, 1),
(538, '??ll??z', '????milov', 'Ruslan', 'shamilovallaz@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 4663802', 33, 1),
(539, '??lham', 'Pirm??mm??dov', 'G??lm??h??mm??d', '??lham.pirmemmedov@mail', '275ae97209d0cef115e0a6020b42d696', '055 2002787', 33, 1),
(540, 'Amil ', 'A??azad??', 'Alim', 'amil2212@bk.ru', '275ae97209d0cef115e0a6020b42d696', '050 8824700', 33, 1),
(541, '??lqar', 'Qas??mov', 'Vidadi', 'ilqarr111@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 6888142', 33, 1),
(542, 'Flora', 'M??mm??dli', 'Vaqif', 'flora.mmmdli.96@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 6202556', 33, 1),
(543, 'Mikay??l', 'S??limov', 'Nur??ddin', 'mikayil.selimov94@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 4539429', 33, 1),
(544, 'B??hrul', 'Axundov', 'Qasir', 'bakhrul992gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2001083', 33, 1),
(545, 'Ramil', 'M??h??rr??mov', '??ahin', 'maharramov.ramil.96@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 3233871', 33, 1),
(546, 'C??lair', 'S??m??dov', 'Qubad', '', '275ae97209d0cef115e0a6020b42d696', '050 8411037', 33, 1),
(547, 'Ayt??n', 'Mehdi', 'Cavan??ir', 'mehdiayten@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 8802133', 33, 1),
(548, '????hriyar', 'H??mm??tov', 'Peyyam', 'shahriyar.hummatov@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 8425959', 33, 1),
(549, 'F??rid', 'Q??r??m??ahl??', '????ca??t', 'farid.seyidov.1996@mail.ru', '275ae97209d0cef115e0a6020b42d696', '077 6426193', 33, 1),
(550, 'R????ad', 'Hac??yev', 'Niyaz', 'rasadrasad1981@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 7614949', 33, 1),
(551, 'V??qar', 'Muradov', 'Nazir', 'vuqarmuradov2009@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 8919671', 33, 1),
(552, 'Az??r', 'Sar??balayev', 'G??lo??lan', '', '275ae97209d0cef115e0a6020b42d696', '055 6363637', 33, 1),
(553, 'Cavid', 'H??s??nov', 'Abbas', '', '275ae97209d0cef115e0a6020b42d696', '050 5328667', 33, 1),
(554, 'Tural', 'Bax????ov', 'Arif', 'tural.baxisov.86@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 7674018', 34, 1),
(555, 'Samir', 'G??z??lov', '??lis??mid', 'g.samir77@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2857726', 34, 1),
(556, 'Asim', 'Axundov', 'Yasin', 'asim.axundov@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 2842828', 34, 1),
(557, 'Rauf', 'Qurbanov', 'Rafiq', '', '275ae97209d0cef115e0a6020b42d696', '055 3641289', 34, 1),
(558, 'Hac??bala', 'H??s??nov', '??aban', 'hajibala.hasanov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2620020', 34, 1),
(559, 'Muxtar', '??mrahov', 'Rizvan', 'muxtar.emrah@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2857075', 34, 1),
(560, 'Murad', 'N??sibov', '??lb??nd??', 'muradnesibov97@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 3749497', 34, 1),
(561, 'M??rahim', 'Dolxanzad??', 'M??zahir', 'merahimdolkhanzade@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 8448690', 34, 1),
(562, '??brahim', 'Q??mb??rli', 'Mahmud', 'gambarli98@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 8820488', 34, 1),
(563, 'Namiq', 'C??biyev', 'L??tf????li', 'cebiyev_namiq@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 5281732', 34, 1),
(564, 'Anar', 'Mirz??yev', 'Ramiz', 'm_anar77@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 9990530', 34, 1),
(565, 'N??luf??r', '??liyeva', 'Yunis', 'nilufaraliyeva@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 2020095', 34, 1),
(566, 'F??rman', '??liyev', 'N??riman', 'aliyevf028@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 3249484', 34, 1),
(567, 'Tal??b', 'N??biyev', 'S??di', '22.aydin@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 6804580', 34, 1),
(568, 'Fazil', 'H??mz??yev', 'Kamandar', 'fazil_hamzayev@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '055 2012299', 34, 1),
(569, 'Orxan', '??sg??rov', 'Sahib', 'orkhanasgerov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 4622727', 34, 1),
(570, 'M??h??mm??d', 'Pa??ayev', 'M??bariz', 'maga.baki94@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2204778', 34, 1),
(571, 'To??rul', '??sayev', 'Faiq', 'togrul.isayev@socar.az', '275ae97209d0cef115e0a6020b42d696', '055 2571020', 34, 1),
(572, 'R??f??t', 'H??seynov', 'Soltan', 'rufat_bey_777@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 7217777', 34, 1),
(573, 'Rza', 'Ba????rl??', 'V??qar', '', '275ae97209d0cef115e0a6020b42d696', '050 2000064', 34, 1),
(574, 'To??rul', 'Mehdiyev', '??sg??nd??r', 'mehdiyev.toghrul@gmail.ru', '275ae97209d0cef115e0a6020b42d696', '055 8021211', 34, 1),
(575, 'N??sib', '??f??ndi', 'M??bariz', 'nasib.efendi96@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 9484896', 34, 1),
(576, 'Vasif', 'Qaibzad??', 'Vahid', 'qaibzadevasif@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 8836605', 34, 1),
(577, '??amil', 'Abbasov', '??frasiyab', 'abbasovsamil1982@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 8221366', 34, 1),
(578, 'F??rid', 'Nuriyev', 'B??hruz', 'Farid.nuriyev@inbox.ru', '275ae97209d0cef115e0a6020b42d696', '055 8220246', 34, 1),
(579, 'Anar', 'X??lilov', 'M??qd??t', 'anar_xelilov_2019@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 3819471', 35, 1),
(580, 'Elvin', 'H??s??nov', 'Telman', 'hasanov.lveen985@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 4045044', 35, 1),
(581, 'Samir', 'Qarayev', 'Muxtar', 'samirqarayev851@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 8511716', 35, 1),
(582, 'P??rvin', '??mirquliyev', 'Hac??qulu', 'pervin962@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 4221400', 35, 1),
(583, '??ahin', '??liyev', 'H??mid', 'shahin-aliyev-83@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 6963006', 35, 1),
(584, '??lkin', 'Q??dimov', 'F??zail', 'ilkintt@bk.ru', '275ae97209d0cef115e0a6020b42d696', '055 2576097', 35, 1),
(585, 'T??rr??', 'H??seynsoy', 'Q??dr??t', 'guseynsoy@inbox.ru', '275ae97209d0cef115e0a6020b42d696', '055 5054180', 35, 1),
(586, 'Mayis', 'Qarayev', 'Muxdar', 'qarayev_mayis@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 6233386', 35, 1),
(587, 'Rauf', 'Quliyev ', 'Vidadi', 'rauf.quliyev.1981@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 7571626', 35, 1),
(588, 'El??in', 'Mansurov', 'M??d??d', 'elcinmansurov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '077 2200030', 35, 1),
(589, 'Tural', 'Tarverdili', '??ahbala', 'turaltarverdili092@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 8505070', 35, 1),
(590, 'G??nd??z', 'H??s??nov', 'Qalib', 'hesenovgunduz@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 5102669', 35, 1),
(591, 'Nazim ', 'Abdullayev', 'N??sr??t', 'nazim.abdullayev427@gmail.com', '275ae97209d0cef115e0a6020b42d696', '077 7220104', 35, 1),
(592, 'Murad', 'M??h??rr??mov', 'Vidadi', 'murad.maharramov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2654533', 35, 1),
(593, 'Cavid', 'Cabbarov', 'Sulduz', 'huseynzade.rehman.1995@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 6832288', 35, 1),
(594, 'Zaur', 'M??mm??dov', 'A??ababa', 'adna-475@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 3055503', 35, 1),
(595, '??kb??r', 'H??seynov', 'Vaqif', 'ekberhuseynov20@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 4793659', 35, 1),
(596, 'Z??ka', '??ikarl??', 'Z??hrab', 'jeka_142@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 6730769', 35, 1),
(597, 'Teymur', 'H??seynov', 'Oqtay', 'Teymur.teymur5454@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2045454', 35, 1),
(598, 'Samir', '????fiyev', 'R??v????n', 'samir_shafiyev@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 9787798', 36, 1),
(599, 'Razi', 'N??sirov', 'A??add??', 'Razi.Nasirov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 5182419', 36, 1),
(600, ' Ramiz ', 'H??seynov', '??bd??rr??hman', 'edqar215@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3547539', 36, 1),
(601, 'Ruslan', '??liyev', 'C??f??r', 'ruslan.c.aliyev@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 2826645', 36, 1),
(602, 'X??yal??', 'Aslanova', 'H??s??m??ddin', 'xyal.aslanova@mail.ru', '275ae97209d0cef115e0a6020b42d696', '077 4300090', 36, 1),
(603, 'Tal??b', '??albuzov', 'Feyzulla', 'talib-88@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 2720036', 36, 1),
(604, 'M??nsur', 'Babayev', 'Maqsud', 'mensurbabayev79@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 3610508', 36, 1),
(605, 'B??xdiyar', 'Aslanov', 'Qabil', 'bexdiyar-09@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2785522', 36, 1),
(606, 'F??rid', '????xal??yev', 'Rafiq', 'shixaliyevfarid90@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 8361080', 36, 1),
(607, 'H??mid', 'H??midov', '??li', 'hamidov1978@inbox.ru', '275ae97209d0cef115e0a6020b42d696', '050 3499989', 36, 1),
(608, 'R????ad', 'Cahangirov', 'Kamran', 'Jahangirov.rashad@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 5536080', 36, 1),
(609, 'B??xtiyar', 'Abdullayev', 'Camal', 'abdullaev-baxtiyar@inbox.ru ', '275ae97209d0cef115e0a6020b42d696', '050 5378455', 36, 1),
(610, 'Eld??niz', '??hm??dov', 'N??sr??t', 'eldenizehmedov32@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 5204236', 36, 1),
(611, 'Alik', 'Muradov', 'Vahid', 'alik.muradov.83@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 5553805', 36, 1),
(612, 'Murad', 'H??seynov', '??ahin', 'murad_huseynov_2019@mail.ru', '275ae97209d0cef115e0a6020b42d696', '077 5738007', 36, 1),
(613, 'Nigar', 'A??ayeva', 'Natiq', 'p_nigar@bk.ru', '275ae97209d0cef115e0a6020b42d696', '055 3954383', 36, 1),
(614, '??qbal', 'Heyd??rov', 'Hikmet', 'heyderov8@bk.ru', '275ae97209d0cef115e0a6020b42d696', '051 7100027', 36, 1),
(615, '??lkin', 'C??bray??ll??', 'Natiq', 'cebray??ll??@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 9656161', 36, 1),
(616, 'Nurlana', 'Qas??mova', '??fsus', 'nurlanaqasimova3@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 3200809', 36, 1),
(617, 'P??rvin', 'A??arzayev', 'Allahverdi', 'pervin_52a@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 8208070', 36, 1),
(618, 'El????n', 'Babayev', 'M??qs??d', 'elshen4726@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 3994447', 36, 1),
(619, 'V??qar', 'A??ayev', 'Elsever', 'vuqar.agayev.1989@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 9777067', 36, 1),
(620, 'Elmar', 'Budaql??', 'Eleddin', 'elmar.budaql??96@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 8391361', 36, 1),
(621, 'F??rid', '??hm??dov', 'Seyf??lm??lk', 'akmadov88@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '050 8921111', 36, 1),
(622, 'G??nay', 'M??mm??dova', 'Nazir', 'gunay677.4@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2747286', 36, 1),
(623, ' Nahid ', 'F??rz??liyev', 'H??mbulla ', '', '275ae97209d0cef115e0a6020b42d696', '055 6854444', 36, 1),
(624, 'Tahir??', '??l??kb??rova', 'R????id', 'Tahire.Elekberova@mail.ru ', '275ae97209d0cef115e0a6020b42d696', '050 8408352', 36, 1),
(625, 'P??rvan??', '??smay??lova', 'Shahin', 'S.ismay??lova58@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 7298110', 36, 1),
(626, '??am', '??badov', 'F??rman', 'sham.ibadov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 5050727', 36, 1),
(627, 'Ramil', 'Tariverdiyev', 'Xanlar', 'ramil.tariverdiyev1987@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 4462406', 37, 1),
(628, '??lv??', 'Mehdiyev', 'Valeh', 'umehdiyev1992@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 8757202', 37, 1),
(629, 'K??n??l', 'Cabbarova', '??ahbaz', 'jabbarova.k@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 7854549', 37, 1),
(630, 'Ramil', 'R??sulov', 'A??ah??syn', 'ramilresulov0@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 5440944', 37, 1),
(631, 'Eyvaz', '??sg??rov', 'Ramiz', 'asgaroveyvaz@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2718821', 37, 1),
(632, 'G??lyar', 'H??seynov', '??mam??ddin', 'Gulyar.huseynov@socar.az', '275ae97209d0cef115e0a6020b42d696', '070 6143031', 37, 1),
(633, 'M??tl??b', 'R??himov', 'Aslan', 'nurlan-x-5@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 6471111', 37, 1),
(634, 'Bayram', 'Bayramov', 'R??v????n', 'bayram1097@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 5225422', 37, 1),
(635, 'Ramil', 'Mahmudov', 'V??kil', 'mahmudovr435@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 8714838', 37, 1),
(636, 'Natiq', '??hm??dov', 'Bayram??li', 'natiq.ahmedov265@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 8400728', 37, 1),
(637, 'Kamran', 'Hac??yev', 'Kamaleddin', 'kamranhajiyev97@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 7705070', 37, 1),
(638, 'Teymur', 'Mirz??yev', 'Yasin', '', '275ae97209d0cef115e0a6020b42d696', '050 3844488', 37, 1),
(639, 'Ayaz', '??sayev', 'Rasif', 'isayevayaz36@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 7757175', 37, 1),
(640, '??lk??r', 'Q??hr??manova', 'Z??lf??qar', 'eligahramanov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 8505958', 37, 1),
(641, 'M??mm??d', '??hm??dov', 'Yusif', 'mammad.ahmadov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 8874001', 37, 1),
(642, 'Zamin', 'Q??ribov', 'Fazil', 'zaminazeri77@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2784101', 37, 1),
(643, 'K??nan', 'T??hm??zov', 'Behbud', '', '275ae97209d0cef115e0a6020b42d696', '050 5209962', 37, 1),
(644, 'F??qan', '??brahimov', 'F??rid', 'feqan.ibrahimov92@mail.ru', '275ae97209d0cef115e0a6020b42d696', '077 6004433', 37, 1),
(645, 'Nuran??', 'M??rdanova', 'Abz??r', 'alesgerovanurana@gmail.com ', '275ae97209d0cef115e0a6020b42d696', '050 7035874', 37, 1),
(646, 'Urfan ', 'Xudiyev ', 'Vaqif', 'urfan.xudiyev@mail.ru ', '275ae97209d0cef115e0a6020b42d696', '055 3277723', 37, 1),
(647, ' S??leyman ', '??lizad??', 'V??qar ', 'suleymanalizade97i@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 2309933', 37, 1),
(648, 'Teyyub ', '??sg??nd??rov ', 'Elisahib ', 'teyyubsaid@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 5796669', 37, 1),
(649, 'Surxay', 'Piriyev', 'Refail', 'Piriyev.surxay@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 5395385', 37, 1),
(650, 'Zahid', 'R??st??mov', 'Misir', 'zahid_rm@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2928188', 37, 1),
(651, ' Yusif ', 'M??nsimov', 'Firudin ', 'y_mensimov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 4990864', 37, 1),
(652, 'Orxan', 'Piriyev', 'R??fael', '', '275ae97209d0cef115e0a6020b42d696', '050 7490272', 37, 1),
(653, 'G??lnar??', 'Zeynalova', 'Edal??t', 'gulnarazeynalovam@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2849966', 37, 1),
(654, 'Kamal??', 'Mustafayeva', 'Hiday??t', 'Kamale.Mustafayeva@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 3101700', 37, 1),
(655, 'Kamran', 'Nadirov', 'Ayd??n', 'nadirovkamran1@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 9527977', 37, 1),
(656, 'R????ad', 'Muradov', '??li', 'muradovrashad1@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 9449333', 37, 1),
(657, 'Ramil ', 'Zal??yev ', 'F??rhad  ', 'ramil.zaliyev@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2740337', 38, 1),
(658, 'Vasif ', '??manov', '????r??f ', 'vasi.imanov91@gmail.com', '275ae97209d0cef115e0a6020b42d696', '077 4229613', 38, 1),
(659, 'Namik ', 'Solxayev', 'Sa????r ', 'namik353@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2842666', 38, 1),
(660, 'Seymur ', 'A??ayarov', '??ntiqam', 'sagayarov@bk.ru', '275ae97209d0cef115e0a6020b42d696', '055 3335853', 39, 1),
(661, 'C??lal', 'S??leymanov ', 'Baba ', 'celalsuleymanov1@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 2241232', 39, 1),
(662, 'B??hruz', 'D??mirov', 'M??bariz ', 'behruz6446@mail.ru', '275ae97209d0cef115e0a6020b42d696', '077 2204100', 39, 1),
(663, '??fqan', '??sg??rov', 'Namidar', 'efqan.eskerov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2453466', 40, 1),
(664, 'Yas??m??n', 'H??seynova', 'Nazim', 'yasemen.huseynova@socar.az', '275ae97209d0cef115e0a6020b42d696', '055 9776222', 40, 1),
(665, 'R??hman', '??mirov', 'Musa', 'rehmanemirov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 3516803', 40, 1),
(666, 'Co??qun', 'Qarayev', 'M??hs??n', 'cosqunqarayev3@gmail.com', '275ae97209d0cef115e0a6020b42d696', '077 2251815', 40, 1),
(667, 'Ceyhun', 'S??leymanov', 'Ya??ar', 'ceyhun.suleymanli@temizqaz.az', '275ae97209d0cef115e0a6020b42d696', '051 5878877', 40, 1),
(668, 'Ayaz', '??liyev', 'Rasim', '', '275ae97209d0cef115e0a6020b42d696', '051 8502222', 40, 1),
(669, 'El????n', 'Mirz??yev', 'F??rhad', 'elsen243@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2438404', 40, 1),
(670, 'S??buhi', 'Xasayev', 'Hiday??t', 'sebuhi.xasayev@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 4153989', 40, 1),
(671, 'Nadir', 'H??s??nov', 'Cahangir', 'nadirhv@gmail.ru', '275ae97209d0cef115e0a6020b42d696', '055 8272657', 40, 1),
(672, 'Afiq', 'Abbasov', 'Rafiq', 'abbasovafiq@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 4445087', 40, 1),
(673, 'Jal??', 'Qas??mova', 'Raqif', 'jale.qasimova@socar.az', '275ae97209d0cef115e0a6020b42d696', '055 4582930', 40, 1),
(674, 'Anar', 'M??mm??dov', 'Ayd??n', 'anar436@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 5439544', 40, 1),
(675, 'H??seyn', '??lizad??', '??bd??lh??seyn', 'huseynalizade82@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 4573653', 40, 1),
(676, 'Emil', 'Tahirov', '??kram', 'emil_tagirov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 5770279', 40, 1),
(677, 'El????n', 'M??mm??dov', '????r??f', 'elshenmemmedov313@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 6466900', 40, 1),
(678, 'Ceyhun', 'M??mm??dov', 'Xano??lan', 'ceyhunmemmedov26071987@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 6441248', 40, 1),
(679, 'Seymur', 'V??liyev', 'Vaqif', 'seymur.veliyev.83@inbox.ru', '275ae97209d0cef115e0a6020b42d696', '070 7159291', 40, 1),
(680, 'Kamran', 'Q??mb??rov', 'Al??ddin', 'kamran.qemberov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 3741839', 40, 1),
(681, 'Nazir??', 'M??mm??dzad??', 'M??h??bb??t', 'nazire.m@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 5512012', 40, 1),
(682, '??lham', 'Aslanov', 'Rauf', 'ilhamaslanov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2446665', 40, 1),
(683, 'Ayt??n', 'Nuruyeva', 'Eld??niz', 'aytennuruyeva90@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 5111821', 40, 1),
(684, 'Sara', '??liyeva', 'Oqtay', 'saraliyeva855@gmail.com', '275ae97209d0cef115e0a6020b42d696', '070 3664046', 40, 1),
(685, 'Esmira', '??f??ndiyeva', 'Nazim', 'esmira.afandiyeva@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 8458973', 40, 1),
(686, 'Az??r', '??sg??nd??rov', '??r??stun', 'azer.iskandarov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2321269', 40, 1),
(687, 'Ya??ar', 'Musayev', 'H??s??n', 'yasar.musayev@socar.az', '275ae97209d0cef115e0a6020b42d696', '070 2910410', 40, 1),
(688, 'Emil', 'C??f??rov', 'S??yyad', 'j_emil@hotmail.com', '275ae97209d0cef115e0a6020b42d696', '055 4482828', 41, 1),
(689, 'Asif', 'Musayev', 'F??xr??ddin', 'Knigh_m@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 5535854', 41, 1),
(690, 'Tural', 'H??s??nov', 'Bayram', 'hasanov.tural@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 8093311', 41, 1),
(691, 'Vasif', 'M??simov', 'Arif', 'vasif.masimov.82@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 6747472', 41, 1),
(692, '??s??d', 'Salmanov', '????rif', 'esed.salmanov@socar.az', '275ae97209d0cef115e0a6020b42d696', '055 2209602', 42, 1),
(693, 'Vahid', 'Musayev', 'Vahid', 'vahid.musayev@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '055 2053536', 42, 1),
(694, '??li', '??hm??dov', 'R??st??m', 'ali.ahmadov@klaxon.az', '275ae97209d0cef115e0a6020b42d696', '050 2623079', 42, 1),
(695, 'R??ya', 'Mikay??lova', 'Rafiq', 'roya.mikayilova@kapitalbank.az', '275ae97209d0cef115e0a6020b42d696', '055 3448616', 42, 1),
(696, 'Heyd??r', '??brahimli', 'Fuad', 'heydar.ibrahimli@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3010103', 42, 1),
(697, 'Culyetta', 'Musayeva', '??liyevna', 'juliette.psapha@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 9004006', 42, 1),
(698, 'El??in', '??u??anov', 'Vaqif', 'elchin.shushanov@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 3636232', 42, 1),
(699, 'Sevinc', 'A??azad??', 'Azad', 'sevinc.agazade25@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 4916353', 42, 1),
(700, 'Ruslan', 'Bax????liyev', 'M??har??t', 'r.baxshaliyev@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 8458935', 42, 1),
(701, 'H??seyn', 'M??mm??dov', 'M??mm??d', 'mhm7@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 9995151', 42, 1),
(702, 'Ayt??n', '??liyeva', 'Vahid', 'aliyeva.ayten95@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 5347674', 42, 1),
(703, 'Niftal??', 'A??urov', 'K??rim', 'asurov1994@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 9787839', 42, 1),
(704, 'Mehral??', 'Quluyev', '??l??kb??r', 'mehrali.quliyev@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 2340424', 42, 1),
(705, 'Elbrus', 'Ta????yev', 'Hac??', 'elbrusculfa2017@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 5555580', 42, 1),
(706, 'Rinat', 'H??s??nov ', 'Qalib', 'renatgasanov1@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 8333099', 43, 1),
(707, 'Elvin', 'H??seynov', 'Cahangir', 'vip.huseynov@list.ru', '275ae97209d0cef115e0a6020b42d696', '055 2003104', 43, 1),
(708, 'Anar', 'Urmuyev', 'M??tl??b', 'a.urmuyev@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 6777766', 43, 1),
(709, 'R??na', '??sg??nd??rova', 'M??mm??d??li', 'renaisgenderova74@gmail.com', '275ae97209d0cef115e0a6020b42d696', '012 4899628', 43, 1),
(710, 'Zakir', 'H??s??nov', 'Fazil', 'Zakir.sultan@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2104285', 43, 1),
(711, 'Malik', 'M??mm??dzad??', 'M??vs??m', 'Mammadzada.malik@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 3646454', 43, 1),
(712, 'Rauf', 'M??mm??dov', 'L??yaq??t', 'rauf.mamedov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 8469620', 43, 1),
(713, 'Teymur ', 'K??rimov', 'Eynulla', 'teymurkerimov@rambler.ru', '275ae97209d0cef115e0a6020b42d696', '050 5250755', 43, 1),
(714, 'F??rid', 'Fikr??tli', '??ftixar', 'ferid4441@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 7254441', 43, 1),
(715, 'Nigar', 'H??s??nova ', 'Mahmud', 'hasanovanigar088@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 9307382', 43, 1),
(716, '??aban', '??ahp??l??ngov', 'Rzaqulu', 'shahpelengovshaban@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 4052121', 43, 1),
(717, 'Elnur', 'H??bibov', 'Eldar', 'Elnur.habibov86@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2508220', 43, 1),
(718, 'G??nel', 'Quliyeva', 'Rafiq', 'gunel.guliyeva899@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 8995225', 43, 1),
(719, 'Samir', 'Qurbanov', 'Qurban', 'samirqurbanov78@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2846630', 43, 1),
(720, 'V??fa', 'Bayramova', 'Rasim', 'mexrima.sultan@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 5025831', 43, 1),
(721, 'F??rhad', 'Quluzad??', '??smay??l', 'qufarhad14608@sabah.edu.az', '275ae97209d0cef115e0a6020b42d696', '051 7063075', 43, 1),
(722, '??v??z', 'Muradov', '????rk??z', 'Evez.m.470@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 8993689', 43, 1),
(723, 'Alim', '??smay??lov', 'F??xr??ddin', 'Alimmineralsular@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 4226464', 43, 1),
(724, 'Ruslan', '??zizov', '??lqar', 'Ruslan_1122@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2032080', 43, 1),
(725, 'Cansu', 'F??xr??ddinq??z??', 'F??xr??ddin', 'cansufakhreddinqizi@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 6475735', 43, 1),
(726, 'Az??r', 'Ayd??nl??', 'Ayd??n', 'aydinliazer @mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 6228422', 43, 1),
(727, 'M??bariz', 'M??mm??dov', 'Arif', 'mubarizmammadov@inbox.ru', '275ae97209d0cef115e0a6020b42d696', '050 3075577', 43, 1),
(728, ' Arzu ', 'Ba????rova', 'Tapd??q', 'arzu.orucova85@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 5160985', 44, 1),
(729, ' V??sal ', 'N??sirov', 'K??rim', ' nvusal98@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 3111169', 44, 1),
(730, ' G??nel ', 'Na????yeva', 'Az??r', 'Nagievagunel94@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 9357881', 44, 1),
(731, ' P??rviz ', 'Agamirov', 'R??v????n', 'Agamirov60@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2767656', 44, 1),
(732, ' F??rid??  ', 'Mehbal??yeva', 'M??bariz', 'telman.mehbaliyev@socar.az', '275ae97209d0cef115e0a6020b42d696', '055 9039734', 44, 1),
(733, 'Elnar??', 'N??rimanova', 'May??l', 'elnaranarimanova6@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 3170555', 44, 1),
(734, 'S??bhan', '??r??bi', '  Seid Hadi', 'Subhanarabi@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 4247752', 44, 1),
(735, 'Aysel', 'K??rimova', 'Fuad', 'aysel.kerimova.ms@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 4546474', 44, 1),
(736, 'N??rgiz', 'Qas??mova', 'Fariz', 'Khalilova_nargiz@bk.ru', '275ae97209d0cef115e0a6020b42d696', '055 2381260', 44, 1),
(737, 'Lal??', 'M??mm??dova', 'S??fixan', 'lala.mammedova001@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 7775850', 44, 1),
(738, 'Elmar', 'Budaqov', '  Ramiz', 'elmarbudagov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2104830', 44, 1),
(739, 'M??lah??t', 'Qurbanova', 'Vasif', 'melahet.qurbanova@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 8430011', 44, 1),
(740, 'Aynur', 'Pirm??mm??dova', '  ??smixan', 'aynur.pirmamedova92@icloud.com', '275ae97209d0cef115e0a6020b42d696', '055 9140448', 44, 1),
(741, '??lk??r', '??ir??liyeva', '  Rasim', 'ulker.shiraliyeva.98@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 9140448', 44, 1),
(742, 'Z??mr??d', 'Al????ova', '  Sabir', 'zumrud.alishova@mail.ru ', '275ae97209d0cef115e0a6020b42d696', '051 6368836', 44, 1),
(743, 'Ruslan', 'S??m??dov', '  Eyvaz', 'ruslan211@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2028989', 44, 1),
(744, 'Ay????n', 'Qaz??b??yova', '  R????ad??t', 'elcanqazibeyov85@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 4359909', 44, 1),
(745, 'G??nel', '??kb??rova', 'Vaqif', 'Magn2028@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 8419214', 45, 1),
(746, 'M??mm??d', '??kb??rov', 'Ad??m', 'mamed.akb@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 8410646', 45, 1),
(747, '??nar??', 'Q??mb??rli', 'M??mm??dba????r', 'inaraqemberli@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 4883345', 45, 1),
(748, 'R????ad', 'S??f??rov', 'El??ad', 'reshad.safarov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2600208', 45, 1),
(749, 'R????ad', 'Ad??g??z??lov', 'Qurban', 'rashad_adigozalov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 8173785', 45, 1),
(750, 'El??ad', 'T??hm??zov', '??akir', 'elshad.t471@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 8373637', 45, 1),
(751, 'Zeyn??b', '??l??kb??rova', 'A??a', 'zeynebalakbarova@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 6805577', 45, 1),
(752, 'Elnar??', 'H??seynova', 'Arif', 'Elbrahimova@socaraqs.com', '275ae97209d0cef115e0a6020b42d696', '055 4008053', 45, 1),
(753, 'Lal??', '??sk??nd??rova', 'Balo??lan', 'Lala.iskenderova@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 2755414', 45, 1),
(754, 'M????fiq', 'Abbasov', 'Famil', 'mushfiq.abbasov@asco.az', '275ae97209d0cef115e0a6020b42d696', '055 2033563', 45, 1),
(755, 'G??nay', 'C??f??rli', 'Bayram', 'cafarlig@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 3457070', 45, 1),
(756, 'K??n??l', 'S??f??rova', '??r??ad', 'Kenulsafarova@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 3681133', 45, 1),
(757, 'Nuran??', 'Verdiyeva', 'H??seyn', 'nurana.verdiyeva@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 6223610', 45, 1),
(758, 'Qas??m', 'Usubov', '??ziz', 'qasimusubov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 8116151', 45, 1),
(759, 'Pa??a', '??liyev', '??ingiz', 'pashaalipjm@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2462932', 45, 1),
(760, 'P??rviz', 'S??f??rli', 'S??hrab', 'perviz.seferli@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2040035', 45, 1),
(761, 'X??yal??', 'Orucova', 'B??kir', 'xayalaoruc@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 9087000', 45, 1),
(762, 'Ramiz', 'Abiyev', 'Rahib', 'abiyev555@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2283595', 46, 1),
(763, '??mrah', '??lisoy', 'Nizami', 'emrah.elisoy@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 7660700', 46, 1),
(764, 'S??hrab', 'Ta????yev', 'Safalan', 'safalan.t@gmail.com', '275ae97209d0cef115e0a6020b42d696', '051 3492505', 46, 1),
(765, 'Ta????', '??sg??rov', 'F??rhad', 'tag??esgerov@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 7456000', 46, 1),
(766, 'Namiq', 'Qocayev', '??dal??t', 'nam??qqocayev@mail.ru', '275ae97209d0cef115e0a6020b42d696', '070 3465252', 46, 1),
(767, 'Elnur', 'H??seynov', 'Ayd??n', 'huseynovelnur-007@mail.ru', '275ae97209d0cef115e0a6020b42d696', '055 2750707', 46, 1),
(768, 'Elvin', 'M??rs??lli', '??l??ddin', 'elvin.murselli@socar.az', '275ae97209d0cef115e0a6020b42d696', '055 2511155', 46, 1),
(769, 'Ramiz', 'Nuriyev', 'G??l??li', 'ramiznuriyev1983@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 2503976', 46, 1),
(770, 'G??l??r', 'Qocayeva', 'Ehtibar', 'guler25.91@mail.ru', '275ae97209d0cef115e0a6020b42d696', '051 9095151', 46, 1),
(771, 'Qaraca', 'Qas??mov', 'Zakir', 'qaraca.qasimov@socar.az', '275ae97209d0cef115e0a6020b42d696', '050 2959493', 46, 1),
(772, 'Qas??m', 'Qas??mov', 'Nazir', 'Gasimov_094@hotmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2731313', 46, 1),
(773, 'Samir', 'Aslanov ', '??libala', '', '275ae97209d0cef115e0a6020b42d696', '055 2045121', 47, 1),
(774, 'Telman', 'Da??temirov', 'Vaqifovi??', 'd.telman2204@gmail.com', '275ae97209d0cef115e0a6020b42d696', '054 2254378', 47, 1),
(775, 'Aysel', '??eydayeva', 'Hafiz', 'ayselh.va@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 4252324', 47, 1),
(776, 'F??rid', 'D??nyamal??yev', '??ziz', 'dunyamaliyevfarid@gmail.ru', '275ae97209d0cef115e0a6020b42d696', '051 9161613', 47, 1),
(777, 'Zaur', '??smay??lov', 'A??abala', 'zaurismail@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '050 2789248', 47, 1),
(778, 'Emin', '??liyev', 'Eldar', 'emin3161@gmai.com', '275ae97209d0cef115e0a6020b42d696', '050 3161506', 47, 1),
(779, 'Elnur', 'Cahangirov', 'A??arza', 'elik77780@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 7655577', 47, 1),
(780, 'Firuz??', 'Quluzad??', 'Camal', 'gasimovafiruza@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '051 5262121', 47, 1),
(781, 'R????ad', 'Pirm??mm??dov', 'Cambul', 'reshadprimammadov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2870555', 47, 1),
(782, 'Sona', 'R??fiyeva', 'V??qar', 'sonarafiyeva@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '055 2234783', 47, 1),
(783, 'Kamil', 'Namazov', '??mam??ddin', 'namazovkamil@yahoo.com', '275ae97209d0cef115e0a6020b42d696', '055 6900041', 47, 1),
(784, 'Orxan', 'B??hm??ni', 'Cahangir', 'behmeniorxan@gmail.com', '275ae97209d0cef115e0a6020b42d696', '050 4620620', 47, 1),
(785, 'M??bariz', 'Umarov', 'Ramiz', 'mumarov@gmail.com', '275ae97209d0cef115e0a6020b42d696', '055 2178338', 47, 1),
(786, 'R??him', 'Mustafayev', 'Mirz??', 'rahim0077@mail.ru', '275ae97209d0cef115e0a6020b42d696', '050 2655090', 47, 1),
(787, 'Xaliq', 'Nurmammedov', 'Ramiz', '', '275ae97209d0cef115e0a6020b42d696', '055 3521843', 47, 1);

-- --------------------------------------------------------

--
-- Table structure for table `items3`
--

CREATE TABLE `items3` (
  `t_id` int(11) NOT NULL,
  `t_profile_photo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `t_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `t_surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `t_patronimic` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `t_scientific_level_id` tinyint(1) NOT NULL,
  `t_speciality` tinyint(2) NOT NULL,
  `t_e_mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `t_experience` longtext COLLATE utf8_unicode_ci NOT NULL,
  `t_language` longtext COLLATE utf8_unicode_ci NOT NULL,
  `t_skills` longtext COLLATE utf8_unicode_ci NOT NULL,
  `t_dob` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `t_facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_linkedin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `t_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items3`
--

INSERT INTO `items3` (`t_id`, `t_profile_photo`, `t_name`, `t_surname`, `t_patronimic`, `t_scientific_level_id`, `t_speciality`, `t_e_mail`, `t_experience`, `t_language`, `t_skills`, `t_dob`, `t_facebook`, `t_linkedin`, `t_twitter`, `t_phone`, `t_status`) VALUES
(13, '', 'Yegan??', 'Sad??qova', '', 2, 3, 'yegan52@mail.ru', '', '', '', '', '', '', '', '050 324 55 65', 1),
(14, '', 'L??taf??t', '??smay??lova', '', 2, 3, 'latifa.ismaylova@gmail.com', '', '', '', '', '', '', '', '055 420 81 45', 1),
(15, 'bc002c173baa9381bc6a84b50d29c778.jpg', 'Osman', 'Mirz??yev', 'H??s??n ', 2, 1, 'osman55@mail.ru', '', '<ul><li>Rus</li><li>Ingilis</li></ul>', '<p>M.??zizb??yov ad??na Az??rbaycan Neft v?? Kimya institutunun (1985-1990) ??stehsal prosesl??rinin avtomatla??d??r??lmas?? fakult??sini bitirib.</p><p>2005-ci ild?? texnika elml??ri namiz??di alimlik d??r??c??si al??b.</p><p>2007-ci ild??n dosentdir.2012-ci ild?? ?????m??kdar Elm v?? T??hsil???i????isi medal?? il?? t??ltif olunub.</p><p>57 elmi-metodik m??qal??si d??rc olunub</p>', '1964-07-01', '', '', '', '', 1),
(16, '', 'Mehriban', '??smay??lova', '', 2, 2, 'mexribani@inbox.ru', '', '', '', '', '', '', '', '050 282 08 61', 1),
(17, '', 'Gulnur??', 'M??mm??dova', '', 2, 4, 'gulnure55@gmail.com', '', '', '', '', '', '', '', '', 1),
(18, '2b6482985243b5f9c94bbc61b58c54c3.jpg', '??brahim', 'H??bibov', '??b??lf??z ', 3, 5, 'h.ibo@mail.ru', '<p>Az??rbaycan D??vl??t Neft Akademiyas??, 1973-c?? il m??zunu, Neft-mexanika</p>', '<ul><li>Rus</li><li>??ngilis??</li></ul>', '', '1951-06-04', '', '', '', '050 216-48-87', 1),
(19, '', 'Malik', 'Abdullayev', '', 2, 6, 'malik.abdullayev.52@mail.ru', '', '', '', '', '', '', '', '050 300 03 84', 1),
(20, '', 'Rafiq', 'M??mm??dov', '', 2, 7, 'rafiq.mammadov@asoiu.edu.az', '', '', '', '', '', '', '', '050-557-66-57', 1),
(21, 'fbf6d70572422c7452159c3cd23fa742.jpg', 'Vida', 'Muradxanl??', '', 2, 8, 'vmuradkhanova@yahoo.com', '<p>2003?????? Az??rbaycan D??vl??t Neft Akademiyas??, Bak??, Az??rbaycan<br>1984-1989???????????????????? Az??rbaycan Neft v?? Kimya ??nstitutu, Bak??, Az??rbaycan<br>Kimya-texnologiya Fakult??si,<br>Kimya????-texnoloq m??h??ndisi, f??rql??nm?? diplomu<br>ELM?? ??S??RL??R??<br>33 m??qal?? v?? tezis, 1 d??rs v??saiti v?? 2 f??nn proqram??</p>', '<ul><li>Rus</li><li>??ngilis??</li></ul>', '', '1967-10-23', '', '', '', '', 1),
(22, '530a7d2775f7306d35edf93b2f3f095b.jpg', 'M??sav??r', 'Musayev', '', 3, 9, 'm_musaver@yahoo.com', '<ul><li>1974-1977 ???ci?? ill??rd?? BDU-nun fizika, 1977-1980-c?? ill??rd?? is?? Moskva Fizika M??h??ndisl??ri ??nstitutunun X??susi Fizika Fakult??si</li><li>1980-1983-c?? ill??rd???? Moskva Fizika M??h??ndisl??ri ??nstitutunun aspirant</li><li>1984-1989 ill??rd?? ADNSU-nun Fizika kafedras??nda assistent</li><li>1989-2011?? ill??rd?? ADNSU-nun Fizika kafedras??nda dosent</li><li>2011-ci ild??n?? ADNSU-nun Fizika kafedras??nda professor</li></ul>', '<ul><li>Rus</li><li>??ngilis??</li></ul>', '', '', 'https://fb.com', 'https://fb.com', 'https://fb.com', '012 598-41-91', 1);

-- --------------------------------------------------------

--
-- Table structure for table `items4`
--

CREATE TABLE `items4` (
  `ab_id` int(11) NOT NULL,
  `subject_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `syllabs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lecture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exam_answers` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ab_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items4`
--

INSERT INTO `items4` (`ab_id`, `subject_name`, `syllabs`, `lecture`, `exam`, `exam_answers`, `ab_status`) VALUES
(14, 'Korporativ informasiya sisteml??ri', '3f635bca477849c7ee2663e4ace943a3.pdf', '079a10492381ecc90c2f637aeb24bcb3.docx', 'f952bcd295de233a18c2ff0d60e969f2.pdf', '9fa809b767abaa05f31e26bab44b5f8a.jpeg', 1),
(15, 'Mexanika', 'aae6749512f00b6af87418d341e2a899.docx', 'd258a2e480090117c3586adac2ad4a13.pdf', '75bcd5ec6bb3725c814a6ed74bd66871.docx', 'a12303def4b75276eb64f33abcee5da1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `items5`
--

CREATE TABLE `items5` (
  `co_id` int(11) NOT NULL,
  `co_group_no` tinyint(4) NOT NULL,
  `co_subject_id` smallint(6) NOT NULL,
  `co_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items5`
--

INSERT INTO `items5` (`co_id`, `co_group_no`, `co_subject_id`, `co_status`) VALUES
(12, 3, 14, 1),
(13, 3, 15, 1),
(14, 9, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `items6`
--

CREATE TABLE `items6` (
  `sl_id` int(11) NOT NULL,
  `sl_category` tinyint(4) NOT NULL,
  `sl_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ann_id` int(11) NOT NULL,
  `sl_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items6`
--

INSERT INTO `items6` (`sl_id`, `sl_category`, `sl_img`, `ann_id`, `sl_status`) VALUES
(8, 2, 'd091ad3f7774ecc87d4bc9c5da8ade4c.jpg', 39, 1),
(13, 1, '340f25b5ee8374c466822d0862f52fda.jpg', 44, 1);

-- --------------------------------------------------------

--
-- Table structure for table `items7`
--

CREATE TABLE `items7` (
  `tr_id` int(11) NOT NULL,
  `tr_group_id` int(11) NOT NULL,
  `tr_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items7`
--

INSERT INTO `items7` (`tr_id`, `tr_group_id`, `tr_url`, `tr_status`) VALUES
(5, 2, 'cc1e6d7021e5cbbb493c8a22e6de0dd1.docx', 1),
(6, 1, '879676a3429f815ea1338cee4f39ddce.jpeg', 1),
(8, 3, '97e2bf36ca733213cddba8a29c42d570.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `items8`
--

CREATE TABLE `items8` (
  `ce_id` int(11) NOT NULL,
  `ce_student_id` tinyint(4) NOT NULL,
  `ce_subject_id` tinyint(4) NOT NULL,
  `ce_enter_point` tinyint(4) NOT NULL,
  `ce_exam_point` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items8`
--

INSERT INTO `items8` (`ce_id`, `ce_student_id`, `ce_subject_id`, `ce_enter_point`, `ce_exam_point`) VALUES
(1, 7, 8, 13, 33),
(11, 7, 10, 44, 50);

-- --------------------------------------------------------

--
-- Table structure for table `items9`
--

CREATE TABLE `items9` (
  `re_id` int(11) NOT NULL,
  `re_student_id` int(11) NOT NULL,
  `re_subject_id` int(11) NOT NULL,
  `re_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items9`
--

INSERT INTO `items9` (`re_id`, `re_student_id`, `re_subject_id`, `re_status`) VALUES
(12, 101, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_category`
--

CREATE TABLE `item_category` (
  `i_c_id` int(11) NOT NULL,
  `i_c_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_category`
--

INSERT INTO `item_category` (`i_c_id`, `i_c_name`) VALUES
(1, 'Sports'),
(2, 'Finance');

-- --------------------------------------------------------

--
-- Table structure for table `item_category2`
--

CREATE TABLE `item_category2` (
  `group_id` int(4) NOT NULL,
  `group_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `i_speciality_id` tinyint(4) NOT NULL,
  `kurs` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_category2`
--

INSERT INTO `item_category2` (`group_id`, `group_no`, `i_speciality_id`, `kurs`) VALUES
(3, 'EEM 3.21', 2, 0),
(4, 'EM 2.20.1', 10, 0),
(5, 'EM 2.20.2', 10, 0),
(6, 'EM 2.21', 10, 0),
(7, 'EM 3.20', 10, 0),
(8, 'FH 2.19', 3, 0),
(9, 'FH 2.20', 3, 0),
(10, 'FH 3.20', 3, 0),
(12, 'HFT 2.21', 3, 0),
(13, '??T 2.19', 1, 0),
(14, '??T 2.20', 1, 0),
(15, '??T 2.21', 1, 0),
(16, 'KE 2.21', 11, 0),
(17, 'KM 2.21', 4, 0),
(18, 'KM 2.19', 4, 0),
(19, 'KM 2.20', 4, 0),
(20, 'M 2.21', 12, 0),
(21, 'MM 2.20', 13, 0),
(22, 'MM 2.21', 13, 0),
(23, 'NQM 2.19.1', 6, 0),
(24, 'NQM 2.19.2', 6, 0),
(25, 'NQM 2.19.3', 6, 0),
(26, 'NQM 2.20.1', 6, 0),
(27, 'NQM 2.20.2', 6, 0),
(28, 'NQM 2.20.3 ', 6, 0),
(29, 'NQM 2.20.4', 6, 0),
(30, 'NQM 2.21.1', 6, 0),
(31, 'NQM 2.21.2', 6, 0),
(32, 'NQM 2.21.3', 6, 0),
(33, 'NQM 3.20.1', 6, 0),
(34, 'NQM 3.20.2', 6, 0),
(35, 'NQM 3.20.3', 6, 0),
(36, 'NQM 3.21.1', 6, 0),
(37, 'NQM 3.21.2', 6, 0),
(38, 'NQQM 2.18.1', 7, 0),
(39, 'NQQM 2.18.2', 7, 0),
(40, 'NQQM 2.19', 7, 0),
(41, 'NQQM 3.19.2', 7, 0),
(42, 'ST??O 3.20', 8, 0),
(43, 'ST??O-2.19.1', 8, 0),
(44, 'ST??O-2.19.2', 8, 0),
(45, 'ST??O-2.19.3', 8, 0),
(46, 'ST??O 3.21', 8, 0),
(47, 'TM 2.19', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `item_category3`
--

CREATE TABLE `item_category3` (
  `i_c3_id` int(11) NOT NULL,
  `i_c3_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_category3`
--

INSERT INTO `item_category3` (`i_c3_id`, `i_c3_name`) VALUES
(1, 'Assistent'),
(2, 'Dosent'),
(3, 'Professor'),
(4, 'Akademik');

-- --------------------------------------------------------

--
-- Table structure for table `item_category4`
--

CREATE TABLE `item_category4` (
  `i_c4_id` int(11) NOT NULL,
  `i_c4_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_category4`
--

INSERT INTO `item_category4` (`i_c4_id`, `i_c4_name`) VALUES
(1, 'test1'),
(2, 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `item_category5`
--

CREATE TABLE `item_category5` (
  `i_c5_id` int(11) NOT NULL,
  `i_c5_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_category5`
--

INSERT INTO `item_category5` (`i_c5_id`, `i_c5_name`) VALUES
(1, 'hello'),
(2, 'hello1');

-- --------------------------------------------------------

--
-- Table structure for table `item_category6`
--

CREATE TABLE `item_category6` (
  `i_c6_id` int(11) NOT NULL,
  `i_c6_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_category6`
--

INSERT INTO `item_category6` (`i_c6_id`, `i_c6_name`) VALUES
(1, 'birinci g??r??ns??n'),
(2, 'dig??rl??ri');

-- --------------------------------------------------------

--
-- Table structure for table `item_category7`
--

CREATE TABLE `item_category7` (
  `i_c7_id` int(11) NOT NULL,
  `i_c7_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_category7`
--

INSERT INTO `item_category7` (`i_c7_id`, `i_c7_name`) VALUES
(1, 'tester1'),
(2, 'tester2');

-- --------------------------------------------------------

--
-- Table structure for table `item_category8`
--

CREATE TABLE `item_category8` (
  `i_c8_id` int(11) NOT NULL,
  `i_c8_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_category8`
--

INSERT INTO `item_category8` (`i_c8_id`, `i_c8_name`) VALUES
(1, 'certificate 1'),
(2, 'certificate 2');

-- --------------------------------------------------------

--
-- Table structure for table `item_category9`
--

CREATE TABLE `item_category9` (
  `i_c9_id` int(11) NOT NULL,
  `i_c9_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_category9`
--

INSERT INTO `item_category9` (`i_c9_id`, `i_c9_name`) VALUES
(1, 'Register1'),
(2, 'Register2');

-- --------------------------------------------------------

--
-- Table structure for table `item_status`
--

CREATE TABLE `item_status` (
  `i_s_id` int(11) NOT NULL,
  `i_s_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_status`
--

INSERT INTO `item_status` (`i_s_id`, `i_s_name`) VALUES
(1, 'Active'),
(2, 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_exam_table`
--

CREATE TABLE `lesson_exam_table` (
  `le_id` int(11) NOT NULL,
  `lesson_table` varchar(255) NOT NULL,
  `lesson_ext` varchar(100) NOT NULL,
  `exam_table` varchar(255) NOT NULL,
  `exam_ext` varchar(100) NOT NULL,
  `le_group_no` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson_exam_table`
--

INSERT INTO `lesson_exam_table` (`le_id`, `lesson_table`, `lesson_ext`, `exam_table`, `exam_ext`, `le_group_no`) VALUES
(8, 'bb87a2762913a93fb5e432166ccef9ec.pdf', '.pdf', 'f908e58b0c47746b53ede0223b57716d.jpg', '.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `point`
--

CREATE TABLE `point` (
  `po_id` int(11) NOT NULL,
  `po_student_id` int(11) NOT NULL,
  `po_group_id` tinyint(4) NOT NULL,
  `po_subject_id` tinyint(4) NOT NULL,
  `po_enter_point` tinyint(4) NOT NULL,
  `po_exam_point` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `point`
--

INSERT INTO `point` (`po_id`, `po_student_id`, `po_group_id`, `po_subject_id`, `po_enter_point`, `po_exam_point`) VALUES
(19, 7, 2, 11, 46, 33),
(20, 8, 2, 11, 40, 127),
(21, 7, 2, 12, 11, 21),
(22, 8, 2, 12, 19, 33),
(23, 1, 3, 14, 42, 50);

-- --------------------------------------------------------

--
-- Table structure for table `scientific_level`
--

CREATE TABLE `scientific_level` (
  `SCIENTIFIC_ID` int(11) NOT NULL,
  `SCIENTIFIC_LEVEL` varchar(22) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `speciality`
--

CREATE TABLE `speciality` (
  `speciality_id` tinyint(2) NOT NULL,
  `speciality_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `speciality`
--

INSERT INTO `speciality` (`speciality_id`, `speciality_name`) VALUES
(1, '??nformasiya texnologiyalar??'),
(2, 'Elektroenergetika m??h??ndisliyi'),
(3, 'F??vq??lad?? hallar v?? h??yat f??aliyy??tinin t??hl??k??sizliyi'),
(4, 'Kimya m??h??ndisliyi'),
(5, 'Texnoloji ma????n v?? avadanl??qlar m??h??ndisliyi'),
(6, 'Neft-qaz m??h??ndisliyi'),
(7, 'Neft-qaz qur??ular?? m??h??ndisliyi'),
(8, 'S??nayenin t????kili v?? idar?? edilm??si'),
(9, 'Geofizika m??h??ndisliyi'),
(10, 'Energetika m??h??ndisliyi'),
(11, 'Komp??ter elml??ri'),
(12, 'Menecment'),
(13, 'Mexanika m??h??ndisliyi');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `s_id` int(11) NOT NULL,
  `s_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`s_id`, `s_value`) VALUES
(1, 'Active'),
(2, 'Deactive'),
(3, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admincategory`
--
ALTER TABLE `admincategory`
  ADD PRIMARY KEY (`a_c_id`);

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items2`
--
ALTER TABLE `items2`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `items3`
--
ALTER TABLE `items3`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `items4`
--
ALTER TABLE `items4`
  ADD PRIMARY KEY (`ab_id`);

--
-- Indexes for table `items5`
--
ALTER TABLE `items5`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `items6`
--
ALTER TABLE `items6`
  ADD PRIMARY KEY (`sl_id`);

--
-- Indexes for table `items7`
--
ALTER TABLE `items7`
  ADD PRIMARY KEY (`tr_id`);

--
-- Indexes for table `items8`
--
ALTER TABLE `items8`
  ADD PRIMARY KEY (`ce_id`);

--
-- Indexes for table `items9`
--
ALTER TABLE `items9`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `item_category`
--
ALTER TABLE `item_category`
  ADD PRIMARY KEY (`i_c_id`);

--
-- Indexes for table `item_category2`
--
ALTER TABLE `item_category2`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `indx` (`group_id`);

--
-- Indexes for table `item_category3`
--
ALTER TABLE `item_category3`
  ADD PRIMARY KEY (`i_c3_id`);

--
-- Indexes for table `item_category4`
--
ALTER TABLE `item_category4`
  ADD PRIMARY KEY (`i_c4_id`);

--
-- Indexes for table `item_category5`
--
ALTER TABLE `item_category5`
  ADD PRIMARY KEY (`i_c5_id`);

--
-- Indexes for table `item_category6`
--
ALTER TABLE `item_category6`
  ADD PRIMARY KEY (`i_c6_id`);

--
-- Indexes for table `item_category7`
--
ALTER TABLE `item_category7`
  ADD PRIMARY KEY (`i_c7_id`);

--
-- Indexes for table `item_category8`
--
ALTER TABLE `item_category8`
  ADD PRIMARY KEY (`i_c8_id`);

--
-- Indexes for table `item_category9`
--
ALTER TABLE `item_category9`
  ADD PRIMARY KEY (`i_c9_id`);

--
-- Indexes for table `item_status`
--
ALTER TABLE `item_status`
  ADD PRIMARY KEY (`i_s_id`);

--
-- Indexes for table `lesson_exam_table`
--
ALTER TABLE `lesson_exam_table`
  ADD PRIMARY KEY (`le_id`);

--
-- Indexes for table `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `scientific_level`
--
ALTER TABLE `scientific_level`
  ADD PRIMARY KEY (`SCIENTIFIC_ID`),
  ADD KEY `SCIENTIFIC_ID` (`SCIENTIFIC_ID`),
  ADD KEY `SCIENTIFIC_ID_2` (`SCIENTIFIC_ID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `admincategory`
--
ALTER TABLE `admincategory`
  MODIFY `a_c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `administration`
--
ALTER TABLE `administration`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `items2`
--
ALTER TABLE `items2`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=788;

--
-- AUTO_INCREMENT for table `items3`
--
ALTER TABLE `items3`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `items4`
--
ALTER TABLE `items4`
  MODIFY `ab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `items5`
--
ALTER TABLE `items5`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `items6`
--
ALTER TABLE `items6`
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `items7`
--
ALTER TABLE `items7`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `items8`
--
ALTER TABLE `items8`
  MODIFY `ce_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `items9`
--
ALTER TABLE `items9`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `item_category`
--
ALTER TABLE `item_category`
  MODIFY `i_c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_category2`
--
ALTER TABLE `item_category2`
  MODIFY `group_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `item_category3`
--
ALTER TABLE `item_category3`
  MODIFY `i_c3_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item_category4`
--
ALTER TABLE `item_category4`
  MODIFY `i_c4_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_category5`
--
ALTER TABLE `item_category5`
  MODIFY `i_c5_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_category6`
--
ALTER TABLE `item_category6`
  MODIFY `i_c6_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_category7`
--
ALTER TABLE `item_category7`
  MODIFY `i_c7_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_category8`
--
ALTER TABLE `item_category8`
  MODIFY `i_c8_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_category9`
--
ALTER TABLE `item_category9`
  MODIFY `i_c9_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_status`
--
ALTER TABLE `item_status`
  MODIFY `i_s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lesson_exam_table`
--
ALTER TABLE `lesson_exam_table`
  MODIFY `le_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `point`
--
ALTER TABLE `point`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `scientific_level`
--
ALTER TABLE `scientific_level`
  MODIFY `SCIENTIFIC_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Jul 19, 2022 at 04:53 PM
=======
-- Generation Time: Jul 15, 2022 at 02:21 PM
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
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
<<<<<<< HEAD
(39, 'Azərbaycan Dövlət Neft və Sənaye Universitetinin təkrar ali təhsil üzrə qiyabi şöbəsində təhsil alan tələbələrin 2021/2022-ci tədris ilinin yaz semestrində imtahana qədər topladığı BALLAR CƏDVƏLI (II Mərhələ)', '', '', '<p><strong>050608– Elektroenergetika mühəndisliyi ixtisasının    </strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EYgU7rzD5RRNrc9nPBzvEIQBql1qSgoxYScxbO-ZkNp0Kw?e=ZE4fIA\"><strong>Semestr: IV              Qr.№: EM 2.21</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EUiBoS0ftEBKk_TRu1IDkw8Br6acRu9QuMgTfv3-pAc_Kw?e=hKybyU\"><strong>Semestr: VI              Qr.№: EEM 3.21</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EWPx6EJNG3xPsn1CszzKBIUBXVXpGzJFnxDk2HaElvcsXw?e=tQGKS0\"><strong>Semestr: VI              Qr.№: EM  2.20.1</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EUq-EHp29MVDnOT_B4nY72EB9AL_VkTJGCxPIY7HBkUmtA?e=MpiCgs\"><strong>Semestr: VI              Qr.№: EM  2.20.2</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EXGG6MaIyjxDqW5Yo1Tq4sABemtxMkNjt7nIQPVgRo9m2Q?e=uBZ66W\"><strong>Semestr: VIII            Qr.№: EM  3.20</strong></a><br><strong>050626– Elektrik mühəndisliyi ixtisasının</strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EQnlEagygF9MiE9JpOGfnSIBBpvatCy50D-PWefh_7yzvA?e=va4U6m\"><strong>Semestr:  VIII          Qr.№: EM  2.19.1</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EXrBMnpR8apAvi0PcY5-edgBxOz3Io8rEiqWXcWeeVIscA?e=QIa7Dc\"><strong>Semestr:  VIII          Qr.№: EM 2.19.2</strong></a><br><a href=\"http://www.smiiyi.az//tedris/2022/Girishbal/merhele2/Girish_bal_Mer2_EM-3_19.pdf\"><strong>Semestr:  X              Qr.№: EM  3.19</strong></a><br><strong>050641– Kimya mühəndisliyi ixtisasının</strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/Ea3DwkOVhklHqbMeg-SuHFgB3LfVobry5mKFwKWYkUmjxg?e=17sD5N\"><strong>Semestr  IV             Qr.№  KM-2.21</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/ERW8BQMjfAFBov-bqUZ8u_cB7OQlaayr_Ofj5bRzsf7oJw?e=MaQuE9\"><strong>Semestr  VI             Qr.№  KM-2.20</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EaIyCH4Ze9JAgicuoSp1tAEB7zplEN1N6EjHewCnUnpDUQ?e=HofdFn\"><strong>Semestr  VIII           Qr.№  KM-2.19</strong></a><br><strong>050607–Neft- qaz qurğuları mühəndisliyi ixtisasının</strong><br><a href=\"http://www.smiiyi.az//tedris/2022/Girishbal/merhele2/Girish_bal_Mer2_NQQM-2_19.pdf\"><strong>Semestr:   VIII         Qr.№: NQQM 2.19</strong></a></p>', '', '', '2022-06-19', '7a1f5dbea98bcc81e87a55e63b7d17fd.png', '', '.png', 1),
(43, 'Azərbaycan Dövlət Neft və Sənaye Universitetinin təkrar ali təhsil üzrə qiyabi şöbəsində təhsil alan tələbələrin 2021/2022-ci tədris ilinin yaz semestrində imtahana qədər topladığı BALLAR CƏDVƏLI (III Mərhələ)', '', '', '<p><strong>İnformasiya texnologiyalar</strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EVtiqbyNraJPtRf-nKZ5WE0Blur9OqNblV95XFA_con5Hg?e=3QEeRw\">Semestr IV         Qr.№  İT 2.21</a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EcrO5UIYDz9NpM21-IPV0WoBNvOx4pXV-OrVOOdzF-PVsg?e=2l0PbZ\">Semestr VI         Qr.№  İT 2.20</a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/ERRft1MbyhhClAcR5VCJYBoBaHnqDGyV353x1cOrQcPLtA?e=W6EDbn\">Semestr VIII      Qr.№: İT 2.19</a><br><strong>İqtisadiyyat</strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EffQcR-rfJRJs8EYfy0mk4oBCco87U44yQj98nL8OAET8w?e=Uoc5Nb\">Semestr IV        Qr.№: İ 2.21</a><br><strong>Kompüter elmləri</strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EZm81LEaZy9Ml1l1b8n2gSUBunnwmSwMtvHRbAHB5CV8cA?e=FFnEGW\">Semestr IV          Qr.№  KE 2.21</a><br><strong>Menecment</strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EauLsFDk1R1Ekv8f_C5kWHgB433Pg33GfRp5MFqTxCC6Gg?e=w8FGvE\">Semestr IV            Qr.№: M 2.21</a><br><strong>Sənayenin təşkili və idarə olunması</strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EclmiOWKV0NFk545JuvbbBwBXAhdB6U93BXI07m6JwdFag?e=fLsNf2\">Semestr VI              Qr.№: STİO 2.20.1</a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EQiElgF_4LZHmmiMIJdHQrUBeVJXHUmS9_hPiUCAFHIp5A?e=DzkNBA\">Semestr VI              Qr.№: STİO 2.20.2</a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EWDSSBBcxzRLh0iHf90m3_4BkR1YTOWq0HYCptgn6mdMHQ?e=O5KEpk\">Semestr VI              Qr.№: STİO 2.20.3</a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EXWuas2TuFZMlL0n0bCJRocB_ojTLJpZoJuQHykkLlxnZQ?e=RCWrhg\">Semestr VI              Qr.№  STİO-3.21</a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EfQp0G0O0hZCtDWVygnHRrkBAjmVeM9Gg1YYfTeEjpk3Ww?e=FdlJlv\">Semestr VIII            Qr.№: STİO 3.20</a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EQzhKHc-HkFIrJLNwVe3t_EBaNcFrZSuMNYdNepPXnlv-A?e=NbV7co\">Semestr VIII            Qr.№  STİO-2.19.1</a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EZwFTudcBDVGvrN1nNey_VABJptUYj88paM3JjXFV8QQmQ?e=61bPNO\">Semestr VIII            Qr.№  STİO-2.19.2</a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/ERNF6oaKi5ZCgTjxpbjNKfsBqJJBTSi-sr4zqsWsUlP4Eg?e=DlUL7t\">Semestr VIII            Qr.№  STİO-2.19.3</a></p>', '', '', '2022-07-05', 'e4c456756eeecf99b66ef730b75e2535.png', '', '.png', 1);
=======
(34, 'wleilfilj', 'rwliwrjog', 'rejhkurhu3t', '<p>felijeligjrelijgli</p>', '<p>jrjeilerjgeij</p>', '<figure class=\"table\"><table><tbody><tr><td>ljnliljijijilj</td><td>l</td><td>jli</td><td>jil</td></tr><tr><td>j</td><td>lij</td><td> </td><td> </td></tr><tr><td> </td><td> </td><td> </td><td> </td></tr><tr><td> </td><td> </td><td> </td><td> </td></tr><tr><td> </td><td> </td><td> </td><td> </td></tr></tbody></table></figure>', '2022-06-28', 'f31345f75dc25ef3c0787ba0ad6632ec.png', '9a83cb5055321d26e658f39696ae8bac.png', '.png', 1),
(38, 'fdeq', 'wefwf', 'wefwef', '<p>ewfwefw</p>', '<p>wfwefw</p>', '<p>wfwff</p>', '2022-07-05', '1e14c473e710510347eb095fc74ebe30.jpeg', '3b6178f062f3cb62d07cb79f1139361a.docx', '.jpeg', 1),
(39, 'Azərbaycan Dövlət Neft və Sənaye Universitetinin təkrar ali təhsil üzrə qiyabi şöbəsində təhsil alan tələbələrin 2021/2022-ci tədris ilinin yaz semestrində imtahana qədər topladığı BALLAR CƏDVƏLI (II Mərhələ)', '', '', '<p><strong>050608– Elektroenergetika mühəndisliyi ixtisasının    </strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EYgU7rzD5RRNrc9nPBzvEIQBql1qSgoxYScxbO-ZkNp0Kw?e=ZE4fIA\"><strong>Semestr: IV              Qr.№: EM 2.21</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EUiBoS0ftEBKk_TRu1IDkw8Br6acRu9QuMgTfv3-pAc_Kw?e=hKybyU\"><strong>Semestr: VI              Qr.№: EEM 3.21</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EWPx6EJNG3xPsn1CszzKBIUBXVXpGzJFnxDk2HaElvcsXw?e=tQGKS0\"><strong>Semestr: VI              Qr.№: EM  2.20.1</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EUq-EHp29MVDnOT_B4nY72EB9AL_VkTJGCxPIY7HBkUmtA?e=MpiCgs\"><strong>Semestr: VI              Qr.№: EM  2.20.2</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EXGG6MaIyjxDqW5Yo1Tq4sABemtxMkNjt7nIQPVgRo9m2Q?e=uBZ66W\"><strong>Semestr: VIII            Qr.№: EM  3.20</strong></a><br><strong>050626– Elektrik mühəndisliyi ixtisasının</strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EQnlEagygF9MiE9JpOGfnSIBBpvatCy50D-PWefh_7yzvA?e=va4U6m\"><strong>Semestr:  VIII          Qr.№: EM  2.19.1</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EXrBMnpR8apAvi0PcY5-edgBxOz3Io8rEiqWXcWeeVIscA?e=QIa7Dc\"><strong>Semestr:  VIII          Qr.№: EM 2.19.2</strong></a><br><a href=\"http://www.smiiyi.az//tedris/2022/Girishbal/merhele2/Girish_bal_Mer2_EM-3_19.pdf\"><strong>Semestr:  X              Qr.№: EM  3.19</strong></a><br><strong>050641– Kimya mühəndisliyi ixtisasının</strong><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/Ea3DwkOVhklHqbMeg-SuHFgB3LfVobry5mKFwKWYkUmjxg?e=17sD5N\"><strong>Semestr  IV             Qr.№  KM-2.21</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/ERW8BQMjfAFBov-bqUZ8u_cB7OQlaayr_Ofj5bRzsf7oJw?e=MaQuE9\"><strong>Semestr  VI             Qr.№  KM-2.20</strong></a><br><a href=\"https://azerbaijanstateoilacade-my.sharepoint.com/:b:/g/personal/smiiyi_asoiu_edu_az/EaIyCH4Ze9JAgicuoSp1tAEB7zplEN1N6EjHewCnUnpDUQ?e=HofdFn\"><strong>Semestr  VIII           Qr.№  KM-2.19</strong></a><br><strong>050607–Neft- qaz qurğuları mühəndisliyi ixtisasının</strong><br><a href=\"http://www.smiiyi.az//tedris/2022/Girishbal/merhele2/Girish_bal_Mer2_NQQM-2_19.pdf\"><strong>Semestr:   VIII         Qr.№: NQQM 2.19</strong></a></p>', '', '', '2022-06-19', '7a1f5dbea98bcc81e87a55e63b7d17fd.png', '', '.png', 1),
(40, 'wefwefwefwe', '', '', '<p>wfwefwefwfwefwefwefwef</p>', '', '', '2022-07-21', 'f5f3d889fb28593616f15f7e74f6f87c.png', '', '.png', 1),
(41, 'Azərbaycan Dövlət Neft və Sənaye Universitetinin  əlavə təhsil üzrə qiyabi şöbəsində təhsil alan tələbələrin 2021/2022-ci tədris ilinin yaz dərs sessiyasının imtahan  <br>C Ə D V Ə L İ  III mərhələ', '', '', '<figure class=\"table\"><table><tbody><tr><td><p>       Qruplar</p><p>Tarix</p></td><td>050405 İqtisadiyyat İQ 2.21 II Kurs</td><td>050616 İnformasiya texnologiyaları İT 2.21 II kurs</td><td>050655 İnformasiya texnologiyaları İT 2.19 III kurs</td><td>050655 İnformasiya texnologiyaları İT 2.20 III kurs</td><td>050509 Kompüter elmləri KE 2.21 II kurs</td></tr><tr><td>13.07.2022</td><td>Makroiqtisadiyyat Dos.Rüstəmov İlham Saat 14.00 Otaq 1 </td><td>Kompüter arxitekturası Ass.Ağazadə Jalə Saat 9.00 Otaq 4 </td><td>Kommunikasiya vasitələri Dos.Sərdarov Yaqub Saat.9.00 Otaq 3</td><td> Sistem mühəndisliyi Dos.Abdullayev Vüqar Saat 9.00 Otaq 5* </td><td>Kompleks analiz Prof.Əliyev Araz Saat 9.00 Otaq 5</td></tr><tr><td>14.07.2022</td><td>Ehtimal nəzəriyyəsi Prof.Əliyev Araz Saat 14.00 Otaq 1/ İKT Dos.Qasımov Sərdar Saat 12.00 Otaq 2</td><td>Kompüter arxitekturası Ass.Ağazadə Jalə Saat 9.00 Otaq 4</td><td>İnformasiya sistemlərin layihələndirməsi Dos.Məmmədov Vaqif Saat 9.00 Otaq 3</td><td>Verilənlərin strukturu və alqoritmləri Dos.Hacıyev Faiq Saat 9.00 Otaq 5*</td><td>Riyazi analiz 2 Dos. Hüseynov Hamlet Saat 9.00 Otaq 4</td></tr><tr><td>15.07.2022</td><td>Xarici dildə işgüzar və akademiyası Dos.Əliyeva Sevil Saat 9.00 Otaq 1*</td><td>Kompüter arxitekturası Ass.Ağazadə Jalə Saat 9.00 Otaq 4</td><td>Rəqəmsal sistemlər Dos.Abdullayev Vüqar Saat 9.00 Otaq 3</td><td>Əməliyyat sistemləri Dos.Abdullayev Vüqar Saat 14.00 Otaq 5*</td><td>Proqramlaşdırmanın əsasları Dos.Nağıyev Həsən Saat 9.00 Otaq 4*</td></tr><tr><td>16.07.2022</td><td>Azərbaycan dilində işgüzar yazışmalar b/m Əliyev Rəfael saat 9.00 Otaq6</td><td>Fizika Prof.Musayev Musavər Saat 9.00 Otaq 4</td><td>Korporativ informasiya sistemləri Dos.Əsgərova Bahar Saat 9.00 Otaq 3</td><td>Menecmentin əsasları Ass.Kamilov İlham Saat.9.00 Otaq 5*</td><td>Əməliyyat sistemi Dos.Nağıyev Həsən Saat 9.00 Otaq 4</td></tr><tr><td>18.07.2022</td><td>Statistika Ass.Hüseynov Səfər Saat.9.00 Otaq 6</td><td>Azərbaycan dilində işgüzar yazışmalar b/m Əliyev Rəfael saat 9.00 Otaq 6</td><td>Hesablama təcrübələri Dos.Əliyeva Yeganə Saat 9.00 Otaq 3</td><td> </td><td>Xarici dildə işgüzar yazışmalar b/m Şıxıyeva Sevda saat 9.00 Otaq 4</td></tr></tbody></table></figure><p> </p>', '', '', '2022-07-05', '6f8008905fc4891b9b8808201cc37fb7.jpeg', '', '.jpeg', 1),
(42, '2d2', '', '', '<p>wqdd</p>', '', '', '2022-07-22', '', '', '.png', 1);
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d

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
(7, 'Fakri', 'N', 'F', 'kjdj@kjdsj', '30f6dd0eb6557d643e272d9cf071e717a0f374a7', '190201201209', 2, 1),
(8, 'Fakhri', 'Nifdalizada', 'Fariz', 'fnifdalizade@dalaj', '30f6dd0eb6557d643e272d9cf071e717a0f374a7', '10912091209', 2, 1);

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
<<<<<<< HEAD
(13, '', 'Yeganə', 'Sadıqova', '', 2, 3, 'yegan52@mail.ru', '', '', '', '', '', '', '', '050 324 55 65', 1),
(14, '', 'Lətafət', 'İsmayılova', '', 2, 3, 'latifa.ismaylova@gmail.com', '', '', '', '', '', '', '', '055 420 81 45', 1),
(15, 'bc002c173baa9381bc6a84b50d29c778.jpg', 'Osman', 'Mirzəyev', 'Həsən ', 2, 1, 'osman55@mail.ru', '', '<ul><li>Rus</li><li>Ingilis</li></ul>', '<p>M.Əzizbəyov adına Azərbaycan Neft və Kimya institutunun (1985-1990) İstehsal proseslərinin avtomatlaşdırılması fakultəsini bitirib.</p><p>2005-ci ildə texnika elmləri namizədi alimlik dərəcəsi alıb.</p><p>2007-ci ildən dosentdir.2012-ci ildə “Əməkdar Elm və Təhsil”işçisi medalı ilə təltif olunub.</p><p>57 elmi-metodik məqaləsi dərc olunub</p>', '1964-07-01', '', '', '', '', 1),
(16, '', 'Mehriban', 'İsmayılova', '', 2, 2, 'mexribani@inbox.ru', '', '', '', '', '', '', '', '050 282 08 61', 1),
(17, '', 'Gulnurə', 'Məmmədova', '', 2, 4, 'gulnure55@gmail.com', '', '', '', '', '', '', '', '', 1),
(18, '2b6482985243b5f9c94bbc61b58c54c3.jpg', 'İbrahim', 'Həbibov', 'Əbülfəz ', 3, 5, 'h.ibo@mail.ru', '<p>Azərbaycan Dövlət Neft Akademiyası, 1973-cü il məzunu, Neft-mexanika</p>', '<ul><li>Rus</li><li>İngilis </li></ul>', '', '1951-06-04', '', '', '', '050 216-48-87', 1),
(19, '', 'Malik', 'Abdullayev', '', 2, 6, 'malik.abdullayev.52@mail.ru', '', '', '', '', '', '', '', '050 300 03 84', 1),
(20, '', 'Rafiq', 'Məmmədov', '', 2, 7, 'rafiq.mammadov@asoiu.edu.az', '', '', '', '', '', '', '', '050-557-66-57', 1),
(21, 'fbf6d70572422c7452159c3cd23fa742.jpg', 'Vida', 'Muradxanlı', '', 2, 8, 'vmuradkhanova@yahoo.com', '<p>2003    Azərbaycan Dövlət Neft Akademiyası, Bakı, Azərbaycan<br>1984-1989           Azərbaycan Neft və Kimya İnstitutu, Bakı, Azərbaycan<br>Kimya-texnologiya Fakultəsi,<br>Kimyaçı-texnoloq mühəndisi, fərqlənmə diplomu<br>ELMİ ƏSƏRLƏRİ<br>33 məqalə və tezis, 1 dərs vəsaiti və 2 fənn proqramı</p>', '<ul><li>Rus</li><li>İngilis </li></ul>', '', '1967-10-23', '', '', '', '', 1),
(22, '530a7d2775f7306d35edf93b2f3f095b.jpg', 'Müsavər', 'Musayev', '', 3, 9, 'm_musaver@yahoo.com', '<ul><li>1974-1977 –ci  illərdə BDU-nun fizika, 1977-1980-cı illərdə isə Moskva Fizika Mühəndisləri İnstitutunun Xüsusi Fizika Fakultəsi</li><li>1980-1983-cü illərdə  Moskva Fizika Mühəndisləri İnstitutunun aspirant</li><li>1984-1989 illərdə ADNSU-nun Fizika kafedrasında assistent</li><li>1989-2011  illərdə ADNSU-nun Fizika kafedrasında dosent</li><li>2011-ci ildən  ADNSU-nun Fizika kafedrasında professor</li></ul>', '<ul><li>Rus</li><li>İngilis </li></ul>', '', '', '', '', '', '012 598-41-91', 1);
=======
(10, '', 'wlgiw', 'lgrjl', 'lgijlr', 3, 1, 'rlgj', '<p>rwlijg</p>', '<p>lirjgi</p>', '<p>rglji</p>', '2022-07-11', 'rlig', 'lrgj', 'rlgje', 'rwgljwiVD', 1),
(11, '640b8983bd387168d9db4e65a71e052c.png', 'ürlgi', 'lrjg', 'reljgl', 1, 2, 'grlj', '<p>rglji</p>', 'grlji', 'grlj', '2022-07-05', 'rljgi', 'lijlgr', 'lijreh', 'lijrh', 1),
(12, '78367624c7d75984570b73955781fec7.png', 'wewl', 'liwjlij', 'lrjliwjg', 2, 1, 'lirejlgj', '<p>lrgjlij</p>', '<p>glerjjg</p>', '<p>lwjgl</p>', '2022-07-12', 'wrljgi', 'lgwjl', 'lgrjl', 'lriwj', 1);
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d

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
<<<<<<< HEAD
(11, 'Korporativ Informasiya Sistemləri', '8f761e587fe631b6d8d8db6f2ff54081.doc', '86fe32072906ba262a251bab78d9db9e.doc', '30c02f4f187afe23b5d3e1d4ed375e78.doc', '5d59c660057a35fc5a37c9c480428725.doc', 1),
(12, 'Infosec', '', '', '', '', 1);
=======
(8, 'Database', 'cf7bd98d9f759f9dee906db608b93abf.png', '2fdef61134d2671e41a44dd800289804.docx', '74f114d6b018c3c4d3d0ad7043149694.png', '4e931cef0e032be9fa43102be0bb3e0a.jpg', 1),
(10, 'Infosec', '124bffc4c0b64845906782e1cbe18efb.docx', 'eb6fdf57f379d010e5f4e809b4d54c62.docx', '274f3182c3572c3a46134aff832db874.gif', '36462442488a4bac4adc9bd663864c2b.gif', 1);
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d

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
<<<<<<< HEAD
(9, 1, 12, 1),
(10, 2, 12, 1),
(11, 2, 11, 1);
=======
(9, 1, 8, 1),
(10, 2, 10, 1),
(11, 2, 8, 1);
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d

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
<<<<<<< HEAD
(8, 2, 'ca1daa8d5ede95bca3498446d19c5fc5.png', 39, 1),
(9, 1, '1629a17a0b3bb6ab0420a973f079180b.png', 43, 1);
=======
(6, 1, 'download3.png', 0, 1),
(8, 2, 'ca1daa8d5ede95bca3498446d19c5fc5.png', 39, 1);
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d

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
(6, 1, '879676a3429f815ea1338cee4f39ddce.jpeg', 1);

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
  `re_group_no` int(11) NOT NULL,
  `re_subject_id` int(11) NOT NULL,
  `re_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items9`
--

INSERT INTO `items9` (`re_id`, `re_group_no`, `re_subject_id`, `re_status`) VALUES
(8, 2, 8, 1),
(9, 2, 10, 1);

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
(1, 'IT 2.21', 1, 2),
(2, 'FH 2.18', 3, 3);

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
(1, 'birinci görünsün'),
(2, 'digərləri');

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
(2, 'e21d69355c3cf2393a08b7fdf438c4bf.jpeg', '.jpeg', 'e093fb041c69bc8789b96af0515f6d9b.pdf', '.pdf', 1),
(3, '41208cf3623d065cebe4ebbe157b488a.jpg', '.jpg', 'e093fb041c69bc8789b96af0515f6d9b.pdf', '.pdf', 2),
(6, '', '', 'e093fb041c69bc8789b96af0515f6d9b.pdf', '.pdf', 1);

-- --------------------------------------------------------

--
<<<<<<< HEAD
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
(19, 7, 2, 11, 45, 33),
(20, 8, 2, 11, 40, 127),
(21, 7, 2, 12, 11, 21);

-- --------------------------------------------------------

--
=======
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
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
(1, 'İnformasiya texnologiyaları'),
(2, 'Elektroenergetika mühəndisliyi'),
<<<<<<< HEAD
(3, 'Fövqəladə hallar və həyat fəaliyyətinin təhlükəsizliyi'),
(4, 'Kimya mühəndisliyi'),
(5, 'Texnoloji maşın və avadanlıqlar mühəndisliyi'),
(6, 'Neft-qaz mühəndisliyi'),
(7, 'Neft-qaz qurğuları mühəndisliyi'),
(8, 'Sənayenin təşkili və idarə edilməsi'),
(9, 'Geofizika mühəndisliyi');
=======
(3, 'Fövqəladə hallar və həyat fəaliyyətinin təhlükəsizliyi');
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d

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
<<<<<<< HEAD
-- Indexes for table `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`po_id`);

--
=======
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
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
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d

--
-- AUTO_INCREMENT for table `items2`
--
ALTER TABLE `items2`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `items3`
--
ALTER TABLE `items3`
<<<<<<< HEAD
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
=======
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d

--
-- AUTO_INCREMENT for table `items4`
--
ALTER TABLE `items4`
<<<<<<< HEAD
  MODIFY `ab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
=======
  MODIFY `ab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d

--
-- AUTO_INCREMENT for table `items5`
--
ALTER TABLE `items5`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `items6`
--
ALTER TABLE `items6`
<<<<<<< HEAD
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
=======
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d

--
-- AUTO_INCREMENT for table `items7`
--
ALTER TABLE `items7`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `items8`
--
ALTER TABLE `items8`
  MODIFY `ce_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `items9`
--
ALTER TABLE `items9`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `item_category`
--
ALTER TABLE `item_category`
  MODIFY `i_c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_category2`
--
ALTER TABLE `item_category2`
  MODIFY `group_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `le_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
<<<<<<< HEAD
-- AUTO_INCREMENT for table `point`
--
ALTER TABLE `point`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
=======
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
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

-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 18 Novembre 2015 à 08:45
-- Version du serveur: 5.5.46
-- Version de PHP: 5.4.45-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `betisier`
--

-- --------------------------------------------------------

--
-- Structure de la table `pwd`
--

CREATE TABLE IF NOT EXISTS `pwd` (
  `pwd_num` int(11) NOT NULL AUTO_INCREMENT,
  `pwd_libelle` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`pwd_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=369 ;

--
-- Contenu de la table `pwd`
--

INSERT INTO `pwd` (`pwd_num`, `pwd_libelle`) VALUES
(1, '111111'),
(2, '11111111'),
(3, '112233'),
(4, '121212'),
(5, '123123'),
(6, '123456'),
(7, '1234567'),
(8, '12345678'),
(9, '131313'),
(10, '232323'),
(11, '654321'),
(12, '666666'),
(13, '696969'),
(14, '777777'),
(15, '7777777'),
(16, '8675309'),
(17, '987654'),
(18, 'aaaaaa'),
(19, 'abc123'),
(20, 'abcdef'),
(21, 'abgrtyu'),
(22, 'access'),
(23, 'access14'),
(24, 'action'),
(25, 'albert'),
(26, 'alexis'),
(27, 'amanda'),
(28, 'amateur'),
(29, 'andrea'),
(30, 'andrew'),
(31, 'angela'),
(32, 'angels'),
(33, 'animal'),
(34, 'anthony'),
(35, 'apollo'),
(36, 'apples'),
(37, 'arsenal'),
(38, 'arthur'),
(39, 'asdfgh'),
(40, 'ashley'),
(41, 'august'),
(42, 'austin'),
(43, 'badboy'),
(44, 'bailey'),
(45, 'banana'),
(46, 'barney'),
(47, 'baseball'),
(48, 'batman'),
(49, 'beaver'),
(50, 'beavis'),
(51, 'bigdaddy'),
(52, 'bigdog'),
(53, 'birdie'),
(54, 'bitches'),
(55, 'biteme'),
(56, 'blazer'),
(57, 'blonde'),
(58, 'blondes'),
(59, 'bond007'),
(60, 'bonnie'),
(61, 'booboo'),
(62, 'booger'),
(63, 'boomer'),
(64, 'boston'),
(65, 'brandon'),
(66, 'brandy'),
(67, 'braves'),
(68, 'brazil'),
(69, 'bronco'),
(70, 'broncos'),
(71, 'bulldog'),
(72, 'buster'),
(73, 'butter'),
(74, 'butthead'),
(75, 'calvin'),
(76, 'camaro'),
(77, 'cameron'),
(78, 'canada'),
(79, 'captain'),
(80, 'carlos'),
(81, 'carter'),
(82, 'casper'),
(83, 'charles'),
(84, 'charlie'),
(85, 'cheese'),
(86, 'chelsea'),
(87, 'chester'),
(88, 'chicago'),
(89, 'chicken'),
(90, 'cocacola'),
(91, 'coffee'),
(92, 'college'),
(93, 'compaq'),
(94, 'computer'),
(95, 'cookie'),
(96, 'cooper'),
(97, 'corvette'),
(98, 'cowboy'),
(99, 'cowboys'),
(100, 'crystal'),
(101, 'dakota'),
(102, 'dallas'),
(103, 'daniel'),
(104, 'danielle'),
(105, 'debbie'),
(106, 'dennis'),
(107, 'diablo'),
(108, 'diamond'),
(109, 'doctor'),
(110, 'doggie'),
(111, 'dolphin'),
(112, 'dolphins'),
(113, 'donald'),
(114, 'dragon'),
(115, 'dreams'),
(116, 'driver'),
(117, 'eagle1'),
(118, 'eagles'),
(119, 'edward'),
(120, 'einstein'),
(121, 'erotic'),
(122, 'extreme'),
(123, 'falcon'),
(124, 'fender'),
(125, 'ferrari'),
(126, 'firebird'),
(127, 'fishing'),
(128, 'florida'),
(129, 'flower'),
(130, 'flyers'),
(131, 'football'),
(132, 'forever'),
(133, 'freddy'),
(134, 'freedom'),
(135, 'gandalf'),
(136, 'gateway'),
(137, 'gators'),
(138, 'gemini'),
(139, 'george'),
(140, 'giants'),
(141, 'ginger'),
(142, 'golden'),
(143, 'golfer'),
(144, 'gordon'),
(145, 'gregory'),
(146, 'guitar'),
(147, 'gunner'),
(148, 'hammer'),
(149, 'hannah'),
(150, 'hardcore'),
(151, 'harley'),
(152, 'heather'),
(153, 'helpme'),
(154, 'hockey'),
(155, 'hooters'),
(156, 'horney'),
(157, 'hotdog'),
(158, 'hunter'),
(159, 'hunting'),
(160, 'iceman'),
(161, 'iloveyou'),
(162, 'internet'),
(163, 'IUTIUT'),
(164, 'iwantu'),
(165, 'jackie'),
(166, 'jackson'),
(167, 'jaguar'),
(168, 'jasmine'),
(169, 'jasper'),
(170, 'jennifer'),
(171, 'jeremy'),
(172, 'jessica'),
(173, 'johnny'),
(174, 'johnson'),
(175, 'jordan'),
(176, 'joseph'),
(177, 'joshua'),
(178, 'junior'),
(179, 'justin'),
(180, 'killer'),
(181, 'knight'),
(182, 'ladies'),
(183, 'lakers'),
(184, 'lauren'),
(185, 'leather'),
(186, 'legend'),
(187, 'letmein'),
(188, 'little'),
(189, 'london'),
(190, 'lovers'),
(191, 'maddog'),
(192, 'madison'),
(193, 'maggie'),
(194, 'magnum'),
(195, 'marine'),
(196, 'marlboro'),
(197, 'martin'),
(198, 'marvin'),
(199, 'master'),
(200, 'matrix'),
(201, 'matthew'),
(202, 'maverick'),
(203, 'maxwell'),
(204, 'melissa'),
(205, 'member'),
(206, 'mercedes'),
(207, 'merlin'),
(208, 'michael'),
(209, 'michelle'),
(210, 'mickey'),
(211, 'midnight'),
(212, 'miller'),
(213, 'mistress'),
(214, 'monica'),
(215, 'monkey'),
(216, 'monster'),
(217, 'morgan'),
(218, 'mother'),
(219, 'mountain'),
(220, 'muffin'),
(221, 'murphy'),
(222, 'mustang'),
(223, 'naked'),
(224, 'nascar'),
(225, 'nathan'),
(226, 'naughty'),
(227, 'ncc1701'),
(228, 'newyork'),
(229, 'nicholas'),
(230, 'nicole'),
(231, 'nipple'),
(232, 'nipples'),
(233, 'oliver'),
(234, 'orange'),
(235, 'packers'),
(236, 'panther'),
(237, 'panties'),
(238, 'parker'),
(239, 'password'),
(240, 'password1'),
(241, 'password12'),
(242, 'password123'),
(243, 'patrick'),
(244, 'peaches'),
(245, 'peanut'),
(246, 'pepper'),
(247, 'phantom'),
(248, 'phoenix'),
(249, 'player'),
(250, 'please'),
(251, 'pookie'),
(252, 'porsche'),
(253, 'prince'),
(254, 'princess'),
(255, 'private'),
(256, 'purple'),
(257, 'pussies'),
(258, 'qazwsx'),
(259, 'qwerty'),
(260, 'qwertyui'),
(261, 'rabbit'),
(262, 'rachel'),
(263, 'racing'),
(264, 'raiders'),
(265, 'rainbow'),
(266, 'ranger'),
(267, 'rangers'),
(268, 'rebecca'),
(269, 'redskins'),
(270, 'redsox'),
(271, 'redwings'),
(272, 'richard'),
(273, 'robert'),
(274, 'rocket'),
(275, 'rosebud'),
(276, 'runner'),
(277, 'rush2112'),
(278, 'russia'),
(279, 'samantha'),
(280, 'sammy'),
(281, 'samson'),
(282, 'sandra'),
(283, 'saturn'),
(284, 'scooby'),
(285, 'scooter'),
(286, 'scorpio'),
(287, 'scorpion'),
(288, 'secret'),
(289, 'sexsex'),
(290, 'shadow'),
(291, 'shannon'),
(292, 'shaved'),
(293, 'sierra'),
(294, 'silver'),
(295, 'skippy'),
(296, 'slayer'),
(297, 'smokey'),
(298, 'snoopy'),
(299, 'soccer'),
(300, 'sophie'),
(301, 'spanky'),
(302, 'sparky'),
(303, 'spider'),
(304, 'squirt'),
(305, 'srinivas'),
(306, 'startrek'),
(307, 'starwars'),
(308, 'steelers'),
(309, 'steven'),
(310, 'sticky'),
(311, 'stupid'),
(312, 'success'),
(313, 'summer'),
(314, 'sunshine'),
(315, 'superman'),
(316, 'surfer'),
(317, 'swimming'),
(318, 'sydney'),
(319, 'taylor'),
(320, 'tennis'),
(321, 'teresa'),
(322, 'tester'),
(323, 'testing'),
(324, 'theman'),
(325, 'thomas'),
(326, 'thunder'),
(327, 'thx1138'),
(328, 'tiffany'),
(329, 'tigers'),
(330, 'tigger'),
(331, 'tomcat'),
(332, 'topgun'),
(333, 'TOUTOU'),
(334, 'toyota'),
(335, 'travis'),
(336, 'trouble'),
(337, 'trustno1'),
(338, 'tucker'),
(339, 'turtle'),
(340, 'twitter'),
(341, 'united'),
(342, 'vagina'),
(343, 'victor'),
(344, 'victoria'),
(345, 'viking'),
(346, 'voodoo'),
(347, 'voyager'),
(348, 'walter'),
(349, 'warrior'),
(350, 'welcome'),
(351, 'whatever'),
(352, 'william'),
(353, 'willie'),
(354, 'wilson'),
(355, 'winner'),
(356, 'winston'),
(357, 'winter'),
(358, 'wizard'),
(359, 'xavier'),
(360, 'xxxxxx'),
(361, 'xxxxxxxx'),
(362, 'yamaha'),
(363, 'yankee'),
(364, 'yankees'),
(365, 'yellow'),
(366, 'zxcvbn'),
(367, 'zxcvbnm'),
(368, 'zzzzzz');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
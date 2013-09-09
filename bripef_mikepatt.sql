-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 07, 2013 at 03:26 PM
-- Server version: 5.5.32-cll-lve
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bripef_mikepatt`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=149 ;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`) VALUES
(1, 'Adams, Douglas'),
(2, 'Alexander, Lloyd'),
(3, 'Anson, Jay'),
(4, 'Applegate, K.A.'),
(5, 'Archer, Jeffrey'),
(6, 'Armstrong, William H.'),
(7, 'Arterburn, Stephen'),
(8, 'Asimov, Isaac'),
(9, 'Atwater-Rhodes, Amelia'),
(10, 'Baldacci, David'),
(11, 'Banks, Lynne Reid'),
(12, 'Barron, T.A.'),
(13, 'Bell, Hilari'),
(14, 'Berlitz, Charles'),
(15, 'Bond, Larry'),
(16, 'Bradford, Richard'),
(17, 'Bradley, Marion Zimmer'),
(18, 'Briggs, Andy'),
(19, 'Brown, Dan'),
(20, 'Card, Orson Scott'),
(21, 'Carr, John Dickson'),
(22, 'Carter, Alden R.'),
(23, 'Cerra, Allison'),
(24, 'Christie, Agatha'),
(25, 'Christopher, Matt'),
(26, 'Ciencin, Scott'),
(27, 'Clancy, Tom'),
(28, 'Cohen, Daniel'),
(29, 'Colfer, Eoin'),
(30, 'Cook, Robin'),
(31, 'Cooney, Caroline B.'),
(32, 'Cooper, Henry S.F. Jr.'),
(33, 'Cornwell, Patricia'),
(34, 'Cover, Arthur'),
(35, 'Coville, Bruce'),
(36, 'Cowper, Richard'),
(37, 'Crossley-Holland, Kevin'),
(38, 'Curley, Marianne'),
(39, 'Deary, Terry'),
(40, 'Dekker, Ted'),
(41, 'Deutermann, P.T.'),
(42, 'Disney, Doris Miles'),
(43, 'DiTerlizzi, Tony'),
(44, 'Dixon, Franklin W.'),
(45, 'Donaldson, Stephen R.'),
(46, 'Douglas, Carole Nelson'),
(47, 'Dreyfus, Jack'),
(48, 'Duane, Diane'),
(49, 'Edwards, Grace F.'),
(50, 'Esrac, William'),
(51, 'Fisher, R.L.'),
(52, 'Fitzgerald, John D.'),
(53, 'Freedley, George'),
(54, 'Fritzsch, Harald'),
(55, 'Gaiman, Neil'),
(56, 'Garfield, Leon'),
(57, 'Gerritsen, Tess'),
(58, 'Greene, Bob'),
(59, 'Grimes, Martha'),
(60, 'Grisham, John'),
(61, 'Haggard, Rider'),
(62, 'Harris, Thomas'),
(63, 'Hartnett, Sonya'),
(64, 'Heald, Tim'),
(65, 'Hoban, Russell'),
(66, 'Hobb, Robin'),
(67, 'Horowitz, Anthony'),
(68, 'Hosseini, Khaled'),
(69, 'Howe, James'),
(70, 'Hughes, Francine'),
(71, 'Ibbotson, Eva'),
(72, 'James, P.D.'),
(73, 'Jastrow, Robert'),
(74, 'Johansen, Iris'),
(75, 'Jordan, Michael'),
(76, 'Jordan, Terry'),
(77, 'Kaku, Michio'),
(78, 'Kehret, Peg'),
(79, 'Kellerman, Faye'),
(80, 'Kellerman, Jonathan'),
(81, 'Kellerman, Jonathan & Faye'),
(82, 'King, Stephen'),
(83, 'Knebel, Fletcher'),
(84, 'Koontz, Dean'),
(85, 'Kramer, S.A.'),
(86, 'Kronzck, Allan Zola'),
(87, 'L''amour, Louis'),
(88, 'Larsson, Stieg'),
(89, 'Lawhead, Stephen R.'),
(90, 'LeCarre, John'),
(91, 'LeGuin, Ursula K.'),
(92, 'L''Engle, Madeleine'),
(93, 'Lerangis, Peter'),
(94, 'Lyle, D.P.'),
(95, 'Margolin, Phillip'),
(96, 'Meyer, Stephenie'),
(97, 'Miller, Arthur'),
(98, 'Miller, Marvin'),
(99, 'Morreale, Marie'),
(100, 'Murchie, Guy'),
(101, 'Niven, Larry'),
(102, 'Nix, Garth'),
(103, 'Orwell, George'),
(104, 'Osborn, Fairfield'),
(105, 'Paolini, Christopher'),
(106, 'Paterson, Katherine'),
(107, 'Patterson, James'),
(108, 'Paulsen, Gary'),
(109, 'Paver, Michelle'),
(110, 'Peel, John'),
(111, 'Perry, Anne'),
(112, 'Philbrick, Rodman'),
(113, 'Pierce, Tamora'),
(114, 'Pullman, Philip'),
(115, 'Rachlis, Eugene'),
(116, 'Radford, Ken'),
(117, 'Raskin, Ellen'),
(118, 'Rendell, Ruth'),
(119, 'Resnick, Mike'),
(120, 'Rollins, James'),
(121, 'Rothman, Milton A.'),
(122, 'Salinger, J.D.'),
(123, 'Shatner, William'),
(124, 'Shklovskii, Iosif S.'),
(125, 'Silk, Joseph'),
(126, 'Simpson, Dorothy'),
(127, 'Smith, Sam'),
(128, 'Snicket, Lemony'),
(129, 'Sniegoski, Thomas E.'),
(130, 'Sobol, Donald J.'),
(131, 'Stanley, George Edward'),
(132, 'Stewart, Paul'),
(133, 'Stine, R.L.'),
(134, 'Stone, Tom B.'),
(135, 'Strasser, Todd'),
(136, 'Stroud, Jonathan'),
(137, 'Swindoll, Charles R.'),
(138, 'Tolkien, J.R.R.'),
(139, 'Toomey, David'),
(140, 'Truman, Margaret'),
(141, 'Twain, Mark'),
(142, 'Tyndale'),
(143, 'Warner, Gertrude Chandler'),
(144, 'Weinberger, Kimberly'),
(145, 'Welch, R.C.'),
(146, 'William, Golding'),
(147, 'Wilser, Jeff'),
(148, 'Young, Sarah');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `isbn` varchar(20) NOT NULL,
  `name` varchar(500) NOT NULL,
  `gr` int(20) NOT NULL COMMENT 'goodreads',
  `read` int(2) NOT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`isbn`, `name`, `gr`, `read`) VALUES
('014240120X', 'The Westing Game', 902, 1),
('034547063X', 'Black House', 10607, 0),
('037580417X', 'Dinotopia 10 - Sky Dance', 144037, 1),
('038529817X', 'The Empty Sleeve', 1165265, 0),
('042518160X', 'Danse Macabre', 11563, 0),
('043907035X', 'Animorphs 35 - The Proposal', 363393, 1),
('043910677X', 'Animorphs 38 - The Arrival', 363404, 1),
('043911523X', 'Animorphs 49 - The Diversion', 125339, 1),
('043999652X', 'Animorphs 13.5 - The Hork-Bajir Chronicles', 363354, 1),
('044022750X', 'Brian''s Saga 2 - The River', 2915, 1),
('044023803X', 'The Kiesha''ra Volume 1 - Hawksong', 30334, 1),
('044808905X', 'Hardy Boys 05 - Hunting for Hidden Gold', 76951, 1),
('044808936X', 'Hardy Boys 36 - The Secret of Pirates'' Hill', 76968, 1),
('044808953X', 'Hardy Boys 53 - The Clue of The Hissing Serpent', 760129, 1),
('045052468X', 'The Dark Half', 11597, 0),
('045057458X', 'Needful Things', 107291, 0),
('055213306X', 'Sword & Circlet 1 - Keepers of Edanvant', 1520324, 1),
('055311381X', 'A House in Space', 3130580, 0),
('055325300X', 'Time Machine 10 - American Revolutionary', 156522, 1),
('059049418X', 'Animorphs 13 - The Change', 363388, 1),
('059076263X', 'Animorphs 30 - The Reunion', 363402, 1),
('067102423X', 'Bag of Bones', 10589, 0),
('067103264X', 'Storm of the Century', 13451, 0),
('068985417X', 'The Farsala Trilogy 2 - Rise of a Hero', 248377, 1),
('071671812X', 'The Big Bang - The Creation and Evolution of The Universe', 860793, 1),
('078681859X', 'The Bartimaeus Trilogy 1 - The Amulet of Samarkand', 334123, 1),
('084312914X', 'Scary Stories for Sleep-Overs', 630215, 1),
('1244646385', 'The Bachman Books - Rage, The Long Walk, Roadwork, The Running Man', 12858937, 1),
('1258011115', 'They Came To Kill', 12227194, 1),
('1400096472', 'A Taste For Death', 3830, 1),
('1400316731', 'The Skin Map', 7776444, 1),
('141321318', 'Artemis Fowl 3 - The Eternity Code', 227865, 1),
('141651693X', 'Dark Tower V - Wolves of the Calla', 4978, 0),
('1416521496', 'Dark Tower VI - Song of Susannah', 5093, 0),
('1416524290', 'The Girl Who Loved Tom Gordon', 11564, 0),
('1416524347', 'Pet Sematary', 10583, 0),
('1416524355', 'Everything''s Eventual', 10579, 0),
('1416524517', 'Cell', 10567, 0),
('1416524525', 'Dark Tower VII - The Dark Tower', 5091, 0),
('1416552510', 'Duma Key', 472343, 0),
('141655484X', 'Blaze (Bachman)', 349473, 0),
('1416584080', 'Just After Sunset', 2906039, 0),
('1416928146', 'Bunnicula 3 - The Celery Stalks at Midnight', 183436, 1),
('1416928170', 'Bunnicula 1', 281235, 1),
('1416937811', 'Spiderwick Chronicles 2.3 - Goblins Attack', 2818174, 1),
('142302228', 'Danger at the Fair', 1307082, 1),
('1423108361', 'Artemis Fowl 6 - The Time Paradox', 2179276, 1),
('142400653', 'More Adventures of the Great Brain', 17701, 0),
('142402435', 'Up Country', 393562, 1),
('142406120', 'Alex Rider 2 - Point Blanc', 224500, 1),
('143039563', 'The Adventures of Tom Sawyer', 24583, 0),
('1439148503', 'Under the Dome', 6320534, 0),
('1439192561', 'Full Dark, No Stars', 7912007, 0),
('1442408626', 'The Fallen 1 - The Fallen', 7124101, 1),
('1451627289', '"11/22/1963"', 10644930, 0),
('152052070', 'Young Wizards 7 - Wizard''s Holiday', 116562, 1),
('152060847', 'The Skull of Truth', 363425, 1),
('1557091447', 'Hardy Boys 01 - The Tower Treasure', 87976, 1),
('1557091498', 'Hardy Boys 06 - The Shore Road Mystery', 278537, 1),
('1557092745', 'Hardy Boys 16 - A Figure In Hiding', 151313, 1),
('1572703210', 'Poirot Investigates', 140302, 0),
('1572707313', 'Mrs. McGinty''s Dead', 121622, 1),
('1582349134', 'Guardians of Time 1 - The Named', 1034516, 1),
('1582882231', 'Alien Crimes', 2216661, 1),
('1591451884', 'Jesus Calling', 381421, 0),
('1594489505', 'A Thousand Splendid Suns', 128029, 0),
('1595543635', 'The Lost Books 2 - Infidel', 1620912, 0),
('1595543716', 'The Lost Books 3 - Renegade', 2234034, 0),
('1595543724', 'The Lost Books 4 - Chaos', 2234033, 0),
('1605506613', 'The Maxims of Manhood', 6462605, 1),
('1891743007', 'The U.S. Constitution', 89962, 1),
('192755447', 'Council of Evil', 2442863, 0),
('192861891', 'Hyperspace', 33426, 1),
('1930871279', 'Touch Points for Graduates', 17204912, 0),
('2226131906', 'Dreamcatcher', 11570, 0),
('2253147699', 'Christine', 10629, 1),
('2266047426', 'Dolores Claiborne', 10625, 0),
('253212340', 'Riddley Walker', 776573, 0),
('307269981', 'Millennium Series 2 - The Girl Who Played With Fire', 5060378, 0),
('307348245', 'Cujo', 10603, 0),
('307817083', 'Adam Sharp 2 - London Calling', 13572969, 1),
('312994818', 'The Firefly', 21295, 1),
('316015849', 'Twilight Saga 1 - Twilight', 41865, 1),
('316018708', 'Sail', 2029176, 0),
('316018783', 'Alex Cross 16 - I, Alex Cross', 6405929, 1),
('316142018', 'Double Play At Short', 1000127, 1),
('316159786', 'Beach Road', 85733, 0),
('316666084', 'Our Plundered Planet', 8720249, 1),
('330489089', 'The Secret of Platform 13', 818801, 0),
('340552050', 'The Secret Pilgrim', 46462, 1),
('340636025', 'Graveyard School 5 - Revenge of the Dinosaurs', 6408837, 1),
('340640146', 'Rose Madder', 10619, 0),
('340818670', 'Hearts in Atlantis', 11602, 0),
('340829788', 'Dark Tower IV - Wizard and Glass', 5096, 0),
('345418476', 'The Second Chronicles of Thomas Covenant 2 - The One Tree', 22875, 1),
('345418484', 'White Gold Wielder', 228992, 0),
('345452607', 'Alex Delaware 18 - Therapy', 127221, 1),
('345452631', 'Alex Delaware 21 - Obsession', 127219, 1),
('345453743', 'The Ultimate Hitchhiker''s Guide to the Galaxy', 13, 1),
('345459849', 'Mordant''s Need 2 - A Man Rides Through', 22867, 1),
('345459857', 'Mordant''s Need 1 - The Mirror of Her Dreams', 177250, 1),
('345466608', 'Capital Crimes', 185911, 1),
('345467078', 'Alex Delaware 19 - Rage', 85505, 1),
('345476999', 'The Mephisto Club', 32254, 1),
('375507779', 'The Talisman', 59219, 0),
('375840400', 'Inheritance Cycle 2 - Eldest', 45978, 1),
('375856110', 'Inheritance Cycle 4 - Inheritance', 7664041, 1),
('380724049', 'The Return of The Indian', 259589, 1),
('385199570', 'The Stand', 149267, 0),
('385338600', 'A Time To Kill', 32542, 1),
('385339658', 'The King of Torts', 5356, 0),
('385504225', 'The Lost Symbol', 6411961, 0),
('385516487', 'Salem''s Lot Illustrated', 5413, 0),
('393060136', 'The New Time Travelers', 1497173, 1),
('393850048', 'Red Giants and White Dwarfs', 786707, 1),
('395957915', 'The Seven Mysteries of Life', 390786, 1),
('399146261', 'The Key to Midnight', 21323, 1),
('399153578', 'Crisis', 66466, 0),
('425136981', 'Shadowfires', 32428, 1),
('425175405', 'Black Notice', 123598, 1),
('425183033', 'Net Force Explorer 17 - Cloak and Dagger', 19682, 1),
('425210758', 'Mr. Murder', 32434, 1),
('425214761', 'At Risk', 6543, 1),
('435233076', 'Death of A Salesman', 12898, 1),
('439051185', 'Animorphs 25 - The Extreme', 363359, 1),
('439061644', 'Animorphs 56 - Alternamorphs 1 - The First Journey', 343190, 1),
('439061652', 'Animorphs 58 - Meet the Stars', 366792, 1),
('439070317', 'Animorphs 31 - The Conspiracy', 363424, 1),
('439070325', 'Animorphs 32 - The Separation', 125340, 1),
('439070333', 'Animorphs 33 - The Illusion', 302871, 1),
('439070341', 'Animorphs 34 - The Prophecy', 366782, 1),
('439087597', 'The Last Book in The Universe', 924194, 1),
('439106753', 'Animorphs 36 - The Mutation', 363360, 1),
('439106761', 'Animorphs 37 - The Weakness', 125336, 1),
('439106788', 'Animorphs 39 - The Hidden', 363357, 1),
('439106796', 'Animorphs 40 - The Other', 363353, 1),
('439115159', 'Animorphs 41 - The Familiar', 363352, 1),
('439115167', 'Animorphs 42 - The Journey', 363389, 1),
('439115175', 'Animorphs 43 - The Test', 343437, 1),
('439115183', 'Animorphs 44 - The Unexpected', 343182, 1),
('439115191', 'Animorphs 45 - The Revelation', 343179, 1),
('439115205', 'Animorphs 46 - The Deception', 363401, 1),
('439115213', 'Animorphs 47 - The Resistance', 363349, 1),
('439115221', 'Animorphs 48 - The Return', 363356, 1),
('439115248', 'Animorphs 50 - The Ultimate', 363403, 1),
('439115256', 'Animorphs 51 - The Absolute', 363390, 1),
('439115264', 'Animorphs 52 - The Sacrifice', 125338, 1),
('439115272', 'Animorphs 53 - The Answer', 125347, 1),
('439115280', 'Animorphs 54 - The Beginning', 125344, 1),
('439142636', 'Animorphs 57 - Alternamorphs 2 - The Next Passage', 1129529, 1),
('439173078', 'Animorphs 40.5 - Megamorphs 4 - Back to Before', 363358, 1),
('439176875', 'The Seventh Tower 6 - The Violet Keystone', 47622, 1),
('439217989', 'Animorphs 55 - The Ellimist Chronicles', 363351, 1),
('439226775', 'Animorphs 35.5 - Visser', 343187, 1),
('439366771', 'Bridge to Terabithia', 2839, 1),
('439484537', 'Remnants 1 - The Mayflower Project', 279689, 1),
('439507251', 'Spy X 1 - The Code', 1145653, 1),
('439568463', 'Goosebumps 09 - Welcome to Camp Nightmare', 125538, 1),
('439568471', 'Goosebumps 01 - Welcome to Dead House', 125553, 1),
('439573610', 'Goosebumps 44 - Say Cheese and Die - Again!', 125689, 1),
('439573742', 'Goosebumps 31 - Night of the Living Dummy II', 266682, 1),
('439573750', 'Goosebumps 34 - Revenge of the Lawn Gnomes', 125619, 1),
('439627176', 'Codemaster 1', 2940142, 1),
('439693543', 'Goosebumps 17 - Why I''m Afraid of Bees', 125583, 1),
('439856264', 'The Keys to The Kingdom 1 - Mister Monday', 47613, 1),
('440208149', 'Time Quintet 5 - An Acceptable Time', 24761, 1),
('440219760', 'The Transall Saga', 121807, 1),
('440238153', 'His Dark Materials 3 - The Amber Spyglass', 18122, 1),
('440409233', 'The Haymeadow', 52551, 0),
('441009573', 'The Lost Years of Merlin 3 - The Fires of Merlin', 18393, 1),
('446359688', 'Red Phoenix', 981161, 0),
('446401587', 'A Classic English Crime', 3398171, 1),
('446614041', 'Street Dreams', 545912, 1),
('446614459', 'Split Second', 204276, 1),
('446617792', 'Maximum Ride 1 - The Angel Experiment', 13152, 1),
('446676438', 'Original Maximum Ride 1 - When The Wind Blows', 13162, 1),
('446696587', 'Original Maximum Ride 2 - The Lake House', 110444, 1),
('448017709', 'The Mystery of Atlantis', 512240, 1),
('448089025', 'Hardy Boys 02 - The House on The Cliff', 76950, 1),
('448089033', 'Hardy Boys 03 - The Secret of The Old Mill', 76978, 1),
('448089041', 'Hardy Boys 04 - The Missing Chums', 76955, 1),
('448089076', 'Hardy Boys 07 - The Secret of The Caves', 76969, 1),
('448089084', 'Hardy Boys 08 - The Mystery of Cabin Island', 76957, 1),
('448089114', 'Hardy Boys 11 - While The Clock Ticked', 76984, 1),
('448089130', 'Hardy Boys 13 - The Mark on The Door', 76952, 1),
('448089149', 'Hardy Boys 14 - The Hidden Harbor Mystery', 13585628, 1),
('448089157', 'Hardy Boys 15 - The Sinister Signpost', 76976, 1),
('448089173', 'Hardy Boys 17 - The Secret Warning', 76973, 1),
('448089181', 'Hardy Boys 18 - The Twisted Claw', 76982, 1),
('448089238', 'Hardy Boys 23 - The Melted Coins', 13585624, 1),
('448089300', 'Hardy Boys 30 - The Wailing Siren Mystery', 760120, 1),
('448089319', 'Hardy Boys 31 - The Secret of Wildcat Swamp', 76971, 1),
('448089327', 'Hardy Boys 32 - The Crisscross Shadow', 76935, 1),
('448089335', 'Hardy Boys 33 - The Yellow Feather Mystery', 76985, 1),
('448089343', 'Hardy Boys 34 - The Hooded Hawk Mystery', 76949, 1),
('448089416', 'Hardy Boys 41 - The Clue of The Screeching Owl', 76934, 1),
('448089424', 'Hardy Boys 42 - The Viking Symbol Mystery', 76983, 1),
('448089432', 'Hardy Boys 43 - The Mystery of The Aztec Warrior', 76958, 1),
('448089440', 'Hardy Boys 44 - The Haunted Fort', 76946, 1),
('448089459', 'Hardy Boys 45 - The Mystery of The Spiral Bridge', 76963, 1),
('448089513', 'Hardy Boys 51 - The Masked Monkey', 76953, 1),
('448089521', 'Hardy Boys 52 - The Shattered Helmet', 76948, 1),
('448089548', 'Hardy Boys 54 - The Mysterious Cavern', 760119, 1),
('448089556', 'Hardy Boys 55 - The Witchmaster''s Key', 975123, 1),
('448089564', 'Hardy Boys 56 - The Jungle Pyramid', 278662, 1),
('448089572', 'Hardy Boys 57 - The Firebird Rocket', 96646, 1),
('448089580', 'Hardy Boys 58 - The Sting of The Scorpion', 944102, 1),
('448189399', 'Hardy Boys 39 - The Mystery of The Chinese Junk', 278501, 1),
('449206211', 'Murder on Embassy Row', 376591, 1),
('449208060', 'Shall We Tell The President?', 78989, 1),
('450031063', 'Salem''s Lot', 11590, 0),
('450040186', 'The Shining', 11588, 0),
('450042685', 'Night Shift', 10628, 1),
('450417395', 'Misery', 10614, 0),
('450542882', 'Four Past Midnight', 133266, 0),
('450610098', 'Nightmares & Dreamscapes', 10588, 0),
('451155750', 'The Dead Zone', 11573, 0),
('451167805', 'Firestarter', 233667, 0),
('451169514', 'It', 18342, 0),
('451188462', 'Desperation', 10584, 0),
('451190750', 'Thinner (Bachman)', 10605, 0),
('451191013', 'The Regulators (Bachman)', 10596, 0),
('451210859', 'Dark Tower II - The Drawing of The Three', 5094, 0),
('451410815', 'The Man with A Load of Mischief', 25176, 1),
('451822196', 'Cycle of the Werewolf', 550844, 0),
('451933028', 'Green Mile', 11566, 0),
('452155614', 'Dark Tower III - The Waste Lands', 458450, 0),
('452253802', 'Creepshow', 11580, 0),
('452284244', 'Animal Farm', 7613, 1),
('452284694', 'Dark Tower I - The Gunslinger Revised', 43615, 0),
('465067840', 'Quarks - The Stuff of Matter', 1038514, 1),
('552554227', 'The Edge Chronicles 1 - Beyond the Deepwoods', 105657, 1),
('553116606', 'The Amityville Horror', 293101, 1),
('553150936', 'Encyclopedia Brown 8 - Tracks Them Down', 286043, 1),
('553270001', 'Dead on Arrival', 603158, 0),
('553276751', 'Sacketts - Galloway', 1123518, 1),
('553293389', 'Foundation Series 4 - Foundation''s Edge', 76683, 0),
('553383043', 'Earthsea 1 - A Wizard of Earthsea', 13642, 1),
('553384287', 'Odd Thomas 1 - Odd Thomas', 14995, 1),
('553565079', 'Foundation Series 0 - Forward the Foundation', 76679, 0),
('553576313', 'If I Should Die', 1305776, 0),
('553582135', 'Final Target', 94307, 1),
('553584502', 'The Taking', 16434, 1),
('553587579', 'Foundation Series 5 - Foundation and Earth', 29582, 0),
('553588249', 'Life Expectancy', 16435, 0),
('553588257', 'Velocity', 32421, 1),
('553804804', 'Odd Thomas 3 - Brother Odd', 14996, 1),
('553807056', 'Odd Thomas 4 - Odd Hours', 2029927, 0),
('571204201', 'Death of an Expert Witness', 3828, 0),
('573115400', 'Cards on The Table', 3319415, 1),
('582418275', 'The Firm', 5358, 1),
('590036394', 'Animorphs 29.5 - Megamorphs 3 - Elfangor''s Secret', 363419, 1),
('590109715', 'Animorphs 00 - The Andalite Chronicles', 363423, 1),
('590213040', 'Animorphs 07.5 - Megamorphs 1 - The Andalite''s Gift', 366783, 1),
('590396056', 'The Circle Opens 1 - Magic Steps', 153781, 1),
('590445766', 'Encyclopedia Brown 15.5 - Takes The Case!', 24159, 1),
('590477374', 'Help! I''m Trapped In My Teacher''s Body', 518604, 1),
('590494236', 'Animorphs 14 - The Unknown', 363391, 1),
('590494244', 'Animorphs 15 - The Escape', 363355, 1),
('590494309', 'Animorphs 16 - The Warning', 363405, 1),
('590494368', 'Animorphs 17 - The Underground', 343177, 1),
('590494414', 'Animorphs 18 - The Decision', 363406, 1),
('590494503', 'Goosebumps 15 - You Can''t Scare Me', 125641, 1),
('590494511', 'Animorphs 19 - The Departure', 363394, 1),
('590496379', 'Animorphs 20 - The Discovery', 363420, 1),
('590552899', 'The Awesome Egyptians', 824506, 1),
('590629778', 'Animorphs 01 - The Invasion', 776877, 1),
('590629786', 'Animorphs 02 - The Visitor', 324505, 1),
('590629794', 'Animorphs 03 - The Encounter', 125333, 1),
('590629808', 'Animorphs 04 - The Message', 366784, 1),
('590629816', 'Animorphs 05 - The Predator', 125337, 1),
('590629824', 'Animorphs 06 - The Capture', 125332, 1),
('590636758', 'Animorphs 23 - The Pretender', 363421, 1),
('590685376', 'Goosebumps Series 2000 24 - Earth Geeks Must Go!', 125613, 1),
('590745867', 'Goosebumps TV Episode 01 - The Girl Who Cried Monster', 1192783, 1),
('590745883', 'Goosebumps TV Episode 03 - Welcome to Camp Nightmare', 909525, 1),
('590745891', 'Goosebumps TV Episode 04 - Return of the Mummy', 1855936, 1),
('590762540', 'Animorphs 21 - The Threat', 363361, 1),
('590762559', 'Animorphs 22 - The Solution', 366790, 1),
('590762575', 'Animorphs 24 - The Suspicion', 363350, 1),
('590762591', 'Animorphs 26 - The Attack', 125335, 1),
('590762605', 'Animorphs 27 - The Exposed', 125341, 1),
('590762613', 'Animorphs 28 - The Experiment', 286582, 1),
('590762621', 'Animorphs 29 - The Sickness', 363422, 1),
('590852922', 'Book of Monsters II', 1629819, 1),
('590937138', 'The Riddle of The Stones and Other Unsolved Mysteries', 2903834, 1),
('590945556', 'Space Jam', 1895765, 1),
('590956159', 'Animorphs 18.5 - Megamorphs 2 - In The Time of Dinosaurs', 363363, 1),
('590984810', 'Space Jam', 2178323, 1),
('590988492', 'Wanted', 21188, 1),
('590997262', 'Animorphs 07 - The Stranger', 324506, 1),
('590997289', 'Animorphs 08 - The Alien', 324508, 1),
('590997297', 'Animorphs 09 - The Secret', 363362, 1),
('590997300', 'Animorphs 10 - The Android', 7089, 1),
('590997327', 'Animorphs 11 - The Forgotten', 363392, 1),
('590997343', 'Animorphs 12 - The Reaction', 815401, 1),
('60124350', 'Seven Days in May', 1153485, 1),
('60562250', 'The Unauthorized Autobiography', 78408, 1),
('60563753', 'The Ritual Bath', 104106, 1),
('60728272', 'Chronicles of Ancient Darkness Book 1 - Wolf Brother', 295305, 0),
('60737514', 'Gone, But Not Forgotten', 80628, 1),
('60810165', 'The Case of The Constant Suicides', 1419648, 1),
('60931906', 'Red Sky at Morning', 328064, 0),
('609602063', 'For The Love of The Game', 165588, 1),
('61057436', 'Quest For Tomorrow - In Alien Hands', 296488, 0),
('61142026', 'Stardust', 16793, 1),
('618260307', 'Lord of the Rings 0 - The Hobbit', 5907, 1),
('618346252', 'Lord of the Rings 1 - The Fellowship of the Rings', 34, 1),
('618346260', 'Lord of the Rings 2 - The Two Towers', 15241, 1),
('618640150', 'Lord of the Rings 3 - The Return of the King', 33, 1),
('64400204', 'Sounder', 598117, 0),
('6480101', 'Farseer Trilogy 2 - Royal Assassin', 68487, 0),
('670823074', 'Nightmares in the Sky', 116334, 0),
('671433040', 'A Dream of Kinship', 2262451, 1),
('671672487', 'Three Plays about Crime and Criminals', 2110867, 1),
('671695320', 'The Legacy of Heorot', 899392, 0),
('671730916', 'Hardy Boys Casefiles 55 - Beyond The Law, 58 - Spiked!, 59 - Open Season', 1130307, 1),
('671796666', 'The Jordan Rules', 246468, 1),
('671877844', 'Dance to the Sun', 3138600, 1),
('679879242', 'His Dark Materials 1 - The Golden Compass', 119322, 1),
('679879250', 'His Dark Materials 2 - The Subtle Knife', 119324, 1),
('679881123', 'Basketball''s Greatest Players', 1538572, 1),
('689840926', 'Brian''s Saga 1 - Hatchet', 50, 1),
('689854145', 'The Farsala Trilogy 1 - Fall of a Kingdom', 248380, 1),
('6909329', 'Hardy Boys 40 - Mystery of The Desert Giant', 439473, 1),
('6915728', 'Hardy Boys 22 - The Flickering Torch Mysery', 278506, 1),
('7120680', 'Halloween Party', 16307, 1),
('712686657', 'Inspector Wexford - An Unkindness of Ravens', 361602, 0),
('7148984', 'The Indian in The Cupboard', 125404, 1),
('716700247', 'Stars - Their Birth, Life, and Death', 1013937, 1),
('7246226', 'The Children of Hurin', 597790, 1),
('727845896', 'The Forbidden Tower', 61894, 0),
('738706132', 'Diadem 5 - Book of Earth', 230537, 1),
('738706140', 'Diadem 4 - Book of Thunder', 809543, 1),
('738707481', 'Diadem 8 - Book of Oceans', 912539, 1),
('738708429', 'Diadem 10 - Book of Doom', 230535, 1),
('738708437', 'Diadem 9 - Book of Reality', 230541, 1),
('743289412', 'Lisey''s Story', 10566, 1),
('743406834', 'Hardy Boys 168 - The Castle Conundrum', 278531, 1),
('751504386', 'Skeleton Crew', 13440, 0),
('751504572', 'Eyes of the Dragon', 10611, 0),
('751514624', 'Different Seasons', 39662, 0),
('752844296', 'Arthur Trilogy 1 - The Seeing Stone', 1128670, 1),
('752876457', 'Black Order', 294042, 1),
('756762006', 'The Lion of Wall Street', 3378061, 0),
('761425942', 'The Catcher In The Rye', 833882, 1),
('763634239', 'Surrender', 476875, 0),
('764555804', 'For Dummies - Forensics', 692555, 1),
('767919440', 'The Sorcerer''s Companion', 124976, 1),
('785212264', 'Healing is A Choice', 199753, 0),
('785799850', 'Rebound - The Odyssey of Michael Jordan', 284734, 1),
('786817879', 'Artemis Fowl 1', 249747, 1),
('786818611', 'The Bartimaeus Trilogy 3 - Ptolemy''s Gate', 59264, 1),
('786851473', 'Artemis Fowl 2 - The Arctic Incident', 114955, 1),
('786856394', 'Artemis Fowl 3.5 - The Artemis Fowl Files', 114956, 1),
('791098265', 'Lord of The Flies', 1868171, 1),
('804112835', 'A Sudden Fearful Death', 72737, 0),
('805080503', 'The Castle of Llyr', 24779, 1),
('807562874', 'The Boxcar Children 59 - The Outer Space Mystery', 363276, 1),
('812544145', 'Cat in a Crimson Haze', 638450, 0),
('812550706', 'Ender''s Game', 375802, 1),
('812566351', 'The Prince of Whales', 616978, 0),
('812966295', 'King Solomon''s Mines', 23814, 0),
('823407446', 'The Cellar', 5240413, 0),
('831727527', 'Gerald''s Game', 32692, 0),
('843955848', 'Colorado Kid', 10574, 0),
('8497597729', 'Insomnia', 10585, 0),
('849995183', 'Wisdom For The Way', 2104565, 0),
('99297701', 'Hannibal Rising', 32418, 1),
('9999999997', 'The Laws of Physics', 8874454, 1),
('9999999998', 'At Some Forgotten Door', 17204960, 1),
('9999999999', 'The Shift', 13604714, 1);

-- --------------------------------------------------------

--
-- Table structure for table `books_authors`
--

CREATE TABLE IF NOT EXISTS `books_authors` (
  `isbn` varchar(20) NOT NULL,
  `auid` int(10) NOT NULL,
  PRIMARY KEY (`isbn`,`auid`),
  UNIQUE KEY `isbn` (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books_authors`
--

INSERT INTO `books_authors` (`isbn`, `auid`) VALUES
('014240120X', 117),
('034547063X', 82),
('037580417X', 26),
('038529817X', 56),
('042518160X', 82),
('043907035X', 4),
('043910677X', 4),
('043911523X', 4),
('043999652X', 4),
('044022750X', 108),
('044023803X', 9),
('044808905X', 44),
('044808936X', 44),
('044808953X', 44),
('045052468X', 82),
('045057458X', 82),
('055213306X', 46),
('055311381X', 32),
('055325300X', 34),
('059049418X', 4),
('059076263X', 4),
('067102423X', 82),
('067103264X', 82),
('068985417X', 13),
('071671812X', 125),
('078681859X', 136),
('084312914X', 145),
('1244646385', 82),
('1258011115', 115),
('1400096472', 72),
('1400316731', 89),
('141321318', 29),
('141651693X', 82),
('1416521496', 82),
('1416524290', 82),
('1416524347', 82),
('1416524355', 82),
('1416524517', 82),
('1416524525', 82),
('1416552510', 82),
('141655484X', 82),
('1416584080', 82),
('1416928146', 69),
('1416928170', 69),
('1416937811', 43),
('142302228', 78),
('1423108361', 29),
('142400653', 52),
('142402435', 22),
('142406120', 67),
('143039563', 141),
('1439148503', 82),
('1439192561', 82),
('1442408626', 129),
('1451627289', 82),
('152052070', 48),
('152060847', 35),
('1557091447', 44),
('1557091498', 44),
('1557092745', 44),
('1572703210', 24),
('1572707313', 24),
('1582349134', 38),
('1582882231', 119),
('1591451884', 148),
('1594489505', 68),
('1595543635', 40),
('1595543716', 40),
('1595543724', 40),
('1605506613', 147),
('1891743007', 76),
('192755447', 18),
('192861891', 77),
('1930871279', 142),
('2226131906', 82),
('2253147699', 82),
('2266047426', 82),
('253212340', 65),
('307269981', 88),
('307348245', 82),
('307817083', 131),
('312994818', 41),
('316015849', 96),
('316018708', 107),
('316018783', 107),
('316142018', 25),
('316159786', 107),
('316666084', 104),
('330489089', 71),
('340552050', 90),
('340636025', 134),
('340640146', 82),
('340818670', 82),
('340829788', 82),
('345418476', 45),
('345418484', 45),
('345452607', 80),
('345452631', 80),
('345453743', 1),
('345459849', 45),
('345459857', 45),
('345466608', 81),
('345467078', 80),
('345476999', 57),
('375507779', 82),
('375840400', 105),
('375856110', 105),
('380724049', 11),
('385199570', 82),
('385338600', 60),
('385339658', 60),
('385504225', 19),
('385516487', 82),
('393060136', 139),
('393850048', 73),
('395957915', 100),
('399146261', 84),
('399153578', 30),
('425136981', 84),
('425175405', 33),
('425183033', 27),
('425210758', 84),
('425214761', 33),
('435233076', 97),
('439051185', 4),
('439061644', 4),
('439061652', 99),
('439070317', 4),
('439070325', 4),
('439070333', 4),
('439070341', 4),
('439087597', 112),
('439106753', 4),
('439106761', 4),
('439106788', 4),
('439106796', 4),
('439115159', 4),
('439115167', 4),
('439115175', 4),
('439115183', 4),
('439115191', 4),
('439115205', 4),
('439115213', 4),
('439115221', 4),
('439115248', 4),
('439115256', 4),
('439115264', 4),
('439115272', 4),
('439115280', 4),
('439142636', 4),
('439173078', 4),
('439176875', 102),
('439217989', 4),
('439226775', 4),
('439366771', 106),
('439484537', 4),
('439507251', 93),
('439568463', 133),
('439568471', 133),
('439573610', 133),
('439573742', 133),
('439573750', 133),
('439627176', 98),
('439693543', 133),
('439856264', 102),
('440208149', 92),
('440219760', 108),
('440238153', 114),
('440409233', 108),
('441009573', 12),
('446359688', 15),
('446401587', 64),
('446614041', 79),
('446614459', 10),
('446617792', 107),
('446676438', 107),
('446696587', 107),
('448017709', 14),
('448089025', 44),
('448089033', 44),
('448089041', 44),
('448089076', 44),
('448089084', 44),
('448089114', 44),
('448089130', 44),
('448089149', 44),
('448089157', 44),
('448089173', 44),
('448089181', 44),
('448089238', 44),
('448089300', 44),
('448089319', 44),
('448089327', 44),
('448089335', 44),
('448089343', 44),
('448089416', 44),
('448089424', 44),
('448089432', 44),
('448089440', 44),
('448089459', 44),
('448089513', 44),
('448089521', 44),
('448089548', 44),
('448089556', 44),
('448089564', 44),
('448089572', 44),
('448089580', 44),
('448189399', 44),
('449206211', 140),
('449208060', 5),
('450031063', 82),
('450040186', 82),
('450042685', 82),
('450417395', 82),
('450542882', 82),
('450610098', 82),
('451155750', 82),
('451167805', 82),
('451169514', 82),
('451188462', 82),
('451190750', 82),
('451191013', 82),
('451210859', 82),
('451410815', 59),
('451822196', 82),
('451933028', 82),
('452155614', 82),
('452253802', 82),
('452284244', 103),
('452284694', 82),
('465067840', 54),
('552554227', 132),
('553116606', 3),
('553150936', 130),
('553270001', 126),
('553276751', 87),
('553293389', 8),
('553383043', 91),
('553384287', 84),
('553565079', 8),
('553576313', 49),
('553582135', 74),
('553584502', 84),
('553587579', 8),
('553588249', 84),
('553588257', 84),
('553804804', 84),
('553807056', 84),
('571204201', 72),
('573115400', 24),
('582418275', 60),
('590036394', 4),
('590109715', 4),
('590213040', 4),
('590396056', 113),
('590445766', 130),
('590477374', 135),
('590494236', 4),
('590494244', 4),
('590494309', 4),
('590494368', 4),
('590494414', 4),
('590494503', 133),
('590494511', 4),
('590496379', 4),
('590552899', 39),
('590629778', 4),
('590629786', 4),
('590629794', 4),
('590629808', 4),
('590629816', 4),
('590629824', 4),
('590636758', 4),
('590685376', 133),
('590745867', 133),
('590745883', 133),
('590745891', 133),
('590762540', 4),
('590762559', 4),
('590762575', 4),
('590762591', 4),
('590762605', 4),
('590762613', 4),
('590762621', 4),
('590852922', 35),
('590937138', 28),
('590945556', 70),
('590956159', 4),
('590984810', 144),
('590988492', 31),
('590997262', 4),
('590997289', 4),
('590997297', 4),
('590997300', 4),
('590997327', 4),
('590997343', 4),
('60124350', 83),
('60562250', 128),
('60563753', 79),
('60728272', 109),
('60737514', 95),
('60810165', 21),
('60931906', 16),
('609602063', 75),
('61057436', 123),
('61142026', 55),
('618260307', 138),
('618346252', 138),
('618346260', 138),
('618640150', 138),
('64400204', 6),
('6480101', 66),
('670823074', 82),
('671433040', 36),
('671672487', 53),
('671695320', 101),
('671730916', 44),
('671796666', 127),
('671877844', 50),
('679879242', 114),
('679879250', 114),
('679881123', 85),
('689840926', 108),
('689854145', 13),
('6909329', 44),
('6915728', 44),
('7120680', 24),
('712686657', 118),
('7148984', 11),
('716700247', 124),
('7246226', 138),
('727845896', 17),
('738706132', 110),
('738706140', 110),
('738707481', 110),
('738708429', 110),
('738708437', 110),
('743289412', 82),
('743406834', 44),
('751504386', 82),
('751504572', 82),
('751514624', 82),
('752844296', 37),
('752876457', 120),
('756762006', 47),
('761425942', 122),
('763634239', 63),
('764555804', 94),
('767919440', 86),
('785212264', 7),
('785799850', 58),
('786817879', 29),
('786818611', 136),
('786851473', 29),
('786856394', 29),
('791098265', 146),
('804112835', 111),
('805080503', 2),
('807562874', 143),
('812544145', 46),
('812550706', 20),
('812566351', 51),
('812966295', 61),
('823407446', 116),
('831727527', 82),
('843955848', 82),
('8497597729', 82),
('849995183', 137),
('99297701', 62),
('9999999997', 121),
('9999999998', 42),
('9999999999', 23);

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `desc` text NOT NULL,
  `link` varchar(200) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `sname`, `desc`, `link`, `start`, `end`) VALUES
(1, 'Vietnamese Students'' Association', 'VSA', 'The Penn Vietnamese Students'' Association strives to promote awareness about Vietnamese and Vietnamese-American culture through community service, cultural performances, and social events. VSA is also dedicated to being an active participant in both the Penn and local Philadelphia communities as well as being a place for Vietnamese students and those interested in Vietnamese culture to connect.', 'http://www.dolphin.upenn.edu/vietnam/', '2010-01-01', '9999-12-31'),
(2, 'Women in Computer Science', 'WiCS', 'WICS is a student run organization whose primary aim is to create a sense of community between the women in Computer Science and Digital Media Design.', 'http://www.seas.upenn.edu/~wics/', '2011-04-01', '9999-12-31'),
(3, 'Penn Latin and Ballroom Dance', 'PLBD', 'Right here on campus: learn to dance latin and ballroom dances with some of the best professional instructors! Classes range from newcomer to advanced levels, and prepare yourself for competition and the annual showcase.', 'http://www.dolphin.upenn.edu/ballroom/', '2010-09-01', '2010-12-31'),
(4, 'Science and Technology Wing', 'STWing', 'The Science and Technology Wing is a collection of over two hundred undergraduates, graduate students, professors, and alumni at the University of Pennsylvania. Our members share a strong interest in the science and technology which permeate our everyday lives, not to mention a sense of humor.', 'http://www.stwing.upenn.edu/', '2009-09-01', '2012-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `clubs_roles`
--

CREATE TABLE IF NOT EXISTS `clubs_roles` (
  `cid` int(2) NOT NULL,
  `rid` int(2) NOT NULL,
  PRIMARY KEY (`cid`,`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `num` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `term` varchar(10) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='course number, name, and description';

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`num`, `name`, `desc`, `term`) VALUES
('ANTH001', 'Archaeology', 'An introduction to the history, concepts, and methods of the anthropological study of ancient peoples using archaeological illustrations to indicate the relationships of archaeological interpretations with cultural and physical anthropology. ', '2010C'),
('ANTH127', 'Great Discoveries in Archaeology', 'Archaeology is a young and exciting scientific discipline created around 150 years ago as a way to discover and interpret the material remains of our human past. Many archaeological sites are world-famous: Pompeii, Troy, the pyramids of Egypt, the Parthenon of Athens, the Taj Mahal, and the temple complex at Angkor Wat, to name a few. In this course, we will examine many important archaeological sites in the "Old World" of the Mediterranean, Near East, and Asia. Using a thematic and comparative approach, we will delve deeper to explore the societies that produced these wonders, and examine cultural similarities and differences across the Old World. This course is a non-technical introduction for students interested in archaeology, history, art history, anthropology, or related subjects.', '2013A'),
('ASAM002', 'Asian American Literature', 'An overview of Asian American literature from its beginnings at the turn of the twentieth century to the present.  This course covers a wide range of Asian American novels, plays, and poems, situating them in the contexts of American history and minority communities and considering the variety of formal strategies these different texts take.', '2012C'),
('BIBB109', 'Brain and Behavior', 'Introduction to the structure and function of the vertebrate nervous system. We begin with the cellular basis of neuronal activities, then discuss the physiological bases of motor control, sensory systems, motivated behaviors, and higher mental processes.  This course is intended for students interested in the neurobiology of behavior, ranging from animal behaviors to clinical disorders.', '2012A'),
('CIS110', 'Computer Programming', 'How do you program computers to accomplish complex tasks? How do you break down a complex task into simpler ones? CIS 110 is a Java lite" course that covers the fundamentals of object-oriented programming such as objects', '2010A'),
('CIS112 (MKSE112)', 'Networked Life', 'What kind of science is appropriate for understanding the Facebook? How does Google find what you''re looking for... and exactly how do they make money doing so? What properties might we expect any social network to reliably have, and are there simple explanations for them? How does your position in an economic network (dis)advantage you? How are individual and collective behavior related in complex networks? What might we mean by the economics of spam? What do game theory and the Paris subway have to do with Internet routing? Networked Life looks at how our world is connected -- socially, economically, strategically and technologically -- and why it matters.', '2011C'),
('CIS120', 'Programming Languages and Techniques I', 'A fast-paced introduction to the fundamental concepts of programming and software design.  This course assumes some previous programming experience, at the level of a high school computer science class CIS110.  (If you got at least 4 in the AP Computer Science A AB exam, you will do great.)  No specific programming language background is assumed: basic experience with any language (for instance Java, C, C++, VB, Python, Perl, Scheme) is fine.  If you have never programmed before, you should take CIS 110 first.', '2010C'),
('CIS121', 'Programming Languages and Techniques II', 'This is a course about Algorithms and Data Structures using the JAVA programming language. We introduce the basic concepts about complexity of an algorithm and methods on how to compute the running time of algorithms. Then, we describe data structures like stacks, queues, maps, trees, and graphs, and we construct efficient algorithms based on these representations. The course builds upon existing implementations of basic data structures in JAVA and extends them for the structures like trees, studying the performance of operations on such structures, and their efficiency when used in real-world applications. A large project introducing students to the challenges of software engineering concludes the course.', '2011A'),
('CIS160', 'Mathematical Foundations in Computer Science', 'What are the basic mathematical concepts and techniques needed in computer science? This course provides an introduction to proof principles and logics, functions and relations, induction principles, combinatorics and graph theory, as well as a rigorous grounding in writing and reading mathematical proofs.', '2010B'),
('CIS190', 'C++ Programming', 'This course will provide an introduction to programming in C++ and is intended for students who already have some exposure to programming in another language such as Java. C++ provides the programmer with a greater level of control over machine resources and are commonly used in situations where low level access performance are important. This course will illuminate the issues associated with programming at this level and will cover issues such as explicit memory management, pointers, the compilation process and debugging. The course will involve several programming projects which will provide students with the experience they need to program effectively in these languages.', '2012C'),
('CIS191', 'Linux and Unix', 'Unix, in its many forms, runs much of the world''s computer infrastructure, from cable modems and cellphones to the giant clusters that power Google and Amazon. This half-credit course provides a thorough introduction to Unix and Linux. Topics will range from critical basic skills such as examining and editing files, compiling programs and writing shell scripts, to higher level topics such as the architecture of Unix and its programming model.  The material learned is applicable to many classes, including CIS 240, CIS 331, CIS 341, CIS 371/372, and CIS 380.', '2010A'),
('CIS192', 'Python Programming', 'Python is an elegant, concise, and powerful language that is useful for tasks large and small. Python has quickly become a popular language for getting things done efficiently in many in all domains: scripting, systems programming, research tools, and web development. This course will provide an introduction to this modern high-level language using hands-on experience through programming assignments and a collaborative final application development project.', '2011A'),
('CIS196', 'Ruby on Rails Web Development', 'This course will teach the fundamentals of developing web applications using Ruby on Rails, a rapid-development web framework developed by 37signals. The topics covered will start with Ruby, the language that powers Rails, and include all topics required to develop and deploy production-ready web applications with Rails. During the entire course, students will be working on a project of their own choosing which will develop as they learn additional concepts. Upon completion of the course this application will be deployed and accessible to the public. Students will be encouraged to continue building their applications even after the course given support from the Philadelphia Ruby community.', '2012C'),
('CIS240', 'Computer Systems', 'You know how to program, but do you know how computers really work? How do millions of transistors come together to form a complete computing system? This bottom-up course begins with transistors and simple computer hardware structures, continues with low-level programming using primitive machine instructions, and finishes with an introduction to the C programming language. This course is a broad introduction to all aspects of computer systems architecture and serves as the foundation for subsequent computer systems courses, such as Digital Systemsganization and Design (CIS 371), Computer Operating Systems (CIS 380), and Compilers and Interpreters (CIS 341).', '2011C'),
('CIS262', 'Automata, Computability, and Complexity', 'This course explores questions fundamental to computer science such as which problems cannot be solved by computers, can we formalize computing as a mathematical concept without relying upon the specifics of programming languages and computing platforms, and which problems can be solved efficiently. The topics include finite automata and regular languages, context-free grammars and pushdown automata, Turing machines and undecidability, tractability and NP-completeness. The course emphasizes rigorous mathematical reasoning as well as connections to practical computing problems such as text processing, parsing, XML query languages, and program verification.', '2011C'),
('CIS320', 'Introduction to Algorithms', 'Large systems versus small programs. Problems of scale. Software life-cycle: design phase, implementation phase, testing, maintenance. Software re-use. Tools/Toolkits/Libraries. Programming as a group activity. Support tools, e.g., SCCS and RCS. Standards. Software readability and structure. Reading code. Style sheets. Software Testing: role in process, test cases, testers. Documentation. Embedded documentation and external documentation.', '2013A'),
('CIS330', 'Design Principles of Information Systems', 'Introduction to database management systems and principles of design. The Entity-Relationship model as a modeling tool. The relational model: formal languages, the industry standard SQL, relational design theory, query optimization. Storing and querying XML data. Recursive queries. Views and data integration. Overview of system level issues: physical dataganization, indexing techniques, and transactions. Connecting databases to the Web. Course work requires programming in several different query languages, several written homeworks and a team project.', '2012A'),
('CIS350', 'Software Design and Engineering', 'Large systems versus small programs. Problems of scale. Software life-cycle: design phase, implementation phase, testing, maintenance. Software re-use. Tools/Toolkits/Libraries. Programming as a group activity. Support tools, e.g., SCCS and RCS. Standards. Software readability and structure. Reading code. Style sheets. Software Testing: role in process, test cases, testers. Documentation. Embedded documentation and external documentation.', '2013A'),
('CIS371', 'Computer Organization and Design', 'This is the second computerganization course and focuses on computer hardware design. Topics covered are: (1) basic digital system design including finite state machines, (2) instruction set design and simple RISC assembly programming, (3) quantitative evaluation of computer performance, (4) circuits for integer and floating-point arithmetic, (5) datapath and control, (6) micro-programming, (7) pipelining, (8) storage hierarchy and virtual memory, (9) input/output, (10) different forms of parallelism including instruction level parallelism, data-level parallelism using both vectors and message-passing multi-processors, and thread-level parallelism using shared memory multiprocessors. Basic cache coherence and synchronization.', '2012A'),
('CIS380', 'Operating Systems', 'This course surveys methods and algorithms used in operating systems. Concurrent distributed operation is emphasized. The main topics covered are as follows: process synchronization; interprocess communications; concurrent/distributed programming languages; resource allocation and deadlock; virtual memory; protection and security; distributed operation; distributed data; performance evaluation.', '2012C'),
('CIS391', 'Artificial Intelligence', 'Artificial Intelligence is considered from the point of view of a resource--limited knowledge-based agent who must reason and act in the world. Topics include logic, automatic theorem proving, search, knowledge representation and reasoning, natural language processing, probabilistic reasoning, and machine learning. Programming assignments in Python.', '2012C'),
('CIS455', 'Internet and Web Systems', 'This course focuses on the challenges encountered in building Internet and web systems: scalability, interoperability (of data and code), security and fault tolerance, consistency models, and location of resources, services, and data. We will examine how XML standards enable information exchange; how web services support cross-platform interoperability (and what their limitations are); how to build high-performance application servers; how "cloud computing" services work; how to perform Akamai-like content distribution; and how to provide transaction support in distributed environments. We will study techniques for locating machines, resources, and data (including directory systems, information retrieval indexing, ranking, and web search); and we will investigate how different architectures support scalability (and the issues they face). We will also examine ideas that have been proposed for tomorrow''s Web, and we will see some of the challenges, research directions, and potential pitfalls. An important goal of the course is not simply to discuss issues and solutions, but to provide hands-on experience with a substantial implementation project. This semester''s project will be a peer-to-peer implementation of a Googe-style search engine, including distributed, scalable crawling; indexing with ranking; and even PageRank. As a side-effect of the material of this course you will learn about some aspects of large-scale software development assimilating large APIs.', '2013A'),
('CRIM100', 'Criminology', 'This introductory course examines the multi-disciplinary science of law-making, law-breaking, and law-enforcing. It reviews theories and data predicting where, when, by whom and against whom crimes happen. It also addresses the prevention of different offense types by different kinds of offenders against different kinds of people. Police, courts, prisons, and other institutions are critically examined as both preventing and causing crime. This course meets the general distribution requirement.', '2013A'),
('ENM321', 'Engineering Statistics', 'This course covers the topics in probability and statistics with an emphasize on the application of probability theories and statistical techniques to practical engineering problems. Mathematical derivations of theorems will be presented whenever it is necessary to illustrate the concepts involved, however. ', '2012C'),
('LGST101', 'Legal Studies', 'This course presents law as an evolving social institution, with special emphasis on the legal regulation of business.  It considers basic concepts of law and legal process, in the U.S. and other legal systems, and introduces the fundamentals of rigorous legal analysis.  An in-depth examination of contract law is included. ', '2011A'),
('MATH104', 'Calculus I', 'Brief review of High School calculus, applications of integrals, transcendental functions, methods of integration, infinite series, Taylor''s theorem. Use of symbolic manipulation and graphics software in calculus', '2009C'),
('MATH114', 'Calculus II', 'Functions of several variables, vector-valued functions, partial derivatives and applications, double and triple integrals, conic sections, polar coordinates, vectors and analytic geometry, first and secondderdinary differential equations. Applications to physical sciences. Use of symbolic manipulation and graphics software in calculus. ', '2010A'),
('MATH240', 'Calculus III', 'Linear algebra: vectors, matrices, systems of linear equations, eigenvalues and eigenvectors.  Vector calculus: functions of several variables, vector fields, line and surface integrals, Green''s, Stokes'' and divergence theorems. Series solutions ofdinary differential equations, Laplace transforms and systems ofdinary differential equations.  Use of symbolic manipulation and graphics software.', '2010C'),
('MATH241', 'Calculus IV', 'Sturm-Liouville problems,thogonal functions, Fourier series, and partial differential equations including solutions of the wave, heat and Laplace equations, Fourier transforms. Introduction to complex analysis.  Use of symbolic manipulation and graphics software. ', '2011A'),
('NONUM', 'Not A Course', 'Not A Course', ''),
('PHIL004', 'History of Modern Philosophy', 'The explosion of scientific knowledge in early modern Europe cast doubt not only on the medieval worldview but also on its assumption of a theological guarantee for the possibility of human knowledge.  Thus modern philosophers had to begin the project of establishing standards and foundations for human knowledge without a divine guarantee.  The Reformation and the growth of secular states in the sixteenth and seventeenth centuries presented a similar challenge for modern moral and political philosophy, which thus faced the challenge of establishing norms for human conduct and their foundation without divine commands.  We shall examine how the leading philosophers of modern times confronted these challenges, focusing primarily on the challenge for modern theories of knowledge but also considering at least some of the parallel developments in modern moral philosophy.  Readings will include selections from Descartes, Leibniz, Locke, Berkeley, Hume, Kant, and in the nineteenth century, the great American philosopher Charles Sanders Peirce.', '2012A'),
('PHYS151', 'Principles II', 'Electric and magnetic fields; Coulomb''s, Ampere''s, and Faraday''s laws; Maxwell''s equations; emission, propagation, and absorption of electromagnetic radiation; interference, reflection, refraction, scattering, and diffraction phenomena. ', '2010A'),
('PHYS170', 'Honors Physics I', 'This course parallels and extends the content of PHYS 150, at a significantly higher mathematical level.  Recommended for wellprepared students in engineering and the physical sciences, and particularly for those planning to major in physics.  Classical laws of motion: interaction between particles; conservation laws and symmetry principles; rigid body motion; noninertial reference frames; oscillations. ', '2009C'),
('PHYS240', 'Modern Physics', 'Special relativity, an introduction to the principles of quantum mechanics, properties of electrons, protons, neutrons, and the elements of atomic structure and nuclear structure.  Electromagnetic radiation and photons; interaction of photons with electrons, atoms, and nuclei. ', '2011A'),
('PSYC001', 'Experimental Psychology', 'Introduction to the basic topics of psychology, including learning, motivation, cognition, development, abnormal, physiological, social, and personality. ', '2011C'),
('SPAN110', 'Elementary Spanish I', 'Spanish 110 is a first-semester elementary language course designed for students who have not previously studied Spanish.  This course emphasizes the development of foundational reading, writing, listening, and speaking skills while exploring the rich cultural mosaic of the Spanish-speaking world. Students will participate in pair, small-group and whole-class activities that focus on meaningful and accurate communication skills in the target language.', '2009C'),
('SPAN120', 'Elementary Spanish II', 'The continuation of Spanish 110, Spanish 120 is a second-semester elementary language course.  See the description of Spanish 110.', '2010A'),
('SPAN130', 'Intermediate Spanish I', 'Spanish 130 is a first-semester intermediate-level language course that emphasizes the development of the four basic skills (reading, writing, listening and speaking skills) within a culturally based context.  Class time will focus on communicative activities that combine grammatical concepts, relevant vocabulary, and cultural themes.  Students will participate in pair, smallgroup and whole-class activities to practice linguistics skills in meaningful contexts.  Major course goals include: the acquisition of intermediate-level vocabulary, the controlled use of the past tense, and the development of writing skills at a paragraph level with transitions. ', '2010C'),
('WRIT077', 'The Novelist and The Neuroscientist', 'The Arts and Sciences perform an intricate dance, each inspiring the other to reach new heights. Periodically, ideas formed in artistic expression prove scientifically sound. Such is the case with recent advances in neuroscience. For example, Walt Whitman promoted the idea of the body and soul being as one 130 years prior to the seminal work on emotions by Antonio Damasio. George Elliot wrote on the possibilities of freedom long before Elizabeth Gould provided evidence of adult neurogenesis. Jonah Lehrer''s book Proust Was a Neuroscientist is an excellent example of critical writing and will serve as our base as we explore the intimate connection between art and science. Literary works, paintings, musical scores and scientific journal articles will be used as motivation for student writing. Students will draft and revise written work to create a mid-term and final portfolio, participate in group discussions and complete in-class writing assignments.', '2009C');

-- --------------------------------------------------------

--
-- Table structure for table `prereqs`
--

CREATE TABLE IF NOT EXISTS `prereqs` (
  `cnum` varchar(20) NOT NULL,
  `prereq` varchar(50) NOT NULL,
  PRIMARY KEY (`cnum`,`prereq`),
  UNIQUE KEY `cnum` (`cnum`,`prereq`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prereqs`
--

INSERT INTO `prereqs` (`cnum`, `prereq`) VALUES
('ANTH001', 'none'),
('ANTH127', 'none'),
('ASAM002', 'none'),
('BIBB109', 'none'),
('CIS110', 'none'),
('CIS112 (MKSE112)', 'none'),
('CIS120', 'CIS110'),
('CIS120', 'prior programming'),
('CIS121', 'CIS120'),
('CIS121', 'CIS160'),
('CIS160', 'none'),
('CIS190', 'CIS110'),
('CIS190', 'CIS240'),
('CIS190', 'equivalent'),
('CIS191', 'CIS110'),
('CIS191', 'equivalent'),
('CIS192', 'CIS120'),
('CIS196', 'CIS120'),
('CIS240', 'none'),
('CIS262', 'CIS160'),
('CIS320', 'CIS120'),
('CIS320', 'CIS121'),
('CIS320', 'CIS160'),
('CIS320', 'CIS262'),
('CIS330', 'CIS121'),
('CIS330', 'CIS160'),
('CIS350', 'CIS240'),
('CIS371', 'CIS240'),
('CIS380', 'CIS240'),
('CIS391', 'CIS121'),
('CIS455', 'familiarity with threads and concurrency'),
('CIS455', 'strong Java programming skills'),
('CRIM100', 'none'),
('ENM321', 'none'),
('LGST101', 'none'),
('MATH104', 'none'),
('MATH114', 'MATH104'),
('MATH240', 'MATH114'),
('MATH241', 'MATH240'),
('PHIL004', 'none'),
('PHYS151', 'PHYS170'),
('PHYS170', 'none'),
('PHYS240', 'PHYS151'),
('PSYC001', 'none'),
('SPAN110', 'none'),
('SPAN120', 'SPAN110'),
('SPAN130', 'SPAN120'),
('WRIT077', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `desc` text NOT NULL,
  `team` int(11) NOT NULL COMMENT 'size of team',
  `source` varchar(400) NOT NULL COMMENT 'link to source code OR "REQUEST"',
  `view` varchar(400) NOT NULL COMMENT 'link to a working version of the project',
  `start` date NOT NULL,
  `end` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `sname`, `desc`, `team`, `source`, `view`, `start`, `end`) VALUES
(1, 'LC4 Trace Generator', 'LC4Trace', '<li>Trace simulator of Penn''s LC4 assembly code\r\n</li><li>Option to run a video memory program\r\n</li><li>Learned to develop a sizable application with multiple components\r\n</li>', 1, 'REQUEST', 'NOVIEW', '2011-09-01', '2011-12-31'),
(2, 'King''s Courses', 'KingsCourses', '<li>Recommends recipes based on the food you have\r\n</li><li>Optionally recommends meals (consisting of multiple recipes)\r\n</li><li>Learned to work with an arrogant team member\r\n</li>', 4, 'https://github.com/mikepatt77/kingscourses', 'http://kingscourses.mikepatt.org/', '2012-01-01', '2012-04-30'),
(3, 'Superscalar Processor', 'SuperScalar', '<li>Processor that executes up to two instructions per cycle\r\n</li><li>Also has basic branch prediction\r\n</li><li>Learned to work with a non-active team member\r\n</li>', 3, 'REQUEST', 'NOVIEW', '2012-01-01', '2012-04-30'),
(4, 'Scrabble', 'Scrabble', '<li>Textual version of the popular word game Scrabble\r\n</li><li>Option to play against human or AI player\r\n</li><li>Learned to code in a team\r\n</li>', 2, 'https://github.com/mikepatt77/scrabble', 'NOVIEW', '2011-01-01', '2011-04-30'),
(5, 'Connect Four AI', 'Connect4AI', '<li>AI player for the popular game Connect Four\r\n</li><li>Utilized the mini-max algorithm for choosing moves\r\n</li><li>Learned about strategies of artificial intelligence\r\n</li>', 1, 'REQUEST', 'NOVIEW', '2012-09-01', '2012-12-31'),
(6, 'Penn OS', 'PennOS', '<li>Unix-like operating system\r\n</li><li>Has a flat file system and priority scheduler\r\n</li><li>Learned to document all code\r\n</li>', 5, 'REQUEST', 'NOVIEW', '2012-09-01', '2012-12-31'),
(7, 'Coding Q''s', 'CodingQs', '<li>An unfinished webapp that helps users with technical interviews\r\n</li><li>Has since evolved into the idea of my app in progress <a href=''#NoOne''>NoOne</a>\r\n</li><li>Learned that an app is always unfinished\r\n</li>', 1, 'https://github.com/mikepatt77/codingqs', 'http://cqs.mikepatt.org', '2012-09-01', '2012-12-31'),
(8, 'GRimp (GoodReads importer)', 'GRimp', '<li><a href=''http://goodreads.com''>GoodReads.com</a> automatic book importer via CSV file\r\n</li><li>Option to export a file with GoodReads ID and ISBN\r\n</li><li>Learned to use RESTful APIs\r\n</li>', 1, 'https://github.com/mikepatt77/bookimporter', 'NOVIEW', '2012-12-31', '2013-01-03'),
(9, 'Marksman Search Engine', 'Marksman', '<li>Parses a user query into terms, which are then sent to an index\r\n</li><li>The index returns ranked pages that have been crawled on the web that are relevant to the query\r\n</li><li>Learned to combine large components together\r\n</li>', 4, 'REQUEST', 'NOVIEW', '2013-01-01', '2013-04-30'),
(10, 'Expresso', 'Expresso', '<li>Patients record daily journal entries with an Android app\r\n</li><li>Therapists view the entries with a Ruby on Rails app\r\n</li><li>Learned to work in an agile development process\r\n</li>', 4, 'REQUEST', 'NOVIEW', '2013-01-01', '2013-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `projects_course`
--

CREATE TABLE IF NOT EXISTS `projects_course` (
  `pid` int(3) NOT NULL,
  `cnum` varchar(20) NOT NULL,
  PRIMARY KEY (`pid`,`cnum`),
  KEY `cnum` (`cnum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects_course`
--

INSERT INTO `projects_course` (`pid`, `cnum`) VALUES
(4, 'CIS192'),
(7, 'CIS196'),
(1, 'CIS240'),
(2, 'CIS330'),
(10, 'CIS350'),
(3, 'CIS371'),
(6, 'CIS380'),
(5, 'CIS391'),
(9, 'CIS455'),
(8, 'NONUM');

-- --------------------------------------------------------

--
-- Table structure for table `projects_skills`
--

CREATE TABLE IF NOT EXISTS `projects_skills` (
  `pid` int(3) NOT NULL,
  `sid` int(2) NOT NULL,
  PRIMARY KEY (`pid`,`sid`),
  KEY `sid` (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects_skills`
--

INSERT INTO `projects_skills` (`pid`, `sid`) VALUES
(4, 1),
(5, 1),
(8, 1),
(9, 2),
(10, 2),
(1, 3),
(6, 3),
(7, 5),
(2, 6),
(6, 6),
(7, 6),
(2, 7),
(7, 7),
(2, 8),
(7, 8),
(2, 9),
(2, 10),
(3, 11),
(10, 15);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `name`, `url`) VALUES
(1, 'Git Immersion', 'http://gitimmersion.com/'),
(2, 'HTML Tutorials', 'http://www.htmltutorials.ca/'),
(3, 'W3 Schools', 'http://www.w3schools.com/'),
(99, 'Not A Site', 'Not A Site');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `top` int(2) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `top`, `image`) VALUES
(1, 'Python', 1, ' ./img/skills/python.gif'),
(2, 'Java', 2, ' ./img/skills/java.jpg'),
(3, 'C', 9, ' ./img/skills/c.jpg'),
(4, 'C++', 12, ' ./img/skills/cpp.png'),
(5, 'Ruby on Rails', 11, ' ./img/skills/ruby.png'),
(6, 'Git', 7, ' ./img/skills/git.png'),
(7, 'HTML', 5, ' ./img/skills/html.png'),
(8, 'CSS', 6, ' ./img/skills/css.jpg'),
(9, 'mySQL', 4, ' ./img/skills/mysql.jpg'),
(10, 'PHP', 3, './img/skills/php.jpg'),
(11, 'Verilog', 14, './img/skills/verilog.gif'),
(12, 'Haskell', 15, './img/skills/haskell.png'),
(13, 'Linux', 8, './img/skills/linux.png'),
(14, 'QBasic', 13, './img/skills/qbasic.jpg'),
(15, 'Android', 10, './img/skills/android.png');

-- --------------------------------------------------------

--
-- Table structure for table `skills_via`
--

CREATE TABLE IF NOT EXISTS `skills_via` (
  `sid` int(2) NOT NULL,
  `cnum` varchar(10) NOT NULL,
  `siteid` int(3) NOT NULL,
  PRIMARY KEY (`sid`,`cnum`,`siteid`),
  KEY `cnum` (`cnum`),
  KEY `siteid` (`siteid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills_via`
--

INSERT INTO `skills_via` (`sid`, `cnum`, `siteid`) VALUES
(6, 'NONUM', 1),
(7, 'NONUM', 2),
(7, 'NONUM', 3),
(8, 'NONUM', 3),
(1, 'CIS192', 99),
(1, 'CIS391', 99),
(2, 'CIS110', 99),
(2, 'CIS120', 99),
(2, 'CIS121', 99),
(2, 'CIS350', 99),
(2, 'CIS455', 99),
(3, 'CIS240', 99),
(3, 'CIS380', 99),
(4, 'CIS190', 99),
(5, 'CIS196', 99),
(6, 'CIS380', 99),
(9, 'CIS330', 99),
(10, 'CIS330', 99),
(11, 'CIS371', 99),
(13, 'CIS191', 99),
(15, 'CIS350', 99);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prereqs`
--
ALTER TABLE `prereqs`
  ADD CONSTRAINT `prereqs_ibfk_2` FOREIGN KEY (`cnum`) REFERENCES `course` (`num`) ON UPDATE CASCADE;

--
-- Constraints for table `projects_course`
--
ALTER TABLE `projects_course`
  ADD CONSTRAINT `projects_course_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `projects_course_ibfk_3` FOREIGN KEY (`cnum`) REFERENCES `course` (`num`) ON UPDATE CASCADE;

--
-- Constraints for table `projects_skills`
--
ALTER TABLE `projects_skills`
  ADD CONSTRAINT `projects_skills_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `projects_skills_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `skills` (`id`);

--
-- Constraints for table `skills_via`
--
ALTER TABLE `skills_via`
  ADD CONSTRAINT `skills_via_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `skills` (`id`),
  ADD CONSTRAINT `skills_via_ibfk_2` FOREIGN KEY (`cnum`) REFERENCES `course` (`num`),
  ADD CONSTRAINT `skills_via_ibfk_3` FOREIGN KEY (`siteid`) REFERENCES `sites` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 04:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tarkovmarkers`
--

-- --------------------------------------------------------

--
-- Table structure for table `shorelinestashes`
--

CREATE TABLE `shorelinestashes` (
  `ID` int(11) NOT NULL,
  `x_coord` double NOT NULL,
  `y_coord` double NOT NULL,
  `icon` varchar(50) COLLATE cp1250_croatian_ci NOT NULL,
  `type` varchar(20) COLLATE cp1250_croatian_ci NOT NULL,
  `description` text COLLATE cp1250_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `shorelinestashes`
--

INSERT INTO `shorelinestashes` (`ID`, `x_coord`, `y_coord`, `icon`, `type`, `description`) VALUES
(1, 38.822591, -169.453125, 'StashPlasticOutline.png', 'stash', 'In a bush, next to the truck.'),
(2, 51.835778, -159.257813, 'StashWooden.png', 'stash', 'In a bush next to the fence.'),
(3, 39.909736, -142.03125, 'StashPlasticOutline.png', 'stash', 'Inside the concrete tube.'),
(4, 32.546813, -141.679688, 'StashPlasticOutline.png', 'stash', 'Next to the blue container.'),
(5, 37.439974, -124.453125, 'StashWooden.png', 'stash', 'In a bush next to the fence and shed.'),
(6, 13.581921, -101.25, 'StashPlasticOutline.png', 'stash', 'Near a ruined house.'),
(7, 26.74561, -90, 'StashWooden.png', 'stash', 'In a bush right on the tip of the small peninsula.'),
(8, 43.834527, -65.039063, 'StashPlasticOutline.png', 'stash', 'In the northern corner of the construction site.'),
(9, 53.330873, -14.0625, 'StashPlasticOutline.png', 'stash', 'Follow the wester terminal fence untill you arrive to a rock.'),
(10, 64.168107, -14.414063, 'StashPlasticOutline.png', 'stash', 'Next to the terminal fence.'),
(11, 65.219894, -93.164063, 'StashPlasticOutline.png', 'stash', 'Under a hay bale on the Suicide Fields.'),
(12, 66.51326, -156.09375, 'StashPlasticOutline.png', 'stash', 'Next to the destroyed fence in the swamp village.'),
(13, 72.073911, -140.976563, 'StashWooden.png', 'stash', 'Next to the corner of the fence.'),
(15, 71.635993, -115.3125, 'StashPlasticOutline.png', 'stash', 'Behind the church.'),
(16, 76.100796, -112.148438, 'StashPlasticOutline.png', 'stash', 'In the middle of the swamp. You\'ll have to get your feet wet.'),
(17, 78.420193, -74.53125, 'StashWooden.png', 'stash', 'In a bush next to the rock and transmission tower.'),
(18, 74.959392, -56.601563, 'StashWooden.png', 'stash', 'Next to a tree overlooking the truck.'),
(19, 83.829945, -30.9375, 'StashWooden.png', 'stash', 'Find the middle of the side of the rock facing the mountains.'),
(20, 83.480366, -10.195313, 'StashWooden.png', 'stash', 'bunker side of the river beyond the fence. Lie down to open this one.'),
(21, 83.318733, 73.476563, 'StashWooden.png', 'stash', 'Find a big group of bushes and trees under the rocks.'),
(22, 72.919635, 49.570313, 'StashPlasticOutline.png', 'stash', 'In a bush outside resort fence towards the gym entrance.'),
(23, 22.593726, 32.695313, 'StashWooden.png', 'stash', 'Under the bridge with the Drunk tank.'),
(24, 50.289339, 71.367188, 'StashPlasticOutline.png', 'stash', 'Under the north eastern support of the tower.'),
(25, 42.293564, 109.6875, 'StashWooden.png', 'stash', 'In a bush on the edge of the hill.'),
(26, 29.53523, 146.953125, 'StashWooden.png', 'stash', 'Follow the tracks towards the wall and turn left at the end towards some bushes.'),
(27, 20.303418, 125.859375, 'StashPlasticOutline.png', 'stash', 'In a bush outside the fence corner.'),
(28, -7.362467, 143.4375, 'StashWooden.png', 'stash', 'In a bush close to the patch of burnt trees.'),
(29, -12.897489, 131.835938, 'StashPlasticOutline.png', 'stash', 'Under a tree close to the cross.'),
(30, -1.757537, 120.585938, 'StashWooden.png', 'stash', 'Next to the destroyed shed.'),
(31, -46.316584, 25.664063, 'sanitarIcon.png', 'boss', 'Spawns inside or in the courtyard of the agency building.'),
(32, 45.089036, -87.1875, 'sanitarIcon.png', 'boss', 'Usually spawns in the villa jard or even outside the jard fence. He\'s highly unpredictable and neurotic and we can\'t exactly locate him.'),
(33, 71.965388, -2.109375, 'sanitarIcon.png', 'boss', 'Usually ground floor of the west wing. He\'s highly unpredictable and neurotic and we can\'t exactly locate him.'),
(34, 71.187754, 35.15625, 'sanitarIcon.png', 'boss', 'Usually ground floor of the east wing. He\'s highly unpredictable and neurotic and we can\'t exactly locate him.'),
(35, 72.289067, 24.960938, 'redCard.png', 'key', 'On the table in east wing room 221.\r\nEnter through room 218.'),
(36, 72.816074, 1.054688, 'redCard.png', 'key', 'In basement gym locker.'),
(37, 71.965388, -11.25, 'redCard.png', 'key', 'On blue barrel in west wing room 218.'),
(38, -15.284185, -145.195313, 'extractScav.png', 'extract', 'Ruined road scav extract.'),
(39, 43.325178, -169.453125, 'extractScav.png', 'extract', 'Svetly dead end extract.'),
(40, 64.623877, -166.289063, 'extractScav.png', 'extract', 'Ruined house fence extract.'),
(41, 82.853382, 127.617188, 'extractScav.png', 'extract', 'South fence extract.'),
(42, -54.572062, 57.65625, 'extractScav.png', 'extract', 'Lighthouse scav extract.'),
(43, 0.35156, -152.226563, 'extractPmc.png', 'extract', 'Tunnel PMC extract.'),
(44, 83.559717, -2.8125, 'extractPmc.png', 'extract', 'Rock passage extract (only if active).'),
(45, -53.540307, 30.585938, 'extractPmc.png', 'extract', 'Pier boat PMC extract (only if active).'),
(46, -45.089036, 132.1875, 'extractPmc.png', 'extract', 'CCP temp gate extract (only if active).'),
(47, -1.406109, 177.539063, 'extractAll.png', 'extract', 'Road to customs PMC and SCAV rxtract.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shorelinestashes`
--
ALTER TABLE `shorelinestashes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shorelinestashes`
--
ALTER TABLE `shorelinestashes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

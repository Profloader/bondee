
--
-- Database: `bondee`
--

CREATE DATABASE IF NOT EXISTS `bondee` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bondee`;

-- --------------------------------------------------------

--
-- Table structure for table `pre_reg`
--

DROP TABLE IF EXISTS `pre_reg`;
CREATE TABLE `pre_reg` (
  `id` int(11) NOT NULL,
  `fldName` varchar(50) NOT NULL,
  `fldEmail` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pre_reg`
--
ALTER TABLE `pre_reg`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pre_reg`
--
ALTER TABLE `pre_reg`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

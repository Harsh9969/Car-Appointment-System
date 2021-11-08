-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 10:47 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment_type`
--

CREATE TABLE `appoinment_type` (
  `aid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment_type`
--

INSERT INTO `appoinment_type` (`aid`, `sid`) VALUES
(92, 6),
(92, 7),
(98, 6),
(98, 8),
(105, 7),
(105, 8),
(106, 7),
(106, 9);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `aid` int(11) NOT NULL,
  `ow_name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `car_no` varchar(15) NOT NULL,
  `car_make` varchar(40) DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`aid`, `ow_name`, `date`, `time`, `car_no`, `car_make`, `phone`, `email`) VALUES
(92, 'harsh patel', '2019-03-30', '12:50:00', 'gj7bs9969', 'Maruti Suzuki', '7874539306', 'harsh@gmail.com'),
(98, 'deep', '2019-04-24', '01:00:00', 'gj23aj3316', 'Maruti Suzuki', '78469213200', 'deep@gmail.com'),
(105, 'harsh', '2019-04-10', '11:00:00', 'gj07cd1234', 'Maruti Suzuki', '78945661230', 'deep@gmail.com'),
(106, 'janvi', '2019-04-16', '01:00:00', 'gj07cd1234', 'Maruti Suzuki', '9624426598', 'janvi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cancel_app`
--

CREATE TABLE `cancel_app` (
  `cid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `carno` varchar(15) NOT NULL,
  `cmake` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancel_app`
--

INSERT INTO `cancel_app` (`cid`, `name`, `date`, `time`, `carno`, `cmake`, `phone`, `email`) VALUES
(1, 'meet', '2019-04-30', '01:00:00', 'gj07cd1234', 'Ford', '7864631901', 'harsh@gmail.com'),
(2, 'meet', '2019-04-30', '01:00:00', 'gj07cd1234', 'Ford', '7864631901', 'harsh@gmail.com'),
(3, 'hk', '2019-04-25', '01:11:00', 'gj23aj3316', 'Maruti Suzuki', '4875632999', 'harsh@gmail.com'),
(4, 'chintan', '2019-04-29', '01:11:00', 'gj7bs9969', 'Maruti Suzuki', '785439260', 'harsh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `car_make`
--

CREATE TABLE `car_make` (
  `mid` int(11) NOT NULL,
  `cmake` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_make`
--

INSERT INTO `car_make` (`mid`, `cmake`) VALUES
(1, 'Maruti Suzuki'),
(2, 'Ford'),
(3, 'Tata'),
(4, 'Hyundai'),
(5, 'Honda');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `name`, `email`, `message`) VALUES
(1, 'harsh patel', 'Admin@gmail.com', 'hello'),
(2, 'Test', 'text@gmail.com', 'tesst');

-- --------------------------------------------------------

--
-- Table structure for table `image_s4`
--

CREATE TABLE `image_s4` (
  `sid` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `intro` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_s4`
--

INSERT INTO `image_s4` (`sid`, `sname`, `image`, `intro`) VALUES
(8, 'Running Repairs', 'upload/run.png', 'Running repairs are the services required in the car, when a part is not working in right condition or may have worn out to the point that replacement or repairs are required to maintain the performance of your car.'),
(10, 'Air Conditioning System', 'upload/ac.png', 'On your visit to our workshop, our trained and experienced mechanics check for all the faults associated with the air conditioning system like leaks, faulty compressor etc. We then repair or replace the parts to ensure that your car AC is working in top condition and you enjoy your driving experience in all weather conditions.'),
(20, 'Body Repair', 'upload/body.png', 'Our end to end denting and painting solutions include car scratch repair, car paint repair, car bumper repair and more.Body repair helps to improve the appearance and resale value of the car.If you wish to get rid of those scratches and dents on your car, call us today or get an estimate online on our dent estimator tool.'),
(21, 'Periodic Maintenance Service', 'upload/pm.png', 'Preventive maintenance is a schedule of planned maintenance actions aimed at the prevention of breakdowns and failures and can do as a car owner to keep your ride happy and save money on repairs in the future. PMS is an important service to optimize the performance, reliability, safety, durability and resale value of the car. PMS show that it costs less as to maintain the car than to repair it.'),
(22, 'Accessories', 'upload/acc.png', 'Every car owner desires to make their car appear class apart so that the car can get some envious looks.Car accessories could change the look and feel of your car,give you a pleasant driving experience and also to maintain the car in the best way.'),
(23, 'Car Care', 'upload/cc.png', 'Our car grooming packages include complete range of services right from basic car washing services to detailed interior and upholstery cleaning, protective coating, dashboard polishing and vacuuming.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `rid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`rid`, `name`, `gender`, `phone`, `email`, `pass`) VALUES
(18, 'deep patel', 'M', '7874539306', 'deep@gmail.com', 'deep12'),
(19, 'harsh patel', 'M', '7874539306', 'harsh@gmail.com', 'harsh12'),
(20, 'sunny awtani', 'M', '9428713213', 'sunnyawtani59@gmail.com', 'Sunny123'),
(21, 'janvi patel', 'F', '9624426598', 'janvi@gmail.com', 'janvi');

-- --------------------------------------------------------

--
-- Table structure for table `service_detail`
--

CREATE TABLE `service_detail` (
  `servicedet_id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_detail`
--

INSERT INTO `service_detail` (`servicedet_id`, `description`, `sid`) VALUES
(9, 'Clutch', 8),
(10, 'Fuel System', 8),
(11, 'Steering', 8),
(12, 'Air Conditioning', 8),
(13, 'AC Gas replacement', 10),
(14, 'Denting', 20),
(15, 'Painting', 20),
(16, 'Battery and Cables', 21),
(17, 'Engine and Gear box mounting', 21),
(18, 'Dashboard Indicators', 21),
(19, 'Brakes', 21),
(20, 'Coolant', 21),
(21, 'Engine Oil and Oil filter', 21),
(22, 'Transmission fluid', 21),
(23, 'floor mating', 22),
(24, 'seat covers', 22),
(26, 'steering cover', 22),
(27, 'simple wash', 23),
(28, 'Form wash', 23),
(29, 'polish', 23);

-- --------------------------------------------------------

--
-- Table structure for table `service_master`
--

CREATE TABLE `service_master` (
  `smid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_master`
--

INSERT INTO `service_master` (`smid`, `sid`, `mid`, `price`) VALUES
(6, 8, 1, 2400),
(7, 10, 1, 500),
(8, 20, 1, 4000),
(9, 21, 1, 4500),
(10, 22, 1, 3599),
(11, 23, 1, 200),
(12, 8, 2, 3000),
(13, 10, 2, 1000),
(14, 20, 2, 6000),
(15, 21, 2, 6999),
(16, 22, 2, 6000),
(17, 23, 2, 500),
(18, 8, 3, 1500),
(19, 10, 3, 1800),
(20, 20, 3, 2500),
(21, 21, 3, 2899),
(22, 22, 3, 3199),
(24, 23, 3, 450),
(25, 8, 4, 1799),
(26, 10, 4, 2399),
(27, 20, 4, 3500),
(28, 21, 4, 3799),
(29, 22, 4, 3000),
(30, 23, 4, 500),
(31, 8, 5, 1699),
(32, 10, 5, 1700),
(33, 20, 5, 2899),
(34, 21, 5, 3000),
(35, 22, 5, 2550),
(36, 23, 5, 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment_type`
--
ALTER TABLE `appoinment_type`
  ADD KEY `aid` (`aid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `cancel_app`
--
ALTER TABLE `cancel_app`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `car_make`
--
ALTER TABLE `car_make`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `image_s4`
--
ALTER TABLE `image_s4`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `service_detail`
--
ALTER TABLE `service_detail`
  ADD PRIMARY KEY (`servicedet_id`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `service_master`
--
ALTER TABLE `service_master`
  ADD PRIMARY KEY (`smid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `mid` (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `cancel_app`
--
ALTER TABLE `cancel_app`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `car_make`
--
ALTER TABLE `car_make`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `image_s4`
--
ALTER TABLE `image_s4`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `service_detail`
--
ALTER TABLE `service_detail`
  MODIFY `servicedet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `service_master`
--
ALTER TABLE `service_master`
  MODIFY `smid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinment_type`
--
ALTER TABLE `appoinment_type`
  ADD CONSTRAINT `appoinment_type_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `appointment` (`aid`);

--
-- Constraints for table `service_detail`
--
ALTER TABLE `service_detail`
  ADD CONSTRAINT `service_detail_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `image_s4` (`sid`);

--
-- Constraints for table `service_master`
--
ALTER TABLE `service_master`
  ADD CONSTRAINT `service_master_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `image_s4` (`sid`),
  ADD CONSTRAINT `service_master_ibfk_2` FOREIGN KEY (`mid`) REFERENCES `car_make` (`mid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `sno` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`sno`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'admin2', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(11) NOT NULL,
  `item_name` varchar(45) NOT NULL,
  `item_price` int(56) NOT NULL,
  `datetime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Id`, `item_name`, `item_price`, `datetime`) VALUES
(1, 'watch', 1200, '2022-01-01'),
(2, 'phone', 670, '2022-01-01'),
(3, 'shirt', 6780, '2022-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `order_manage`
--

CREATE TABLE `order_manage` (
  `order_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `contact` bigint(100) NOT NULL,
  `paymode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manage`
--

INSERT INTO `order_manage` (`order_id`, `name`, `address`, `contact`, `paymode`) VALUES
(8, 'Sankalp', 'Pune', 9100000000, 'COD'),
(9, 'Raju', 'Amravati', 9100000000, 'COD'),
(10, 'Mita', 'Pune', 9100000000, 'COD'),
(11, 'xyz', 'xyz', 9100000000, 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `signup_info`
--

CREATE TABLE `signup_info` (
  `sno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_info`
--

INSERT INTO `signup_info` (`sno`, `name`, `address`, `contact`, `email`, `password`, `datetime`) VALUES
(29, 'Pooja ', 'Pune', 9100000000, 'a@com', '$2y$10$yZNcCP0Rb/6N9E8cOEzLv.lVpDyeXB9imyKt43PSLd4jhALvfDiaG', '2022-01-08 17:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `order_id` int(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `BookingTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`order_id`, `item_name`, `item_price`, `Quantity`, `BookingTime`) VALUES
(0, 'Nikon Eos', 450, 1, '2022-01-05 18:27:44'),
(2, 'Sony DSLR', 950, 1, '2022-01-05 18:27:44'),
(12, 'Nikon Eos', 450, 1, '2022-01-05 18:27:44'),
(12, 'Canon Eos', 1200, 1, '2022-01-05 18:27:44'),
(14, 'Nikon Eos', 450, 1, '2022-01-05 18:27:44'),
(14, 'Olympus DSLR', 350, 1, '2022-01-05 18:27:44'),
(14, 'Canon Eos', 1200, 1, '2022-01-05 18:27:44'),
(15, 'Nikon Eos', 450, 1, '2022-01-05 18:27:44'),
(16, 'Canon Eos', 1200, 1, '2022-01-05 18:28:26'),
(16, 'HMT Milan<', 1250, 1, '2022-01-05 18:28:26'),
(17, 'John Zok', 1850, 1, '2022-01-05 18:34:54'),
(17, 'Olympus DSLR', 350, 1, '2022-01-05 18:34:54'),
(8, 'Sony DSLR', 950, 1, '2022-01-08 17:14:53'),
(8, 'Olympus DSLR', 350, 1, '2022-01-08 17:14:54'),
(9, 'HMT Milan<', 1250, 1, '2022-01-08 17:17:08'),
(9, 'John Zok', 1850, 1, '2022-01-08 17:17:08'),
(10, 'Nikon Eos', 450, 1, '2022-01-14 23:26:42'),
(10, 'Sony DSLR', 950, 1, '2022-01-14 23:26:42'),
(10, 'Jhalsani', 2000, 1, '2022-01-14 23:26:42'),
(10, 'John Zok', 1850, 1, '2022-01-14 23:26:42'),
(11, 'Olympus DSLR', 350, 1, '2022-01-14 23:41:10'),
(11, 'Canon Eos', 1200, 1, '2022-01-14 23:41:10'),
(11, 'H&W<', 3000, 1, '2022-01-14 23:41:11'),
(11, 'Jhalsani', 2000, 1, '2022-01-14 23:41:11');



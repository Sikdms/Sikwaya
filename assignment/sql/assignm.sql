SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `Client_name` int(11) NOT NULL,
  `services_name` varchar(45) NOT NULL,
  `Client_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `bill` int(11) NOT NULL DEFAULT 0,
  `services_price` int(11) NOT NULL DEFAULT 0,
  `payment_picture` varchar(60) NOT NULL DEFAULT 'userImage.jpg',
  `isdeleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(11) NOT NULL,
  `services_name` varchar(45) NOT NULL,
  `services_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `bill` int(11) NOT NULL DEFAULT 0,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `tbl_order_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `Client_name` int(11) NOT NULL,
  `services_name` varchar(45) NOT NULL,
  `order_id` int(11) NOT NULL,
  `bill` int(11) NOT NULL DEFAULT 0,
  `payment_picture` varchar(60) NOT NULL DEFAULT 'userImage.jpg',
  `isdeleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_servises_details` (
  `services_id` int(11) NOT NULL,
  `services_name` varchar(45) NOT NULL,
  `bill` int(11) NOT NULL DEFAULT 0,
  `services_price` int(11) NOT NULL DEFAULT 0,
  `Client_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_services_details`
--

-- --------------------------------------------------------
--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` bigint(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL DEFAULT '0',
  `email` varchar(45) NOT NULL,
  `password` varchar(60) NOT NULL,
  `userType` varchar(30) NOT NULL,
  `created` bigint(10) NOT NULL DEFAULT 0,
  `isdeleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `firstname`, `lastname`, `gender`, `email`, `password`, `userType`,  `created`, `isdeleted`) VALUES
(1, 'john', 'kam','M','john@gmail.com', 'Empire2103', 'Client',  0, 0);

-- --------------------------------------------------------


--
-- Table structure for table `tbl_stock`
--
DROP TABLE IF EXISTS `tbl_stock`;
CREATE TABLE IF NOT EXISTS `tbl_stock` (
  `stock_id` bigint(11) NOT NULL,
  `product_name` varchar(45) NOT NULL,
  `quantity` int NOT NULL DEFAULT 0,
  `services_price` double NOT NULL DEFAULT 0,
  `services_marketprice` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stock`
--
   

--

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `fk_order_id` (`order_id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services_details`
  ADD PRIMARY KEY (`services_id`),
  ADD KEY `fk_services_marketprice` (`services_marketprice`);


--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `firstname` (`firstname`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`stock_id`);

--

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_product_details`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;



--

--
-- Constraints for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD CONSTRAINT `fk_order_id` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`order_id`);
-- AUTO_INCREMENT for table `tbl_stock
   
ALTER TABLE `tbl_stock`
  MODIFY `stock_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;


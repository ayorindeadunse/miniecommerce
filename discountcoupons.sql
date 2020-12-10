CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'comb', 'a39rre', 'product-images/comb.png', 30.00),
(2, 'mug', 'mug345', 'product-images/mug.png', 60.00),
(3, 'apple watch', 'applerr', 'product-images/applewatch.png', 100.00),
(4, 'laptop', 'lp455', 'product-images/laptop.jpg', 200.00);

CREATE TABLE `tbl_discount_coupon` (
  `id` int(8) NOT NULL,
  `discount_code` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `coupon_discount_percentage` double(10,2) NOT NULL,
  `min_amount` double(10,2) NOT NULL,
  `max_amount` double(10,2) NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_discount_coupon`
--

INSERT INTO `tbl_discount_coupon` (`id`, `discount_code`, `price`,`coupon_discount_percentage`,`min_amount`,`max_amount`) VALUES
(1, 'COUPONFIXED10', 10.00,0.0,50,100),
(2, 'COUPONPERCENT10', 0.00,0.1,100,200),
(3, 'COUPONMIXED10', 10.00,0.1,200,1000),
(4, 'COUPONREJECTED10', 10.00,0.1,1000,NULL);
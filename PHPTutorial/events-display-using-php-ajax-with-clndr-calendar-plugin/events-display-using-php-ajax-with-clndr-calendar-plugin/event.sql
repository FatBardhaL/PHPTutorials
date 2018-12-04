--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `date`, `title`) VALUES
(1, '2018-06-08', 'Weekend Party - at Hue residency'),
(2, '2018-06-11', 'Anniversary Celebration - at Meridian Hall'),
(3, '2018-06-20', 'Yearly Get Together - at College Campus'),
(4, '2018-05-31', 'Food Festival');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`),
  ADD UNIQUE KEY `event_id` (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
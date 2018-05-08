-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2018 at 02:42 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `story` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `city`, `story`, `author_id`, `author`, `date`) VALUES
(1002, 'Paris a lovely city', 'Paris', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas neque dolor, congue non libero vitae, cursus posuere nibh. Nulla finibus fermentum lobortis. Quisque vel semper diam, at cursus elit. In nec tempor sapien, eget vulputate ante. Sed lacinia tellus sed interdum porttitor. Donec aliquam, felis nec congue lobortis, est nisi tincidunt quam, a elementum quam diam eu massa. Pellentesque id lorem vel nulla blandit porta. Nulla varius dolor ac ante euismod lacinia rhoncus ut mauris. Ut pharetra est ut mi accumsan, sit amet viverra dui luctus. Quisque sit amet ipsum massa. Nullam blandit purus pulvinar, efficitur enim id, ultrices magna.</p><p>Etiam dapibus scelerisque augue sed tristique. Duis quam neque, pretium vel magna nec, accumsan tincidunt mi. Etiam fringilla tincidunt mauris ut convallis. Pellentesque non velit quis ex blandit volutpat vitae sit amet arcu. Morbi lobortis dolor mi. Praesent ullamcorper vehicula sapien vel consectetur. Duis vitae sem in sem tempor iaculis sit amet et nibh. Aenean vitae dui non magna pulvinar dignissim. Pellentesque dictum non nisi et vulputate.</p><p>Aliquam a urna in libero vulputate commodo. Quisque purus ante, egestas at pretium a, tempor maximus tortor. Morbi in ultrices ante. Mauris justo neque, tincidunt id augue porttitor, consequat dapibus tellus. Morbi eros nibh, posuere nec purus id, placerat pulvinar velit. Pellentesque aliquet blandit leo, sed convallis ex faucibus sed. Sed hendrerit vehicula blandit. Donec egestas nisi a sodales consequat. Fusce neque turpis, dapibus id pretium vel, sodales ut leo. In hac habitasse platea dictumst. Curabitur porttitor id dolor sit amet venenatis. Mauris eget felis dui.</p><p>Quisque hendrerit ac orci et faucibus. Proin ac vehicula turpis, quis porttitor ligula. Aliquam eget magna posuere lorem dictum sagittis. Mauris egestas interdum metus, a blandit est sodales vel. Ut sit amet sapien vel leo consequat porta vitae ut ligula. Donec in risus sit amet turpis molestie venenatis. Suspendisse est tellus, condimentum sed maximus in, maximus sed nunc. Integer convallis, metus ac semper pretium, nisi mi maximus mi, sit amet maximus neque est eget arcu. Aliquam sollicitudin tellus ac nunc eleifend, quis dignissim lacus consectetur.</p><p>Sed eleifend nisl et nulla consectetur, in auctor risus congue. Phasellus egestas velit sed neque malesuada accumsan. Phasellus ac arcu tortor. Phasellus pulvinar molestie convallis. Maecenas ultrices eros in mattis dictum. Vivamus tristique odio in imperdiet dignissim. Suspendisse ex massa, aliquam vitae imperdiet id, ultricies eu nisl. Sed sit amet sapien mattis, sagittis est eu, cursus massa</p>', 2, 'Nahian Jaydi', '2018-04-13 22:17:39'),
(1003, 'Barcelona a lively city', 'Barcelona', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis ullamcorper porttitor. Aenean et dolor tortor. Vivamus nec purus non odio vehicula pharetra in ac orci. Integer eget metus lobortis mi tempus aliquet. Quisque a lacus vulputate, maximus elit eu, facilisis nunc. Aenean sed tellus vitae odio tristique auctor ut vitae eros. Ut convallis a est ut porttitor. Aliquam erat volutpat. Quisque ut enim maximus, pulvinar lorem eget, auctor risus. Suspendisse nibh ante, lobortis sit amet lorem sed, sollicitudin placerat urna. Praesent euismod sem ut elit vehicula, eu feugiat sem consequat. Proin nec augue eu orci convallis sodales. Morbi sed finibus ante, nec pretium dolor. Quisque laoreet mattis turpis ac feugiat.</p><p>Donec lacinia eros libero. Vivamus id odio consectetur, lacinia ante sit amet, ornare tortor. Aliquam vestibulum cursus mollis. Integer rutrum, diam vitae viverra convallis, orci augue laoreet arcu, eget consequat nulla nunc sit amet ante. Etiam lacus leo, viverra ut egestas quis, finibus id quam. Phasellus non pretium lorem, non cursus magna. Mauris at sem suscipit, sollicitudin urna et, porttitor ipsum. Integer non est nunc.</p><p>Ut diam enim, pretium non sapien eu, consequat sodales diam. Praesent accumsan felis eu luctus ultrices. Nam suscipit elementum sem ut sagittis. Nunc et ex varius lacus congue aliquet id eget justo. Sed et sagittis magna. Phasellus tincidunt libero arcu, eu euismod nisi dictum nec. Mauris sed odio eu ipsum pellentesque cursus vitae ac sem. Morbi vel consequat enim, quis imperdiet ex.</p><p>Sed et felis sed justo congue scelerisque. Aliquam vitae felis molestie, consectetur elit in, egestas eros. Sed ornare nibh sit amet urna mollis interdum. Aenean ut libero efficitur elit tempor condimentum. Integer fringilla ultrices magna nec maximus. Nulla fringilla risus in risus tincidunt imperdiet. Maecenas quam nisi, auctor sit amet metus nec, dictum mattis dolor. Donec scelerisque ipsum augue, eget placerat massa viverra id. Aenean maximus justo vel ex ullamcorper vestibulum. Phasellus viverra semper consectetur. In egestas, metus id bibendum eleifend, nibh felis pellentesque enim, eget pulvinar nibh erat et lacus. Morbi ultrices erat enim. In pretium velit sed lacinia hendrerit.</p><p>Pellentesque efficitur ex eu cursus condimentum. Praesent rutrum tincidunt nisl, sed lobortis enim interdum ac. Praesent eget lorem vel felis consequat fringilla nec non tellus. Maecenas ut purus tortor. Donec ac diam vel nunc fringilla blandit. Morbi semper lacus vitae est rutrum, eu gravida quam finibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas eget velit dictum, dictum augue sit amet, laoreet odio. Fusce condimentum tempus lectus pharetra vulputate. Phasellus ut tellus quam.</p><p>Quisque sit amet neque condimentum, scelerisque orci ac, porta nisi. Maecenas quis vehicula urna, ut dapibus mauris. Vestibulum sed enim quis sem dapibus ultricies. Suspendisse eleifend rutrum tellus, eu fermentum risus semper a. Aliquam condimentum pellentesque aliquet. Nam scelerisque vel dui a malesuada. Aliquam eget dolor a quam vestibulum consectetur id sit amet justo. Duis ornare libero et aliquam semper. Aliquam tincidunt purus ut arcu cursus, id laoreet orci interdum. Nunc dictum tellus ac neque consequat suscipit. Phasellus a felis eleifend, sagittis risus id, eleifend mauris. Mauris tempus quam ut vestibulum fermentum. Morbi malesuada vehicula nisi, sit amet vestibulum felis pharetra et.</p><p>Morbi efficitur a libero eu aliquam. Nulla faucibus dignissim vehicula. Nulla condimentum facilisis odio eget gravida. Maecenas turpis est, aliquam quis felis nec, facilisis cursus nisi. Nulla eu egestas purus. Nulla facilisi. Cras rutrum id enim ac laoreet. Maecenas in odio et risus pretium vulputate eu sit amet nibh. Suspendisse potenti. Quisque viverra hendrerit lacus in molestie. Etiam feugiat lectus sed justo molestie vestibulum.</p>', 1, 'Nafis', '2018-04-14 08:51:28'),
(1004, 'Heaven on earth', 'Geneva', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis ullamcorper porttitor. Aenean et dolor tortor. Vivamus nec purus non odio vehicula pharetra in ac orci. Integer eget metus lobortis mi tempus aliquet. Quisque a lacus vulputate, maximus elit eu, facilisis nunc. Aenean sed tellus vitae odio tristique auctor ut vitae eros. Ut convallis a est ut porttitor. Aliquam erat volutpat. Quisque ut enim maximus, pulvinar lorem eget, auctor risus. Suspendisse nibh ante, lobortis sit amet lorem sed, sollicitudin placerat urna. Praesent euismod sem ut elit vehicula, eu feugiat sem consequat. Proin nec augue eu orci convallis sodales. Morbi sed finibus ante, nec pretium dolor. Quisque laoreet mattis turpis ac feugiat.</p><p>Donec lacinia eros libero. Vivamus id odio consectetur, lacinia ante sit amet, ornare tortor. Aliquam vestibulum cursus mollis. Integer rutrum, diam vitae viverra convallis, orci augue laoreet arcu, eget consequat nulla nunc sit amet ante. Etiam lacus leo, viverra ut egestas quis, finibus id quam. Phasellus non pretium lorem, non cursus magna. Mauris at sem suscipit, sollicitudin urna et, porttitor ipsum. Integer non est nunc.</p><p>Ut diam enim, pretium non sapien eu, consequat sodales diam. Praesent accumsan felis eu luctus ultrices. Nam suscipit elementum sem ut sagittis. Nunc et ex varius lacus congue aliquet id eget justo. Sed et sagittis magna. Phasellus tincidunt libero arcu, eu euismod nisi dictum nec. Mauris sed odio eu ipsum pellentesque cursus vitae ac sem. Morbi vel consequat enim, quis imperdiet ex.</p><p>Sed et felis sed justo congue scelerisque. Aliquam vitae felis molestie, consectetur elit in, egestas eros. Sed ornare nibh sit amet urna mollis interdum. Aenean ut libero efficitur elit tempor condimentum. Integer fringilla ultrices magna nec maximus. Nulla fringilla risus in risus tincidunt imperdiet. Maecenas quam nisi, auctor sit amet metus nec, dictum mattis dolor. Donec scelerisque ipsum augue, eget placerat massa viverra id. Aenean maximus justo vel ex ullamcorper vestibulum. Phasellus viverra semper consectetur. In egestas, metus id bibendum eleifend, nibh felis pellentesque enim, eget pulvinar nibh erat et lacus. Morbi ultrices erat enim. In pretium velit sed lacinia hendrerit.</p><p>Pellentesque efficitur ex eu cursus condimentum. Praesent rutrum tincidunt nisl, sed lobortis enim interdum ac. Praesent eget lorem vel felis consequat fringilla nec non tellus. Maecenas ut purus tortor. Donec ac diam vel nunc fringilla blandit. Morbi semper lacus vitae est rutrum, eu gravida quam finibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas eget velit dictum, dictum augue sit amet, laoreet odio. Fusce condimentum tempus lectus pharetra vulputate. Phasellus ut tellus quam.</p>', 2, 'Nahian Jaydi', '2018-04-14 08:59:27'),
(1005, 'Cleanest city of Europe - Viena', 'Viena', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis ullamcorper porttitor. Aenean et dolor tortor. Vivamus nec purus non odio vehicula pharetra in ac orci. Integer eget metus lobortis mi tempus aliquet. Quisque a lacus vulputate, maximus elit eu, facilisis nunc. Aenean sed tellus vitae odio tristique auctor ut vitae eros. Ut convallis a est ut porttitor. Aliquam erat volutpat. Quisque ut enim maximus, pulvinar lorem eget, auctor risus. Suspendisse nibh ante, lobortis sit amet lorem sed, sollicitudin placerat urna. Praesent euismod sem ut elit vehicula, eu feugiat sem consequat. Proin nec augue eu orci convallis sodales. Morbi sed finibus ante, nec pretium dolor. Quisque laoreet mattis turpis ac feugiat.</p><p>Donec lacinia eros libero. Vivamus id odio consectetur, lacinia ante sit amet, ornare tortor. Aliquam vestibulum cursus mollis. Integer rutrum, diam vitae viverra convallis, orci augue laoreet arcu, eget consequat nulla nunc sit amet ante. Etiam lacus leo, viverra ut egestas quis, finibus id quam. Phasellus non pretium lorem, non cursus magna. Mauris at sem suscipit, sollicitudin urna et, porttitor ipsum. Integer non est nunc.</p><p>Ut diam enim, pretium non sapien eu, consequat sodales diam. Praesent accumsan felis eu luctus ultrices. Nam suscipit elementum sem ut sagittis. Nunc et ex varius lacus congue aliquet id eget justo. Sed et sagittis magna. Phasellus tincidunt libero arcu, eu euismod nisi dictum nec. Mauris sed odio eu ipsum pellentesque cursus vitae ac sem. Morbi vel consequat enim, quis imperdiet ex.</p><p>Sed et felis sed justo congue scelerisque. Aliquam vitae felis molestie, consectetur elit in, egestas eros. Sed ornare nibh sit amet urna mollis interdum. Aenean ut libero efficitur elit tempor condimentum. Integer fringilla ultrices magna nec maximus. Nulla fringilla risus in risus tincidunt imperdiet. Maecenas quam nisi, auctor sit amet metus nec, dictum mattis dolor. Donec scelerisque ipsum augue, eget placerat massa viverra id. Aenean maximus justo vel ex ullamcorper vestibulum. Phasellus viverra semper consectetur. In egestas, metus id bibendum eleifend, nibh felis pellentesque enim, eget pulvinar nibh erat et lacus. Morbi ultrices erat enim. In pretium velit sed lacinia hendrerit.</p><p>Pellentesque efficitur ex eu cursus condimentum. Praesent rutrum tincidunt nisl, sed lobortis enim interdum ac. Praesent eget lorem vel felis consequat fringilla nec non tellus. Maecenas ut purus tortor. Donec ac diam vel nunc fringilla blandit. Morbi semper lacus vitae est rutrum, eu gravida quam finibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas eget velit dictum, dictum augue sit amet, laoreet odio. Fusce condimentum tempus lectus pharetra vulputate. Phasellus ut tellus quam.</p><p>Quisque sit amet neque condimentum, scelerisque orci ac, porta nisi. Maecenas quis vehicula urna, ut dapibus mauris. Vestibulum sed enim quis sem dapibus ultricies. Suspendisse eleifend rutrum tellus, eu fermentum risus semper a. Aliquam condimentum pellentesque aliquet. Nam scelerisque vel dui a malesuada. Aliquam eget dolor a quam vestibulum consectetur id sit amet justo. Duis ornare libero et aliquam semper. Aliquam tincidunt purus ut arcu cursus, id laoreet orci interdum. Nunc dictum tellus ac neque consequat suscipit. Phasellus a felis eleifend, sagittis risus id, eleifend mauris. Mauris tempus quam ut vestibulum fermentum. Morbi malesuada vehicula nisi, sit amet vestibulum felis pharetra et.</p><p>Morbi efficitur a libero eu aliquam. Nulla faucibus dignissim vehicula. Nulla condimentum facilisis odio eget gravida. Maecenas turpis est, aliquam quis felis nec, facilisis cursus nisi. Nulla eu egestas purus. Nulla facilisi. Cras rutrum id enim ac laoreet. Maecenas in odio et risus pretium vulputate eu sit amet nibh. Suspendisse potenti. Quisque viverra hendrerit lacus in molestie. Etiam feugiat lectus sed justo molestie vestibulum.</p>', 3, 'Viktor', '2018-04-14 09:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `dir_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `post_id`, `dir_name`) VALUES
(106, 1002, '5ad12c83c28a6_1523657859.jpg'),
(107, 1002, '5ad12c83c2984_1523657859.jpg'),
(108, 1002, '5ad12c83c2a35_1523657859.jpg'),
(109, 1003, '5ad1c11070037_1523695888.jpg'),
(110, 1003, '5ad1c11070148_1523695888.jpg'),
(111, 1004, '5ad1c2ef55499_1523696367.jpg'),
(112, 1004, '5ad1c2ef55581_1523696367.jpg'),
(113, 1004, '5ad1c2ef55623_1523696367.jpg'),
(114, 1005, '5ad1c423e5175_1523696675.jpg'),
(115, 1005, '5ad1c423e5256_1523696675.jpg'),
(116, 1005, '5ad1c423e531c_1523696675.jpg'),
(117, 1005, '5ad1c423e53d1_1523696675.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Nafis', 'nafis@gmail.com', '$2y$10$9rhbSKt8cvemfLqFOkn76.PIGoiBwng1k3iMFBYXCtK9Mq8ddRl6K'),
(2, 'Nahian Jaydi', 'nahian@gmail.com', '$2y$10$1nTrBKXesRuqo/2Nr5bahe6PADJk0BtL0pkMPYyB8PVIHQii04Pgu'),
(3, 'Viktor', 'viktor@gmail.com', '$2y$10$Yw9bijTsd8JQmeVLWGCss.7kqqr/o4rw3UlhqP.0Ewp4vml1Ci8qe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `blog_posts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 11:30 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `book_info` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `intro` text NOT NULL,
  `selling_price` int(11) NOT NULL,
  `cover` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`id`, `name`, `intro`, `selling_price`, `cover`) VALUES
(1, 'Harry Potter and the Prisoner of Azkaban', 'Harry Potter and the Prisoner of Azkaban is a fantasy novel written by British author J.K. Rowling and is the third in the Harry Potter series. The book follows Harry Potter, a young wizard, in his third year at Hogwarts School of Witchcraft and Wizardry. ', 500, 'HarryPotterAzkaban.jpg'),
(2, 'The Lord of the Rings. Part 1: The Fellowship of the Ring', 'The Lord of the Rings is an epic high-fantasy book by the English author and scholar J. R. R. Tolkien; he called it a \"heroic romance\", denying that it was a novel. The story began as a sequel to Tolkien\'s 1937 children\'s book The Hobbit, but eventually developed into a much larger work.', 350, 'LOR1.jpg'),
(4, 'The Beckoning', 'Michael felt he was living the American dream. For a number of years he\'d been reaping the professional and financial rewards of being a commercial litigation attorney. To him, life was great and getting better all the time. He first gained notoriety around his hometown as a nationally ranked tennis player. But now, years later, he was becoming known for his skills as a lawyer and as the youngest elected official in the area. And then, in his late 20s, Michael unexpectedly discovered something that turned his world and his entire idea of life upside down. In response to a challenge from a friend, Michael agreed to investigate issues relating to science, philosophy, and the Scriptures. Comfortable with his life as an atheist, he began reading with an indifferent attitude. But what started as a casual inquiry soon turned into a time of intense research. ', 400, 'TheBeckoning.jpg'),
(5, 'The Little Prince', 'The Little Prince is a novella by French aristocrat, writer, and aviator Antoine de Saint-Exupéry. It was first published in English and French in the US by Reynal & Hitchcock in April 1943, and posthumously in France following the liberation of France as Saint-Exupéry\'s works had been banned by the Vichy Regime', 200, 'Littleprince.JPG'),
(6, 'The Reckoning', 'The Reckoning is a best-selling novel by John Grisham. In addition to Grisham\'s typical legal thriller, the book was also characterized by reviewers as \"a murder mystery, a courtroom drama, a family saga, a coming-of-age story,\" \"a period piece\", and a war novel.', 600, 'Reckonning.jpg'),
(7, 'The Book Thief', 'The Book Thief is a historical novel by Australian author Markus Zusak, and is his most popular work. Published in 2005, The Book Thief became an international bestseller and was translated into 63 languages and sold 16 million copies. It was adapted into a 2013 feature film of the same name', 400, 'BookThief.jpg'),
(8, 'To Kill a Mockingbird', 'To Kill a Mockingbird is a novel by Harper Lee published in 1960. Instantly successful, widely read in high schools and middle schools in the United States, it has become a classic of modern American literature, winning the Pulitzer Prize', 550, 'MockingBird.jpg'),
(12, 'The Way of Kings', 'Sanderson’s epic fantasy series are all hugely popular and highly rated, but the Stormlight Archive fantasy saga appears to be readers’ favorite. The average Goodreads rating for the books published in the series so far is 4.6.', 450, 'WayOfKings.jpg'),
(13, 'The Last Olympian', 'Whether you think of this book as a YA or MG fantasy, Riordan deserves to be on a list of top rated Goodreads books. He’s won the GR Choice Awards more times than any other writer—seven since 2011—and every book he’s written rates above an average of four stars. The Last Olympian is the highest rated book in his Percy Jackson series at 4.5.', 350, 'TheLastOlymp.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_info`
--
ALTER TABLE `book_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

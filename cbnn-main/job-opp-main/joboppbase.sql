-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 03:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joboppbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `offre`
--

CREATE TABLE `offre` (
  `id_offre` int(20) NOT NULL,
  `id_recruteure` int(20) NOT NULL,
  `nom_entreprise` varchar(40) NOT NULL,
  `naw3` varchar(100) NOT NULL,
  `Kind_worker` varchar(30) NOT NULL,
  `tel_entreprise` int(20) NOT NULL,
  `email_entreprise` varchar(100) NOT NULL,
  `détaille_offre` varchar(1000) NOT NULL,
  `type_de_contrat` varchar(1000) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offre`
--

INSERT INTO `offre` (`id_offre`, `id_recruteure`, `nom_entreprise`, `naw3`, `Kind_worker`, `tel_entreprise`, `email_entreprise`, `détaille_offre`, `type_de_contrat`, `logo`) VALUES
(7, 3, 'Sunstar coffee', 'simple', 'Bar man ', 699332990, 'fusion10dbs@gmail.com', 'Dedicated and customer-oriented barista seeking to leverage exceptional coffee-making skills and friendly demeanor at Sunstar Coffee. Eager to contribute to creating a welcoming atmosphere and delivering high-quality coffee experiences to customers.', 'Studentjob', '664a1ad3bacf83.55653146_pexels-energepiccom-110472.jpg'),
(9, 3, 'Ceramic Palace Annaba', 'simple', 'Inventory Manager', 599332930, 'fusion10dbs@gmail.com', 'Detail-oriented inventory management professional with a track record of success in optimizing warehouse operations. Experienced in supply chain logistics, committed to enhancing efficiency at Palace Ceramic. Dedicated to minimizing costs and maximizing productivity to meet customer demand effectively.', 'Fixed term contract', '664a1ba2acec37.65694667_pexels-tiger-lily-4483610.jpg'),
(10, 3, 'Zara shop', 'simple', 'Salerperson in a store', 795337090, 'fusion10dbs@gmail.com', 'Experienced sales professional with a proven record of success in fast-paced retail environments. Skilled in providing exceptional customer service and driving sales at Zara. Committed to delivering an elevated shopping experience while achieving sales targets and fostering customer loyalty.', 'Studentjob', '664a1c2bdea976.55297619_pexels-edgars-kisuro-1488467.jpg'),
(11, 3, 'Private company ', 'simple', 'Architectural Engine', 688100274, 'fusion10dbs@gmail.com', 'Experienced architectural engineer adept at delivering innovative design solutions for private sector projects. Skilled in team leadership and client collaboration, with a focus on sustainable design and cutting-edge technology integration. Committed to creating functional and aesthetically pleasing spaces that surpass client expectations.', 'Permanent Contract', '664a29adc5b059.78521261_pexels-anete-lusina-4792498.jpg'),
(12, 3, 'Private company', 'simple', 'Execultive Assistant', 542295106, 'fusion10dbs@gmail.com', 'Experienced Executive Assistant adept at providing comprehensive support to senior management teams. Known for strong organizational skills, efficient multitasking, and discretion in handling sensitive information. Proven ability to streamline processes and enhance productivity in fast-paced environments.', 'Permanent Contract', '664a2a2fb22c77.21503065_pexels-fauxels-3184465.jpg'),
(13, 3, 'Yaldine express', 'simple', 'Mail Delivery Agent', 782904238, 'fusion10dbs@gmail.com', 'Dedicated mail delivery agent with a track record of providing efficient service for Yaldine Express. Skilled in optimizing delivery routes, ensuring timely deliveries, and maintaining excellent customer relations. Known for attention to strong communication skills, and a commitment to delivering packages safely and promptly.', 'Studentjob', '664a2a9e750fb2.45288367_téléchargement (1).png'),
(19, 1, 'Yassir', 'special', 'Marketing director', 782999210, 'fusion10dbs@gmail.com', 'Seasoned marketing director with a proven history of spearheading successful marketing campaigns and initiatives for Yassir. Demonstrated proficiency in market analysis, strategic planning, and overseeing multi-channel marketing efforts. Expertise in leading diverse teams to deliver innovative and impactful marketing solutions that resonate with target demographics. Committed to continuous learning and staying updated on emerging trends to drive forward-thinking marketing strategies. Dedicated to leveraging comprehensive marketing knowledge and leadership skills to propel Yassir\'s brand growth and achieve organizational goals.', 'Permanent Contract', '664c9f7d965962.59236541_ysr.jpg'),
(20, 1, 'Ooredoo', 'special', 'Senior specialiste budget', 784599210, 'fusion10dbs@gmail.com', 'A Senior Specialist in Budget at Ooredoo, a leading telecommunications company, is responsible for managing and overseeing the budgeting process to ensure financial efficiency and strategic alignment within the organization.he  plays a crucial role in the financial management of the company. This position involves preparing, analyzing, and monitoring budgets to support Ooredoo’s financial goals and operational strategies.', 'Fixed term contract', '664ca7eadddd03.93074600_ordd.jpg'),
(22, 4, 'Tech Innovators Inc.', 'simple', ' Software Developer', 683287108, 'maouihatem@gmail.com', ' We are looking for a skilled Software Developer to join our innovative team. The ideal candidate will have experience with modern programming languages and agile methodologies.', 'Permanent Contract', '664d2819d54360.41206663_technology-innovation-examples.jpg'),
(23, 4, ' Bright Futures Education', 'simple', 'Teacher', 567192978, 'maouihatem@gmail.com', 'Seeking a dedicated Teacher for a fixed-term contract to teach elementary school students. Must have relevant teaching qualifications and experience.', 'Fixed term contract', '664d2a5a3bdb20.46711733_turn-page-collage_23-2149876323.jpg'),
(24, 4, 'Creative Minds Agency', 'simple', 'Graphic Designer', 784205210, 'maouihatem@gmail.com', ' We are looking for a part-time Graphic Designer to assist with various design projects. Ideal for students pursuing a degree in graphic design.', 'Work study contract', '664d2b70b51ee1.56452081_creative-ideas-colors_18591-26413.jpg'),
(25, 4, ' Urban Coffee Shop', 'simple', 'Barista', 521152043, 'maouihatem@gmail.com', 'Hiring part-time Baristas to join our team. Ideal for students looking for flexible working hours while studying.', 'Studentjob', '664d2c28c7f507.64221992_portrait-person-with-futuristic-bionic-body-part_23-2151401351.jpg'),
(30, 3, 'Future Finance Group', 'simple', ' Financial Analyst', 792641092, 'ranamekti@gmail.com', 'Seeking a detail-oriented Financial Analyst to join our team. Responsibilities include analyzing financial data and preparing reports for management.', 'Permanent Contract', '664d2dfa4ecd28.57763702_illustrate-subway-station-blue-monday-transformed-by-blue-mood-lighting-live-soothing-musi_950002-500062.jpg'),
(31, 3, ' StarTech Solutions', 'simple', 'IT Support Specialist', 782810210, 'ranamekti@gmail.com', 'Looking for an IT Support Specialist to join our team for a 12-month contract. Responsibilities include troubleshooting technical issues and providing IT support to employees.', 'Fixed term contract', '664d2e670a7fc2.72699019_digital-composite-image-businessman-with-icons-against-gray-background_1048944-26884536.jpg'),
(32, 3, ' Future Innovators Lab', 'simple', ' Research Assistant', 696566905, 'ranamekti@gmail.com', 'Seeking a Research Assistant to support ongoing research projects. This is a work-study position ideal for students in the fields of science or engineering.', 'Work study contract', '664d2f55ea38b5.45303065_person-using-ar-technology-their-daily-occupation_23-2151137512.jpg'),
(33, 3, 'Techie Gadgets Store', 'simple', 'Sales Assistant', 709567410, 'ranamekti@gmail.com', ' Looking for a Sales Assistant to work weekends and holidays. Responsibilities include assisting customers and managing inventory.', 'Studentjob', '664d2ff1d38669.18397270_electronic-products-stores-display-variety-classic_943281-32344.jpg'),
(34, 5, ' Sonatrach', 'simple', ' Senior Engineer', 672295038, 'jodiislem@gmail.com', 'In the role of Senior Engineer at Sonatrach, you will lead engineering projects, design and develop systems, and ensure compliance with industry standards and safety regulations. You will mentor junior engineers, manage project timelines and budgets, and collaborate with cross-functional teams to achieve project goals.', 'Permanent Contract', '664d30a24e02b0.39216527_algeria-gas-reserve-algeria-gas-storage-reservoir-natural-gas-tank_220166-1603.jpg'),
(35, 5, ' Naftal', 'simple', ' Supply Chain Analyst', 521039443, 'jodiislem@gmail.com', 'As a Supply Chain Analyst at Naftal, you will analyze supply chain data, identify areas for improvement, and optimize processes to enhance efficiency. You will manage logistics, monitor inventory levels, and develop strategies to reduce costs and improve service delivery.', 'Fixed term contract', '664d311ba8dee4.66336927_OIP.jpg'),
(36, 5, ' Wellness Health Club', 'simple', ' Fitness Trainer', 556001652, 'jodiislem@gmail.com', ' Hiring a Fitness Trainer to work part-time while studying. Responsibilities include conducting fitness classes and providing personal training sessions.', 'Work study contract', '664d31b8363ca9.73737357_group-young-girls-engaged-fitness-balls-healthy-lifestyle_180601-1488.jpg'),
(37, 5, ' Event Management Co', 'simple', ' Event Coordinator', 510566905, 'jodiislem@gmail.com', '  Seeking a part-time Event Coordinator to help organize and manage events. Ideal for students looking to gain experience in event planning.', 'Studentjob', '664d3292104242.46673471_banquet-manager-setting-table-event_23-2148085306.jpg'),
(40, 6, 'Urban Architects Ltd.', 'simple', 'Architect', 542178778, 'kerchlouz@gmail.com', ' Looking for a creative Architect to join our team. Must have experience with modern architectural designs and construction project management.', 'Permanent Contract', '664d341fec3121.13193485_developer-examining-construction-project_995162-4034.jpg'),
(41, 6, ' Bright Minds Tutoring', 'simple', 'Tutor', 778862048, 'kerchlouz@gmail.com', ' We are looking for a Tutor to assist students in various subjects. This is a work-study position ideal for students pursuing a degree in education.', 'Work study contract', '664d3494d83c67.37919385_teacher-young-student-being-cheerful_23-2148511037.jpg'),
(42, 7, 'Global Marketing Agency', 'simple', 'Marketing Coordinator', 669269864, 'aminegomina@gmail.com', 'We are looking for a Marketing Coordinator to join our team for a fixed-term project. Duties include coordinating marketing campaigns and conducting market research.', 'Fixed term contract', '664d35684ff1c0.61903095_creative-international-internet-day-concept_950002-117698.jpg'),
(43, 7, 'Sarl Bimo', 'simple', 'Retail Assistant', 656042810, 'aminegomina@gmail.com', 'As a Retail Assistant at Sarl Bimo, you will assist customers, manage inventory, and handle sales transactions. Your responsibilities include stocking shelves, providing product information, and ensuring a pleasant shopping experience for customers. You will also assist in organizing store displays ', 'Studentjob', '664d3623c63d31.55693432_OIP.jpg'),
(44, 6, 'Shiraton Hotel', 'simple', 'Waiter', 541877455, 'kerchlouz@gmail.com', 'The Waiter at Shiraton Hotel will serve food and beverages, take orders, and ensure customer satisfaction. You will greet customers, provide menu recommendations, and manage dining experiences. Your role includes maintaining cleanliness in the dining area, processing payments, and delivering excellent customer service.', 'Studentjob', '664d36f0394be5.18725663_R.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `postuler`
--

CREATE TABLE `postuler` (
  `id_postuler` int(20) NOT NULL,
  `id_utilisateur` int(20) NOT NULL,
  `id_offre` int(20) NOT NULL,
  `id_recruteure` int(20) NOT NULL,
  `phonenumber` int(20) NOT NULL,
  `niveau_etude` enum('Niveau Secondaire','Niveau Terminal','Baccalauréat','TS Bac +2','Licence (LMD), Bac + 3','Master 1, Licence  Bac + 4','Master 2, Ingéniorat, Bac + 5','Magistère Bac + 7','Doctorat','Non Diplômante','Formation Professionnelle','Certification') NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recruteur`
--

CREATE TABLE `recruteur` (
  `id_recruteure` int(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `sexe` enum('homme','femme','','') NOT NULL,
  `prénom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recruteur`
--

INSERT INTO `recruteur` (`id_recruteure`, `nom`, `sexe`, `prénom`, `email`, `password`) VALUES
(1, 'oubiri', 'homme', 'monem', 'fusion10dbs@gmail.com', 'almasalmas'),
(3, 'mekti', 'femme', 'rana', 'ranamekti@gmail.com', '10022004'),
(4, 'maoui ', 'homme', 'hatem', 'maouihatem@gmail.com', 'hatemhatem'),
(5, 'jodi', 'homme', 'islem', 'jodiislem@gmail.com', '27112003'),
(6, 'debz', 'homme', 'anis', 'nisou9alblouz@gmail.com', 'debzdebz'),
(7, 'djaber', 'homme', 'amine', 'aminegomina@gmail.com', 'djaberdjaber');

-- --------------------------------------------------------

--
-- Table structure for table `utilisatuer`
--

CREATE TABLE `utilisatuer` (
  `id_utilisateur` int(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `sexe` enum('homme','femme','','') NOT NULL,
  `prénom` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mot de passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisatuer`
--

INSERT INTO `utilisatuer` (`id_utilisateur`, `nom`, `sexe`, `prénom`, `email`, `mot de passe`) VALUES
(3, 'mallem', 'homme', 'djamel', 'fusion10dbs@gmail.com', 'almasalmas'),
(4, 'jodi', 'homme', 'islem ', 'islemjodi@gmail.com', 'cyrincyrin'),
(5, 'jihane ', 'femme', 'zemmar', 'amanizmar@gmail.com', 'hadilnoor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`id_offre`),
  ADD KEY `fk_recruteure_offre` (`id_recruteure`);

--
-- Indexes for table `postuler`
--
ALTER TABLE `postuler`
  ADD PRIMARY KEY (`id_postuler`),
  ADD KEY `fk_etulisatuer_postuler` (`id_utilisateur`),
  ADD KEY `fk_recruteur_postuler` (`id_recruteure`),
  ADD KEY `fk_offre_postuler` (`id_offre`);

--
-- Indexes for table `recruteur`
--
ALTER TABLE `recruteur`
  ADD PRIMARY KEY (`id_recruteure`);

--
-- Indexes for table `utilisatuer`
--
ALTER TABLE `utilisatuer`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offre`
--
ALTER TABLE `offre`
  MODIFY `id_offre` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `postuler`
--
ALTER TABLE `postuler`
  MODIFY `id_postuler` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recruteur`
--
ALTER TABLE `recruteur`
  MODIFY `id_recruteure` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `utilisatuer`
--
ALTER TABLE `utilisatuer`
  MODIFY `id_utilisateur` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `fk_recruteure_offre` FOREIGN KEY (`id_recruteure`) REFERENCES `recruteur` (`id_recruteure`) ON DELETE CASCADE;

--
-- Constraints for table `postuler`
--
ALTER TABLE `postuler`
  ADD CONSTRAINT `fk_etulisatuer_postuler` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisatuer` (`id_utilisateur`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_offre_postuler` FOREIGN KEY (`id_offre`) REFERENCES `offre` (`id_offre`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_recruteur_postuler` FOREIGN KEY (`id_recruteure`) REFERENCES `recruteur` (`id_recruteure`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

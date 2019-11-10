-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 04:36 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printers`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text,
  `text1` text,
  `sub_title` varchar(255) DEFAULT NULL,
  `text2` text,
  `text3` text,
  `text4` text,
  `service1` varchar(255) DEFAULT NULL,
  `service2` varchar(255) DEFAULT NULL,
  `service3` varchar(255) DEFAULT NULL,
  `service4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `text1`, `sub_title`, `text2`, `text3`, `text4`, `service1`, `service2`, `service3`, `service4`) VALUES
(1, 'About Us', 'Nexware Technologies have over 15 years of industry experience and we provide the industry’s leading print technology and business operating software. We can supply a variety of office technology hardware and software systems including office printers & copiers, digital production printers, print management, print MIS software and ERP system to suit any size of organization, and all supported by a professional team of technical experts.', 'Why Choose Nexware?', 'Customers come to us for a variety of reasons. Our strong links with the most respected names in the industry – Xerox, HP, QuickEasy Software mean we have access to top-quality equipment and software solutions. We offer great value for money, excellent on-site service, years of experience and expert advice. We also tailor solutions to each customer. What we do is bespoke, and never off -the-shelf.', 'Our sales staff are all experts who will help you choose the right business technology to meet your specific needs. Our friendly team of advisors offers impartial and detailed advice on all aspects of the latest hardware and software technology for your business.', 'Our expertise lies in providing expert advice to help you select the right office technology so whether you are looking for a new multifunction printer or trying to reduce your expenses with your existing printers or looking for right business management software to streamline your complex business operations, you can rely on friendly, independent advice from our expert sales consultants. You can expect straight talk and honest answers from people who are passionate about service and custome r care.', 'We are responsible', 'Reasonable Pricing', 'Friendly Support', 'Expert Staff');

-- --------------------------------------------------------

--
-- Table structure for table `be`
--

CREATE TABLE `be` (
  `id` int(11) NOT NULL,
  `desc1` text,
  `video` text,
  `desc2` text,
  `desc2_1` text,
  `desc2_2` text,
  `desc2_3` text,
  `desc2_4` text,
  `desc2_5` text,
  `desc2_6` text,
  `desc2_7` text,
  `desc3` text,
  `desc3_1` text,
  `desc3_2` text,
  `desc3_3` text,
  `desc3_4` text,
  `desc3_5` text,
  `desc3_6` text,
  `desc3_7` text,
  `desc4` text,
  `desc4_1` text,
  `desc4_2` text,
  `desc4_3` text,
  `desc4_4` text,
  `desc4_5` text,
  `desc4_6` text,
  `desc4_7` text,
  `desc4_8` text,
  `desc4_9` text,
  `desc5` text,
  `desc5_1` text,
  `desc5_2` text,
  `desc5_3` text,
  `desc5_4` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `be`
--

INSERT INTO `be` (`id`, `desc1`, `video`, `desc2`, `desc2_1`, `desc2_2`, `desc2_3`, `desc2_4`, `desc2_5`, `desc2_6`, `desc2_7`, `desc3`, `desc3_1`, `desc3_2`, `desc3_3`, `desc3_4`, `desc3_5`, `desc3_6`, `desc3_7`, `desc4`, `desc4_1`, `desc4_2`, `desc4_3`, `desc4_4`, `desc4_5`, `desc4_6`, `desc4_7`, `desc4_8`, `desc4_9`, `desc5`, `desc5_1`, `desc5_2`, `desc5_3`, `desc5_4`) VALUES
(1, 'Streamlines complex business operations. 100% Scalable and Flexible', 'https://www.youtube.com/embed/Vd4_aUlcoBY', 'Sales, CRM and POS', 'Customer data - unlimited', 'Track sales activity', 'Quoting - fast and accurate', 'Follow-up until accepted or declined', 'Point of Sale (POS) offers barcode scanner or lookups function', 'Personalized bulk e-mail', 'Reporting on sales productivity', 'Operations', 'Estimating and Costing', 'Procurement', 'Production Planning', 'Timekeeping and tracking', 'Project management', 'Replenishment of materials and inventory', 'Reporting on production and project management', 'Accounting', 'GAAP compliant', 'Multi-entity', 'Multi-currency', 'Receivables and Payables', 'Ledger', 'Direct bank import', 'Landing costs', 'Close off', 'Reporting (Trial Balance, Income Statement, Balance Sheet)', 'Reports', 'Custom reporting module for your unique reporting requirements', 'Fixed reporting modules - standard built-in reports', 'Linked summaries - on every transaction/module', 'Key Performance Indicators (KPI) dashboard');

-- --------------------------------------------------------

--
-- Table structure for table `bp`
--

CREATE TABLE `bp` (
  `id` int(11) NOT NULL,
  `desc1` text,
  `video` text,
  `desc2` text,
  `desc2_1` text,
  `desc2_2` text,
  `desc2_3` text,
  `desc2_4` text,
  `desc2_5` text,
  `desc2_6` text,
  `desc3` text,
  `desc3_1` text,
  `desc3_2` text,
  `desc3_3` text,
  `desc3_4` text,
  `desc3_5` text,
  `desc3_6` text,
  `desc3_7` text,
  `desc3_8` text,
  `desc4` text,
  `desc4_1` text,
  `desc4_2` text,
  `desc4_3` text,
  `desc4_4` text,
  `desc4_5` text,
  `desc5` text,
  `desc5_1` text,
  `desc5_2` text,
  `desc5_3` text,
  `desc5_4` text,
  `desc5_5` text,
  `desc5_6` text,
  `desc5_7` text,
  `desc5_8` text,
  `desc6` text,
  `desc6_1` text,
  `desc6_2` text,
  `desc6_3` text,
  `desc6_4` text,
  `desc6_5` text,
  `desc7` text,
  `desc7_1` text,
  `desc7_2` text,
  `desc7_3` text,
  `desc7_4` text,
  `desc7_5` text,
  `desc7_6` text,
  `desc7_7` text,
  `desc7_8` text,
  `desc7_9` text,
  `desc7_10` text,
  `desc8` text,
  `desc8_1` text,
  `desc8_2` text,
  `desc8_3` text,
  `desc8_4` text,
  `desc8_5` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bp`
--

INSERT INTO `bp` (`id`, `desc1`, `video`, `desc2`, `desc2_1`, `desc2_2`, `desc2_3`, `desc2_4`, `desc2_5`, `desc2_6`, `desc3`, `desc3_1`, `desc3_2`, `desc3_3`, `desc3_4`, `desc3_5`, `desc3_6`, `desc3_7`, `desc3_8`, `desc4`, `desc4_1`, `desc4_2`, `desc4_3`, `desc4_4`, `desc4_5`, `desc5`, `desc5_1`, `desc5_2`, `desc5_3`, `desc5_4`, `desc5_5`, `desc5_6`, `desc5_7`, `desc5_8`, `desc6`, `desc6_1`, `desc6_2`, `desc6_3`, `desc6_4`, `desc6_5`, `desc7`, `desc7_1`, `desc7_2`, `desc7_3`, `desc7_4`, `desc7_5`, `desc7_6`, `desc7_7`, `desc7_8`, `desc7_9`, `desc7_10`, `desc8`, `desc8_1`, `desc8_2`, `desc8_3`, `desc8_4`, `desc8_5`) VALUES
(1, 'Quick installation. Easy to use. Fast and accurate print estimating that anyone can do. ', 'https://www.youtube.com/embed/R7AsG6K_mi0', 'Sales, CRM and POS', 'Unlimited customers details', 'Send personalized mailshots', 'Track sales', 'Quotation follow-up until accepted or declined', 'Point of Sale (POS) - barcode scanner or lookups', 'Take payments: cash, card, EFT, cheque, vouchers', 'Estimating', 'Litho, Digital, Large Format, Flexo and Silkscreen printing - Sheetfed and Web', 'Fast quoting from templates', 'Unlimited quote quantities with individual mark-ups', 'Adjustments by customer and job category', 'Detailed costing summary', 'Estimate internal or outsourced jobs', 'Output to personalized quote letters, cost sheets and RFQ\'s', 'Updated paper prices supplied to your database', 'Planning board', 'Keep cost centres loaded', 'Ensures jobs are delivered on time', 'Task due-dates automatically calculated', 'Drag-and-drop for easy updates', 'Colour-mapping visually identifies job status and progress', 'Workflow and Job Tracking', 'Links everything from quotation to invoice', 'Follow-up reminders', 'Work in progress', 'One system - no more patchwork systems that don\'t talk to each other', 'Record start and end times', 'Automatic updates real-time job status', 'Capture notes, quantities, issue stock', 'Spot areas of improvement at an estimating, operator and cost centre level', 'Materials and stock', 'Purchase against orders or to replenish stock', 'Manage multiple inventory locations', 'Automatic stock costing', 'Perform stock checks without interrupting production', 'Issue stock from the factory-floor job tracker', 'Accounting', 'GAAP compliant', 'Bank imports', 'Unlimited accounts', 'Close-off date and audits', 'Ledger', 'Receivables and payables', 'Income Statements and VAT control', 'Trial Balance and Balance Sheet', 'Asset register', 'Export to excel and other packages', 'Reporting', 'Standard and customized reports', 'Instant summaries for customers, suppliers, staff, materials, jobs and accounts', 'Performance indicators (KPI\'s)', 'Easily export to excel', 'Easy-to-use pivot tables and charts');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `t1` text,
  `t1_1` text,
  `t2` text,
  `t2_1` text,
  `t3` text,
  `t3_1` text,
  `t4` text,
  `t4_1` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `t1`, `t1_1`, `t2`, `t2_1`, `t3`, `t3_1`, `t4`, `t4_1`) VALUES
(1, 'Rachel Theilacker and her team at Diversified Business Solutions have been servicing our copier needs for almost five years. They deliver on-time, professional and courteous service to our busy hospitals. They truly have a partner mentality in responding to our business needs and I have not once considered moving my business elsewhere.', 'Mark D. Smith, MBA, Controller', 'I have been and continue to be  impressed with the professional service, attention to detail and responsiveness of Diversified, both the sales and the   service divisions.', 'AJ Frank, AJ Frank CFP', 'I have been and continue to be  impressed with the professional service, attention to detail and responsiveness of Diversified, both the sales and the   service divisions.', 'AJ Frank, AJ Frank CFP', 'Rachel Theilacker and her team at Diversified Business Solutions have been servicing our copier needs for almost five years. They deliver on-time, professional and courteous service to our busy hospitals. They truly have a partner mentality in responding to our business needs and I have not once considered moving my business elsewhere.', 'Mark D. Smith, MBA, Controller');

-- --------------------------------------------------------

--
-- Table structure for table `copies`
--

CREATE TABLE `copies` (
  `id` int(11) NOT NULL,
  `p1_title` text,
  `p1_desc` text,
  `p1_t1` text,
  `p1_t2` text,
  `p1_t3` text,
  `p1_t4` text,
  `p1_t5` text,
  `p1_t6` text,
  `p1_t7` text,
  `p2_title` text,
  `p2_desc` text,
  `p2_t1` text,
  `p2_t2` text,
  `p2_t3` text,
  `p2_t4` text,
  `p2_t5` text,
  `p2_t6` text,
  `p2_t7` text,
  `p3_title` text,
  `p3_desc` text,
  `p3_t1` text,
  `p3_t2` text,
  `p3_t3` text,
  `p3_t4` text,
  `p3_t5` text,
  `p3_t6` text,
  `p3_t7` text,
  `p3_t8` text,
  `p3_t9` text,
  `p3_t10` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `copies`
--

INSERT INTO `copies` (`id`, `p1_title`, `p1_desc`, `p1_t1`, `p1_t2`, `p1_t3`, `p1_t4`, `p1_t5`, `p1_t6`, `p1_t7`, `p2_title`, `p2_desc`, `p2_t1`, `p2_t2`, `p2_t3`, `p2_t4`, `p2_t5`, `p2_t6`, `p2_t7`, `p3_title`, `p3_desc`, `p3_t1`, `p3_t2`, `p3_t3`, `p3_t4`, `p3_t5`, `p3_t6`, `p3_t7`, `p3_t8`, `p3_t9`, `p3_t10`) VALUES
(1, 'Xerox® VersaLink® C405 Printer', 'Monochrome MFP with support for Letter-Legal/A4', ' Copy, print, scan, fax, email, cloud', ' Best for workteams of 2 to 10 users', ' Unparalleled multifunction productivity with incredible color quality', ' Designed small to perform big at the heart of your business', ' Recommended Monthly Print Volume: Up to 5,000 pages per month', ' Color: up to 36 ppm', ' Black up to 36 ppm', 'Xerox® VersaLink® C7020 / C7025 / C7030 Multifunction Printers', 'Xerox® ConnectKey® Technology enabled color MFP with support for Tabloid/A3', ' Copy, print, scan, fax, email, cloud', ' integrated office finisher saves space without sacrificing features and functionality', 'Up to 5,500 / 6,250 / 7,000 pages per month', 'up to 20 / 25 / 30 ppm', 'up to 20 / 25 / 30 ppm', '620 sheets', '4,180 sheets', 'Xerox® AltaLink® C8030 / C8035 / C8045 / C8055 / C8070', 'Xerox® ConnectKey® Technology enabled smart Workplace Assistant', 'Color MFP with support for A3', 'Copy, print, scan, fax, email, built in mobile connectivity', 'Ideal for mid to large workgroups', '10 inch color, customizable tablet-like user interface', 'Powerful and scalable for simple to the most demanding office applications', 'Up to 12,000 / 18,000 / 40,000 pages per month', 'up to 30 / 35 / 45 / 50 / 70 ppm', 'up to 30 / 35 / 45 / 55 / 70 ppm', '5,140 sheets', '2,180 sheets');

-- --------------------------------------------------------

--
-- Table structure for table `first`
--

CREATE TABLE `first` (
  `id` int(11) NOT NULL,
  `slider1_title` varchar(100) DEFAULT NULL,
  `slider1_text` text,
  `slider2_title` varchar(100) DEFAULT NULL,
  `slider2_text` text,
  `slider3_title` text,
  `slider3_text` text,
  `slider4_title` varchar(100) DEFAULT NULL,
  `slider4_text` text,
  `box_title` varchar(100) DEFAULT NULL,
  `box_text` varchar(255) DEFAULT NULL,
  `equip_title` varchar(100) DEFAULT NULL,
  `equip_text` text,
  `manage_title` varchar(100) DEFAULT NULL,
  `manage_text` text,
  `doc_title` varchar(100) DEFAULT NULL,
  `doc_text` text,
  `print_title` text NOT NULL,
  `print_desc` text NOT NULL,
  `enterprise_title` text NOT NULL,
  `enterprise_desc` text NOT NULL,
  `office_add` text,
  `phone` text,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `first`
--

INSERT INTO `first` (`id`, `slider1_title`, `slider1_text`, `slider2_title`, `slider2_text`, `slider3_title`, `slider3_text`, `slider4_title`, `slider4_text`, `box_title`, `box_text`, `equip_title`, `equip_text`, `manage_title`, `manage_text`, `doc_title`, `doc_text`, `print_title`, `print_desc`, `enterprise_title`, `enterprise_desc`, `office_add`, `phone`, `email`) VALUES
(0, 'Xerox Office Copiers & Multifunction Printers', 'Need Some Clarity in the Way Your Business Uses Print, Copy and Scan?', 'Xerox Production Printers &  Solutions', 'Ideal Graphic Communication Solutions for Print On Demand, Short Runs and More.', 'BOSPrint - Printing Business Software', 'Quick Installation. Easy to Use. Fast and Accurate Print Estimating that Anyone Can Do.', 'BOSEnterprise - Complete ERP System for all SMEs', '100% scaleable and flexible to meet your exact business requirements', 'Your Business Technology Partner in UAE', 'We at Nexware, are committed to providing a well-rounded offering of office technology hardware and software systems that fit your business, budget, and future.', 'Xerox Printers & Copiers', 'We provide from desktop to full-size office laser printers and service solutions for every conceivable need in print and document management. We offer the latest in Xerox colour and black & white multifunctional printers that range from 20 PPM to 110 PPM.', 'Xerox Production Printers', 'We support our clients by offering the whole Xerox production portfolio of cut-sheet digital presses and production printers. The sheet-fed printers are perfect for commercial printers, graphic design agencies, and digital marketing agencies due to the high volume printing applications and high level of speed production.', 'Managed Print Services', 'Complete business management software (ERP) highly effective at streamlining complex business operations, automating tedious admin, and giving you instant insight and control into your entire business. BOSEnterprise help you to manage your business’s finances, distribution, manufacturing, sales and people efficiently with one system.', 'BOSPrint - Printing Business Software', 'ERP/MIS software designed for printing companies. BOSPrint gives you control of your entire business in a single system. Helps you to generate accurate estimation and quotes, reduce wastage, manage production, keep an eye on your overall costs and profit, step away from mundane admin tasks, and focus on the bigger picture.', 'BOSEnterprise - ERP System for all SMEs', 'Complete business management software (ERP) for all SMEs. Highly effective at streamlining complex business operations, automating tedious admin, and giving you instant insight and control into your entire business. BOSEnterprise help you to manage your business’s finances, distribution, manufacturing, sales and people efficiently with one system.', 'PO Box 87297, Office M06, Al Habtoor Khabaisi Building, Salah Al Din Road, Deira, Dubai, UAE', '+971 4 286 1212', ' info@nexware.ae');

-- --------------------------------------------------------

--
-- Table structure for table `managed`
--

CREATE TABLE `managed` (
  `id` int(11) NOT NULL,
  `t1` text,
  `t2` text,
  `desc1` text,
  `t3` text,
  `t4` text,
  `t5` text,
  `t6` text,
  `t7` text,
  `t8` text,
  `t9` text,
  `t10` text,
  `desc2` text,
  `t11` text,
  `t12` text,
  `t13` text,
  `t14` text,
  `t15` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `managed`
--

INSERT INTO `managed` (`id`, `t1`, `t2`, `desc1`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `t9`, `t10`, `desc2`, `t11`, `t12`, `t13`, `t14`, `t15`) VALUES
(1, 'The ownership and management of print devices within an organization can often be complicated with multi-vendor machines in various locations and very different requirements from end users. Xerox print management solutions are tailored to help you take control of your fleet, however big or small, so you can track and manage the cost and volume of what your organization prints, copies and scans.', 'By using Print Management Software that automatically defines and controls which type of device and how a document is printed, cost per copy, paper and consumables can be dramatically reduced. We’ll also help your staff change their behavior by establishing a clearly defined print policy specific to your organization’s needs.', 'Xerox Managed Print Services will give you one point of accountability for everything, from Service to Support to Billing.', 'Typical savings of up to 30%', 'Provide a worry-free print environment', 'Enhance document security', 'Improve environment sustainability', 'Reduced strain of internal resources', 'Full visibility of print environment', 'Fit for purpose new technology', 'Nationwide service and installation network', 'How does Managed Print Service work?', 'Our project management process is tailored to manage your printing services; therefore, our projects are delivered on time, on budget and with minimal disruption. Our approach is defined in four phases;', 'Assess your requirements in detail', 'Design a solution that matches your requirements, and that will adopt and grow with your business', 'Implement your solution efficiently and effectively', 'Manage the running of your print efficiency');

-- --------------------------------------------------------

--
-- Table structure for table `mono`
--

CREATE TABLE `mono` (
  `id` int(11) NOT NULL,
  `p4_title` text,
  `p4_desc` text,
  `p4_t1` text,
  `p4_t2` text,
  `p4_t3` text,
  `p4_t4` text,
  `p4_t5` text,
  `p4_t6` text,
  `p5_title` text,
  `p5_desc` text,
  `p5_t1` text,
  `p5_t2` text,
  `p5_t3` text,
  `p5_t4` text,
  `p5_t5` text,
  `p5_t6` text,
  `p5_t7` text,
  `p5_t8` text,
  `p5_t9` text,
  `p6_title` text,
  `p6_desc` text,
  `p6_t1` text,
  `p6_t2` text,
  `p6_t3` text,
  `p6_t4` text,
  `p6_t5` text,
  `p6_t6` text,
  `p6_t7` text,
  `p6_t8` text,
  `p6_t9` text,
  `p6_t10` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mono`
--

INSERT INTO `mono` (`id`, `p4_title`, `p4_desc`, `p4_t1`, `p4_t2`, `p4_t3`, `p4_t4`, `p4_t5`, `p4_t6`, `p5_title`, `p5_desc`, `p5_t1`, `p5_t2`, `p5_t3`, `p5_t4`, `p5_t5`, `p5_t6`, `p5_t7`, `p5_t8`, `p5_t9`, `p6_title`, `p6_desc`, `p6_t1`, `p6_t2`, `p6_t3`, `p6_t4`, `p6_t5`, `p6_t6`, `p6_t7`, `p6_t8`, `p6_t9`, `p6_t10`) VALUES
(1, 'Xerox® VersaLink® B405 Printer', 'Monochrome MFP with support for Letter-Legal/A4', ' Copy, print, scan, fax, email, cloud', ' Best for workteams of 3 to 15 users', ' Unparalleled multifunction productivity with incredible print quality', ' Designed small to perform big at the heart of your business', ' Recommended Monthly Print Volume: Up to 12,000 pages per month', ' Speed: up to 47 ppm', 'Xerox® VersaLink® B7025 / B7030 / B7035 Multifunction Printers', 'Xerox® ConnectKey® Technology enabled smart Workplace Assistant', ' Black and white MFP with support for Tabloid/A3', ' Copy, print, scan, fax, email, cloud', ' Ideal for small to mid size workgroups', 'integrated office finisher saves space without sacrificing features and functionality', 'Up to 13,000 / 15,000 / 17,000 pages per month', 'up to 25 / 30 / 35 ppm', 'up to 20 / 25 / 30 ppm', '620 sheets', '5,140 sheets', 'Xerox® AltaLink® B8045 / B8055 / B8065 / B8075 / B8090', 'Xerox® ConnectKey® Technology enabled smart Workplace Assistant', 'Black-and-white MFP with support for Tabloid/A3', 'Copy, print, scan, fax, email and built in mobile connectivity', 'The fleet-ready, black-and-white workflow accelerator with built-in mobile connectivity', 'Ideal for mid to large workgroups', '10 inch color, customizable tablet-like user interface', '8,000 sheets', '8,000 sheets', 'up to 45 / 55 / 65 / 75 / 90 ppm', '4,700 sheets', '2,180 sheets');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `desc1` text,
  `desc1_1` text,
  `desc1_2` text,
  `desc2` text,
  `desc2_1` text,
  `desc2_2` text,
  `desc2_3` text,
  `desc2_4` text,
  `desc3` text,
  `desc3_1` text,
  `desc3_2` text,
  `desc4` text,
  `desc5` text,
  `desc5_1` text,
  `desc6` text,
  `desc6_1` text,
  `desc6_2` text,
  `desc6_3` text,
  `desc7` text,
  `desc7_1` text,
  `desc7_2` text,
  `desc7_3` text,
  `t1` text,
  `t2` text,
  `t3` text,
  `t4` text,
  `t5` text,
  `t6` text,
  `t7` text,
  `t8` text,
  `t9` text,
  `desc8` text,
  `desc8_1` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `desc1`, `desc1_1`, `desc1_2`, `desc2`, `desc2_1`, `desc2_2`, `desc2_3`, `desc2_4`, `desc3`, `desc3_1`, `desc3_2`, `desc4`, `desc5`, `desc5_1`, `desc6`, `desc6_1`, `desc6_2`, `desc6_3`, `desc7`, `desc7_1`, `desc7_2`, `desc7_3`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `t9`, `desc8`, `desc8_1`) VALUES
(1, 'The best ERP for your business.  No contracts. No lock-ins. A monthly subscription gives you freedom to grow.', 'AED 375/- (excl VAT). Ideal for a single user', 'AED 250/- per user pm (excl VAT). Ideal for more than one user', 'What your monthly subscription includes.', 'Immediate access to all modules', 'Friendly Helpdesk support', 'Access to upgrades', 'Paper price updates from all the regional and national paper suppliers.', 'On-site training and Other Support.', 'AED 150/hr', 'AED 225/hr', 'All rates are excl VAT.', 'On-site training.', 'Our friendly business agents offer on-site support and training throughout most of UAE and GCC countries.', 'Remote support and training.', 'Using the secure, password protected Teamviewer platform, our consultants can install and train you and your team remotely. This is charged at a lower rate than onsite training.', 'BOS online documentation.', 'Want to know more about the software and how it works? Our extensive online documentation can will have what you’re looking for, and can be accessed by clicking the following link:', 'Safe, simple steps to ensure a great installation.', 'Changing business software or MIS, or even moving on to one for the first time can be a very challenging process.', 'Fortunately, with QuickEasy BOS, installing your new business software is a simple procedure and, in most cases, we’re able to have you up and running, producing trusted and personalized quotations, within a day or two.', 'Our consultants will systematically guide you through the business software installation and document your new procedures. They will also provide you with reports and dashboard indicators to measure the progress of the installation.', 'An outline of what to prepare.', 'Make sure you have all your company contact information, admin documentation, and staff details.', 'QuickEasy can import your customer and supplier lists from your existing estimating or accounting package, if you are using one.', 'Divide your company into logical production cost centres. Make sure you know the direct costs of each cost centre, as well as the productive working hours. Our agents can assist you.', 'Provide your material list prices (supplier catalogues) and any discount structures. Printing companies can import current paper price lists from all the South African paper merchants.', 'List all the internal and outsourced Services used in your company.', 'If you’re a printer, you will also need the list of standard printing sections you use in your company. Flexographic printers will need to capture a list of their standard dies, matched to the cylinder sets they keep in stock.', 'QuickEasy will personalise all your document templates with full colour headers and footers from your supplied artwork.', 'If you are upgrading from another system, QuickEasy can import your old quotations and orders and make them available to you as a searchable report.', 'WANT TO KNOW MORE ABOUT HOW NEXWARE TEAM CAN HELP?', 'Contact us today! Call us on +971 4 286 1212  or enquire using our online form');

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `id` int(11) NOT NULL,
  `p7_title` text,
  `p7_desc1` text,
  `p7_desc2` text,
  `p7_t1` text,
  `p7_t2` text,
  `p7_t3` text,
  `p7_t4` text,
  `p8_title` text,
  `p8_desc1` text,
  `p8_desc2` text,
  `p8_t1` text,
  `p8_t2` text,
  `p8_t3` text,
  `p8_t4` text,
  `p9_title` text,
  `p9_desc1` text,
  `p9_desc2` text,
  `p9_t1` text,
  `p9_t2` text,
  `p9_t3` text,
  `p9_t4` text,
  `p9_t5` text,
  `p10_title` text,
  `p10_desc1` text,
  `p10_desc2` text,
  `p10_t1` text,
  `p10_t2` text,
  `p10_t3` text,
  `p10_t4` text,
  `p10_t5` text,
  `p10_t6` text,
  `p11_title` text,
  `p11_desc1` text,
  `p11_desc2` text,
  `p11_t1` text,
  `p11_t2` text,
  `p11_t3` text,
  `p11_t4` text,
  `p11_t5` text,
  `p11_t6` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`id`, `p7_title`, `p7_desc1`, `p7_desc2`, `p7_t1`, `p7_t2`, `p7_t3`, `p7_t4`, `p8_title`, `p8_desc1`, `p8_desc2`, `p8_t1`, `p8_t2`, `p8_t3`, `p8_t4`, `p9_title`, `p9_desc1`, `p9_desc2`, `p9_t1`, `p9_t2`, `p9_t3`, `p9_t4`, `p9_t5`, `p10_title`, `p10_desc1`, `p10_desc2`, `p10_t1`, `p10_t2`, `p10_t3`, `p10_t4`, `p10_t5`, `p10_t6`, `p11_title`, `p11_desc1`, `p11_desc2`, `p11_t1`, `p11_t2`, `p11_t3`, `p11_t4`, `p11_t5`, `p11_t6`) VALUES
(1, 'Xerox® Color C70', 'Small footprint. Big value. A flexible, cost-effective solution helping you deliver professional image quality to your customers.', 'Ideal for Marketing Collateral and Photo Publishing applications.', ' 10 - 50k pages per month', ' 70 PPM color', ' Small footprint', ' Optional in-line finishing supports stapling, booklets and more', 'Xerox® Versant 180 Press', 'Take your print operation to the next level with automation and quality in a compact footprint. Add the Performance Package for enhanced productivity and speeds.', 'Ideal for Direct Marketing, Marketing Collateral (business cards, envelopes, brochures, etc.) and Photo Publishing.', ' Up to 80k pages per month', ' Up to 80 PPM', ' Performance Package option delivers full rated 80 ppm on all stocks up to 350 g/m², adds automated color calibration with X-Rite® Inline Spectrophotometer', ' Ultra HD Resolution with four times more pixels than standard', 'Xerox® Versant 3100 Press', 'Ultimate automation and more productivity to help you meet the highest production demands', 'Ideal for Direct Marketing, Marketing Collateral (business cards, envelopes, brochures, etc.) and Photo Publishing.', ' Up to 250k pages per month', ' Up to 100 PPM', ' Fully automated color and production print optimization via Full Width Array', ' Production Accurate Registration, Stock Library Manager and Automated Sheet Clearing enhance print productivity', ' Ultra HD 10 bit Resolution with four times more pixels than standard', 'Xerox® Iridesse™ Production Press', 'Delivers more \"wow\" impact per printed page through digital specialty enhancements and Color FLX Technology', 'Ideal for Direct Marketing, Brochures, Marketing Collateral, Business Cards, Greeting Cards, Invitations, Point of Sale Signage, Light Packaging and Photo Publishing applications.', ' 225k - 475k impressions per month', ' 120 PPM with media ranges from 52 to 400 gsm printing at rated speed', ' Up to six inline dry ink stations for optional White, Clear, Silver and Gold Specialty Dry Inks add \"wow\" impact to static or variable applicaitons', ' Ultra High Definition (HD) Resolution: 1200x1200x10 bits RIP resolution plus 2400x2400 x 1 bit print resolution', ' Full Width Array and Automated Color Quality Suite for fast time to production', ' Additional high capacity feeders for up to 8 media pick points and inline finishing solutions to fit your operation and workflow needs', 'Xerox® iGen® 5 Press', 'One platform; unprecedented productivity, automation, quality, and flexibility.', 'Ideal for Direct Marketing, Marketing Collateral, Packaging, Photo Publishing and Transactional applications.', 'Up to 1,000,000 pages per month', '150, 120, and 90 PPM', 'Extended 26\" sheet size helps you expand to new markets and applications', '2400x2400 dpi', 'Optional 5th print station enables Orange, Green, and Blue Gamut Extension Colors, as well as White and Clear for specialty effects', 'System-wide automation');

-- --------------------------------------------------------

--
-- Table structure for table `qe`
--

CREATE TABLE `qe` (
  `id` int(11) NOT NULL,
  `t1` text,
  `t2` text,
  `l1` text,
  `l2` text,
  `l3` text,
  `l4` text,
  `l5` text,
  `l6` text,
  `l7` text,
  `l8` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qe`
--

INSERT INTO `qe` (`id`, `t1`, `t2`, `l1`, `l2`, `l3`, `l4`, `l5`, `l6`, `l7`, `l8`) VALUES
(1, 'At Nexware, we consult businesses to optimize and implement an affordable, flexible and easy to use ERP system called \"BOS Print\" and \"BOS Enterprise\" developed by Quick Easy Software (www.quickeasysoftware.com) based in South Africa. The software was developed in year 1998 and since then Business Operating System (BOS) has helped hundreds of clients all over the world to streamline their business operations and stay competitive. Businesses rely on BOS to manage their business’s finances, distribution, manufacturing, sales, and people, efficiently.', 'BOS integrates all business functions into one very clever, easy to use system. It efficiently gets on with all the admin work in the backend, so that you can get on with running a business.', 'Strong focus on simplicity without compromising functionality', 'Integrated solution One database, One executable', 'Server hosted locally (Windows or Linux) or in the Cloud Server ', 'Supports Multi Database, Multi Currency, Multi Warehouse, Multi Entities', 'Easy to use user interface with split view - Main panel & Side panel', 'Secure - Large number of settings to control User Access', 'Scalable - 50+ Concurrent users', 'Fast, Robust and FREE database Firebird SQL');

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `id` int(11) NOT NULL,
  `t1` text,
  `t2` text,
  `t3` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`id`, `t1`, `t2`, `t3`) VALUES
(1, 'From paper to small desktop printers to toner replacements, our dedicated supplies operation will keep your business running.', 'Nexware’s dedicated account managers will work closely with you, qualifying your needs and recommending the most appropriate and cost-effective printer supplies from an extensive range of original brands and remanufactured alternatives. We provide this office and printer supplies service to clients of all sizes and industry types who value the personal service and care they experience, and the value this ultimately delivers to their organization.', 'With Nexware office and printer supplies you can be confident of professionalism, quality products and exemplary client service at all times. 1234');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(0, 'admin@admin.com', '1a8565a9dc72048ba03b4156be3e569f22771f23');

-- --------------------------------------------------------

--
-- Table structure for table `xerox`
--

CREATE TABLE `xerox` (
  `id` int(11) NOT NULL,
  `t1` text,
  `t2` text,
  `t3` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `xerox`
--

INSERT INTO `xerox` (`id`, `t1`, `t2`, `t3`) VALUES
(1, 'Xerox multifunction printers are designed to improve productivity and streamline business operations. Xerox all-in-one printers are a great choice for offices with heavy workloads and demanding deadlines. Flexible enough to be configured to your individual requirements, Xerox multifunction laser printer range offers a choice of print speeds, security and network controls, storing, image management and finishing options.', 'Xerox devices also enable customized document management and control. To cater precisely to your business requirements, choose from a range of different base options including A3 colour, A4 colour, A3 B&W and A4 B&W.', 'We offer a broad range of Xerox copiers, many of which are multifunction devices that can also print, fax and scan. Our B&W and colour photocopiers let you select a device with the features, space requirements, efficiency and flexibility to suit your business perfectly. Xerox offers an unmatched range of office printers. Choose either colour and B&W printers that can deliver high print speeds, network features, print tracking and budget management options. Our broad range of office printers and multifunction devices can significantly increase your business’s productivity.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `be`
--
ALTER TABLE `be`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bp`
--
ALTER TABLE `bp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copies`
--
ALTER TABLE `copies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `first`
--
ALTER TABLE `first`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managed`
--
ALTER TABLE `managed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mono`
--
ALTER TABLE `mono`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qe`
--
ALTER TABLE `qe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xerox`
--
ALTER TABLE `xerox`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `be`
--
ALTER TABLE `be`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bp`
--
ALTER TABLE `bp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `copies`
--
ALTER TABLE `copies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `managed`
--
ALTER TABLE `managed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mono`
--
ALTER TABLE `mono`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qe`
--
ALTER TABLE `qe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplies`
--
ALTER TABLE `supplies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `xerox`
--
ALTER TABLE `xerox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

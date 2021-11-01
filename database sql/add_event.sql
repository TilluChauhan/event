-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 04:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_event`
--

CREATE TABLE `add_event` (
  `id` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `event_image` varchar(100) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `type_event` varchar(100) NOT NULL,
  `price` bigint(20) NOT NULL,
  `detail_image` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `location` varchar(100) NOT NULL,
  `detail` longtext NOT NULL,
  `term` longtext NOT NULL,
  `feature` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_event`
--

INSERT INTO `add_event` (`id`, `catid`, `event_image`, `event_name`, `description`, `type_event`, `price`, `detail_image`, `start_date`, `end_date`, `location`, `detail`, `term`, `feature`) VALUES
(1, 1, 'pic329.jpg', 'Jo Bolta Hai Wohi Hota Hai Feat Harsh Gujral', '|  English,Hindi | 16yrs+ | 1Hr', 'Stand Up Comedy Show', 499, 'pic275.jpg', '2121-10-13', '2121-10-17', 'MIC Drop:Delhi', '<p><strong>Kunal Kamra is back after a long hiatus caused by a Bat, he brings you a mix of old and new jokes.<br />\nAn hour of jokes to make you forget the miseries of the world. Don`t miss out, who knows when comedy becomes illegal</strong></p>\n', '<p><strong>1. Tickets once booked cannot be exchanged or refunded</strong></p>\n\n<p><strong>2. An Internet handling fee per ticket may be levied. Please check the total amount before payment</strong></p>\n\n<p><strong>3. We recommend that you arrive at-least 30 minutes prior at the venue for a seamless entry&nbsp;</strong></p>\n\n<p><strong>&nbsp;4. It is mandatory to wear masks at all times and follow social distancing norms</strong></p>\n\n<p><strong>&nbsp;5. Please do not purchase tickets if you feel sick</strong></p>\n\n<p><strong>&nbsp;6. Unlawful resale (or attempted unlawful resale) of a ticket would lead to seizure or cancellation of that ticket without refund or other compensation</strong></p>\n\n<p><strong>&nbsp;7. Rights of admission reserved</strong></p>\n\n<p><strong>8. These terms and conditions are subject to change from time to time at the discretion of the organizer</strong></p>\n', 0),
(2, 2, 'pic291.jpg', 'FrontRow Open Mics', ',Online Streaming Events | 1hr 15mins', 'Comedy Shows', 299, 'pic352.jpg', '2121-10-14', '2121-10-14', 'Watch On Zoom', '<p><strong>FrontRow Presents Daily Online Open Mic at 8 PM &amp; 10 PM. Rest schedule is available on Frontrow Comedy Community Instagram Page.</strong></p>\n', '<p><em><strong>1. Tickets once booked cannot be exchanged or refunded</strong></em></p>\n\n<p><em><strong>2. An Internet handling fee per ticket may be levied. Please check the total amount before payment</strong></em></p>\n\n<p><em><strong>3. Recording or uploading of this stream is not permitted. Strict action will be taken against those who break these guidelines.</strong></em></p>\n\n<p><em><strong>4. The time and date of the show may vary due to internet connectivity issues. In this case, the artist will share the revised date and/or timing at the earliest</strong></em></p>\n\n<p><em><strong>5. There may be interruptions in the stream due to internet connectivity issue. We suggest you to have good speed internet connectivity</strong></em></p>\n\n<p><em><strong>6. These terms and conditions are subject to change from time to time at the discretion of the organizer</strong></em></p>\n', 1),
(3, 2, 'pic281.jpg', 'Curtain Call Exclusives', '| English,Hindi | 16yrs+ | 1Hr', 'Comedy', 599, 'pic281.jpg', '2121-10-14', '2121-10-14', 'Multiple Venus', '<p><strong>Curtain Call Exclusives</strong></p>\n\n<p><strong>One destination for Theatre, Standup and all the amazing workshops. Stage has a new meaning with Curtain Call. Exclusive Online and Live content in one page. Bringing Indian and international content especially for you.</strong></p>\n', '<ul>\n	<li><strong>Age limit: 18+</strong></li>\n	<li><strong>Tickets once booked cannot be exchanged or refunded</strong></li>\n	<li><strong>An Internet handling fee per ticket may be levied. Please check the total amount before payment</strong></li>\n	<li><strong>THERE WILL BE A MINIMAL COVER CHARGE AT THE PERFORMANCE VENUE WHICH WILL BE FULLY REDEEMABLE AGAINST FOOD AND BEVERAGES.</strong></li>\n	<li><strong>We recommend that you arrive at-least 30 minutes prior at the venue for a seamless entry&nbsp;</strong></li>\n	<li><strong>It is mandatory to wear masks at all times and follow social distancing norms</strong></li>\n	<li><strong>Please do not purchase tickets if you feel sick</strong></li>\n	<li><strong>Unlawful resale (or attempted unlawful resale) of a ticket would lead to seizure or cancellation of that ticket without refund or other compensation</strong></li>\n	<li><strong>Rights of admission reserved</strong></li>\n	<li><strong>These terms and conditions are subject to change from time to time at the discretion of the organizer.</strong></li>\n</ul>\n', 1),
(6, 3, 'pic238.jpg', 'Online Creative Crafts for Diwali', ' | English, Hindi | 5yrs + | 1hr', 'Kids, Online Streaming Events ', 1200, 'pic345.jpg', '2121-10-28', '2121-10-28', 'Watch on Zoom', '<p><strong>After a year filled with murkiness, make this Diwali splendid and sparkling with your little one&rsquo;s handmade lanterns, Diya, and other exciting crafts! Diwali is the festival of lights and sweets. It&rsquo;s that time of the year when we decorate our happy home with a variety of crafts, and light lanterns, and all</strong></p>\n', '<p><strong>1. Tickets once booked cannot be exchanged or refunded</strong></p>\n\n<p><strong>2. An Internet handling fee per ticket may be levied. Please check the total amount before payment</strong></p>\n\n<p><strong>3. We recommend that you arrive at-least 10 minutes prior at the venue for a seamless entry&nbsp;</strong></p>\n\n<p><strong>4. It is mandatory to keep your video one during the session. You cant keep your video off during the session.</strong></p>\n\n<p><strong>5. Please follow the instructions given by the moderator and the trainer.</strong></p>\n\n<p><strong>6. Unlawful resale (or attempted unlawful resale) of a ticket would lead to seizure or cancellation of that ticket without refund or other compensation</strong></p>\n\n<p><strong>7. Rights of admission reserved</strong></p>\n\n<p><strong>8. These terms and conditions are subject to change from time to time at the discretion of the organizer.</strong></p>\n', 0),
(7, 3, 'pic365.jpg', 'Art Workshop for Kids by Uttara Lakhani', 'Hobby Classes | English | 5yrs + | 1hr', 'Hobby Classes ', 300, 'pic463.jpg', '2121-10-28', '2121-10-28', 'Watch On Zoom', '<p><strong>Little Hands presents art class for 5 to 10 years old, every Thursday from 5 to 6 pm.</strong></p>\n\n<p><strong>Uttara is an artist and teacher. Along with teaching kids, she also</strong></p>\n', '<ul>\n	<li><strong>Age Limit: 5 - 10 years&nbsp;</strong></li>\n	<li><strong>Recording or uploading of this stream is not permitted.</strong></li>\n	<li><strong>The time and date of the show may vary due to internet connectivity issues. In this case, the artist will share the revised date and/or timing at the earliest.</strong></li>\n	<li><strong>There may be interruptions in the stream due to internet connectivity issues.</strong></li>\n</ul>\n', 0),
(9, 2, 'pic262.jpg', 'Please Interrupt ft by Nishant Tanwar', '| English, Hindi | 16yrs + | 1hr 30mins', 'Comedy ', 499, 'pic128.jpg', '2121-10-28', '2121-10-28', 'Auro Kitchen And Bar:New Delhi', '<p><strong>Please Interrupt Me is a concept where the audience can do whatever they wish to and Nishant asks you to interrupt him. One dose of the vaccine is mandatory to attend.</strong></p>\n', '<ul>\n	<li><strong>Age Limit: 16+ (subject to change as per the show content).&nbsp;</strong></li>\n	<li><strong>The Internet handling fee per ticket may be levied. Please check your total amount before payment.&nbsp;</strong></li>\n	<li><strong>No refunds on the purchased ticket are possible, even in case of any rescheduling.&nbsp;</strong></li>\n	<li><strong>Audio or video recording of the show is not permitted.&nbsp;</strong></li>\n	<li><strong>You must not make, create, store, record or transmit any kind of sound recording, visual footage (recording), or store, record or transmit any information or other data with relation to the event.&nbsp;</strong></li>\n	<li><strong>The organizers reserve the right to eject you from the venue for doing so.&nbsp;</strong></li>\n	<li><strong>Outside food / Drinks will not be permitted in the venue.&nbsp;</strong></li>\n	<li><strong>Usage of Mobile Phones or any act which disturbs the artist/performer will not be tolerated beyond a point and the person doing so can be asked to leave.</strong></li>\n	<li><strong>Seating is on a first-come-first-serve basis.&nbsp;</strong></li>\n	<li><strong>Artist line-up may change and the management reserves the right to change the line-up at any given time due to external factors.&nbsp;</strong></li>\n	<li><strong>We recommend that you arrive at least 30 minutes prior to the venue to pick up your physical tickets.&nbsp;</strong></li>\n	<li><strong>The door will close after 20 min and latecomer will not allow and the ticket will not refund.&nbsp;</strong></li>\n	<li><strong>The Laugh Store and BookMyShow are not to be held responsible for the content that may seem offensive or vulgar to members of the audience and is completely owned and delivered by the artist(s).&nbsp;</strong></li>\n	<li><strong>Please check the location of the event. The Laugh Store and BMS will not be responsible if the guest reaches a different location.&nbsp;</strong></li>\n	<li><strong>Please carry your Photo ID cards for age proof.&nbsp;</strong></li>\n	<li><strong>Please carry valid student ID to avail student discount offer.</strong></li>\n</ul>\n', 1),
(10, 2, 'pic344.jpg', 'Punchliners Comedy Show ft Rajat Chauhan', '| Hindi, English | 16yrs + | 1hr 30mins', 'Comedy Shows', 499, 'pic397.jpg', '2121-10-28', '2121-10-28', 'The Audio,Max Towers:Noida', '<p><strong>You don`t have to wait in lines just to hear jokes from Rajat Chauhan.</strong></p>\n\n<p><strong>Catch him perform live at Novotel and have a hilarious experience with your gang!</strong></p>\n', '<p><strong>1. Tickets once booked cannot be exchanged or refunded</strong></p>\n\n<p><strong>2. An Internet handling fee per ticket may be levied. Please check the total amount before payment</strong></p>\n\n<p><strong>3. We recommend that you arrive at-least 30 minutes prior at the venue for a seamless entry&nbsp;</strong></p>\n\n<p><strong>4. It is mandatory to wear masks at all times and follow social distancing norms</strong></p>\n\n<p><strong>5. Please do not purchase tickets if you feel sick</strong></p>\n\n<p><strong>6. Unlawful resale (or attempted unlawful resale) of a ticket would lead to seizure or cancellation of that ticket without refund or other compensation</strong></p>\n\n<p><strong>7. Rights of admission reserved</strong></p>\n\n<p><strong>8. These terms and conditions are subject to change from time to time at the discretion of the organizer</strong></p>\n', 0),
(11, 1, 'pic256.jpg', 'Digital Marketing & Communication', '', 'Education', 999, 'pic268.jpg', '2121-10-28', '2121-10-28', 'Online Streaming', '<p><strong>Digital Marketing has been a growing career option which is bound to thrive exponentially in the coming years. Here we curate stories of upGrad learners who took our Digital Marketing program and successfully transitioned into job roles, aligned with their professional aspirations.</strong></p>\n', '<ul>\n	<li><strong>Graduation degree or more</strong></li>\n	<li><strong>Offer valid for all upGrad programs except for NMIMS Global Access, IIT MADRAS, Mumbai University, Chandigarh University &amp; other programs</strong></li>\n	<li><strong>Recording or uploading of this stream is not permitted.</strong></li>\n	<li><strong>The time and date of the show may vary due to internet connectivity issues. In this case, the artist will share the revised date and/or timing at the earliest.</strong></li>\n	<li><strong>There may be interruptions in the stream due to internet connectivity issues.</strong></li>\n</ul>\n', 1),
(12, 1, 'pic320.jpg', 'An Actor`s Voice', '| English, Hindi | 2hrs', 'Acting, Theatre', 199, 'pic112.jpg', '2121-10-28', '2121-10-28', 'Watch On Zoom', '<p><strong>A well-trained voice is not only an effective instrument used by a professional actor but also one of the strongest tools of communication. The foundation of all voice work is relaxation and breathing. This workshop on Voice will teach budding Actors on how to breathe correctly with no</strong></p>\n', '<ul>\n	<li><strong>Age Limit: 15+</strong></li>\n	<li><strong>Internet handling fee per ticket may be levied. Please check your total amount before payment.</strong></li>\n	<li><strong>No prior acting experience required.&nbsp;</strong></li>\n	<li><strong>A laptop, a good set of headphones/earphones and a quiet room to practice.&nbsp;</strong></li>\n	<li><strong>This is a digital session streamed on zoom and the link will be shared via email to the registered email address 24 hours before the scheduled class.</strong></li>\n	<li><strong>You may not be able to attend the live session if you are late.</strong></li>\n	<li><strong>You may face interruptions during the course of the live stream due to internet connectivity issues.</strong></li>\n	<li><strong>No refunds on purchased tickets are possible.</strong></li>\n	<li><strong>The holder of this ticket grants the organiser the right to use, all or any part of the recording of the session for advertising, publicity and promotions. The recording of the session will not be shared even in case of non-attendance.</strong></li>\n	<li><strong>Participants must log in at least 15 min prior to the workshop start time to check the sound and video connections at their end. This is to avoid any inconveniences or delays that could eat into the actual workshop duration.</strong></li>\n</ul>\n', 0),
(13, 1, 'pic385.jpg', 'Money and the Law of Attraction Workshop', ' | English | 16yrs + | 18hrs', 'Online Streaming Events, Workshops', 11, 'pic181.jpg', '2121-10-28', '2121-10-28', 'Watch On Zoom', '<p><strong>A life-defining opportunity to become aware and learn the secrets of the super rich and learn leading-edge techniques to allow all the prosperity you always wanted to flow into your life, opens its doors into your awareness.</strong></p>\n', '<p><strong>***This Workshop is an Advanced program and not open to freshers to the subject of the Law of Attraction.&nbsp;</strong></p>\n\n<p><strong>To be eligible for this workshop one needs to have read/seen &lsquo;The Secret&rsquo; and be aware of the basics of Law of Attraction and a strong desire to master the principles.</strong></p>\n\n<p>&nbsp;</p>\n', 0),
(14, 3, 'pic271.jpg', 'Art & Drawing - Junior Kids - Hobbystation', ' | English, Hindi | 5yrs + | 1h', 'Arts and Crafts', 1200, 'pic472.jpg', '2121-10-28', '2121-10-28', 'Watch on Zoom', '<p><strong><em>Give your child a chance to embrace their artistic side.</em></strong></p>\n\n<p><strong><em>In this course, we teach the child the fundamentals of drawing and colouring like drawing objects of different shapes perfectly, simple memory drawing and landscapes, colouring (using crayons, colour pencils and brush pens)including shading and knowledge of primary and secondary colours. With each class, you will see your child getting more and more confident with his/her drawing and colouring skills.</em></strong></p>\n', '<ul>\n	<li>Age Limit: 5-9 years</li>\n	<li>Tickets once booked cannot be exchanged or refunded.</li>\n	<li>Recording or uploading of this stream is not permitted.</li>\n	<li>The time and date of the show may vary due to internet connectivity issues. In this case, the artist will share the revised date and/or timing at the earliest.</li>\n	<li>There may be interruptions in the stream due to internet connectivity issues.</li>\n</ul>\n', 0),
(18, 3, 'pic249.jpg', 'JUST KIDDING', '| 5hr', 'Kids', 500, 'pic488.jpg', '2121-10-28', '2121-10-28', 'Multiple Venus', '<p><strong>500 is the full cover which can be redeemed against food and beverages.</strong></p>\n\n<p><strong>Imperfecto presents</strong></p>\n', '<p><strong>1. Tickets once booked cannot be exchanged or refunded</strong></p>\n\n<p><strong>2. An Internet handling fee per ticket may be levied. Please check the total amount before payment</strong></p>\n\n<p><strong>3. We recommend that you arrive at-least 30 minutes prior at the venue for a seamless entry&nbsp;</strong></p>\n\n<p><strong>4. It is mandatory to wear masks at all times and follow social distancing norms</strong></p>\n\n<p><strong>5. Please do not purchase tickets if you feel sick</strong></p>\n\n<p><strong>6. Unlawful resale (or attempted unlawful resale) of a ticket would lead to seizure or cancellation of that ticket without refund or other compensation</strong></p>\n\n<p><strong>7. Rights of admission reserved</strong></p>\n\n<p><strong>8. These terms and conditions are subject to change from time to time at the discretion of the organizer</strong></p>\n', 1),
(19, 4, 'pic324.jpg', 'Raghav Meattle Performing Live', '| English | 18yrs + | 1hr 30mins', 'Music Shows ', 499, 'pic150.jpg', '2121-10-28', '2121-10-28', 'Imperfecto Ruin Pub:Delhi', '<p><strong>Raghav Meattle is a singer-songwriter based out of Mumbai, India. His debut album, Songs From A Matchbox is out on all platforms. Raghav Meattle is a singer-songwriter based out of Mumbai, India. His debut album, Songs From A Matchbox is out on all platforms. Catch him performing Live this 29th of October, 2021 at Imperfecto Ruin Pub, Ansal Plaza, New Delhi.</strong></p>\n', '<p><strong>1. Tickets once booked cannot be exchanged or refunded</strong></p>\n\n<p><strong>2. An Internet handling fee per ticket may be levied. Please check the total amount before payment</strong></p>\n\n<p><strong>3. We recommend that you arrive at-least 30 minutes prior at the venue for a seamless entry&nbsp;</strong></p>\n\n<p><strong>4. It is mandatory to wear masks at all times and follow social distancing norms</strong></p>\n\n<p><strong>5. Please do not purchase tickets if you feel sick</strong></p>\n\n<p><strong>6. Unlawful resale (or attempted unlawful resale) of a ticket would lead to seizure or cancellation of that ticket without refund or other compensation</strong></p>\n\n<p><strong>7. Rights of admission reserved</strong></p>\n\n<p><strong>8. These terms and conditions are subject to change from time to time at the discretion of the organizer</strong></p>\n', 0),
(20, 4, 'pic295.jpg', 'Money Aujla @Valhalla Club', '| 3 hrs', 'Music Shows', 1500, 'pic454.jpg', '2121-10-28', '2121-10-28', 'Vallha : Ghaziabad', '<p><strong>Money Aujla Performing Live &amp; Valhalla Club&nbsp;</strong></p>\n\n<p><strong>@Booking Open&nbsp;</strong></p>\n\n<p><strong>@Limited Sheet Available</strong></p>\n', '<p><strong>1. Tickets once booked cannot be exchanged or refunded</strong></p>\n\n<p><strong>2. An Internet handling fee per ticket may be levied. Please check the total amount before payment</strong></p>\n\n<p><strong>3. We recommend that you arrive at-least 30 minutes prior at the venue for a seamless entry&nbsp;</strong></p>\n\n<p><strong>4. It is mandatory to wear masks at all times and follow social distancing norms</strong></p>\n\n<p><strong>5. Please do not purchase tickets if you feel sick</strong></p>\n\n<p><strong>6. Unlawful resale (or attempted unlawful resale) of a ticket would lead to seizure or cancellation of that ticket without refund or other compensation</strong></p>\n\n<p><strong>7. Rights of admission reserved</strong></p>\n\n<p><strong>8. These terms and conditions are subject to change from time to time at the discretion of the organizer</strong></p>\n', 1),
(29, 5, 'pic794.jpg', 'Peerless Hospital Vaccination Program', '| Full day', 'Vaccination', 100, 'pic857.jpg', '2121-10-28', '2121-10-28', 'Peerless Hospital : Kolkata', '<ul>\n	<li><strong>A person needs to register on the COWIN website and take a printout/screenshot of the registration</strong></li>\n	<li><strong>Do not register on BookMyShow unless you have registered on the COWIN website</strong></li>\n	<li><strong>If you directly register on BookMyShow without registering on COWIN the registration stands canceled and the amount will be forfeited</strong></li>\n	<li><strong>After selection of slot and vaccine and payment, BookMyShow will share a QR Code with you on your smartphone.</strong></li>\n	<li><strong>You can bring either a printout of the QR Code or show the QR Code in your smartphone to the gate manager who will scan the same and allow you entry to the vaccination center</strong></li>\n</ul>\n', '<ul>\n	<li><strong>Eligibility: 18+</strong></li>\n	<li><strong>Please come with a self-attested photocopy of your Aadhar Card/Pan Card/or any other ID used for COWIN registration</strong></li>\n	<li><strong>Please write your COWIN Registered mobile number on document copy</strong></li>\n	<li><strong>Please arrive 15 minutes before your designated slot</strong></li>\n	<li><strong>People below 18 years not allowed inside the Vaccination Centre</strong></li>\n	<li><strong>Please don&#39;t bring children to the Vaccination Centre</strong></li>\n	<li><strong>Slot booking is non-transferable</strong></li>\n	<li><strong>A slot once booked and paid for, cannot be transferred or refunded</strong></li>\n</ul>\n', 0),
(30, 5, 'pic411.jpg', 'Medica Group Vaccination Program', '| 18yrs', 'Vaccination', 750, 'pic759.jpg', '2121-10-28', '2121-10-28', 'Multiple Venus', '<p><strong>The process to book the appointment:</strong></p>\n\n<ul>\n	<li><strong>A person needs to register on the COWIN website and take a printout/screenshot of the registration</strong></li>\n	<li><strong>Do not register on BookMyShow unless you have registered on the COWIN website</strong></li>\n	<li><strong>If you directly register on BookMyShow without registering on COWIN the registration stands canceled and the amount will be forfeited</strong></li>\n	<li><strong>After selection of slot and vaccine and payment, BookMyShow will share a QR Code with you on your smartphone.</strong></li>\n	<li><strong>QR Code shall allow you entry to the vaccination center</strong></li>\n</ul>\n', '<ul>\n	<li><strong>Eligibility: 18+</strong></li>\n	<li><strong>Please come with a self-attested photocopy of your Aadhar Card/Pan Card/or any other ID used for CoWIN registration</strong></li>\n	<li><strong>Please write your COWIN Registered mobile number on document copy</strong></li>\n	<li><strong>Please arrive 15 minutes before your designated slot</strong></li>\n	<li><strong>People below 18 years not allowed inside the Vaccination Centre</strong></li>\n</ul>\n', 0),
(31, 5, 'pic922.jpg', 'AMRI Vaccination Drive', '| 18yrs', 'Vaccination', 780, 'pic619.jpg', '2121-10-28', '2121-10-28', 'Accropolis Mall : Kolkata', '<p><strong>The process to book the appointment:</strong></p>\n\n<ul>\n	<li><strong>A person needs to register on the COWIN website and take a printout/screenshot of the registration</strong></li>\n	<li><strong>Do not register on BookMyShow unless you have registered on the COWIN website</strong></li>\n	<li><strong>If you directly register on BookMyShow without registering on COWIN the registration stands canceled and the amount will be forfeited</strong></li>\n	<li><strong>After selection of slot and vaccine and payment, BookMyShow will share a QR Code with you on your smartphone.</strong></li>\n	<li><strong>QR Code shall allow you entry to the vaccination center</strong></li>\n</ul>\n', '<ul>\n	<li><strong>Eligibility: 18+</strong></li>\n	<li><strong>Please come with a self-attested photocopy of your Aadhar Card/Pan Card/or any other ID used for COWIN registration</strong></li>\n	<li><strong>Please write your COWIN Registered mobile number on document copy</strong></li>\n	<li><strong>Please arrive 15 minutes before your designated slot</strong></li>\n	<li><strong>People below 18 years not allowed inside the Vaccination Centre</strong></li>\n	<li><strong>Please don&#39;t bring children to the Vaccination Centre</strong></li>\n	<li><strong>Slot booking is non-transferable</strong></li>\n	<li><strong>A slot once booked done cannot be canceled or refunded</strong></li>\n</ul>\n', 1),
(32, 5, 'pic441.jpg', 'Apollo Clinic', '| 18 yrs+', 'Vaccination', 780, 'pic591.jpg', '2121-10-28', '2121-10-28', 'Multiple Venus', '<p><strong>Apollo Clinic &ndash;SHLPL is one of the largest vaccinators in eastern India having vaccinated close to 1 L beneficiaries. Get the smoothest &amp; fastest vaccination experience and wear your smile with Apollo Assurance &amp; expertise.</strong></p>\n', '<ul>\n	<li><strong>Eligibility: 18+</strong></li>\n	<li><strong>Please come with a self-attested photocopy of your Aadhar Card/Pan Card/or any other ID used for COWIN registration</strong></li>\n	<li><strong>Please write your COWIN Registered mobile number on document copy</strong></li>\n	<li><strong>Please arrive 15 minutes before your designated slot</strong></li>\n	<li><strong>People below 18 years not allowed inside the vaccination centre</strong></li>\n	<li><strong>Please don&#39;t bring children to the vaccination centre</strong></li>\n	<li><strong>Slot booking is non-transferable</strong></li>\n	<li><strong>A slot once booked done cannot be canceled or refunded</strong></li>\n</ul>\n', 0),
(33, 6, 'pic957.jpg', 'The Entertainment Factory', ' Music | English, Hindi | 1hr 499 1999', 'Comic, Magic,', 499, 'pic127.jpg', '2121-10-28', '2121-10-28', 'Multiple Venus', '<p><strong>The Entertainment Factory&nbsp;was established in the year 2017 and since then it has been a fast-growing entertainment enterprise in India which specializes in creating &amp; producing one of India&rsquo;s large format events.</strong></p>\n', '<ul>\n	<li><strong>Age Limit: 15+</strong></li>\n	<li><strong>Tickets once booked cannot be exchanged or refunded.</strong></li>\n	<li><strong>Recording or uploading of this stream is not permitted.</strong></li>\n	<li><strong>The time and date of the show may vary due to internet connectivity issues. In this case, the artist will share the revised date and/or timing at the earliest.</strong></li>\n	<li><strong>There may be interruptions in the stream due to internet connectivity issues.</strong></li>\n</ul>\n', 0),
(35, 6, 'pic838.jpg', 'Karan Singh Magic: Returns', ' | English | 1hr', 'Mentalism', 499, 'pic421.jpg', '2121-10-28', '2121-10-28', 'Shahdhra', '<p><strong>Karan Singh Magic:&nbsp;&nbsp;Returns a one-man mind reading and mentalism show. &nbsp;Described by GQ magazine as a &ldquo;Threat to national security&rdquo; Karan will read your mind and figure out your personal private details. From phone passwords, date of births, ATM pins and things you thought existed only in your head.</strong></p>\n', '<ul>\n	<li><strong>Age limit: 13 years and above.</strong></li>\n	<li><strong>Limited seats only.</strong></li>\n	<li><strong>No entry without masks. Masks are mandatory.</strong></li>\n	<li><strong>Your body temperature will be checked upon arrival, if it is found to be questionable you won&rsquo;t be allowed to enter.</strong></li>\n	<li><strong>You won&rsquo;t be allowed to enter the venue if you are sick. Refrain from buying tickets if you are not feeling okay.</strong></li>\n	<li><strong>You should be marked safe on the Arogya Setu app.</strong></li>\n	<li><strong>Social distancing at the venue is a must. Please be prepared for it.</strong></li>\n	<li><strong>It&rsquo;s a free seated event. First come first serve basis.</strong></li>\n	<li><strong>Please reach the venue 30 &ndash; 45 minutes prior to the show.</strong></li>\n	<li><strong>Meet &amp; greet with the artist is strictly prohibited.</strong></li>\n	<li><strong>Tickets once booked cannot be exchanged or refunded.</strong></li>\n</ul>\n', 0),
(36, 6, 'pic598.jpg', 'Virag Madhumalati Underwater Live Singing Concert', '| Hindi, English | 3hrs', 'Music ', 179, 'pic117.jpg', '2121-10-28', '2121-10-28', 'Ghaziabad', '<p><strong>First time in the world, a Live Underwater Singing Concert shall be attempted by multiple Guinness World Records holder Virag Madhumalati. It&rsquo;s a historical Audio-visual treat.</strong></p>\n', '<ul>\n	<li><strong>Age Limit: Open to all</strong></li>\n	<li><strong>Tickets once booked cannot be exchanged or refunded.</strong></li>\n	<li><strong>Recording or uploading of this stream is not permitted.</strong></li>\n	<li><strong>The time and date of the show may vary due to internet connectivity issues. In this case, the artist will share the revised date and/or timing at the earliest.</strong></li>\n	<li><strong>There may be interruptions in the stream due to internet connectivity issues.</strong></li>\n</ul>\n', 0),
(37, 6, 'pic829.jpg', 'NCPA Upcoming Events', ',Dance', 'Concerts', 300, 'pic282.jpg', '2121-10-28', '2121-10-28', 'Tata Theature:NCPA', '<p><strong>Reopening this October, the&nbsp;National Centre for the Performing Arts&nbsp;brings to you a fine array of performances from Western classical music, jazz, theatre, Indian music and dance. There&#39;s nothing quite like the magic of live performances. Mark your calendar to experience classical concerts, recitals, plays, stand-up shows and more as the stage comes alive again.</strong></p>\n', '<ul>\n	<li><strong>Use of face covers/masks is mandatory at all times.</strong></li>\n	<li><strong>Visitors to observe protocol laid down in terms of social distancing, temperature check and hand sanitisation.</strong></li>\n	<li><strong>Aarogya setu app to be installed on compatible devices and to be kept on throughout the evening.&nbsp;</strong></li>\n	<li><strong>Visitors should have &lsquo;safe status&rsquo; on the Aarogya Setu app or &lsquo;fully vaccinated&rsquo; against covid.</strong></li>\n	<li><strong>Late entry will not be permitted.&nbsp;</strong></li>\n	<li><strong>Tickets once booked cannot be exchanged or refunded.</strong></li>\n	<li><strong>Children below six years including babies in arms will not be admitted.</strong></li>\n	<li><strong>This ticket is issued according to the rules and regulations of the event organiser and the management of the NCPA.</strong></li>\n	<li><strong>Entry on this ticket is valid for one (1) person only.</strong></li>\n	<li><strong>Rights of admission are reserved by the NCPA.</strong></li>\n	<li><strong>Cameras, bottles, cans or tins are not allowed inside the venue. &nbsp;The use of audio or video equipment is strictly prohibited.</strong></li>\n	<li><strong>No food or beverage is permitted in the auditorium.</strong></li>\n	<li><strong>The NCPA does not take responsibility for the loss or theft of any personal belongings or any injury that the ticket holder may incur at the event.</strong></li>\n	<li><strong>The event is subject to change and is also governed by force majeure conditions.</strong></li>\n	<li><strong>The starting time of the event for which the ticket was bought may change without any prior intimation.</strong></li>\n	<li><strong>As per the discretion of the NCPA management, late entry for classical concerts will only be permitted in breaks between movements or pieces as indicated by NCPA ushers.</strong></li>\n	<li><strong>The ticket may be bought from an authorized point of sale.</strong></li>\n	<li><strong>The consumption of alcohol and other banned substances is strictly prohibited.</strong></li>\n	<li><strong>Cell phones must be switched off inside the auditorium once the performance commences.</strong></li>\n	<li><strong>Smoking is strictly prohibited.</strong></li>\n	<li><strong>In case of event cancellation, only the ticket price may be refunded. The service charge or any other charges paid for and included in the ticket sale, such as convenience charge or delivery charge will not be refunded.</strong></li>\n	<li><strong>Parking facilities are available at the owner&rsquo;s own risk.&nbsp;</strong></li>\n	<li><strong>No photography or videography through mobile phone is permitted.</strong></li>\n</ul>\n', 0),
(38, 4, 'pic455.jpg', 'Over The Top: AP Dhillon The Takeover Tour', '| 16yrs +', 'Hip Hop, Punjabi, Rap ', 999, 'pic176.jpg', '2121-10-28', '2121-10-28', 'Ghaziabad', '<p><strong>Join us in going Over the Top as Bookmyshow brings to you our newest unparalleled nightlife experience.</strong></p>\n\n<p><strong>Brace yourself as Brown Munde sensation and global chart-topping Canadian artist - AP Dhillon makes a smashing debut in its first edition and takes over the nightlife scene with his first-ever live tour. The Takeover Tour hits 6 cities this winter, featuring artists including Gurinder Gill, Shinda Kahlon &amp; G Minxr.</strong></p>\n', '<ul>\n	<li><strong>Internet handling fee per ticket may be levied. Please check your total amount before payment.</strong></li>\n	<li><strong>Tickets once booked cannot be exchanged or refunded.</strong></li>\n	<li><strong>We recommend that you arrive at least 20 minutes prior at the venue</strong></li>\n</ul>\n', 0),
(39, 4, 'pic451.jpg', 'Tarannum ft. Shivam Bharadwaj & Shubha', ' | 2hrs', 'Music Shows', 499, 'pic955.jpg', '2121-10-28', '2121-10-28', 'Chatt Gulli Studio : Delhi', '<p><strong>Shivam Bhardwaj&nbsp;is a trained North Indian classical and Dhrupad singer from Delhi. Coming from a family of musicians he started his initial training under his father. He is currently learning under Padmashri Ustad Wasifuddin Dagar who is a Dhrupad exponent. Shivam has also performed in India and abroad and has achieved many scholarships including the Sahitya Kala Parishad scholarship and the Sangeet Natak Academy scholarship. He has also sung for AR Rahman for a movie that is yet to be released. He is currently working with Lucky Ali as a singer and Persian Setar player has recently performed at MTV unacademy unwind.</strong></p>\n', '<p><strong>1. Tickets once booked cannot be exchanged or refunded</strong></p>\n\n<p><strong>2. An Internet handling fee per ticket may be levied. Please check the total amount before payment</strong></p>\n\n<p><strong>3. We recommend that you arrive at-least 30 minutes prior at the venue for a seamless entry&nbsp;</strong></p>\n\n<p><strong>4. It is mandatory to wear masks at all times and follow social distancing norms</strong></p>\n\n<p><strong>5. Please do not purchase tickets if you feel sick</strong></p>\n\n<p><strong>6. Unlawful resale (or attempted unlawful resale) of a ticket would lead to seizure or cancellation of that ticket without refund or other compensation</strong></p>\n\n<p><strong>7. Rights of admission reserved</strong></p>\n\n<p><strong>8. These terms and conditions are subject to change from time to time at the discretion of the organizer</strong></p>\n', 0),
(44, 4, 'pic442.jpg', '', '', '', 0, 'pic430.jpg', '2121-10-30', '2121-10-30', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_event`
--
ALTER TABLE `add_event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_event`
--
ALTER TABLE `add_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

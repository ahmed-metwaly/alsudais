-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2023 at 03:40 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alsudais`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_footer_index` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relate` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `address`, `about`, `about_footer_index`, `photo`, `meta_desc`, `meta_key`, `lang`, `relate`, `created_at`, `updated_at`) VALUES
(1, 'الرياض - الخبر - جدة', 'يوفر مكتبن السديس محاسب قانوني خدمات التدقيق والمراجعة، كما يوفر خدمات الزكاة والضريبة بجميع انواعها، كما يقدم خدمات الإستشارات والفحوص النافية للجهالة وخدمات مسك الدفاتر والحسابات. نسعد بخدمتكم في مقر مكاتبنا في الرياض والخبر وجدة.', 'أي جي ان السديس محاسب قانوني، إن تميزنا من تميز فريق العمل لدينا حيث يضم المكتب كفاءات مؤهلة متنوعة لها خبرات قوية في أهم مكاتب الاستشارات في المملكة وساهم في تنفيذ خدمات استشارية لكبرى الشركات في المملكة. مما يخلق مزيج يساهم في رفع مستوى الخدمات التي يقدمها المكتب. كما أننا نتمتع بعلاقات تعاون مميزة مع المنشآت المهنية المكملة للخدمات التي نقدمها.', '159136710448.png', 'أي جي ان السديس محاسبون قانونيون، نفخر بتدقم افضل الخدمات لكافة عملائنا', 'خبرة أكثر من ثلاثة عشر عاماً في مجال برمجة وتصميم التطبيقات، المتاجر الإلكترونية، وخدمات التسويق الإلكتروني، في المملكة العربية السعودية.', 'ar', 1, '2022-01-27 17:44:51', '2022-01-27 17:44:51'),
(2, 'Al-Riyadh - Al-Khobar - Jeddah', 'We are an independent member in AGN association, a professional association of accounting, Tax and business advisory services firms across 155 locations in the world. AGN-AlSudais CPAs is providing services and solutions to clients through its branches in largest cities in Saudi Arabia, Our services are supervised by certified and qualified team (SOCPA, CPA, CMA, CIA, CFC, CertIFR, IFRS Diploma).\r\nOur clients are local and international clients are working in different business sectors in market. With many services providing by our firm to them (Audit, Tax, Consulting, AUP services including fraud and legal cases)', 'AGN Alsudais CPAs is proud to provide you with excellent services to all of our clients', '159136710448.png', '', '', 'en', 1, '2021-03-22 17:01:26', '2021-03-23 00:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manger` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `lang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relate` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`name`, `id`, `address`, `phone`, `email`, `manger`, `location`, `status`, `lang`, `relate`, `created_at`, `updated_at`) VALUES
('الرياض', 1, 'الرياض المملكة العربية السعودية', '0548779895', 'osamah.alsudais@alsudaiscpa.com', 'أسامه السديس', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7244.966663696087!2d46.688036!3d24.778898!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x206ddf1685cb7440!2z2YXZg9iq2Kgg2KfZhNiz2K_ZitizINmF2K3Yp9iz2Kgg2YLYp9mG2YjZhtmKIEFsc3VkYWlzIGNoYXJ0ZXJlZCBBY2NvdW50YW50!5e0!3m2!1sen!2ssa!4v1591709454744!5m2!1sen!2ssa', 1, 'ar', 1, '2020-06-09 13:31:39', '2020-06-09 11:31:39'),
('Riyadh', 2, 'Riyadh, Saudi Arabia', '0548779895', 'osamah.alsudais@alsudaiscpa.com', 'Osamah Alsudais', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7244.966663696087!2d46.688036!3d24.778898!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x206ddf1685cb7440!2z2YXZg9iq2Kgg2KfZhNiz2K_ZitizINmF2K3Yp9iz2Kgg2YLYp9mG2YjZhtmKIEFsc3VkYWlzIGNoYXJ0ZXJlZCBBY2NvdW50YW50!5e0!3m2!1sen!2ssa!4v1591709454744!5m2!1sen!2ssa', 1, 'en', 1, '2020-06-09 13:31:39', '2020-06-09 11:31:39'),
('الخبر', 3, 'الخبر المملكة العربية السعودية', '0535322404', 'Diya.Alsaeed@alsudaiscpa.com', 'ضياء السعيد', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7153.875374281975!2d50.219821!3d26.296120000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbc9a062556fec5b!2zSkhJINin2YTYs9iv2YrYsyDZhdit2KfYs9io2YjZhiDZgtin2YbZiNmG2YrZiNmGICgg2YXYrdin2LPYqCDZgtin2YbZiNmG2YopIEFsU3VkYWlzIENQQXMgSkhJ!5e0!3m2!1sen!2ssa!4v1591709308155!5m2!1sen!2ssa', 1, 'ar', 3, '2020-06-09 13:29:38', '2020-06-09 11:29:38'),
('Khobar', 4, 'Khobar, KSA', '0535322404', 'Diya.Alsaeed@alsudaiscpa.com', 'Diya Alsaeed', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7153.875374281975!2d50.219821!3d26.296120000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbc9a062556fec5b!2zSkhJINin2YTYs9iv2YrYsyDZhdit2KfYs9io2YjZhiDZgtin2YbZiNmG2YrZiNmGICgg2YXYrdin2LPYqCDZgtin2YbZiNmG2YopIEFsU3VkYWlzIENQQXMgSkhJ!5e0!3m2!1sen!2ssa!4v1591709308155!5m2!1sen!2ssa', 1, 'en', 3, '2020-06-09 13:29:38', '2020-06-09 11:29:38'),
('جدة', 5, 'جدة المملكة العربية السعودية', '0548779895', 'osamah.alsudais@alsudaiscpa.com', 'أسامه السديس', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7420.787049403142!2d39.180877!3d21.570557!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x43c3ed957fd8bfb2!2z2KfZhNiz2K_ZitizINmF2K3Yp9iz2KjZiNmGINmC2KfZhtmI2YbZitmI2YY!5e0!3m2!1sen!2ssa!4v1591709396673!5m2!1sen!2ssa', 1, 'ar', 5, '2020-06-09 13:30:32', '2020-06-09 11:30:32'),
('Jeddah', 6, 'Jeddah, KSA', '0548779895', 'osamah.alsudais@alsudaiscpa.com', 'Osamah Alsudais', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7420.787049403142!2d39.180877!3d21.570557!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x43c3ed957fd8bfb2!2z2KfZhNiz2K_ZitizINmF2K3Yp9iz2KjZiNmGINmC2KfZhtmI2YbZitmI2YY!5e0!3m2!1sen!2ssa!4v1591709396673!5m2!1sen!2ssa', 1, 'en', 5, '2020-06-09 13:30:32', '2020-06-09 11:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `lang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relate` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `text`, `photo`, `status`, `lang`, `relate`, `created_at`, `updated_at`) VALUES
(32, 'ضياء السعيد SOCPA, CPA, CFC, CertIFR, CIA', 'السيد ضياء السعيد خبرته السابقة على مدى 12 عاما كانت في مجال التدقيق والخدمات الاستشارية في الشركات المحلية والأربع الكبرى الدولية (EY) والشركات العشر الكبرى ، إلى جانب الخبرة كمدير مالي لمجموعة الزامل للبلاستيك ومدرب غير متفرغ لتدريب SOCPA.\r\n\r\nوهو أيضا مستشار مالي معتمد ، CFC من الولايات المتحدة الأمريكية و CertIFR  من جمعية المحاسبين القانونيين المعتمدين في المملكة المتحدة ، إلى جانب العديد من دورات التنمية في المملكة العربية السعودية وكندا وهولندا.\r\n\r\nخلال حياته المهنية ، تقدم ضياء السعيد مجموعة واسعة من العملاء في مختلف الصناعات بما في ذلك التصنيع والاستثمار والتجارة والتأمين والمستشفيات والبناء والفنادق ومقدمي خدمات الإنترنت والمنظمات غير الربحية، وكما يمتع بخبرة في القضايا التجارية وقضايا الاختلاس.\r\n\r\nخلال مشغله ، فيما يلي بعض العملاء الذين قدم لهم خدماته:\r\n\r\n“شركة الصناعات الكهربائية” شركة مساهمة- مجموعة الزامل – الغرفة التجارية الشرقية – مجموعة الجبر – مجموعة أميانتيت ” شركة مساهمة ” – مجموعة العوهلي – مجموعة الحكير – شركة أملاك الوطنية – الشركة السعودية للتسويق “فارم” شركة مساهمة – شركة باسل أبو الرب – مجموعة شركات سينوبيك – مجموعة القاضي – مجموعة شركات  الداوء – شركة كيل جين كانغ – شركة كوم أي تي – مجموعة عصام قباني. – الشركة السعودية للورق شركة مساهمة.\r\n\r\nمؤهلات:\r\n\r\nبكالوريوس محاسبة من جامعة العلوم التطبيقة ، الأردن.\r\n\r\nSOCPA\r\n\r\nCPA، License 33610 Colorado USA\r\n\r\nIAP (CIA)', '161659918455.jpg', 1, 'ar', 1, '2021-03-24 15:19:44', '2021-03-24 22:19:44'),
(33, 'Diya Al-Saeed CPA, SOCPA, CFC, CertIFR, IAP CIِA', 'Mr. Diya Alsaeed his earlier experience over 12 years was in audit and advisory services at local firms and international big four (EY) and big ten firms, beside experience as a finance manager for Zamil Plastic group and part-time instructor for SOCPA training.\r\n\r\nHe is also a certified financial consultant, CFC from USA and CertIFR from ACCA in UK, beside many development courses in Saudi Arabia, Canada and Netherlands.\r\n\r\nDuring his career, Diya Al-Saeed offers a wide range of clients in various industries including manufacturing, investment, trade, insurance, hospitals, construction, hotels, internet service providers and non-profit organizations.\r\n\r\nDuring his carrier, The following are some of the clients he provided his services :\r\n\r\nEIC “ STC & WESCOSA” listed entity – Zamil Group – Chamber of Commerce – Al Jabr Group – Amiantit group “ listed entity” – Al Ohali Group – Al Hokair Group – National Amlak – Saudi Marketing Company “Farm” listed entity – Basel Abu Al Rub & Partner Co. – Sinobic – AlQadi Group – Al Dawa Group – Kil Jin Kang Co. – COMM-IT Co.- Issam Qabani Group.\r\n\r\nQualifications:\r\n\r\nBachelor of Accounting from ASU, Jordan.\r\n\r\nSOCPA.\r\n\r\nCPA, License 33610 Colorado USA.\r\n\r\nIAP (CIA).', '161659918455.jpg', 1, 'en', 1, '2021-03-24 15:19:44', '2021-03-24 22:19:44'),
(34, 'أسامة السديس CPA, SOCPA, CMA', 'يتمتع الأستاذ أسامة بالخبرة في مجال العمل في شركات التدقيق والمراجعة والتي بدورها نظرة متكاملة عن افضل الممارسات المحاسبية والمالية المعمول بها, كذلك العمل في الشركات الخاصة وفهم الاجراءات والمعاملات المالية.\r\n\r\n \r\n\r\nالمؤوهلات العلمية:\r\n\r\nبكالريوس محاسبة من جامعة اكاديا في كندا.\r\nماجستير محاسبة ومالية من جامعة ويندزر في كندا.\r\nزميل مجمع المحاسبيين القانونيين السعودي SOCPA\r\n.زميل مجمع المحاسبيين الأمريكي CPA\r\n.زميل مجمع المحاسبيين الإداريين الأمريكي.\r\nالخبرات العملية:\r\n\r\nمحاسب عام, مدار الأفق للإتصالات.\r\nالتدقيق الداخلي لدى كي بي ام جي.\r\nكبير المراجعيين, ارنست ويونغ.\r\nمدير محاسبة, أملاك العالمية.\r\nمدير المراقبة المالية في الشركة السعودية العقارية.', '15913749014.jpg', 1, 'ar', 34, '2020-06-05 14:35:01', '2020-06-05 14:35:01'),
(35, 'Osamah Alsudais, CPA, CMA, SOCPA', 'Osamah has experience in the field of auditing, accounting, and financial reporting. The wide exposure in the various industries through his work at audit and private sector.\r\n\r\nQualifications:\r\n\r\nBachelor of Accounting from Acadia University, Canada.\r\nMaster of Accounting & Finance, University of Windsor, Canada.\r\nCPA.\r\nSOCPA.\r\nCMA.\r\nExperiences:\r\n\r\nAssistant Professor at Acadia University.\r\n\r\nTrainee at the Internal audit Dept, KPMG.\r\nSenior Auditors, Ernst & Young. (EY)\r\nManager of Accounting, Amlak International. (Saudi investment bank Sub.\r\nDirector of Financial Control at Saudi Real Estate Company. (listed traded Company)\r\nAudit Director at PKF Saudi Arabia.', '15913749014.jpg', 1, 'en', 34, '2020-06-05 14:35:01', '2020-06-05 14:35:01'),
(36, 'ياسر العمودي، SOCPA , CMA', 'مدير مالياً ورئيساً تنفيذياً للعديد من الجهات والشركات والتي كانت تشهد نقلات نوعية عند توليه مهام إدارتها\r\nمديراً تنفيذياً لعدة شركات تمتهن خدمة ضيوف الرحمن من خلال تسهيل نسك الحج لأكثر من 20 عاماً\r\nالمساهمة في تنظيم العديد من الجمعيات الخيرية والتعاونية لرفع كفاءة مساهمتها في المجتمع\r\nاهم الشهادات\r\nبكالورويوس محاسبة من جامعة العلوم والتكنولوجيا\r\nحاصل على زمالة الهيئة السعودية للمحاسبين القانونيين SOCPA\r\nحاصل على شهادة المحاسبين الإداريين الكندية CMA\r\nحاصل على شهادة الرقابة الداخلية وفق مفهوم COSO\r\nحاصل على شهادة إعداد الموازنات التقديرية\r\nبالإضافة للعديد من الدورات المهنية المتخصصة والدورات الإدارية العام', '159137499047.jpg', 1, 'ar', 36, '2020-06-05 14:36:30', '2020-06-05 14:36:30'),
(37, 'Yasser Al Amoudi, SOCPA , CMA', 'Mr. Yasser Al Amoudi his earlier experience over 20 years was in as a finance manager for many rebuted industrial and commercial firms.\r\n\r\nHe is also a Certified Public Accountant in Saudi Arabia “SOCPA” & CMA from Canada.\r\n\r\nExperiences:\r\n\r\nFinancial Manager for several industrial and commercial establishments.\r\n\r\nHe organized non-profit enterprises.\r\n\r\nExecutive Director of several companies.\r\n\r\nQualifications:\r\n\r\nBachelor of Accounting from UST , Yemen.\r\n\r\nSOCPA.\r\n\r\nCMA.', '159137499047.jpg', 1, 'en', 36, '2020-06-05 14:36:30', '2020-06-05 14:36:30'),
(38, 'مصطفى حناوي', 'يتمتع السيد مصطفى بخبرة ضمن أكبر 10 شركات محاسبة في مجال التدقيق والمحاسبة والتقارير المالية. له خبرة واسعة في مختلف الصناعات من خلال عمله في التدقيق في القطاع الخاص.\r\n\r\n \r\n\r\nمؤهلات:\r\n\r\nبكالوريوس محاسبة من جامعة عين شمس ، مصر\r\n\r\nعضو سجل المحاسبون القانونيون المصري\r\n\r\nدبلومة المعايير الدولية لإعداد التقارير المالية (((IFRS)\r\n\r\nدورة في شهادة CPA\r\n\r\nالخبرة المهنية:\r\n\r\nخلال حياته المهنية ، قام بمراجعة مجموعة واسعة من العملاء في مختلف الصناعات بما في ذلك التصنيع ، الاستثمار ، التجارة ، المستشفيات ، البناء ، الفنادق. ولديه خبرة جيدة مع الشركات المدرجة.', '159137511195.jpg', 1, 'ar', 38, '2020-06-05 14:38:31', '2020-06-05 14:38:31'),
(39, 'Mostafa Hinnawi, IFRS DIP', 'Mr. Mostafa has experience with big 10 accounting firms in the field of auditing, accounting, and financial reporting. The wide exposure in the various industries through his work at audit and private sector.\r\n\r\nDuring his career, Mostafa offers a wide range of clients in various industries including manufacturing, investment, trade, hospitals, construction, hotels. And he has long experience with listed companies.\r\n\r\nQualifications:\r\n\r\nBachelor of Accounting from Ain Shams University, Egypt.\r\n\r\nMember of the Register of Egyptian Accountants and Auditors\r\n\r\nIFRS Diploma from ACCA UK.\r\n\r\nCPA in Progress.', '159137511195.jpg', 1, 'en', 38, '2020-06-05 14:38:31', '2020-06-05 14:38:31'),
(40, 'عمر العامودي', 'يتمتع السيد عمر بخبرة ضمن شركات المحاسبة في مجال التدقيق والمحاسبة والتقارير المالية. له خبرة واسعة في الفحص النافي للجهالة والإجراءات المتفق عليها\r\n\r\n \r\n\r\nمؤهلات:\r\n\r\nبكالوريوس محاسبة من جامعة الملك فيصل، المملكة العربية السعودية\r\n\r\nدبلوم تمهيدي من جامعة برايتون، بريطانيا\r\n\r\n \r\n\r\nالخبره المهنية:\r\n\r\nخلال حياته المهنية ، قام بمراجعة مجموعة واسعة من منظمات الأعمال الصغيرة والكبيرة في مختلف الصناعات بما في ذلك التصنيع ، التجارة ، المستشفيات ، البناء ، الفنادق.', '159137519727.jpg', 1, 'ar', 40, '2020-06-05 14:39:57', '2020-06-05 14:39:57'),
(41, 'Omar Ahmed AL Amoudi', 'Mr. Omar has experience in accounting firms in the field of auditing, accounting and financial reporting. He has extensive experience in due-diligence and agreed upon procedures\r\n\r\nQualifications:\r\n\r\nBachelor of Accounting from Faisal University, Saudi Arabia.\r\n\r\nPremaster from University of Brighton, Britain\r\n\r\nExperience:\r\n\r\nDuring his career, he reviewed a wide range of small and large business organizations in various industries including manufacturing, commerce, hospitals, construction, hotels.', '159137519727.jpg', 1, 'en', 40, '2020-06-05 14:39:57', '2020-06-05 14:39:57'),
(44, 'إبراهيم سلامة', 'يتمتع الأستاذ إبراهيم سلامه على بالخبرة في مجال العمل في شركات التدقيق والمراجعة والتي بدورها نظرة متكاملة عن افضل الممارسات المحاسبية والمالية المعمول بها, كذلك العمل في الشركات الخاصة وفهم الاجراءات والمعاملات المالية.\r\n\r\n \r\n\r\nالخبرات العملية:\r\n\r\nنائب مدير المراجعة سابقا, KPMG.\r\nخلال عمله، تعرض إبراهيم سلامه لمجموعة واسعة من العملاء في مختلف الصناعات بما في ذلك البنوك و صناديق الاستثمار و التأمين و التصنيع والاستثمار والتجارة والمستشفيات والبناء والفنادق وقطاع المقاولات.\r\nالمؤهلات العلمية:\r\n\r\nبكالوريوس محاسبة من جامعة القاهرة بمصر.\r\nعضو سجل المحاسبين والمراجعين المصريين محاسب قانوني.\r\nعضو مجمع المحاسبيين و المراجعين الأمريكي CPA.', '159137541437.jpg', 1, 'ar', 44, '2020-06-05 14:43:34', '2020-06-05 14:43:34'),
(45, 'Ibrahim Salama', 'Mr. Ibrahim Salama Ali has experience in the field of accounting and auditing companies. During his work, he gained a valuable expeince which enrich our clients practices and procedures.\r\n\r\nPractical experiences:\r\n\r\nFormer Deputy Audit Manager, KPMG.\r\n\r\nDuring his career, Ibrahim Salama has been exposed to a wide range of clients in various industries including banks, investment funds, insurance, manufacturing, investment, trade, hospitals, construction, hotels and the construction sector.\r\n\r\nQualifications:\r\n\r\nBachelor of Accounting from Cairo University, Egypt.\r\n\r\nMember of the Register of Egyptian Accountants and Auditors.\r\n\r\nMember of the CPA.', '159137541437.jpg', 1, 'en', 44, '2020-06-05 14:43:34', '2020-06-05 14:43:34'),
(48, 'يوسف الهديان', 'يعمل يوسف كمراجع رئيسي في السديس محاسبون قانونيون  ولديه خبرة نوعية في أعمال المراجعة حيث عمل سابقًا كمدقق في العديد من شركات التدقيق في المملكة العربية السعودية، وهو حاصل على شهادة البكالوريوس في المحاسبة ويحضر حاليا لاختبارات زمالة الهيئة السعودية للمحاسبين القانونيين.', '164387387722.jpg', 1, 'ar', 46, '2022-02-03 07:37:57', '2022-02-03 07:37:57'),
(49, 'Youssef Alhedayan', 'Youssef is working as Senior Auditor in AGN Alsudais Certified Public Accountants and Consultants, he has strong experience in auditing work, where he previously worked as an auditor In several auditing companies in Saudi Arabia. Fahad is preparing for SOCPA certificate and he has a bachelor\'s degree of accounting.', '164387387722.jpg', 1, 'en', 46, '2022-02-03 07:37:57', '2022-02-03 07:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_23_220930_create_abouts_table', 1),
(4, '2019_03_23_220938_create_clients_table', 1),
(5, '2019_03_23_220946_create_offers_table', 1),
(6, '2019_03_23_220953_create_project_images_table', 1),
(7, '2019_03_23_221001_create_projects_table', 1),
(8, '2019_03_23_221010_create_services_table', 1),
(9, '2019_03_23_221017_create_settings_table', 1),
(10, '2019_03_23_221031_create_sliders_table', 1),
(11, '2019_03_23_221038_create_work_mechanisms_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `lang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relate` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_copyrigte` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_robots` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_dc_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `text`, `status`, `lang`, `relate`, `photo`, `meta_copyrigte`, `meta_desc`, `meta_key`, `meta_robots`, `meta_dc_title`, `created_at`, `updated_at`) VALUES
(2, 'خدمات ضريبة القيمة المضافة', 'يقدم مكتب السديس محاسب قانوني العديد من الخدمات في ضريبة القيمة المضافة، والتي تشمل:\r\n\r\n- التمثل الضريبي\r\n- تطبيق ضريبة القيمة المضافة للمنشاءات.\r\n- المساعدة في اعداد الإقرارات الشهرية او الربع سنوية\r\n\r\nكما نقوم بتقديم وإعداد الإقرارات والاعتراضات الزكوية والضريبة ومتابعة المعاملات لدى الهيئة العامة للزكاة والدخل بما يتوافق مع الأنظمة ويحقق متطلبات العملاء، ويحوي المكتب مجموعة من الخبراء في مجال الزكاة والضريبة لتقديم الاستشارات حول كل ما يتعلق بذلك.', 1, 'ar', 2, '159137251980.jpg', 'يقدم مكتب السديس محاسب قانوني العديد من الخدمات في ضريبة القيمة المضافة، والتي تشمل:\r\n\r\nالتمثل الضريبي\r\nتطبيق ضريبة القيمة المضافة للمنشاءات.\r\nالمساعدة في اعداد الإقرارات الشهرية او الربع سنوية\r\n\r\nكما نقوم بتقديم وإعداد الإقرارات والاعتراضات الزكوية والضريبة ومتابعة المعاملات لدى الهيئة العامة للزكاة والدخل بما يتوافق مع الأنظمة ويحقق متطلبات العملاء، ويحوي المكتب مجموعة من الخبراء في مجال الزكاة والضريبة لتقديم الاستشارات حول كل ما يتعلق بذلك.', 'يقدم مكتب السديس محاسب قانوني العديد من الخدمات في ضريبة القيمة المضافة، والتي تشمل:\r\n\r\nالتمثل الضريبي\r\nتطبيق ضريبة القيمة المضافة للمنشاءات.\r\nالمساعدة في اعداد الإقرارات الشهرية او الربع سنوية\r\n\r\nكما نقوم بتقديم وإعداد الإقرارات والاعتراضات الزكوية والضريبة ومتابعة المعاملات لدى الهيئة العامة للزكاة والدخل بما يتوافق مع الأنظمة ويحقق متطلبات العملاء، ويحوي المكتب مجموعة من الخبراء في مجال الزكاة والضريبة لتقديم الاستشارات حول كل ما يتعلق بذلك.', 'يقدم مكتب السديس محاسب قانوني العديد من الخدمات في ضريبة القيمة المضافة، والتي تشمل:\r\n\r\nالتمثل الضريبي\r\nتطبيق ضريبة القيمة المضافة للمنشاءات.\r\nالمساعدة في اعداد الإقرارات الشهرية او الربع سنوية\r\n\r\nكما نقوم بتقديم وإعداد الإقرارات والاعتراضات الزكوية والضريبة ومتابعة المعاملات لدى الهيئة العامة للزكاة والدخل بما يتوافق مع الأنظمة ويحقق متطلبات العملاء، ويحوي المكتب مجموعة من الخبراء في مجال الزكاة والضريبة لتقديم الاستشارات حول كل ما يتعلق بذلك.', 'يقدم مكتب السديس محاسب قانوني العديد من الخدمات في ضريبة القيمة المضافة، والتي تشمل:\r\n\r\nالتمثل الضريبي\r\nتطبيق ضريبة القيمة المضافة للمنشاءات.\r\nالمساعدة في اعداد الإقرارات الشهرية او الربع سنوية\r\n\r\nكما نقوم بتقديم وإعداد الإقرارات والاعتراضات الزكوية والضريبة ومتابعة المعاملات لدى الهيئة العامة للزكاة والدخل بما يتوافق مع الأنظمة ويحقق متطلبات العملاء، ويحوي المكتب مجموعة من الخبراء في مجال الزكاة والضريبة لتقديم الاستشارات حول كل ما يتعلق بذلك.', 'يقدم مكتب السديس محاسب قانوني العديد من الخدمات في ضريبة القيمة المضافة، والتي تشمل:\r\n\r\nالتمثل الضريبي\r\nتطبيق ضريبة القيمة المضافة للمنشاءات.\r\nالمساعدة في اعداد الإقرارات الشهرية او الربع سنوية\r\n\r\nكما نقوم بتقديم وإعداد الإقرارات والاعتراضات الزكوية والضريبة ومتابعة المعاملات لدى الهيئة العامة للزكاة والدخل بما يتوافق مع الأنظمة ويحقق متطلبات العملاء، ويحوي المكتب مجموعة من الخبراء في مجال الزكاة والضريبة لتقديم الاستشارات حول كل ما يتعلق بذلك.', '2022-01-27 17:48:29', '2022-01-27 17:48:29'),
(3, 'VAT Services', 'AGN Alsudais chartered accountants provides:\r\nVAT services Include the following :\r\nVAT implementation -\r\nVAT return assistance -\r\nVAT representative -', 1, 'en', 2, '159137251980.jpg', 'AGN Alsudais chartered accountants provides:\r\nVAT services Include the following :\r\nVAT implementation -\r\nVAT return assistance -\r\nVAT representative -', 'AGN Alsudais chartered accountants provides:\r\nVAT services Include the following :\r\nVAT implementation -\r\nVAT return assistance -\r\nVAT representative -', 'AGN Alsudais chartered accountants provides:\r\nVAT services Include the following :\r\nVAT implementation -\r\nVAT return assistance -\r\nVAT representative -', 'AGN Alsudais chartered accountants provides:\r\nVAT services Include the following :\r\nVAT implementation -\r\nVAT return assistance -\r\nVAT representative -', 'AGN Alsudais chartered accountants provides:\r\nVAT services Include the following :\r\nVAT implementation -\r\nVAT return assistance -\r\nVAT representative -', '2022-02-03 07:33:04', '2022-02-03 07:33:04'),
(6, 'التدقيق الداخلي', 'يقدم مكتب السديس محاسب قانوني خدمات التدقيق والتي يتم تعريفها على انه التدقيق الداخلي هو نشاط مستقل، موضوعي، يضمن الجودة، يهدف لتأدية خدمات التوكيد والانشطة الاستشارية المختلفة وجد لتحسين وإضافة قيمة للعمليات في المؤسسة. وهو يساعد المؤسسة في تحقيق اهدافها من خلال تطبيق اساليب الية ومنضبطة من اجل تطوير وتقييم فعالية انشطة إدارة المخاطر والضوابط والحاكمية المؤسسية.\r\n\r\nو يشمل نطاق التدقيق الداخلي فحص وتقييم مدى كفاية وفعالية أنظمة الرقابة الداخلية بالمنظمة وجودة الأداء عند تادية الأنشطة المختلفة.', 1, 'ar', 4, '159137304149.jpg', 'يقدم مكتب السديس محاسب قانوني خدمات التدقيق والتي يتم تعريفها على انه التدقيق الداخلي هو نشاط مستقل، موضوعي، يضمن الجودة، يهدف لتأدية خدمات التوكيد والانشطة الاستشارية المختلفة وجد لتحسين وإضافة قيمة للعمليات في المؤسسة. وهو يساعد المؤسسة في تحقيق اهدافها من خلال تطبيق اساليب الية ومنضبطة من اجل تطوير وتقييم فعالية انشطة إدارة المخاطر والضوابط والحاكمية المؤسسية.\r\n\r\nو يشمل نطاق التدقيق الداخلي فحص وتقييم مدى كفاية وفعالية أنظمة الرقابة الداخلية بالمنظمة وجودة الأداء عند تادية الأنشطة المختلفة.', 'يقدم مكتب السديس محاسب قانوني خدمات التدقيق والتي يتم تعريفها على انه التدقيق الداخلي هو نشاط مستقل، موضوعي، يضمن الجودة، يهدف لتأدية خدمات التوكيد والانشطة الاستشارية المختلفة وجد لتحسين وإضافة قيمة للعمليات في المؤسسة. وهو يساعد المؤسسة في تحقيق اهدافها من خلال تطبيق اساليب الية ومنضبطة من اجل تطوير وتقييم فعالية انشطة إدارة المخاطر والضوابط والحاكمية المؤسسية.\r\n\r\nو يشمل نطاق التدقيق الداخلي فحص وتقييم مدى كفاية وفعالية أنظمة الرقابة الداخلية بالمنظمة وجودة الأداء عند تادية الأنشطة المختلفة.', 'يقدم مكتب السديس محاسب قانوني خدمات التدقيق والتي يتم تعريفها على انه التدقيق الداخلي هو نشاط مستقل، موضوعي، يضمن الجودة، يهدف لتأدية خدمات التوكيد والانشطة الاستشارية المختلفة وجد لتحسين وإضافة قيمة للعمليات في المؤسسة. وهو يساعد المؤسسة في تحقيق اهدافها من خلال تطبيق اساليب الية ومنضبطة من اجل تطوير وتقييم فعالية انشطة إدارة المخاطر والضوابط والحاكمية المؤسسية.\r\n\r\nو يشمل نطاق التدقيق الداخلي فحص وتقييم مدى كفاية وفعالية أنظمة الرقابة الداخلية بالمنظمة وجودة الأداء عند تادية الأنشطة المختلفة.', 'يقدم مكتب السديس محاسب قانوني خدمات التدقيق والتي يتم تعريفها على انه التدقيق الداخلي هو نشاط مستقل، موضوعي، يضمن الجودة، يهدف لتأدية خدمات التوكيد والانشطة الاستشارية المختلفة وجد لتحسين وإضافة قيمة للعمليات في المؤسسة. وهو يساعد المؤسسة في تحقيق اهدافها من خلال تطبيق اساليب الية ومنضبطة من اجل تطوير وتقييم فعالية انشطة إدارة المخاطر والضوابط والحاكمية المؤسسية.\r\n\r\nو يشمل نطاق التدقيق الداخلي فحص وتقييم مدى كفاية وفعالية أنظمة الرقابة الداخلية بالمنظمة وجودة الأداء عند تادية الأنشطة المختلفة.', 'يقدم مكتب السديس محاسب قانوني خدمات التدقيق والتي يتم تعريفها على انه التدقيق الداخلي هو نشاط مستقل، موضوعي، يضمن الجودة، يهدف لتأدية خدمات التوكيد والانشطة الاستشارية المختلفة وجد لتحسين وإضافة قيمة للعمليات في المؤسسة. وهو يساعد المؤسسة في تحقيق اهدافها من خلال تطبيق اساليب الية ومنضبطة من اجل تطوير وتقييم فعالية انشطة إدارة المخاطر والضوابط والحاكمية المؤسسية.\r\n\r\nو يشمل نطاق التدقيق الداخلي فحص وتقييم مدى كفاية وفعالية أنظمة الرقابة الداخلية بالمنظمة وجودة الأداء عند تادية الأنشطة المختلفة.', '2022-01-27 17:49:59', '2022-01-27 17:49:59'),
(7, 'internal audit', 'AGN Alsudais chartered accoutants certified firm of experienced Chartered Accountants, auditors and specialist service teams offering a wide range of services including Auditing, Accounting, Feasibility studies and Management and Software Consultancy services tailored to client’s needs.  We are a firm of qualified auditors, accountants, and business advisers. We follow International Accounting Standards/ International Financial Reporting Standards and committed to keeping highest levels of professional standards and quality.\r\n\r\nWe provide Internal Audit services in the most effective manner i.e. maximum value with minimal cost. Internal Audit function has assumed a leading role as a risk management tool for organizations worldwide. There has been a shift from the traditional transaction-based and cost driven internal audit model to a more pro-active and risk-based function fully aligned with the organization’s business objectives\r\n\r\nOur specialized team of professionals carries out the in-depth review of accounting systems, internal controls, and checks as well as the adequacy of monthly information systems with a view to offering valuable recommendations for improving and strengthening the existing ones. We also carry out constructive internal and management audits of all or specific functions as desired by the clients.\r\n\r\nWhether your business is just starting up or is on the verge of becoming a global business, our knowledge and experience can help you plan and sustain your company’s growth with our wide array of services and solutions.\r\n\r\nChoosing the best strategy and structure for your business has many implications for successful corporate planning. Our experience is not only across diverse industry sectors but also from ‘start up’ to ‘mergers’.\r\n\r\nTo ensure a more effective and efficient way of operating, a business must ensure the accuracy of its Internal Audit services, so that financial and corporate risks are managed. AGN Alsudais Chartered Accountants can provide professional assistance with internal auditing in the following areas', 1, 'en', 4, '159137304149.jpg', 'AGN Alsudais chartered accoutants certified firm of experienced Chartered Accountants, auditors and specialist service teams offering a wide range of services including Auditing, Accounting, Feasibility studies and Management and Software Consultancy services tailored to client’s needs.  We are a firm of qualified auditors, accountants, and business advisers. We follow International Accounting Standards/ International Financial Reporting Standards and committed to keeping highest levels of professional standards and quality.\r\n\r\nWe provide Internal Audit services in the most effective manner i.e. maximum value with minimal cost. Internal Audit function has assumed a leading role as a risk management tool for organizations worldwide. There has been a shift from the traditional transaction-based and cost driven internal audit model to a more pro-active and risk-based function fully aligned with the organization’s business objectives\r\n\r\nOur specialized team of professionals carries out the in-depth review of accounting systems, internal controls, and checks as well as the adequacy of monthly information systems with a view to offering valuable recommendations for improving and strengthening the existing ones. We also carry out constructive internal and management audits of all or specific functions as desired by the clients.\r\n\r\nWhether your business is just starting up or is on the verge of becoming a global business, our knowledge and experience can help you plan and sustain your company’s growth with our wide array of services and solutions.\r\n\r\nChoosing the best strategy and structure for your business has many implications for successful corporate planning. Our experience is not only across diverse industry sectors but also from ‘start up’ to ‘mergers’.\r\n\r\nTo ensure a more effective and efficient way of operating, a business must ensure the accuracy of its Internal Audit services, so that financial and corporate risks are managed. AGN Alsudais Chartered Accountants can provide professional assistance with internal auditing in the following areas', 'AGN Alsudais chartered accoutants certified firm of experienced Chartered Accountants, auditors and specialist service teams offering a wide range of services including Auditing, Accounting, Feasibility studies and Management and Software Consultancy services tailored to client’s needs.  We are a firm of qualified auditors, accountants, and business advisers. We follow International Accounting Standards/ International Financial Reporting Standards and committed to keeping highest levels of professional standards and quality.\r\n\r\nWe provide Internal Audit services in the most effective manner i.e. maximum value with minimal cost. Internal Audit function has assumed a leading role as a risk management tool for organizations worldwide. There has been a shift from the traditional transaction-based and cost driven internal audit model to a more pro-active and risk-based function fully aligned with the organization’s business objectives\r\n\r\nOur specialized team of professionals carries out the in-depth review of accounting systems, internal controls, and checks as well as the adequacy of monthly information systems with a view to offering valuable recommendations for improving and strengthening the existing ones. We also carry out constructive internal and management audits of all or specific functions as desired by the clients.\r\n\r\nWhether your business is just starting up or is on the verge of becoming a global business, our knowledge and experience can help you plan and sustain your company’s growth with our wide array of services and solutions.\r\n\r\nChoosing the best strategy and structure for your business has many implications for successful corporate planning. Our experience is not only across diverse industry sectors but also from ‘start up’ to ‘mergers’.\r\n\r\nTo ensure a more effective and efficient way of operating, a business must ensure the accuracy of its Internal Audit services, so that financial and corporate risks are managed. AGN Alsudais Chartered Accountants can provide professional assistance with internal auditing in the following areas', 'AGN Alsudais chartered accoutants certified firm of experienced Chartered Accountants, auditors and specialist service teams offering a wide range of services including Auditing, Accounting, Feasibility studies and Management and Software Consultancy services tailored to client’s needs.  We are a firm of qualified auditors, accountants, and business advisers. We follow International Accounting Standards/ International Financial Reporting Standards and committed to keeping highest levels of professional standards and quality.\r\n\r\nWe provide Internal Audit services in the most effective manner i.e. maximum value with minimal cost. Internal Audit function has assumed a leading role as a risk management tool for organizations worldwide. There has been a shift from the traditional transaction-based and cost driven internal audit model to a more pro-active and risk-based function fully aligned with the organization’s business objectives\r\n\r\nOur specialized team of professionals carries out the in-depth review of accounting systems, internal controls, and checks as well as the adequacy of monthly information systems with a view to offering valuable recommendations for improving and strengthening the existing ones. We also carry out constructive internal and management audits of all or specific functions as desired by the clients.\r\n\r\nWhether your business is just starting up or is on the verge of becoming a global business, our knowledge and experience can help you plan and sustain your company’s growth with our wide array of services and solutions.\r\n\r\nChoosing the best strategy and structure for your business has many implications for successful corporate planning. Our experience is not only across diverse industry sectors but also from ‘start up’ to ‘mergers’.\r\n\r\nTo ensure a more effective and efficient way of operating, a business must ensure the accuracy of its Internal Audit services, so that financial and corporate risks are managed. AGN Alsudais Chartered Accountants can provide professional assistance with internal auditing in the following areas', 'AGN Alsudais chartered accoutants certified firm of experienced Chartered Accountants, auditors and specialist service teams offering a wide range of services including Auditing, Accounting, Feasibility studies and Management and Software Consultancy services tailored to client’s needs.  We are a firm of qualified auditors, accountants, and business advisers. We follow International Accounting Standards/ International Financial Reporting Standards and committed to keeping highest levels of professional standards and quality.\r\n\r\nWe provide Internal Audit services in the most effective manner i.e. maximum value with minimal cost. Internal Audit function has assumed a leading role as a risk management tool for organizations worldwide. There has been a shift from the traditional transaction-based and cost driven internal audit model to a more pro-active and risk-based function fully aligned with the organization’s business objectives\r\n\r\nOur specialized team of professionals carries out the in-depth review of accounting systems, internal controls, and checks as well as the adequacy of monthly information systems with a view to offering valuable recommendations for improving and strengthening the existing ones. We also carry out constructive internal and management audits of all or specific functions as desired by the clients.\r\n\r\nWhether your business is just starting up or is on the verge of becoming a global business, our knowledge and experience can help you plan and sustain your company’s growth with our wide array of services and solutions.\r\n\r\nChoosing the best strategy and structure for your business has many implications for successful corporate planning. Our experience is not only across diverse industry sectors but also from ‘start up’ to ‘mergers’.\r\n\r\nTo ensure a more effective and efficient way of operating, a business must ensure the accuracy of its Internal Audit services, so that financial and corporate risks are managed. AGN Alsudais Chartered Accountants can provide professional assistance with internal auditing in the following areas', 'AGN Alsudais chartered accoutants certified firm of experienced Chartered Accountants, auditors and specialist service teams offering a wide range of services including Auditing, Accounting, Feasibility studies and Management and Software Consultancy services tailored to client’s needs.  We are a firm of qualified auditors, accountants, and business advisers. We follow International Accounting Standards/ International Financial Reporting Standards and committed to keeping highest levels of professional standards and quality.\r\n\r\nWe provide Internal Audit services in the most effective manner i.e. maximum value with minimal cost. Internal Audit function has assumed a leading role as a risk management tool for organizations worldwide. There has been a shift from the traditional transaction-based and cost driven internal audit model to a more pro-active and risk-based function fully aligned with the organization’s business objectives\r\n\r\nOur specialized team of professionals carries out the in-depth review of accounting systems, internal controls, and checks as well as the adequacy of monthly information systems with a view to offering valuable recommendations for improving and strengthening the existing ones. We also carry out constructive internal and management audits of all or specific functions as desired by the clients.\r\n\r\nWhether your business is just starting up or is on the verge of becoming a global business, our knowledge and experience can help you plan and sustain your company’s growth with our wide array of services and solutions.\r\n\r\nChoosing the best strategy and structure for your business has many implications for successful corporate planning. Our experience is not only across diverse industry sectors but also from ‘start up’ to ‘mergers’.\r\n\r\nTo ensure a more effective and efficient way of operating, a business must ensure the accuracy of its Internal Audit services, so that financial and corporate risks are managed, AGN Alsudais Associates Chartered Accountants can provide professional assistance with internal auditing in the following areas', '2022-02-03 07:28:34', '2022-02-03 07:28:34'),
(8, 'تدقيق القوائم المالية', 'يقدم مكتب السديس محاسب قانوني خدمات تدقيق القوائم الماليه لكافه الشركات والمؤسسات، والذي بدروة يهدف الى التحقق من صحة البيانات المالية وفقاً لمعايير المحاسبة الدولية والتأكد من صحتها وعدالتها ،\r\nتستمد مهنة التدقيق أهميتها من حاجة الإنسان للتحقق من صحة البيانات المحاسبية التي يعتمد عليها في اتخاذ القرارات ورسم السياسات.', 1, 'ar', 8, '159137316234.jpg', 'يقدم مكتب السديس محاسب قانوني خدمات تدقيق القوائم الماليه لكافه الشركات والمؤسسات، والذي بدروة يهدف الى التحقق من صحة البيانات المالية وفقاً لمعايير المحاسبة الدولية والتأكد من صحتها وعدالتها ،\r\nتستمد مهنة التدقيق أهميتها من حاجة الإنسان للتحقق من صحة البيانات المحاسبية التي يعتمد عليها في اتخاذ القرارات ورسم السياسات.', 'يقدم مكتب السديس محاسب قانوني خدمات تدقيق القوائم الماليه لكافه الشركات والمؤسسات، والذي بدروة يهدف الى التحقق من صحة البيانات المالية وفقاً لمعايير المحاسبة الدولية والتأكد من صحتها وعدالتها ،\r\nتستمد مهنة التدقيق أهميتها من حاجة الإنسان للتحقق من صحة البيانات المحاسبية التي يعتمد عليها في اتخاذ القرارات ورسم السياسات.', 'يقدم مكتب السديس محاسب قانوني خدمات تدقيق القوائم الماليه لكافه الشركات والمؤسسات، والذي بدروة يهدف الى التحقق من صحة البيانات المالية وفقاً لمعايير المحاسبة الدولية والتأكد من صحتها وعدالتها ،\r\nتستمد مهنة التدقيق أهميتها من حاجة الإنسان للتحقق من صحة البيانات المحاسبية التي يعتمد عليها في اتخاذ القرارات ورسم السياسات.', 'يقدم مكتب السديس محاسب قانوني خدمات تدقيق القوائم الماليه لكافه الشركات والمؤسسات، والذي بدروة يهدف الى التحقق من صحة البيانات المالية وفقاً لمعايير المحاسبة الدولية والتأكد من صحتها وعدالتها ،\r\nتستمد مهنة التدقيق أهميتها من حاجة الإنسان للتحقق من صحة البيانات المحاسبية التي يعتمد عليها في اتخاذ القرارات ورسم السياسات.', 'يقدم مكتب السديس محاسب قانوني خدمات تدقيق القوائم الماليه لكافه الشركات والمؤسسات، والذي بدروة يهدف الى التحقق من صحة البيانات المالية وفقاً لمعايير المحاسبة الدولية والتأكد من صحتها وعدالتها ،\r\nتستمد مهنة التدقيق أهميتها من حاجة الإنسان للتحقق من صحة البيانات المحاسبية التي يعتمد عليها في اتخاذ القرارات ورسم السياسات.', '2022-01-27 17:52:14', '2022-01-27 17:52:14'),
(9, 'Audit & Review of financial statements', 'AGN Alsudais  Chartered Accountants We perform audit of accounts that meet the requirements of international standards and local regulations. Our aim is to provide a report that is transparent and meaningful for the share holders, banks and other public internationally. We follow International Accounting Standard as adopted by International Financial Reporting Standard for the content, presentation of financial report.', 1, 'en', 8, '159137316234.jpg', 'AGN Alsudais  Chartered Accountants We perform audit of accounts that meet the requirements of international standards and local regulations. Our aim is to provide a report that is transparent and meaningful for the share holders, banks and other public internationally. We follow International Accounting Standard as adopted by International Financial Reporting Standard for the content, presentation of financial report.', 'AGN Alsudais  Chartered Accountants We perform audit of accounts that meet the requirements of international standards and local regulations. Our aim is to provide a report that is transparent and meaningful for the share holders, banks and other public internationally. We follow International Accounting Standard as adopted by International Financial Reporting Standard for the content, presentation of financial report.', 'AGN Alsudais  Chartered Accountants We perform audit of accounts that meet the requirements of international standards and local regulations. Our aim is to provide a report that is transparent and meaningful for the share holders, banks and other public internationally. We follow International Accounting Standard as adopted by International Financial Reporting Standard for the content, presentation of financial report.', 'AGN Alsudais  Chartered Accountants We perform audit of accounts that meet the requirements of international standards and local regulations. Our aim is to provide a report that is transparent and meaningful for the share holders, banks and other public internationally. We follow International Accounting Standard as adopted by International Financial Reporting Standard for the content, presentation of financial report.', 'AGN Alsudais  Chartered Accountants We perform audit of accounts that meet the requirements of international standards and local regulations. Our aim is to provide a report that is transparent and meaningful for the share holders, banks and other public internationally. We follow International Accounting Standard as adopted by International Financial Reporting Standard for the content, presentation of financial report.', '2022-02-03 07:30:04', '2022-02-03 07:30:04'),
(10, 'الزكاة والضريبة', 'يقدم مكتب السديس محاسب قانوني العديد من الخدمات في الزكاة وضريبة الدخل، والتي تشمل:\r\n\r\n- التمثل الضريبي والزكاة\r\n- تطبيق احتساب الزكاة للشركات والمؤسساات للمنشاءات.\r\n- المساعدة في اعداد الإقرارات السنويه للزكاة وضريبة الدخل\r\n\r\nكما نقوم بتقديم وإعداد الإقرارات والاعتراضات الزكوية والضريبة ومتابعة المعاملات لدى الهيئة العامة للزكاة والدخل بما يتوافق مع الأنظمة ويحقق متطلبات العملاء، ويحوي المكتب مجموعة من الخبراء في مجال الزكاة والضريبة لتقديم الاستشارات حول كل ما يتعلق بذلك.', 1, 'ar', 10, '159137334558.jpg', 'يقدم مكتب السديس محاسب قانوني العديد من الخدمات في الزكاة وضريبة الدخل، والتي تشمل:\r\n\r\n- التمثل الضريبي والزكاة\r\n- تطبيق احتساب الزكاة للشركات والمؤسساات للمنشاءات.\r\n- المساعدة في اعداد الإقرارات السنويه للزكاة وضريبة الدخل\r\n\r\nكما نقوم بتقديم وإعداد الإقرارات والاعتراضات الزكوية والضريبة ومتابعة المعاملات لدى الهيئة العامة للزكاة والدخل بما يتوافق مع الأنظمة ويحقق متطلبات العملاء، ويحوي المكتب مجموعة من الخبراء في مجال الزكاة والضريبة لتقديم الاستشارات حول كل ما يتعلق بذلك.', 'يقدم مكتب السديس محاسب قانوني العديد من الخدمات في الزكاة وضريبة الدخل، والتي تشمل:\r\n\r\n- التمثل الضريبي والزكاة\r\n- تطبيق احتساب الزكاة للشركات والمؤسساات للمنشاءات.\r\n- المساعدة في اعداد الإقرارات السنويه للزكاة وضريبة الدخل\r\n\r\nكما نقوم بتقديم وإعداد الإقرارات والاعتراضات الزكوية والضريبة ومتابعة المعاملات لدى الهيئة العامة للزكاة والدخل بما يتوافق مع الأنظمة ويحقق متطلبات العملاء، ويحوي المكتب مجموعة من الخبراء في مجال الزكاة والضريبة لتقديم الاستشارات حول كل ما يتعلق بذلك.', 'يقدم مكتب السديس محاسب قانوني العديد من الخدمات في الزكاة وضريبة الدخل، والتي تشمل:\r\n\r\n- التمثل الضريبي والزكاة\r\n- تطبيق احتساب الزكاة للشركات والمؤسساات للمنشاءات.\r\n- المساعدة في اعداد الإقرارات السنويه للزكاة وضريبة الدخل\r\n\r\nكما نقوم بتقديم وإعداد الإقرارات والاعتراضات الزكوية والضريبة ومتابعة المعاملات لدى الهيئة العامة للزكاة والدخل بما يتوافق مع الأنظمة ويحقق متطلبات العملاء، ويحوي المكتب مجموعة من الخبراء في مجال الزكاة والضريبة لتقديم الاستشارات حول كل ما يتعلق بذلك.', 'يقدم مكتب السديس محاسب قانوني العديد من الخدمات في الزكاة وضريبة الدخل، والتي تشمل:\r\n\r\n- التمثل الضريبي والزكاة\r\n- تطبيق احتساب الزكاة للشركات والمؤسساات للمنشاءات.\r\n- المساعدة في اعداد الإقرارات السنويه للزكاة وضريبة الدخل\r\n\r\nكما نقوم بتقديم وإعداد الإقرارات والاعتراضات الزكوية والضريبة ومتابعة المعاملات لدى الهيئة العامة للزكاة والدخل بما يتوافق مع الأنظمة ويحقق متطلبات العملاء، ويحوي المكتب مجموعة من الخبراء في مجال الزكاة والضريبة لتقديم الاستشارات حول كل ما يتعلق بذلك.', 'يقدم مكتب السديس محاسب قانوني العديد من الخدمات في الزكاة وضريبة الدخل، والتي تشمل:\r\n\r\n- التمثل الضريبي والزكاة\r\n- تطبيق احتساب الزكاة للشركات والمؤسساات للمنشاءات.\r\n- المساعدة في اعداد الإقرارات السنويه للزكاة وضريبة الدخل\r\n\r\nكما نقوم بتقديم وإعداد الإقرارات والاعتراضات الزكوية والضريبة ومتابعة المعاملات لدى الهيئة العامة للزكاة والدخل بما يتوافق مع الأنظمة ويحقق متطلبات العملاء، ويحوي المكتب مجموعة من الخبراء في مجال الزكاة والضريبة لتقديم الاستشارات حول كل ما يتعلق بذلك.', '2022-01-27 17:53:51', '2022-01-27 17:53:51'),
(11, 'Zakat and tax', 'AGN Alsudais chartered accountnants Zakat and Taxation Accounting: The collection and processing of financial information in order to reach the Zakat or taxable amount, which is known as the tax or zakat, and then the Zakat declaration or the tax return for Zakat or income tax.', 1, 'en', 10, '159137334558.jpg', 'AGN Alsudais chartered accountnants Zakat and Taxation Accounting: The collection and processing of financial information in order to reach the Zakat or taxable amount, which is known as the tax or zakat, and then the Zakat declaration or the tax return for Zakat or income tax.Zakat and Taxation Accounting: The collection and processing of financial information in order to reach the Zakat or taxable amount, which is known as the tax or zakat, and then the Zakat declaration or the tax return for Zakat or income tax.', 'AGN Alsudais chartered accountnants Zakat and Taxation Accounting: The collection and processing of financial information in order to reach the Zakat or taxable amount, which is known as the tax or zakat, and then the Zakat declaration or the tax return for Zakat or income tax.Zakat and Taxation Accounting: The collection and processing of financial information in order to reach the Zakat or taxable amount, which is known as the tax or zakat, and then the Zakat declaration or the tax return for Zakat or income tax.', 'AGN Alsudais chartered accountnants Zakat and Taxation Accounting: The collection and processing of financial information in order to reach the Zakat or taxable amount, which is known as the tax or zakat, and then the Zakat declaration or the tax return for Zakat or income tax.Zakat and Taxation Accounting: The collection and processing of financial information in order to reach the Zakat or taxable amount, which is known as the tax or zakat, and then the Zakat declaration or the tax return for Zakat or income tax.', 'AGN Alsudais chartered accountnants Zakat and Taxation Accounting: The collection and processing of financial information in order to reach the Zakat or taxable amount, which is known as the tax or zakat, and then the Zakat declaration or the tax return for Zakat or income tax.Zakat and Taxation Accounting: The collection and processing of financial information in order to reach the Zakat or taxable amount, which is known as the tax or zakat, and then the Zakat declaration or the tax return for Zakat or income tax.', 'AGN Alsudais chartered accountnants Zakat and Taxation Accounting: The collection and processing of financial information in order to reach the Zakat or taxable amount, which is known as the tax or zakat, and then the Zakat declaration or the tax return for Zakat or income tax.Zakat and Taxation Accounting: The collection and processing of financial information in order to reach the Zakat or taxable amount, which is known as the tax or zakat, and then the Zakat declaration or the tax return for Zakat or income tax.', '2022-02-03 07:30:49', '2022-02-03 07:30:49'),
(16, 'مسك الدفاتير والأستشارت', 'يقدم مكتنبا السديس محاسب قانوني خدمات مسك الدفاتير والذي يعرف بأنه التسجيل اليومي التفصيلي لكل المعاملات المالية؛ من مبيعات، ومشتريات، ودخل؛ من حيث المستلم والمدفوع، ويتولى ذلك عادة محاسب. وهو أحد عناصر عملية المحاسبة، فما يُسجل في الدفاتر من بيانات مالية يصبح أساس التقارير المالية المختلفة التي يعدها المحاسبون.', 1, 'ar', 12, '159137349726.jpg', 'يقدم مكتنبا السديس محاسب قانوني خدمات مسك الدفاتير والذي يعرف بأنه التسجيل اليومي التفصيلي لكل المعاملات المالية؛ من مبيعات، ومشتريات، ودخل؛ من حيث المستلم والمدفوع، ويتولى ذلك عادة محاسب. وهو أحد عناصر عملية المحاسبة، فما يُسجل في الدفاتر من بيانات مالية يصبح أساس التقارير المالية المختلفة التي يعدها المحاسبون.', 'يقدم مكتنبا السديس محاسب قانوني خدمات مسك الدفاتير والذي يعرف بأنه التسجيل اليومي التفصيلي لكل المعاملات المالية؛ من مبيعات، ومشتريات، ودخل؛ من حيث المستلم والمدفوع، ويتولى ذلك عادة محاسب. وهو أحد عناصر عملية المحاسبة، فما يُسجل في الدفاتر من بيانات مالية يصبح أساس التقارير المالية المختلفة التي يعدها المحاسبون.', 'يقدم مكتنبا السديس محاسب قانوني خدمات مسك الدفاتير والذي يعرف بأنه التسجيل اليومي التفصيلي لكل المعاملات المالية؛ من مبيعات، ومشتريات، ودخل؛ من حيث المستلم والمدفوع، ويتولى ذلك عادة محاسب. وهو أحد عناصر عملية المحاسبة، فما يُسجل في الدفاتر من بيانات مالية يصبح أساس التقارير المالية المختلفة التي يعدها المحاسبون.', 'يقدم مكتنبا السديس محاسب قانوني خدمات مسك الدفاتير والذي يعرف بأنه التسجيل اليومي التفصيلي لكل المعاملات المالية؛ من مبيعات، ومشتريات، ودخل؛ من حيث المستلم والمدفوع، ويتولى ذلك عادة محاسب. وهو أحد عناصر عملية المحاسبة، فما يُسجل في الدفاتر من بيانات مالية يصبح أساس التقارير المالية المختلفة التي يعدها المحاسبون.', 'يقدم مكتنبا السديس محاسب قانوني خدمات مسك الدفاتير والذي يعرف بأنه التسجيل اليومي التفصيلي لكل المعاملات المالية؛ من مبيعات، ومشتريات، ودخل؛ من حيث المستلم والمدفوع، ويتولى ذلك عادة محاسب. وهو أحد عناصر عملية المحاسبة، فما يُسجل في الدفاتر من بيانات مالية يصبح أساس التقارير المالية المختلفة التي يعدها المحاسبون.', '2022-01-27 17:54:36', '2022-01-27 17:54:36'),
(17, 'Bookkeeping', 'AGN Alsudais Chartered Accountants provices Bookkeeping is the recording of financial transactions, and is part of the process of accounting in business. Transactions include purchases, sales, receipts, and payments by an individual person or an organization/corporation.e do accounting services, manual & computerized, customized to the requirement of customers. Qualified accounting professionals experienced in accounting packages; Tally, Peachtree, Sage, DacEasy etc. We take assignment on monthly, yearly basis by finishing the work in every week or month as per requirement.\r\n\r\nFinancial consultancy services in KSA are meant to help you get an exact idea about your finances. Whether you’re in debt or not, if you can apply for a particular loan or not and whether you can keep buying that Gucci bag or that Ferrari car or not. Financial Accounting will tell you exactly how much money you have, how much you can spend and how much you can save. We are also an Accounting Outsourcing Companies in KSA , so if you know anyone who needs financial services, all you have to do is call us. We also provide book keeping services in KSA.\r\n\r\nMonthly management report and yearly financial report, supervised by Chartered accountants are our value added service. Management report are tailored to use as improvement note for our customers and we always ensure it to be “More than just Numbers”.', 1, 'en', 12, '159137349726.jpg', 'AGN Alsudais Chartered Accountants provices Bookkeeping is the recording of financial transactions, and is part of the process of accounting in business. Transactions include purchases, sales, receipts, and payments by an individual person or an organization/corporation.e do accounting services, manual & computerized, customized to the requirement of customers. Qualified accounting professionals experienced in accounting packages; Tally, Peachtree, Sage, DacEasy etc. We take assignment on monthly, yearly basis by finishing the work in every week or month as per requirement.\r\n\r\nFinancial consultancy services in KSA are meant to help you get an exact idea about your finances. Whether you’re in debt or not, if you can apply for a particular loan or not and whether you can keep buying that Gucci bag or that Ferrari car or not. Financial Accounting will tell you exactly how much money you have, how much you can spend and how much you can save. We are also an Accounting Outsourcing Companies in KSA , so if you know anyone who needs financial services, all you have to do is call us. We also provide book keeping services in KSA.\r\n\r\nMonthly management report and yearly financial report, supervised by Chartered accountants are our value added service. Management report are tailored to use as improvement note for our customers and we always ensure it to be “More than just Numbers”.', 'AGN Alsudais Chartered Accountants provices Bookkeeping is the recording of financial transactions, and is part of the process of accounting in business. Transactions include purchases, sales, receipts, and payments by an individual person or an organization/corporation.e do accounting services, manual & computerized, customized to the requirement of customers. Qualified accounting professionals experienced in accounting packages; Tally, Peachtree, Sage, DacEasy etc. We take assignment on monthly, yearly basis by finishing the work in every week or month as per requirement.\r\n\r\nFinancial consultancy services in KSA are meant to help you get an exact idea about your finances. Whether you’re in debt or not, if you can apply for a particular loan or not and whether you can keep buying that Gucci bag or that Ferrari car or not. Financial Accounting will tell you exactly how much money you have, how much you can spend and how much you can save. We are also an Accounting Outsourcing Companies in KSA , so if you know anyone who needs financial services, all you have to do is call us. We also provide book keeping services in KSA.\r\n\r\nMonthly management report and yearly financial report, supervised by Chartered accountants are our value added service. Management report are tailored to use as improvement note for our customers and we always ensure it to be “More than just Numbers”.', 'AGN Alsudais Chartered Accountants provices Bookkeeping is the recording of financial transactions, and is part of the process of accounting in business. Transactions include purchases, sales, receipts, and payments by an individual person or an organization/corporation.e do accounting services, manual & computerized, customized to the requirement of customers. Qualified accounting professionals experienced in accounting packages; Tally, Peachtree, Sage, DacEasy etc. We take assignment on monthly, yearly basis by finishing the work in every week or month as per requirement.\r\n\r\nFinancial consultancy services in KSA are meant to help you get an exact idea about your finances. Whether you’re in debt or not, if you can apply for a particular loan or not and whether you can keep buying that Gucci bag or that Ferrari car or not. Financial Accounting will tell you exactly how much money you have, how much you can spend and how much you can save. We are also an Accounting Outsourcing Companies in KSA , so if you know anyone who needs financial services, all you have to do is call us. We also provide book keeping services in KSA.\r\n\r\nMonthly management report and yearly financial report, supervised by Chartered accountants are our value added service. Management report are tailored to use as improvement note for our customers and we always ensure it to be “More than just Numbers”.', 'AGN Alsudais Chartered Accountants provices Bookkeeping is the recording of financial transactions, and is part of the process of accounting in business. Transactions include purchases, sales, receipts, and payments by an individual person or an organization/corporation.e do accounting services, manual & computerized, customized to the requirement of customers. Qualified accounting professionals experienced in accounting packages; Tally, Peachtree, Sage, DacEasy etc. We take assignment on monthly, yearly basis by finishing the work in every week or month as per requirement.\r\n\r\nFinancial consultancy services in KSA are meant to help you get an exact idea about your finances. Whether you’re in debt or not, if you can apply for a particular loan or not and whether you can keep buying that Gucci bag or that Ferrari car or not. Financial Accounting will tell you exactly how much money you have, how much you can spend and how much you can save. We are also an Accounting Outsourcing Companies in KSA , so if you know anyone who needs financial services, all you have to do is call us. We also provide book keeping services in KSA.\r\n\r\nMonthly management report and yearly financial report, supervised by Chartered accountants are our value added service. Management report are tailored to use as improvement note for our customers and we always ensure it to be “More than just Numbers”.', 'AGN Alsudais Chartered Accountants provices Bookkeeping is the recording of financial transactions, and is part of the process of accounting in business. Transactions include purchases, sales, receipts, and payments by an individual person or an organization/corporation.e do accounting services, manual & computerized, customized to the requirement of customers. Qualified accounting professionals experienced in accounting packages; Tally, Peachtree, Sage, DacEasy etc. We take assignment on monthly, yearly basis by finishing the work in every week or month as per requirement.\r\n\r\nFinancial consultancy services in KSA are meant to help you get an exact idea about your finances. Whether you’re in debt or not, if you can apply for a particular loan or not and whether you can keep buying that Gucci bag or that Ferrari car or not. Financial Accounting will tell you exactly how much money you have, how much you can spend and how much you can save. We are also an Accounting Outsourcing Companies in KSA , so if you know anyone who needs financial services, all you have to do is call us. We also provide book keeping services in KSA.\r\n\r\nMonthly management report and yearly financial report, supervised by Chartered accountants are our value added service. Management report are tailored to use as improvement note for our customers and we always ensure it to be “More than just Numbers”.', '2022-02-03 07:32:25', '2022-02-03 07:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `phone`, `email`, `whatsapp`, `address`, `created_at`, `updated_at`) VALUES
(1, '0548779895', 'osamah.alsudais@alsudaiscpa.com', '966548779895', '', '2020-06-05 14:02:54', '2020-06-05 12:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `lang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relate` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `photo`, `status`, `lang`, `relate`, `created_at`, `updated_at`) VALUES
(22, '159136489592.jpg', 1, 'ar', 1, '2020-06-05 11:48:15', '2020-06-05 11:48:15'),
(23, '159136489592.jpg', 1, 'en', 1, '2020-06-06 20:16:45', '2020-06-06 20:16:45'),
(24, '159161244725.jpg', 1, 'ar', 24, '2020-06-08 08:34:07', '2020-06-08 08:34:07'),
(25, '159161244719.jpg', 1, 'en', 24, '2020-06-08 08:34:07', '2020-06-08 08:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ahmed metwaly', 'ocpa@alsudaiscpa.com', '2019-02-28 20:00:00', '$2y$10$XNXgRBFNPxl2oYK1qnfIjOZokA71i2n00jbFCsCAJozCXxqz/Zr9.', 1, 'YMztESlHpWkhdB76oBd1yfMl1UkXzcDJ6Kvkp522WD7eu1mfyNi27P9ZpprG', '2023-04-04 22:29:31', '2023-04-04 22:29:31');

-- --------------------------------------------------------

--
-- Table structure for table `work_mechanism`
--

CREATE TABLE `work_mechanism` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relate` (`relate`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relate` (`relate`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relate` (`relate`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_mechanism`
--
ALTER TABLE `work_mechanism`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work_mechanism`
--
ALTER TABLE `work_mechanism`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

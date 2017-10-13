-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 12 2017 г., 17:15
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;


--
-- База данных: `agat-777`
--

-- --------------------------------------------------------

--
-- Структура таблицы `agat_about_us`
--

CREATE TABLE `agat_about_us` (
  `id` int(10) UNSIGNED NOT NULL,
  `ww` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_about_us`
--

INSERT INTO `agat_about_us` (`id`, `ww`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Структура таблицы `agat_about_us_translations`
--

CREATE TABLE `agat_about_us_translations` (
  `id` int(11) NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `iso_code` varchar(2) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_about_us_translations`
--

INSERT INTO `agat_about_us_translations` (`id`, `parent_id`, `iso_code`, `content`) VALUES
(1, 1, 'hy', '<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">Ընկերությունը համա&bull;ործակցել և համա&bull;ործակցում է բազմամյա փորձ ու միջազ&bull;ային ճանաչում ստացած պատվիրՙԱգաթ-777՚ ՍՊԸ-ն ստեղծվել է 02.03.1997թ. կնքված հիմնադիր պայմանագրի և ՀՀ Արդյունաբերության նախարարության հետ կնքված վարձակալական պայմանագրի հիմնա վրա &nbsp;որպես վարձակալական ձեռնարկություն, իսկ 1998թ. նոյեմբերի 3-ի ՀՀ Կառավարության թիվ 683 որոշման համաձայն փոխել է իր կարգավիճակը և ճանաչվել ՙԱգաթ-777՚ &nbsp;վարձակալական ձեռնարկության իրավահաջորդը:</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">&nbsp;</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">Ընկերության միակ հիմնադիրն է Աղվան Նիկոլայի Կարապետյանը:</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">&nbsp;</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">Ընկերությունը Երևան քաղաքի Շենգավիթ համայնքում, &nbsp;Շիրակի փողոցի 4-րդ փակուղի հասցեում, ունի 30000 ք/մ սեփական տարածք և շենք-շինություններ,որոնց ընդհանուր մակերեսը 8000 ք/մ է: Ունի վարչական շենք, արտադրական նշանակության շենք-շինություններ&ordf; մեխանիկական արտադրամաս, կահույքի արտադրության արտադրամաս և լվացքատուն իրենց անհրաժեշտ &nbsp;մեքենա-սարքավորումներով, եվրո դռների և պատուհանների &nbsp;արտադրության արտադրամաս, ինչպես նաև օժանդակ այլ շինություններ: Ընկերությունը ունի 52 միավոր շարժական տրանսպորտային միջոցներ, որոնց տեխնիկական վիճակը բավարար է ցանկացած աշխատանքի համար:</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">&nbsp;</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">Ընկերության տնտեսական գործունեության 16 տարիների ընթացքում արտադրական և մատուցվող ծառայությունների ծավալների ընդլայնման շնորհիվ ավելացել է նաև աշխատատեղերի քանակը: Ընկերությունում աշխատում են 105 մշտական և 70 ժամանակավոր աշխատողներ: Ընկերության աշխատակազմը համալրված է աշխատանքային մեծ փորձ ունեցող որակյալ մասնագետներով, որոնք մրցունակ են ցանկացած ծրագրի իրականացմանը:</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">&nbsp;</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">Ընկերության հիմնական &nbsp;գործնեության տեսակներն են &ordf;</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">&nbsp;</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">- &nbsp;Շինարարական տարբեր աշխատանքներ&ordf; ժամանակակից պահանջներով</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">&nbsp;</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">- &nbsp;Տարբեր ծառայությունների մատուցում</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">&nbsp;</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">- &nbsp;Ժամանակակից շին նյութերի ներմուծում և իրացում</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">&nbsp;</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">- &nbsp;Շինարարական մասնագետների վերապատրաստում</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">&nbsp;</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">- &nbsp;Արտադրական և կենցաղային նշանակության ապրանքների արտադրություն:&nbsp;</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">&nbsp;</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">Ձեռնարկված միջոցառումների շնորհիվ Ընկերության արտադրական տարեկան ծավալները ունեցել են ողջամիտ աճի տեմպեր:</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">&nbsp;</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">&nbsp;</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">&nbsp;</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; line-height: 16.5px;"><span style="outline: none; margin: 0px; padding: 0px; line-height: 19px; font-size: medium;">Ներկայումս ՙ Ագաթ-777՚ ՍՊԸ-ն իր արտադրական հզորություններով և նյութատեխնիկական բազայի հագեցվածությամբ մրցունակ է միջազգային կազմակերպությունների կողիմից Հայաստանի Հանրապետության տարածքում և նրա սահմաններից դուրս ցանկացած ծավալի և համապատասխան &nbsp;բնույթի ծրագրերի իրականացման գործում:ատուների հետ,որոնցից են&ordf;&nbsp;</span></p>'),
(2, 1, 'ru', '<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: 35.4pt;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">AGAT-777 LLC was established in 02.03.1997 on the basis of Constitutive agreement and on the basis of the rent agreement signed with the Ministry of Industry.</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: 35.4pt;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">On November 3, 1998 according to resolution number 683 passed by the government of the Republic of Armenia the legal status of organization was changed. Since that time it is known as the lawful successor of lease enterprise&nbsp;&nbsp;&nbsp; AGAT-777 LLC.</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: 35.4pt;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">The only founder of the company is Agvan Nikolaevich Karapetyan.</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: 35.4pt;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">The address is: Yerevan, region Shengavit, str. Shiraki, 4<sup style="outline: none; margin: 0px; padding: 0px;">th</sup>&nbsp;blind alley.</span></p>\n<p style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">The company owns land area of 30000 sq.m, and also a section of structures with total area of 8000 sq.m. Among them office building, production buildings, mechanical section, woodworking section and section for production of furniture, warehouse and office accommodations, garage and other auxiliary buildings, sections and constructions. The garage includes 52 units of transportation means. Among them trucks, crane truck, supermaz, excavator, tractors, loading-unloading machines and also cars.</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: 35.4pt;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Highly experienced and qualified professionals as well as specialists trained in the western companies form the working staff of the company. These specialists are able to give solutions to different problems in the sphere of building. Also they deal with the installation of contemporary heating equipment, production of furniture, and the assignment of different services. We have licenses and ISO sertification .</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: 35.4pt;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Some of the building activities of the company (construction works, installation of special heating equipment) are the only ones in the whole territory of Tran Caucasus. The activity of the company is developed also in the territory of Georgia.</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: 0.25in;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">The basic forms of the activity of the company are the following:</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px 0px 0px 0.5in; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: -0.25in;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium; font-family: Symbol;">&middot;<span style="outline: none; margin: 0px; padding: 0px; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Conducting different forms of construction works in accordance with the contemporary technologies</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px 0px 0px 0.5in; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: -0.25in;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium; font-family: Symbol;">&middot;<span style="outline: none; margin: 0px; padding: 0px; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Import and delivery of wide spectrum of building materials of the production of German concern Henkel and Swedish company Thermia</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px 0px 0px 0.5in; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: -0.25in;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium; font-family: Symbol;">&middot;<span style="outline: none; margin: 0px; padding: 0px; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Own color-line base that works on the foundation of the center of competence created together with Henkel Bautechnik GmbH in Armenia</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px 0px 0px 0.5in; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: -0.25in;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium; font-family: Symbol;">&middot;<span style="outline: none; margin: 0px; padding: 0px; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Instructions, seminars for builders of different companies in the application of new technologies and materials for building and savings of thermal energy</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px 0px 0px 0.5in; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: -0.25in;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium; font-family: Symbol;">&middot;<span style="outline: none; margin: 0px; padding: 0px; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Performing design work, and also import, delivery and installation of contemporary heating equipment</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px 0px 0px 0.5in; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: -0.25in;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium; font-family: Symbol;">&middot;<span style="outline: none; margin: 0px; padding: 0px; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Production of furniture (doors, windows) and manufacture of wooden and metallic constructions</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px 0px 0px 0.5in; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: -0.25in;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium; font-family: Symbol;">&middot;<span style="outline: none; margin: 0px; padding: 0px; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Services for hotel business</span></p>\n<p style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Renting warehouses and office accommodations</span></p>\n<p style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify;">&nbsp;</p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: 0.25in;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Today AGAT-777 LLC with its production capacities, as well as with its material and technical prosperity completely corresponds to contemporary requirements and is capable of solving any profile problems and works of any volume, performing tasks confronting international organizations and companies operating in Armenia.</span></p>'),
(3, 1, 'en', '<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: 35.4pt;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">AGAT-777 LLC was established in 02.03.1997 on the basis of Constitutive agreement and on the basis of the rent agreement signed with the Ministry of Industry.</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: 35.4pt;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">On November 3, 1998 according to resolution number 683 passed by the government of the Republic of Armenia the legal status of organization was changed. Since that time it is known as the lawful successor of lease enterprise&nbsp;&nbsp;&nbsp; AGAT-777 LLC.</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: 35.4pt;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">The only founder of the company is Agvan Nikolaevich Karapetyan.</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: 35.4pt;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">The address is: Yerevan, region Shengavit, str. Shiraki, 4<sup style="outline: none; margin: 0px; padding: 0px;">th</sup>&nbsp;blind alley.</span></p>\n<p style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">The company owns land area of 30000 sq.m, and also a section of structures with total area of 8000 sq.m. Among them office building, production buildings, mechanical section, woodworking section and section for production of furniture, warehouse and office accommodations, garage and other auxiliary buildings, sections and constructions. The garage includes 52 units of transportation means. Among them trucks, crane truck, supermaz, excavator, tractors, loading-unloading machines and also cars.</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: 35.4pt;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Highly experienced and qualified professionals as well as specialists trained in the western companies form the working staff of the company. These specialists are able to give solutions to different problems in the sphere of building. Also they deal with the installation of contemporary heating equipment, production of furniture, and the assignment of different services. We have licenses and ISO sertification .</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: 35.4pt;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Some of the building activities of the company (construction works, installation of special heating equipment) are the only ones in the whole territory of Tran Caucasus. The activity of the company is developed also in the territory of Georgia.</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: 0.25in;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">The basic forms of the activity of the company are the following:</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px 0px 0px 0.5in; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: -0.25in;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium; font-family: Symbol;">&middot;<span style="outline: none; margin: 0px; padding: 0px; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Conducting different forms of construction works in accordance with the contemporary technologies</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px 0px 0px 0.5in; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: -0.25in;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium; font-family: Symbol;">&middot;<span style="outline: none; margin: 0px; padding: 0px; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Import and delivery of wide spectrum of building materials of the production of German concern Henkel and Swedish company Thermia</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px 0px 0px 0.5in; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: -0.25in;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium; font-family: Symbol;">&middot;<span style="outline: none; margin: 0px; padding: 0px; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Own color-line base that works on the foundation of the center of competence created together with Henkel Bautechnik GmbH in Armenia</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px 0px 0px 0.5in; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: -0.25in;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium; font-family: Symbol;">&middot;<span style="outline: none; margin: 0px; padding: 0px; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Instructions, seminars for builders of different companies in the application of new technologies and materials for building and savings of thermal energy</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px 0px 0px 0.5in; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: -0.25in;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium; font-family: Symbol;">&middot;<span style="outline: none; margin: 0px; padding: 0px; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Performing design work, and also import, delivery and installation of contemporary heating equipment</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px 0px 0px 0.5in; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: -0.25in;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium; font-family: Symbol;">&middot;<span style="outline: none; margin: 0px; padding: 0px; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Production of furniture (doors, windows) and manufacture of wooden and metallic constructions</span></p>\n<p class="MsoNormal" style="outline: none; margin: 0px 0px 0px 0.5in; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: -0.25in;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium; font-family: Symbol;">&middot;<span style="outline: none; margin: 0px; padding: 0px; font-family: ''Times New Roman'';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Services for hotel business</span></p>\n<p style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Renting warehouses and office accommodations</span></p>\n<p style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify;">&nbsp;</p>\n<p class="MsoNormal" style="outline: none; margin: 0px; padding: 0px; color: #ffffff; font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; text-align: justify; text-indent: 0.25in;"><span style="outline: none; margin: 0px; padding: 0px; font-size: medium;">Today AGAT-777 LLC with its production capacities, as well as with its material and technical prosperity completely corresponds to contemporary requirements and is capable of solving any profile problems and works of any volume, performing tasks confronting international organizations and companies operating in Armenia.</span></p>');

-- --------------------------------------------------------

--
-- Структура таблицы `agat_languages`
--

CREATE TABLE `agat_languages` (
  `id` int(11) NOT NULL,
  `iso_code` varchar(2) NOT NULL,
  `name_english` varchar(20) NOT NULL,
  `name_origin` varchar(40) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `may_be_admin` tinyint(1) NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `flag` varchar(20) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `is_default` tinyint(1) NOT NULL,
  `is_hidden` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_languages`
--

INSERT INTO `agat_languages` (`id`, `iso_code`, `name_english`, `name_origin`, `is_active`, `may_be_admin`, `order`, `flag`, `is_admin`, `is_default`, `is_hidden`) VALUES
(1, 'hy', 'Armenian', 'Հայերեն', 1, 1, 26, 'hy.gif', 0, 1, 1),
(2, 'ru', 'Russian', 'Русский', 1, 1, 28, 'ru.gif', 0, 0, 0),
(3, 'en', 'English', 'English', 1, 1, 27, 'en.gif', 1, 0, 0),
(4, 'ge', 'Georgian', 'ქართული', 0, 0, 0, 'ge.gif', 0, 0, 0),
(5, 'fr', 'French', 'Français', 0, 0, 0, 'fr.gif', 0, 0, 0),
(6, 'es', 'Spanish', 'español', 0, 0, 0, 'es.gif', 0, 0, 0),
(7, 'de', 'German', 'Deutsch', 0, 0, 0, 'de.gif', 0, 0, 0),
(8, 'it', 'Italian', 'italiano', 0, 0, 0, 'it.gif', 0, 0, 0),
(9, 'tr', 'Turkish', 'Türk', 0, 0, 0, 'tr.gif', 0, 0, 0),
(10, 'kz', 'Kazakh', 'Қазақ', 0, 0, 0, 'kz.gif', 0, 0, 0),
(13, 'by', 'Belorussian', 'беларускі', 0, 0, 0, 'by.gif', 0, 0, 0),
(16, 'gr', 'Greek', 'ελληνικά', 0, 0, 0, 'gr.gif', 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `agat_links`
--

CREATE TABLE `agat_links` (
  `id` int(11) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `agat_meta`
--

CREATE TABLE `agat_meta` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `type` enum('keywords','description','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_meta`
--

INSERT INTO `agat_meta` (`id`, `type`) VALUES
(1, 'description'),
(2, 'keywords');

-- --------------------------------------------------------

--
-- Структура таблицы `agat_meta_translation`
--

CREATE TABLE `agat_meta_translation` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `parent_id` tinyint(3) UNSIGNED NOT NULL,
  `iso_code` varchar(10) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_meta_translation`
--

INSERT INTO `agat_meta_translation` (`id`, `parent_id`, `iso_code`, `content`) VALUES
(10, 1, 'hy', 'AGAT-777 ՍՊԸ-ն հիմնադրվել է 02.03.1997 թ-ին: Ընկերությանը պատկանում է 30000 ք.մ. հողատարածք, ինչպես նաեւ 8000 քմ ընդհանուր տարածք ունեցող կառույցների հատված'),
(11, 2, 'hy', 'ԱԳԱԹ-777, Շինարարություն, Կահույքի պատրաստում, Եվրո պատուհաններ և դռներ, Մետաղյա իրերի պատրաստում, Հյուրանոց'),
(12, 1, 'ru', 'ООО «АГАТ-777» создано 02.03.1997. Компания владеет земельным участком площадью 30000 кв. М, а также секцией сооружений общей площадью 8000 кв. М.'),
(13, 2, 'ru', 'АГАТ-777, Строительство, Изготовление мебели, Евро окна и двери\r\n, Производство стальных изделий, Гостиница'),
(14, 1, 'en', 'AGAT-777 LLC was established in 02.03.1997 on the basis of Constitutive agreement and on the basis of the rent agreement signed with the Ministry of Industry'),
(15, 2, 'en', 'AGAT-777, Construction, Furniture production, Euro windowses and doors, Production of steel products, Hotel');

-- --------------------------------------------------------

--
-- Структура таблицы `agat_migrations`
--

CREATE TABLE `agat_migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_migrations`
--

INSERT INTO `agat_migrations` (`version`) VALUES
(1);

-- --------------------------------------------------------

--
-- Структура таблицы `agat_partner`
--

CREATE TABLE `agat_partner` (
  `id` int(11) UNSIGNED NOT NULL,
  `file` varchar(255) NOT NULL,
  `main` int(1) NOT NULL,
  `order` int(100) NOT NULL,
  `is_main` varchar(10) NOT NULL,
  `url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_partner`
--

INSERT INTO `agat_partner` (`id`, `file`, `main`, `order`, `is_main`, `url`) VALUES
(1, 'e4ea823648ca8f558f4fd6549828e19b.jpeg', 0, 0, 'on', 'http://www.vahakni.com/'),
(2, '02ec6b148f083738dd46350033a5a358.jpeg', 0, 1, 'on', 'https://www.worldvision.org/'),
(3, 'b53f349bea387ebd6a372eff7fdda764.png', 0, 2, 'on', 'http://armwater.am/'),
(4, '6c7cf66393383d2566dfbc7548bd6327.jpeg', 0, 3, 'on', 'http://www.mil.am/');

-- --------------------------------------------------------

--
-- Структура таблицы `agat_partner_translations`
--

CREATE TABLE `agat_partner_translations` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) UNSIGNED NOT NULL,
  `iso_code` varchar(2) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_partner_translations`
--

INSERT INTO `agat_partner_translations` (`id`, `parent_id`, `iso_code`, `title`, `description`) VALUES
(1, 1, 'hy', 'Հովնանյան ինտերնեյշնլ', 'Հովնանյան ինտերնեյշնլ-ը Հայաստանում անշարժ գույքով և շինարարությամբ զբաղվող առաջատար ընկերություններից է, որի հիմնադիրն է ամերիկահայ գործարար պրն. Վահակ Հովնանյանը: Ընկերության կողմից նախագծված և կառուցված Վահագնի թաղամասը լիովին նոր մոտեցում է արդի հայ հասարակության մեջ ձևավորված նոր ապրելակերպի նկատմամբ։'),
(2, 1, 'ru', 'Овнанян Интернэшнл', 'Компания "Овнанян Интернэшнл" основана известным американским застройщиком и бизнесменом г. Ваагом Овнаняном. Гордость компании - жилой комплекс Ваагни - раскинулся в 15 мин. езды от центра Еревана, в окружении Арарата, Арагаца и Ара горных массивов.'),
(3, 1, 'en', 'Hovnanian International', 'Hovnanian International is a leading real estate property developer in Armenia founded by a well known US developer Mr.Vahak Hovnanian. Its flagship development, Vahakni Residential Community features homes of lasting beauty, quality and value, integrated into magnificent Ararat Valley landscape.'),
(4, 2, 'hy', 'World Vision Armenia', 'Վորլդ Վիժնը քրիստոնեական բարեգործական կազմակերպություն է, որը կոչված է բարեփոխելու աղքատության մեջ ապրող երեխաների, նրանց ընտանիքների եւ համայնքների կյանքը: Առաջնորդվելով Հիսուս Քրիստոսի հանդեպ ունեցած մեծ հավատքով` Վորլդ Վիժնը ծառայում է աղքատներին եւ ճնշվածներին` խորհրդանշելով Աստծո բացարձակ սերն առ մարդիկ: '),
(5, 2, 'ru', 'World Vision Armenia', '«Мировое видение» - христианская гуманитарная организация, которая работает над созданием прочного изменения в жизни детей, семей и общин, живущих в условиях нищеты. Мировое видение, мотивированное нашей верой в Иисуса Христа, служит наряду с бедными и угнетенными как демонстрация безусловной любви Бога ко всем людям.'),
(6, 2, 'en', 'World Vision Armenia', 'World Vision is a Christian humanitarian organization working to create lasting change in the lives of children, families and communities living in poverty.  Motivated by our faith in Jesus Christ, World Vision serves alongside the poor and oppressed as a demonstration of God''s unconditional love for all people.'),
(7, 3, 'hy', 'Հայջրմուղկոյուղի ՓԲԸ', '"Հայջրմուղկոյուղի" փակ բաժնետիրական ընկերությունը ստեղծվել է ՀՀ քաղաքաշինության նախարարության 1997թ. թիվ 169 հրամանով և հանդիսանում է "Հայջրմուղկոյուղի" պետական ձեռնարկության իրավահաջորդը: Վերջինս ստեղծվել էր նախկին ՀԽՍՀ Մինիստրների խորհրդի 1971թ. հունվարի 14-ի թիվ 16 որոշմամբ` Բնակարանային-կոմունալ տնտեսության մինիստրության կազմում ստեղծված ջրմուղ-կոյուղու հանրապետական արտադրական վարչության (որը 1990թ. ՀՀ ձեռնարկությունների մասին օրենքի համաձայն վերափոխվել էր "Հայջրմուղկոյուղի" հատուկ նշանակութ'),
(8, 3, 'ru', 'Армянская водопроводная компания', 'Закрытое акционерное общество «Армянская вода и канализация» (AWSC) было создано Указом № 169 Министерства градостроительства в 1997 году и является преемником государственного предприятия ЗАО «Вода и канализация». Последнее было основано Резолюцией № 16 Совета министров бывшей Армянской Советской Социалистической Республики от 14 января 1971 года на базе отдела государственного производства водопроводной канализации, созданного в системе жилищно-коммунального хозяйства (которая в 1990 году , в '),
(9, 3, 'en', 'Armenian Water Sewerage Company', 'Armenian Water and Sewerage Closed Joint Stock Company (AWSC) was established by the Decree No. 169 of the Ministry of Urban Development in 1997 and is the successor of “Water and Sewerage” CJSC state enterprise. The latter was founded by the Resolution No. 16 of the Council of Ministers of the former Armenian Soviet Socialist Republic on January 14, 1971 on the base of water-sewerage state production department created in the system of Housing and Communal Services (which in 1990, according to '),
(10, 4, 'hy', '', ''),
(11, 4, 'ru', 'aaa', 'klpo9i'),
(12, 4, 'en', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `agat_portfolio`
--

CREATE TABLE `agat_portfolio` (
  `id` int(11) UNSIGNED NOT NULL,
  `file` varchar(255) NOT NULL,
  `order` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_portfolio`
--

INSERT INTO `agat_portfolio` (`id`, `file`, `order`) VALUES
(1, 'd5085ce69d83f64e977d4eede6f8cece.jpeg', 2),
(2, '19eb8a98cf115ab2debfbd779d5bff19.png', 1),
(3, 'b89d0ac0e6049d8b125553fe5bfc3484.jpeg', 3),
(4, 'a771cbbd1516ded3198bf01ab4fe1ab4.jpeg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `agat_portfolio_gallery`
--

CREATE TABLE `agat_portfolio_gallery` (
  `id` int(11) UNSIGNED NOT NULL,
  `parent_id` int(11) UNSIGNED NOT NULL,
  `image` varchar(500) NOT NULL,
  `order` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_portfolio_gallery`
--

INSERT INTO `agat_portfolio_gallery` (`id`, `parent_id`, `image`, `order`) VALUES
(1, 1, 'bb757e4b11208918904e8c9ffbba0f35.png', 0),
(3, 1, '5633c6170582390c44c29d05e7f10c66.jpeg', 0),
(4, 1, '0f2471cba32aa8661228013377b8e704.jpeg', 0),
(5, 1, 'd5e9c308cc38e02a7cbd875f7bbf9471.jpeg', 0),
(6, 1, 'a6fba954d90c173d7b0a1f3ec49c914e.jpeg', 0),
(7, 1, 'db9a38feafd7d30b0aa4970aefba8b4d.jpeg', 0),
(8, 2, '33c70ea39b1709193f615569204d1679.jpeg', 0),
(9, 2, '031ae1cf09e081d8ec1b46aaab4d6f99.jpeg', 0),
(10, 3, '650c79e35aaf7f9fba020ff32503b640.jpeg', 0),
(11, 3, '59645d2c7754c0b4311622af3fa16a8b.jpeg', 0),
(12, 3, 'b1eb8703faa2a646d6356d3ed0174e82.jpeg', 0),
(13, 4, '3460bf6e179e70f559b9809dfae73135.jpeg', 1),
(14, 4, '286b65b2f09f446c890300589b4c326a.jpeg', 2),
(15, 4, 'c589a69b0d67f9fc1ba03ad81d042635.jpeg', 3),
(17, 4, 'bd3bfc65c96d8b9f84838748870a0777.jpeg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `agat_portfolio_translations`
--

CREATE TABLE `agat_portfolio_translations` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) UNSIGNED NOT NULL,
  `iso_code` varchar(2) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_portfolio_translations`
--

INSERT INTO `agat_portfolio_translations` (`id`, `parent_id`, `iso_code`, `title`, `description`) VALUES
(1, 1, 'hy', 'Արարատի բժշկական կենտրոն', ''),
(2, 1, 'ru', 'Арарат медицинский центр', ''),
(3, 1, 'en', 'Ararat medical center', ''),
(4, 2, 'hy', 'Մ. Հերացու անվան բժշկական կենտրոն', ''),
(5, 2, 'ru', 'Медицинский центр имени М. Гераци', ''),
(6, 2, 'en', 'Medical center by name of M. Heraci', ''),
(7, 3, 'hy', 'Կոմիտասի Թանգարան-ինստիտուտ', ''),
(8, 3, 'ru', 'Музей-институт Комитаса', ''),
(9, 3, 'en', 'Komitas Museum-Institute', ''),
(10, 4, 'hy', 'ՀՀ Քննչական կոմիտե', ''),
(11, 4, 'ru', 'Следственный комитет РА', ''),
(12, 4, 'en', 'Investigative committee of RA', '');

-- --------------------------------------------------------

--
-- Структура таблицы `agat_report`
--

CREATE TABLE `agat_report` (
  `id` int(11) UNSIGNED NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_report`
--

INSERT INTO `agat_report` (`id`, `file`) VALUES
(1, 'balance2016.PDF');

-- --------------------------------------------------------

--
-- Структура таблицы `agat_services`
--

CREATE TABLE `agat_services` (
  `id` int(11) UNSIGNED NOT NULL,
  `file` varchar(255) NOT NULL,
  `order` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_services`
--

INSERT INTO `agat_services` (`id`, `file`, `order`) VALUES
(1, '47b8ac49d5cb6d081008d7ef30854182.jpeg', 0),
(2, 'a5f918ef9d8bf7c4364e9d63c1ca196a.jpeg', 2),
(3, '93a19bacbafe86d7063b234f5437a0dd.jpeg', 3),
(4, '64239956868b2a4405c5bff88fc4de20.jpeg', 1),
(5, '', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `agat_services_gallery`
--

CREATE TABLE `agat_services_gallery` (
  `id` int(11) UNSIGNED NOT NULL,
  `parent_id` int(11) UNSIGNED NOT NULL,
  `image` varchar(500) NOT NULL,
  `order` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_services_gallery`
--

INSERT INTO `agat_services_gallery` (`id`, `parent_id`, `image`, `order`) VALUES
(1, 2, '650857bba0a9ac678e9571bbd6201c39.jpeg', 2),
(2, 2, '673da445a3393003b8b3503932311ca2.jpeg', 0),
(3, 2, 'acfc6a0b1aa2a7c34936ee85d43f694c.jpeg', 1),
(4, 2, 'b008ff7e3d855af2b3443ac0cf7c82ce.jpeg', 3),
(5, 2, '7bfe25a520e85342a85a87c5eb0f7d5f.jpeg', 4),
(6, 2, '6a2f82d6105be3f5ca5aec3f7d2eda9b.jpeg', 5),
(7, 2, '8d1bac77736d869579b7b80cff971045.jpeg', 6),
(8, 2, 'a2ba5c232693863c86bb11e14ccbd1c8.jpeg', 7),
(9, 3, 'e526873d83a0e8cdc520635596d3210a.jpeg', 0),
(10, 3, '24efa80a16a4810788ebaa6c063de4c8.jpeg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `agat_services_translations`
--

CREATE TABLE `agat_services_translations` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) UNSIGNED NOT NULL,
  `iso_code` varchar(2) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_services_translations`
--

INSERT INTO `agat_services_translations` (`id`, `parent_id`, `iso_code`, `title`, `description`) VALUES
(16, 1, 'hy', 'Շինարարություն', ''),
(17, 2, 'hy', 'Կահույքի պատրաստում', ''),
(18, 3, 'hy', 'Եվրո պատուհաններ և դռներ', ''),
(19, 4, 'hy', 'Մետաղյա իրերի պատրաստում', ''),
(20, 5, 'hy', 'Հյուրանոց', ''),
(21, 1, 'ru', 'Строительство', ''),
(22, 2, 'ru', 'Изготовление мебели', ''),
(23, 3, 'ru', 'Евро окна и двери', ''),
(24, 4, 'ru', 'Производство стальных изделий', ''),
(25, 5, 'ru', 'Гостиница', ''),
(26, 1, 'en', 'Construction', ''),
(27, 2, 'en', 'Furniture production', ''),
(28, 3, 'en', 'Euro windowses and doors', ''),
(29, 4, 'en', 'Production of steel products', ''),
(30, 5, 'en', 'Hotel', '');

-- --------------------------------------------------------

--
-- Структура таблицы `agat_slider`
--

CREATE TABLE `agat_slider` (
  `id` int(11) UNSIGNED NOT NULL,
  `file` varchar(255) NOT NULL,
  `order` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_slider`
--

INSERT INTO `agat_slider` (`id`, `file`, `order`) VALUES
(2, 'a0434fd9a932af9bf3aadb9b9443d18a.jpeg', 2),
(3, 'a1952d4f2d9acc1426edbfb31b9475c1.jpeg', 3),
(4, '39c5eb85d8fa523439cc31809024734e.jpeg', 0),
(5, '93ddea1ed866b85b3606d2d73802155a.jpeg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `agat_slider_translations`
--

CREATE TABLE `agat_slider_translations` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) UNSIGNED NOT NULL,
  `iso_code` varchar(2) NOT NULL,
  `title` varchar(500) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_slider_translations`
--

INSERT INTO `agat_slider_translations` (`id`, `parent_id`, `iso_code`, `title`) VALUES
(4, 2, 'hy', ''),
(5, 2, 'ru', 'ГАРАНТИЯ ПРОЧНОСТИ И КАЧЕСТВА'),
(6, 2, 'en', ''),
(7, 3, 'hy', 'Կոմիտասի Թանգարան-ինստիտուտ'),
(8, 3, 'ru', 'Музей-институт Комитаса'),
(9, 3, 'en', 'Investigative committee of RA'),
(10, 4, 'hy', 'ԱՄՐՈՒԹՅԱՆ և ՈՐԱԿԻ ԵՐԱՇԽԱՎՈՐ'),
(11, 4, 'ru', 'ГАРАНТИЯ ПРОЧНОСТИ И КАЧЕСТВА'),
(12, 4, 'en', 'WARANTY OF STRENGTH AND QUALITY'),
(13, 5, 'hy', 'ՀՀ Քննչական կոմիտե'),
(14, 5, 'ru', 'Следственный комитет РА'),
(15, 5, 'en', 'Investigative committee of RA');

-- --------------------------------------------------------

--
-- Структура таблицы `agat_universal_text`
--

CREATE TABLE `agat_universal_text` (
  `id` int(10) UNSIGNED NOT NULL,
  `ww` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_universal_text`
--

INSERT INTO `agat_universal_text` (`id`, `ww`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(18, 0),
(19, 0),
(20, 0),
(21, 0),
(22, 0),
(23, 0),
(24, 0),
(25, 0),
(26, 0),
(27, 0),
(28, 0),
(29, 0),
(30, 0),
(31, 0),
(32, 0),
(33, 0),
(34, 0),
(35, 0),
(36, 0),
(37, 0),
(38, 0),
(39, 0),
(40, 0),
(41, 0),
(42, 0),
(43, 0),
(44, 0),
(45, 0),
(46, 0),
(47, 0),
(48, 0),
(49, 0),
(50, 0),
(51, 0),
(52, 0),
(53, 0),
(54, 0),
(55, 0),
(56, 0),
(57, 0),
(58, 0),
(59, 0),
(60, 0),
(61, 0),
(62, 0),
(63, 0),
(64, 0),
(65, 0),
(66, 0),
(67, 0),
(68, 0),
(69, 0),
(70, 0),
(71, 0),
(72, 0),
(73, 0),
(74, 0),
(75, 0),
(76, 0),
(77, 0),
(78, 0),
(79, 0),
(80, 0),
(81, 0),
(82, 0),
(83, 0),
(84, 0),
(85, 0),
(86, 0),
(87, 0),
(88, 0),
(89, 0),
(90, 0),
(91, 0),
(92, 0),
(93, 0),
(94, 0),
(95, 0),
(96, 0),
(97, 0),
(98, 0),
(99, 0),
(100, 0),
(101, 0),
(102, 0),
(103, 0),
(104, 0),
(105, 0),
(106, 0),
(107, 0),
(108, 0),
(109, 0),
(110, 0),
(111, 0),
(112, 0),
(113, 0),
(114, 0),
(115, 0),
(116, 0),
(117, 0),
(118, 0),
(119, 0),
(120, 0),
(121, 0),
(122, 0),
(123, 0),
(124, 0),
(125, 0),
(126, 0),
(127, 0),
(128, 0),
(129, 0),
(130, 0),
(131, 0),
(132, 0),
(133, 0),
(134, 0),
(135, 0),
(136, 0),
(137, 0),
(138, 0),
(139, 0),
(140, 0),
(141, 0),
(142, 0),
(143, 0),
(144, 0),
(145, 0),
(146, 0),
(147, 0),
(148, 0),
(149, 0),
(150, 0),
(151, 0),
(152, 0),
(153, 0),
(154, 0),
(155, 0),
(156, 0),
(157, 0),
(158, 0),
(159, 0),
(160, 0),
(161, 0),
(162, 0),
(163, 0),
(164, 0),
(165, 0),
(166, 0),
(167, 0),
(168, 0),
(169, 0),
(170, 0),
(171, 0),
(172, 0),
(173, 0),
(174, 0),
(175, 0),
(176, 0),
(177, 0),
(178, 0),
(179, 0),
(180, 0),
(181, 0),
(182, 0),
(183, 0),
(184, 0),
(185, 0),
(186, 0),
(187, 0),
(188, 0),
(189, 0),
(190, 0),
(191, 0),
(192, 0),
(193, 0),
(194, 0),
(195, 0),
(196, 0),
(197, 0),
(198, 0),
(199, 0),
(200, 0),
(201, 0),
(202, 0),
(203, 0),
(204, 0),
(205, 0),
(206, 0),
(207, 0),
(208, 0),
(209, 0),
(210, 0),
(211, 0),
(212, 0),
(213, 0),
(214, 0),
(215, 0),
(216, 0),
(217, 0),
(218, 0),
(219, 0),
(220, 0),
(221, 0),
(222, 0),
(223, 0),
(224, 0),
(225, 0),
(226, 0),
(227, 0),
(228, 0),
(229, 0),
(230, 0),
(231, 0),
(232, 0),
(233, 0),
(234, 0),
(235, 0),
(236, 0),
(237, 0),
(238, 0),
(239, 0),
(240, 0),
(241, 0),
(242, 0),
(243, 0),
(244, 0),
(245, 0),
(246, 0),
(247, 0),
(248, 0),
(249, 0),
(250, 0),
(251, 0),
(252, 0),
(253, 0),
(254, 0),
(255, 0),
(256, 0),
(257, 0),
(258, 0),
(259, 0),
(260, 0),
(261, 0),
(262, 0),
(263, 0),
(264, 0),
(265, 0),
(266, 0),
(267, 0),
(268, 0),
(269, 0),
(270, 0),
(271, 0),
(272, 0),
(273, 0),
(274, 0),
(275, 0),
(276, 0),
(277, 0),
(278, 0),
(279, 0),
(280, 0),
(281, 0),
(282, 0),
(283, 0),
(284, 0),
(285, 0),
(286, 0),
(287, 0),
(288, 0),
(289, 0),
(290, 0),
(291, 0),
(292, 0),
(293, 0),
(294, 0),
(295, 0),
(296, 0),
(297, 0),
(298, 0),
(299, 0),
(300, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `agat_universal_text_translations`
--

CREATE TABLE `agat_universal_text_translations` (
  `id` int(11) NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `iso_code` varchar(2) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `agat_universal_text_translations`
--

INSERT INTO `agat_universal_text_translations` (`id`, `parent_id`, `iso_code`, `content`) VALUES
(1, 1, 'hy', 'Գլխավոր'),
(2, 2, 'hy', 'Մեր մասին'),
(3, 3, 'hy', 'Գործընկերներ'),
(4, 4, 'hy', 'Ծառայություններ'),
(5, 5, 'hy', 'Պորտֆոլիո'),
(6, 6, 'hy', 'Հաշվետվություն'),
(7, 7, 'hy', 'Կապ'),
(8, 8, 'hy', 'ԱԳԱԹ-777'),
(9, 9, 'hy', 'ԱՄՐՈՒԹՅԱՆ և ՈՐԱԿԻ ԵՐԱՇԽԱՎՈՐ'),
(10, 10, 'hy', 'Ավելին...'),
(11, 11, 'hy', 'Վերջին աշխատանքները'),
(12, 12, 'hy', 'ՀՀ, ք. Երևան, Շիրակի փակուղի 4\nհեռ. 010 42-45-75\nֆաքս. 010 42-43-26\n'),
(13, 13, 'hy', 'Թեմա՝'),
(14, 14, 'hy', 'Անուն՝'),
(15, 15, 'hy', 'Հեռախոս՝'),
(16, 16, 'hy', 'Էլ հասցե՝'),
(17, 17, 'hy', 'Հաղորդագրություն՝'),
(18, 18, 'hy', 'Ուղարկել'),
(19, 19, 'hy', 'Մեր Գործընկերները'),
(20, 20, 'hy', 'Ընկերությունը համագործակցել և համագործակցում է բազմամյա փորձ ու միջազգային ճանաչում ստացած ընկերությունների հետ,որոնցից են`'),
(21, 21, 'hy', 'AGAT-777 ՍՊԸ-ն հիմնադրվել է 02.03.1997 թ-ին: Ընկերությանը պատկանում է 30000 ք.մ. հողատարածք, ինչպես նաեւ 8000 քմ ընդհանուր տարածք ունեցող կառույցների հատված ...'),
(22, 22, 'hy', 'Հաջողությամբ ուղարկվեց'),
(23, 23, 'hy', 'Հաղորդագրությունը չի կարող ուղարկվել'),
(24, 24, 'hy', 'Փոխել նկարը'),
(25, 25, 'hy', 'Լրացնել նկարի սիմվոլները'),
(26, 26, 'hy', 'Շինարարություն'),
(27, 27, 'hy', 'Նկարի տեքստը սխալ է'),
(28, 28, 'hy', ''),
(29, 29, 'hy', ''),
(30, 30, 'hy', ''),
(31, 31, 'hy', ''),
(32, 32, 'hy', ''),
(33, 33, 'hy', ''),
(34, 34, 'hy', ''),
(35, 35, 'hy', ''),
(36, 36, 'hy', ''),
(37, 37, 'hy', ''),
(38, 38, 'hy', ''),
(39, 39, 'hy', ''),
(40, 40, 'hy', ''),
(41, 41, 'hy', ''),
(42, 42, 'hy', ''),
(43, 43, 'hy', ''),
(44, 44, 'hy', ''),
(45, 45, 'hy', ''),
(46, 46, 'hy', ''),
(47, 47, 'hy', ''),
(48, 48, 'hy', ''),
(49, 49, 'hy', ''),
(50, 50, 'hy', ''),
(51, 51, 'hy', ''),
(52, 52, 'hy', ''),
(53, 53, 'hy', ''),
(54, 54, 'hy', ''),
(55, 55, 'hy', ''),
(56, 56, 'hy', ''),
(57, 57, 'hy', ''),
(58, 58, 'hy', ''),
(59, 59, 'hy', ''),
(60, 60, 'hy', ''),
(61, 61, 'hy', ''),
(62, 62, 'hy', ''),
(63, 63, 'hy', ''),
(64, 64, 'hy', ''),
(65, 65, 'hy', ''),
(66, 66, 'hy', ''),
(67, 67, 'hy', ''),
(68, 68, 'hy', ''),
(69, 69, 'hy', ''),
(70, 70, 'hy', ''),
(71, 71, 'hy', ''),
(72, 72, 'hy', ''),
(73, 73, 'hy', ''),
(74, 74, 'hy', ''),
(75, 75, 'hy', ''),
(76, 76, 'hy', ''),
(77, 77, 'hy', ''),
(78, 78, 'hy', ''),
(79, 79, 'hy', ''),
(80, 80, 'hy', ''),
(81, 81, 'hy', ''),
(82, 82, 'hy', ''),
(83, 83, 'hy', ''),
(84, 84, 'hy', ''),
(85, 85, 'hy', ''),
(86, 86, 'hy', ''),
(87, 87, 'hy', ''),
(88, 88, 'hy', ''),
(89, 89, 'hy', ''),
(90, 90, 'hy', ''),
(91, 91, 'hy', ''),
(92, 92, 'hy', ''),
(93, 93, 'hy', ''),
(94, 94, 'hy', ''),
(95, 95, 'hy', ''),
(96, 96, 'hy', ''),
(97, 97, 'hy', ''),
(98, 98, 'hy', ''),
(99, 99, 'hy', ''),
(100, 100, 'hy', ''),
(101, 101, 'hy', ''),
(102, 102, 'hy', ''),
(103, 103, 'hy', ''),
(104, 104, 'hy', ''),
(105, 105, 'hy', ''),
(106, 106, 'hy', ''),
(107, 107, 'hy', ''),
(108, 108, 'hy', ''),
(109, 109, 'hy', ''),
(110, 110, 'hy', ''),
(111, 111, 'hy', ''),
(112, 112, 'hy', ''),
(113, 113, 'hy', ''),
(114, 114, 'hy', ''),
(115, 115, 'hy', ''),
(116, 116, 'hy', ''),
(117, 117, 'hy', ''),
(118, 118, 'hy', ''),
(119, 119, 'hy', ''),
(120, 120, 'hy', ''),
(121, 121, 'hy', ''),
(122, 122, 'hy', ''),
(123, 123, 'hy', ''),
(124, 124, 'hy', ''),
(125, 125, 'hy', ''),
(126, 126, 'hy', ''),
(127, 127, 'hy', ''),
(128, 128, 'hy', ''),
(129, 129, 'hy', ''),
(130, 130, 'hy', ''),
(131, 131, 'hy', ''),
(132, 132, 'hy', ''),
(133, 133, 'hy', ''),
(134, 134, 'hy', ''),
(135, 135, 'hy', ''),
(136, 136, 'hy', ''),
(137, 137, 'hy', ''),
(138, 138, 'hy', ''),
(139, 139, 'hy', ''),
(140, 140, 'hy', ''),
(141, 141, 'hy', ''),
(142, 142, 'hy', ''),
(143, 143, 'hy', ''),
(144, 144, 'hy', ''),
(145, 145, 'hy', ''),
(146, 146, 'hy', ''),
(147, 147, 'hy', ''),
(148, 148, 'hy', ''),
(149, 149, 'hy', ''),
(150, 150, 'hy', ''),
(151, 151, 'hy', ''),
(152, 152, 'hy', ''),
(153, 153, 'hy', ''),
(154, 154, 'hy', ''),
(155, 155, 'hy', ''),
(156, 156, 'hy', ''),
(157, 157, 'hy', ''),
(158, 158, 'hy', ''),
(159, 159, 'hy', ''),
(160, 160, 'hy', ''),
(161, 161, 'hy', ''),
(162, 162, 'hy', ''),
(163, 163, 'hy', ''),
(164, 164, 'hy', ''),
(165, 165, 'hy', ''),
(166, 166, 'hy', ''),
(167, 167, 'hy', ''),
(168, 168, 'hy', ''),
(169, 169, 'hy', ''),
(170, 170, 'hy', ''),
(171, 171, 'hy', ''),
(172, 172, 'hy', ''),
(173, 173, 'hy', ''),
(174, 174, 'hy', ''),
(175, 175, 'hy', ''),
(176, 176, 'hy', ''),
(177, 177, 'hy', ''),
(178, 178, 'hy', ''),
(179, 179, 'hy', ''),
(180, 180, 'hy', ''),
(181, 181, 'hy', ''),
(182, 182, 'hy', ''),
(183, 183, 'hy', ''),
(184, 184, 'hy', ''),
(185, 185, 'hy', ''),
(186, 186, 'hy', ''),
(187, 187, 'hy', ''),
(188, 188, 'hy', ''),
(189, 189, 'hy', ''),
(190, 190, 'hy', ''),
(191, 191, 'hy', ''),
(192, 192, 'hy', ''),
(193, 193, 'hy', ''),
(194, 194, 'hy', ''),
(195, 195, 'hy', ''),
(196, 196, 'hy', ''),
(197, 197, 'hy', ''),
(198, 198, 'hy', ''),
(199, 199, 'hy', ''),
(200, 200, 'hy', ''),
(201, 201, 'hy', ''),
(202, 202, 'hy', ''),
(203, 203, 'hy', ''),
(204, 204, 'hy', ''),
(205, 205, 'hy', ''),
(206, 206, 'hy', ''),
(207, 207, 'hy', ''),
(208, 208, 'hy', ''),
(209, 209, 'hy', ''),
(210, 210, 'hy', ''),
(211, 211, 'hy', ''),
(212, 212, 'hy', ''),
(213, 213, 'hy', ''),
(214, 214, 'hy', ''),
(215, 215, 'hy', ''),
(216, 216, 'hy', ''),
(217, 217, 'hy', ''),
(218, 218, 'hy', ''),
(219, 219, 'hy', ''),
(220, 220, 'hy', ''),
(221, 221, 'hy', ''),
(222, 222, 'hy', ''),
(223, 223, 'hy', ''),
(224, 224, 'hy', ''),
(225, 225, 'hy', ''),
(226, 226, 'hy', ''),
(227, 227, 'hy', ''),
(228, 228, 'hy', ''),
(229, 229, 'hy', ''),
(230, 230, 'hy', ''),
(231, 231, 'hy', ''),
(232, 232, 'hy', ''),
(233, 233, 'hy', ''),
(234, 234, 'hy', ''),
(235, 235, 'hy', ''),
(236, 236, 'hy', ''),
(237, 237, 'hy', ''),
(238, 238, 'hy', ''),
(239, 239, 'hy', ''),
(240, 240, 'hy', ''),
(241, 241, 'hy', ''),
(242, 242, 'hy', ''),
(243, 243, 'hy', ''),
(244, 244, 'hy', ''),
(245, 245, 'hy', ''),
(246, 246, 'hy', ''),
(247, 247, 'hy', ''),
(248, 248, 'hy', ''),
(249, 249, 'hy', ''),
(250, 250, 'hy', ''),
(251, 251, 'hy', ''),
(252, 252, 'hy', ''),
(253, 253, 'hy', ''),
(254, 254, 'hy', ''),
(255, 255, 'hy', ''),
(256, 256, 'hy', ''),
(257, 257, 'hy', ''),
(258, 258, 'hy', ''),
(259, 259, 'hy', ''),
(260, 260, 'hy', ''),
(261, 261, 'hy', ''),
(262, 262, 'hy', ''),
(263, 263, 'hy', ''),
(264, 264, 'hy', ''),
(265, 265, 'hy', ''),
(266, 266, 'hy', ''),
(267, 267, 'hy', ''),
(268, 268, 'hy', ''),
(269, 269, 'hy', ''),
(270, 270, 'hy', ''),
(271, 271, 'hy', ''),
(272, 272, 'hy', ''),
(273, 273, 'hy', ''),
(274, 274, 'hy', ''),
(275, 275, 'hy', ''),
(276, 276, 'hy', ''),
(277, 277, 'hy', ''),
(278, 278, 'hy', ''),
(279, 279, 'hy', ''),
(280, 280, 'hy', ''),
(281, 281, 'hy', ''),
(282, 282, 'hy', ''),
(283, 283, 'hy', ''),
(284, 284, 'hy', ''),
(285, 285, 'hy', ''),
(286, 286, 'hy', ''),
(287, 287, 'hy', ''),
(288, 288, 'hy', ''),
(289, 289, 'hy', ''),
(290, 290, 'hy', ''),
(291, 291, 'hy', ''),
(292, 292, 'hy', ''),
(293, 293, 'hy', ''),
(294, 294, 'hy', ''),
(295, 295, 'hy', ''),
(296, 296, 'hy', ''),
(297, 297, 'hy', ''),
(298, 298, 'hy', ''),
(299, 299, 'hy', ''),
(300, 300, 'hy', ''),
(301, 1, 'ru', 'Главная'),
(302, 2, 'ru', 'О нас'),
(303, 3, 'ru', 'Партнеры'),
(304, 4, 'ru', 'Службы'),
(305, 5, 'ru', 'Портфолио'),
(306, 6, 'ru', 'Отчет'),
(307, 7, 'ru', 'Контакты'),
(308, 8, 'ru', 'АГАТ-777'),
(309, 9, 'ru', 'ГАРАНТИЯ ПРОЧНОСТИ И КАЧЕСТВА'),
(310, 10, 'ru', 'Далее...'),
(311, 11, 'ru', 'Последние работы'),
(312, 12, 'ru', 'РА, г. Ереван, 4-й переулок Ширак\nтел. 010 42-45-75\nфакс. 010 42-43-26'),
(313, 13, 'ru', 'Тема:'),
(314, 14, 'ru', 'Имя:'),
(315, 15, 'ru', 'Телефон:'),
(316, 16, 'ru', 'Эл. почта:'),
(317, 17, 'ru', 'Сообщение:'),
(318, 18, 'ru', 'Отправить'),
(319, 19, 'ru', 'Наши Партнеры'),
(320, 20, 'ru', 'AGAT-777 LLC collaborates with many well-known local and foreign companies:'),
(321, 21, 'ru', 'ООО «АГАТ-777» создано 02.03.1997. Компания владеет земельным участком площадью 30000 кв. М, а также секцией сооружений общей площадью 8000 кв. М.'),
(322, 22, 'ru', 'Успешно отправлено'),
(323, 23, 'ru', 'Сообщение не может быть отправленно.'),
(324, 24, 'ru', 'Изменить изображение'),
(325, 25, 'ru', 'Заполните символы изображения'),
(326, 26, 'ru', 'Строительство'),
(327, 27, 'ru', 'Неправильный текст с картинки'),
(328, 28, 'ru', ''),
(329, 29, 'ru', ''),
(330, 30, 'ru', ''),
(331, 31, 'ru', ''),
(332, 32, 'ru', ''),
(333, 33, 'ru', ''),
(334, 34, 'ru', ''),
(335, 35, 'ru', ''),
(336, 36, 'ru', ''),
(337, 37, 'ru', ''),
(338, 38, 'ru', ''),
(339, 39, 'ru', ''),
(340, 40, 'ru', ''),
(341, 41, 'ru', ''),
(342, 42, 'ru', ''),
(343, 43, 'ru', ''),
(344, 44, 'ru', ''),
(345, 45, 'ru', ''),
(346, 46, 'ru', ''),
(347, 47, 'ru', ''),
(348, 48, 'ru', ''),
(349, 49, 'ru', ''),
(350, 50, 'ru', ''),
(351, 51, 'ru', ''),
(352, 52, 'ru', ''),
(353, 53, 'ru', ''),
(354, 54, 'ru', ''),
(355, 55, 'ru', ''),
(356, 56, 'ru', ''),
(357, 57, 'ru', ''),
(358, 58, 'ru', ''),
(359, 59, 'ru', ''),
(360, 60, 'ru', ''),
(361, 61, 'ru', ''),
(362, 62, 'ru', ''),
(363, 63, 'ru', ''),
(364, 64, 'ru', ''),
(365, 65, 'ru', ''),
(366, 66, 'ru', ''),
(367, 67, 'ru', ''),
(368, 68, 'ru', ''),
(369, 69, 'ru', ''),
(370, 70, 'ru', ''),
(371, 71, 'ru', ''),
(372, 72, 'ru', ''),
(373, 73, 'ru', ''),
(374, 74, 'ru', ''),
(375, 75, 'ru', ''),
(376, 76, 'ru', ''),
(377, 77, 'ru', ''),
(378, 78, 'ru', ''),
(379, 79, 'ru', ''),
(380, 80, 'ru', ''),
(381, 81, 'ru', ''),
(382, 82, 'ru', ''),
(383, 83, 'ru', ''),
(384, 84, 'ru', ''),
(385, 85, 'ru', ''),
(386, 86, 'ru', ''),
(387, 87, 'ru', ''),
(388, 88, 'ru', ''),
(389, 89, 'ru', ''),
(390, 90, 'ru', ''),
(391, 91, 'ru', ''),
(392, 92, 'ru', ''),
(393, 93, 'ru', ''),
(394, 94, 'ru', ''),
(395, 95, 'ru', ''),
(396, 96, 'ru', ''),
(397, 97, 'ru', ''),
(398, 98, 'ru', ''),
(399, 99, 'ru', ''),
(400, 100, 'ru', ''),
(401, 101, 'ru', ''),
(402, 102, 'ru', ''),
(403, 103, 'ru', ''),
(404, 104, 'ru', ''),
(405, 105, 'ru', ''),
(406, 106, 'ru', ''),
(407, 107, 'ru', ''),
(408, 108, 'ru', ''),
(409, 109, 'ru', ''),
(410, 110, 'ru', ''),
(411, 111, 'ru', ''),
(412, 112, 'ru', ''),
(413, 113, 'ru', ''),
(414, 114, 'ru', ''),
(415, 115, 'ru', ''),
(416, 116, 'ru', ''),
(417, 117, 'ru', ''),
(418, 118, 'ru', ''),
(419, 119, 'ru', ''),
(420, 120, 'ru', ''),
(421, 121, 'ru', ''),
(422, 122, 'ru', ''),
(423, 123, 'ru', ''),
(424, 124, 'ru', ''),
(425, 125, 'ru', ''),
(426, 126, 'ru', ''),
(427, 127, 'ru', ''),
(428, 128, 'ru', ''),
(429, 129, 'ru', ''),
(430, 130, 'ru', ''),
(431, 131, 'ru', ''),
(432, 132, 'ru', ''),
(433, 133, 'ru', ''),
(434, 134, 'ru', ''),
(435, 135, 'ru', ''),
(436, 136, 'ru', ''),
(437, 137, 'ru', ''),
(438, 138, 'ru', ''),
(439, 139, 'ru', ''),
(440, 140, 'ru', ''),
(441, 141, 'ru', ''),
(442, 142, 'ru', ''),
(443, 143, 'ru', ''),
(444, 144, 'ru', ''),
(445, 145, 'ru', ''),
(446, 146, 'ru', ''),
(447, 147, 'ru', ''),
(448, 148, 'ru', ''),
(449, 149, 'ru', ''),
(450, 150, 'ru', ''),
(451, 151, 'ru', ''),
(452, 152, 'ru', ''),
(453, 153, 'ru', ''),
(454, 154, 'ru', ''),
(455, 155, 'ru', ''),
(456, 156, 'ru', ''),
(457, 157, 'ru', ''),
(458, 158, 'ru', ''),
(459, 159, 'ru', ''),
(460, 160, 'ru', ''),
(461, 161, 'ru', ''),
(462, 162, 'ru', ''),
(463, 163, 'ru', ''),
(464, 164, 'ru', ''),
(465, 165, 'ru', ''),
(466, 166, 'ru', ''),
(467, 167, 'ru', ''),
(468, 168, 'ru', ''),
(469, 169, 'ru', ''),
(470, 170, 'ru', ''),
(471, 171, 'ru', ''),
(472, 172, 'ru', ''),
(473, 173, 'ru', ''),
(474, 174, 'ru', ''),
(475, 175, 'ru', ''),
(476, 176, 'ru', ''),
(477, 177, 'ru', ''),
(478, 178, 'ru', ''),
(479, 179, 'ru', ''),
(480, 180, 'ru', ''),
(481, 181, 'ru', ''),
(482, 182, 'ru', ''),
(483, 183, 'ru', ''),
(484, 184, 'ru', ''),
(485, 185, 'ru', ''),
(486, 186, 'ru', ''),
(487, 187, 'ru', ''),
(488, 188, 'ru', ''),
(489, 189, 'ru', ''),
(490, 190, 'ru', ''),
(491, 191, 'ru', ''),
(492, 192, 'ru', ''),
(493, 193, 'ru', ''),
(494, 194, 'ru', ''),
(495, 195, 'ru', ''),
(496, 196, 'ru', ''),
(497, 197, 'ru', ''),
(498, 198, 'ru', ''),
(499, 199, 'ru', ''),
(500, 200, 'ru', ''),
(501, 201, 'ru', ''),
(502, 202, 'ru', ''),
(503, 203, 'ru', ''),
(504, 204, 'ru', ''),
(505, 205, 'ru', ''),
(506, 206, 'ru', ''),
(507, 207, 'ru', ''),
(508, 208, 'ru', ''),
(509, 209, 'ru', ''),
(510, 210, 'ru', ''),
(511, 211, 'ru', ''),
(512, 212, 'ru', ''),
(513, 213, 'ru', ''),
(514, 214, 'ru', ''),
(515, 215, 'ru', ''),
(516, 216, 'ru', ''),
(517, 217, 'ru', ''),
(518, 218, 'ru', ''),
(519, 219, 'ru', ''),
(520, 220, 'ru', ''),
(521, 221, 'ru', ''),
(522, 222, 'ru', ''),
(523, 223, 'ru', ''),
(524, 224, 'ru', ''),
(525, 225, 'ru', ''),
(526, 226, 'ru', ''),
(527, 227, 'ru', ''),
(528, 228, 'ru', ''),
(529, 229, 'ru', ''),
(530, 230, 'ru', ''),
(531, 231, 'ru', ''),
(532, 232, 'ru', ''),
(533, 233, 'ru', ''),
(534, 234, 'ru', ''),
(535, 235, 'ru', ''),
(536, 236, 'ru', ''),
(537, 237, 'ru', ''),
(538, 238, 'ru', ''),
(539, 239, 'ru', ''),
(540, 240, 'ru', ''),
(541, 241, 'ru', ''),
(542, 242, 'ru', ''),
(543, 243, 'ru', ''),
(544, 244, 'ru', ''),
(545, 245, 'ru', ''),
(546, 246, 'ru', ''),
(547, 247, 'ru', ''),
(548, 248, 'ru', ''),
(549, 249, 'ru', ''),
(550, 250, 'ru', ''),
(551, 251, 'ru', ''),
(552, 252, 'ru', ''),
(553, 253, 'ru', ''),
(554, 254, 'ru', ''),
(555, 255, 'ru', ''),
(556, 256, 'ru', ''),
(557, 257, 'ru', ''),
(558, 258, 'ru', ''),
(559, 259, 'ru', ''),
(560, 260, 'ru', ''),
(561, 261, 'ru', ''),
(562, 262, 'ru', ''),
(563, 263, 'ru', ''),
(564, 264, 'ru', ''),
(565, 265, 'ru', ''),
(566, 266, 'ru', ''),
(567, 267, 'ru', ''),
(568, 268, 'ru', ''),
(569, 269, 'ru', ''),
(570, 270, 'ru', ''),
(571, 271, 'ru', ''),
(572, 272, 'ru', ''),
(573, 273, 'ru', ''),
(574, 274, 'ru', ''),
(575, 275, 'ru', ''),
(576, 276, 'ru', ''),
(577, 277, 'ru', ''),
(578, 278, 'ru', ''),
(579, 279, 'ru', ''),
(580, 280, 'ru', ''),
(581, 281, 'ru', ''),
(582, 282, 'ru', ''),
(583, 283, 'ru', ''),
(584, 284, 'ru', ''),
(585, 285, 'ru', ''),
(586, 286, 'ru', ''),
(587, 287, 'ru', ''),
(588, 288, 'ru', ''),
(589, 289, 'ru', ''),
(590, 290, 'ru', ''),
(591, 291, 'ru', ''),
(592, 292, 'ru', ''),
(593, 293, 'ru', ''),
(594, 294, 'ru', ''),
(595, 295, 'ru', ''),
(596, 296, 'ru', ''),
(597, 297, 'ru', ''),
(598, 298, 'ru', ''),
(599, 299, 'ru', ''),
(600, 300, 'ru', ''),
(601, 1, 'en', 'Home'),
(602, 2, 'en', 'About us'),
(603, 3, 'en', 'Partners'),
(604, 4, 'en', 'Services'),
(605, 5, 'en', 'Portfolio'),
(606, 6, 'en', 'Report'),
(607, 7, 'en', 'Contacts'),
(608, 8, 'en', 'AGAT-777'),
(609, 9, 'en', 'WARRANTY OF STRENGTH AND QUALITY'),
(610, 10, 'en', 'More...'),
(611, 11, 'en', 'Last works'),
(612, 12, 'en', 'RA, Yerevan, 4-th deadend Shirak\ntel. 010 42-45-75\nfax. 010 42-43-26'),
(613, 13, 'en', 'Subject:'),
(614, 14, 'en', 'Name:'),
(615, 15, 'en', 'Phone:'),
(616, 16, 'en', 'Email:'),
(617, 17, 'en', 'Message:'),
(618, 18, 'en', 'Send'),
(619, 19, 'en', 'Our Partners'),
(620, 20, 'en', 'AGAT-777 LLC collaborates with many well-known local and foreign companies:'),
(621, 21, 'en', 'AGAT-777 LLC was established in 02.03.1997 .  The company owns land area of 30000 sq.m, and also a section of structures with total area of 8000 sq.m...'),
(622, 22, 'en', 'Successfully sent'),
(623, 23, 'en', 'Message can not be sent'),
(624, 24, 'en', 'Change the picture'),
(625, 25, 'en', 'Complete the picture''s symbols'),
(626, 26, 'en', 'Construction'),
(627, 27, 'en', 'Wrong text from image'),
(628, 28, 'en', ''),
(629, 29, 'en', ''),
(630, 30, 'en', ''),
(631, 31, 'en', ''),
(632, 32, 'en', ''),
(633, 33, 'en', ''),
(634, 34, 'en', ''),
(635, 35, 'en', ''),
(636, 36, 'en', ''),
(637, 37, 'en', ''),
(638, 38, 'en', ''),
(639, 39, 'en', ''),
(640, 40, 'en', ''),
(641, 41, 'en', ''),
(642, 42, 'en', ''),
(643, 43, 'en', ''),
(644, 44, 'en', ''),
(645, 45, 'en', ''),
(646, 46, 'en', ''),
(647, 47, 'en', ''),
(648, 48, 'en', ''),
(649, 49, 'en', ''),
(650, 50, 'en', ''),
(651, 51, 'en', ''),
(652, 52, 'en', ''),
(653, 53, 'en', ''),
(654, 54, 'en', ''),
(655, 55, 'en', ''),
(656, 56, 'en', ''),
(657, 57, 'en', ''),
(658, 58, 'en', ''),
(659, 59, 'en', ''),
(660, 60, 'en', ''),
(661, 61, 'en', ''),
(662, 62, 'en', ''),
(663, 63, 'en', ''),
(664, 64, 'en', ''),
(665, 65, 'en', ''),
(666, 66, 'en', ''),
(667, 67, 'en', ''),
(668, 68, 'en', ''),
(669, 69, 'en', ''),
(670, 70, 'en', ''),
(671, 71, 'en', ''),
(672, 72, 'en', ''),
(673, 73, 'en', ''),
(674, 74, 'en', ''),
(675, 75, 'en', ''),
(676, 76, 'en', ''),
(677, 77, 'en', ''),
(678, 78, 'en', ''),
(679, 79, 'en', ''),
(680, 80, 'en', ''),
(681, 81, 'en', ''),
(682, 82, 'en', ''),
(683, 83, 'en', ''),
(684, 84, 'en', ''),
(685, 85, 'en', ''),
(686, 86, 'en', ''),
(687, 87, 'en', ''),
(688, 88, 'en', ''),
(689, 89, 'en', ''),
(690, 90, 'en', ''),
(691, 91, 'en', ''),
(692, 92, 'en', ''),
(693, 93, 'en', ''),
(694, 94, 'en', ''),
(695, 95, 'en', ''),
(696, 96, 'en', ''),
(697, 97, 'en', ''),
(698, 98, 'en', ''),
(699, 99, 'en', ''),
(700, 100, 'en', ''),
(701, 101, 'en', ''),
(702, 102, 'en', ''),
(703, 103, 'en', ''),
(704, 104, 'en', ''),
(705, 105, 'en', ''),
(706, 106, 'en', ''),
(707, 107, 'en', ''),
(708, 108, 'en', ''),
(709, 109, 'en', ''),
(710, 110, 'en', ''),
(711, 111, 'en', ''),
(712, 112, 'en', ''),
(713, 113, 'en', ''),
(714, 114, 'en', ''),
(715, 115, 'en', ''),
(716, 116, 'en', ''),
(717, 117, 'en', ''),
(718, 118, 'en', ''),
(719, 119, 'en', ''),
(720, 120, 'en', ''),
(721, 121, 'en', ''),
(722, 122, 'en', ''),
(723, 123, 'en', ''),
(724, 124, 'en', ''),
(725, 125, 'en', ''),
(726, 126, 'en', ''),
(727, 127, 'en', ''),
(728, 128, 'en', ''),
(729, 129, 'en', ''),
(730, 130, 'en', ''),
(731, 131, 'en', ''),
(732, 132, 'en', ''),
(733, 133, 'en', ''),
(734, 134, 'en', ''),
(735, 135, 'en', ''),
(736, 136, 'en', ''),
(737, 137, 'en', ''),
(738, 138, 'en', ''),
(739, 139, 'en', ''),
(740, 140, 'en', ''),
(741, 141, 'en', ''),
(742, 142, 'en', ''),
(743, 143, 'en', ''),
(744, 144, 'en', ''),
(745, 145, 'en', ''),
(746, 146, 'en', ''),
(747, 147, 'en', ''),
(748, 148, 'en', ''),
(749, 149, 'en', ''),
(750, 150, 'en', ''),
(751, 151, 'en', ''),
(752, 152, 'en', ''),
(753, 153, 'en', ''),
(754, 154, 'en', ''),
(755, 155, 'en', ''),
(756, 156, 'en', ''),
(757, 157, 'en', ''),
(758, 158, 'en', ''),
(759, 159, 'en', ''),
(760, 160, 'en', ''),
(761, 161, 'en', ''),
(762, 162, 'en', ''),
(763, 163, 'en', ''),
(764, 164, 'en', ''),
(765, 165, 'en', ''),
(766, 166, 'en', ''),
(767, 167, 'en', ''),
(768, 168, 'en', ''),
(769, 169, 'en', ''),
(770, 170, 'en', ''),
(771, 171, 'en', ''),
(772, 172, 'en', ''),
(773, 173, 'en', ''),
(774, 174, 'en', ''),
(775, 175, 'en', ''),
(776, 176, 'en', ''),
(777, 177, 'en', ''),
(778, 178, 'en', ''),
(779, 179, 'en', ''),
(780, 180, 'en', ''),
(781, 181, 'en', ''),
(782, 182, 'en', ''),
(783, 183, 'en', ''),
(784, 184, 'en', ''),
(785, 185, 'en', ''),
(786, 186, 'en', ''),
(787, 187, 'en', ''),
(788, 188, 'en', ''),
(789, 189, 'en', ''),
(790, 190, 'en', ''),
(791, 191, 'en', ''),
(792, 192, 'en', ''),
(793, 193, 'en', ''),
(794, 194, 'en', ''),
(795, 195, 'en', ''),
(796, 196, 'en', ''),
(797, 197, 'en', ''),
(798, 198, 'en', ''),
(799, 199, 'en', ''),
(800, 200, 'en', ''),
(801, 201, 'en', ''),
(802, 202, 'en', ''),
(803, 203, 'en', ''),
(804, 204, 'en', ''),
(805, 205, 'en', ''),
(806, 206, 'en', ''),
(807, 207, 'en', ''),
(808, 208, 'en', ''),
(809, 209, 'en', ''),
(810, 210, 'en', ''),
(811, 211, 'en', ''),
(812, 212, 'en', ''),
(813, 213, 'en', ''),
(814, 214, 'en', ''),
(815, 215, 'en', ''),
(816, 216, 'en', ''),
(817, 217, 'en', ''),
(818, 218, 'en', ''),
(819, 219, 'en', ''),
(820, 220, 'en', ''),
(821, 221, 'en', ''),
(822, 222, 'en', ''),
(823, 223, 'en', ''),
(824, 224, 'en', ''),
(825, 225, 'en', ''),
(826, 226, 'en', ''),
(827, 227, 'en', ''),
(828, 228, 'en', ''),
(829, 229, 'en', ''),
(830, 230, 'en', ''),
(831, 231, 'en', ''),
(832, 232, 'en', ''),
(833, 233, 'en', ''),
(834, 234, 'en', ''),
(835, 235, 'en', ''),
(836, 236, 'en', ''),
(837, 237, 'en', ''),
(838, 238, 'en', ''),
(839, 239, 'en', ''),
(840, 240, 'en', ''),
(841, 241, 'en', ''),
(842, 242, 'en', ''),
(843, 243, 'en', ''),
(844, 244, 'en', ''),
(845, 245, 'en', ''),
(846, 246, 'en', ''),
(847, 247, 'en', ''),
(848, 248, 'en', ''),
(849, 249, 'en', ''),
(850, 250, 'en', ''),
(851, 251, 'en', ''),
(852, 252, 'en', ''),
(853, 253, 'en', ''),
(854, 254, 'en', ''),
(855, 255, 'en', ''),
(856, 256, 'en', ''),
(857, 257, 'en', ''),
(858, 258, 'en', ''),
(859, 259, 'en', ''),
(860, 260, 'en', ''),
(861, 261, 'en', ''),
(862, 262, 'en', ''),
(863, 263, 'en', ''),
(864, 264, 'en', ''),
(865, 265, 'en', ''),
(866, 266, 'en', ''),
(867, 267, 'en', ''),
(868, 268, 'en', ''),
(869, 269, 'en', ''),
(870, 270, 'en', ''),
(871, 271, 'en', ''),
(872, 272, 'en', ''),
(873, 273, 'en', ''),
(874, 274, 'en', ''),
(875, 275, 'en', ''),
(876, 276, 'en', ''),
(877, 277, 'en', ''),
(878, 278, 'en', ''),
(879, 279, 'en', ''),
(880, 280, 'en', ''),
(881, 281, 'en', ''),
(882, 282, 'en', ''),
(883, 283, 'en', ''),
(884, 284, 'en', ''),
(885, 285, 'en', ''),
(886, 286, 'en', ''),
(887, 287, 'en', ''),
(888, 288, 'en', ''),
(889, 289, 'en', ''),
(890, 290, 'en', ''),
(891, 291, 'en', ''),
(892, 292, 'en', ''),
(893, 293, 'en', ''),
(894, 294, 'en', ''),
(895, 295, 'en', ''),
(896, 296, 'en', ''),
(897, 297, 'en', ''),
(898, 298, 'en', ''),
(899, 299, 'en', ''),
(900, 300, 'en', '');

-- --------------------------------------------------------

--
-- Структура таблицы `agat_users`
--

CREATE TABLE `agat_users` (
  `id` int(100) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `agat_users`
--

INSERT INTO `agat_users` (`id`, `username`, `pass`) VALUES
(1, 'admin', '$2y$10$wXg7FsyAZ7PYX1uGjXizOe2odZv9ySvxM/xfvgyL3yV3JRyz6lGA.');

-- --------------------------------------------------------

--
-- Структура таблицы `agat_youtube`
--

CREATE TABLE `agat_youtube` (
  `id` int(20) NOT NULL,
  `url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `agat_youtube`
--

INSERT INTO `agat_youtube` (`id`, `url`) VALUES
(1, 'hapAROu8yPc');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `agat_about_us`
--
ALTER TABLE `agat_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `agat_about_us_translations`
--
ALTER TABLE `agat_about_us_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agat_about_us_translations` (`parent_id`);

--
-- Индексы таблицы `agat_links`
--
ALTER TABLE `agat_links`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `agat_meta`
--
ALTER TABLE `agat_meta`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `agat_meta_translation`
--
ALTER TABLE `agat_meta_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agat_fk_metas_translation` (`parent_id`);

--
-- Индексы таблицы `agat_partner`
--
ALTER TABLE `agat_partner`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `agat_partner_translations`
--
ALTER TABLE `agat_partner_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agat_fk_patner_translations` (`parent_id`);

--
-- Индексы таблицы `agat_portfolio`
--
ALTER TABLE `agat_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `agat_portfolio_gallery`
--
ALTER TABLE `agat_portfolio_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agat_fk_portfolio_gallery` (`parent_id`);

--
-- Индексы таблицы `agat_portfolio_translations`
--
ALTER TABLE `agat_portfolio_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agat_fk_portfolio_translations` (`parent_id`);

--
-- Индексы таблицы `agat_report`
--
ALTER TABLE `agat_report`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `agat_services`
--
ALTER TABLE `agat_services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `agat_services_gallery`
--
ALTER TABLE `agat_services_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agat_fk_services_gallery` (`parent_id`);

--
-- Индексы таблицы `agat_services_translations`
--
ALTER TABLE `agat_services_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agat_fk_services_translations` (`parent_id`);

--
-- Индексы таблицы `agat_slider`
--
ALTER TABLE `agat_slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `agat_slider_translations`
--
ALTER TABLE `agat_slider_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agat_fk_slider_translations` (`parent_id`);

--
-- Индексы таблицы `agat_universal_text`
--
ALTER TABLE `agat_universal_text`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `agat_universal_text_translations`
--
ALTER TABLE `agat_universal_text_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agat_fk_translations_universal` (`parent_id`);

--
-- Индексы таблицы `agat_users`
--
ALTER TABLE `agat_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Индексы таблицы `agat_youtube`
--
ALTER TABLE `agat_youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `agat_about_us`
--
ALTER TABLE `agat_about_us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `agat_about_us_translations`
--
ALTER TABLE `agat_about_us_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `agat_links`
--
ALTER TABLE `agat_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `agat_meta`
--
ALTER TABLE `agat_meta`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `agat_meta_translation`
--
ALTER TABLE `agat_meta_translation`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблицы `agat_partner`
--
ALTER TABLE `agat_partner`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `agat_partner_translations`
--
ALTER TABLE `agat_partner_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `agat_portfolio`
--
ALTER TABLE `agat_portfolio`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `agat_portfolio_gallery`
--
ALTER TABLE `agat_portfolio_gallery`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `agat_portfolio_translations`
--
ALTER TABLE `agat_portfolio_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `agat_report`
--
ALTER TABLE `agat_report`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `agat_services`
--
ALTER TABLE `agat_services`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `agat_services_gallery`
--
ALTER TABLE `agat_services_gallery`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `agat_services_translations`
--
ALTER TABLE `agat_services_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT для таблицы `agat_slider`
--
ALTER TABLE `agat_slider`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `agat_slider_translations`
--
ALTER TABLE `agat_slider_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблицы `agat_universal_text`
--
ALTER TABLE `agat_universal_text`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;
--
-- AUTO_INCREMENT для таблицы `agat_universal_text_translations`
--
ALTER TABLE `agat_universal_text_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1501;
--
-- AUTO_INCREMENT для таблицы `agat_users`
--
ALTER TABLE `agat_users`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `agat_youtube`
--
ALTER TABLE `agat_youtube`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `agat_about_us_translations`
--
ALTER TABLE `agat_about_us_translations`
  ADD CONSTRAINT `agat_about_us_translations` FOREIGN KEY (`parent_id`) REFERENCES `agat_about_us` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `agat_meta_translation`
--
ALTER TABLE `agat_meta_translation`
  ADD CONSTRAINT `agat_fk_metas_translation` FOREIGN KEY (`parent_id`) REFERENCES `agat_meta` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `agat_partner_translations`
--
ALTER TABLE `agat_partner_translations`
  ADD CONSTRAINT `agat_fk_partner_translations` FOREIGN KEY (`parent_id`) REFERENCES `agat_partner` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `agat_portfolio_gallery`
--
ALTER TABLE `agat_portfolio_gallery`
  ADD CONSTRAINT `agat_fk_portfolio_gallery` FOREIGN KEY (`parent_id`) REFERENCES `agat_portfolio` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `agat_portfolio_translations`
--
ALTER TABLE `agat_portfolio_translations`
  ADD CONSTRAINT `agat_fk_portfolio_translations` FOREIGN KEY (`parent_id`) REFERENCES `agat_portfolio` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `agat_services_gallery`
--
ALTER TABLE `agat_services_gallery`
  ADD CONSTRAINT `agat_fk_services_gallery` FOREIGN KEY (`parent_id`) REFERENCES `agat_services` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `agat_services_translations`
--
ALTER TABLE `agat_services_translations`
  ADD CONSTRAINT `agat_fk_services_translations` FOREIGN KEY (`parent_id`) REFERENCES `agat_services` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `agat_slider_translations`
--
ALTER TABLE `agat_slider_translations`
  ADD CONSTRAINT `agat_fk_slider_translations` FOREIGN KEY (`parent_id`) REFERENCES `agat_slider` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `agat_universal_text_translations`
--
ALTER TABLE `agat_universal_text_translations`
  ADD CONSTRAINT `agat_fk_translations_universal` FOREIGN KEY (`parent_id`) REFERENCES `agat_universal_text` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

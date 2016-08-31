-- phpMyAdmin SQL Dump
-- version 2.11.11
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Středa 24. listopadu 2010, 16:26
-- Verze MySQL: 5.0.91
-- Verze PHP: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Databáze: `upravuj_mysoftware_cz`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `docs`
--

CREATE TABLE IF NOT EXISTS `docs` (
  `id` int(11) NOT NULL auto_increment,
  `titulek` varchar(100) NOT NULL,
  `typ_souboru` varchar(100) NOT NULL,
  `nazev_souboru` varchar(250) NOT NULL,
  `vyveseno_od` date default NULL,
  `nadrazene_menu` int(11) default NULL,
  `nadrazeny_clanek` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Vypisuji data pro tabulku `docs`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id` int(11) NOT NULL auto_increment,
  `titulek` varchar(100) character set cp1250 collate cp1250_czech_cs NOT NULL,
  `nazev_slozky` varchar(250) character set cp1250 collate cp1250_czech_cs NOT NULL,
  `nadrazene_menu` int(11) default NULL,
  `nadrazeny_clanek` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Vypisuji data pro tabulku `foto`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL auto_increment,
  `nazev` varchar(255) NOT NULL,
  `nazev_url` varchar(55) NOT NULL,
  `obsah` longtext NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Vypisuji data pro tabulku `menu`
--

INSERT INTO `menu` (`id`, `nazev`, `nazev_url`, `obsah`) VALUES
(1, 'Domů', 'domu', '<div style="float: left; width: 490px; padding: 10px">\r\n\r\n<h2>Aenean laoreet</h2>\r\n<p>Tincidunt ac pede nonummy faucibus et quam libero lobortis In tortor. Pellentesque dapibus porttitor augue egestas Curabitur vitae ligula Lorem sapien est. Pretium nibh consequat ipsum elit sem augue vitae nunc velit id. Lacinia semper adipiscing wisi interdum vel laoreet egestas tincidunt wisi ac. Odio leo In est accumsan dui et ac neque amet convallis. Ac est malesuada.</p>\r\n<h3>Aenean laoreet</h3>\r\n<p>Tincidunt ac pede nonummy faucibus et quam libero lobortis In tortor. Pellentesque dapibus porttitor augue egestas Curabitur vitae ligula Lorem sapien est. Pretium nibh consequat ipsum elit sem augue vitae nunc velit id. Lacinia semper adipiscing wisi interdum vel laoreet egestas tincidunt wisi ac. Odio leo In est accumsan dui et ac neque amet convallis. Ac est malesuada.</p>\r\n<h3>Aenean laoreet</h3>\r\n<p>Tincidunt ac pede nonummy faucibus et quam libero lobortis In tortor. Pellentesque dapibus porttitor augue egestas Curabitur vitae ligula Lorem sapien est. Pretium nibh consequat ipsum elit sem augue vitae nunc velit id. Lacinia semper adipiscing wisi interdum vel laoreet egestas tincidunt wisi ac. Odio leo In est accumsan dui et ac neque amet convallis. Ac est malesuada.</p>\r\n\r\n</div>\r\n\r\n\r\n<object width="425" height="344"  style="float: right;  width: 425px; margin-right: 20px;"><param name="movie" value="http://www.youtube.com/v/t_V755CpxGU?fs=1&amp;hl=cs_CZ&amp;color1=0x2b405b&amp;color2=0x6b8ab6"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/t_V755CpxGU?fs=1&amp;hl=cs_CZ&amp;color1=0x2b405b&amp;color2=0x6b8ab6" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="344"></embed></object>\r\n\r\n<hr class="cistic">\r\n'),
(2, 'Reference', 'reference', '<p>Lorem ipsum dolor sit amet consectetuer Aenean laoreet netus fringilla ante. Elit turpis ut mattis eros pellentesque et lacus volutpat amet lacus. Sagittis Proin vestibulum elit gravida Nam nibh ac fames Sed quis. Rutrum pretium pede at sed magnis fames dui sodales dolor semper. Et et sed convallis natoque Donec Duis elit congue orci pharetra. Tincidunt Nam hendrerit volutpat dolor Nam leo fermentum.</p>\r\n<p>Tincidunt ac pede nonummy faucibus et quam libero lobortis In tortor. Pellentesque dapibus porttitor augue egestas Curabitur vitae ligula Lorem sapien est. Pretium nibh consequat ipsum elit sem augue vitae nunc velit id. Lacinia semper adipiscing wisi interdum vel laoreet egestas tincidunt wisi ac. Odio leo In est accumsan dui et ac neque amet convallis. Ac est malesuada.</p>\r\n<p>Ut at Phasellus Vestibulum laoreet feugiat sed vel Curabitur nunc justo. Vitae orci tortor wisi Curabitur nulla Proin lacus pellentesque tellus vitae. Consequat mattis eget Ut eget vitae ipsum Quisque turpis eget justo. Convallis augue Vestibulum Vestibulum pretium facilisi Vestibulum tincidunt justo nulla volutpat. Non a pellentesque condimentum elit tincidunt elit Vestibulum Suspendisse Proin Aliquam. </p>\r\n<p>Habitasse Pellentesque semper id mauris id consequat Donec vitae auctor metus. Et ullamcorper tempor Cum Nam lobortis metus eget Aenean nibh dignissim. Ullamcorper nibh nec vitae dictum habitant sagittis Pellentesque lacinia Vestibulum Phasellus. Orci Nulla elit et nibh nibh orci In faucibus Duis tristique. Diam dui sit magnis nec Vestibulum at nascetur dui tempus pede. Lorem pede at laoreet.</p>\r\n'),
(3, 'Životopis', 'zivotopis', '<p>Lorem ipsum dolor sit amet consectetuer Aenean laoreet netus fringilla ante. Elit turpis ut mattis eros pellentesque et lacus volutpat amet lacus. Sagittis Proin vestibulum elit gravida Nam nibh ac fames Sed quis. Rutrum pretium pede at sed magnis fames dui sodales dolor semper. Et et sed convallis natoque Donec Duis elit congue orci pharetra. Tincidunt Nam hendrerit volutpat dolor Nam leo fermentum.</p>\r\n<p>Tincidunt ac pede nonummy faucibus et quam libero lobortis In tortor. Pellentesque dapibus porttitor augue egestas Curabitur vitae ligula Lorem sapien est. Pretium nibh consequat ipsum elit sem augue vitae nunc velit id. Lacinia semper adipiscing wisi interdum vel laoreet egestas tincidunt wisi ac. Odio leo In est accumsan dui et ac neque amet convallis. Ac est malesuada.</p>\r\n<p>Ut at Phasellus Vestibulum laoreet feugiat sed vel Curabitur nunc justo. Vitae orci tortor wisi Curabitur nulla Proin lacus pellentesque tellus vitae. Consequat mattis eget Ut eget vitae ipsum Quisque turpis eget justo. Convallis augue Vestibulum Vestibulum pretium facilisi Vestibulum tincidunt justo nulla volutpat. Non a pellentesque condimentum elit tincidunt elit Vestibulum Suspendisse Proin Aliquam. </p>\r\n<p>Habitasse Pellentesque semper id mauris id consequat Donec vitae auctor metus. Et ullamcorper tempor Cum Nam lobortis metus eget Aenean nibh dignissim. Ullamcorper nibh nec vitae dictum habitant sagittis Pellentesque lacinia Vestibulum Phasellus. Orci Nulla elit et nibh nibh orci In faucibus Duis tristique. Diam dui sit magnis nec Vestibulum at nascetur dui tempus pede. Lorem pede at laoreet.</p>\r\n'),
(4, 'Kontakt', 'kontakt', '<p>Lorem ipsum dolor sit amet consectetuer Aenean laoreet netus fringilla ante. Elit turpis ut mattis eros pellentesque et lacus volutpat amet lacus. Sagittis Proin vestibulum elit gravida Nam nibh ac fames Sed quis. Rutrum pretium pede at sed magnis fames dui sodales dolor semper. Et et sed convallis natoque Donec Duis elit congue orci pharetra. Tincidunt Nam hendrerit volutpat dolor Nam leo fermentum.</p>\r\n<p>Tincidunt ac pede nonummy faucibus et quam libero lobortis In tortor. Pellentesque dapibus porttitor augue egestas Curabitur vitae ligula Lorem sapien est. Pretium nibh consequat ipsum elit sem augue vitae nunc velit id. Lacinia semper adipiscing wisi interdum vel laoreet egestas tincidunt wisi ac. Odio leo In est accumsan dui et ac neque amet convallis. Ac est malesuada.</p>\r\n<p>Ut at Phasellus Vestibulum laoreet feugiat sed vel Curabitur nunc justo. Vitae orci tortor wisi Curabitur nulla Proin lacus pellentesque tellus vitae. Consequat mattis eget Ut eget vitae ipsum Quisque turpis eget justo. Convallis augue Vestibulum Vestibulum pretium facilisi Vestibulum tincidunt justo nulla volutpat. Non a pellentesque condimentum elit tincidunt elit Vestibulum Suspendisse Proin Aliquam. </p>\r\n<p>Habitasse Pellentesque semper id mauris id consequat Donec vitae auctor metus. Et ullamcorper tempor Cum Nam lobortis metus eget Aenean nibh dignissim. Ullamcorper nibh nec vitae dictum habitant sagittis Pellentesque lacinia Vestibulum Phasellus. Orci Nulla elit et nibh nibh orci In faucibus Duis tristique. Diam dui sit magnis nec Vestibulum at nascetur dui tempus pede. Lorem pede at laoreet.</p>\r\n');

-- --------------------------------------------------------

--
-- Struktura tabulky `stranky`
--

CREATE TABLE IF NOT EXISTS `stranky` (
  `id` int(11) NOT NULL auto_increment,
  `titulek` varchar(100) character set cp1250 collate cp1250_czech_cs NOT NULL,
  `url` varchar(100) character set cp1250 collate cp1250_czech_cs default NULL,
  `text_uvodni_strana` longtext character set cp1250 collate cp1250_czech_cs NOT NULL,
  `text_aktualita` longtext character set cp1250 collate cp1250_czech_cs NOT NULL,
  `clanek` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Vypisuji data pro tabulku `stranky`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'David Pavelka', 'pavelka1986@gmail.com', '874dec9b7278f1e86183d8dd73035a108d1b43c3', 'admin'),
(2, 'Miroslav Pavelka', 'pavelka.62@seznam.cz', 'e6fa4ee99123b50ad8fb86ed9dabcf50e92e913b', 'editor'),
(3, 'Jan Pavelka', 'pavelka.jan@seznam.cz', 'f87c76f6ff4f41fc5b5084079b75e14a636a1f31', 'editor'),
(4, 'Tomáš Nouza', 'nouza.tomas@centrum.cz', '486213ae60f66e5e6349e6a02c525facd4f52aab', 'registered'),
(12, 'Jiří Horčička', 'jirkahorcicka@seznam.cz', '237cac30bae2ef6d7b70e19982abd964b03cef40', 'admin');

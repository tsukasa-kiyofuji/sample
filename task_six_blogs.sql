﻿-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 〿〿〿: 127.0.0.1
-- 生成䈿㩦 ㈀　㈀㌀ⴀ㄀㈀ⴀ㈀㐀 　㌀㨀㌀㤀㨀㄀㌀਀ⴀⴀ 㼀㼰㼰渰㼰㼰㼰㼰㼰ᨰ‿㄀　⸀㐀⸀㈀㜀ⴀ䴀愀爀椀愀䐀䈀਀ⴀⴀ 倀䠀倀 渀㼰㼰㼰㼰㼰㨰 㠀⸀㈀⸀　਀਀匀䔀吀 匀儀䰀开䴀伀䐀䔀 㴀 ∀一伀开䄀唀吀伀开嘀䄀䰀唀䔀开伀一开娀䔀刀伀∀㬀਀匀吀䄀刀吀 吀刀䄀一匀䄀䌀吀䤀伀一㬀਀匀䔀吀 琀椀洀攀开稀漀渀攀 㴀 ∀⬀　　㨀　　∀㬀਀਀਀⼀⨀℀㐀　㄀　㄀ 匀䔀吀 䀀伀䰀䐀开䌀䠀䄀刀䄀䌀吀䔀刀开匀䔀吀开䌀䰀䤀䔀一吀㴀䀀䀀䌀䠀䄀刀䄀䌀吀䔀刀开匀䔀吀开䌀䰀䤀䔀一吀 ⨀⼀㬀਀⼀⨀℀㐀　㄀　㄀ 匀䔀吀 䀀伀䰀䐀开䌀䠀䄀刀䄀䌀吀䔀刀开匀䔀吀开刀䔀匀唀䰀吀匀㴀䀀䀀䌀䠀䄀刀䄀䌀吀䔀刀开匀䔀吀开刀䔀匀唀䰀吀匀 ⨀⼀㬀਀⼀⨀℀㐀　㄀　㄀ 匀䔀吀 䀀伀䰀䐀开䌀伀䰀䰀䄀吀䤀伀一开䌀伀一一䔀䌀吀䤀伀一㴀䀀䀀䌀伀䰀䰀䄀吀䤀伀一开䌀伀一一䔀䌀吀䤀伀一 ⨀⼀㬀਀⼀⨀℀㐀　㄀　㄀ 匀䔀吀 一䄀䴀䔀匀 甀琀昀㠀洀戀㐀 ⨀⼀㬀਀਀ⴀⴀ਀ⴀⴀ 㼀㼰㼰㼰㼰㼰㨰 怀琀愀猀欀开猀椀砀开戀氀漀最猀怀਀ⴀⴀ਀਀ⴀⴀ ⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀⴀ਀਀ⴀⴀ਀ⴀⴀ 㼀㼰㼰㼰渰㼰㼠 `blogs`
--

CREATE TABLE `blogs` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 〿〿〿〿の〿〿〿の〿〿〿 `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`) VALUES
(2, 'b', 'bbb'),
(3, 'c', 'ccc\r\n'),
(4, 'd', 'ddd'),
(7, 'e', 'eee'),
(11, 'f', 'fff'),
(12, 'a', 'aaa');

-- --------------------------------------------------------

--
-- 〿〿〿〿の‿‿怀甀猀攀爀猀怀਀ⴀⴀ਀਀䌀刀䔀䄀吀䔀 吀䄀䈀䰀䔀 怀甀猀攀爀猀怀 ⠀਀  怀椀搀怀 椀渀琀⠀㈀㔀㔀⤀ 一伀吀 一唀䰀䰀Ⰰ਀  怀攀洀愀椀氀怀 瘀愀爀挀栀愀爀⠀㈀㔀㔀⤀ 一伀吀 一唀䰀䰀Ⰰ਀  怀瀀愀猀猀眀漀爀搀怀 瘀愀爀挀栀愀爀⠀㈀㔀㔀⤀ 一伀吀 一唀䰀䰀Ⰰ਀  怀挀爀攀愀琀攀搀开愀琀怀 琀椀洀攀猀琀愀洀瀀 一伀吀 一唀䰀䰀 䐀䔀䘀䄀唀䰀吀 挀甀爀爀攀渀琀开琀椀洀攀猀琀愀洀瀀⠀⤀Ⰰ਀  怀甀瀀搀愀琀攀搀开愀琀怀 琀椀洀攀猀琀愀洀瀀 一伀吀 一唀䰀䰀 䐀䔀䘀䄀唀䰀吀 挀甀爀爀攀渀琀开琀椀洀攀猀琀愀洀瀀⠀⤀਀⤀ 䔀一䜀䤀一䔀㴀䤀渀渀漀䐀䈀 䐀䔀䘀䄀唀䰀吀 䌀䠀䄀刀匀䔀吀㴀甀琀昀㠀洀戀㐀 䌀伀䰀䰀䄀吀䔀㴀甀琀昀㠀洀戀㐀开最攀渀攀爀愀氀开挀椀㬀਀਀ⴀⴀ਀ⴀⴀ 㼀㼰㼰㼰渰㼰㼰㼰渰㼰㼰㼰‰怀甀猀攀爀猀怀਀ⴀⴀ਀਀䤀一匀䔀刀吀 䤀一吀伀 怀甀猀攀爀猀怀 ⠀怀椀搀怀Ⰰ 怀攀洀愀椀氀怀Ⰰ 怀瀀愀猀猀眀漀爀搀怀Ⰰ 怀挀爀攀愀琀攀搀开愀琀怀Ⰰ 怀甀瀀搀愀琀攀搀开愀琀怀⤀ 嘀䄀䰀唀䔀匀਀⠀㈀Ⰰ ✀琀猀甀欀愀猀愀㄀㄀㄀㄀㄀㄀䀀最洀愀椀氀⸀挀漀洀✀Ⰰ ✀␀㈀礀␀㄀　␀䴀猀栀焀　匀倀椀　唀吀䔀欀䐀倀䄀⸀䔀倀伀吀伀㌀倀洀欀眀吀㌀娀猀氀焀琀圀䤀瘀䰀愀䈀爀㐀樀䔀　洀夀戀椀挀䜀䰀㈀✀Ⰰ ✀㈀　㈀㌀ⴀ　㐀ⴀ　㤀 　㔀㨀　㈀㨀㌀㌀✀Ⰰ ✀㈀　㈀㌀ⴀ　㐀ⴀ　㤀 　㔀㨀　㈀㨀㌀㌀✀⤀Ⰰ਀⠀㜀Ⰰ ✀琀猀甀欀愀猀愀　㤀㄀㈀　㔀䀀最洀愀椀氀⸀挀漀洀✀Ⰰ ✀␀㈀礀␀㄀　␀㘀⼀䘀倀吀瘀爀欀匀䜀㔀搀琀㌀⸀䨀㜀眀吀挀稀甀吀㐀娀䘀挀⸀椀眀嘀爀椀匀㌀㈀唀㘀䴀渀㐀挀攀伀䤀堀㠀　儀㔀倀攀䜀✀Ⰰ ✀㈀　㈀㌀ⴀ　㐀ⴀ　㤀 　㔀㨀　㜀㨀　㈀✀Ⰰ ✀㈀　㈀㌀ⴀ　㐀ⴀ　㤀 　㔀㨀　㜀㨀　㈀✀⤀Ⰰ਀⠀㠀Ⰰ ✀琀猀甀欀愀猀愀⸀眀搀瀀爀漀䀀最洀愀椀氀⸀挀漀洀✀Ⰰ ✀␀㈀礀␀㄀　␀䄀眀䄀搀㠀刀㄀伀欀⸀㄀䠀䔀稀攀砀　䬀一愀䬀伀䘀䜀最昀愀圀匀欀愀吀䰀䘀㌀䌀最㔀䴀䄀㜀挀一圀㌀倀匀砀最栀洀㘀䌀✀Ⰰ ✀㈀　㈀㌀ⴀ㄀　ⴀ　㜀 　㤀㨀㌀㤀㨀　㘀✀Ⰰ ✀㈀　㈀㌀ⴀ㄀　ⴀ　㜀 　㤀㨀㌀㤀㨀　㘀✀⤀㬀਀਀ⴀⴀ਀ⴀⴀ 㼀㼰㼰地弰㼰㼰㼰㼰渰㼰㼰㼰㼰㼰㼰ਰⴀⴀ਀਀ⴀⴀ਀ⴀⴀ 㼀㼰㼰㼰渰㼰㼰㼰㼰㼰㼰‰怀戀氀漀最猀怀਀ⴀⴀ਀䄀䰀吀䔀刀 吀䄀䈀䰀䔀 怀戀氀漀最猀怀਀  䄀䐀䐀 倀刀䤀䴀䄀刀夀 䬀䔀夀 ⠀怀椀搀怀⤀㬀਀਀ⴀⴀ਀ⴀⴀ 㼀㼰㼰㼰渰㼰㼰㼰㼰㼰㼰‰怀甀猀攀爀猀怀਀ⴀⴀ਀䄀䰀吀䔀刀 吀䄀䈀䰀䔀 怀甀猀攀爀猀怀਀  䄀䐀䐀 倀刀䤀䴀䄀刀夀 䬀䔀夀 ⠀怀椀搀怀⤀㬀਀਀ⴀⴀ਀ⴀⴀ 㼀㼰㼰地弰㼰㼰㼰㼰渰‰䄀唀吀伀开䤀一䌀刀䔀䴀䔀一吀਀ⴀⴀ਀਀ⴀⴀ਀ⴀⴀ 㼀㼰㼰㼰渰‰䄀唀吀伀开䤀一䌀刀䔀䴀䔀一吀 怀戀氀漀最猀怀਀ⴀⴀ਀䄀䰀吀䔀刀 吀䄀䈀䰀䔀 怀戀氀漀最猀怀਀  䴀伀䐀䤀䘀夀 怀椀搀怀 椀渀琀⠀㈀㔀㔀⤀ 一伀吀 一唀䰀䰀 䄀唀吀伀开䤀一䌀刀䔀䴀䔀一吀Ⰰ 䄀唀吀伀开䤀一䌀刀䔀䴀䔀一吀㴀㄀㌀㬀਀਀ⴀⴀ਀ⴀⴀ 㼀㼰㼰㼰渰‰䄀唀吀伀开䤀一䌀刀䔀䴀䔀一吀 怀甀猀攀爀猀怀਀ⴀⴀ਀䄀䰀吀䔀刀 吀䄀䈀䰀䔀 怀甀猀攀爀猀怀਀  䴀伀䐀䤀䘀夀 怀椀搀怀 椀渀琀⠀㈀㔀㔀⤀ 一伀吀 一唀䰀䰀 䄀唀吀伀开䤀一䌀刀䔀䴀䔀一吀Ⰰ 䄀唀吀伀开䤀一䌀刀䔀䴀䔀一吀㴀㤀㬀਀䌀伀䴀䴀䤀吀㬀਀਀⼀⨀℀㐀　㄀　㄀ 匀䔀吀 䌀䠀䄀刀䄀䌀吀䔀刀开匀䔀吀开䌀䰀䤀䔀一吀㴀䀀伀䰀䐀开䌀䠀䄀刀䄀䌀吀䔀刀开匀䔀吀开䌀䰀䤀䔀一吀 ⨀⼀㬀਀⼀⨀℀㐀　㄀　㄀ 匀䔀吀 䌀䠀䄀刀䄀䌀吀䔀刀开匀䔀吀开刀䔀匀唀䰀吀匀㴀䀀伀䰀䐀开䌀䠀䄀刀䄀䌀吀䔀刀开匀䔀吀开刀䔀匀唀䰀吀匀 ⨀⼀㬀਀⼀⨀℀㐀　㄀　㄀ 匀䔀吀 䌀伀䰀䰀䄀吀䤀伀一开䌀伀一一䔀䌀吀䤀伀一㴀䀀伀䰀䐀开䌀伀䰀䰀䄀吀䤀伀一开䌀伀一一䔀䌀吀䤀伀一 ⨀⼀㬀਀
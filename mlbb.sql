-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 05:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlbb`
--

-- --------------------------------------------------------

--
-- Table structure for table `emblems`
--

CREATE TABLE `emblems` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `attribute_1` varchar(100) NOT NULL,
  `effect_1` varchar(100) NOT NULL,
  `attribute_2` varchar(100) NOT NULL,
  `effect_2` varchar(100) NOT NULL,
  `attribute_3` varchar(100) NOT NULL,
  `effect_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emblems`
--

INSERT INTO `emblems` (`id`, `name`, `attribute_1`, `effect_1`, `attribute_2`, `effect_2`, `attribute_3`, `effect_3`) VALUES
(1, 'Basic Common Emblem', 'Hybrid Regen', '12', 'HP', '275', 'Adaptive Attack', '22'),
(2, 'Custom Tank Emblem', 'HP', '500', 'Hybrid Defense', '10', 'HP Regen', '4'),
(3, 'Custom Assassin Emblem', 'Adaptive Penetration', '14', 'Adaptive Attack', '10', 'Movement Speed', '3%'),
(4, 'Custom Mage Emblem', 'Magic Power', '30', 'Cooldown Reduction', '5%', 'Magic Penetration', '8%'),
(5, 'Custom Fighter Emblem', 'Spell Vamp', '10%', 'Adaptive Attack', '22', 'Hybrid Defense', '6'),
(6, 'Custom Support Emblem', 'Heal Effect', '12%', 'Cooldown Reduction', '10%', 'Movement Speed', '6%'),
(7, 'Custom Marksman Emblem', 'Attack Speed', '15%', 'Adaptive Attack', '5%', 'Lifesteal', '5%');

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `primary_role` varchar(100) NOT NULL,
  `secondary_role` varchar(100) DEFAULT NULL,
  `win_rate` float NOT NULL,
  `popularity` float NOT NULL,
  `banned` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `name`, `title`, `primary_role`, `secondary_role`, `win_rate`, `popularity`, `banned`) VALUES
(1, 'Aamon', 'Duke of Shards', 'Assassin', '', 51.35, 0.59, 0.83),
(2, 'Akai', 'Panda Warrior', 'Tank', '', 48, 0.4, 0.2),
(3, 'Aldous', 'Soul Contractor', 'Fighter', '', 52.2, 1.31, 3.24),
(4, 'Alice', 'Queen of Blood', 'Mage', 'Tank', 50.67, 0.1, 0.07),
(5, 'Alpha', 'Blade of Enmity', 'Fighter', '', 50.36, 2.11, 4.9),
(6, 'Alucard', 'Demon Hunter', 'Fighter', 'Assassin', 49.08, 0.52, 0.22),
(7, 'Angela', 'Bunnylove', 'Support', '', 50.4, 1.56, 57.85),
(8, 'Argus', 'Dark Angel', 'Fighter', '', 53.96, 0.26, 0.2),
(9, 'Arlott', 'Lone Lancer', 'Fighter', 'Assassin', 50.11, 0.45, 3.07),
(10, 'Atlas', 'Ocean Gladiator', 'Tank', '', 51.07, 0.69, 3.86),
(11, 'Aulus', 'Warrior of Ferocity', 'Fighter', '', 52.39, 0.2, 0.13),
(12, 'Aurora', 'Frost Oracle', 'Mage', '', 47.28, 0.1, 0.06),
(13, 'Badang', 'Tribal Warrior', 'Fighter', '', 48.8, 0.65, 0.26),
(14, 'Balmond', 'Bloody Beast', 'Fighter', '', 44.2, 1.02, 0.3),
(15, 'Bane', 'Frozen King', 'Fighter', 'Mage', 51.51, 0.39, 0.13),
(16, 'Barats', 'Dino Rider', 'Tank', 'Fighter', 48.59, 0.08, 0.07),
(17, 'Baxia', 'Mystic Tortoise', 'Tank', '', 51.35, 0.21, 0.21),
(18, 'Beatrix', 'Dawnbreak Soldier', 'Marksman', '', 45.61, 0.65, 0.15),
(19, 'Belerick', 'Guard of Nature', 'Tank', '', 54.17, 0.7, 0.95),
(20, 'Benedetta', 'Shadow Ranger', 'Assassin', '', 53.19, 0.41, 0.27),
(21, 'Brody', 'The Lone Star', 'Marksman', '', 51.46, 1.09, 0.37),
(22, '', 'Mech Protector', 'Marksman', '', 0, 0, 0),
(23, 'Carmilla', 'Shadow of Twilight', 'Support', 'Tank', 0, 0, 0),
(24, 'Cecilion', 'Embrace of Night', 'Mage', '', 0, 0, 0),
(25, 'Chang\'e', 'Moon Palace Immortal', 'Mage', '', 0, 0, 0),
(26, 'Chou', 'Kung-Fu Boy', 'Fighter', '', 0, 0, 0),
(27, 'Claude', 'Partners in Crime', 'Marksman', '', 0, 0, 0),
(28, 'Clint', 'Wild Wanderer', 'Marksman', '', 0, 0, 0),
(29, 'Cyclops', 'Starsoul Magician', 'Mage', '', 0, 0, 0),
(30, 'Diggie', 'Timekeeper', 'Support', '', 0, 0, 0),
(31, 'Dyrroth', 'Prince of the Abyss', 'Fighter', '', 0, 0, 0),
(32, 'Edith', 'Ancient Guard', 'Tank', 'Marksman', 0, 0, 0),
(33, 'Esmeralda', 'Astrologer', 'Mage', 'Tank', 0, 0, 0),
(34, 'Estes', 'Moon Elf King', 'Support', '', 0, 0, 0),
(35, 'Eudora', 'Lightning Weaver', 'Mage', '', 0, 0, 0),
(36, 'Fanny', 'Blade Dancer', 'Assassin', '', 0, 0, 0),
(37, 'Faramis', 'Soul Binder', 'Support', 'Mage', 0, 0, 0),
(38, 'Floryn', 'The Budding Hope', 'Support', '', 0, 0, 0),
(39, 'Franco', 'Frozen Warrior', 'Tank', '', 0, 0, 0),
(40, 'Fredrinn', 'Rogue Appraiser', 'Fighter', 'Tank', 0, 0, 0),
(41, 'Freya', 'Valkyrie', 'Fighter', '', 0, 0, 0),
(42, 'Gatotkaca', 'Iron Steel', 'Tank', 'Fighter', 0, 0, 0),
(43, 'Gloo', 'Swamp Spirits', 'Tank', '', 0, 0, 0),
(44, 'Gord', 'Professor of the Mystic', 'Mage', '', 0, 0, 0),
(45, 'Granger', 'Death Chanter', 'Marksman', '', 0, 0, 0),
(46, 'Grock', 'Fortress Titan', 'Tank', 'Fighter', 0, 0, 0),
(47, 'Guinevere', 'Ms. Violet', 'Fighter', '', 0, 0, 0),
(48, 'Gusion', 'Holy Blade', 'Assassin', '', 0, 0, 0),
(49, 'Hanabi', 'The Scarlet Sakura', 'Marksman', '', 0, 0, 0),
(50, 'Hanzo', 'Akuma Ninja', 'Assassin', '', 0, 0, 0),
(51, 'Harith', 'Time Traveler', 'Mage', '', 0, 0, 0),
(52, 'Harley', 'Mage Genius', 'Mage', 'Assassin', 0, 0, 0),
(53, 'Hayabusa', 'Crimson Shadow', 'Assassin', '', 0, 0, 0),
(54, 'Helcurt', 'Shadowbringer', 'Assassin', '', 0, 0, 0),
(55, 'Hilda', 'Power of Megalith', 'Fighter', 'Tank', 0, 0, 0),
(56, 'Hylos', 'Grand Warden', 'Tank', '', 0, 0, 0),
(57, 'Irithel', 'Jungle Heart', 'Marksman', '', 0, 0, 0),
(58, 'Ixia', 'Acrlight Outlaw', 'Marksman', '', 0, 0, 0),
(59, 'Jawhead', 'Steel Sweetheart', 'Fighter', '', 0, 0, 0),
(60, 'Johnson', 'Mustang', 'Tank', 'Support', 0, 0, 0),
(61, 'Joy', 'Flash of Miracle', 'Assassin', '', 0, 0, 0),
(62, 'Julian', 'Scarlet Raven', 'Fighter', 'Mage', 0, 0, 0),
(63, 'Kadita', 'Ocean Goddess', 'Mage', 'Assassin', 0, 0, 0),
(64, 'Kagura', 'Onmyouji Master', 'Mage', '', 0, 0, 0),
(65, 'Kaja', 'Nazar King', 'Support', 'Fighter', 0, 0, 0),
(66, 'Karina', 'Shadow Blade', 'Assassin', '', 0, 0, 0),
(67, 'Karrie', 'Lost Star', 'Marksman', '', 0, 0, 0),
(68, 'Khaleed', 'Desert Scimitar', 'Fighter', '', 0, 0, 0),
(69, 'Khufra', 'Desert Tyrant', 'Tank', '', 0, 0, 0),
(70, 'Kimmy', 'Jetpack Rebel', 'Marksman', 'Mage', 0, 0, 0),
(71, 'Lancelot', 'Blade of Roses', 'Assassin', '', 0, 0, 0),
(72, 'Lapu-Lapu', 'Courageous Blade', 'Fighter', '', 0, 0, 0),
(73, 'Layla', 'Energy Gunner', 'Marksman', '', 0, 0, 0),
(74, 'Leomord', 'The Oathkeeper', 'Fighter', '', 0, 0, 0),
(75, 'Lesley', 'Deadly Sniper', 'Marksman', 'Assassin', 0, 0, 0),
(76, 'Ling', 'Cyan Finch', 'Assassin', '', 0, 0, 0),
(77, 'Lolita', 'Steel Elf', 'Support', 'Tank', 0, 0, 0),
(78, 'Lunox', 'Twilight Goddess', 'Mage', '', 0, 0, 0),
(79, 'Luo Yi', 'Yin-yang Geomancer', 'Mage', '', 0, 0, 0),
(80, 'Lylia', 'Little Wizard', 'Mage', '', 0, 0, 0),
(81, 'Martis', 'Ashura King', 'Fighter', '', 0, 0, 0),
(82, 'Masha', 'Wild-oats Fist', 'Fighter', 'Tank', 0, 0, 0),
(83, 'Mathilda', 'Swift Plume', 'Support', 'Assassin', 0, 0, 0),
(84, 'Melissa', 'Cursed Needle', 'Marksman', '', 0, 0, 0),
(85, 'Minotaur', 'Son of Minos', 'Tank', 'Support', 0, 0, 0),
(86, 'Minsitthar', 'Courageous Warrior', 'Fighter', '', 0, 0, 0),
(87, 'Miya', 'Moonlight Archer', 'Marksman', '', 0, 0, 0),
(88, 'Moskov', 'Spear of Quiescence', 'Marksman', '', 0, 0, 0),
(89, 'Nana', 'Sweet Leonin', 'Mage', '', 0, 0, 0),
(90, 'Natalia', 'Bright Claw', 'Assassin', '', 0, 0, 0),
(91, 'Natan', 'Spacetime Walker', 'Marksman', '', 0, 0, 0),
(92, 'Nolan', 'Cosmic Wayfinder', 'Assassin', '', 0, 0, 0),
(93, 'Novaria', 'Star Rebel', 'Mage', '', 0, 0, 0),
(94, 'Odette', 'Swan Princess', 'Mage', '', 0, 0, 0),
(95, 'Paquito', 'The Heavenly Fist', 'Fighter', 'Assassin', 0, 0, 0),
(96, 'Pharsa', 'Wings of Vengeance', 'Mage', '', 0, 0, 0),
(97, 'Phoveus', 'Shadow of Dread', 'Fighter', '', 0, 0, 0),
(98, 'Popol and Kupa', 'Icefield Companions', 'Marksman', '', 0, 0, 0),
(99, 'Rafaela', 'Wings of Holiness', 'Support', '', 0, 0, 0),
(100, 'Roger', 'Dire Wolf Hunter', 'Fighter', 'Marksman', 0, 0, 0),
(101, 'Ruby', 'Little Red Hood', 'Fighter', '', 0, 0, 0),
(102, 'Saber', 'Wandering Sword', 'Assassin', '', 0, 0, 0),
(103, 'Selena', 'Abyssal Witch', 'Assassin', 'Mage', 0, 0, 0),
(104, 'Silvanna', 'Imperial Knightess', 'Fighter', '', 0, 0, 0),
(105, 'Sun', 'Monkey King', 'Fighter', '', 0, 0, 0),
(106, 'Terizla', 'Executioner', 'Fighter', '', 0, 0, 0),
(107, 'Thamuz', 'Lord Lava', 'Fighter', '', 0, 0, 0),
(108, 'Tigreal', 'Warrior of Dawn', 'Tank', '', 0, 0, 0),
(109, 'Uranus', 'Aethereal Defender', 'Tank', '', 0, 0, 0),
(110, 'Vale', 'Windtalker', 'Mage', '', 0, 0, 0),
(111, 'Valentina', 'Prophetess of the Night', 'Mage', '', 0, 0, 0),
(112, 'Valir', 'Son of Flames', 'Mage', '', 0, 0, 0),
(113, 'Vexana', 'Shimmer of Hope', 'Mage', '', 0, 0, 0),
(114, 'Wanwan', 'Agile Tiger', 'Marksman', '', 0, 0, 0),
(115, 'X.Borg', 'Firaga Armor', 'Fighter', '', 0, 0, 0),
(116, 'Xavier', 'Defier of Light', 'Mage', '', 0, 0, 0),
(117, 'Yi Sun-Shin', 'Paenlong Legend', 'Assassin', 'Marksman', 0, 0, 0),
(118, 'Yin', 'Martial Genius', 'Fighter', 'Assassin', 0, 0, 0),
(119, 'Yu Zhong', 'Black Dragon', 'Fighter', '', 0, 0, 0),
(120, 'Yve', 'Astrowarden', 'Mage', '', 0, 0, 0),
(121, 'Zhask', 'Planes Dominator', 'Mage', '', 0, 0, 0),
(122, 'Zilong', 'Spear of Dragon', 'Fighter', 'Assassin', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `class` varchar(32) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `attributes` text DEFAULT NULL,
  `skills` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `class`, `level`, `attributes`, `skills`) VALUES
(1, 'Sea Halberd', 2050, 'Attack', 3, '+80 Physical Attack;+25% Attack Speed', 'Lifebane: Dealing damage to a target will reduce the Shield and HP Regen effects on them to 50% of normal for 3 seconds.;Punish: Increase damage by 8% against enemy heroes with higher extra HP.'),
(2, 'Rose Gold Meteor', 2120, 'Attack', 3, '+30 Magic Defense;+60 Physical Attack;+10% Lifesteal', 'Lifeline: When HP is about to drop below 30%, gains a 840-1820 shield (scales with level) and Increase Movement Speed by 50% when triggered, the effect decays over 3 second. Cooldown: 60s.'),
(3, 'Bloodlust Axe', 1970, 'Attack', 3, '+70 Physical Attack;+10% Cooldown Reduction', '+20% Spell Vamp'),
(4, 'Hunter Strike', 2010, 'Attack', 3, '+80 Physical Attack;+10% Cooldown Reduction', '+15 Physical PEN;Retribution: Deals damage to an enemy hero or Creep for 5 times in a row and improves Movement Speed by 50% that decays rapidly over 3s. This effect has 8s cooldown.'),
(5, 'Blade of Despair', 3010, 'Attack', 3, '+160 Physical Attack;+5% Movement Speed', 'Despair: Attacking enemies below 50% HP grants 25% extra Physical Attack for 2 seconds (takes effect before the damage is dealt).'),
(6, 'Blade of the Heptaseas', 1950, 'Attack', 3, '+70 Physical Attack;+250 HP', '+15 Physical PEN;Ambush: If no damage is dealt or taken from enemy heroes within 5 seconds, the next Basic Attack deals 160 (40% Total Physical Attack) as extra Physical Damage and slows the target by [40% for 1.5 seconds].'),
(7, 'Great Dragon Spear', 2140, 'Attack', 3, '+70 Physical Attack;+10% Cooldown Reduction;+20% Crit Chance', 'Supreme Warrior: After casting an Ultimate, increase Movement Speed by 15% for 7.5s This effect has a 15s cooldown.'),
(8, 'Windtalker', 1820, 'Attack', 3, '+40% Attack Speed;+20 Movement Speed;+10% Crit Chance', 'Typhoon: Every 5–2 seconds (reduced by 0.2 seconds for each Basic Attack), the next Basic Attack will hit up to 3 enemy units for 150–362 Magic Damage. (This attack can critically strike and the damage increases to 200% against Minions.);Activate: Each time Typhoon is cast, one\'s movement speed will be increased [by] 5% for a short time.'),
(9, 'Endless Battle', 2470, 'Attack', 3, '+65 Physical Attack;+250 HP;+10% Cooldown Reduction;+8% Hybrid Lifesteal;+5% Movement Speed;+5% Mana Regen', 'Divine Justice: After casting a skill, the next Basic Attack within 3 seconds deals 60% Physical Attack as extra True Damage (1.5 seconds cooldown).;Chase Fate: Triggering Divine Justice grants 10% extra Movement Speed.'),
(10, 'Berserker\'s Fury', 2500, 'Attack', 3, '+65 Physical Attack;+25% Crit Chance', '+40% Crit Damage;Doom: Critical strikes grant 5% extra Physical Attack for 2 seconds.'),
(11, 'Haas\'s Claws', 2020, 'Attack', 3, '+30 Physical Attack;+20% Attack Speed;+20% Crit Chance', '+25% Lifesteal;Frenzy: Critical strikes grant 20% extra Attack Speed for 2 seconds.'),
(12, 'Malefic Roar', 2060, 'Attack', 3, '+60 Physical Attack', '+20% Physical Penetration;Armor Buster: When attacking an enemy, gains 0.125% extra Physical Penetration to each point of the enemy\'s Physical Defense, capped at 40%.'),
(13, 'War Axe', 2100, 'Attack', 3, '+550 HP;+40 Physical Attack;+10% CD Reduction', 'Fighting Spirit: Enter a battle stance upon dealing damage to any enemy unit. This increases the hero\'s Physical Attack by 10 and Physical Penetration by 2 each second for 3s, to a max of 8 stacks (Marksmen/Mages/Supports only receive 50% of these stacked effects), also grants 15% Movement Speed at full stacks.'),
(14, 'Wind of Nature', 1910, 'Attack', 3, '+30 Physical Attack;+20% Attack Speed;+10% Lifesteal', 'Wind Chant: Immune to all Physical Damage. Last 2s. (Duration becomes half when used by non-marksmen). CD 70s.'),
(15, 'Golden Staff', 2000, 'Attack', 3, '+55 Physical Attack;+15% Attack Speed', 'Swift: Unable to increase critical chance. Every 1% of critical chance gained will increase attack speed by 1%.;Endless Strike: After every 2 non-critical Basic Attacks. Attack Speed of the next Basic Attack is increased by 100% and its effects is triggered an extra 2 time(s).'),
(16, 'Corrosion Scythe', 2050, 'Attack', 3, '+30 Physical Attack;+35% Attack Speed;+5% Movement Speed', 'Corrosive: Each time a Basic Attack deals damage to enemies, gains additional 80 Physical Damage and reduces the target\'s Movement Speed by 8% (halved for ranged Basic Attacks) for 1.5s. Stacking up to 5 times.;Impulse: When each Basic Attack deals damage to enemies, increase Attack Speed by 6%. Stacks up to 5 times. Lasts 3s.'),
(17, 'Demon Hunter Sword', 2180, 'Attack', 3, '+35 Physical Attack;+25% Attack Speed', 'Devour: Basic attacks will deal 8% of the target\'s current HP as additional physical damage (up to 60 against creeps and minions).;Devour: Each Basic Attack grants 3% Lifesteal for 3s. Stack up to 5 times.'),
(18, 'Swift Crossbow', 1000, 'Attack', 2, '+20% Attack Speed', 'Crossbow: Each Basic Attack deals 40 extra Adaptive Damage.\r\nUnique Passive - Impulse: Basic Attacks grant 3% extra Attack Speed for 3s, capped at 5 stacks.'),
(19, 'Magic Blade', 1150, 'Attack', 2, '+24 Magic Defense;+40 Physical Attack', 'Lifeline: When HP is about to drop below 30%, gains a 420~910 shield (scales with level) and increase Movement Speed by 50% when triggered, the effect decays over 3 seconds. Cooldown: 60s.'),
(20, 'Fury Hammer', 830, 'Attack', 2, '+35 Physical Attack', '12 Physical PEN'),
(21, 'Rogue Meteor', 900, 'Attack', 2, '+15% Attack Speed;+10% Crit Chance', NULL),
(22, 'Ogre Tomahawk', 790, 'Attack', 2, '+230 HP;+30 Physical Attack', 'Angry: Basic Attack will increase Movement Speed by 10%.'),
(23, 'Legion Sword', 910, 'Attack', 2, '+60 Physical Attack', NULL),
(24, 'Regular Spear', 600, 'Attack', 2, '+20 Physical Attack;+10% Attack Speed', NULL),
(25, 'Iron Hunting Bow', 450, 'Attack', 1, '+10 Physical Attack;+5% CD Reduction', NULL),
(26, 'Vampire Mallet', 400, 'Attack', 1, '+8 Physical Attack;+8% Lifesteal', NULL),
(27, 'Javelin', 320, 'Attack', 1, '+8% Crit Chance', NULL),
(28, 'Knife', 280, 'Attack', 1, '+10% Attack Speed', NULL),
(29, 'Dagger', 250, 'Attack', 1, '+15 Physical Attack', NULL),
(30, 'Power Potion', 1500, 'Attack', 0, NULL, 'Increase Power: Automatically used after purchasing, giving 30 Physical Attack and 15% of Lifesteal for 120s. Can only have one potion effect at a time.'),
(31, 'Flask of the Oasis', 1850, 'Magic', 3, '+60 Magic Power;+300HP;+10% Cooldown Reduction', '+12% Healing Effect;Blessing: After casting a healing or shield skill, if the target\'s HP is below or falls below 35% within 5s, they will gain a 100-1500 shield that lasts 3s. When this effect triggers, it also reduces the cooldown of the caster\'s skills by 2s. This effect can only trigger once every 40s on the same target.'),
(32, 'Genius Wand', 2000, 'Magic', 3, '+75 Magic Power;+5% Movement Speed', ''),
(33, 'Lightning Truncheon', 2250, 'Magic', 3, '+75 Magic Power;+400 Mana;+10% CD Reduction', 'Resonate: Every 6s, the next skill that deals damage will resonate, dealing Magic Damage equal to 120% Magic Power against up to 3 enemies and increasing Movement Speed by 30% that decays over 2s.'),
(34, 'Fleeting Time', 2050, 'Magic', 3, '+70 Magic Power;+300 HP;+15% CD Reduction', 'Timestream: Hero kills or assists reduce Ultimate\'s current cooldown by 30%.'),
(35, 'Blood Wings', 3000, 'Magic', 3, '+500 HP;+150 Magic Power', 'Guard: Gain a Shield equal to 200% Magic Power. The shield will regenerate 20s after being damaged and grants 30 Movement Speed while it lasts.'),
(36, 'Clock of Destiny', 1950, 'Magic', 3, '+60 Magic Power;+500 HP;+600 Mana\r\n', 'Time: Gains 20 extra Max HP and 4 extra Magic Power every 20s, capped at 15 stacks.;Reincarnate: Gains 5% extra Magic Power and 600 extra Max Mana at max Time stacks.'),
(37, 'Starlium Scythe', 2220, 'Magic', 3, '+70 Magic Power;+10% Cooldown Reduction;+8% Hybrid Lifesteal;+6 Mana Regen', 'Crisis: After casting a skill, the next Basic Attack within 3 seconds deals 100% Magic Power as extra True Damage and grants 10% extra Movement Speed. (1.5 seconds cooldown).'),
(38, 'Glowing Wand', 2200, 'Magic', 3, '+400 HP;+75 Magic Power;+5% Movement Speed', 'Scorch: Magic Damage will burn the targets for 3 seconds, dealing Magic Damage equal to 1.5% of the target\'s Max HP per second, and increasing Magic Damage taken by 2–4 (scales with level). Stacks up to 6 times.'),
(39, 'Ice Queen Wand', 2240, 'Magic', 3, '+300 HP;+75 Magic Power;+10% Spell Vamp;+7% Movement Speed', ' Ice Bound: When a skill deals damage to an enemy hero, it will also slow them by 10% for 2s (stacks up to 3 times). This effect has a 1s cooldown.'),
(40, 'Concentrated Energy', 2020, 'Magic', 3, '+700 HP;+70 Magic Power', '+20% Spell Vamp;Recharge: Dealing magic damage increases magic power by 5s (can gain 1 stacks per second, and up to 6 stacks total). When reaching full stacks, increases magic damage by 12% for 3s.'),
(41, 'Holy Crystal', 2180, 'Magic', 3, '+100 Magic Power', ' Mystery: Increases Magic Power by 21%~35% (Scales with level).'),
(42, 'Divine Glaive', 1970, 'Magic', 3, '+65 Magic Power', '+40% Magic PEN;Spellbreaker: Each point of the enemy\'s Magic Defense increases Magic Penetration by 0.1% when dealing damage to it, capped at 20%.'),
(43, 'Necklace of Durance', 2010, 'Magic', 3, '+60 Magic Power;+300 HP;+380 Mana;+5% CD Reduction', 'Gift: Regens 20% HP and Mana within 2s of leveling up.;Lifebane: Upon dealing damage to the target, reduces Shield and HP Regen of the target by 50% for 3s.'),
(44, 'Feather of Heaven', 2030, 'Magic', 3, '+20% Attack Speed;+55 Magic Power;+10% Lifesteal;+5% CD Reduction', 'Affliction: Basic Attacks deal extra Magic Damage equal to 50 plus 30% Magic Power.; Impulse: When each Basic Attack deals damage to enemies, increase Attack Speed by 6%. Stacks up to 5 times. Lasts 3s.'),
(45, 'Winter Truncheon', 1910, 'Magic', 3, '+400 HP;+25 Physical Defense;+60 Magic Power', 'Frozen: Freeze upon using. The hero can\'t do anything but will be immune to all DMG and debuff. Last 2s, CD 100s.'),
(46, 'Enchanted Talisman', 1870, 'Magic', 3, '+50 Magic Power;+ 250 HP;+20% CD Reduction', 'Mana Spring: Regenerates 15% of Max Mana every 10s in total.;Magic Mastery: Max CD Reduction increased by 5%.'),
(47, 'Flower of Hope', 0, 'Magic', 3, '+5% Adaptive Attack', 'Flower of Hope: Every 6 seconds, a skill or Basic Attack deals 60 (+30% Total Physical Attack) (+30% Total Magic Power) extra Magic Damage.'),
(48, 'Lantern of Hope', 0, 'Magic', 3, '+20 + (2*Hero Level) Magic Power;+4 + (0.4*Hero Level)% CD Reduction;+2 + (0.2*Hero Level)% Movement Speed', 'Lantern of Hope: The equipment\'s attributes scale with hero level.'),
(49, 'Elegant Gem', 700, 'Magic', 2, '+300 HP;+380 Mana', 'Gift: Regens 20% HP and Mana within 2s of leveling up.'),
(50, 'Exotic Veil', 600, 'Magic', 2, '+30 Magic Power\r\n+5% Movement Speed', NULL),
(51, 'Azure Blade', 600, 'Magic', 2, '+25 Mana Regen;+5% CD Reduction', 'Judgement: In 3s after using the skill, the caster\'s next Basic Attack will deal additional 50 True Damage with a cooldown of 1.5s.'),
(52, 'Tome of Evil', 950, 'Magic', 2, '+35 Magic Power;+20 Mana Regen;+8% CD Reduction', NULL),
(53, 'Magic Wand', 820, 'Magic', 2, '+45 Magic Power', NULL),
(54, 'Mystic Container', 500, 'Magic', 2, '+15 Magic Power;+8% Spell Vamp', NULL),
(55, 'Book of Sages', 450, 'Magic', 1, '+8 Magic Power;+5% CD Reduction', NULL),
(56, 'Magic Necklace', 120, 'Magic', 1, '+2 Mana Regen', NULL),
(57, 'Power Crystal', 220, 'Magic', 1, '+280 Mana', NULL),
(58, 'Mystery Codex', 300, 'Magic', 1, '+15 Magic Power', NULL),
(59, 'Magic Potion', 1500, 'Magic', 0, NULL, 'Increase Power: Automatically used after purchasing, increases Magic Power by 30 and Cooldown Reduction by 10% for 120s. Can only have one potion effect at a time.'),
(60, 'Allow Throw', 0, 'Magic', 0, NULL, 'Trust: Purchase to allow your Jawhead teammate to fling you.'),
(61, 'Throw Forbidden', 0, 'Magic', 0, NULL, 'Heavy Mountain: Purchase this item and you will be immune when inflicted by an allied Jawhead.'),
(62, 'Broken Heart', 0, 'Magic', 0, NULL, 'Heart Broken: After purchasing, Cecilion will not be able to use Moonlit Waltz on you during this game.'),
(63, 'Radiant Armor', 1980, 'Defense', 3, '+950 HP;+12 HP Regen;+52 Magic Defense', 'Holy Blessing: Taking Magic Damage grants 5-8 Magic Damage Reductions (scales with level) for 3s, capped at 6 stacks.'),
(64, 'Twilight Armor', 2100, 'Defense', 3, '+1200 HP;+20 Physical Defense', 'Twilight: When taking more than 800 damage in a single hit, the excess amount will be reduced by 300 + 15% of Max HP. Cooldown: 5s.'),
(65, 'Brute Force Breastplate', 1870, 'Defense', 3, '+600 HP;+30 Physical Defense;+10% Cooldown Reduction', 'Brute Force: Casting a skill or using Basic Attacks will increase Movement Speed by 2%, Physical & Magic Defense by 4. Lasts 4s. Stacks up to 5 times.'),
(66, 'Immortality', 2120, 'Defense', 3, '+800 HP;+30 Physical Defense', 'Immortal: Resurrect 2.5s upon death and gets 16% Max HP and 220-1200 shield that lasts for 3s. (Scales with level) This effect has a CD of 210s.'),
(67, 'Dominance Ice', 2010, 'Defense', 3, '+500 Mana;+70 Physical Defense;+5% Movement Speed', 'Artic Cold: Reduce the Attack Speed of nearby enemy heroes to 70% of normal.; Lifebane: Reduce the shield Shield and HP Regen effects of nearby enemy heroes to 50% of normal.'),
(68, 'Athena\'s Shield', 2150, 'Defense', 3, '+900 HP;+2 HP Regen;+62 Magic Defense', 'Shield: Can be triggered when taking Magic Damage. Reduces Magic Damage taken by 25% for 5s (including the Magic Damage that triggers this effect). You will be able to trigger this effect again only after leaving combat for 10s.'),
(69, 'Oracle', 2060, 'Defense', 3, '+850 HP;+42 Magic Defense;+10% CD Reduction', 'Bless: Raise shield absorption and HP regen effect by 30%'),
(70, 'Antique Cuirass', 2170, 'Defense', 3, '+920 HP;+2 HP Regen;+52 Physical Defense', 'Deter: When attacked by an enemy hero\'s skill, reduces their Physical Attack by 8% for 2s (up to 3 stacks).'),
(71, 'Guardian Helmet', 2200, 'Defense', 3, '+1550 HP;+20 HP Regen', 'Recovery: Regenerates 2.5% Max HP per second (reduced to 0.5% Max HP per second over 5s after taking damage).'),
(72, 'Cursed Helmet', 1760, 'Defense', 3, '+1200 HP;+25 Magic Defense', 'Burning Soul: Deals Magic Damage equal to 1.5% of hero\'s Max HP per second to nearby enemies. This damage is increased by 100% against minions.'),
(73, 'Thunder Belt', 1990, 'Defense', 3, '+800 HP;+40 Physical Defense;+30 Mana Regen;+10% CD Reduction', 'Thunderbolt: In 3s after using the skill, the caster\'s next Basic Attack will deal True Damage as much as 50 plus 5% of the caster\'s Extra Max HP to the enemy target and surrounding units and slow them by 40-80% (increases with the caster\'s Extra Max HP) for 1s. This effect has a 1.5s cooldown.'),
(74, 'Queen\'s Wings', 2250, 'Defense', 3, '+900 HP;+10% CD Reduction;+5% Spell Vamp', 'Demonize: Reduces damage taken by 20% when health is less than 40% and increases your Spell Vamp by 35% for 5s. This effect has a cooldown of 60s.'),
(75, 'Blade Armor', 1960, 'Defense', 3, '+90 Physical Defense', '+20% Crit Damage Reduction;Bladed Armor: When struck by a Basic Attack, deals Physical Damage equal to 30% of the incoming damage (calculated before Damage) plus 25% of the hero\'s Physical Defense to the attacker and slows them by 15% for 1s.'),
(76, 'Steel Legplates', 630, 'Defense', 2, '+45 Physical Defense', NULL),
(77, 'Dreadnaught Armor', 730, 'Defense', 2, '+40 Physical Defense', 'Deter: When attacked by an enemy hero\'s skill, reduces their Physical Attack by 5% for 2s (up to 3 stacks).'),
(78, 'Black Ice Shield', 880, 'Defense', 2, '+400 Mana;+22 Physical Defense', 'Arctic Cold: Reduces the Attack Speed of nearby enemy heroes by 85%.'),
(79, 'Silence Robe', 1020, 'Defense', 2, '+540 HP;+30 Magic Defense', NULL),
(80, 'Molten Essence', 800, 'Defense', 2, '+540 HP', 'Burning Soul: Deals Magic Damage equal to 1% of hero\'s Max HP per second to nearby enemies. This damage is increased by 100% against minions.'),
(81, 'Ares Belt', 900, 'Defense', 2, '+770 HP', NULL),
(82, 'Hero\'s Ring', 450, 'Defense', 1, '+150 HP;+5% CD Reduction', NULL),
(83, 'Healing Necklace', 140, 'Defense', 1, '+4 HP Regen', NULL),
(84, 'Magic Resist Cloak', 220, 'Defense', 1, '+18 Magic Defense', NULL),
(85, 'Leather Jerkin', 220, 'Defense', 1, '+18 Physical Defense', NULL),
(86, 'Vitality Crystal', 300, 'Defense', 1, '+230 HP', NULL),
(87, 'Rock Potion', 1500, 'Defense', 0, '', 'Increase Power: Automatically used after purchasing, increases Max HP by 500 and reduces duration of being controlled by 25% for 120s. Can only have one potion effect at a time.'),
(88, 'Demon Shoes', 720, 'Movement', 2, '+40 Movement Speed;+10 Mana Regen', 'Mysticism: Getting a kill or assist on an enemy Minion will restore 4% Mana. (An assist occurs when a Minion dies within 2s after taking damage from the hero.)'),
(89, 'Rapid Boots', 750, 'Movement', 2, '+65 Movement Speed;+35% Slow Reduction', 'Side Effect: Loses 25 Movement Speed for 5s upon dealing or taking damage.'),
(90, 'Swift Boots', 710, 'Movement', 2, '+40 Movement Speed;+15% Attack Speed', NULL),
(91, 'Arcane Boots', 690, 'Movement', 2, '+40 Movement Speed;+10 Magic PEN', NULL),
(92, 'Magic Shoes', 710, 'Movement', 2, '+40 Movement Speed;+10% CD Reduction', NULL),
(93, 'Tough Boots', 700, 'Movement', 2, '+40 Movement Speed;+22 Magic Defense', 'Fortitude: Reduces time controlled 30%.'),
(94, 'Warrior Boots', 720, 'Movement', 2, '+40 Movement Speed;+22 Physical Defense', 'Valor: Gains 4 extra Physical Defense for 3s when taking Physical Damage, up to 20.'),
(95, 'Boots', 250, 'Movement', 1, '+20 Movement Speed', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spells`
--

CREATE TABLE `spells` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `effect` text NOT NULL,
  `cooldown` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spells`
--

INSERT INTO `spells` (`id`, `name`, `effect`, `cooldown`) VALUES
(1, 'Execute', 'Deal 100 + (10 * Hero Level) plus 13% of the target\'s lost HP as True Damage to the target enemy hero. This damage ignores shields. If the target is slain by this skill, the cooldown will be reduced by 40%.', 90),
(2, 'Retribution', 'Deals 520 + (80 * Hero Level) True Damage to the target Creep or Minion.<br>Passive: Increases Creep rewards by 40%. Also grants 15% additional Damage Reduction in the allied jungle during the first 2 min. Cannot share Minion rewards with allied heroes in the first 5 min.<br>Blessing: Accumulate 5 Creep kills, hero kills, or assists to upgrade the spell according to the Jungling Footwear\'s Blessing, and 15 kills or assists to gain 10 Physical Attack and Magic Power and 100 Max Hp.', 35),
(3, 'Inspire', 'For up to 8 Basic Attacks within the next 5s, increase Attack Speed to 1.55 times and the Attack Speed cap to 500%.<br>The Basic Attacks also ignore 8 + (1 * Hero Level) of the target\'s Physical Defense and restore 60 + (15% Total Physical Attack) + (15% Total Magic Power) HP on hit.', 75),
(4, 'Sprint', 'Gain 50% extra Movement Speed and Slow Immunity for 6s.', 100),
(5, 'Revitalize', 'Summon a Healing Spring that surrounds the hero and lasts 4s, restoring 2.5% Max HP every 0.4s to affected allied heroes (including self), and increasing Shield and HP Regen effects received by 25% (this effect cannot stack).', 75),
(6, 'Aegis', 'Gain a 750 + (90 * Hero Level) shield for 5s.', 75),
(7, 'Petrify', 'Deal 100 + (15 * Hero Level) Magic Damage to nearby enemies, petrify them for 0.8s, and slow them by 50% for 0.8s afterward.', 75),
(8, 'Purify', 'Remove all debuffs (excluding Suppression) and gain Control Immunity and 15% Movement Speed for 1.2s.', 90),
(9, 'Flameshot', 'Fire a Flaming Shot in the target direction, knocking back nearby enemies and dealing 200 + (50% Total Magic Power) - 680 + (170% Total Magic Power) Magic Damage (scales with flying distance) to the first enemy hero or creep hit.', 50),
(10, 'Flicker', 'Blink a fixed distance in the target direction and gain 5 + (1 * Hero Level) extra Physical & Magic Defense afterward for 1s.', 120),
(11, 'Arrival', 'After channeling for 3s, teleport to the target allied minion, structure, or trap and gain 60% extra Movement Speed (decays over 3s) afterward. If the channeling is canceled or interrupted, 30s of the spell cooldown will be refunded.', 75),
(12, 'Vengeance', 'For 3s, gain 35% Damage Reduction and deal 35% Magic Damage back to the attacker each time you receive damage.', 75);

-- --------------------------------------------------------

--
-- Table structure for table `talents`
--

CREATE TABLE `talents` (
  `id` int(11) NOT NULL,
  `emblem` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `talents`
--

INSERT INTO `talents` (`id`, `emblem`, `level`, `name`, `description`) VALUES
(1, 'Basic Common Emblem', 1, 'Thrill', 'Gain 16 Adaptive Attack'),
(2, 'Basic Common Emblem', 1, 'Swift', 'Gain 10% extra Attack Speed'),
(3, 'Basic Common Emblem', 2, 'Wilderness Blessing', 'Movement Speed in the Jungle and River is increased by 10%. This bonus is halved when in combat with enemy heroes. Lord or Turtle.'),
(4, 'Basic Common Emblem', 2, 'Seasoned Hunter', 'Damage against Lord and Turtle is increased by 15%. This bonus is halved against regular Creeps and doesn\'t affect the damage of Retribution'),
(5, 'Basic Common Emblem', 3, 'Impure Rage', 'Dealing Damage with skills deals an extra 44-240 Adaptive Damage (scales with level) and restores 2% Mana on hit. If hero does not use Mana, restores 1% HP instead'),
(6, 'Basic Common Emblem', 3, 'Quantum Charge', 'Dealing damage with Basic Attacks increases Movement Speed by 30% for 1.5s and restores 75-180 HP (scales with level)'),
(7, 'Custom Tank Emblem', 1, 'Vitality', 'Gain 225 extra Max HP'),
(8, 'Custom Tank Emblem', 2, 'Tenacity', 'When HP is below 50%, Physical % Magic Defense are increased by 15'),
(9, 'Custom Tank Emblem', 3, 'Concussive Blast', 'After the next Basic Attack, deal 100 + (7% Total HP) Magic Damage to nearby enemies'),
(10, 'Custom Assassin Emblem', 1, 'Rupture', 'Gain Physical Penetration if extra Physical Attack is higher than extra Magic Power, otherwise, gain Magic Penetration.'),
(11, 'Custom Assassin Emblem', 2, 'Master Assassin', 'If there is only one enemy hero nearby, damage dealt to them is increased by 7%.'),
(12, 'Custom Assassin Emblem', 3, 'Killing Spree', 'After killing an enemy hero, instantly recover 10% Max HP and gain 20% Movement Speed for 3s.'),
(13, 'Custom Mage Emblem', 1, 'Inspire', 'Gain 5% extra Cooldown Reduction'),
(14, 'Custom Mage Emblem', 2, 'Bargain Hunter', 'Equipment can be purchased at 95% of their base price.'),
(15, 'Custom Mage Emblem', 3, 'Lethal Ignition', 'Dealing damage greater than 7& of an enemy hero\'s Max HP 3 times within 5s will scorch the target for an additional 162-750 Adaptive Damage (scales with level).'),
(16, 'Custom Fighter Emblem', 1, 'Firmness', 'Gain 6 extra Physical & Magic Defense'),
(17, 'Custom Fighter Emblem', 2, 'Festival of Blood', 'Gain 6% Spell Vamp. Each hero kill or assist grants an additional 0.5% Spell Vamp, up to 8 stacks.'),
(18, 'Custom Fighter Emblem', 3, 'Brave Smite', 'Dealing skill damage to an enemy restores 4% Max HP.'),
(19, 'Custom Support Emblem', 1, 'Agility', 'Gain 4% extra Movement Speed.'),
(20, 'Custom Support Emblem', 2, 'Pull Yourself Together', 'Cooldowns of Battle Spells  and equipment\'s active skills are reduced by 15%.'),
(21, 'Custom Support Emblem', 3, 'Focusing Mark', 'Dealing damage to an enemy hero increases allied heroes\' damage to them by 6% for 3s.'),
(22, 'Custom Marksman Emblem', 1, 'Fatal', 'Gain 5% extra Crit Chance and 10% extra Crit Damage.'),
(23, 'Custom Marksman Emblem', 2, 'Weapons Master', 'Physical Attack and Magic Power gained from equipment, emblem, talents, and skills are increased by 5%.'),
(24, 'Custom Marksman Emblem', 3, 'Weakness Finder', 'Basic Attacks slow enemies by 90% and reduce their Attack Speed by 50%.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emblems`
--
ALTER TABLE `emblems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spells`
--
ALTER TABLE `spells`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `talents`
--
ALTER TABLE `talents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emblems`
--
ALTER TABLE `emblems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `spells`
--
ALTER TABLE `spells`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `talents`
--
ALTER TABLE `talents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

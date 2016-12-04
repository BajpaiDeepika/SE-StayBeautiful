-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2016 at 01:00 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staybeautiful`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `ItemId` int(11) NOT NULL,
  `CategoryId` varchar(20) NOT NULL,
  `SubCategoryId` varchar(20) NOT NULL,
  `Category` varchar(40) NOT NULL,
  `SubCategory` varchar(40) NOT NULL,
  `ProductName` varchar(40) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `DiscountName` varchar(40) NOT NULL,
  `PromocodeName` varchar(40) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Color` varchar(40) NOT NULL,
  `ImageLink` varchar(100) NOT NULL,
  `imageLinkF` varchar(200) NOT NULL,
  `SellerName` varchar(100) NOT NULL,
  `DiscountPercent` int(20) NOT NULL,
  `DiscountExpiry` date NOT NULL,
  `PromocodePercent` int(20) NOT NULL,
  `PromocodeExpiry` date NOT NULL,
  `UpdatedPrice` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`ItemId`, `CategoryId`, `SubCategoryId`, `Category`, `SubCategory`, `ProductName`, `Description`, `Quantity`, `Price`, `DiscountName`, `PromocodeName`, `Brand`, `Color`, `ImageLink`, `imageLinkF`, `SellerName`, `DiscountPercent`, `DiscountExpiry`, `PromocodePercent`, `PromocodeExpiry`, `UpdatedPrice`) VALUES
(1, '1', '5', 'Skin', 'Moisturizer', 'Clinique-Moisturizer', 'This refreshing, oil-free cream-gel is a &quot;drink&quot; for skin, continuously plumping its appearance with hydration. The luxurious, addictive texture and ultra-hydrating formula make it a frequent fliers&rsquo; favorite. It improves the appearance of fine lines, flakiness, and tightness, leaving skin looking and feeling happier and healthier&mdash;even through shifts in humidity. It immediately cools and refreshes for a soft, smooth complexion. It can be used as a five-minute moisture mask, or over the skin for a luminous glow.', 100, 100, ' NA', 'NA', 'Clinique', 'Neutral', 'images/skin/moisturizer/clinique.jpg', 'images/skin/moisturizer/cliniqueF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '100'),
(2, '1', '5', 'Skin', 'Moisturizer', 'Estee-Moisturizer', 'What it is formulated to do: Be confident&mdash;the difference is clear. This lightweight, oil-free, and oil-controlling aqua gel hydrates and banishes excess shine for a healthier-looking complexion. Potent yet soothing ingredients help calm irritation associated with breakouts for pores that are refined, smoothed, and reduced. Great for all skin types, it leaves skin softer, perfectly balanced, and comfortable. ', 100, 200, 'NA', 'NA', 'Estee Lauder', 'Blue', 'images/skin/moisturizer/estee.jpg', 'images/skin/moisturizer/esteeF.jpg', 'Vaishali', 0, '0000-00-00', 0, '0000-00-00', '200'),
(3, '1', '5', 'Skin', 'Moisturizer', 'Glam-Moisturizer', 'What it is:  A non-drying hydration mask to deliver instant, extreme moisture.   THIRSTYMUD&trade; uses the newest, most advanced, and extreme hydration active technologies. It moisturizes, restores, replenishes, and calms the skin. Dewdration&trade; boosts and locks in moisture for a dewy and youthful result while HydraPack&trade; leaves skin with an instant silky, soft, and supple feel. GreenEnergy&trade; smooths and energizes the skin, giving you a healthy-looking, glowing complexion. ', 100, 69, 'NA', 'NA', 'GlamGlow', 'violet', 'images/skin/moisturizer/glamglow.jpg', 'images/skin/moisturizer/glamglowF.jpg', 'Akshada', 0, '0000-00-00', 0, '0000-00-00', '69'),
(4, '1', '5', 'Skin', 'Moisturizer', 'Lotus-Moisturizer', 'What it is:  A daily age-defying moisturizer formulated with Freshâ€™s proprietary super 7 complex to prevent visible signs of aging, provide up to 24 hours of significant moisture, and boost radiance. If you want to know moreâ€¦  Lotus Youth Preserve Face Cream is a lightweight, daily antiaging moisturizer for all skin types, proven to minimize and prevent signs of aging, deliver intense hydration, and improve elasticity. It is formulated with Freshâ€™s proprietary super 7 complexâ€”an age-defying, hydrating, and radiance-boosting blend of seven super-charged ingredients to defend against wrinkles, preserve collagen, support the production of hyaluronic acid, seal in moisture, and soften the skin.', 100, 45, 'NA', 'NA', 'Lotus', 'Neutral', 'images/skin/moisturizer/moist1lotus.jpg', 'images/skin/moisturizer/moist1lotusF.jpg', 'Niteesh', 0, '0000-00-00', 0, '0000-00-00', '45'),
(5, '2', '3', 'MakeUp', 'Lips', 'Rimmel-Lipstick', 'Rimmel London Lasting Finish by Kate Lipstick, Shade 001. Delivers sheer natural long wearing sexy color.', 100, 5, 'NA', 'NA', 'Rimmel', 'Red', 'images/makeup/lips/rimmel.jpg', 'images/makeup/lips/rimmelF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '5'),
(6, '2', '3', 'MakeUp', 'Lips', 'L.AGirl-Lipstick', 'About the Product L.A. GIRL Matte Flat Velvet Lipstick - Va Voom! PLUM', 100, 6, 'NA', 'NA', 'L.A Girl', 'Plum', 'images/makeup/lips/lagirl.jpg', 'images/makeup/lips/lagirlF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '6'),
(7, '2', '3', 'MakeUp', 'Lips', 'MAC-Lipstick ', 'About the Product MAC Retro Matte Lipstick - Ruby Woo Description: Vivid bluish-red (Matte)', 100, 25, 'NA', 'NA', 'MAC', 'Ruby Woo', 'images/makeup/lips/mac.jpg', 'images/makeup/lips/macF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '25'),
(8, '2', '3', 'MakeUp', 'Lips', 'Maybelline-Lipstick', 'About the Product:- (4 Pack) Maybelline ColorSensational Lipstick 100th Anniversary Limited Edition', 100, 20, 'NA', 'NA', 'Maybelline', 'Red', 'images/makeup/lips/maybelline.jpg', 'images/makeup/lips/maybellineF.jpg', 'Vaishali', 0, '0000-00-00', 0, '0000-00-00', '20'),
(9, '3', '9', 'Hairs', 'Shampoo', 'Loreal-Shampoo', 'L''Oreal Professional Vitamino Color Shampoo gently cleanses color treated and highlighted hair. This formula works to keep your hair color vibrant and uses antioxidants and UV filters to prevent damage.', 100, 10, 'NA', 'NA', 'Loreal', 'Violet', 'images/hair/shampoo/loreal.jpg', 'images/hair/shampoo/lorealF.jpg', 'Vaishali', 0, '0000-00-00', 0, '0000-00-00', '10'),
(10, '3', '9', 'Hairs', 'Shampoo', 'Ginger-Shampoo', 'Stop flakes and soothe your scalp using a gentle, yet effective shampoo with refreshing ginger for healthy, more manageable locks.\r\nGinger root, birch bark, white willow and oak moss, known for their astringent properties, help to promote a healthy scalp.\r\nCommunity Trade organic honey moisturizes and conditions hair and adds shine.\r\nPanthenol nourishes and strengthens hair, reducing breakage and split ends.', 100, 10, 'NA', 'NA', 'The Body Shop', 'Black', 'images/hair/shampoo/GingerShampoo.jpg', 'images/hair/shampoo/GingerShampooF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '10'),
(11, '3', '9', 'Hairs', 'Shampoo', 'Gloss-Shampoo', 'GLOSS Moderne is Clean Luxury. Gentle on hair and the Planet, this collection avoids dangerous toxins and is 100% Sulfate-Free + Paraben-Free. \r\n\r\nQuintessential cleanser perfect for all hair types. Protects hair color and extends keratin treatments. A mini-shot of this go-to shampoo leaves hair shiny, clean and optimistic. It’s like pouring a million tiny champagne bubbles on your hair.', 100, 45, 'NA', 'NA', 'Gloss Moderne', 'Clear', 'images/hair/shampoo/Gloss.jpg', 'images/hair/shampoo/GlossF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '45'),
(12, '3', '11', 'Hairs', 'Conditioner', 'Banana-Conditioner', 'This is hydrating banana conditioner', 100, 15, 'NA', 'NA', 'The Body Shop', 'Yellow', 'images/hair/conditioner/banana.jpg', 'images/hair/conditioner/bananaF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '15'),
(13, '2', '2', 'MakeUp', 'Eyes', 'Mascara', 'A lengthening mascara that curls, volumizes, lifts, and separates lashes for an "out-of-here" lookâ€”now available in three vibrant shades', 100, 24, 'NA', 'NA', 'Benifits', 'Black', 'images/makeup/eyes/Mascara.jpg', 'images/makeup/eyes/MascaraF.jpg', 'vaishali', 0, '0000-00-00', 0, '0000-00-00', '24'),
(14, '2', '2', 'MakeUp', 'Eyes', 'Eyelashes', 'A set with a pair of the bestselling Seductress lashes plus two mini lash adhesives in a travel-friendly gem case.', 200, 10, 'NA', 'NA', 'Velour', 'Black', 'images/makeup/eyes/Eyelash.jpg', 'images/makeup/eyes/EyelashF.jpg', 'vaishali', 0, '0000-00-00', 0, '0000-00-00', '10'),
(15, '6', '21', 'Samples', 'Free Samples', 'Becca-Foundation', 'Aqua Luminous Perfecting Foundation. SIZE 1 ozA flexible, liquid foundation, made from pigments that blur and perfect to reflect your perfect skintone, for light, buildable coverage and a radiant finish. This product is an Allure Best of Beauty award winner.', 100, 0, 'NA', 'NA', 'Becca', 'Beige - light/medium w/neutral undertone', 'images/samples/becca.JPG', 'images/samples/beccaF.JPG', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '0'),
(16, '2', '21', 'Samples', 'Free Samples', 'Versache Parfume', 'The primal power of woman is captured in this radiant, sensual essence. Attraction, desire, and passion intertwine in an alchemical mix of tempting, bright, and feminine notes. A refined accord of lemon and jasmine is exalted by sensual and smooth woods for a fragrance of strength, individuality, and seduction.   The bottle is crafted within the mythological codes of the Versace DNA. The gold Medusa and the Greek key design are engraved on the edge, stamping their imposing authority on the bottle.   â€œEros Pour Femme is the ultimate in power and seduction from Versace, from the captivating fragrance to the elegance of the bottle and the stunning campaign by Mert Alas and Marcus Piggott starring Lara Stone.â€â€”Donatella Versace, Chief Designer for Versace ', 100, 0, 'NA', 'NA', 'Versache', 'Clear', 'images/samples/versache.jpg', 'images/samples/versacheF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '0'),
(17, '1', '6', 'Skin', 'Toner', 'Lancome-Toner', 'A silky-soft moisturizing toner that gently purifies and immediately rehydrates complexion. The instantly soothing formula made with honey and sweet almond extract gives skin a soft, fresh, clean, and incredibly comfortable feeling. Great for all skin types, it deeply hydrates for a healthy-looking complexion. ', 100, 26, 'NA', 'NA', 'Lancome', 'CClear', 'images/skin/toner/lancome.jpg', 'images/skin/toner/lancomeF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '26'),
(18, '1', '7', 'Skin', 'Cleanser', 'Clinique-Cleanser', 'By combining gentle cleansing with exfoliating power, this two-in-one formula takes away dirt, dulling dead skin cells, excess oil, and impurities to give skin a smooth finish and a radiant glow. Gentle enough to use twice a day, it preps skin for flawless makeup application. ', 100, 20, 'NA', 'NA', 'Clinique', 'Pink', 'images/skin/cleanser/Ccleanser.jpg', 'images/skin/cleanser/CcleanserF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '20'),
(19, '1', '8', 'Skin', 'AntiAging', 'Philosophy-Nightcream', 'Try this new antiaging night creme from Philosophy.Make the nighttime your prime time for rejuvenation. A unique age-resetting complex contains a rare marine algae extract to help target age-accelerating proteins. Powerful peptides and next-generation vitamin C help support natural collagen while proven hydrators lock in moisture while you sleep. With miracle worker overnight, you can now wake to deeply hydrated, healthier-looking, silky soft skin. ', 100, 68, 'NA', 'NA', 'Philosophy', 'White', 'images/skin/antiaging/philosophy.jpg', 'images/skin/antiaging/philosophyF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '68');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`ItemId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

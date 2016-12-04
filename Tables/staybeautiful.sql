-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2016 at 07:56 PM
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
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ID` int(11) NOT NULL,
  `Street1` varchar(60) NOT NULL,
  `Street2` varchar(60) NOT NULL,
  `City` varchar(60) NOT NULL,
  `State` varchar(60) NOT NULL,
  `Zipcode` int(255) NOT NULL,
  `Phone` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`ID`, `Street1`, `Street2`, `City`, `State`, `Zipcode`, `Phone`) VALUES
(1, '3230', 'Hoosier court Ave', 'Bloomington', 'Indiana', 47404, 2123467843);

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
(1, '1', '5', 'Skin', 'Moisturizer', 'Clinique-Moisturizer', 'This refreshing, oil-free cream-gel is a &quot;drink&quot; for skin, continuously plumping its appearance with hydration. The luxurious, addictive texture and ultra-hydrating formula make it a frequent fliers&rsquo; favorite. It improves the appearance of fine lines, flakiness, and tightness, leaving skin looking and feeling happier and healthier&mdash;even through shifts in humidity. It immediately cools and refreshes for a soft, smooth complexion. It can be used as a five-minute moisture mask, or over the skin for a luminous glow.', 100, 100, ' ', 'NA', 'Clinique', 'Neutral', 'images/skin/moisturizer/clinique.jpg', 'images/skin/moisturizer/cliniqueF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '100'),
(2, '1', '5', 'Skin', 'Moisturizer', 'Estee-Moisturizer', 'What it is formulated to do: Be confident&mdash;the difference is clear. This lightweight, oil-free, and oil-controlling aqua gel hydrates and banishes excess shine for a healthier-looking complexion. Potent yet soothing ingredients help calm irritation associated with breakouts for pores that are refined, smoothed, and reduced. Great for all skin types, it leaves skin softer, perfectly balanced, and comfortable. ', 100, 200, ' ', 'NA', 'Estee Lauder', 'Blue', 'images/skin/moisturizer/estee.jpg', 'images/skin/moisturizer/esteeF.jpg', 'Vaishali', 0, '0000-00-00', 0, '0000-00-00', '200'),
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
(19, '1', '8', 'Skin', 'AntiAging', 'Nightcream', 'Try this new antiaging night creme from Philosophy.Make the nighttime your prime time for rejuvenation. A unique age-resetting complex contains a rare marine algae extract to help target age-accelerating proteins. Powerful peptides and next-generation vitamin C help support natural collagen while proven hydrators lock in moisture while you sleep. With miracle worker overnight, you can now wake to deeply hydrated, healthier-looking, silky soft skin. ', 100, 68, 'NA', 'NA', 'Philosophy', 'White', 'images/skin/antiaging/philosophy.jpg', 'images/skin/antiaging/philosophyF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '68'),
(20, '5', '17', 'Fragrance', 'MensFragrance', 'Armani-Deodorant', 'A seductive fragrance for men, Armani Code is a sexy blend of fresh lemon and bergamot softened with hints of orange tree blossom, warmed with soothing guaiac wood, and tonka bean.', 100, 28, 'NA', 'NA', 'Giorgio Armani', 'Black', 'images/fragrance/men/Armani.jpg', 'images/fragrance/men/ArmaniF.jpg', 'Akshada', 0, '0000-00-00', 0, '0000-00-00', '28'),
(21, '5', '17', 'Fragrance', 'MensFragrance', 'Chanel', 'A woody aromatic fragrance for the man who defies convention, and resists the ordinary every day, finding satisfaction in the unexpected. His fragrance, a provocative blend of citrus and woods, liberates the senses â€” fresh, clean, profoundly sensual â€” a signature statement of determination and desire. Be unexpected.', 100, 72, 'NA', 'NA', 'Chanel', 'Black', 'images/fragrance/men/Chanel.jpg', 'images/fragrance/men/ChanelF.jpg', 'Akshada', 0, '0000-00-00', 0, '0000-00-00', '72'),
(22, '5', '18', 'Fragrance', 'WomensFragrance', 'MarcJacobs', 'Enter the world of Daisy: fresh and feminine, with a playful innocence. The heart of Daisy is floral with vintage edge of violet', 100, 78, 'NA', 'NA', 'Marc Jacobs', 'Pink', 'images/fragrance/women/Marc.jpg', 'images/fragrance/women/MarcF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '78'),
(23, '5', '18', 'Fragrance', 'WomensFragrance', 'Gucci-Perfume', 'Created for a contemporary libertine, Gucci Guilty for Her is defined by a signature FougÃ¨re accord of Geranium usually found in menâ€™s scents. Intimate and magical lilac flower is laced with amber to radiate warmth and grace at the fragranceâ€™s heart. ', 100, 90, 'NA', 'NA', 'Gucci', 'Peach', 'images/fragrance/women/Gucci.jpg', 'images/fragrance/women/GucciF.jpg', 'Akshada', 0, '0000-00-00', 0, '0000-00-00', '90'),
(24, '5', '19', 'Fragrance', 'Unisex', 'Bvlgari', ' The soothing white tea scent combines with white pepper accents and is appropriate for day or evening. White tea, the principal ingredient, has been used in China as an elixir of youth because of its antioxidant and revitalizing properties. Cultivated only a few times per year, this rare essence imparts an overall sense of well being.', 100, 72, 'NA', 'NA', 'Bvlgari', 'Blue', 'images/fragrance/unisex/Bvlgari.jpg', 'images/fragrance/unisex/BvlgariF.jpg', 'Vaishali', 0, '0000-00-00', 0, '0000-00-00', '72'),
(25, '5', '19', 'Fragrance', 'Unisex', 'Serpentine', 'Inspired by the Serpentine Galleriesâ€™ location in a historical parkland setting within a modern city, SERPENTINE is a collaborative bespoke unisex fragrance with a bottle and box designed by Tracey Emin. ', 100, 95, 'NA', 'NA', 'Serpentine', 'Grey', 'images/fragrance/unisex/Serpentine.jpg', 'images/fragrance/unisex/SerpentineF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '95'),
(26, '5', '20', 'Fragrance', 'Deodrant', 'Burberry-Deodrant', 'Lightweight and easily absorbed, this mist formula helps to soften and moisturize the skin while scenting it with notes of rose, patchouli, and geranium leaf. ', 100, 42, 'NA', 'NA', 'Burberry', 'Peach', 'images/fragrance/deo/Burberry.jpg', 'images/fragrance/deo/BurberryF.jpg', 'Akshada', 0, '0000-00-00', 0, '0000-00-00', '42'),
(27, '5', '20', 'Fragrance', 'Deodrant', 'Tom-Ford', 'To Tom Ford, this scent perfectly captures the cool breezes, sparkling clear water, and lush foliage of the Italian Rivera. His reinvention of a classic eau de cologne features crisp citrus oils, surprising floral notes, and amber undertones to leave a splashy yet substantive impression. ', 100, 52, 'NA', 'NA', 'Tom Ford', 'Blue', 'images/fragrance/deo/TomFord.jpg', 'images/fragrance/deo/TomFordF.jpg', 'Akshada', 0, '0000-00-00', 0, '0000-00-00', '52'),
(28, '4', '14', 'Health Supplements', 'Vitamins', 'NW-VitaminD3', 'NatureWise Vitamin D3 in certified organic olive oil helps to maintain healthy bones and teeth, provide immune support, and support muscle function', 100, 15, 'NA', 'NA', 'Naturewise', 'Clear', 'images/health/vitamins/vitamin.jpg', 'images/health/vitamins/vitamindF.jpg', 'Vaishali', 0, '0000-00-00', 0, '0000-00-00', '15'),
(29, '4', '14', 'Health Supplements', 'Vitamins', 'Natrol-Biotin', 'Water-soluble B-complex vitamin necessary for cell growth and the production and metabolism of fat into amino acids.', 100, 11, 'NA', 'NA', 'Natrol', 'Clear', 'images/health/vitamins/biotins.jpg', 'images/health/vitamins/biotinsF.jpg', 'Vaishali', 0, '0000-00-00', 0, '0000-00-00', '10.55'),
(30, '4', '13', 'Health Supplements', 'Proteins', 'Protein-Powder', 'For maintaining and increasing lean muscle mass', 100, 58, 'NA', 'NA', 'Optimum Nutrition', 'Clear', 'images/health/protein/wheys.jpg', 'images/health/protein/wheysF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '57.98'),
(31, '4', '13', 'Health Supplements', 'Proteins', 'Protein-Shake', 'Use in conjunction with an intense daily exercise program and a balanced diet including an adequate caloric intake.', 100, 25, 'NA', 'NA', 'Pure Protein', 'Clear', 'images/health/protein/proteins.jpg', 'images/health/protein/proteinsF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '24.5'),
(32, '4', '15', 'Health Supplements', 'Minerals', 'SugarFree-Energizer', 'Caffeine from green tea and yerba matÃ© for increased endurance, anaerobic capacity, and enhanced mental focus', 100, 31, 'NA', 'NA', 'Vega', 'Clear', 'images/health/minerals/energisers.jpg', 'images/health/minerals/energisersF.jpg', 'Vaishali', 0, '0000-00-00', 0, '0000-00-00', '30.56'),
(33, '4', '15', 'Health Supplements', 'Minerals', 'MuscleMilk-Powder', 'Precision protein blend featuring rapidly releasing whey and slower digesting micellar caseins', 100, 27, 'NA', 'NA', 'Cyto Sport', 'Brown', 'images/health/minerals/muscles.jpg', 'images/health/minerals/musclesF.jpg', 'Vaishali', 0, '0000-00-00', 0, '0000-00-00', '26.58'),
(34, '4', '16', 'Health Supplements', 'Essentials', 'Cacao-Powder', 'In its raw state, Cacao powder contains a wide array of unique properties, antioxidants and minerals that enhance both physical and mental well-being. It has an incredibly rich supply of magnesium, along with other essential minerals: calcium, zinc, iron, copper, phosphorous, chromium and potassium', 100, 12, 'NA', 'NA', 'Beautiful Love Organics', 'Brown', 'images/health/essentials/cacaos.jpg', 'images/health/essentials/cacaosF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '12.45'),
(35, '4', '16', 'Health Supplements', 'Essentials', 'Organic-SuperFood', 'Super Greens contains vitamins and minerals from real foods and provides key electrolytes needed for physical activity and recovery', 100, 16, 'NA', 'NA', 'Super Greens', 'White', 'images/health/essentials/superfoods.jpg', 'images/health/essentials/superfoodsF.jpg', 'Vaishali', 0, '0000-00-00', 0, '0000-00-00', '15.55'),
(36, '2', '1', 'MakeUp', 'Face', 'Black-FaceMask', 'The Luminizing Black Mask visibly minimizes the appearance of pores, absorbs excess oil, and gently exfoliates for a bright, fresh-faced appearance. Rich in antiaging vitamin C and antioxidants, this formula visibly reduces hyperpigmentation, minimizes large pores, reduces fine lines and wrinkles, and combats excess oil while lifting away clogging impurities for radiant skin. ', 100, 34, 'NA', 'NA', 'Boscia', 'black', 'images/makeup/face/facemask.jpg', 'images/makeup/face/facemaskF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '34'),
(37, '2', '1', 'MakeUp', 'Face', 'Armani-Foundation', 'This award-winning foundation is formulated with micro-fil technology, producing a low-density product that pairs high-impact pigments with weightless texture. Inspired by the silk shantung worn by kings and emperors, this foundation glides seamlessly onto the skin leaving a finish thatâ€™s reminiscent of charmeuse silk.', 100, 64, 'NA', 'NA', 'Armani', 'Beige with warm undertones', 'images/makeup/face/armaniFoundation.jpg', 'images/makeup/face/armaniFoundationF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '64'),
(38, '2', '4', 'MakeUp', 'Nail', 'Dior-NailPaint', 'This advanced nail formula provides glassy, long-wearing shine. A precision brush applies the ideal amount of polish in a single sweep, allowing for a smooth application, vibrant color intensity, and a perfect finish. ', 100, 27, 'NA', 'NA', 'Dior', 'Mirage 338', 'images/makeup/nails/DiorNail.jpg', 'images/makeup/nails/DiorNailF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '27'),
(39, '2', '4', 'MakeUp', 'Nail', 'Lakme-NailPaint', 'This advanced nail formula provides glassy, long-wearing shine. A precision brush applies the ideal amount of polish in a single sweep, allowing for a smooth application, vibrant color intensity, and a perfect finish. ', 100, 10, 'NA', 'NA', 'Lakme', 'Red', 'images/makeup/nails/LakmeNail.jpg', 'images/makeup/nails/LakmeNailF.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '10'),
(40, '3', '10', 'Hairs', 'HairMask', 'Stri-HairMask', 'Ultimate Restore Deep Repair Mask starts at the scalp to restore essential hydration and dramatically improve the condition of overworked strands. Formulated with patented NIA-114 and Fibramend Ceramide Complex™, it reinforces natural cell cohesion in the hair and cuticle and restructures strands for improved resilience and vigor. This hair mask deeply nourishes for renewed shine, enhanced manageability, and increased softness—and it''s fragranced with notes of warm fig.	', 100, 20, 'NA', 'NA', 'StriVectin', 'White', 'images/hair/hairmask/strivectinhairmask.jpg', 'images/hair/hairmask/strivectinhairmask.jpg', 'Deepika', 0, '8888-09-09', 0, '8888-09-09', '20'),
(42, '3', '12', 'Hairs', 'Oil', 'Argan-Oil', 'This legendary, 100 percent pure Argan Oil is rich in vitamin E and essential fatty acids to deeply hydrate and nourish skin. Grown organically in Morocco, the multitasking formula contains astonishing healing, conditioning, and antiaging properties to create a nourished, youthful-looking complexion. It easily absorbs into skin, delivering a fresh, dewy glow, and keeps you looking beautiful from head to toe. Especially great for sensitive and acne-prone skin, it may also be used to treat split ends and soften cuticles.', 100, 37, 'NA', 'NA', 'Josie Maran', 'Grey', 'images/hair/oil/oil.jpg', 'images/hair/oil/oil.jpg', 'Deepika', 0, '0000-00-00', 0, '0000-00-00', '37');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `MenuId` varchar(20) NOT NULL,
  `MenuName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`MenuId`, `MenuName`) VALUES
('', ''),
('1', 'Skin'),
('2', 'MakeUp'),
('3', 'Hairs'),
('4', 'Health Supplements'),
('5', 'Fragrance'),
('6', 'Samples');

-- --------------------------------------------------------

--
-- Table structure for table `orderconfirmation`
--

CREATE TABLE `orderconfirmation` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `OrderId` int(11) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderconfirmation`
--

INSERT INTO `orderconfirmation` (`ID`, `username`, `OrderId`, `ProductName`, `Quantity`, `Price`, `TotalPrice`, `Date`) VALUES
(2, '0', 4767, 'GLAMGLOW-Moisturizer', 1, 0, 0, '2016-11-14'),
(3, '0', 4767, 'Rimmel-Lipstick', 1, 0, 0, '2016-11-14'),
(4, '0', 4767, 'EsteeLauder-Moisturizer', 1, 0, 0, '2016-11-14'),
(5, '0', 21766, 'Rimmel-Lipstick', 1, 0, 0, '2016-11-14'),
(6, '0', 21766, 'EsteeLauder-Moisturizer', 1, 0, 0, '2016-11-14'),
(7, '0', 9378, 'Rimmel-Lipstick', 1, 0, 0, '2016-11-14'),
(8, '0', 9378, 'EsteeLauder-Moisturizer', 1, 0, 0, '2016-11-14'),
(9, '0', 9523, 'Rimmel-Lipstick', 1, 0, 0, '2016-11-14'),
(10, '0', 9523, 'EsteeLauder-Moisturizer', 1, 0, 0, '2016-11-14'),
(11, '0', 7065, 'MAC-Lipstick', 1, 0, 0, '2016-11-14'),
(12, '0', 7065, 'EsteeLauder-Moisturizer', 1, 0, 0, '2016-11-14'),
(13, '0', 3678, 'MAC-Lipstick', 1, 0, 0, '2016-11-14'),
(14, '0', 3678, 'EsteeLauder-Moisturizer', 1, 0, 0, '2016-11-14'),
(15, '0', 25283, 'Clinique-Moisturizer', 1, 0, 0, '2016-11-14'),
(16, '0', 10048, 'Clinique-Moisturizer', 1, 0, 0, '2016-11-14'),
(17, '0', 26233, 'Clinique-Moisturizer', 1, 0, 0, '2016-11-14'),
(18, '0', 26233, 'L.AGirl-Lipstick', 1, 0, 0, '2016-11-14'),
(19, '0', 26655, 'Clinique-Moisturizer', 1, 0, 0, '2016-11-14'),
(20, '0', 26655, 'L.AGirl-Lipstick', 1, 0, 0, '2016-11-14'),
(21, '0', 30572, 'Clinique-Moisturizer', 1, 0, 0, '2016-11-14'),
(22, '0', 30572, 'L.AGirl-Lipstick', 1, 0, 0, '2016-11-14'),
(23, '0', 2506, 'Clinique-Moisturizer', 1, 0, 0, '2016-11-14'),
(24, '0', 2506, 'L.AGirl-Lipstick', 1, 0, 0, '2016-11-14'),
(25, '0', 26427, 'Clinique-Moisturizer', 1, 0, 0, '2016-11-14'),
(26, '0', 26427, 'L.AGirl-Lipstick', 1, 0, 0, '2016-11-14'),
(33, '0', 6278, 'EsteeLauder-Moisturizer', 4, 52, 208, '2016-11-14'),
(34, '0', 22588, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(35, '0', 22588, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(36, '0', 20377, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(37, '0', 20377, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(38, '0', 12894, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(39, '0', 12894, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(40, '0', 17983, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(41, '0', 17983, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(42, '0', 19212, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(43, '0', 19212, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(44, '0', 19541, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(45, '0', 19541, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(46, '0', 22353, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(47, '0', 22353, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(48, '0', 2998, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(49, '0', 2998, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(50, '0', 8375, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(51, '0', 8375, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(52, '0', 24612, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(53, '0', 24612, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(54, '0', 2501, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(55, '0', 2501, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(56, '0', 24346, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(57, '0', 24346, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(58, '0', 6731, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(59, '0', 6731, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(60, '0', 15400, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(61, '0', 15400, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(62, '0', 32065, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(63, '0', 32065, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(64, '0', 21222, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(65, '0', 21222, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(66, '0', 4135, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(67, '0', 4135, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(68, '0', 29396, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(69, '0', 29396, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(70, '0', 11389, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(71, '0', 11389, 'Rimmel-Lipstick', 2, 5, 10, '2016-11-15'),
(72, '0', 14194, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(73, '0', 14194, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(74, '0', 1987, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(75, '0', 1987, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-15'),
(76, '0', 7407, 'GLAMGLOW-Moisturizer', 1, 69, 69, '2016-11-18'),
(77, '0', 7407, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-11-18'),
(78, '0', 6411, 'Rimmel-Lipstick', 1, 5, 5, '2016-11-18'),
(79, 'gjgjgjg', 9876, 'Rimmel-Lipstick', 1, 5, 5, '2016-11-18'),
(80, 'dsdsds', 12948, 'Rimmel-Lipstick', 1, 5, 5, '2016-11-18'),
(81, '', 23858, 'Rimmel-Lipstick', 1, 5, 5, '2016-11-18'),
(82, 'ddddddddd', 25600, 'Rimmel-Lipstick', 1, 5, 5, '2016-11-18'),
(83, 'ddddddddd', 17465, 'Rimmel-Lipstick', 1, 5, 5, '2016-11-18'),
(84, 'ddddddddd', 27381, 'Rimmel-Lipstick', 1, 5, 5, '2016-11-18'),
(85, 'root', 13080, 'Rimmel-Lipstick', 1, 5, 5, '2016-11-18'),
(86, 'ddddddddd', 26583, 'Rimmel-Lipstick', 1, 5, 5, '2016-11-18'),
(87, 'vaishali', 7811, 'GLAMGLOW-Moisturizer', 1, 69, 69, '2016-11-18'),
(88, '', 32192, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-12-01'),
(89, '', 1772, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-12-01'),
(90, '', 8040, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-12-01'),
(91, '', 20914, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-12-01'),
(92, '', 13571, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-12-01'),
(93, '', 11392, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-12-01'),
(94, '', 15097, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-12-01'),
(95, '', 10814, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-12-01'),
(96, '', 8889, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-12-01'),
(97, '', 16257, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-12-01'),
(98, '', 22270, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-12-01'),
(99, '', 7775, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-12-01'),
(100, '', 4268, 'Maybelline-Lipstick', 1, 20, 20, '2016-12-01'),
(101, '', 4255, 'Maybelline-Lipstick', 1, 20, 20, '2016-12-01'),
(102, '', 2741, 'Maybelline-Lipstick', 1, 20, 20, '2016-12-01'),
(103, '', 23437, 'Maybelline-Lipstick', 1, 20, 20, '2016-12-01'),
(104, '', 12661, 'Maybelline-Lipstick', 1, 20, 20, '2016-12-01'),
(105, '', 10928, 'Maybelline-Lipstick', 1, 20, 20, '2016-12-01'),
(106, '', 25866, 'Maybelline-Lipstick', 1, 20, 20, '2016-12-01'),
(107, '', 32041, 'Maybelline-Lipstick', 1, 20, 20, '2016-12-01'),
(108, '', 25930, 'Maybelline-Lipstick', 1, 20, 20, '2016-12-01'),
(109, '', 30894, 'MAC-Lipstick', 1, 25, 25, '2016-12-01'),
(110, '', 18964, 'EsteeLauder-Moisturizer', 1, 52, 52, '2016-12-01'),
(111, 'ddddddddd', 21181, 'Rimmel-Lipstick', 2, 5, 10, '2016-12-01'),
(112, 'root', 29568, 'L.AGirl-Lipstick', 1, 6, 6, '2016-12-01'),
(113, 'dbajpai', 28485, 'Banana-Conditioner', 1, 15, 15, '2016-12-02'),
(114, 'dbajpai', 28485, 'Lancome-Toner', 1, 26, 26, '2016-12-02'),
(115, 'dbajpai', 15147, 'L.AGirl-Lipstick', 1, 6, 6, '2016-12-02'),
(116, 'dbajpai', 15147, 'L.AGirl-Lipstick', 5, 6, 30, '2016-12-02'),
(117, 'dbajpai', 19355, 'L.AGirl-Lipstick', 1, 6, 6, '2016-12-03'),
(118, 'dbajpai', 19355, 'L.AGirl-Lipstick', 1, 6, 6, '2016-12-03'),
(119, 'dbajpai', 3283, 'L.AGirl-Lipstick', 1, 6, 6, '2016-12-04'),
(120, 'dbajpai', 3283, 'Clinique-Moisturizer', 2, 100, 200, '2016-12-04'),
(121, 'dbajpai', 3283, 'Clinique-Moisturizer', 2, 100, 200, '2016-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `vote` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `product_id`, `vote`) VALUES
(49, 3, 2.5),
(50, 3, 3.2),
(51, 3, 1.6),
(52, 3, 1.6),
(53, 2, 2.5),
(54, 6, 1.4);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Review` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Name`, `Email`, `Review`) VALUES
('vaishali sainaath', 'vaishalisainaath@gmail.com', 'Great product. Exceeded expectations.\r\nLasted longer than anticipated. I would recommend this for everyone.'),
('Deepika', 'dbajpai@iu.edu', 'Not bad. Could improve.\r\nI would suggest looking at other products too.'),
('vaishali sainaath', 'vaishalisainaath@gmail.com', 'Good'),
('Deepika Bajpai', 'dbajpai@iu.edu', 'better');

-- --------------------------------------------------------

--
-- Table structure for table `selleraddress`
--

CREATE TABLE `selleraddress` (
  `ID` int(50) NOT NULL,
  `Street1` varchar(60) NOT NULL,
  `Street2` varchar(60) NOT NULL,
  `City` varchar(60) NOT NULL,
  `State` varchar(60) NOT NULL,
  `Zipcode` int(50) NOT NULL,
  `Phone` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selleraddress`
--

INSERT INTO `selleraddress` (`ID`, `Street1`, `Street2`, `City`, `State`, `Zipcode`, `Phone`) VALUES
(1, '3231 Hunterridge', 'Park street', 'Chicago', 'Indiana', 56230, 9875462230);

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `SubId` varchar(20) NOT NULL,
  `SubName` varchar(20) NOT NULL,
  `Href` varchar(80) NOT NULL,
  `CatId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`SubId`, `SubName`, `Href`, `CatId`) VALUES
('', '', '', ''),
('1', 'Face', 'ProdList.php?clicked=Face', '2'),
('10', 'HairMask', 'ProdList.php?clicked=HairMask', '3'),
('11', 'Conditioner', 'ProdList.php?clicked=Conditioner', '3'),
('12', 'Oil', 'ProdList.php?clicked=Oil', '3'),
('13', 'Proteins', 'ProdList.php?clicked=Proteins', '4'),
('14', 'Vitamins', 'ProdList.php?clicked=Vitamins', '4'),
('15', 'Minerals', 'ProdList.php?clicked=Minerals', '4'),
('16', 'Essentials', 'ProdList.php?clicked=Essentials', '4'),
('17', 'MensFragrance', 'ProdList.php?clicked=MensFragrance', '5'),
('18', 'WomensFragrance', 'ProdList.php?clicked=WomensFragrance', '5'),
('19', 'Unisex', 'ProdList.php?clicked=Unisex', '5'),
('2', 'Eyes', 'ProdList.php?clicked=Eyes', '2'),
('20', 'Deodrant', 'ProdList.php?clicked=Deodrant', '5'),
('21', 'Free Samples', 'ProdList.php?clicked=Sample', '6'),
('3', 'Lip', 'ProdList.php?clicked=Lip', '2'),
('4', 'Nail', 'ProdList.php?clicked=Nail', '2'),
('5', 'Moisturizer', 'ProdList.php?clicked=Moisturizer', '1'),
('6', 'Toner', 'ProdList.php?clicked=Toner', '1'),
('7', 'Cleanser', 'ProdList.php?clicked=Cleanser', '1'),
('8', 'AntiAging', 'ProdList.php?clicked=AntiAging', '1'),
('9', 'Shampoo', 'ProdList.php?clicked=Shampoo', '3'),
('TEST', 'TEST', '', 'TEST');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`ItemId`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`MenuId`);

--
-- Indexes for table `orderconfirmation`
--
ALTER TABLE `orderconfirmation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selleraddress`
--
ALTER TABLE `selleraddress`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`SubId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orderconfirmation`
--
ALTER TABLE `orderconfirmation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `selleraddress`
--
ALTER TABLE `selleraddress`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 10, 2022 lúc 11:17 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel_test4`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Chó', 0, 'cho', '2022-01-01 06:21:52', '2022-01-01 06:21:52', NULL),
(2, 'Mèo', 0, 'meo', '2022-01-01 06:21:59', '2022-01-01 06:21:59', NULL),
(3, 'Chó Alaska', 1, 'cho-alaska', '2022-01-01 06:22:17', '2022-01-01 06:22:17', NULL),
(4, 'Mèo Chân Ngắn', 2, 'meo-chan-ngan', '2022-01-01 06:23:52', '2022-01-01 06:23:52', NULL),
(5, 'Chuột', 0, 'chuot', '2022-01-01 06:27:26', '2022-01-16 23:29:16', '2022-01-16 23:29:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `parent_id`, `created_at`, `updated_at`, `slug`, `deleted_at`) VALUES
(1, 'Chó Alaska', 0, '2022-01-01 06:44:43', '2022-01-01 06:45:11', 'cho-alaska', '2022-01-01 06:45:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_13_090525_create_categories_table', 1),
(4, '2019_10_21_131013_add_column_deleted_at_table_categories', 1),
(5, '2020_03_10_055818_create_menus_table', 1),
(6, '2020_03_13_095933_add_column_slug_to_menus_table', 1),
(7, '2020_03_14_152845_add_column_soft_delete_to_menus_table', 1),
(8, '2020_03_15_102131_create_products_table', 1),
(9, '2020_03_15_102331_create_product_images_table', 1),
(10, '2020_03_15_102437_create_tags_table', 1),
(11, '2020_03_15_102518_create_product_tags_table', 1),
(12, '2020_03_17_135137_add_column_feature_image_name', 1),
(13, '2020_03_17_153235_add_column_image_name_to_table_product_image', 1),
(14, '2020_03_22_021543_add_column_deletet_at_to_product_table', 1),
(15, '2020_03_23_042132_create_sliders_table', 1),
(16, '2020_03_24_084532_add_column_deleted_at_to_sliders', 1),
(17, '2020_03_25_020441_create_settings_table', 1),
(18, '2020_03_25_073715_add_column_type_settings_table', 1),
(19, '2020_04_08_095621_create_roles_table', 1),
(20, '2020_04_08_095641_create_permissions_table', 1),
(21, '2020_04_08_095759_create_table_user_role', 1),
(22, '2020_04_08_095839_create_table_permission_role', 1),
(23, '2020_04_09_104641_add_column_deteted_at_table_users', 1),
(24, '2020_04_10_071555_add_column_parent_id_permission', 1),
(25, '2020_04_10_094739_add_column_key_permission_table', 1),
(26, '2019_08_19_000000_create_failed_jobs_table', 2),
(27, '2020_05_10_141553_add_column_views_products', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `key_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `created_at`, `updated_at`, `parent_id`, `key_code`) VALUES
(1, 'category', 'category', '2021-12-30 18:38:43', '2021-12-30 18:38:43', 0, ''),
(2, 'list', 'list', '2021-12-30 18:38:43', '2021-12-30 18:38:43', 1, 'category_list'),
(3, 'add', 'add', '2021-12-30 18:38:43', '2021-12-30 18:38:43', 1, 'category_add'),
(4, 'edit', 'edit', '2021-12-30 18:38:43', '2021-12-30 18:38:43', 1, 'category_edit'),
(5, 'delete', 'delete', '2021-12-30 18:38:43', '2021-12-30 18:38:43', 1, 'category_delete'),
(6, 'slider', 'slider', '2021-12-30 18:39:16', '2021-12-30 18:39:16', 0, ''),
(7, 'list', 'list', '2021-12-30 18:39:16', '2021-12-30 18:39:16', 6, 'slider_list'),
(8, 'add', 'add', '2021-12-30 18:39:16', '2021-12-30 18:39:16', 6, 'slider_add'),
(9, 'edit', 'edit', '2021-12-30 18:39:16', '2021-12-30 18:39:16', 6, 'slider_edit'),
(10, 'delete', 'delete', '2021-12-30 18:39:16', '2021-12-30 18:39:16', 6, 'slider_delete'),
(11, 'menu', 'menu', '2021-12-30 18:39:26', '2021-12-30 18:39:26', 0, ''),
(12, 'list', 'list', '2021-12-30 18:39:26', '2021-12-30 18:39:26', 11, 'menu_list'),
(13, 'add', 'add', '2021-12-30 18:39:26', '2021-12-30 18:39:26', 11, 'menu_add'),
(14, 'edit', 'edit', '2021-12-30 18:39:26', '2021-12-30 18:39:26', 11, 'menu_edit'),
(15, 'delete', 'delete', '2021-12-30 18:39:26', '2021-12-30 18:39:26', 11, 'menu_delete'),
(16, 'product', 'product', '2021-12-30 18:39:31', '2021-12-30 18:39:31', 0, ''),
(17, 'list', 'list', '2021-12-30 18:39:31', '2021-12-30 18:39:31', 16, 'product_list'),
(18, 'add', 'add', '2021-12-30 18:39:31', '2021-12-30 18:39:31', 16, 'product_add'),
(19, 'edit', 'edit', '2021-12-30 18:39:31', '2021-12-30 18:39:31', 16, 'product_edit'),
(20, 'delete', 'delete', '2021-12-30 18:39:31', '2021-12-30 18:39:31', 16, 'product_delete'),
(21, 'setting', 'setting', '2021-12-30 18:39:35', '2021-12-30 18:39:35', 0, ''),
(22, 'list', 'list', '2021-12-30 18:39:35', '2021-12-30 18:39:35', 21, 'setting_list'),
(23, 'add', 'add', '2021-12-30 18:39:35', '2021-12-30 18:39:35', 21, 'setting_add'),
(24, 'edit', 'edit', '2021-12-30 18:39:35', '2021-12-30 18:39:35', 21, 'setting_edit'),
(25, 'delete', 'delete', '2021-12-30 18:39:35', '2021-12-30 18:39:35', 21, 'setting_delete'),
(26, 'user', 'user', '2021-12-30 18:39:38', '2021-12-30 18:39:38', 0, ''),
(27, 'list', 'list', '2021-12-30 18:39:38', '2021-12-30 18:39:38', 26, 'user_list'),
(28, 'add', 'add', '2021-12-30 18:39:38', '2021-12-30 18:39:38', 26, 'user_add'),
(29, 'edit', 'edit', '2021-12-30 18:39:38', '2021-12-30 18:39:38', 26, 'user_edit'),
(30, 'delete', 'delete', '2021-12-30 18:39:38', '2021-12-30 18:39:38', 26, 'user_delete'),
(31, 'role', 'role', '2021-12-30 18:39:42', '2021-12-30 18:39:42', 0, ''),
(32, 'list', 'list', '2021-12-30 18:39:42', '2021-12-30 18:39:42', 31, 'role_list'),
(33, 'add', 'add', '2021-12-30 18:39:42', '2021-12-30 18:39:42', 31, 'role_add'),
(34, 'edit', 'edit', '2021-12-30 18:39:42', '2021-12-30 18:39:42', 31, 'role_edit'),
(35, 'delete', 'delete', '2021-12-30 18:39:42', '2021-12-30 18:39:42', 31, 'role_delete');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 1, 3, NULL, NULL),
(3, 1, 4, NULL, NULL),
(4, 1, 5, NULL, NULL),
(5, 1, 7, NULL, NULL),
(6, 1, 8, NULL, NULL),
(7, 1, 9, NULL, NULL),
(8, 1, 10, NULL, NULL),
(9, 1, 12, NULL, NULL),
(10, 1, 13, NULL, NULL),
(11, 1, 14, NULL, NULL),
(12, 1, 15, NULL, NULL),
(13, 1, 17, NULL, NULL),
(14, 1, 18, NULL, NULL),
(15, 1, 19, NULL, NULL),
(16, 1, 20, NULL, NULL),
(17, 1, 22, NULL, NULL),
(18, 1, 23, NULL, NULL),
(19, 1, 24, NULL, NULL),
(20, 1, 25, NULL, NULL),
(21, 1, 27, NULL, NULL),
(22, 1, 28, NULL, NULL),
(23, 1, 29, NULL, NULL),
(24, 1, 30, NULL, NULL),
(25, 1, 32, NULL, NULL),
(26, 1, 33, NULL, NULL),
(27, 1, 34, NULL, NULL),
(28, 1, 35, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(255) NOT NULL,
  `feature_image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `feature_image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `feature_image_path`, `content`, `user_id`, `category_id`, `created_at`, `updated_at`, `feature_image_name`, `deleted_at`, `views_count`) VALUES
(1, 'Chó Alaska', 10000000, '/storage/product/1/VixeZ3MSdJAHFM5z5N2v.jpg', 'abc', 1, 1, '2022-01-01 06:30:28', '2022-01-01 06:30:28', 'alaska.jpg', NULL, 0),
(2, 'Mèo chân ngắn tai cụp', 30000000, '/storage/product/1/8VcDRN65to3Kh9MQrRxl.jpeg', '123', 1, 2, '2022-01-01 06:30:57', '2022-01-01 06:30:57', 'meochanngan.jpeg', NULL, 0),
(3, 'Chó Phốc', 1000000, '/storage/product/1/fUQgT3TF6PB7g0QKzJ9b.jpeg', 'Chó phốc hay chó Fox hay là chó Miniature Pinscher là một giống chó, có nguồn gốc ở Đức, được lai tạo từ giống chó sục và German Pinscher. Trong lịch sử, chó Phốc được sử dụng để săn chuột vì kích thước nhỏ gọn và sự nhanh nhẹn của nó. Ngày nay, với tính cách tình cảm và thông minh nên chúng đã trở thành một trong những loài chó được yêu quý trong các gia đình. Sự ưu điểm của chó Phốc được thể hiện trong các công việc liên quan đến canh gác, các cuộc thi thố cần có sự nhanh nhẹn.', 0, 1, '2022-01-01 06:32:53', '2022-01-11 07:43:09', 'phoc.jpeg', NULL, 0),
(4, 'Chó Alaska cute', 30000000, '/storage/product//4h2BIgptZMymaIbZaZ0B.jpg', 'alaska', 0, 3, '2022-01-01 06:33:53', '2022-01-01 06:34:26', 'product-1.jpg', NULL, 0),
(5, 'Mèo Chân Ngắn', 30000000, '/storage/product/1/LSlEEDDFdhMkU4w3gxbq.jpg', 'aaa', 1, 4, '2022-01-01 07:02:31', '2022-01-01 07:02:31', 'meotaicup.jpg', NULL, 0),
(6, 'Mèo Anh Lông Ngắn', 30000000, '/storage/product/1/hX9Rj0wuMN5ImcbvwQH7.jpeg', 'Mèo lông ngắn Anh là phiên bản nhân giống có chọn lọc của mèo nhà Anh truyền thống với những đặc điểm như thân hình mũm mĩm, lông ngắn và dày cùng với khuôn mặt to. Màu sắc phổ biến nhất là màu xám xanh với mắt màu vàng đồng, nhưng ngoài ra vẫn còn nhiều màu sắc và hoa văn khác nhau.', 1, 4, '2022-01-01 07:04:02', '2022-01-12 18:03:31', 'meoanh.jpeg', NULL, 0),
(7, 'Chuột', 100000000, '/storage/product/1/2kgdonbTGzEPT9adKA4N.jpeg', 'he', 1, 5, '2022-01-07 21:07:03', '2022-01-08 00:32:59', 'phoc.jpeg', '2022-01-08 00:32:59', 0),
(8, 'Corgi', 35000000, '/storage/product/1/S890L3alPAukGGiRUHv4.jpg', 'Chó Corgi Pembroke Wales là giống chó chăn gia súc có nguồn gốc từ Pembrokeshire, xứ Wales. Nó là một trong hai giống được biết đến với tên gọi chung là Chó Corgi xứ Wales. Giống chó còn lại là giống Chó Corgi Cardigan Wales và cả hai đều có tổ tiên là giống chó đuôi cuộn kiểu Bắc Cực.', 1, 1, '2022-01-16 23:26:34', '2022-01-16 23:26:34', 'corki.jpg', NULL, 0),
(9, 'Golden', 15000000, '/storage/product/1/lgTWMbaR2UeZ47q7aeWv.jpg', 'Golden Retriever là giống chó có kích thước trung bình. Thuộc họ nhà chó ưa hoạt động, chơi đùa, chúng rất trung thành và thông minh. Chúng còn có tên gọi khác là chó săn mồi hoặc chó tha mồi.', 1, 1, '2022-01-16 23:27:40', '2022-01-16 23:27:40', 'golden.jpg', NULL, 0),
(10, 'Cún Labrador', 22000000, '/storage/product/1/UAKshRLF0cPpAQ2dPxPD.jpg', 'Chó tha mồi Labrador thường được gọi với tên thân thuộc là Lab là một giống chó săn phổ biến ở Mỹ chúng thuộc nhóm chó săn mồi và thường dùng để tha các con mồi về cho chủ trong các cuộc săn. tên gọi Labrador có xuất xứ từ chữ \"labrador\" trong ngôn ngữ Bồ Đào Nha, có nghĩa là người lao động.', 1, 1, '2022-01-16 23:29:03', '2022-01-16 23:29:03', 'lab.jpg', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `image_path`, `product_id`, `created_at`, `updated_at`, `image_name`) VALUES
(1, '/storage/product/1/VJq8SFiLbF9cULpt9KV0.jpg', 1, '2022-01-01 06:30:28', '2022-01-01 06:30:28', 'alaska.jpg'),
(2, '/storage/product/1/W1uwmolz0KyiKMFd8o0T.jpeg', 2, '2022-01-01 06:30:57', '2022-01-01 06:30:57', 'meochanngan.jpeg'),
(3, '/storage/product/1/aai6HEwMLaOafJ3QG5iw.jpeg', 3, '2022-01-01 06:32:53', '2022-01-01 06:32:53', 'phoc.jpeg'),
(4, '/storage/product//6VkDT4XBcGuemPqbPr78.jpg', 4, '2022-01-01 06:34:26', '2022-01-01 06:34:26', 'product-1.jpg'),
(5, '/storage/product/1/DZWLxby6D6RABV5nm9W4.jpg', 5, '2022-01-01 07:02:31', '2022-01-01 07:02:31', 'meotaicup.jpg'),
(6, '/storage/product/1/KPxSPYfqJqXvUzPGIRHT.jpeg', 6, '2022-01-01 07:04:02', '2022-01-01 07:04:02', 'meoanh.jpeg'),
(7, '/storage/product/1/kytkpLRXmLoWp0bVKKDS.jpeg', 7, '2022-01-07 21:07:03', '2022-01-07 21:07:03', 'phoc.jpeg'),
(8, '/storage/product/1/VBON58pSb6E5mBUGMGZu.jpg', 8, '2022-01-16 23:26:34', '2022-01-16 23:26:34', 'corki.jpg'),
(9, '/storage/product/1/rYDTMOQgpPwM1LfmbWYV.jpg', 9, '2022-01-16 23:27:40', '2022-01-16 23:27:40', 'golden.jpg'),
(10, '/storage/product/1/CfxURBnH9sh409fsfcl5.jpg', 10, '2022-01-16 23:29:03', '2022-01-16 23:29:03', 'lab.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_tags`
--

CREATE TABLE `product_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_tags`
--

INSERT INTO `product_tags` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-01-01 06:30:28', '2022-01-01 06:30:28'),
(2, 2, 2, '2022-01-01 06:30:57', '2022-01-01 06:30:57'),
(3, 3, 1, '2022-01-01 06:32:53', '2022-01-01 06:32:53'),
(4, 4, 3, '2022-01-01 06:33:53', '2022-01-01 06:33:53'),
(5, 5, 2, '2022-01-01 07:02:31', '2022-01-01 07:02:31'),
(6, 6, 2, '2022-01-01 07:04:02', '2022-01-01 07:04:02'),
(7, 7, 4, '2022-01-07 21:07:03', '2022-01-07 21:07:03'),
(8, 6, 5, '2022-01-12 18:03:31', '2022-01-12 18:03:31'),
(9, 6, 6, '2022-01-12 18:03:31', '2022-01-12 18:03:31'),
(10, 8, 1, '2022-01-16 23:26:34', '2022-01-16 23:26:34'),
(11, 9, 1, '2022-01-16 23:27:40', '2022-01-16 23:27:40'),
(12, 10, 1, '2022-01-16 23:29:03', '2022-01-16 23:29:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Quản trị hệ thống', '2021-12-30 18:40:06', '2021-12-30 18:40:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `config_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `config_key`, `config_value`, `created_at`, `updated_at`, `type`) VALUES
(1, 'phone_contact', '0384521458', '2022-01-08 00:10:29', '2022-01-08 00:10:29', 'Text'),
(2, 'address1', 'Triều Khúc - Thanh Xuân - Hà Nội', '2022-01-08 00:11:04', '2022-01-08 00:11:04', 'Text'),
(3, 'address2', 'Quang Trung - Gò Vấp - Hồ Chí Minh', '2022-01-08 00:11:11', '2022-01-08 00:11:11', 'Text'),
(4, 'email', 'admin@gmail.com', '2022-01-08 00:11:19', '2022-01-08 00:11:19', 'Text');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `description`, `image_path`, `image_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Chó Samoyed', 'Rất ít giống chó nào có bộ lông đẹp hơn Samoyed. Dài, rậm rạp và nhiều lông tơ, những chiếc áo khoác trắng tuyệt đẹp này đã giúp giống chó Samoyed giữ ấm ở quê nhà Siberia. Nhưng, điều này làm cho giống chó này có phần kém phù hợp với những nơi có mùa hè nóng bức. Và chúng cần được chải chuốt thường xuyên bởi các dụng cụ grooming cho chó chuyên nghiệp. Tuy nhiên, những người sống ở vùng khí hậu mát mẻ và sẵn sàng trả tiền cho các chuyến đi thường xuyên để được chắc chắn sẽ thấy Samoyed là người bạn đồng hành tuyệt vời và đáng yêu. Chúng phải được giữ cho bản thân bận rộn', '/storage/slider/1/n5UMZfLrhWXGUduY4J8z.jpg', 'hinh-anh-cho-poodle.jpg', '2021-12-30 18:41:57', '2021-12-30 18:52:34', NULL),
(2, 'Chó Chihuahua', 'Chihuahua vốn “xuất thân” từ Mexico nhưng lại được mọi người biết đến nhờ Trung Quốc. Chúng có vóc dáng nhỏ nhắn, cao khoảng 16 – 20cm, nặng tầm 1,5 – 3kg với cái đầu nhỏ, tai dựng đứng, mắt to tròn và màu lông khá đa dạng. Chihuahua khá thông minh, nhanh nhẹn, thích được chiều và rất trung thành với chủ.', '/storage/slider/1/DrDUyGb40JLzhgAlD6yc.jpg', 'chihuahua.jpg', '2022-01-08 07:32:30', '2022-01-08 07:32:30', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'chó', '2022-01-01 06:30:28', '2022-01-01 06:30:28'),
(2, 'mèo', '2022-01-01 06:30:57', '2022-01-01 06:30:57'),
(3, 'alaska', '2022-01-01 06:33:53', '2022-01-01 06:33:53'),
(4, 'chuột', '2022-01-07 21:07:03', '2022-01-07 21:07:03'),
(5, 'mèo anh', '2022-01-12 18:03:31', '2022-01-12 18:03:31'),
(6, 'cat', '2022-01-12 18:03:31', '2022-01-12 18:03:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$TEBr8stCMnMKp.eGE/xNUOpzoqJvcZCELwp7ePC8jDvqmphcxpgDW', NULL, '2021-12-30 18:40:22', '2021-12-30 18:40:22', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

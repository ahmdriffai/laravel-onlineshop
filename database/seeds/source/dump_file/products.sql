INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Software', '2023-10-02 04:56:53', '2023-10-02 04:56:53'),
(2, 'Hardware', '2023-10-02 04:56:59', '2023-10-02 04:56:59'),
(3, 'Desain', '2023-10-14 07:12:07', '2023-10-14 07:12:07');

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`, `weigth`, `categories_id`, `created_at`, `updated_at`, `stok`) VALUES
(1, 'Sistem Keuangan', '-', 'imageproduct/ayeuVUSTTyRKGTH0FHlz1nE1WrNBBLq8WurPAuoV.png', 15000000, 0, 1, '2023-10-02 04:58:19', '2023-10-02 04:58:19', 100),
(2, 'Sistem Penjaminan Mutu', '-', 'imageproduct/Qbn54KgkBPtnDr0ASoTmFaKf5We7orwljyiUoQKH.png', 10000000, 0, 1, '2023-10-02 04:58:49', '2023-10-02 04:58:49', 100),
(3, 'Digital Librari', '-', 'imageproduct/oycPzvgAOyoMStS8NMxHvLPy6kr8WfGjB3GxMmGq.png', 7000000, 0, 1, '2023-10-02 05:15:08', '2023-10-02 05:15:08', 1000),
(4, 'E-Fakultas', '-', 'imageproduct/9flpnfbFmGqD9R2WIX7Lp2FvK7wPWD48XPQlL5AT.png', 50000000, 0, 1, '2023-10-02 05:51:37', '2023-10-02 05:51:37', 0),
(5, 'Motherboard', '-', 'imageproduct/P5h1UgS9MVMhPMbAyle5saT5vzyCzP6dfsbYi6cr.jpg', 2000000, 1000, 2, '2023-10-14 07:09:38', '2023-10-14 07:09:38', 100),
(6, 'V Series SSD', '-', 'imageproduct/X4Hss1xlgfRlcjyYcPKJNYRWOMDzjbhPSEZtyrdw.jpg', 500000, 200, 2, '2023-10-14 07:10:33', '2023-10-14 07:10:33', 100),
(7, 'Website dan UI/UX', '-', 'imageproduct/VHxlEBAvcU5QuOqaMOASAa6DyibACitId3bXgQtm.jpg', 2000000, 0, 3, '2023-10-14 07:11:29', '2023-10-14 07:12:26', 100),
(8, 'Desain Event Stage', '-', 'imageproduct/Bzv9mvxhyRLbmRVsgwleXOCm5zisIpqFuou3QAwe.jpg', 1000000, 0, 3, '2023-10-14 07:13:10', '2023-10-14 07:13:10', 100),
(9, 'E-Kasir Mobile App', '-', 'imageproduct/KU5fX3YqZk4q2KhFzvLqgc5gbWuihqjM7cuNe6l4.jpg', 8000000, 0, 1, '2023-10-14 07:13:50', '2023-10-14 07:13:50', 100),
(10, 'Desain Logo', '-', 'imageproduct/eUgpZydDrPutBdTGBnE8lHplP59StVFfF8VbTYzF.jpg', 1000000, 0, 3, '2023-10-14 07:14:35', '2023-10-14 07:14:35', 100),
(11, 'Desain Banner', '-', 'imageproduct/ECJv2auhLDnQEcY55ceD7WRQU4My3jhzTs2dcUQS.jpg', 100000, 0, 3, '2023-10-14 07:15:08', '2023-10-14 07:15:08', 100),
(12, 'PC', '-', 'imageproduct/3FiEtDYZxJMVZirPcIYvAdswRboRQpIqCOuZ3nor.jpg', 5000000, 3000, 2, '2023-10-14 07:17:53', '2023-10-14 07:17:53', 100),
(13, 'RAM', '-', 'imageproduct/RhY6y2ix4xiPnJWH8pTHVv0jjeTDWkCtwAVlQcfM.jpg', 500000, 200, 2, '2023-10-14 07:18:33', '2023-10-14 07:18:33', 100),
(14, 'Intel X299 Tower Dekstop PC', '-', 'imageproduct/NKxCYtTo7u7ZiXeSgtXukQtizyjdayKDQkIP6qn5.jpg', 5000000, 3000, 2, '2023-10-14 07:19:33', '2023-10-14 07:19:33', 100),
(15, 'RAM Kingstons HyperrX', '-', 'imageproduct/bBil6r2ErSAzAhME69dbneU1yA2EX13LvFJiqKnl.jpg', 1000000, 200, 2, '2023-10-14 07:20:25', '2023-10-14 07:20:25', 20),
(16, 'SSD Samsung', '-', 'imageproduct/hB8EdUnttQw0uTHD9m9bcVIcqrtN1vizqLUxg5kE.jpg', 5000000, 100, 2, '2023-10-14 07:21:12', '2023-10-14 07:21:12', 100),
(17, 'Intel Motheboard ASUS LGA 1150 Mini-ITX', '-', 'imageproduct/q2wXl7Oz1kuNY4jXZx83pu4yzl9v4rMHkPsGWnLl.jpg', 2000000, 200, 2, '2023-10-14 07:32:47', '2023-10-14 07:32:47', 100),
(18, 'Monitor AOC E2270swdn Full HD', '-', 'imageproduct/qLW2qEBRk81sMEdhjCsf87TdDHLGIR1lWCusp9GO.jpg', 1000000, 500, 2, '2023-10-14 07:33:39', '2023-10-14 07:33:39', 100),
(19, 'Logitech Keyboard & Mouse', '-', 'imageproduct/1BW0kYFl7icPucQQpxQMUY6BBvnNwcYxaP3UxZ7m.jpg', 400000, 200, 2, '2023-10-14 07:34:38', '2023-10-14 07:34:38', 100),
(20, 'Sistem Recomendasi', '-', 'imageproduct/7luZY3qYaS9eMMcFUx3Gjqw8D6YUHmcxU0w8ZIZn.png', 10000000, 0, 1, '2023-10-14 07:35:35', '2023-10-14 07:35:35', 100),
(21, 'Sistem Pendaftaran Mahasiswa', '-', 'imageproduct/6rESnxq3kyfOcRo5GTILxAq0UQh4ji9pHzRssb1R.png', 5000000, 0, 1, '2023-10-14 07:36:16', '2023-10-14 07:36:16', 100),
(22, 'Sistem Akademik', '-', 'imageproduct/TP75usXOdRnloS3fw3pOKbuwM8Uvy67z8oIUc18f.png', 10000000, 0, 1, '2023-10-14 07:37:24', '2023-10-14 07:37:24', 100),
(23, 'Desain Identitas Perusahaan (Corporate Identity Design)', '-', 'imageproduct/ethAUmMF8fjheXHgmAyahy2MP64DYn8BmfU0SqTW.jpg', 500000, 0, 3, '2023-10-14 07:38:23', '2023-10-14 07:38:23', 100),
(24, 'Desain Iklan (Advertising Design)', '-', 'imageproduct/y53c0NKKKgXgVgrP5dvyJMgDPhgDBPKdvcDaEuxN.jpg', 500000, 0, 3, '2023-10-14 07:39:49', '2023-10-14 07:39:49', 100),
(25, 'Desain Tipografi (Typography Design)', '-', 'imageproduct/WXr4XwHonj3xSibk4QvKwRS4zGszL6faHDk6JpwG.jpg', 1000000, 0, 3, '2023-10-14 07:41:57', '2023-10-14 07:41:57', 100),
(26, 'Desain Ilustrasi (Illustration Design)', '-', 'imageproduct/f1mFjHut9TWk9QmVlyG8kV8vnFHC2xw06o048guN.jpg', 1000000, 0, 3, '2023-10-14 07:42:44', '2023-10-14 07:42:44', 100),
(27, 'Desain Motion Graphics.', '-', 'imageproduct/SqRKx7evDSz4bUSS8lrYJLIwinNvIQKgR1hfLMXm.jpg', 100000000, 0, 3, '2023-10-14 07:43:08', '2023-10-14 07:43:08', 100),
(28, 'Desain Paket (Packaging Design)', '-', 'imageproduct/gHmScnGj4Z6KTpeQ2iAbrPTV5WWzpXxOUackTxiY.jpg', 10000000, 0, 3, '2023-10-14 07:43:33', '2023-10-14 07:43:33', 100),
(29, 'CPU Rizen', '-', 'imageproduct/9zn4jhY7I5UfMgpNktL4MHxSNSyGoqTRYJlHsevG.jpg', 1000000, 200, 2, '2023-10-14 07:46:07', '2023-10-14 07:46:07', 100),
(30, 'VGA Full', '-', 'imageproduct/IFdKuBKJX5lPu7HTuhIMHBqa1aor5g0NNAMMmVEx.jpg', 1000000, 1000, 2, '2023-10-14 07:46:33', '2023-10-14 07:46:33', 100);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products`
--

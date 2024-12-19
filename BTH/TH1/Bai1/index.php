<?php
// Kết nối đến cơ sở dữ liệu
require 'includes/db.php';

// Truy vấn danh sách hoa
$stmt = $conn->query("SELECT * FROM flowers");
$flowers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản Lý Hoa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        a {
            text-decoration: none;
            color: white;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 5px;
        }
        a:hover {
            background-color: #0056b3;
        }
        header {
            text-align: center;
            padding: 15px;
            color: black;
        }
        h1 {
            margin-top: 30px;
        }
        .container {
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        img {
            width: 100px; /* Kích thước ảnh */
            height: auto;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Chào Mừng Đến Trang Quản Lý Hoa</h1>
    <p>Vui lòng chọn chế độ truy cập:</p>
    <a href="index.php">Dành Cho Khách</a>
    <a href="admin.php">Dành Cho Quản Trị Viên</a>
    <header>
        <h1>Quản Lý Loài Hoa</h1>
    </header>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Hoa</th>
                    <th>Mô Tả</th>
                    <th>Ảnh</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($flowers as $flower): ?>
                    <tr>
                        <td><?= htmlspecialchars($flower['id']); ?></td>
                        <td><?= htmlspecialchars($flower['name']); ?></td>
                        <td><?= htmlspecialchars($flower['description']); ?></td>
                        <td><img src="<?= htmlspecialchars($flower['image_path']); ?>" alt="<?= htmlspecialchars($flower['name']); ?>"></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
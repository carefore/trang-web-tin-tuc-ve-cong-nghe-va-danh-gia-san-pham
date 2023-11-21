<?php
// submit.php
// Xử lý dữ liệu nhận được từ form và lưu vào cơ sở dữ liệu

// Kết nối với cơ sở dữ liệu - cần điền thông tin đăng nhập vào MySQL
$servername = "localhost";
$username = "username"; // Thay bằng tên đăng nhập MySQL của bạn
$password = "password"; // Thay bằng mật khẩu MySQL của bạn
$dbname = "ten_database"; // Thay bằng tên database của bạn

// Tạo kết nối đến MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Kết nối đến MySQL thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$title = $_POST['title'];
$content = $_POST['content'];
$category = $_POST['category'];

// Chuẩn bị truy vấn SQL để chèn dữ liệu vào database
$sql = "INSERT INTO news (title, content, category) VALUES ('$title', '$content', '$category')";

// Thực thi truy vấn và kiểm tra
if ($conn->query($sql) === TRUE) {
  echo "Dữ liệu đã được thêm vào cơ sở dữ liệu thành công!";
} else {
  echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối đến MySQL
$conn->close();
?>

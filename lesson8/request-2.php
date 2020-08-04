<?php
session_start();
echo $_SESSION['username'];
if(isset($_GET['newusername'])){
    $_SESSION['username'] = $_GET['newusername'];
}


// giữa các request khác nhau từ phía trình duyệt gửi lên server
// dữ liệu của các request không thể share cho nhau 1 cách mặc định
// => để có thể lưu trữ dữ liệu thông qua các request khác nhau thì php sinh ra các khái niệm
// session & cookies

// session => 
    #1 biến dạng mảng 
    #2 biến này được lưu trữ ở server
    #3 biến toàn cục, có thể truy cập (lấy giá trị & thay đổi giá trị) ở bất kỳ request nào
    #4 session sẽ phân biệt cho các trình khác nhau & các máy khác nhau
    #5 thời gian tồn tại của 1 session => kết thúc phiên làm việc của 1 trình duyệt với server

    // phiên làm việc - bắt đầu từ lúc trình duyệt gửi request đầu tiên lên server
    // kết thúc khi tất cả các services của trình duyệt được tắt hoàn toàn (tắt trình duyệt 
    // hoặc khởi động lại máy hoặc server bị khởi động lại)

    
// để bắt đầu sử dụng session ở request nào (file php nào có sử dụng session) thì cần khai báo
// session_start() ở dòng đầu tiên của file

// để xóa dữ liệu của session 
    # session_destroy() - xóa hết toàn bộ tất cả các session của request
    # unset($_SESSION['auth']) - xóa phần tử auth khỏi session

?>

<a href="request-1.php">Link request 1</a>
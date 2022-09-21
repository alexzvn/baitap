<?php
/**
 * Đọc dữ liệu từ 1 file
 */
$data = file_get_contents('data.json');
$data = trim($data); // xoá khoảng trống đầu và cuối


/**
 * Ghi dữ liệu vào file
 * mặc định là ghi đè
 * 
 * tham số thứ 3 là tuỳ chọn
 * ví dụ: FILE_APPEND là ghi thêm vào sau cùng
 */
file_put_contents('data.json', "");

/**
 * Check file có tồn tại hay ko
 * 
 * @return boolean
 */
file_exists($name = "data.json");

/**
 * Check xem file nặng bao nhiêu
 * 
 * @return int số bytes
 */
filesize($name = "data.json");

/**
 * Xoá 1 file nào đấy
 */
unlink("tên file");


/**
 * đọc danh file trong thư mục
 */
glob('baitap/*');

////////////////////////////////////////////////
// BÀI Tập
///////////////////////////////////////////////

/**
 * Yêu cầu viết chương trình nhập câu hỏi từ bàn phím
 * Máy trả lời yes, no hoặc maybe
 * 
 * Good point: câu hỏi phải kết thúc bằng dấu "?" nếu không đúng thì bắt nhập lại
 * 
 * sử dụng API https://yesno.wtf/#api
 * 
 * endpoint: https://yesno.wtf/api
 */

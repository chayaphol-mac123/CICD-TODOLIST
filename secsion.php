<?php
session_start();//start sesssion every time, เพื่อใช้sessionชุดเดียวกับมี่สร้างเมื่อเรียกหน้าอื่น
echo '<h1> Hello </h1>';
//การสร้างตัวแปลในsessioinและsaveลงsessionจะไม่หาย
$_SESSION['number'] = '6210742083'; //number
$_SESSION['name'] = 'Songkeit Klinnimnaul'; //string

//remove all session
session_unset();

//display session
echo '<pre>'; //fomat form diaplay
print_r($_SESSION); //แสดงsession ทั้งหมดที่ถูกเพิ่มเข้ามา จนกว่าจะclose browser
echo '</pre>';
?>

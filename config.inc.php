<?php
/* 🔹 ตั้งค่า Blowfish Secret สำหรับ Cookie Authentication */
$cfg['blowfish_secret'] = 'your_32_character_random_string_here'; /* ต้องเป็น 32 ตัวอักษร */

/* 🔹 เริ่มต้นการตั้งค่าเซิร์ฟเวอร์ */
$i = 0;
$i++;

/* 🔹 กำหนดค่าการเชื่อมต่อกับ MariaDB */
$cfg['Servers'][$i]['auth_type'] = 'cookie'; // ใช้ Cookie-based authentication
$cfg['Servers'][$i]['host'] = '192.168.100.10'; // IP ของ Database Server
$cfg['Servers'][$i]['port'] = '3307'; // พอร์ตเริ่มต้นของ MySQL/MariaDB
$cfg['Servers'][$i]['user'] = 'adminIT'; // กำหนด Username
$cfg['Servers'][$i]['password'] = ''; // ปล่อยว่างไว้ (ให้ใส่ตอน Login)
$cfg['Servers'][$i]['connect_type'] = 'TCP/IP'; // ใช้ TCP/IP
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;

$cfg['Servers'][$i]['ssl']
$cfg['Servers'][$i]['ssl_key'] and $cfg['Servers'][$i]['ssl_cert']
$cfg['Servers'][$i]['ssl_verify']
/* 🔹 กำหนดค่าการใช้งานเพิ่มเติม */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

?>

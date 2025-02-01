<?php
/* ป้องกันการเข้าถึงไฟล์โดยตรง */
if (!defined('PMA_MINIMUM_COMMON')) {
    exit();
}

/* กำหนดการเข้ารหัสเริ่มต้น */
$cfg['DefaultLang'] = 'en';
$cfg['ServerDefault'] = 1;

/* ตั้งค่าการเชื่อมต่อ MySQL */
$i = 0;
$i++;
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['port'] = 3306;
$cfg['Servers'][$i]['socket'] = '/var/run/mariadb10.sock';
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = 'yuanlin@888'; // ใส่รหัสผ่านของ root หากมี
$cfg['Servers'][$i]['auth_type'] = 'http'; // หรือ '' หรือ 'http'
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;

/* ตั้งค่าความปลอดภัย */
$$cfg['blowfish_secret'] = 'generate_a_32_character_random_string_here';  // ใช้สำหรับการเข้ารหัส cookie session

/* ตั้งค่าหน้าต่างการทำงาน */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

?>

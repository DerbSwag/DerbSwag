<?php
class DB extends DBmysql {
   public $dbhost = '192.168.100.10';
   public $dbuser = 'root';
   public $dbpassword = 'yuanlin%40888';
   public $dbdefault = 'glpi';
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}

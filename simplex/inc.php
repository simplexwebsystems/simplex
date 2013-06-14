<?php

define("DS", DIRECTORY_SEPARATOR);
define("ROOTDIR", __DIR__.DS);
define("ACCESS", true);

define("SYSDIR", ROOTDIR."system".DS);
define("COMDIR", ROOTDIR."components".DS);
define("MODDIR", ROOTDIR."modules".DS);
define("LIBDIR", ROOTDIR."libraries".DS);
define("THEMES", ROOTDIR."themes".DS);

require SYSDIR."patterns".DS."singleton.php";
require SYSDIR."loader.php";
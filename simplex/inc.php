<?php

define("DS", DIRECTORY_SEPARATOR);
define("ROOTDIR", __DIR__.DS);
define("ACCESS", true);

define("SYSDIR", ROOTDIR."System".DS);
define("COMDIR", ROOTDIR."Components".DS);
define("MODDIR", ROOTDIR."Modules".DS);
define("LIBDIR", ROOTDIR."Libraries".DS);
define("THEMES", ROOTDIR."Themes".DS);

require SYSDIR."Patterns".DS."Singleton.php";
require SYSDIR."Patterns".DS."Container.php";

require SYSDIR."Loader.php";
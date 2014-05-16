<?php
/*
Plugin Name: Virtual-Interns
Plugin URI:
Description: Virtual-Interns Custom Plugin
Author: Zipsite
Version: 1
Author URI:
*/

include 'hook.php';
include 'lib/Virual_Interns_Model.php';

foreach (glob(dirname(__FILE__)."/models/*.php") as $filename){
    include $filename;
}
include 'shortcodes.php';

foreach (glob(dirname(__FILE__)."/widgets/*.php") as $filename){
    include $filename;
}
include 'functions.php';
include 'ajax.php';

include 'resume/resume.php';
<?php

// Configuration
$title = 'Image Uploader';
$filedir = 'uploads';
$maxsize = 5242880; //max size in bytes
$allowedExts = array('png');
$allowedMime = array('image/png');
$baseurl = $_SERVER['HTTP_HOST'].dirname($_SERVER['REQUEST_URI']).'/'.$filedir;
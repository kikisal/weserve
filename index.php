<?php
/*
-------------------------------------------------------------------

██████╗ ██╗   ██╗    ██╗  ██╗██╗██╗  ██╗██╗███████╗ █████╗ ██╗     
██╔══██╗╚██╗ ██╔╝    ██║ ██╔╝██║██║ ██╔╝██║██╔════╝██╔══██╗██║     
██████╔╝ ╚████╔╝     █████╔╝ ██║█████╔╝ ██║███████╗███████║██║     
██╔══██╗  ╚██╔╝      ██╔═██╗ ██║██╔═██╗ ██║╚════██║██╔══██║██║     
██████╔╝   ██║       ██║  ██╗██║██║  ██╗██║███████║██║  ██║███████╗
╚═════╝    ╚═╝       ╚═╝  ╚═╝╚═╝╚═╝  ╚═╝╚═╝╚══════╝╚═╝  ╚═╝╚══════╝
                                                                   
-------------------------------------------------------------------
                        No Comment.
*/

ini_set( 'display_errors', 'on' );

define( 'APP', true );

define( '__CORE__', $_SERVER['DOCUMENT_ROOT'] . '/core' );
define( '__LIBDIR__', __CORE__ . '/utils/libs' );

require __CORE__ . '/web/SimpleTheme.php';

use KCoreWeb\SimpleTheme;

$theme = new SimpleTheme();

$theme->setTitle( 'DJShop' );

$theme->addResource( 'static' );
$theme->setDirectory('C:\\Users\\giuse\\Documents\\djshop\\radiogeneration-webserver\\');
$theme->setDev(true);

header("Access-Control-Allow-Origin: *");
$theme->load();
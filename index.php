<?php // @codingStandardsIgnoreFile
/**
 * This file is part of Pico. It's copyrighted by the contributors recorded
 * in the version control history of the file, available from the following
 * original location:
 *
 * <https://github.com/picocms/pico-composer/blob/master/index.php>
 *
 * SPDX-License-Identifier: MIT
 * License-Filename: LICENSE
 */

// load dependencies
// pico-composer MUST be installed as root package
if (is_file(__DIR__ . '/vendor/autoload.php')) {
    require_once(__DIR__ . '/vendor/autoload.php');
} else {
    die("Cannot find 'vendor/autoload.php'. Run `composer install`.");
}

// Session laddas in:
require_once(__DIR__ . "/config/config.php");

// instance Pico
$pico = new Pico(
    __DIR__,    // root dir
    'config/',  // config dir
    'plugins/', // plugins dir
    'themes/'   // themes dir
);

// Om action är satt:
if (isset($_GET["action"])) {
    if ($_GET["action"] == "theme") {
        $previousValue = isset($_SESSION["theme"]) ? $_SESSION["theme"] : null;

        // Toggla mörka temat
        // Om mörkt tema redan valt -> Gå tillbaka till vanliga temat
        if ($previousValue == "dark") {
            unset($_SESSION["theme"]);
        } else { // Annars sätt tema till d
            $_SESSION["theme"] = "dark";
        }

        $url = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"];
        $url = preg_replace("/index.php\//", "", $url);
        header("Location: $url");
    }

    if ($_GET["action"] == "session_destroy") {
        session_destroy();

        $url = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"];
        /* Bygga ihop url för hemsidan, där:
        REQUEST_SCHEME = Protokollet (http eller https)
        HTTP_HOST = Basdomänen (localhost eller grundadress/domän såsom www.student.bth.se)
        PHP_SELF = Sökvägen */

        // Fixa lite magi med regex:
        $url = preg_replace("/index.php\//", "", $url);
        header("Location: $url");
    }
}

//$_SESSION["test"] = "testing session";
//session_destroy();

// override configuration?
$pico->setConfig(array(
    'session' => $_SESSION
));

// run application
echo $pico->run();

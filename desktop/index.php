<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="description" content="JavaScript desktop environment built with jQuery."/>
    <title>djared/OS</title>
    <!--[if lt IE 9]>
    <script>
        window.top.location = 'ie.html';
    </script>
    <![endif]-->
    <link rel="stylesheet" href="assets/css/reset.css"/>
    <link rel="stylesheet" href="assets/css/desktop.css"/>
    <link rel="stylesheet" href="assets/css/animate.css"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="assets/css/ie.css"/>
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Roboto:500,400italic,700italic,300,700,500italic,300italic,400'
          rel='stylesheet' type='text/css'>

</head>
<body>
<div class="abs" id="wrapper">
    <div class="abs" id="desktop">
            <a class="abs icon" style="left:20px;top:20px;" href="#icon_dock_computer">
                <img src="assets/images/icons/icon_32_computer.png"/>
                Downloads
            </a>
            <a class="abs icon" style="left:20px;top:100px;" href="#icon_dock_drive">
                <img src="assets/images/icons/icon_32_drive.png"/>
                Antivirus
            </a>
            <a class="abs icon" style="left:20px;top:180px;" href="#icon_dock_disc">
                <img src="assets/images/icons/icon_32_disc.png"/>
                Music
            </a>
            <a class="abs icon" style="left:20px;top:260px;" href="#icon_dock_network">
                <img src="assets/images/icons/icon_32_network.png"/>
                Browser
            </a>
        <a class="abs icon" style="left:20px;top:460px;" href="#icon_dock_test">
            <img src="assets/images/icons/icon_32_network.png"/>
            test
        </a>

            <div id="window_computer" class="abs window animated fadeInUp">
                <div class="abs window_inner">
                    <div class="window_top">
              <span class="float_left">
                <img src="assets/images/icons/icon_32_computer.png"/>
                Downloads
              </span>
              <span class="float_right">
                <a href="#" class="window_min"></a>
                <a href="#" class="window_resize"></a>
                <a href="#icon_dock_computer" class="window_close"></a>
              </span>
                    </div>
                    <div class="abs window_content" style="  background: rgb(122, 134, 153);">
                        <div class="window_aside">

                        </div>
                        <div class="window_main" style="  background: whitesmoke;">
                            <table class="data">
                                <thead>
                                <tr>
                                    <th class="shrink">
                                        &nbsp;
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Date Modified
                                    </th>
                                    <th>
                                        Date Created
                                    </th>
                                    <th>
                                        Size
                                    </th>
                                    <th>
                                        Kind
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/accessories-text-editor-icon.png" width="50"/>
                                    </td>
                                    <td>
                                        Untitled.txt
                                    </td>
                                    <td>
                                        Today
                                    </td>
                                    <td>
                                        &mdash;
                                    </td>
                                    <td>
                                        15 kb
                                    </td>
                                    <td>
                                        File
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="abs window_bottom">
                        Build: TK421
                    </div>
                </div>
                <span class="abs ui-resizable-handle ui-resizable-se"></span>
            </div>
            <div id="window_drive" class="abs window animated fadeInUp"> <!-- anti virus -->
                <div class="abs window_inner">
                    <div class="window_top">
              <span class="float_left">
                <img src="assets/images/icons/icon_32_drive.png"/>
                Antivirus
              </span>
              <span class="float_right">
                <a href="#" class="window_min"></a>
                <a href="#" class="window_resize"></a>
                <a href="#icon_dock_drive" class="window_close"></a>
              </span>
                    </div>
                    <div class="abs window_content" style="background: rgb(52, 186, 105); color: #ffffff;">
                        <div class="window_aside">
                            <span style="font-size: 35px; font-weight: 800;line-height: 1;  text-shadow: 1px 2px 4px green;">Antivirus</span><br>Storage
                            in use: 119.1 GB<br>v.3.12<br>
                            <hr>
                            Last scan: Today

                        </div>
                        <div class="window_main" style="  background: whitesmoke; color: black;">
                            <table class="data">
                                <thead>
                                <tr>
                                    <th class="shrink">
                                        &nbsp;
                                    </th>
                                    <th>
                                        Virus
                                    </th>
                                    <th>
                                        Date Found
                                    </th>
                                    <th>
                                        Date Removed
                                    </th>
                                    <th>
                                        Size
                                    </th>
                                    <th>
                                        Kind
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/alert.png" style="width: 35px;"/>
                                    </td>
                                    <td>
                                        .DS_Store
                                    </td>
                                    <td>
                                        Yesterday
                                    </td>
                                    <td>
                                        &mdash;
                                    </td>
                                    <td>
                                        6 KB
                                    </td>
                                    <td>
                                        Hidden
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/alert.png" style="width: 35px;"/>
                                    </td>
                                    <td>
                                        Default User
                                    </td>
                                    <td>
                                        Today
                                    </td>
                                    <td>
                                        &mdash;
                                    </td>
                                    <td>
                                        &mdash;
                                    </td>
                                    <td>
                                        Folder
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/alert.png" style="width: 35px;"/>
                                    </td>
                                    <td>
                                        Applications
                                    </td>
                                    <td>
                                        Yesterday
                                    </td>
                                    <td>
                                        &mdash;
                                    </td>
                                    <td>
                                        &mdash;
                                    </td>
                                    <td>
                                        Folder
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/alert.png" style="width: 35px;"/>
                                    </td>
                                    <td>
                                        Developer
                                    </td>
                                    <td>
                                        12/29/08
                                    </td>
                                    <td>
                                        &mdash;
                                    </td>
                                    <td>
                                        &mdash;
                                    </td>
                                    <td>
                                        Folder
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/alert.png" style="width: 35px;"/>
                                    </td>
                                    <td>
                                        Library
                                    </td>
                                    <td>
                                        09/11/09
                                    </td>
                                    <td>
                                        &mdash;
                                    </td>
                                    <td>
                                        &mdash;
                                    </td>
                                    <td>
                                        Folder
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/alert.png" style="width: 35px;" style="width: 35px;"/>
                                    </td>
                                    <td>
                                        System
                                    </td>
                                    <td>
                                        Yesterday
                                    </td>
                                    <td>
                                        &mdash;
                                    </td>
                                    <td>
                                        &mdash;
                                    </td>
                                    <td>
                                        Folder
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="abs window_bottom">
                        6 Viruses Found
                    </div>
                </div>
                <span class="abs ui-resizable-handle ui-resizable-se"></span>
            </div>
            <div id="window_disc" class="abs window animated fadeInUp"> <!-- music -->
                <div class="abs window_inner">
                    <div class="window_top">
              <span class="float_left">
                <img src="assets/images/icons/icon_32_disc.png"/>
                Music
              </span>
              <span class="float_right">
                <a href="#" class="window_min"></a>
                <a href="#" class="window_resize"></a>
                <a href="#icon_dock_disc" class="window_close"></a>
              </span>
                    </div>
                    <div class="abs window_content" style="   background: rgb(235, 134, 69); ;">
                        <div class="window_aside align_center" style="color: white; ">
                            <img src="assets/images/misc/album_cover.jpg"/>
                            <br/>
                            <em>Title of Album</em>
                        </div>
                        <div class="window_main" style="background: #f5f5f5; ">
                            <table class="data">
                                <thead>
                                <tr>
                                    <th class="shrink">
                                        &nbsp;
                                    </th>
                                    <th class="shrink">
                                        Track
                                    </th>
                                    <th>
                                        Song Name
                                    </th>
                                    <th class="shrink">
                                        Length
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_disc.png" style="width: 35px;"/>
                                    </td>
                                    <td class="align_center">
                                        01
                                    </td>
                                    <td>
                                        Track One
                                    </td>
                                    <td class="align_right">
                                        3:50
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_disc.png" style="width: 35px;"/>
                                    </td>
                                    <td class="align_center">
                                        02
                                    </td>
                                    <td>
                                        Track Two
                                    </td>
                                    <td class="align_right">
                                        3:50
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="abs window_bottom"
                         style="  color: rgb(232, 128, 60);text-shadow: 0px 1px 0px rgba(182, 103, 51, 1), 0px 2px 0px rgba(182, 103, 51, 1), 0px 3px 0px rgba(182, 103, 51, 1), 0px 4px 0px rgba(182, 103, 51, 1);margin-bottom: 3px;">
                        <i class="fa fa-play fa-fw fa-3x"></i>
                    </div>
                </div>
                <span class="abs ui-resizable-handle ui-resizable-se"></span>
            </div>
            <div id="window_network" class="abs window animated fadeInUp">
                <div class="abs window_inner">
                    <div class="window_top">
              <span class="float_left">
                <img src="assets/images/icons/icon_32_network.png"/>
                Browser
              </span>
              <span class="float_right">
                <a href="#" class="window_min"></a>
                <a href="#" class="window_resize"></a>
                <a href="#icon_dock_network" class="window_close"></a>
              </span>
                    </div>
                    <div class="abs window_content">
                        <div class="window_aside">
                            Local Network Resources
                        </div>
                        <div class="window_main">
                            <table class="data">
                                <thead>
                                <tr>
                                    <th class="shrink">
                                        &nbsp;
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th class="shrink">
                                        Operating System
                                    </th>
                                    <th class="shrink">
                                        Version
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_server.png"/>
                                    </td>
                                    <td>
                                        Urban Terror - <em>Game Server</em>
                                    </td>
                                    <td>
                                        Linux
                                    </td>
                                    <td>
                                        Ubuntu
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_folder_remote.png"/>
                                    </td>
                                    <td>
                                        Shared Project Files
                                    </td>
                                    <td>
                                        Linux
                                    </td>
                                    <td>
                                        Red Hat
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_vpn.png"/>
                                    </td>
                                    <td>
                                        Remote Desktop VPN
                                    </td>
                                    <td>
                                        Windows
                                    </td>
                                    <td>
                                        XP
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_computer.png"/>
                                    </td>
                                    <td>
                                        Michael Scott
                                    </td>
                                    <td>
                                        Mac OS
                                    </td>
                                    <td>
                                        10.5
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_computer.png"/>
                                    </td>
                                    <td>
                                        Dwight Schrute
                                    </td>
                                    <td>
                                        Mac OS
                                    </td>
                                    <td>
                                        10.6
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_computer.png"/>
                                    </td>
                                    <td>
                                        Jim Halpert
                                    </td>
                                    <td>
                                        Mac OS
                                    </td>
                                    <td>
                                        10.6
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_computer.png"/>
                                    </td>
                                    <td>
                                        Pam Beesly
                                    </td>
                                    <td>
                                        Mac OS
                                    </td>
                                    <td>
                                        10.5
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_computer.png"/>
                                    </td>
                                    <td>
                                        Ryan Howard
                                    </td>
                                    <td>
                                        Mac OS
                                    </td>
                                    <td>
                                        10.5
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_computer.png"/>
                                    </td>
                                    <td>
                                        Jan Levinson
                                    </td>
                                    <td>
                                        Mac OS
                                    </td>
                                    <td>
                                        10.5
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_computer.png"/>
                                    </td>
                                    <td>
                                        Roy Anderson
                                    </td>
                                    <td>
                                        Windows
                                    </td>
                                    <td>
                                        7
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_computer.png"/>
                                    </td>
                                    <td>
                                        Stanley Hudson
                                    </td>
                                    <td>
                                        Windows
                                    </td>
                                    <td>
                                        Vista
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_computer.png"/>
                                    </td>
                                    <td>
                                        Kevin Malone
                                    </td>
                                    <td>
                                        Windows
                                    </td>
                                    <td>
                                        Vista
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_computer.png"/>
                                    </td>
                                    <td>
                                        Angela Martin
                                    </td>
                                    <td>
                                        Windows
                                    </td>
                                    <td>
                                        Vista
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_computer.png"/>
                                    </td>
                                    <td>
                                        Oscar Martinez
                                    </td>
                                    <td>
                                        Windows
                                    </td>
                                    <td>
                                        Vista
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_computer.png"/>
                                    </td>
                                    <td>
                                        Phyllis Lapin
                                    </td>
                                    <td>
                                        Windows
                                    </td>
                                    <td>
                                        Vista
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_computer.png"/>
                                    </td>
                                    <td>
                                        Creed Bratton
                                    </td>
                                    <td>
                                        Windows
                                    </td>
                                    <td>
                                        7
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_computer.png"/>
                                    </td>
                                    <td>
                                        Meredith Palmer
                                    </td>
                                    <td>
                                        Windows
                                    </td>
                                    <td>
                                        Vista
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_computer.png"/>
                                    </td>
                                    <td>
                                        Toby Flenderson
                                    </td>
                                    <td>
                                        Windows
                                    </td>
                                    <td>
                                        Vista
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_computer.png"/>
                                    </td>
                                    <td>
                                        Darryl Philbin
                                    </td>
                                    <td>
                                        Windows
                                    </td>
                                    <td>
                                        Vista
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_computer.png"/>
                                    </td>
                                    <td>
                                        Kelly Kapoor
                                    </td>
                                    <td>
                                        Windows
                                    </td>
                                    <td>
                                        Vista
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="assets/images/icons/icon_32_computer.png"/>
                                    </td>
                                    <td>
                                        Andy Bernard
                                    </td>
                                    <td>
                                        Windows
                                    </td>
                                    <td>
                                        Vista
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="abs window_bottom">
                        LAN: Corporate Intranet
                    </div>
                </div>
                <span class="abs ui-resizable-handle ui-resizable-se"></span>
            </div>


        <div id="window_test" class="abs window animated fadeInUp">
            <div class="abs window_inner">
                <div class="window_top">
              <span class="float_left">
                <img src="assets/images/icons/icon_32_network.png"/>
                Browser
              </span>
              <span class="float_right">
                <a href="#" class="window_min"></a>
                <a href="#" class="window_resize"></a>
                <a href="#icon_dock_test" class="window_close"></a>
              </span>
                </div>
                <div class="abs window_content">
                    <div class="window_aside">
                        TESTING
                    </div>
                    <div class="window_main">
                        <table class="data">
                            <thead>
                            <tr>
                                <th class="shrink">
                                    &nbsp;
                                </th>
                                <th>
                                    Name
                                </th>
                                <th class="shrink">
                                    Operating System
                                </th>
                                <th class="shrink">
                                    Version
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_server.png"/>
                                </td>
                                <td>
                                    Urban Terror - <em>Game Server</em>
                                </td>
                                <td>
                                    Linux
                                </td>
                                <td>
                                    Ubuntu
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_folder_remote.png"/>
                                </td>
                                <td>
                                    Shared Project Files
                                </td>
                                <td>
                                    Linux
                                </td>
                                <td>
                                    Red Hat
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_vpn.png"/>
                                </td>
                                <td>
                                    Remote Desktop VPN
                                </td>
                                <td>
                                    Windows
                                </td>
                                <td>
                                    XP
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_computer.png"/>
                                </td>
                                <td>
                                    Michael Scott
                                </td>
                                <td>
                                    Mac OS
                                </td>
                                <td>
                                    10.5
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_computer.png"/>
                                </td>
                                <td>
                                    Dwight Schrute
                                </td>
                                <td>
                                    Mac OS
                                </td>
                                <td>
                                    10.6
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_computer.png"/>
                                </td>
                                <td>
                                    Jim Halpert
                                </td>
                                <td>
                                    Mac OS
                                </td>
                                <td>
                                    10.6
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_computer.png"/>
                                </td>
                                <td>
                                    Pam Beesly
                                </td>
                                <td>
                                    Mac OS
                                </td>
                                <td>
                                    10.5
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_computer.png"/>
                                </td>
                                <td>
                                    Ryan Howard
                                </td>
                                <td>
                                    Mac OS
                                </td>
                                <td>
                                    10.5
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_computer.png"/>
                                </td>
                                <td>
                                    Jan Levinson
                                </td>
                                <td>
                                    Mac OS
                                </td>
                                <td>
                                    10.5
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_computer.png"/>
                                </td>
                                <td>
                                    Roy Anderson
                                </td>
                                <td>
                                    Windows
                                </td>
                                <td>
                                    7
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_computer.png"/>
                                </td>
                                <td>
                                    Stanley Hudson
                                </td>
                                <td>
                                    Windows
                                </td>
                                <td>
                                    Vista
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_computer.png"/>
                                </td>
                                <td>
                                    Kevin Malone
                                </td>
                                <td>
                                    Windows
                                </td>
                                <td>
                                    Vista
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_computer.png"/>
                                </td>
                                <td>
                                    Angela Martin
                                </td>
                                <td>
                                    Windows
                                </td>
                                <td>
                                    Vista
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_computer.png"/>
                                </td>
                                <td>
                                    Oscar Martinez
                                </td>
                                <td>
                                    Windows
                                </td>
                                <td>
                                    Vista
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_computer.png"/>
                                </td>
                                <td>
                                    Phyllis Lapin
                                </td>
                                <td>
                                    Windows
                                </td>
                                <td>
                                    Vista
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_computer.png"/>
                                </td>
                                <td>
                                    Creed Bratton
                                </td>
                                <td>
                                    Windows
                                </td>
                                <td>
                                    7
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_computer.png"/>
                                </td>
                                <td>
                                    Meredith Palmer
                                </td>
                                <td>
                                    Windows
                                </td>
                                <td>
                                    Vista
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_computer.png"/>
                                </td>
                                <td>
                                    Toby Flenderson
                                </td>
                                <td>
                                    Windows
                                </td>
                                <td>
                                    Vista
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_computer.png"/>
                                </td>
                                <td>
                                    Darryl Philbin
                                </td>
                                <td>
                                    Windows
                                </td>
                                <td>
                                    Vista
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_computer.png"/>
                                </td>
                                <td>
                                    Kelly Kapoor
                                </td>
                                <td>
                                    Windows
                                </td>
                                <td>
                                    Vista
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/images/icons/icon_32_computer.png"/>
                                </td>
                                <td>
                                    Andy Bernard
                                </td>
                                <td>
                                    Windows
                                </td>
                                <td>
                                    Vista
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="abs window_bottom">
                    LAN: Corporate Intranet
                </div>
            </div>
            <span class="abs ui-resizable-handle ui-resizable-se"></span>
        </div>


    </div>
    <div class="abs" id="bar_bottom">

        <ul id="dock">
            <li id="icon_dock_computer">
                <a href="#window_computer">
                    <img src="assets/images/icons/icon_32_computer.png"/>
                    Downloads
                </a>
            </li>
            <li id="icon_dock_drive">
                <a href="#window_drive">
                    <img src="assets/images/icons/icon_32_drive.png"/>
                    Antivirus
                </a>
            </li>
            <li id="icon_dock_disc">
                <a href="#window_disc">
                    <img src="assets/images/icons/icon_32_disc.png"/>
                    Music
                </a>
            </li>
            <li id="icon_dock_network">
                <a href="#window_network">
                    <img src="assets/images/icons/icon_32_network.png"/>
                    Browser
                </a>
            </li>
        </ul>
    <span class="float_right" style="font-weight: 200;">
      <span class="" id="clock"></span>
        <a href="#" id="show_desktop" title="Show Desktop" style="float: right; margin-left: 5px;">
            <img src="assets/images/icons/icon_32_desktop.png"/>
        </a>
    </span>
    </div>
</div>

<!--
//~~~~~~~~~~~//
//  Scripts  //
//~~~~~~~~~~~//
-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<script>
    !window.jQuery && document.write(unescape('%3Cscript src="assets/js/jquery.js"%3E%3C/script%3E'));
    !window.jQuery && document.write(unescape('%3Cscript src="assets/js/jquery.ui.js"%3E%3C/script%3E'));
</script>
<script src="assets/js/jquery.desktop.js"></script>
<script src="assets/js/buzz.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>


    var upClick = new buzz.sound("assets/sounds/upClick.mp3");
    var downClick = new buzz.sound("assets/sounds/downClick.mp3");

    $(document)
            .mouseup(function () {
                upClick.stop();
                upClick.play();
            })
            .mousedown(function () {
                downClick.stop();
                downClick.play();
            });
</script>
</body>
</html>
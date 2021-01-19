<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mosyle</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/globalStyles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="https://kit.fontawesome.com/385c7d7d19.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header-dash">
        <nav>
            <ul>
                <div class="user-logged">
                    <li>Danielle Bosco</li>
                </div>
                <div class="navigation-settings">
                    <li><i class="fas fa-cog "></i> Settings</li>
                    <li> <i class="fas fa-power-off"></i>Logout</li>
                </div>
            </ul>
        </nav>
    </header>

    <main class="content">
        <section class="data row width-100 ">
            <div class="devices height-card-data width-card-data data-card-radius">
                <div class="card">
                    <div class="card-header row .align-items-center .space-between-items width-100">
                        <i class="fas fa-laptop"></i>
                        <div class="card-data row align-items-center">
                            <i class="fas fa-redo"></i>
                            <p>20</p>
                        </div>
                    </div>
                    <div class="card-footer row width-100 justify-end align-items-center">
                        <p>Devices</p>
                    </div>
                </div>
            </div>
            <div class="pending-commands height-card-data width-card-data data-card-radius">
                <div class="card">
                    <div class="card-header row .align-items-center .space-between-items width-100">
                        <i class="fas fa-list-ul fa-2x"></i>
                        <div class="card-data row align-items-center">
                            <i class="fas fa-redo"></i>
                            <p>257</p>
                        </div>
                    </div>
                    <div class="card-footer row width-100 justify-end align-items-center">
                        <p>Pending commands</p>
                    </div>
                </div>
            </div>
            <div class="failed-commands height-card-data width-card-data data-card-radius">
                <div class="card">
                    <div class="card-header row .align-items-center .space-between-items width-100">
                        <i class="fas fa-exclamation-triangle"></i>
                        <div class="card-data row align-items-center">
                            <i class="fas fa-redo"></i>
                            <p>2</p>
                        </div>
                    </div>
                    <div class="card-footer row width-100 justify-end align-items-center">
                        <p>Failed Commands</p>
                    </div>
                </div>
            </div>
            <div class="premium height-card-data width-card-data data-card-radius">
                <div class="card">
                    <div class="card-header row .align-items-center space-between-items  width-100">
                        <i class="fas fa-id-card fa-2x"></i>
                        <div class="card-data-single">
                            <p>Premium</p>
                        </div>
                    </div>
                    <div class="card-footer row width-100 justify-end align-items-center">
                        <p>Premium up to: 24/11/2020</p>
                    </div>
                </div>
            </div>
            <div class="push-active height-card-data width-card-data data-card-radius">
                <div class="card">
                    <div class="card-header .align-items-center row space-between-items width-100">
                        <i class="fas fa-rss"></i>
                        <div class="card-data-single">
                            <p>Push active </p>
                        </div>
                    </div>
                    <div class="card-footer row width-100 justify-end align-items-center">
                        <p>Expiration date: 06/07/2020</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="graphics">
            <div class="graphics-data row width-100">
                <div class="pizza-graphic width-50">
                    <div class="information-pizza">
                        <p>Users</p>
                    </div>
                    <div class="graphic">
                        <img src="assets/images/graphic_circle.png" alt="">
                    </div>
                    <div class="legends">
                        <ul>
                            <li><div class="squad green"></div><span>Students</span></li>
                            <li><div class="squad red"></div><span>Teacher</span></li>
                            <li><div class="squad blue"></div><span>Primary Leader</span></li>
                            <li><div class="squad purple"></div><span>Location Leader</span></li>
                            <li><div class="squad yellow"></div><span>Leader</span></li>
                            <li><div class="squad dark-green"></div><span>Staff</span></li>
                            <li><div class="squad brown"></div><span>MSP Admin</span></li>
                        </ul>
                    </div>
                </div>

                <div class="sent-commands-graphic width-50">
                    <div class="information-line">
                        <p><span>Sent Commands</span></p>
                    </div>
                    <div class="graphic">
                    <img src="assets/images/graphic_line.png" alt="" style="width: 100%">
                    </div>
                </div>
            </div>
        </section>
      
        <section class="tables-section">
            <div class="tables row width-100">
                <div class="card last-commands">
                    <div class="card-header purple">
                        <h3>Last Commands Applied by Teachers</h3>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>
                                <div class="icon_user">
                                    <i class="fas fa-user fa-2x"></i>
                                </div>
                                <div class="data_user">
                                    <div class="name_user">
                                        Danilo Sousa  ADMIN applied a Quick Poll
                                    </div>
                                    <div class="data_user">
                                        2020 - Magic
                                    </div>
                                    <div class="time">
                                        1 day ago
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon_user">
                                    <i class="fas fa-user fa-2x"></i>
                                </div>
                                <div class="data_user">
                                    <div class="name_user">
                                        Danilo Sousa  ADMIN applied a Quick Poll
                                    </div>
                                    <div class="data_user">
                                        2020 - Magic
                                    </div>
                                    <div class="time">
                                        1 day ago
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon_user">
                                    <i class="fas fa-user fa-2x"></i>
                                </div>
                                <div class="data_user">
                                    <div class="name_user">
                                        Danilo Sousa  ADMIN applied a Quick Poll
                                    </div>
                                    <div class="data_user">
                                        2020 - Magic
                                    </div>
                                    <div class="time">
                                        1 day ago
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon_user">
                                    <i class="fas fa-user fa-2x"></i>
                                </div>
                                <div class="data_user">
                                    <div class="name_user">
                                        Danilo Sousa  ADMIN applied a Quick Poll
                                    </div>
                                    <div class="data_user">
                                        2020 - Magic
                                    </div>
                                    <div class="time">
                                        1 day ago
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon_user">
                                    <i class="fas fa-user fa-2x"></i>
                                </div>
                                <div class="data_user">
                                    <div class="name_user">
                                        Danilo Sousa  ADMIN applied a Quick Poll
                                    </div>
                                    <div class="data_user">
                                        2020 - Magic
                                    </div>
                                    <div class="time">
                                        1 day ago
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card alerts">
                    <div class="card-header dark-gray">
                        <h3>Alerts</h3>
                        <h3>See more</h3>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>
                                <div class="icon_user">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="data_user">
                                    <div class="name_user">
                                        <p>
                                            Students without a Class Period
                                        </p>
                                    </div>
                                    <div class="time">
                                       62820
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon_user">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="data_user">
                                    <div class="name_user">
                                        <p>
                                            Students without a Class Period
                                        </p>
                                    </div>
                                    <div class="time">
                                       62820
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon_user">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="data_user">
                                    <div class="name_user">
                                        <p>
                                            Students without a Class Period
                                        </p>
                                    </div>
                                    <div class="time">
                                       62820
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon_user">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="data_user">
                                    <div class="name_user">
                                        <p>
                                            Students without a Class Period
                                        </p>
                                    </div>
                                    <div class="time">
                                       62820
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon_user">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="data_user">
                                    <div class="name_user">
                                        <p>
                                            Students without a Class Period
                                        </p>
                                    </div>
                                    <div class="time">
                                       62820
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon_user">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="data_user">
                                    <div class="name_user">
                                        <p>
                                            Students without a Class Period
                                        </p>
                                    </div>
                                    <div class="time">
                                       62820
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
   
</body>
</html>
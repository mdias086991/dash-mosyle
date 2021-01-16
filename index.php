<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mosyle</title>

    <link rel="stylesheet" href="assets/css/style.css">
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
                    <li><i class="fas fa-cog"></i> Settings</li>
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
                        <i class="fas fa-list-ul"></i>
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
                        <i class="fas fa-id-card"></i>
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
    </main>
   
</body>
</html>
<div class="page-wrapper legacy-theme bg1 toggled border-radius-on">
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <!-- sidebar-brand  -->
            <div class="sidebar-item sidebar-brand">
                <a href=".">Сервис-центр</a>
            </div>
            <!-- sidebar-header  -->
            <div class="sidebar-item sidebar-header d-flex flex-nowrap">
                <div class="user-pic">
                    <img class="img-responsive img-rounded" <?php print('src="'. $user['avatar'].'"'); ?> alt="User picture">
                </div>
                <div class="user-info">
                    <span class="user-name">
                        <strong><?php print($user['name']); ?></strong>
                    </span>
                    <span class="user-role"><?php print($user['role']); ?></span>
                    <span class="user-status">
                        <i class="fa fa-circle"></i>
                        <span>Online</span>
                    </span>
                </div>
            </div>
            <div class=" sidebar-item sidebar-menu">
                <ul>
                    <li class="header-menu">
                        <span>Основное</span>
                    </li>
                    <li class="sidebar-item" style="border-top:none;">
                        <a href=".">
                            <i class="fa fa-tachometer-alt"></i>
                            <span class="menu-text">Главная</span>
                            
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="menu-text">Заказы</span>
                           <!--  <span class="badge badge-pill badge-danger">3</span> -->
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="index.php?page=newtask">Добавить новый</a>
                                </li>
                                <li>
                                    <a href="index.php?page=managetask">Управление заказами</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="far fa-gem"></i>
                            <span class="menu-text">Комплектующие</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="index.php?page=neworder">Сделать заказ</a>
                                </li> 
                                <li>
                                    <a href="index.php?page=takeorder">Принять заказ</a>
                                </li>
                                <li>
                                    <a href="index.php?page=manageorder">Склад</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                     <li class="sidebar-item" style="border-top:none;">
                        <a href="index.php?page=report">
                            <i class="fa fa-chart-line"></i>
                            <span class="menu-text">Отчеты</span>
                            
                        </a>
                    </li>
                    <li class="header-menu">
                        <span>Дополнительно</span>
                    </li>
                    <li>
                        <a href="index.php?page=documentation">
                            <i class="fa fa-book"></i>
                            <span class="menu-text">Документация</span>
                            <span class="badge badge-pill badge-primary">В разработке</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-footer  -->
        <div class="sidebar-footer">
<!--   
          <div class="dropdown">
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-warning notification">3</span>
                </a>
                <div class="dropdown-menu notifications" aria-labelledby="dropdownMenuMessage">
                    <div class="notifications-header">
                        <i class="fa fa-bell"></i>
                        Notifications
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div class="notification-content">
                            <div class="icon">
                                <i class="fas fa-check text-success border border-success"></i>
                            </div>
                            <div class="content">
                                <div class="notification-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. In totam explicabo</div>
                                <div class="notification-time">
                                    6 minutes ago
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="notification-content">
                            <div class="icon">
                                <i class="fas fa-exclamation text-info border border-info"></i>
                            </div>
                            <div class="content">
                                <div class="notification-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. In totam explicabo</div>
                                <div class="notification-time">
                                    Today
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="notification-content">
                            <div class="icon">
                                <i class="fas fa-exclamation-triangle text-warning border border-warning"></i>
                            </div>
                            <div class="content">
                                <div class="notification-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. In totam explicabo</div>
                                <div class="notification-time">
                                    Yesterday
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-center" href="#">View all notifications</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <div class="dropdown-menu messages" aria-labelledby="dropdownMenuMessage">
                    <div class="messages-header">
                        <i class="fa fa-envelope"></i>
                        Messages
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div class="message-content">
                            <div class="pic">
                                <img src="img/user.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="message-title">
                                    <strong> Jhon doe</strong>
                                </div>
                                <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. In totam explicabo</div>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="message-content">
                            <div class="pic">
                                <img src="img/user.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="message-title">
                                    <strong> Jhon doe</strong>
                                </div>
                                <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. In totam explicabo</div>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="message-content">
                            <div class="pic">
                                <img src="img/user.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="message-title">
                                    <strong> Jhon doe</strong>
                                </div>
                                <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. In totam explicabo</div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-center" href="#">View all messages</a>
                </div>
            </div> 
        -->
            <div>
                <a href="exit.php">
                    <i class="fa fa-power-off"> </i> Выход
                </a>
            </div>
            <div class="pinned-footer">
                <a href="#">
                    <i class="fas fa-ellipsis-h"></i>
                </a>
            </div>
        </div>
    </nav>

    <!--  -->
    <main class="page-content">
        <div id="overlay" class="overlay"></div>
        <nav class="navbar navbar-expand-lg navbar-light sidebar-item border-bottom" style="border-color:rgba(50,50,50,.6);padding-bottom: 9px;position: fixed;width: 100%;background: rgba(255,255,255,.8);backdrop-filter:blur(10px);z-index: 2;">
            <a class="navbar-brand d-none d-lg-block" style="color:white;">
                <a id="toggle-sidebar" class="btn btn-light border rounded-2">
                    <i class="fas fa-bars"></i>
                </a>
              </a>
            <a class="navbar-brand d-none d-lg-block" style="color:white;">
                <a id="toggle-dark" class="btn btn-light border rounded-2">
                    <i class="fas fa-moon"></i>
                </a>
              </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link btn-sm btn-light border rounded-2 ml-4" href=".">Главная <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-sm btn-light border rounded-2 ml-1" href="index.php?page=newtask"><i class="fas fa-plus"></i> Новый заказ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-sm btn-light border rounded-2 ml-1" href="index.php?page=neworder"><i class="fas fa-tags"></i> Запросить товар</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="mb-5"></div>

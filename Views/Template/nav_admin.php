    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media(); ?>/images/avatar.png" alt="User Image">
            <div>
                <p class="app-sidebar__user-name">David Cepeda</p>
                <p class="app-sidebar__user-designation">Frontend Dev.</p>
            </div>
        </div>
        <ul class="app-menu">
            <li>
                <a class="app-menu__item" href="<?= base_url(); ?>/dashboard">
                    <i class="app-menu__icon fas fa-circle-notch"></i><span class="app-menu__label">Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a class="app-menu__item" href="#" data-toggle="treeview">
                    <i class="app-menu__icon fas fa-user-friends"></i>
                    <span class="app-menu__label">Usuarios</span><i class="treeview-indicator fa fa-angle-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a class="treeview-item" href="<?= base_url(); ?>/usuarios">
                            <i class="icon fa fa-caret-right"></i> Usuarios
                        </a>
                    </li>

                    <li>
                        <a class="treeview-item" href="<?= base_url(); ?>/roles" rel="noopener">
                            <i class="icon fa fa-caret-right"></i> Roles
                        </a>
                    </li>

                    <li>
                        <a class="treeview-item" href="<?= base_url(); ?>/permisos">
                            <i class="icon icon fa fa-caret-right"></i> Permisos
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="app-menu__item" href="<?= base_url(); ?>/clientes">
                    <i class="app-menu__icon fas fa-user-check"></i>
                    <span class="app-menu__label">Clientes</span>
                </a>
            </li>

            <li>
                <a class="app-menu__item" href="<?= base_url(); ?>/productos">
                    <i class="app-menu__icon fas fa-tshirt"></i>
                    <span class="app-menu__label">Productos</span>
                </a>
            </li>

            <li>
                <a class="app-menu__item" href="<?= base_url(); ?>/pedidos">
                    <i class="app-menu__icon fas fa-box"></i>
                    <span class="app-menu__label">Pedidos</span>
                </a>
            </li>

            <li>
                <a class="app-menu__item" href="<?= base_url(); ?>/logout">
                    <i class="app-menu__icon fa fa-sign-out"></i>
                    <span class="app-menu__label">Logout</span>
                </a>
            </li>

        </ul>
    </aside>
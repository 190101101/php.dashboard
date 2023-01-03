<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3">Blog</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

    <?php if(segment(2) != 'admin'): ?>
    <form action="/panel/<?php echo segment(2); ?>/search/key/value" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <select class="form-control form-control-sm mr-1" name="field_key">
                <?php foreach(db()->columns(segment(2)) as $key): ?>
                <?php $keys = explode('_', $key); ?>
                    <option value="<?php echo $key; ?>"><?php echo $keys[1]; ?></option>
                <?php endforeach; ?>
            </select>
            <input class="form-control" type="text" name="field_value" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <?php else: ?>
        <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></div>
    <?php endif; ?>

    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="/signout">Logout</a></li>
                <li><a class="dropdown-item" href="/panel/<?php echo segment(2); ?>/create">create</a></li>
            </ul>
        </li>
    </ul>
</nav>
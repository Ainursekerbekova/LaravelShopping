<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Snow Shopping</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/prod">Items</a></li>

            <li class="dropdown" id="change_admin1">
                <?php if(auth()->guard()->guest()): ?>
                <a class='dropdown-toggle' data-toggle='dropdown' href='orders.blade.php'><img id='basket_icon' src='css/images/profile.png'></a>
                <ul class='dropdown-menu'>
                    <li><a href='/login'>Sigh In</a></li>
                    <li><a href='/reg'>Sign Up</a></li>
                </ul>
                <?php else: ?>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <?php echo e(Auth::user()->name); ?>

                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" style="color: black" href="<?php echo e(route('logout')); ?>"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </li>
            <?php if(Auth::user()->name == 'Admin' ): ?>
            <li><a href="/orders">ALL ORDERS</a></li>
            <?php else: ?>
            <li class="nav-item dropdown">
                <a href='/basket'><img id='basket_icon' src='css/images/basket.png'></a>
            </li>
            <?php endif; ?>
            <?php endif; ?>
        </ul>
    </div>
</nav>

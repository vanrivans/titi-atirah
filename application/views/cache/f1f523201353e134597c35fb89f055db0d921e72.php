<nav class="navbar navbar-sosial-media">
    <div class="container-fluid">
        <div class="navbar-text">
            <span>
                <?php echo $__env->make('Layouts.icons.email', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> celebesmaritim@gmail.com
            </span>
            <span>
                <?php echo $__env->make('Layouts.icons.phone', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> +6285299597060
            </span>
        </div>
        <div class="navbar-text">
            <ul class="navbar-nav link-sosial-media">
                <li class="nav-item">
                    <a href="" target="_blank" class="nav-link"><?php echo $__env->make('Layouts.icons.ig', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></a>
                </li>
                <li class="nav-item">
                    <a href="" target="_blank" class="nav-link"><?php echo $__env->make('Layouts.icons.twitter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></a>
                </li>
                <li class="nav-item">
                    <a href="" target="_blank" class="nav-link"><?php echo $__env->make('Layouts.icons.fb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></a>
                </li>
                <li class="nav-item">
                    <a href="" target="_blank" class="nav-link"><?php echo $__env->make('Layouts.icons.email', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-main navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img class="img-logo" src="<?=base_url();?>assets/logo/logo.jpg" alt="Celebes Maritim logo" title="Celebes Maritim logo" width="50" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="bi-list"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?=base_url();?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url();?>#about-us">Abous us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink_products" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink_products">
                        <li><a class="dropdown-item" href="#">Fruit</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url();?>#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url();?>#location">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url();?>#contact-us">Contact us</a>
                </li>
            </ul>
            <div class="navbar-text">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown nav-item-flag">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink_flag" role="button" data-bs-toggle="dropdown" aria-expanded="false">    
                            <span>English <?php echo $__env->make('Layouts.icons.flag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink_flag">
                            <li><a class="dropdown-item" href="#">English <?php echo $__env->make('Layouts.icons.flag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\titi-atirah\application\modules/Layouts/config/_navbar.blade.php ENDPATH**/ ?>
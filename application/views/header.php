<header class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo site_url(); ?>" class="navbar-brand">Pykotech</a>
        </div>
        <nav class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo site_url(); ?>">Home</a></li>

                <li><a href="#about">About</a></li>
                <li><a href="<?php echo site_url('portfolio'); ?>">Portfolio</a></li>
                <li><a href="<?php echo site_url('blog')?>">Tech Blog</a></li>
		<li><a target="_blank" href="https://github.com/pykotech">Pykotech on Github</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('login'); ?>">Login <span class="badge">3</span></a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="row">
    <div class="col-md-3">
        <?php echo $pagelet_sidebar; ?>
    </div>
    <div class="col-md-9">
        <div>
            <h1 id="welcome">Welcome to Pykotech</h1>
            <p>We develop web application using PHP and Content Management Systems such as Wordpress and Drupal</p>
            <p>
                If you would like to edit this page you'll find it located at:<br>
                <code>application/modules/skeleton/views/index.php</code>
            </p>
            <p>
                The corresponding controller for this page is found at:<br>
                <code>application/modules/skeleton/controllers/skeleton.php</code>
            </p>
            <p>
                If you are exploring CodeIgniter for the very first time, you should start by reading the
                <a target="_blank" href="http://ellislab.com/codeigniter/user-guide/">User Guide</a>.
            </p>
            <p>
                Page rendered in <strong>{elapsed_time}</strong> seconds.
                <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
            </p>
        </div>
        <?php foreach ($skeleton_data as $key => $items): ?>
            <div>
                <div class="page-header">
                    <h1 id="<?php echo $key; ?>"><?php echo ucfirst(str_replace('-', ' ', $key)); ?></h1>
                </div>
                <?php if ( ! empty($items)): ?>
                    <div>
                    <?php foreach ($items as $sub_key => $label): ?>
                        <h2 id="<?php echo $sub_key; ?>"><?php echo $label; ?></h2>
                        <?php echo $this->load->view('content/pagelet_' . str_replace('-', '_', $sub_key), TRUE); ?>
                    <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>

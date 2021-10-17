<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="<?php echo csrf_token() ?>">
    <!-- Load các thẻ meta -->
    <?php

    if (!empty($dataMeta)) {
        $this->view('blocks.clients.meta', $dataMeta);
    }

    ?>

    <!-- Title -->
    <title>
        <?php
        echo !empty($page_title) ? $page_title : 'Trang chủ';
        ?>
    </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo _WEB_ROOT; ?>/public/clients/images/favicon.ico">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>

    <!-- CSS Style -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link href="<?php echo _WEB_ROOT; ?>/public/clients/css/lib/bootstrap-grid.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo _WEB_ROOT; ?>/public/clients/css/lib/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo _WEB_ROOT; ?>/public/clients/css/lib/splide.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo _WEB_ROOT; ?>/public/clients/css/lib/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo _WEB_ROOT; ?>/public/clients/css/until/food-lib.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo _WEB_ROOT; ?>/public/clients/css/until/header.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo _WEB_ROOT; ?>/public/clients/css/until/header-product.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo _WEB_ROOT; ?>/public/clients/css/until/footer.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo _WEB_ROOT; ?>/public/clients/css/until/banner.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo _WEB_ROOT; ?>/public/clients/css/until/main.css" rel="stylesheet" type="text/css" />

    <!-- Load thư viện css cần sử dụng -->
    <?php

    if (!empty($libraryCSS)) {
        $this->view('blocks.clients.lib_css', $libraryCSS);
    }

    ?>

</head>

<body class="cms-index-index">

    <!-- load header -->
    <?php

    if (!empty($data_header)) {
        $this->view('blocks.clients.header_new', $data_header);
    } else {
        $this->view('blocks.clients.header_new');
    }

    ?>

    <!-- load slider -->
    <?php

    if (!empty($data_slider)) {
        $this->view('blocks.clients.slider', $data_slider);
    }

    ?>

    <!-- load content -->
    <?php

    if (!empty($sub_content)) {
        $this->view($content, $sub_content);
    } else {
        $this->view($content);
    }

    ?>

    <!-- load footer -->
    <?php

    if (!empty($data_footer)) {
        $this->view('blocks.clients.footer_new', $data_footer);
    } else {
        $this->view('blocks.clients.footer_new');
    }

    ?>

    <!-- Load thư viện js cần sử dụng -->
    <?php

    if (!empty($libraryJS)) {
        $this->view('blocks.clients.lib_js', $libraryJS);
    }

    ?>

    <script src="<?php echo _WEB_ROOT; ?>/public/clients/js/lib/jquery.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/clients/js/lib/splide.min.js" type="text/javascript"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/clients/js/lib/jquery.lazy.min.js" type="text/javascript"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/clients/js/lib/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/clients/js/lib/util.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/clients/js/lib/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/clients/js/lib/tooltip.js" type="text/javascript"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/clients/js/until/header.js" type="text/javascript"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/clients/js/until/header-product.js" type="text/javascript"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/clients/js/until/footer.js" type="text/javascript"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/clients/js/until/banner.js" type="text/javascript"></script>

    <!-- load script thêm -->
    <?php

    if (!empty($data_js)) {
        foreach ($data_js as $key => $value) {
            $this->view($value);
        }
    }

    ?>

</body>

</html>
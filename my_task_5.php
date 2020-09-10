<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Решение
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <?php 
                    $pill = [
                        $pill = [
                        'name' => 'Sunny A. (UI/UX Expert)',
                        'prof' => 'Lead Author',
                        'photo' => 'img/demo/authors/sunny.png',
                        'social' => '@myplaneticket',
                        'linksocial' => 'https://twitter.com/@myplaneticket',
                        'email' => 'a.sunny@mail.dev',
                        ],
                        $pill = [
                        'name' => 'Jos K. (ASP.NET Developer)',
                        'prof' => 'Partner & Contributor',
                        'photo' => 'img/demo/authors/josh.png',
                        'social' => '@atlantez',
                        'linksocial' => 'https://twitter.com/@atlantez',
                        'email' => 'k.jos@mail.dev',
                        ],
                        $pill = [
                        'name' => 'Jovanni L. (PHP Developer)',
                        'prof' => 'Partner & Contributor',
                        'photo' => 'img/demo/authors/jovanni.png',
                        'social' => '@lodev09',
                        'linksocial' => 'https://twitter.com/@lodev09',
                        'email' => 'l.jovanni@mail.dev',
                        ],
                        $pill = [
                        'name' => 'Roberto R. (Rails Developer)',
                        'prof' => 'Partner & Contributor',
                        'photo' => 'img/demo/authors/roberto.png',
                        'social' => '@sildur',
                        'linksocial' => 'https://twitter.com/@sildur',
                        'email' => 'r.roberto@mail.dev',
                        ]
                    ];
                    //var_dump($pill);
                    ?>
                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            <?php
                            foreach ($pill as $pill) {
                            echo '<div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">';
                            echo '<img src="'; echo $pill['photo']; echo'"'; echo 'alt="Sunny A." class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">';
                                echo '<div class="ml-2 mr-3">';
                                    echo '<h5 class="m-0">';
                                        echo $pill['name'];
                                        echo '<small class="m-0 fw-300">';
                                            echo $pill['prof'];
                                        echo '</small>';
                                    echo '</h5>';
                                    echo '<a href="https://twitter.com/'; echo $pill['social']; echo '"'; echo' class="text-info fs-sm" target="_blank">'; echo $pill['social']; echo '</a> -
                                    <a href="mailto:'; echo $pill['email']; echo '" class="text-info fs-sm" target="_blank" title="Contact'; echo $pill['name']; echo '"><i class="fal fa-envelope"></i></a>';
                                echo '</div>';
                            echo '</div>';
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>

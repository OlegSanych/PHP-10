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
                    $progressbar = [
                        $progressbar = [
                        'ContClass' => 'd-flex mt-2',
                        'textClass' => 'd-inline-block ml-auto',
                        'barClass' => 'progress progress-sm mb-3',
                        'barBgClass' => 'progress-bar bg-fusion-400',
                        'textName' => 'My Tasks',
                        'textValue' => '130 / 500',
                        'width' => '65'
                        ],
                        $progressbar = [
                        'ContClass' => 'd-flex',
                        'textClass' => 'd-inline-block ml-auto',
                        'barClass' => 'progress progress-sm mb-3',
                        'barBgClass' => 'progress-bar bg-success-500',
                        'textName' => 'Transfered',
                        'textValue' => '440 TB',
                        'width' => '34'
                        ],
                        $progressbar = [
                        'ContClass' => 'd-flex',
                        'textClass' => 'd-inline-block ml-auto',
                        'barClass' => 'progress progress-sm mb-3',
                        'barBgClass' => 'progress-bar bg-info-400',
                        'textName' => 'Bugs Squashed',
                        'textValue' => '77%',
                        'width' => '77'
                        ],
                        $progressbar = [
                        'ContClass' => 'd-flex',
                        'textClass' => 'd-inline-block ml-auto',
                        'barClass' => 'progress progress-sm mb-3',
                        'barBgClass' => 'progress-bar bg-primary-300',
                        'textName' => 'User Testing',
                        'textValue' => '7 days',
                        'width' => '84'
                        ]
                    ];
                    
                    //var_dump($progressbar);
                    ?>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <?php 
                            foreach ($progressbar as $progressbar) {
                            echo '<div class="'; echo $progressbar['ContClass']; echo'">';
                            echo $progressbar['textName'];
                            echo '<span class="'; echo $progressbar['textClass']; echo'">';
                            echo $progressbar['textValue'];
                            echo '</span>';
                            echo '</div>';
                            echo '<div class="'; echo $progressbar['barClass']; echo'">';
                            echo '<div class="'; echo $progressbar['barBgClass']; echo'"'; echo'role="progressbar" style="width:'; echo $progressbar['width']; echo'%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">';
                            echo '</div>';
                            echo '</div>';
                            }
                            ?>
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

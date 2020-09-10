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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="form-group">
                                    <?php
                                    //Подключение к БД
                                        $host = 'localhost';
                                        $database = 'bd_my_task_9_10';
                                        $user = 'root';
                                        $password = '';
                                    
                                    if(isset($_POST['text'])){
                                        $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
                                    // Экранирования символов для mysql
                                        $text = htmlentities(mysqli_real_escape_string($link, $_POST['text']));
                                    //Инициализация запроса на добавление в БД
                                        $query ="INSERT INTO text9 VALUES(NULL, '$text')";
                                    // Запрос на добавление в БД
                                        $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link)); 
                                        if($result)
                                        {
                                            echo '<div class="alert alert-success fade show" role="alert">
                                                Данные добавлены в базу данных!
                                            </div>';
                                        }
                                    // Закрываем подключение к БД
                                        mysqli_close($link);
                                    }
                                    ?>
                                    <form method="POST">
                                        <label class="form-label" for="simpleinput">Введите текст</label>
                                        <input type="text" name="text" id="simpleinput" class="form-control">
                                        <button class="btn btn-success mt-3">Добавить</button>
                                    </form>
                                </div>
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

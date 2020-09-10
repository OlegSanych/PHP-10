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
                            <h5 class="frame-heading">
                                Список пользователей
                            </h5>
                            <div class="frame-wrap">
                            <?php
                            //Подключение к БД
                            $host = 'localhost';
                            $database = 'bd_my_task_8';
                            $user = 'root';
                            $password = '';
                            
                            $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
                            //Получение данных из БД
                            $sql = 'SELECT * FROM users';
                            $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
                            //Объявление массива куда собираем полученные данные
                            $users = array();
                            while ($data = mysqli_fetch_assoc($result)) {
                                $users[] = $data;
                            }
                            //var_dump($users);
                            mysqli_close($link); 
                            ?>
                            <?php
                            echo '<table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
                                    foreach ($users as $users) {
                                        echo '<tr>';
                                            echo '<th scope="row">'; echo $users['id']; echo '</th>';
                                            echo '<td>'; echo $users['firstName']; echo '</td>';
                                            echo '<td>'; echo $users['lastName']; echo '</td>';
                                            echo '<td>'; echo $users['userName']; echo '</td>';
                                            echo '<td>';
                                                echo '<a href="show.php?id='; echo $users['id']; echo '" class="btn btn-info">Редактировать</a>';
                                                echo '<a href="edit.php?id='; echo $users['id']; echo '" class="btn btn-warning">Изменить</a>';
                                                echo '<a href="delete.php?id='; echo $users['id']; echo '" class="btn btn-danger">Удалить</a>';
                                            echo '</td>';
                                        echo '</tr>'; 
                                    }
                                    echo '</tbody>';
                            echo '</table>';   
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

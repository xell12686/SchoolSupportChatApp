<?php
/**
 * School Support Chat console
 *
 */
require_once '../config.php';
// database initialization 
$connection = mysqli_connect($sql_server, $sql_user_name, $sql_password,$sql_database_name)or die('Configuration Error  : Can\'t login to the database');

require_once './include/ChatConsole.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Chat Console</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/flat-ui.css">      
        <link rel="stylesheet" href="../assets/css/jquery.fileupload.css">  
        <link rel="stylesheet" href="../assets/css/theme.bootstrap.css">
        <link rel="stylesheet" href="../assets/css/filter.formatter.css">
        <link rel="stylesheet" href="../assets/css/colpick.css">
        <link rel="stylesheet" href="../assets/css/admin.css">
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type='text/javascript' src='../assets/js/jquery-ui-1.10.3.custom.min.js'></script>
        <script type='text/javascript' src='../assets/js/jquery.ui.touch-punch.min.js'></script>
        <script type='text/javascript' src='../assets/js/bootstrap.min.js'></script>
        <script type='text/javascript' src='../assets/js/moment.min.js'></script>
        <script type='text/javascript' src='../assets/js/bootstrap-select.js'></script>
        <script type='text/javascript' src='../assets/js/bootstrap-switch.js'></script>
        <script type='text/javascript' src='../assets/js/flatui-checkbox.js'></script>
        <script type='text/javascript' src='../assets/js/flatui-radio.js'></script>
        <script type='text/javascript' src='../assets/js/jquery.tagsinput.js'></script>
        <script type='text/javascript' src='../assets/js/jquery.placeholder.js'></script>
        <script type='text/javascript' src='../assets/js/jquery.nicescroll.js'></script>
        <script type='text/javascript' src='../assets/js/jquery.tablesorter.min.js'></script>
        <script type='text/javascript' src='../assets/js/jquery.tablesorter.widgets.min.js'></script>
        <script type='text/javascript' src='../assets/js/widget-pager.js'></script>
        <script type='text/javascript' src='../assets/js/colpick.js'></script>
        <script type='text/javascript' src='../assets/js/jquery.fileupload.js'></script>
        <script type='text/javascript' src='../assets/js/application.js'></script>
        <script type='text/javascript' src='../assets/js/admin_login.js'></script>

        <?php
        if (isset($_POST['email'])) {
            ?>
            <script>
    <?php
    $sql_operator = mysqli_query($connection,'SELECT * FROM ' . $sql_prefix . 'operators WHERE email="' . mysqli_real_escape_string($connection,$_POST['email']) . '" AND pass="' . mysqli_real_escape_string($connection,$_POST['pass']) . '" LIMIT 1') or die(mysqli_error($connection));
    
    $data_operator = mysqli_fetch_object($sql_operator);    
    echo 'var vcht_operatorID = "' . $data_operator->id . '";';
    echo 'var vcht_operator = "' . $data_operator->username . '";';
    echo 'var vcht_operatorAvatar = "' . $data_operator->picture . '";';
    ?>
            </script>
            <script type='text/javascript' src='../assets/js/admin.js'></script>
            <?php
        }
        ?>
    </head>
    <body>
        <?php
        $chatConsole = new ChatConsole($sql_prefix,$connection);
        ?>
    </body>
</html>
<?php
mysqli_close($connection);
?>
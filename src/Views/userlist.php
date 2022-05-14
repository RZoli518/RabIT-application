<!DOCTYPE html>
<html>
    <head>
        <style>
            <?php include "style.scss" ?>
        </style>
    </head>
    <body>
        <div class="container">
            <div class="column column-a">
            </div>
            <div class="column column-b centered">
                <div class="head">
                    <h1>RabIT Application</h1>
                </div>
                <div class="tablediv">
                    <table>
                        <thead>
                            <th>ID</th>
                            <th>Username</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach($viewData['data'] as $user){ ?>
                                <tr>
                                    <td> <?php echo $user['id'] ?> </td>
                                    <td> <?php echo $user['name'] ?> </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class=navbtns>
                    <a href="http://localhost/RabIT_application/RabIT-application/src/index.php?home&data=mvc">Home</a>
                    <a href="http://localhost/RabIT_application/RabIT-application/src/index.php?ad&data=mvc">Advertisements</a>
                </div>     
            </div>
            <div class="column column-c"> </div>
        </div>
    </body>
</html>
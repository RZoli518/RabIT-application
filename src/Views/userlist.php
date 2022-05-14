
<html>
    <head>
        <style>
            <?php include "style.scss" ?>
        </style>
    </head>
    <body>
        <div class="container">
            <div class="column column-a">
            a
            </div>
            <div class="column column-b">
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
                <a href="http://localhost/RabIT_application/RabIT-application/src/index.php?home&data=mvc">Home</a>
                <a href="http://localhost/RabIT_application/RabIT-application/src/index.php?ad&data=mvc">Advertisements</a>
            </div>
            <div class="column column-c">
            c
            </div>
        </div>
    </body>
</html>
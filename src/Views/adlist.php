<!DOCTYPE html>
<html>
    <style>
        <?php include "style.css" ?>
    </style>
    <head>
        <h1>RabIT Aplication</h1>
    </head>
    <body>
        <div class=table>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Ad Title</th>
                    <th>User</th>
                </tr>
                <?php
                    foreach($viewData['data'] as $advert){ ?>
                        <tr>
                            <td> <?php echo $advert['id'] ?> </td>
                            <td> <?php echo $advert['title'] ?> </td>
                            <td> <?php echo $advert['userid'] ?> </td>
                        </tr>
                    <?php } ?>
            </table>
        </div>
        <div class=buttons>
            <a href="http://localhost/RabIT_application/RabIT-application/src/index.php?home&data=mvc">Home</a>
            <a href="http://localhost/RabIT_application/RabIT-application/src/index.php?user&data=mvc">Users</a>
        </div>
        

    </body>
</html>
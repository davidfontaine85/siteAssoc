<?php
    session_start();
    
    require('./inc/header_admin.php');
    require('./inc/head_admin.php');
    require('./inc/connect.php');
    require('./inc/functions.php');
    if(empty($_SESSION['user_name'])) {
        header('Location: index.php');
    } else {
?>
    <section class="section-1 d-flex">
        <div class="col-sm-3 d-flex flex-column bg-dark py-1 menu">
            <ul>
                <li class="text-light  border border-light bg-secondary mb-5 "><h5 class="text-center">Control Panel</h5></li>
                <li class="text-light mb-2 news-leader">News <i class="fas fa-angle-down"></i>
                    <ul class="p-3 news-admin">
                        <li class="m-2" data-toggle="modal" data-target="#addNewsModal">+ Ajouter une news</li>
                        <li class="m-2" data-toggle="modal" data-target="#deletNewsModal">+ Supprimer une news</li>
                        <li class="m-2" data-toggle="modal" data-target="#modifyNewsModal">+ Modifier une news</li>
                        <li class="m-2" data-toggle="modal" data-target="#updateCommentModal">+ Modérer un commentaire</li>
                    </ul>
                </li>
                <li class="text-light mb-2 mail-leader">Mailing <i class="fas fa-angle-down"></i>
                    <ul class="p-3 mail-admin">
                        <li class="m-2" data-toggle="modal" data-target="#sendMailModal">+ Ecrire un mail</li>
                    </ul>
                </li>
                <li class="text-light mb-2 user-leader">Admin <i class="fas fa-angle-down"></i>
                    <ul class="p-3 user-admin">
                        <li class="m-2" data-toggle="modal" data-target="#addUserModal">+ Ajouter utilisateur</li>
                        <li class="m-2" data-toggle="modal" data-target="#removeUserModal">+ Supprimer utilisateur</li>
                    </ul>
                </li>
            </ul>
            <button type="button" class="btn btn-warning mt-auto mb-5 p-2 exit-admin"><a href="index.php">Sortie <i class="fas fa-sign-out-alt ml-1"></i></a></button>
        </div>
        <div class="col-sm-9 py-2 display-admin">
            <?php displayNews(); ?>
        </div>
    </section>
    <?php
    }
?>








<?php
    require('./inc/footer_admin.php');
?>
<?php
    session_start();
    require('connect.php');

    if($_POST['updateNewsChoice'] != '') {

        
        $sqli = "SELECT * FROM news WHERE id = :id LIMIT 1";
        $req = $db->prepare($sqli);
        $req->bindParam(':id', $_POST['updateNewsChoice']);
        $req->execute();
        $row = $req->fetch();

        ?>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier Une News :</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex flex-column">
                    <label class="mb-1" for="updateNewsTitle">Titre :</label>
                    <input class="mb-3" id="updateNewsTitle" name="updateNewsTitle" type="text" value="<?php echo $row['title'];?>">
                    <label class="mb-1" for="updateNewsText">Texte :</label>
                    <textarea class="mb-3" id="updateNewsText" name="updateNewsText" rows="10" cols="30"><?php echo $row['content'];?></textarea>
                    <input type="hidden" id="updateNewsAuthor" name="updateNewsAuthor" value="<?php echo $row['author'];?>">
                    <input type="hidden" id="updateNewsId" name="updateNewsId" value="<?php echo $row['id'];?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeUpdateModal">Fermer</button>
                    <button id="updateNewsButton" type="button" class="btn btn-primary">Modifier</button>
                </div>
                </div>
            </div>
        <?php
        $_POST['updateNewsChoice'] = '';
        
    } else {

        $_SESSION['message'] = 'Aucune news selectionnée.';
        echo $_SESSION['message'];

    }

?>

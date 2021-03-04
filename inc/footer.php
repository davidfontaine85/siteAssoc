<div class="myModal">
    <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active ml-1" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                        Login</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                <!--Panel 7-->
                <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                    <!--Body-->
                    <div class="modal-body mb-1">
                        <div class="md-form form-sm mb-5">
                            <i class="fas fa-envelope prefix"></i>
                            <input type="text" id="modalLRInput10" class="form-control form-control-sm validate">
                            <label data-error="wrong" data-success="right" for="modalLRInput10">Votre Identifiant</label>
                            <div class="message">
                                <?php 
                                    if(isset($_SESSION['message'])){
                                        
                                        echo $_SESSION['message'];
                                    }
                                ?>
                            </div>
                        </div>

                        <div class="md-form form-sm mb-4">
                            <i class="fas fa-lock prefix"></i>
                            <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
                            <label data-error="wrong" data-success="right" for="modalLRInput11">Votre Mot de passe</label>
                            <div class="message">
                                <?php 
                                    if(isset($_SESSION['message'])){
                                        
                                        echo $_SESSION['message'];
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button id="login" class="btn btn-info">Connexion <i class="fas fa-sign-in ml-1"></i></button>
                        </div>
                    </div>
                    <!--Footer-->
                    <div class="modal-footer">
                        <div class="options text-center text-md-right mt-1">
                            <p>Mot de passe <a href="#" class="blue-text">oublié ?</a></p>
                        </div>
                        <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Fermer</button>
                    </div>

                </div>
                <!--/.Panel 7-->

                </div>

            </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <div class="modal fade" id="addCommentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter Un Commentaire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex flex-column">
                <label class="mb-1" for="addCommentText">Texte :</label>
                <textarea class="mb-3" id="addCommentText" name="addCommentText" rows="10" cols="30"></textarea>
                <label class="mb-1" for="addCommentAuthor">Auteur :</label>
                <input class="mb-3" id="addCommentAuthor" name="addCommentAuthor" type="text">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="addCommentButton" type="button" class="btn btn-primary">Ajouter</button>
            </div>
            </div>
        </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>
</body>
</html>
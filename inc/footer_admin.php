<div class="modal fade" id="addNewsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Une News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body d-flex flex-column">
        <label class="mb-1" for="addNewsTitle">Titre :</label>
        <input class="mb-3" id="addNewsTitle" name="addNewsTitle" type="text">
        <label class="mb-1" for="addNewsText">Texte :</label>
        <textarea class="mb-3" id="addNewsText" name="addNewsText" rows="10" cols="30"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button id="addNewsButton" type="button" class="btn btn-primary">Ajouter</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="deletNewsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer Une News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="selectorDelet">
            <?php deletNewsModal(); ?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button id="deletNewsButton" type="button" class="btn btn-primary">Supprimer</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modifyNewsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog canBeBack" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier Une News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="selectorUpdate">
          <?php updateNewsModal(); ?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeButton">Fermer</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="sendMailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Envoyer Un E-Mail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body d-flex flex-column">
        <label for="sendMail" class="py-1">Destinataires :</label>
        <label for="sendMail" class="py-1 text-muted">Séparez chaque email par une , et un espace.</label>
        <input type="email" name="sendMail" id="sendMailTo" placeholder="ex: somebody@example.com, somebodyelse@example.com" class="mb-3">
        <label for="sendTitleMail" class="py-1">Titre :</label>
        <input type="text" name="sendTitleMail" id="sendTitleMail" class="mb-3">
        <label for="sendTextMail" class="py-1">Le contenu de votre e-mail :</label>
        <textarea name="sendTextMail" id="sendTextMail" cols="30" rows="10" class="mb-3"></textarea>
        <label for="sendMailAuthor" class="py-1">E-mail de l'auteur :</label>
        <input type="email" name="sendMailAuthor" id="sendMailAuthor" class="mb-3">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" id="sendMailButton" class="btn btn-primary">Envoyer</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un Utilisateur :</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="addUser d-flex flex-column justifu-content-around">
          <label class="pb-1" for="nickname">Entrez un nom d'utilisateur :</label>
          <input class="mb-3" type="text" name="addUsernickname" id="addUsernickname">
          <label class="pb-1" for="password">Entrez un mot de passe :</label>
          <input class="mb-3" type="text" name="addUserpassword" id="addUserpassword">
          <label class="pb-1" for="lastname">Entrez un nom de famille :</label>
          <input class="mb-3" type="text" name="addUserlastname" id="addUserlastname">
          <label class="pb-1" for="firstname">Entrez un prénom :</label>
          <input class="mb-3" type="text" name="addUserfirstname" id="addUserfirstname">
          <label class="pb-1" for="adress">Entrez une adresse :</label>
          <input class="mb-3" type="text" name="addUseradress" id="addUseradress">
          <label class="pb-1" for="mail">Entrez un e-mail :</label>
          <input class="mb-3" type="email" name="addUsermail" id="addUsermail">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary" id="addNewUser">Ajouter l'utilisateur</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="removeUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer Un Utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="selectorRemoveUser">
          <?php deletUser(); ?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary" id="removeUserButton">Supprimer l'utilisateur</button>
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

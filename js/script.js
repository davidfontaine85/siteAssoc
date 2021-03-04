
/////////////////--Index--//////////////////

//hide comment on entenring website

$(document).ready(function(){
    $('.comment').hide();
});


//Open comment on click link

$('.link-comment').on('click', function(){
    var news_comment = $(this).parents().next('.comment');
    news_comment.toggle();
});


////////////////---ADMIN-CONTROL-PANEL---/////////////////

$(document).ready(function(){
    $('.news-admin').hide();
    $('.mail-admin').hide();
    $('.user-admin').hide();
});

$('.news-leader').on('click', function(){
    $('.news-admin').toggle();
});

$('.mail-leader').on('click', function(){
    $('.mail-admin').toggle();
});

$('.user-leader').on('click', function(){
    $('.user-admin').toggle();
});



//-------------AJAX--------------//

//Login

$(document).ready(function(){
    $('#login').on('click', function(){
        var username = $('#modalLRInput10').val();
        var password = $('#modalLRInput11').val();
        var data = {username: username, password: password};
        if(username != '' && password != ''){
           $.ajax({
               url: "./log.php",
               type: "POST",
               data: data,
               success: function(data)
               {
                   if(data == 'Success'){
                       location.replace('./admin.php');
                   }
                   else{
                       alert(data);
                   }
               }
           });
        } else {

            alert('Les deux champs doivent être remplis.');

        }
    });
});

//Add Comment Modal

$(document).ready(function() {
    $('.add-comment').on('click', function(){
        var selector = $(this).parents('.card-body');
        var id_news = selector.children('input[type=hidden]').val();
        console.log(id_news);
        $('#addCommentButton').on('click', function() {
            var newCommentText = $('#addCommentText').val();
            var newCommentAuthor = $('#addCommentAuthor').val(); 
            var data = {commentText: newCommentText, commentAuthor: newCommentAuthor, id_news: id_news};
            console.log(data);
            if(newCommentText != '' && newCommentAuthor != '' && id_news != '') {
                $.ajax({
                    url:"./inc/addComment.php",
                    type: "POST",
                    data: data,
                    success: function(data) {
                        if(data == 'SuccessAddComment') {
                            location.replace('./newsletter.php');
                            alert('Le Commentaire a bien été ajoutée.')
                        } else {
                            location.replace('./newsletter.php');
                            alert(data);
                        }
                    }
                });
            } else {
                alert('Tous les champs doivent être remplis.');
            }
        });
    });
});

//Add News Modal Admin

$(document).ready(function() {
    $('#addNewsButton').on('click', function() {
        var newTitle = $('#addNewsTitle').val();
        var newText = $('#addNewsText').val();
        var data = {newTitle: newTitle, newText: newText};
        console.log(data);
        if(newTitle != '' && newText != '') {
            $.ajax({
                url:"./addNews.php",
                type: "POST",
                data: data,
                success: function(data) {
                    if(data == 'SuccessAdd') {
                        location.replace('./admin.php');
                        alert('La News a bien été ajoutée.')
                    } else {
                        location.replace('./admin.php');
                        alert(data);
                    }
                }
            });
        } else {
            alert('Tous les champs doivent être remplis.');
        }
    });
});

//Delet News Modal Admin


$(document).ready(function() {
    $('input[type="radio"].deletNewsModalOption').on('click', function() {
        var checkedNewsRemove = $(this).prop('checked');
        if(checkedNewsRemove != true) {
            var deletNewsChoice = null;
        } else {
            var deletNewsChoice = $(this).attr('id');
        }
        console.log(deletNewsChoice);
        $('#deletNewsButton').on('click', function() {
            var data = {choice: deletNewsChoice};
            if(deletNewsChoice !='') {
                $.ajax({
                    url: "./deletNews.php",
                    method: "POST",
                    data: data,
                    success: function(data) {
                        if(data == 'SuccessDelet') {
                            location.replace("./admin.php");
                            alert('La News a bien été supprimée.');
                        } else {
                            location.replace("./admin.php");
                            alert(data);
                        }
                    }
                });
            } else {
                alert('Veuillez selectionner une option');
            }
        });
    });
});

//Update News Modal


// First Step : Inject prefilled Form in Modal with id reference in input radio (Ajax)

$(document).ready(function() {
    $('input[type=radio].updateNewsModalOption').on('click', function() {
        console.log('merde');
        var checkedNewsUpdate = $(this).prop('checked');
        if(checkedNewsUpdate != true) {
            var updateNewsChoice = null;
        } else {
            var updateNewsChoice = $(this).attr('id');
        }
        console.log(updateNewsChoice);
        $.post('./inc/updateNews.php', {updateNewsChoice}, function(dataAdd) {
            $('#modifyNewsModal').html(dataAdd);
            $('#closeUpdateModal').on('click', function() {
                $(location).attr('href', 'admin.php');
            });
        });
    });
});

// Seconde Step : Send data input in database to update News with Id-News (Ajax)

$(document).ready(function() {
    $('#modifyNewsModal').on('click', '#updateNewsButton', function() {
        console.log('merde');
        var updateNewsTitle = $('#updateNewsTitle').val();
        var updateNewsText = $('#updateNewsText').val();
        var updateNewsAuthor = $('#updateNewsAuthor').val();
        var updateNewsId = $('#updateNewsId').val();
        var data = {updateTitle: updateNewsTitle, updateText: updateNewsText, updateAuthor: updateNewsAuthor, updateId: updateNewsId};
        console.log(data);
        if(updateNewsTitle != '' && updateNewsText != '') {
            $.ajax({
                url:"./inc/updateNews_post.php",
                type: "POST",
                data: data,
                success: function(data) {
                    if(data == 'SuccessUpdateNews') {
                        location.replace('./admin.php');
                        alert('La News a bien été modifiée.');
                    } else {
                        location.replace('./admin.php');
                        alert(data);
                    }
                }
            });
        } else {
            alert('Tous les champs doivent être remplis.');
        }
    });
});

//Add User in db

$(document).ready(function() {
    $('#addNewUser').on('click', function() {
        var newUser = $('#addUsernickname').val();
        var newPassword = $('#addUserpassword').val();
        var newLastname = $('#addUserlastname').val();
        var newFirstname = $('#addUserfirstname').val();
        var newAdress = $('#addUseradress').val();
        var newMail = $('#addUsermail').val();
        var data = {add_user: newUser, add_userPassword: newPassword, add_userLastname: newLastname, add_userFirstname: newFirstname, add_userAdress: newAdress, add_userMail: newMail};
        console.log(data);
        if(newUser != '' && newPassword != '' && newLastname !='' && newFirstname !='' && newAdress !='' && newMail !='') {
            $.ajax({
                url:"./inc/addUser.php",
                type: "POST",
                data: data,
                success: function(data) {
                    if(data == 'SuccessAddUser') {
                        location.replace('./admin.php');
                        alert('Le Nouvel utilisateur a bien été ajouté.')
                    } else {
                        location.replace('./admin.php');
                        alert(data);
                    }
                }
            });
        } else {
            alert('Tous les champs doivent être remplis.');
        }
    });
});

//Remove User in db

$(document).ready(function() {
    $('input[type="radio"].removeUserModalOption').on('click', function() {
        var checkedUserRemove = $(this).prop('checked');
        if(checkedUserRemove != true) {
            var deletUserChoice = null;
        } else {
            var deletUserChoice = $(this).attr('id');
        }
        console.log(deletUserChoice);
        $('#removeUserButton').on('click', function() {
            var data = {choice_user_remove: deletUserChoice};
            if(deletUserChoice != '') {
                $.ajax({
                    url: "./inc/deletUser.php",
                    method: "POST",
                    data: data,
                    success: function(data) {
                        if(data == 'SuccessDeletUser') {
                            location.replace("./admin.php");
                            alert('L\'utilisateur a bien été supprimé.');
                        } else {
                            location.replace("./admin.php");
                            alert(data);
                        }
                    }
                });
            } else {
                alert('Veuillez selectionner une option');
            }
        });
    });
});

//Send Mail 

$(document).ready(function() {
    $('#sendMailButton').on('click', function() {
        var sendTo = $('#sendMailTo').val();
        var sendTitleMail = $('#sendTitleMail').val();
        var sendTextMail = $('#sendTextMail').val();
        var sendMailAuthor = $('#sendMailAuthor').val();
        var data = {send_to: sendTo, send_title_mail: sendTitleMail, send_text_mail: sendTextMail, send_mail_author: sendMailAuthor};
        if(sendTo !='' && sendTitleMail !='' && sendTextMail !='' && sendMailAuthor !='') {
            $.ajax({
                url: "./inc/sendMail.php",
                method: "POST",
                data: data,
                success: function(data) {
                    if(data == 'SuccessSend') {
                        location.replace("./admin.php");
                        alert('Le mail a bien été envoyé.')
                    } else {
                        location.replace("./admin.php");
                        alert(data);
                    }
                }
            });
        } else {
            alert('Un des champs n\'a pas été rempli');
        }
    });
});
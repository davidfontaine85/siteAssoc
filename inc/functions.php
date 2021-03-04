<?php




// Short Text for home card

    function short_text($text, $max = 120, $append = ' &hellip;') {

        if (strlen($text) <= $max) return $text;
        $return = substr($text, 0, $max);
        if (strpos($text, ' ') === false) return $return . $append;
        return preg_replace('/\w+$/', '', $return) . $append;
    };


// Display the short news on home

    function displayNewsShort() {

        global $db;
        $req = $db->query("SELECT * FROM news");
        while($row = $req->fetch()){
            ?>
            <div class="card mb-3 news-short">
                <div class="card-body">
                    <input type="hidden" value="<?php echo $row['id']; ?>">
                    <h5 class="card-title"><?php echo $row['title']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['date_creation']; ?></h6>
                    <p class="card-text"><?php echo short_text($row['content']); ?></p><br>
                    <p class="card-text"><?php echo $row['author']; ?></p>
                </div>
            </div> 
        <?php
        };
    };



// Display all the news on newsletter.php and admin.php

    function displayNews() {

        global $db;
        $req = $db->query("SELECT * FROM news");
        while($row = $req->fetch()){
            ?>
            <div class="news-complete mb-3">
                <div class="card ">
                    <h4 class="card-header"><?php echo $row['author']; ?></h4>
                    <div class="card-body">
                        <h4 class="card-title mb-5"><?php echo $row['title']; ?></h4>
                        <p class="card-text mb-5"><?php echo $row['content']; ?></p><br>
                        <p class="card-text"><?php echo $row['date_creation']; ?></p><br>
                        <input type="hidden" name="<?php echo $row['id']; ?>" value="<?php echo $row['id']; ?>">
                        <div class="col-sm-12 d-flex mt-3">
                            <?php 
                                $news_id = $row['id'];
                                $req_count = $db->query("SELECT COUNT(*) AS count_comment FROM comment WHERE id_news = $news_id"); 
                                $row2 = $req_count->fetch();
                            ?>
                            <div class="col-sm-6"><p class="link-comment text-primary"><?php echo $row2['count_comment']; ?> Commentaires.</p></div>
                            <div class="col-sm-6"><p data-toggle="modal" data-target="#addCommentModal" class="add-comment text-primary">Exprimez-vous...</p></div>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <?php
                        $news_id = $row['id'];
                        $req2 = $db->query("SELECT * FROM comment WHERE id_news = $news_id");
                        while($row3 = $req2->fetch()){
                            ?>
                            <div class="card comment-card mt-1">
                                <div class="card-body">
                                    <h6 class="card-title"><?php echo $row3['author']; ?> à écrit:</h6>
                                    <p class="card-text"><?php echo $row3['content']; ?></p><br>
                                    <p class="card-text">le <?php echo $row3['date_creation']; ?></p>
                                </div>
                            </div>
                            <?php
                        };
                    ?>
                </div>
            </div>
        <?php
        };
    };

    
// Display News for Deleting in modal (Select Option Radio)

function deletNewsModal() {

    global $db;
    $req = $db->query("SELECT * FROM news ORDER BY date_creation DESC");
    while($row = $req->fetch()) {
        ?>
        <div class="optionSelected d-flex mb-2">
            <ul><li><?php echo $row['date_creation']; ?></li></ul><input type="radio" name="deletNewsModalOption" class="mr-2 deletNewsModalOption" id="<?php echo $row['id'];?>"><p><?php echo $row['title'];?></p><br>
        </div>
        <?php
    }
}
    
// Display News for Update in modal

function updateNewsModal() {

    global $db;
    $req = $db->query("SELECT * FROM news");
    while($row = $req->fetch()) {
        ?>
        <div class="optionSelected d-flex mb-2">
            <input type="radio" name="updateNewsModalOption" class="mr-2 updateNewsModalOption" id="<?php echo $row['id'];?>"><p><?php echo $row['title'];?></p><br>
            </div>  
        <?php
    }
}

// Display User for delete

function deletUser () {

    global $db;
    $sqli = "SELECT * FROM user";
    $req = $db->prepare($sqli);
    $req->execute();
    while($row = $req->fetch()) {
        ?>
        <div class="optionSelected d-flex mb-2">
            <input type="radio" name="removeUserModalOption" class="mr-2 removeUserModalOption" id="<?php echo $row['id'] ?>"><p><?php echo $row['nickname'] ?></p><br>
        </div>
        <?php
    }
}


?>

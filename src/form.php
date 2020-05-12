<h1>Laisser un commentaire</h1>

<form name="testform" action="" method="post" >
    <input name="email" type="text" />
    <input name="author" type="text" />
    <input type="textearea" name="comment" />
    <input type="submit" name="add_comment" value="Laisser un commentaire"/>
</form>

<?php 
    if(isset($_POST['add_comment'])) {
        if(!empty(trim($_POST['comment']))) {
?>
           <h1><?= $_POST['author'] ?></h1>
           <h2><?= $_POST['email'] ?></h2>
           <p><?= $_POST['comment'] ?></p>
<?php  
        } else {
            ?>error<?php
        }
    }

?>
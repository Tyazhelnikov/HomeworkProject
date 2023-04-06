<?php
require '../config/main.php';
require '../engine/core.php';
//var_dump($_POST);
//var_dump($_GET);

if (isset($_POST['username'], $_POST['reply_text']) && $_POST['reply_text'] !== '' && $_POST['username'] !== ''){
    $username = $_POST['username'];
    $replyText = $_POST['reply_text'];
    $username = htmlspecialchars($username);
    $username = strip_tags($username);
    $replyText = htmlspecialchars($replyText);
    $replyText = strip_tags($replyText);
    execute("insert into `geek_project`.`replies` (`user_name`, `reply_text`, `is_modified`) VALUES ('$username', '$replyText', b'0');");
    $data = [];
    $data[] = getItemArray('select * from `geek_project`.`replies` ');
    echo render('site/replies',$data,true);
    //header("Location: /reply.php");
}
else if (isset($_POST['delete']) && $_POST['delete'] !== ''){
    $delete = $_POST['delete'];
    $delete = htmlspecialchars($delete);
    $delete = strip_tags($delete);
    $delete = (int)$delete;
    execute("DELETE FROM `geek_project`.`replies` WHERE (`id` = $delete);");
   // $_POST['delete'] = '';
    var_dump($_POST['delete']);
    echo render('site/replies',[],true);
    $data = [];
    $data[] = getItemArray('select * from `geek_project`.`replies` ');
    echo render('site/replies',$data,true);
   // header("Location: /reply.php");
}
else if (isset($_POST['apply']) && $_POST['apply'] !== ''){
    $apply = $_POST['apply'];
    $apply = htmlspecialchars($apply);
    $apply = strip_tags($apply);
    $apply = (int)$apply;
    execute("UPDATE `geek_project`.`replies` SET `is_modified` = 1 WHERE (`id` = $apply);");
   // $_POST['apply'] = '';
    $data = [];
    $data[] = getItemArray('select * from `geek_project`.`replies` ');
    echo render('site/replies',$data,true);
   // header("Location: /reply.php");
}
else {
    $data = [];
    $data[] = getItemArray('select * from `geek_project`.`replies` ');
    //var_dump(getItemArray('select * from `geek_project`.`replies` '));
    echo render('site/replies',$data,true);}

/*INSERT INTO `geek_project`.`replies` (`user_name`, `reply_text`, `is_modified`) VALUES ('guest', 'qwer', b'1');*/

//echo render('site/replies',[],true);
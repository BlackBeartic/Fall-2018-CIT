
<?php include('views/elements/header.php');?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title;?></h1>
        </div>

        <?php foreach($posts as $p){?>
            <h3><a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
            <sub><?php echo 'Posted on ' . $p[date] . ' by <a href="'.BASE_URL.'members/view/'. $p[uid]. '">' . $p[first_name] . ' ' . $p[last_name] . '</a> in <a href="'.BASE_URL.'category/view/'. $p[categoryid].'">' . $p[name] .'</a>' ?></sub>
            <div style="margin-top:15px;"><a href="<?php echo BASE_URL?>ajax/get_post_content/?pID=<?php echo $p['pID'];?>" class="btn post-loader">View entire post</a></div>

            <?php if (isset($_SESSION['uID'])){ ?>
            <form method = "post">
            <input type = 'hidden' name = 'uID' value = 'user'>
            <input type = 'hidden' name = 'date' value = 'user'>
            <textarea name = 'comment'></textarea><br>
            <button name = "submit" type = "commentSubmit">Comment</button>
          </form>
        <?php } ?>


        <?php }?>

    </div>


<?php include('views/elements/footer.php');?>

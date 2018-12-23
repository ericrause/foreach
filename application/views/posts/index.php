

<?php
if ($posts === []) {
    ?>
    <div class="alert alert-dismissible alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Nothing here!</strong> Probably you have to <a href="<?php echo base_url(); ?>links/addLink" class="alert-link">add a link</a> to your RSS feed!
    </div>

    <?php
}   else {

    foreach ($posts as $post) : ?>

        <div class="bs-component">
            <div class="jumbotron">
                <!--        <span class="display-4">--><?php //echo $post['title'] ?><!--</span>-->
                <h3><?php echo $post['title'] ?></h3>
                <hr class="my-4">
                <p class="lead"><?php echo $post['description'] ?></p>
                <p class="lead">
                    <a class="btn btn-primary" href="<?php echo $post['link']; ?>" target="_blank">Read more...</a>
                </p>
            </div>
        </div>
    <?php endforeach;
}
?>

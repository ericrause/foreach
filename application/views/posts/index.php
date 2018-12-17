

<h2><?=$title; ?></h2>

<?php foreach ($posts as $post) : ?>
    <h3><?php echo $post['title'] ?></h3>
    <p><?php echo $post['description'] ?></p>
    <a class="btn btn-primary" href="<?php echo $post['link']; ?>" target="_blank">Read more...</a>
<hr color="white">
<?php endforeach; ?>


<h2><?=$title; ?></h2>

<?php foreach ($posts as $post) : ?>
    <h3><?php echo $post['title'] ?></h3>
    <p><?php echo $post['content'] ?></p>
    <a class="btn btn-primary" href="<?php echo site_url('/posts/' . $post['id']); ?>">more</a>
<?php endforeach; ?>
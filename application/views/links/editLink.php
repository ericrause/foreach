<h2><?=$title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('links/editLink'); ?>
<div class="form-group">
    <label for="url">URL</label>
    <input type="text" class="form-control" name="url" value="<?=$link['url'] ?>">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" value="<?=$link['title'] ?>">
</div>
<button type="submit" class="btn btn-success">Update</button>

<h2><?=$title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('links/addLink'); ?>
<div class="form-group">
    <label for="urls">Paste your url(s) here</label>
    <textarea class="form-control" name="urls" rows="3" placeholder="example: https://habr.com/rss/all/all/?hl=ru&fl=ru"></textarea>
</div>
<button type="submit" class="btn btn-success">Add a link to your feed</button>

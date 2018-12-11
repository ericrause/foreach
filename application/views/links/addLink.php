<h2><?=$title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('links/addLink'); ?>
<div class="form-group">
    <label for="exampleTextarea">paste url here</label>
    <textarea class="form-control" name="urls" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-success">add</button>

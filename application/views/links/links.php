<?php //foreach ($links as $link) :
//    form_open('links/delete/'.$link['id'])
//    ?>
<!--    <div class="form-group">-->
<!--        <div class="input-group mb-3">-->
<!--            <input type="text" class="form-control" placeholder="url" value="--><?php //echo $link['url'] ?><!--">-->
<!--            <div class="input-group-append">-->
<!--                <input type="submit" value="delete" class="btn btn-danger">-->
<!--                <a role="button" class="btn btn-danger" href="--><?php //echo site_url('/posts/' . $link['id']); ?><!--">delete</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<?php //endforeach; ?>

<?php
foreach ($links as $link) :
    echo form_open('links/deleteLink/' . $link['id'])
    ?>
    <div class="form-group">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="url" value="<?php echo $link['url'] ?>">
            <div class="input-group-append">
                <input type="submit" value="delete" class="btn btn-danger">
            </div>
        </div>
    </div>
    <?php
    echo form_close();
endforeach; ?>

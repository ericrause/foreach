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

<div class="row">
<?php
$counter = 0;

foreach ($links as $link) :
    if ($counter % 3 === 0){ //todo: move "3" to setting menu -> choose grid
        echo '</div><div class="row mt-4">';
    }
    echo '<div class ="col-md-4">';
    echo form_open('links/deleteLink/' . $link['id'])
    ?>

    <div class="card border-primary mb-3" style="max-width: 20rem;">
        <div class="card-header"><?php echo html_escape($link['title']) ?></div>
        <div class="card-body">
<!--            <h4 class="card-title">something here</h4>-->
            <p class="card-text"><?php echo html_escape($link['description']) ?></p>
            <div class="form-group">
                <a role="button" href="<?php echo html_escape($link['url']) ?>">Read</a>
                <a role="button" href="">Edit</a>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="url" value="<?php echo html_escape($link['url']) ?>">
                    <div class="input-group-append">
                        <input type="submit" value="delete" class="btn btn-danger">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php
    echo form_close();
    $counter++;
    if ($counter % 3 === 0){ //todo: move "3" to setting menu -> choose grid
    }
    echo '</div>';
endforeach; ?>
</div>

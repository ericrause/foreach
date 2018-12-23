

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="row">
<?php
$counter = 0;

foreach ($links as $link) :
    if ($counter % 3 === 0){ //todo: move "3" to setting menu -> choose grid
        echo '</div><div class="row mt-4">';
    }
    echo '<div class ="col-md-4">';
    ?>

    <div class="card border-primary mb-3" style="max-width: 20rem;">
        <div class="card-header"><?php echo html_escape($link['title']) ?></div>
        <div class="card-body">
<!--            <h4 class="card-title">something here</h4>-->
            <p class="card-text"><?php echo html_escape($link['description']) ?></p>
            <div class="form-group">
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">
                    Edit
                </button>







                <div class='editForm'>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="url"
                               value="<?php echo html_escape($link['url']) ?>">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Title"
                               value="<?php echo html_escape($link['title']) ?>">
                    </div>

                    <input type="submit" value="save" id="saveBtn" class="btn btn-info btn-block">
                    <input type="submit" value="delete" id="delBtn" class="btn btn-danger btn-block">
                </div>
            </div>
        </div>
    </div>



    <?php
    $counter++;
    echo '</div>';
endforeach; ?>
</div>
<script type="text/javascript">
    $( document ).ready(function() {
        $('.editForm').hide();
        $('.editBtn').on("click",function (e) {
            // $(e.target).closest(".editForm").show();
            console.log($(e.target).closest(".editForm"));
            $(".editForm").show();
        });
        });

</script>
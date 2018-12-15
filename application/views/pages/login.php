<?php
if ($msg !== '') {
    echo '
<script type="text/javascript">
$( document ).ready(function() {
   
    $(".close").on("click",function() {
    $(this).closest(".alert-dismissible").fadeOut();
    });
});

</script>
<div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" id="close" data-dismiss="alert">&times;</button>
            <strong>' . $msg . '</strong>
          </div>';

}
echo form_open('login/authentication', ['method' => 'post'])
?>
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>

            <input type="submit" value="login" class="btn btn-danger">
        </div>
    </div>



<?php  ?>
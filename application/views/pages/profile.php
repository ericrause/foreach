<div class="jumbotron">
    <h4 class="display-3">Hi, user!</h4>
    <p class="lead">Here you can specify your name and choose a template or change a password!</p>
    <hr class="my-4">
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label for="themeSelector">Choose a theme...</label>
                <select class="form-control" id="themeSelector">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label class="form-control-label" for="inputName">Your name</label>
                <input type="text" value="" class="form-control is-valid" id="inputName">
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label class="form-control-label" for="inputPhone">Phone</label>
                <input type="text" value="+7" class="form-control is-valid" id="inputPhone">
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-md-5">
            <a class="btn btn-success" href="<?php echo base_url(); ?>signup" role="button">Save changes</a>
            </div>
        </div>
</div>

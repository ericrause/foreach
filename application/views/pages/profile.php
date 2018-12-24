<div class="jumbotron">
    <h4 class="display-3">Hi, <?php echo html_escape($profile['name']); ?>!</h4>
    <p class="lead">Here you can specify your name and choose a template or change a password!</p>
    <hr class="my-4">

    <?php
    echo form_open('profile/updateProfile', ['method' => 'post']);
    ?>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label for="themeSelector">Choose a theme...</label>

                    <select class="form-control" id="themeSelector" name="themeSelector">
                        <?php
                        foreach ($templateList as $template) {
                            $selected = '';
                            if ($profile['template'] == $template['id']) {
                                $selected = 'selected';
                            }
                            echo "<option value='{$template['id']}' $selected>{$template['title']}</option>";
                        } ?>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" disabled>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label class="form-control-label" for="phone">Phone</label>
                    <input class="form-control"  type="text" value="<?php echo html_escape($profile['phone']); ?>" id="phone" name="phone">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label class="form-control-label">&nbsp;</label>
                <div class="form-group">
                    <button class="btn btn-success btn-block" type="submit">Save changes</button>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label class="form-control-label" for="inputName">Your name</label>
                    <input type="text" value="<?php echo html_escape($profile['name']); ?>" name="name"
                           class="form-control" id="inputName">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label for="urls">Your biography here</label>
                    <textarea class="form-control" name="biography" rows="5"
                              placeholder="Enter some words about you"><?php echo html_escape($profile['biography']); ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>

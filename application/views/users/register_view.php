    <h2>Register</h2>

    <?php $attributes = array('id' => 'register_form', 'class' => 'form_horizontal'); ?>
    <?php echo validation_errors("<p class='bg-danger'>"); ?>
    <?php echo form_open('users/register', $attributes); ?>

    <div class="form-group">

        <?php echo form_label('First Name'); ?>
        <?php $data = array(
            'class' => 'form-control',
            'name' => 'first_name',
            'placeholder' => 'Enter First Name'
        );
        echo form_input($data);  ?>

    </div>

    <div class="form-group">

        <?php echo form_label('Last Name'); ?>
        <?php $data = array(
            'class' => 'form-control',
            'name' => 'last_name',
            'placeholder' => 'Enter Last Name'
        );
        echo form_input($data);  ?>

    </div>

    <div class="form-group">

        <?php echo form_label('Email Address'); ?>
        <?php $data = array(
            'class' => 'form-control',
            'name' => 'email',
            'placeholder' => 'Enter your email address'
        );
        echo form_input($data);  ?>

    </div>

    <div class="form-group">

        <?php echo form_label('Username'); ?>
        <?php $data = array(
            'class' => 'form-control',
            'name' => 'username',
            'placeholder' => 'Enter Username'
        );
        echo form_input($data);  ?>

    </div>
    <div class="form-group">

        <?php echo form_label('Password');
        $data = array(
            'class' => 'form-control',
            'name' => 'password',
            'placeholder' => 'Enter Password'
        );
        echo form_password($data);  ?>

    </div>
    <div class="form-group">

        <?php echo form_label('Confirm Password');
        $data = array(
            'class' => 'form-control',
            'name' => 'confirm_password',
            'placeholder' => 'Confirm Password'
        );
        echo form_password($data);  ?>

    </div>
    <div class="form-group">

        <?php
        $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'Register'
        );
        echo form_submit($data);  ?>

    </div>
    <?php echo form_close(); ?>
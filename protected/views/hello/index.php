<h1>Sigueme en:
    <?php
        echo $twitter;
    ?>
</h1>
<br>
<h1>
    <?php foreach ($model as $data):?>
        <h4>
            <b>id:</b><?php echo $data->id;?> 
            <b>username:</b> <?php echo $data->username;?>
            <b>password:</b> <?php echo $data->password;?>
            <b>email:</b> <?php echo $data->email;?>
        </h4>
    <?php endforeach;?>
</h1>

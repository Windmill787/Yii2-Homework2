<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 27.11.16
 * Time: 17:44
 */

?>
<h1>Thank you, <?php echo $model['firstName']."\n".$model['lastName'] ?> for information</h1>
<p><?php echo 'First name :'.$model['firstName']; ?></p>
<p><?php echo 'Last name :'.$model['lastName']; ?></p>
<p><?php echo 'Login :'.$model['login']; ?></p>
<p><?php echo 'Password :'.$model['password']; ?></p>
<p><?php echo 'Age :'.$model['age']; ?></p>
<p><?php
    echo 'Sex :';
    foreach ($model['sex'] as $item)
    echo $item;
    ?></p>
<p><?php echo 'About you :'.$model['about']; ?></p>
<p><?php
    echo 'You have :';
    foreach ($model['have'] as $row)
        echo $row.' ';
    ?></p>
<p><?php echo 'City :'.$model['city']; ?></p>
<p><?php echo 'E-mail :'.$model['email']; ?></p>
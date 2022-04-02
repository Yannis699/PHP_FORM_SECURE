<?php

if(
    isset($_POST['user_name']) &&
    isset($_POST['user_surname']) &&
    isset($_POST['user_email']) &&
    isset($_POST['user_phone']) &&
    isset($_POST['user_message'])
) {

    $data = array_map('trim', $_POST);

    $name = ($data['user_name']);
    $surname = ($data['user_surname']);
    $email = ($data['user_email']);
    $phone = ($data['user_phone']);
    $message = ($data['user_message']);

}


if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['user_name'])) {
    $nameErr2 = "seulement les lettres et les espaces sont autorisés !";
    echo $nameErr2;
    die();
  }


if (!filter_var($_POST['user_phone'], FILTER_SANITIZE_NUMBER_INT))
    {
        echo 'Erreur de saisie concernant votre numéro de téléphone';
        die();
    }  



foreach($data as $key => $value) {
    if (empty($value))
    {
        $globalError = 'L\'ensemble des champs sont requis';
        echo $globalError;
        die();
    }
}



?>

<div class="message">
Merci
<?php echo $name.' '. $surname?> 
de nous avoir contacté à propos de <?php echo ($_POST['answer']) ?>.<br>

<br>Un de nos conseiller vous contactera soit à l'adresse <?php echo $email ?>
ou par téléphone au <?php echo $phone ?> 
dans les plus brefs délais pour traiter votre demande : <br><br>
<?php echo $message ?>

</div>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Calculatrice</title>
  </head>
  <body>
    <div class="jumbotron text-center">
    <p><a href="http://monProjet" class="btn btn-danger">Accueil</a></p>
    <h1>Une calculatrice en PHP</h1>
    <form method="post">
      <input type="text" name="chiffre1" value="0" required/>
      <input type="text" name="chiffre2" value="0" required/>
      <input type="submit" name="addition" value="+"/>
      <input type="submit" name="soustraction" value="-"/>
      <input type="submit" name="multiplication" value="*"/>
      <input type="submit" name="division" value="/"/>
    </form>
    <?php
    if (isset($_POST['addition'])){
      if (!empty($_POST)){
        if(ctype_digit((string)$_POST['chiffre1']) && ctype_digit((string)$_POST['chiffre2'])){
          $result = htmlspecialchars($_POST['chiffre1']) + htmlspecialchars($_POST['chiffre2']);
        }else{
          $message = 'Uniquement des chiffres !';
        }
      }else{
        $message = 'L\'un des champs est vide';
      }
    }
    if (isset($_POST['soustraction'])){
      if (!empty($_POST)){
        if(ctype_digit((string)$_POST['chiffre1']) && ctype_digit((string)$_POST['chiffre2'])){
          $result = htmlspecialchars($_POST['chiffre1']) - htmlspecialchars($_POST['chiffre2']);
        }else{
          $message = 'Uniquement des chiffres !';
        }
      }else{
        $message = 'L\'un des champs est vide';
      }
    }
    if (isset($_POST['multiplication'])){
      if (!empty($_POST)){
        if(ctype_digit((string)$_POST['chiffre1']) && ctype_digit((string)$_POST['chiffre2'])){
          $result = htmlspecialchars($_POST['chiffre1']) * htmlspecialchars($_POST['chiffre2']);
        }else{
          $message = 'Uniquement des chiffres !';
        }
      }else{
        $message = 'L\'un des champs est vide';
      }
    }
    if (isset($_POST['division'])){
      if (!empty($_POST)){
        if(ctype_digit((string)$_POST['chiffre1']) && ctype_digit((string)$_POST['chiffre2'])){
          if ($_POST['chiffre2'] != 0) {
            $result = htmlspecialchars($_POST['chiffre1']) / htmlspecialchars($_POST['chiffre2']);
          }else{
            $message = 'Pas de division par 0';
          }
        }else{
          $message = 'Uniquement des chiffres !';
        }
      }else{
        $message = 'L\'un des champs est vide';
      }
    }
    ?>
    <p class="font-weight-bold">Résultat : <?= $result; ?></p>
    <?php
      if (!empty($message)) {
        ?>
        <p class="alert alert-danger"><?= $message ?></p>
      <?php
      }
      ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

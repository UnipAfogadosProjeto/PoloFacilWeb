<?php
    session_start(); 
    $ra = $_SESSION['RA'];
    $estrela = $_POST['estrela'];
    $idPessoa = $_POST['idPessoa'];
    $obs = $_POST['obs'];



$msgtutor = file_get_contents("http://186.233.148.102:8080/AvaliaTutor/$idPessoa/$ra/$obs/$estrela");
    $msgtutor = utf8_encode($msgtutor);
    $msgtutor = json_decode($msgtutor);

    
/*
    
  
}

</script>
<?php
    }
    else {
        header('Location: tutor.php');
    }


*/
?>

<html>
<!DOCTYPE Html>
<head>
<title>Teste</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>

<?php
if ($msgtutor->Situacao === "Aceito" ){
    ?>
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mensagem Enviado Com Sucesso!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo "$obs"; ?>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary"  href="tutor.php" >Voltar</a>
      </div>
    </div>
  </div>
</div>
<?php }?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<body>
</html>  
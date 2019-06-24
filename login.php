
<!Doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agendamento</title>
    <link rel="stylesheet" href="estilo.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
    <header class="teste">

        <div class="container">
        <img class="col-md-6 offset-md-3" src="img/logo.png">        <br><br><br>
        <form action="conexaosql.php"  method="POST" > 

            <div class="form-group">
                <div class="   col-md-6 offset-md-3">
                    <label > RA</label>
                    <input type="number" name="ra_login" class="form-control " placeholder="" required="" >    
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> CPF </label>  
                    <input type="password" name="cpf_login" class="form-control" placeholder="" required="" >
                </div>
            </div>      

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <input type="submit" value="Login" class="btn btn-primary" name=""> 
                </div>
            </div>
        </form> 
</div>

<br>
<br><br><br><br><br><br><br><br>
<header>
</body>
</html>
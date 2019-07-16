
<!DOCTYPE html>
<html><head>
    <title>UNIP - Cálculo de Média - Online </title>
    <!-- Custom Theme files -->
   <!-- <link href="UNIP%20-%20C%C3%A1lculo%20de%20M%C3%A9dia%20-%20Online%20-%202018_arquivos/style.css" rel="stylesheet" type="text/css" media="all">
     for-mobile-apps -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <body>
    <!--header start here-->
    <section class="pricing py-5">
        <div class="container">
          <div class="row">           
                
                
    
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-price text-center">Gestão</h5>
                <hr>
                <form class="form-signin">
              <div class="form-label-group mx-sm-5 mb-3">
              <label>Nota Prova</label>
                <input type="number" id="" class="form-control" placeholder="" required autofocus>
               
              </div>

              <div class="form-label-group mx-sm-5 mb-3">
              <label>Nota AVA</label>
              
                <input type="number" id="" class="form-control" placeholder="" required>
               
              </div>
                <a href="#" class="btn btn-block btn-primary text-uppercase">Calcular!</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-price text-center ">Graduação</h5>
                <hr>
                <ul class="fa-ul">
                   
                        <li>Nota PROVA</li>
                        <li>
                            <input class="text-box-dark" id="gra_ap" type="number" step="0.01" min="0" max="10" placeholder="PROVA AP" name="PROVA"></li>
                       <li>Nota AVA</li>
                        <li>
                            <input class="text-box-dark" id="gra_ava" type="number" step="0.01" min="0" max="10" placeholder="AVA" name="AVA" required=""></li>
                   

                </ul>
                <a href="#" class="btn btn-block btn-primary text-uppercase">Calcular!</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-price text-center">Pós</h5>
                <hr>
                <ul class="fa-ul">
                   
                    <li class="fa-li">Nota PROVA (PIC)</li>
                    <li>
                        <input class="text-box-dark" id="pos_ap" type="number" step="0.01" min="0" max="10" placeholder="PROVA" name="PROVA" required=""></li>
                    <li class="fa-li">Nota AVA (EXE) </li>
                    <li>
                        <input class="text-box-dark" id="pos_ava" type="number" step="0.01" min="0" max="3" placeholder="AVA - Nota máxima 3" name="AVA" required=""></li>

                </ul>
                <a href="#" class="btn btn-block btn-primary text-uppercase">Calcular!</a>
              </div>
            </div>
          </div>


          



        </div>
    </div>
  </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
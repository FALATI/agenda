<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="logreg-forms">
        <form class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center; color: #FFF;"> Agenda</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Entrar com Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Entrar com Google</span> </button>
            </div>
            <p style="text-align:center; color: #FFF;"> Login  </p>
            <div class="input-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">
            </div>

            <div class="input-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Senaha" required="">
            </div>

            <div class="input-group">
              <button class="btn btn-md btn-rounded btn-block form-control submit" type="submit"><i class="fas fa-sign-in-alt"></i> Entrar</button>
            </div>

            <a href="#" id="forgot_pswd">Esqueci a senha...</a>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Criar Conta</button>
            </form>

            <form action="#" class="form-reset">
                <input type="email" id="resetEmail" class="form-control" placeholder="Email" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Enviar Senha</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Voltar</a>
            </form>

            <form action="#" class="form-signup">
                <div class="social-login">
                    <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Entar com Facebook</span> </button>
                  </div>
                  <div class="social-login">
                    <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Entar com Google+</span> </button>
                </div>

                <p style="text-align:center; color: #FFF;">Cadastrar</p>

                <input type="text" id="user-name" class="form-control" placeholder="Nome Completo" required="" autofocus="">
                <input type="email" id="user-email" class="form-control" placeholder="Email" required autofocus="">
                <input type="password" id="user-pass" class="form-control" placeholder="Senha" required autofocus="">
                <input type="password" id="user-repeatpass" class="form-control" placeholder="Confirmar Senha" required autofocus="">

<div class="input-group">
  <button class="btn btn-md btn-block submit" type="submit"><i class="fas fa-user-plus"></i> Cadastrar</button>
</div>

                <a href="#" id="cancel_signup"><i class="fa fa-angle-left"></i> Voltar</a>
            </form>
            <br>

    </div>
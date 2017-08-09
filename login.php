<head>
	<?php include 'includes.php'; ?>	
	<title>Lista de Ramais - Login</title>
</head>



<body class="bodyLogin">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <input type="email" placeholder="Usuário" name="login" required />
                    <input type="submit" value="Acessar" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">
                    Lista de Ramais 
                </p>
                <form class="login" method="POST" action="#">
                  <span class="form-title">
                  <input type="text" placeholder="Usuário" name="login2" required />
                  </span>
                  <input type="password" placeholder="Senha" name="senha" required />
                  <input type="submit" value="Acessar" class="btn btn-success btn-sm" name="entrar"/>
                    <div class="remember-forgot">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"/>
                                            Lembre-se de mim
                                    </label>
                                </div>
                            </div>
                        <div class="col-md-8 forgot-pass-content">
                            <a href="javascript:void(0)" class="forgot-pass">Esqueceu a Senha?</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="posted-by">Posted By:<a href="https://www.linkedin.com/in/jacqueline-pires-grecco/">Jacqueline Grecco</a></div>
</div>
</body>

<!DOCTYPE html>
<html>

    <head>
        <link href="css/styles.css" rel="stylesheet">
        <meta charset="utf-8">
        <title> Plantoterapia </title>
    </head>

    <body>

      <div class="cadastro" >
            
        <div class="content">      
          <!--FORMULÁRIO DE CADASTRO-->
          <div id="registrar-se">
            <form> 
              <h1>Registrar-se</h1> 
              <p> 
                <label for="email_casatro"> E-mail </label>
                <input id="email-cadastro" name="email-cadastro" required="required" type="text" placeholder="Digite seu e-mail"/>
              </p>
                
              <p> 
                <label for="senha_cadastro"> Senha</label>
                <input id="senha_cadastro" name="senha_casatro" required="required" type="password" placeholder="Digite sua senha" /> 
              </p>
                
              <p> 
                <button type="entrar"> <a href="home.php"> Criar </a> </button>
              </p>
                
              <p class="link">
                Já tem conta?
                <a href="index.php"> Login </a>
              </p>
            </form>

          </div>
          
        </div>

      </div>

      <?php include "./footer.html" ?>

    </body>

</html>
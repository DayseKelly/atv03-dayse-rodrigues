
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>cadaluno1.php</title>
</head>
<body>

<div class="geral">
    <div class="cabecalho">
        <img src="https://ifbaiano.edu.br/portal/wp-content/uploads/2015/10/marca-if-baiano-horizontal.png" width="20%" height="20%" >
        <h1>CADASTRO </h1>
        <img src="https://cpadigital.educacao.ba.gov.br/img/SEC_Vertical.png"width="17%" height="17%">
    </div>
    <div class="sites">
        <ul>
    <link  href="cadaluno.php">
    <link  href="listaaluno1.php">
    <link  href="index.php">
                       <li><a href="index.php">HOME</a></li> 
                       <li><a href="cadaluno.php">CADASTRO</a></li> 
                       <li><a href="listaaluno1.php">LISTA</a></li> 
                       </li>
                       </ul>
                    </div>     
                

</li>
</ul>      
    </div>   
    <div class="conteudo">
        <div class="texto">
        <h3>FORMULARIO</h3>
        <form action="listaaluno1.php" method="post">
            
        <p>Nome:<br><input type="text" name="nome" placeholder="digite seu nome"><span class="error">* <?php echo $nameErr;?></span><br><br></p>
        <p>telefone :<br><input type="number" name="telefone"placeholder="(00)0000-0000"></p>
        <p>endereco:<br><input type="text" name="endereco"placeholder=" ex: Avenida Dalva"></p>
        <p>bairro: <br><input type="text" name="bairro"placeholder="ex: sudene"></p>
        <p>cidade: <br><input type="text" name="cidade"placeholder="ex: Guanambi"></p>     
        <p>email: <br><input type="email"  name="email" placeholder="@digiteaqui.com"><span class="error">* <?php echo $emailErr;?></span><if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {$emailErr = "Invalid email format";}

        ><br></p>

      

      </p> 
        <p>CPF:<br><input type="number" name="CPF"placeholder="000.000.000-00"></p>
        <p>WhatsApp:<br><input type="number" name="WhatsApp"placeholder="(00)0000-00000"></p>
       <p>data de nascimento:<br><input type="date"  name="data de nascimento"></p>
       <p>UF:  <br> <select id="country" name="UF">
      <option value="au">Guanambi</option>
      <option value="ca">Catu</option>
      <option value="usa">Bom Jesus da Lapa</option>
      <option value="usa">Alagoinhas</option>
      <option value="ca">Itapetinga</option>
      <option value="ca">Santa Inês</option>
      <option value="ca">Senhor do Bonfim</option>
      <option value="ca">Serrinha</option></select><br><br><br>
       <p>disciplinas cursadas:</p>
       Agropecuária:<input type="checkbox" id="vehicle1" name="vehicle1" value="Agropecuária">
       Agroecologia:<input type="checkbox" id="vehicle1" name="vehicle1" value="Agroecologia">
       Zootecnia:<input type="checkbox" id="vehicle1" name="vehicle1" value="Zootecnia">
      Administração:<input type="checkbox" id="vehicle1" name="vehicle1" value="Administração">
       Informática:<input type="checkbox" id="vehicle1" name="vehicle1" value="Informática">
       Medicina Veterinária:<input type="checkbox" id="vehicle1" name="vehicle1" value="Medicina Veterinári">
       Ciências da Computação:<input type="checkbox" id="vehicle1" name="vehicle1" value="Ciências da Computação">
       Engenharia de Pesca:<input type="checkbox" id="vehicle1" name="vehicle1" value="Engenharia de Pesca">
       Biologia:<input type="checkbox" id="vehicle1" name="vehicle1" value=" Biologia">
      Física:<input type="checkbox" id="vehicle1" name="vehicle1" value="Física">
       Agronomia:<input type="checkbox" id="vehicle1" name="vehicle1" value="Agronomia"><br><br><br>
        
       <p>disciplinas preferidas:</p>
       Agropecuária:<input type="checkbox" id="vehicle1" name="vehicle1" value="Agropecuária">
       Agroecologia:<input type="checkbox" id="vehicle1" name="vehicle1" value="Agroecologia">
       Zootecnia:<input type="checkbox" id="vehicle1" name="vehicle1" value="Zootecnia">
      Administração:<input type="checkbox" id="vehicle1" name="vehicle1" value="Administração">
       Informática:<input type="checkbox" id="vehicle1" name="vehicle1" value="Informática">
       Medicina Veterinária:<input type="checkbox" id="vehicle1" name="vehicle1" value="Medicina Veterinári">
       Ciências da Computação:<input type="checkbox" id="vehicle1" name="vehicle1" value="Ciências da Computação">
       Engenharia de Pesca:<input type="checkbox" id="vehicle1" name="vehicle1" value="Engenharia de Pesca">
       Biologia:<input type="checkbox" id="vehicle1" name="vehicle1" value=" Biologia">
      Física:<input type="checkbox" id="vehicle1" name="vehicle1" value="Física">
       Agronomia:<input type="checkbox" id="vehicle1" name="vehicle1" value="Agronomia"><br><br><br>
        
       
        <input type="submit" value="Salvar">
        <input type="reset" value="Refazer"><br><br><br>
    </form>
    </div>

    <div class="imagens">
            <img src="https://static.vecteezy.com/system/resources/previews/015/099/617/original/3d-approved-and-rejected-checklist-icon-png.png"width="120%" height="100%">      
        </div>

        </div>
    <div class="rodape">
        <hxcvnhjl3>
            &copy; DIREITOS DE DAYSE KELLY RODRIGUES
        </hxcvnhjl3>
      
    </div>
</div>
</body>
</html>







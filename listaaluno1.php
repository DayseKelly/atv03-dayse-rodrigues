
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>listaaluno1php</title>
</head>
<body>
<div class="geral">
    <div class="cabecalho">
        <img src="https://ifbaiano.edu.br/portal/wp-content/uploads/2015/10/marca-if-baiano-horizontal.png" width="20%" height="20%" >
        <h1>LISTA </h1>
        <img src="https://cpadigital.educacao.ba.gov.br/img/SEC_Vertical.png"width="17%" height="17%">
    </div>
    </div>
    <div class="sites">
        <ul>
    <link  href="cadaluno.php">
    <link  href="listaaluno1.php">
    <link  href="index.php">
                       <li><a href="index.php">HOME</a></li> 
                       <li><a href="cadaluno.php">CADASTRO</a></li> 
                       <li><a href="listaaluno1.php">LISTA</a></li> 
                       
                       </ul>
                    </div>     
                

  


                        
    <div class="conteudo">
        <div class="lista"></div>
   
    <table>
    <tr>
            <th>NOME</th>
            <th>TELEFONE</th>
            <th>EMAIL</th>
            <th>CIDADE</th>
            <th>CPF</th>
           
        </tr>

        <tr>
            <td>
                <?php echo $_POST ['nome']; ?>
            </td>
            <td>
                <?php echo $_POST ['telefone']; ?>
            </td>
            <td>
                <?php echo $_POST ['email']; ?>
            </td>
            <td>
                <?php echo $_POST ['cidade']; ?>
            </td>
            <td>
               <?php echo $_POST ['CPF']; ?>
            </td>
           
               
        </tr>
    </table>


    <?php 
    
    echo $POST['nome'];
    echo $POST['telefone'];
    echo $POST['email'];
    echo $POST['cidade'];
    echo $POST['CPF'];
   
    
    ?>

        
    
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


</div>



</body>
</html>
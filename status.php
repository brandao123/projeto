<!-- Login -->
 

<?php include ("head.php") ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Lista de produtos</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	
	
	
	
	  <script type="text/javascript" language="javascript" src="js/jquery.js"></script>

<script type="text/javascript">
$(function($) {
    // Quando clicando em uma imagem da div que tem CLASS = nome
    $("div.nome img").click(function() {
        // Recupera o ID da nome que est� na propriedade LANG da DIV-PAI da imagem e que tem CLASS = nome
        var id = $(this).parent("div.id").attr("lang");
        // Recupera o nome (bom|ruim) que est� na propriedade ALT da imagem clicada
        var nome = $(this).attr("alt");
        // Seleciona o SPAN onde est�o os descricao
        var descricao =  $("div[lang="+id+"] span."+nome+" span.valor");
        // Seleciona a DIV onde ser�o colocadas as mensagens
        var preco = $("div[lang="+id+"] div.preco");

        

        // Faz a requisi��o AJAX
        $.post("ajax/votar.php", {id: id, nome: nome}, function(resposta) {
            // Se houver uma mensagem na resposta, exibe a mensagem
            if (resposta)
            {
                preco.html(resposta);
            }
            // Quando a resposta for FALSE
            else
            {
                // Incrementa mais um aos descricao
                descricao.html(parseInt(descricao.html()) + 1);
                // Mensagem de sucesso
                preco.html("Obrigado por votar!");
            }
        });

    });
});
</script>

<style type="text/css">
body {
    font-family: "Trebuchet MS";
    font-size: 12px;
    margin-left: 15px;
}

h1 {
    font-size: 16px;
    border-bottom: 1px dashed #CCC;
}

div.nome {
    margin-bottom: 15px;
}

div.nome span.bom {
    color: green;
}

div.nome span.ruim {
    color: red;
}

div.nome img {
    vertical-align: bottom;
    cursor: pointer;
}

div.nome div.preco {
    color: #999;
}
</style>

	

</head>
<body>
	
		<fieldset>
<div class='container'>
			<!-- Cabeçalho da Listagem -->
			<legend>Lista de pedidos</legend>
			<div class='container'>
			<hr>

			<!-- Formulário de Pesquisa -->
			 <form action="" method="get" id='form-contato' class="form-horizontal col-md-10">
				<label class="col-md-2 control-label" for="termo">Pesquisar</label>
				<div class='col-md-7'>
			    	<input type="text" class="form-control" id="termo" name="termo" placeholder="Infome o ID">
				</div>
			    <button type="submit" class="btn btn-primary">Pesquisar</button>
			    <a href='form.php' class="btn btn-primary">Ver Todos</a>
			</form>

			<!-- Link para página de cadastro -->
			
			<div class='clearfix'></div>

			<?php if(!empty($profissionais)):?>

				<!-- Tabela de Profissionais -->
				<table class="table table-striped">
					<tr class='active'>
					
						<th>ID</th>
						<th>Nome</th>
						<th>E-mail</th>
						
					
						<th>produto</th>
						<th>preco</th>
					
					
					</tr>
					<?php foreach($profissionais as $produto):?>
						<tr>
						
							<td><?=$produto->id?></td>
							<td><?=$produto->nome?></td>
							<td><?=$produto->email?></td>
						
					
					
							<td><?=$produto->preco?></td>
							
						<td>





                           <?php
// Selecionando todas as tab_profissionais
$query = mysql_query("SELECT * FROM tab_profissionais GROUP BY id");
// Passando nome por nome
while ($produto = mysql_fetch_object($query)):
?>

<div class="nome" lang="<?php echo $produto->id; ?>">

    <img src="imagens/bom.png" alt="bom" />
    <span class="bom">
        (<span class="valor"><?php echo $produto->bom; ?></span>)
    </span>

    <img src="imagens/ruim.png" alt="ruim" />
    <span class="ruim">
        (<span class="valor"><?php echo $produto->ruim; ?></span>)
    </span>

    <div class="status"></div>
</div>

<?php endwhile; ?>

                        </td>
							
							
							<td>
								<a href='editar.php?id=<?=$produto->id?>' class="btn btn-primary">Editar</a>
								<a href='javascript:void(0)' class="btn btn-danger link_exclusao" rel="<?=$produto->id?>">Excluir</a>
							</td>
						</tr>	
					<?php endforeach;?>
				</table>

			<?php else: ?>

				<!-- Mensagem caso não exista profissionais ou não encontrado  -->
				<h3 class="text-center text-primary">Não existem profissionais cadastrados!</h3>
			<?php endif; ?>
		</fieldset>
	</div>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
<?php $codigo_cliente = $_REQUEST['clicod'];?>
<?php $nome_cliente = $_REQUEST['nome_cliente'];?>
<?php $img_cliente = $_REQUEST['img_cliente'];?>
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Servi&ccedil;os</b></li>
						<li>></li>
						<li>Cadastrar Novo Servi&ccedil;o</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
<table width="100%">
	<tr>
		<td colspan="2" class="titulo-tabelas">Selecione Uma Unidade</td>
	</tr>
</table>

<div id="corpo-tabela">
	<table class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<thead>
			<tr>
				<th class="titulo-tabelas">Ref.</th>
				<th class="titulo-tabelas">Unidade</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while($oquefazer->registros = $oquefazer->resultado->FetchNextObject()){
					$codigo_imovel	= $oquefazer->registros->IMO_CODIGO;
					$ref_imovel = $oquefazer->registros->IMO_REF;
					$nome_imovel	= $oquefazer->registros->IMO_NOME;
			?>
				<tr onclick="location.href = 'index.php?tabela=form-list-processos-tarefas&acao=form-list-processos-tarefas&ref_imovel=<? echo $ref_imovel;?>&codigo_imovel=<? echo $codigo_imovel;?>&nome_imovel=<? echo $nome_imovel;?>&clicod=<? echo $codigo_cliente;?>&nome_cliente=<? echo $nome_cliente;?>&img_cliente=<? echo $img_cliente;?>';" style="cursor: pointer;line-height: 25px;" class="dadostabelas" onmouseover="this.className='dadostabelasOver'" onmouseout="this.className='dadostabelas'" >
					<td class="dados-tabelas"><? echo $ref_imovel;?></td>
					<td class="dados-tabelas"><? echo $nome_imovel;?></td>
				</tr>
			<?php 
			} ?>
		</tbody>
	</table>
</div>
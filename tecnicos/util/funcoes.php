<?php
	function identificar_erros($numero_erro)
	{
		$mensagem_erro = "";
		switch($numero_erro)
		{
			case 1000: $mensagem_erro  = "hashchk"; break;
			case 1001: $mensagem_erro  = "isamchk"; break;
			case 1002: $mensagem_erro  = "N&atilde;O"; break;
			case 1003: $mensagem_erro  = "SIM"; break;
			case 1004: $mensagem_erro  = "N&atilde;o pode criar o arquivo '%s' (erro no. %d)"; break;
			case 1005: $mensagem_erro  = "N&atilde;o pode criar a tabela '%s' (erro no. %d)"; break;
			case 1006: $mensagem_erro  = "N&atilde;o pode criar o banco de dados '%s' (erro no. %d)"; break;
			case 1007: $mensagem_erro  = "N&atilde;o pode criar o banco de dados '%s'; este banco de dados j&aacute; existe"; break;
			case 1008: $mensagem_erro  = "N&atilde;o pode eliminar o banco de dados '%s'; este banco de dados n&atilde;o existe"; break;
			case 1009: $mensagem_erro  = "Erro ao eliminar banco de dados (n&atilde;o pode eliminar '%s' - erro no. %d)"; break;
			case 1010: $mensagem_erro  = "Erro ao eliminar banco de dados (nn&atilde;oo pode remover diret&oacute;rio '%s' - erro no. %d)"; break;			
			case 1011: $mensagem_erro  = "Erro na remo&ccedil;&atilde;o de '%s' (erro no. %d)"; break;
			case 1012: $mensagem_erro  = "N&atilde;o pode ler um registro numa tabela do sistema"; break;			
			case 1013: $mensagem_erro  = "N&atilde;o pode obter o status de '%s' (erro no. %d)"; break;
			case 1014: $mensagem_erro  = "N&atilde;o pode obter o diret&oacute;rio corrente (erro no. %d)"; break;
			case 1015: $mensagem_erro  = "N&atilde;o pode travar o arquivo (erro no. %d)"; break;
			case 1016: $mensagem_erro  = "N&atilde;o pode abrir o arquivo '%s' (erro no. %d)"; break;
			case 1017: $mensagem_erro  = "N&atilde;o pode encontrar o arquivo '%s' (erro no. %d)"; break;
			case 1018: $mensagem_erro  = "N&atilde;o pode ler o diret&oacute;rio de '%s' (erro no. %d)"; break;
			case 1019: $mensagem_erro  = "N&atilde;o pode mudar para o diret&oacute;rio '%s' (erro no. %d)"; break;			
			case 1020: $mensagem_erro  = "Registro alterado desde a &uacute;ltima leitura da tabela '%s'"; break;
			case 1021: $mensagem_erro  = "Disco cheio (%s). Aguardando algu&eacute;m liberar algum espa&ccedil;o..."; break;
			case 1022: $mensagem_erro  = "N&atilde;o pode gravar. Chave duplicada na tabela '%s'"; break;
			case 1023: $mensagem_erro  = "Erro ao fechar '%s' (erro no. %d)"; break;
			case 1024: $mensagem_erro  = "Erro ao ler arquivo '%s' (erro no. %d)"; break;
			case 1025: $mensagem_erro  = "Erro ao renomear '%s' para '%s' (erro no. %d)"; break;
			case 1026: $mensagem_erro  = "Erro ao gravar arquivo '%s' (erro no. %d)"; break;
			case 1027: $mensagem_erro  = "'%s' est&aacute; com travamento contra altera&ccedil;&otilde;es"; break;
			case 1028: $mensagem_erro  = "Ordena&ccedil;&atilde;o abortada"; break;
			case 1029: $mensagem_erro  = "Vis&atilde;o '%s' N&atilde;o existe para '%s'"; break;
			case 1030: $mensagem_erro  = "Obteve erro %d no manipulador de tabelas"; break;
			case 1031: $mensagem_erro  = "Manipulador de tabela para '%s' N&atilde;o tem esta op&ccedil;&atilde;o"; break;
			case 1032: $mensagem_erro  = "N&atilde;o pode encontrar registro em '%s'"; break;
			case 1033: $mensagem_erro  = "Informa&ccedil;&atilde;o incorreta no arquivo '%s'"; break;
			case 1034: $mensagem_erro  = "Arquivo de &iacute;ndice incorreto para tabela '%s'; tente repar&aacute;-lo"; break;
			case 1035: $mensagem_erro  = "Arquivo de &iacute;ndice desatualizado para tabela '%s'; repare-o!"; break;
			case 1036: $mensagem_erro  = "Tabela '%s' &eacute; somente para leitura"; break;
			case 1037: $mensagem_erro  = "Sem mem&oacute;ria. Reinicie o programa e tente novamente (necessita de %d bytes)"; break;
			case 1038: $mensagem_erro  = "Sem mem&oacute;ria para ordena&ccedil;&atilde;o. Aumente tamanho do 'buffer' de ordena&ccedil;&atilde;o"; break;
			case 1039: $mensagem_erro  = "Encontrado fim de arquivo inesperado ao ler arquivo '%s' (erro no. %d)"; break;
			case 1040: $mensagem_erro  = "Excesso de conex&otilde;es"; break;
			case 1041: $mensagem_erro  = "Sem mem&oacute;ria. Verifique se o mysqld ou algum outro processo est&aacute; usando toda mem&oacute;ria dispon&iacute;vel. Se N&atilde;o, voc&ecirc; pode ter que usar 'ulimit' para permitir ao mysqld usar mais mem&oacute;ria ou voc&ecirc; pode adicionar mais &aacute;rea de 'swap'"; break;
			case 1042: $mensagem_erro  = "N&atilde;o pode obter nome do 'host' para seu endere&ccedil;o"; break;
			case 1043: $mensagem_erro  = "Negocia&ccedil;&atilde;o de acesso falhou"; break;
			case 1044: $mensagem_erro  = "Acesso negado para o usu&aacute;rio '%s'@'%s' ao banco de dados '%s'"; break;
			case 1045: $mensagem_erro  = "Acesso negado para o usu&aacute;rio '%s'@'%s' (senha usada: %s)"; break;
			case 1046: $mensagem_erro  = "Nenhum banco de dados foi selecionado"; break;
			case 1047: $mensagem_erro  = "Comando desconhecido"; break;
			case 1048: $mensagem_erro  = "Coluna '%s' N&atilde;o pode ser vazia"; break;
			case 1049: $mensagem_erro  = "Banco de dados '%s' desconhecido"; break;
			case 1050: $mensagem_erro  = "Tabela '%s' j&aacute; existe"; break;
			case 1051: $mensagem_erro  = "Tabela '%s' desconhecida"; break;
			case 1052: $mensagem_erro  = "Coluna '%s' em '%s' &eacute; amb&iacute;gua"; break;
			case 1053: $mensagem_erro  = "'Shutdown' do servidor em andamento"; break;
			case 1054: $mensagem_erro  = "Coluna '%s' desconhecida em '%s'"; break;
			case 1055: $mensagem_erro  = "'%s' N&atilde;o est&aacute; em 'GROUP BY'"; break;
			case 1056: $mensagem_erro  = "N&atilde;o pode agrupar em '%s'"; break;
			case 1057: $mensagem_erro  = "Cl&aacute;usula cont&eacute;m fun&ccedil;&otilde;es de soma e colunas juntas"; break;
			case 1058: $mensagem_erro  = "Contagem de colunas N&atilde;o confere com a contagem de valores"; break;
			case 1059: $mensagem_erro  = "Nome identificador '%s' &eacute; longo demais"; break;
			case 1060: $mensagem_erro  = "Nome da coluna '%s' duplicado"; break;
			case 1061: $mensagem_erro  = "Nome da chave '%s' duplicado"; break;
			case 1062: $mensagem_erro  = "Entrada '%s' duplicada para a chave %d"; break;
			case 1063: $mensagem_erro  = "Especificador de coluna incorreto para a coluna '%s'"; break;
			case 1064: $mensagem_erro  = "%s pr&oacute;ximo a '%s' na linha %d"; break;
			case 1065: $mensagem_erro  = "Consulta (query) estava vazia"; break;
			case 1066: $mensagem_erro  = "Tabela/alias '%s' N&atilde;o &aacute;nica"; break;
			case 1067: $mensagem_erro  = "Valor padr&atilde;o (default) inv&aacute;lido para '%s'"; break;
			case 1068: $mensagem_erro  = "Definida mais de uma chave prim&aacute;ria"; break;
			case 1069: $mensagem_erro  = "Especificadas chaves demais. O m&aacute;ximo permitido s&atilde;o %d chaves"; break;
			case 1070: $mensagem_erro  = "Especificadas partes de chave demais. O m&aacute;ximo permitido s&atilde;o %d partes"; break;
			case 1071: $mensagem_erro  = "Chave especificada longa demais. O comprimento de chave m&aacute;ximo permitido &eacute; %d"; break;
			case 1072: $mensagem_erro  = "Coluna chave '%s' N&atilde;o existe na tabela"; break;
			case 1073: $mensagem_erro  = "Coluna BLOB '%s' N&atilde;o pode ser utilizada na especifica&ccedil;&atilde;o de chave para o tipo de tabela usado"; break;
			case 1074: $mensagem_erro  = "Comprimento da coluna '%s' grande demais (max = %d); use BLOB em seu lugar"; break;
			case 1075: $mensagem_erro  = "Defini&ccedil;&atilde;o incorreta de tabela. Somente &eacute; permitido um &uacute;nico campo auto-incrementado e ele tem que ser definido como chave"; break;
			case 1076: $mensagem_erro  = "%s: Pronto para conex&otilde;es"; break;
			case 1077: $mensagem_erro  = "%s: 'Shutdown' normal"; break;
			case 1078: $mensagem_erro  = "%s: Obteve sinal %d. Abortando!"; break;
			case 1079: $mensagem_erro  = "%s: 'Shutdown' completo"; break;
			case 1080: $mensagem_erro  = "%s: For�&ccedil;ando finaliza&ccedil;&atilde;o da 'thread' %ld - usu&aacute;rio '%s"; break;
			case 1081: $mensagem_erro  = "N&atilde;o pode criar o soquete IP"; break;
			case 1082: $mensagem_erro  = "Tabela '%s' N&atilde;o possui um &iacute;ndice como o usado em CREATE INDEX. Recrie a tabela"; break;
			case 1083: $mensagem_erro  = "Argumento separador de campos N&atilde;o � o esperado. Cheque o manual"; break;
			case 1084: $mensagem_erro  = "Voc&ecirc; N&atilde;o pode usar comprimento de linha fixo com BLOBs. Por favor, use campos com comprimento limitado."; break;
			case 1085: $mensagem_erro  = "Arquivo '%s' tem que estar no diret&oacute;rio do banco de dados ou ter leitura poss&iacute;vel para todos"; break;
			case 1086: $mensagem_erro  = "'%s' j&aacute; existe"; break;
			case 1087: $mensagem_erro  = "%ld - Deletados: %ld - Ignorados: %ld - Avisos: %ld"; break;
			case 1088: $mensagem_erro  = "%ld - Duplicados: %ld"; break;
			case 1089: $mensagem_erro  = "Sub parte da chave incorreta. A parte da chave usada N&atilde;o &eacute; uma 'string' ou o comprimento usado &eacute; maior que parte da chave ou o manipulador de tabelas n&atilde;o suporta sub chaves &uacute;nicas"; break;
			case 1090: $mensagem_erro  = "Voc&ecirc; N&atilde;o pode deletar todas as colunas com ALTER TABLE; use DROP TABLE em seu lugar"; break;
			case 1091: $mensagem_erro  = "N&atilde;o se pode fazer DROP '%s'. Confira se esta coluna/chave existe"; break;
			case 1092: $mensagem_erro  = "Registros: %ld - Duplicados: %ld - Avisos: %ld"; break;
			case 1093: $mensagem_erro  = "You can't specify target table '%s' for update in FROM clause"; break;
			case 1094: $mensagem_erro  = "'Id' de 'thread' %lu desconhecido"; break;
			case 1095: $mensagem_erro  = "Voc&ecirc;&eacute; N&atilde;o &eacute; propriet&aacute;rio da 'thread' %lu"; break;
			case 1096: $mensagem_erro  = "Nenhuma tabela usada"; break;
			case 1097: $mensagem_erro  = "'Strings' demais para coluna '%s' e SET"; break;
			case 1098: $mensagem_erro  = "N&atilde;o pode gerar um nome de arquivo de 'log' &uacute;nico '%s'.(1-999)"; break;
			case 1099: $mensagem_erro  = "Tabela '%s' foi travada com trava de leitura e N&atilde;o pode ser atualizada"; break;
			case 1100: $mensagem_erro  = "Tabela '%s' N&atilde;o foi travada com LOCK TABLES"; break;
			case 1101: $mensagem_erro  = "Coluna BLOB '%s' N&atilde;o pode ter um valor padr&atilde;o (default)"; break;
			case 1102: $mensagem_erro  = "Nome de banco de dados '%s' incorreto"; break;
			case 1103: $mensagem_erro  = "Nome de tabela '%s' incorreto"; break;
			case 1104: $mensagem_erro  = "O SELECT examinaria registros demais e provavelmente levaria muito tempo. Cheque sua cl&aacute;usula WHERE e use SET SQL_BIG_SELECTS=1, se o SELECT estiver correto"; break;
			case 1105: $mensagem_erro  = "Erro desconhecido"; break;
			case 1106: $mensagem_erro  = "'Procedure' '%s' desconhecida"; break;
			case 1107: $mensagem_erro  = "N&uacute;mero de par&atilde;metros incorreto para a 'procedure' '%s'"; break;
			case 1108: $mensagem_erro  = "Par&acirc;metros incorretos para a 'procedure' '%s'"; break;
			case 1109: $mensagem_erro  = "Tabela '%s' desconhecida em '%s'"; break;
			case 1110: $mensagem_erro  = "Coluna '%s' especificada duas vezes"; break;
			case 1111: $mensagem_erro  = "Uso inv&atilde;lido de fun&ccedil;&atilde;o de agrupamento (GROUP)"; break;
			case 1112: $mensagem_erro  = "Tabela '%s' usa uma extens&atilde;o que N&atilde;o existe nesta vers&atilde;o do MySQL"; break;
			case 1113: $mensagem_erro  = "Uma tabela tem que ter pelo menos uma (1) coluna"; break;
			case 1114: $mensagem_erro  = "Tabela '%s' est&aacute; cheia"; break;
			case 1115: $mensagem_erro  = "Conjunto de caracteres '%s' desconhecido"; break;
			case 1116: $mensagem_erro  = "Tabelas demais. O MySQL pode usar somente %d tabelas em uma jun&ccedil;&atilde;o (JOIN)"; break;
			case 1117: $mensagem_erro  = "Colunas demais"; break;
			case 1118: $mensagem_erro  = "Tamanho de linha grande demais. O m&aacute;ximo tamanho de linha, N&atilde;o contando BLOBs, &eacute; %d. Voc&ecirc; tem que mudar alguns campos para BLOBs"; break;
			case 1119: $mensagem_erro  = "Estouro da pilha do 'thread'. Usados %ld de uma pilha de %ld. Use 'mysqld -O thread_stack=#' para especificar uma pilha maior, se necess&aacute;rio"; break;
			case 1120: $mensagem_erro  = "Depend&ecirc;ncia cruzada encontrada em jun&ccedil;&atilde;o externa (OUTER JOIN); examine as condi&ccedil;&etilde;es utilizadas nas cl&aacute;usulas 'ON'"; break;
			case 1121: $mensagem_erro  = "Coluna '%s' &eacute; usada com &uacute;nica (UNIQUE) ou &iacute;ndice (INDEX), mas N&atilde;o est&aacute; definida como N&atilde;o-nula (NOT NULL)"; break;
			case 1122: $mensagem_erro  = "N&atilde;o pode carregar a fun&ccedil;&atilde;o '%s'"; break;
			case 1123: $mensagem_erro  = "N&atilde;o pode inicializar a fun&ccedil;&atilde;o '%s' - '%s'"; break;
			case 1124: $mensagem_erro  = "N&atilde;o h&aacute; caminhos (paths) permitidos para biblioteca compartilhada"; break;
			case 1125: $mensagem_erro  = "Fun&ccedil;&otilde;o '%s' j&aacute; existe"; break;
			case 1126: $mensagem_erro  = "N&atilde;o pode abrir biblioteca compartilhada '%s' (erro no. '%d' - '%s') "; break;
			case 1127: $mensagem_erro  = "N&atilde;o pode encontrar a fun&ccedil;&atilde;o '%s' na biblioteca"; break;
			case 1128: $mensagem_erro  = "Fun&ccedil;&atilde;o '%s' N&atilde;o est&aacute; definida"; break;
			case 1129: $mensagem_erro  = "'Host' '%s' est&aacute; bloqueado devido a muitos erros de conex&atilde;o. Desbloqueie com 'mysqladmin flush-hosts'"; break;
			case 1130: $mensagem_erro  = "'Host' '%s' N&atilde;o tem permiss&atilde;o para se conectar com este servidor MySQL"; break;
			case 1131: $mensagem_erro  = "Voc&ecirc; est&aacute; usando o MySQL como usu&aacute;rio an&ocirc;nimo e usu&aacute;rios an&ocirc;nimos N&atilde;o t&ecirc;m permiss&atilde;o para mudar senhas"; break;
			case 1132: $mensagem_erro  = "Voc&ecirc; deve ter privil&eacute;gios para atualizar tabelas no banco de dados mysql para ser capaz de mudar a senha de outros"; break;
			case 1133: $mensagem_erro  = "Linhas que combinaram: %ld - Alteradas: %ld - Avisos: %ld"; break;
			case 1134: $mensagem_erro  = "N&atilde;o pode criar uma nova 'thread' (erro no. %d). Se voc&ecirc; N&atilde;o estiver sem mem&oacute;ria dispon&iacute;vel, voc&ecirc; pode consultar o manual sobre um poss&iacute;vel 'bug' dependente do sistema operacional"; break;
			case 1135: $mensagem_erro  = "Contagem de colunas N&atilde;o confere com a contagem de valores na linha %ld"; break;
			case 1136: $mensagem_erro  = "N&atilde;o pode reabrir a tabela '%s"; break;
			case 1137: $mensagem_erro  = "Uso inv&aacute;lido do valor NULL"; break;
			case 1138: $mensagem_erro  = "Obteve erro '%s' em regexp"; break;
			case 1139: $mensagem_erro  = "Mistura de colunas agrupadas (com MIN(), MAX(), COUNT(), ...) com colunas N&atilde;o agrupadas &eacute; ilegal, se N&atilde;o existir uma cl&aacute;usula de agrupamento (cl&aacute;usula GROUP BY)"; break;
			case 1140: $mensagem_erro  = "N&atilde;o existe tal permiss&atilde;o (grant) definida para o usu&aacute;rio '%s' no 'host' '%s'"; break;
			case 1141: $mensagem_erro  = "N&atilde;o existe tal permiss&atilde;o (grant) definida para o usu&aacute;rio '%s' no 'host' '%s'"; break;
			case 1142: $mensagem_erro  = "Comando '%s' negado para o usu&aacute;rio '%s'@'%s' na tabela '%s'"; break;
			case 1143: $mensagem_erro  = "Comando '%s' negado para o usu&aacute;rio '%s'@'%s' na coluna '%s', na tabela '%s'"; break;
			case 1144: $mensagem_erro  = "Comando GRANT/REVOKE ilegal. Por favor consulte no manual quais privil&eacute;gios podem ser usados."; break;
			case 1145: $mensagem_erro  = "Argumento de 'host' ou de usu&aacute;rio para o GRANT &eacute; longo demais"; break;
			case 1146: $mensagem_erro  = "Tabela '%s.%s' N&atilde;o existe"; break;
			case 1147: $mensagem_erro  = "N&atilde;o existe tal permiss&atilde;o (grant) definido para o us&aacute;urio '%s' no 'host' '%s', na tabela '%s'"; break;
			case 1148: $mensagem_erro  = "Comando usado N&atilde;o &eacute permitido para esta vers&atilde;o do MySQL"; break;
			case 1148: $mensagem_erro  = "Voc&ecirc; tem um erro de sintaxe no seu SQL"; break;
			case 1150: $mensagem_erro  = "'Thread' de inser&ccedil;&atilde;o retardada (atrasada) pois N&atilde;o conseguiu obter a trava solicitada para tabela '%s'"; break;
			case 1151: $mensagem_erro  = "Excesso de 'threads' retardadas (atrasadas) em uso"; break;
			case 1152: $mensagem_erro  = "Conex&atilde;o %ld abortou para o banco de dados '%s' - usu&aacute;rio '%s' (%s)"; break;
			case 1153: $mensagem_erro  = "Obteve um pacote maior do que a taxa m&aacute;xima de pacotes definida (max_allowed_packet)"; break;
			case 1154: $mensagem_erro  = "Obteve um erro de leitura no 'pipe' da conex&atilde;o"; break;
			case 1155: $mensagem_erro  = "Obteve um erro em fcntl()"; break;
			case 1156: $mensagem_erro  = "Obteve pacotes fora de ordem"; break;
			case 1157: $mensagem_erro  = "N&atilde;o conseguiu descomprimir pacote de comunica&ccedil;&atilde;o"; break;
			case 1158: $mensagem_erro  = "Obteve um erro na leitura de pacotes de comunica&ccedil;&atilde;o"; break;
			case 1159: $mensagem_erro  = "Obteve expira&ccedil;&atilde;o de tempo (timeout) na leitura de pacotes de comunica&ccedil;&atilde;o"; break;
			case 1160: $mensagem_erro  = "Obteve um erro na escrita de pacotes de comunica&ccedil;&atilde;o"; break;
			case 1161: $mensagem_erro  = "Obteve expira&ccedil;&atilde;o de tempo ('timeout') na escrita de pacotes de comunica&ccedil;&atilde;o"; break;
			case 1162: $mensagem_erro  = "'String' resultante &eacute; mais longa do que 'max_allowed_packet'"; break;
			case 1163: $mensagem_erro  = "Tipo de tabela usado N&atilde;o permite colunas BLOB/TEXT"; break;
			case 1164: $mensagem_erro  = "Tipo de tabela usado N&atilde;o permite colunas AUTO_INCREMENT"; break;
			case 1165: $mensagem_erro  = "INSERT DELAYED N&atilde;o pode ser usado com a tabela '%s', porque ela est&aacute; travada com LOCK TABLES"; break;
			case 1166: $mensagem_erro  = "Nome de coluna '%s' incorreto"; break;
			case 1167: $mensagem_erro  = "O manipulador de tabela usado N&atilde;o pode indexar a coluna '%s'"; break;
			case 1168: $mensagem_erro  = "Todas as tabelas contidas na tabela fundida (MERGE) N&atilde;o est&atilde;o definidas identicamente"; break;
			case 1169: $mensagem_erro  = "N&atilde;o pode gravar, devido &aacute; restri&ccedil;&atilde;o UNIQUE, na tabela '%s'"; break;
			case 1170: $mensagem_erro  = "Coluna BLOB '%s' usada na especifica&ccedil;&atilde;o de chave sem o comprimento da chave"; break;
			case 1171: $mensagem_erro  = "Todas as partes de uma chave prim&aacute;ria devem ser N&atilde;o-nulas. Se voc&ecirc; precisou usar um valor nulo (NULL) em uma chave, use a cl&aacute;usula UNIQUE em seu lugar"; break;
			case 1172: $mensagem_erro  = "O resultado consistiu em mais do que uma linha"; break;
			case 1173: $mensagem_erro  = "Este tipo de tabela requer uma chave prim&aacute;ria"; break;
			case 1174: $mensagem_erro  = "Esta vers&atilde;o do MySQL N&atilde;o foi compilada com suporte a RAID"; break;
			case 1175: $mensagem_erro  = "Voc&ecirc; est&aacute; usando modo de atualiza&ccedil;&atilde;o seguro e tentou atualizar uma tabela sem uma cl&aacute;usula WHERE que use uma coluna chave"; break;
			case 1176: $mensagem_erro  = "Chave '%s' N&atilde;o existe na tabela '%s'"; break;
			case 1177: $mensagem_erro  = "N&atilde;o pode abrir a tabela"; break;
			case 1178: $mensagem_erro  = "O manipulador de tabela N&atilde;o suporta %s"; break;
			case 1179: $mensagem_erro  = "N&atilde;o lhe &eacute; permitido executar este comando em uma transa&ccedil;&atilde;o"; break;
			case 1180: $mensagem_erro  = "Obteve erro %d durante COMMIT"; break;
			case 1181: $mensagem_erro  = "Obteve erro %d durante ROLLBACK"; break;
			case 1182: $mensagem_erro  = "Obteve erro %d durante FLUSH_LOGS"; break;
			case 1183: $mensagem_erro  = "Obteve erro %d durante CHECKPOINT"; break;
			case 1184: $mensagem_erro  = "Conex&atilde;o %ld abortada para banco de dados '%s' - usu&aacute;rio '%s' - 'host' `%s' ('%s')"; break;
			case 1185: $mensagem_erro  = "O manipulador de tabela N&atilde;o suporta 'dump' bin&aacute;rio de tabela"; break;
			case 1186: $mensagem_erro  = "Binlog fechado. N&atilde;o pode fazer RESET MASTER"; break;
			case 1187: $mensagem_erro  = "Falhou na reconstru&ccedil;&atilde;o do &iacute;ndice da tabela 'dumped' '%s'"; break;
			case 1188: $mensagem_erro  = "Erro no 'master' '%s'"; break;
			case 1189: $mensagem_erro  = "Erro de rede lendo do 'master'"; break;
			case 1190: $mensagem_erro  = "Erro de rede gravando no 'master'"; break;
			case 1191: $mensagem_erro  = "N&atilde;o pode encontrar um &iacute;ndice para o texto todo que combine com a lista de colunas"; break;
			case 1192: $mensagem_erro  = "N&atilde;o pode executar o comando dado porque voc&ecirc; tem tabelas ativas travadas ou uma transa&ccedil;&atilde;o ativa"; break;
			case 1193: $mensagem_erro  = "Vari&aacute;vel de sistema '%s' desconhecida"; break;
			case 1194: $mensagem_erro  = "Tabela '%s' est&aacute; marcada como danificada e deve ser reparada"; break;
			case 1195: $mensagem_erro  = "Tabela '%s' est&aacute; marcada como danificada e a &uacute;ltima repara&ccedil;&atilde;o (autom&aacute;tica?) falhou"; break;
			case 1196: $mensagem_erro  = "Aviso: Algumas tabelas N&atilde;o-transacionais alteradas N&atilde;o puderam ser reconstitu&iacute;das (rolled back)"; break;
			case 1197: $mensagem_erro  = "Transa&ccedil;&otilde;es multi-declaradas (multi-statement transactions) requeriram mais do que o valor limite (max_binlog_cache_size) de bytes para armazenagem. Aumente o valor desta vari&aacute;vel do mysqld e tente novamente"; break;
			case 1198: $mensagem_erro  = "Esta opera&ccedil;&atilde;o N&atilde;o pode ser realizada com um 'slave' em execu&ccedil;&atilde;o. Execute STOP SLAVE primeiro"; break;
			case 1199: $mensagem_erro  = "Esta opera&ccedil;&atilde;o requer um 'slave' em execu&ccedil;&atilde;o. Configure o 'slave' e execute START SLAVE"; break;
			case 1200: $mensagem_erro  = "O servidor N&atilde;o est&aacute; configurado como 'slave'. Acerte o arquivo de configura&ccedil;&atilde;o ou use CHANGE MASTER TO"; break;
			case 1201: $mensagem_erro  = "Could not initialize master info structure, more error messages can be found in the MySQL error log"; break;
			case 1202: $mensagem_erro  = "N&atilde;o conseguiu criar 'thread' de 'slave'. Verifique os recursos do sistema"; break;
			case 1203: $mensagem_erro  = "Usu&aacute;rio '%s' j&aacute; possui mais que o valor m&aacute;ximo de conex&otilde;es (max_user_connections) ativas"; break;
			case 1204: $mensagem_erro  = "Voc&ecirc; pode usar apenas express&otilde;es constantes com SET"; break;
			case 1205: $mensagem_erro  = "Tempo de espera (timeout) de travamento excedido. Tente reiniciar a transa&ccedil;&atilde;o."; break;
			case 1206: $mensagem_erro  = "O n&uacute;mero total de travamentos excede o tamanho da tabela de travamentos"; break;
			case 1207: $mensagem_erro  = "Travamentos de atualiza&ccedil;&atilde;o n&atilde;o podem ser obtidos durante uma transa&ccedil;&atilde;o de tipo READ UNCOMMITTED"; break;
			case 1208: $mensagem_erro  = "DROP DATABASE n&atilde;o permitido enquanto uma 'thread' est&aacute; mantendo um travamento global de leitura"; break;
			case 1209: $mensagem_erro  = "CREATE DATABASE n&atilde;o permitido enquanto uma 'thread' est&aacute; mantendo um travamento global de leitura"; break;
			case 1210: $mensagem_erro  = "Argumentos errados para %s"; break;
			case 1211: $mensagem_erro  = "N&atilde;o &eacute; permitido a '%s'@'%s' criar novos usu&aacute;rios"; break;
			case 1212: $mensagem_erro  = "Defini&ccedil;&atilde;o incorreta da tabela. Todas as tabelas contidas na jun&ccedil;&atilde;o devem estar no mesmo banco de dados."; break;
			case 1213: $mensagem_erro  = "Encontrado um travamento fatal (deadlock) quando tentava obter uma trava. Tente reiniciar a transa&ccedil;&atilde;o."; break;	 
			case 1214: $mensagem_erro  = "O tipo de tabela utilizado n&atilde;o suporta �ndices de texto completo (fulltext indexes)"; break;
			case 1215: $mensagem_erro  = "N&atilde;o pode acrescentar uma restri&ccedil;&atilde;o de chave estrangeira"; break;
			case 1216: $mensagem_erro  = "N&atilde;o pode acrescentar uma linha filha: uma restri&ccedil;&atilde;o de chave estrangeira falhou"; break;
			case 1217: $mensagem_erro  = "N&atilde;o pode apagar uma linha pai: uma restri&ccedil;&atilde;o de chave estrangeira falhou"; break;
			case 1218: $mensagem_erro  = "Erro conectando com o master: %s"; break;
			case 1219: $mensagem_erro  = "Erro rodando consulta no master: %s"; break;
			case 1220: $mensagem_erro  = "Erro quando executando comando %s: %s"; break;
			case 1221: $mensagem_erro  = "Uso errado de %s e %s"; break;
			case 1222: $mensagem_erro  = "Os comandos SELECT usados t&ecirc;m diferente n&uacute;mero de colunas"; break;
			case 1223: $mensagem_erro  = "N&atilde;o posso executar a consulta porque voc&ecirc; tem um conflito de travamento de leitura"; break;
			case 1224: $mensagem_erro  = "Mistura de tabelas transacional e n&atilde;o-transacional est&aacute; desabilitada"; break;
			case 1225: $mensagem_erro  = "Op��o '%s' usada duas vezes no comando"; break;
			case 1226: $mensagem_erro  = "Usu&aacute;rio '%s' tem excedido o '%s' recurso (atual valor: %ld)"; break;
			case 1227: $mensagem_erro  = "Acesso negado. Voc&ecirc; precisa o privil&eacute;gio %s para essa opera&ccedil;&atilde;o"; break;
			case 1228: $mensagem_erro  = "Vari&aacute;vel '%s' &eacute; uma SESSION vari&aacute;vel e n&atilde;o pode ser usada com SET GLOBAL  "; break;
			case 1229: $mensagem_erro  = "Vari&aacute;vel '%s' &eacute; uma GLOBAL vari&aacute;vel e deve ser configurada com SET GLOBAL  "; break;
			case 1230: $mensagem_erro  = "Vari&aacute;vel '%s' n&atilde;o tem um valor padr&atilde;o"; break;
			case 1231: $mensagem_erro  = "Vari&aacute;vel '%s' n&atilde;o pode ser configurada para o valor de '%s'  "; break;
			case 1232: $mensagem_erro  = "Tipo errado de argumento para vari&aacute;vel '%s'"; break;
			case 1233: $mensagem_erro  = "Vari&aacute;vel '%s' somente pode ser configurada, n&atilde;o lida"; break;
			case 1234: $mensagem_erro  = "Errado uso/coloca&ccedil;&atilde;o de '%s'"; break;
			case 1235: $mensagem_erro  = "Esta vers&atilde;o de MySQL n&atilde;o suporta ainda '%s'"; break;
			case 1236: $mensagem_erro  = "Obteve fatal erro %d: '%s' do master quando lendo dados do binary log"; break;
			case 1237: $mensagem_erro  = "Slave SQL thread ignorado a consulta devido &aacute;s normas de replica&ccedil;&atilde;o-*-tabela"; break;
			case 1238: $mensagem_erro  = "Variable '%s' is a %s variable"; break;
			case 1239: $mensagem_erro  = "Defini&ccedil;&atilde;o errada da chave estrangeira para '%s': %s"; break;
			case 1240: $mensagem_erro  = "Refer&ecirc;ncia da chave e refer&ecirc;ncia da tabela n&atilde;o coincidem"; break;
			case 1241: $mensagem_erro  = "Operand should contain %d column(s)"; break;
			case 1242: $mensagem_erro  = "Subconsulta retorna mais que 1 registro"; break;
			case 1243: $mensagem_erro  = "Desconhecido manipulador de declara&ccedil;&atilde;o preparado (%.*s) determinado para %s"; break;
			case 1244: $mensagem_erro  = "Banco de dado de ajuda corrupto ou n�o existente"; break;
			case 1245: $mensagem_erro  = "Refer&ecirc;ncia c�clica em subconsultas"; break;
			case 1246: $mensagem_erro  = "Convertendo coluna '%s' de %s para %s"; break;
			case 1247: $mensagem_erro  = "Refer&ecirc;ncia '%s' n&atilde;o suportada (%s)"; break;
			case 1248: $mensagem_erro  = "Cada tabela derivada deve ter seu pr&oacute;prio alias"; break;
			case 1249: $mensagem_erro  = "Select %u foi reduzido durante otimiza&ccedil;&atilde;o "; break;
			case 1250: $mensagem_erro  = "Tabela '%s' de um dos SELECTs n&atilde;o pode ser usada em %s"; break;
			case 1251: $mensagem_erro  = "Cliente n&atilde;o suporta o protocolo de autentica&ccedil;&atilde;o exigido pelo servidor; considere a atualiza&ccedil;&atilde;o do cliente MySQL"; break;
			case 1252: $mensagem_erro  = "Todas as partes de uma SPATIAL KEY devem ser NOT NULL"; break;
			case 1253: $mensagem_erro  = "COLLATION '%s' no &eacute; v&aacute;lida para CHARACTER SET '%s'"; break;
			case 1254: $mensagem_erro  = "O slave j&aacute; est&aacute; rodando"; break;
			case 1255: $mensagem_erro  = "O slave j&aacute; est&aacute; parado"; break;
			case 1256: $mensagem_erro  = "Tamanho muito grande dos dados des comprimidos. O m&aacute;ximo tamanho &eacute; %d. (provavelmente, o comprimento dos dados descomprimidos est� corrupto)"; break;
			case 1257: $mensagem_erro  = "ZLIB: N&atilde;o suficiente mem&oacute;ria dispon&iacute;vel"; break;
			case 1258: $mensagem_erro  = "ZLIB: N&atilde;o suficiente espa�o no buffer emissor (provavelmente, o comprimento dos dados descomprimidos est&aacute; corrupto)"; break;
			case 1259: $mensagem_erro  = "ZLIB: Dados de entrada est&aacute; corrupto"; break;
			case 1260: $mensagem_erro  = "%d linha(s) foram cortada(s) por GROUP_CONCAT()"; break;
			case 1261: $mensagem_erro  = "Conta de registro &eacute; menor que a conta de coluna na linha %ld"; break;
			case 1262: $mensagem_erro  = "Conta de registro &eacute; maior que a conta de coluna na linha %ld"; break;
			case 1263: $mensagem_erro  = "Dado truncado, NULL fornecido para NOT NULL coluna '%s' na linha %ld"; break;
			case 1264: $mensagem_erro  = "Dado truncado, fora de alcance para coluna '%s' na linha %ld"; break;
			case 1265: $mensagem_erro  = "Dado truncado para coluna '%s' na linha %ld"; break;
			case 1266: $mensagem_erro  = "Usando engine de armazenamento %s para tabela '%s'"; break;
			case 1267: $mensagem_erro  = "Combina&ccedil;&atilde;o ilegal de collations (%s,%s) e (%s,%s) para opera&ccedil;&atilde;o '%s'"; break;
			case 1268: $mensagem_erro  = "N&atilde;o pode remover um ou mais dos usu&aacute;rios pedidos"; break;
			case 1269: $mensagem_erro  = "N&atilde;o pode revocar todos os privil&eacute;gios, grant para um ou mais dos usu&aacute;rios pedidos"; break;
			case 1270: $mensagem_erro  = "Ilegal combina&ccedil;&atilde;o de collations (%s,%s), (%s,%s), (%s,%s) para opera&ccedil;&atilde;o '%s'"; break;
			case 1271: $mensagem_erro  = "Ilegal combina&ccedil;&atilde;o de collations para opera&ccedil;&atilde;o '%s'"; break;
			case 1272: $mensagem_erro  = "Vari�vel '%s' n&atilde;o &eacute; uma vari&eacute;vel componente (N&atilde;o pode ser usada como XXXX.vari&aacute;vel_nome)"; break;
			case 1273: $mensagem_erro  = "Collation desconhecida: '%s' "; break;
			case 1274: $mensagem_erro  = "SSL par&acirc;metros em CHANGE MASTER s&atilde;o ignorados porque este escravo MySQL foi compilado sem o SSL suporte. Os mesmos podem ser usados mais tarde quando o escravo MySQL com SSL seja iniciado."; break;
			case 1275: $mensagem_erro  = "Servidor est&atilde; rodando em --secure-auth modo, por$ecirc;m '%s'@'%s' tem senha no formato antigo; por favor troque a senha para o novo formato"; break;
			case 1276: $mensagem_erro  = "Campo ou refer&ecirc;ncia '%s%s%s%s%s' de SELECT #%d foi resolvido em SELECT #%d"; break;
			case 1277: $mensagem_erro  = "Par&acirc;metro ou combina&ccedil;&atilde;o de par&acirc;metros errado para START SLAVE UNTIL"; break;
			case 1278: $mensagem_erro  = "&eacute; recomendado para rodar com --skip-slave-start quando fazendo replica&ccedil;&atilde;o passo-por-passo com START SLAVE UNTIL, de outra forma voc&ecirc; n&atild;o est&aacute; seguro em caso de inesperada reiniciali&ccedil;&atilde;o do mysqld escravo"; break;
			case 1279: $mensagem_erro  = "Thread SQL n&atilde;o pode ser inicializado tal que op&ccedil;�es UNTIL s�o ignoradas"; break;
			case 1280: $mensagem_erro  = "Incorreto nome de &iacute;ndice '%s'"; break;
			case 1281: $mensagem_erro  = "Incorreto nome de cat&aacute;logo '%s'"; break;
			case 1282: $mensagem_erro  = "Falha em Query cache para configurar tamanho %lu, novo tamanho de query cache &eacute; %lu"; break;
			case 1283: $mensagem_erro  = "Coluna '%s' n&atilde;o pode ser parte de &iacute;ndice FULLTEXT"; break;
			case 1284: $mensagem_erro  = "Key cache desconhecida '%s'"; break;
			case 1285: $mensagem_erro  = "MySQL foi inicializado em modo --skip-name-resolve. Voc&ecirc; necesita reincializ&aacute;-lo sem esta op�&atilde;o para este grant funcionar"; break;
			case 1286: $mensagem_erro  = "Motor de tabela desconhecido '%s'"; break;
			case 1287: $mensagem_erro  = "'%s' &eacute; desatualizado. Use '%s' em seu lugar"; break;
			case 1288: $mensagem_erro  = "A tabela destino %s do %s n&atilde;o &eacute; atualiz&aacute;vel"; break;
			case 1289: $mensagem_erro  = "O recurso '%s' foi desativado; voc&ecirc; necessita MySQL constru�do com '%s' para ter isto funcionando"; break;
			case 1290: $mensagem_erro  = "O servidor MySQL est&aacute; rodando com a op&ccedil;&atilde;o %s raz&atilde;o pela qual n&atilde;o pode executar esse commando"; break;
			case 1291: $mensagem_erro  = "Coluna '%s' tem valor duplicado '%s' em %s"; break;
			case 1292: $mensagem_erro  = "Truncado errado %s valor: '%s'"; break;
			case 1293: $mensagem_erro  = "Incorreta defini&ccedil;&atilde;o de tabela; Pode ter somente uma coluna TIMESTAMP com CURRENT_TIMESTAMP em DEFAULT ou ON UPDATE cl&atilde;usula"; break;
			case 1294: $mensagem_erro  = "Inv&atilde;lida cl�&atilde;sula ON UPDATE para campo '%s' "; break;
			case 1295: $mensagem_erro  = "This command is not supported in the prepared statement protocol yet"; break;
			case 1296: $mensagem_erro  = "Got error %d '%s' from %s"; break;
			case 1297: $mensagem_erro  = "Got temporary error %d '%s' from %s"; break;
			case 1298: $mensagem_erro  = "Unknown or incorrect time zone: '%s'"; break;
			case 1299: $mensagem_erro  = "Invalid TIMESTAMP value in column '%s' at row %ld"; break;
			case 1300: $mensagem_erro  = "Invalid %s character string: '%s'"; break;
			case 1301: $mensagem_erro  = "Result of %s() was larger than max_allowed_packet (%ld) - truncated"; break;
			case 1302: $mensagem_erro  = "Conflicting declarations: '%s%s' and '%s%s'Client error information comes from the following files: The Error values and the symbols in parentheses correspond to definitions in the include/errmsg.h MySQL source file.
The Message values correspond to the error messages that are listed in the libmysql/errmsg.c file. %d or %s represent numbers or strings that are substituted into the messages %when they are displayed. 
Because updates are frequent, it is possible that these files contain additional error information not listed here."; break;
			case 2000: $mensagem_erro  = "Unknown MySQL error"; break;
			case 2001: $mensagem_erro  = "Can't create UNIX socket (%d)"; break;
			case 2002: $mensagem_erro  = "Can't connect to local MySQL server through socket '%s' (%d)"; break;
			case 2003: $mensagem_erro  = "Can't connect to MySQL server on '%s' (%d)"; break;
			case 2004: $mensagem_erro  = "Can't create TCP/IP socket (%d)"; break;
			case 2005: $mensagem_erro  = "Unknown MySQL server host '%s' (%d)"; break;
			case 2006: $mensagem_erro  = "MySQL server has gone away"; break;
			case 2007: $mensagem_erro  = "Protocol mismatch; server version = %d, client version = %d"; break;
			case 2008: $mensagem_erro  = "MySQL client ran out of memory"; break;
			case 2009: $mensagem_erro  = "Wrong host info"; break;
			case 2010: $mensagem_erro  = "Localhost via UNIX socket"; break;
			case 2011: $mensagem_erro  = "%s via TCP/IP"; break;
			case 2012: $mensagem_erro  = "Error in server handshake"; break;
			case 2013: $mensagem_erro  = "Lost connection to MySQL server during query"; break;
			case 2014: $mensagem_erro  = "Commands out of sync; you can't run this command now"; break;
			case 2015: $mensagem_erro  = "Named pipe: %s"; break;
			case 2016: $mensagem_erro  = "Can't wait for named pipe to host: %s pipe: %s (%lu)"; break;
			case 2017: $mensagem_erro  = "Can't open named pipe to host: %s pipe: %s (%lu)"; break;
			case 2018: $mensagem_erro  = "Can't set state of named pipe to host: %s pipe: %s (%lu)"; break;
			case 2019: $mensagem_erro  = "Can't initialize character set %s (path: %s)"; break;
			case 2020: $mensagem_erro  = "Got packet bigger than 'max_allowed_packet' bytes"; break;
			case 2021: $mensagem_erro  = "Embedded server"; break;
			case 2022: $mensagem_erro  = "Error on SHOW SLAVE STATUS:"; break;
			case 2023: $mensagem_erro  = "Error on SHOW SLAVE HOSTS:"; break;
			case 2024: $mensagem_erro  = "Error connecting to slave:"; break;
			case 2025: $mensagem_erro  = "Error connecting to master:"; break;
			case 2026: $mensagem_erro  = "SSL connection error"; break;
			case 2027: $mensagem_erro  = "Malformed packet"; break;
			case 2028: $mensagem_erro  = "This client library is licensed only for use with MySQL servers having '%s' license"; break;
			case 2029: $mensagem_erro  = "Invalid use of null pointer"; break;
			case 2030: $mensagem_erro  = "Statement not prepared"; break;
			case 2031: $mensagem_erro  = "No data supplied for parameters in prepared statement"; break;
			case 2032: $mensagem_erro  = "Data truncated"; break;
			case 2033: $mensagem_erro  = "No parameters exist in the statement"; break;
			case 2034: $mensagem_erro  = "Invalid parameter number"; break;
			case 2035: $mensagem_erro  = "Can't send long data for non-string/non-binary data types (parameter: %d)"; break;
			case 2036: $mensagem_erro  = "Using unsupported buffer type: %d (parameter: %d)"; break;
			case 2037: $mensagem_erro  = "Shared memory: %s"; break;
			case 2038: $mensagem_erro  = "Can't open shared memory; client could not create request event (%lu)"; break;
			case 2039: $mensagem_erro  = "Can't open shared memory; no answer event received from server (%lu)"; break;
			case 2040: $mensagem_erro  = "Can't open shared memory; server could not allocate file mapping (%lu)"; break;
			case 2041: $mensagem_erro  = "Can't open shared memory; server could not get pointer to file mapping (%lu)"; break;
			case 2042: $mensagem_erro  = "Can't open shared memory; client could not allocate file mapping (%lu)"; break;
			case 2043: $mensagem_erro  = "Can't open shared memory; client could not get pointer to file mapping (%lu)"; break;
			case 2044: $mensagem_erro  = "Can't open shared memory; client could not create %s event (%lu)"; break;
			case 2045: $mensagem_erro  = "Can't open shared memory; no answer from server (%lu)"; break;
			case 2046: $mensagem_erro  = "Can't open shared memory; cannot send request event to server (%lu)"; break;
			case 2047: $mensagem_erro  = "Wrong or unknown protocol"; break;
			case 2048: $mensagem_erro  = "Invalid connection handle"; break;
			case 2049: $mensagem_erro  = "Connection using old (pre-4.1.1) authentication protocol refused (client option 'secure_auth' enabled)"; break;
			case 2050: $mensagem_erro  = "Row retrieval was canceled by mysql_stmt_close() call"; break;
			case 2051: $mensagem_erro  = "Attempt to read column without prior row fetch"; break;
			case 2052: $mensagem_erro  = "Prepared statement contains no metadata"; break;
			
			default: $mensagem_erro = "Erro N&atilde;o identificado";
		}
	}

	function alerta($mensagem)
	{
		echo '<script>alert("'.$mensagem.'");</script>';
	}
	
	function voltar()
	{
		echo '<script>history.back();</script>';
	}
	
	function direciona($url_site)
	{
		echo '<script>window.location="'.$url_site.'"</script>';
	}
?>

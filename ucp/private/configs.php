<?php require_once('../private/configs.php');

###########################################################
##                   Configurações                       ##
###########################################################
$panel_url = 'genesisl2.com.ar/ucp'; // Digite exatamente o URL onde se encontra este painel (exemplo: www.l2latinos/ucp)
$themeColor = 'blue'; // Qual a tonalidade de cor predominante na template? (Escolha: default, black, blue, red, green ou purple)
$defaultLang = 'ES'; // Idioma padrão do painel (Escolha entre: PT, EN ou ES) - O painel conta com um sistema inteligente que detecta o idioma do navegador do usuário e exibe tudo naquele idioma, mas caso não consigamos detectar ou caso o navegador esteja num idioma diferente dos três citados anteriormente, o idioma setado aqui será o exibido
$gmt = '0'; // Se os scripts do painel estiverem num horário adiantado ou atrasado, altere o GMT. Exemplo: -1 (-1 hora), +3 (+3 horas), etc


###########################################################
##              Controle de funcionalidades              ##
###########################################################
// Quais funcionalidades estão disponíveis para os jogadores? (1 = Disponível | 0 = Indisponível)
$funct['regist'] = 1; // Se cadastrar através do painel
$funct['forgot'] = 1; // Recuperar conta através do painel
$funct['donate'] = 1; // Fazer doações/adquirir moedas
$funct['trnsf1'] = 1; // Transferir moedas online para um personagem in-game - Possibilita converter seu saldo para coins/ticket in-game (mais configurações abaixo)
$funct['trnsf2'] = 1; // Transferir moedas online para outra conta
$funct['gamst1'] = 1; // Game Stats - Top PvP
$funct['gamst2'] = 1; // Game Stats - Top PK
$funct['gamst3'] = 1; // Game Stats - Top Clan
$funct['gamst4'] = 1; // Game Stats - Top Online
$funct['gamst5'] = 1; // Game Stats - Grand Olympiad
$funct['gamst6'] = 1; // Game Stats - Boss Status
$funct['gamst7'] = 1; // Game Stats - Castle & Siege
$funct['config'] = 1; // Configurações (alterar dados da conta)


###########################################################
##                Cadastro e Recuperação                 ##
###########################################################
// Caso indisponibilize acima as opções de "Se cadastrar através do painel" ou "Recuperar conta através do painel", você pode inserir abaixo links externos para que os jogadores possam se cadastrar ou recuperar suas contas em uma página externa (caso deixe em branco, as opções irão sumir)
$link_regist = "https://l2latinos.com/?page=register"; // Link da página externa de cadastro
$link_forgot = "http://opcional"; // Link da página externa de recuperar


###########################################################
##                  Aquisição de Saldo                   ##
###########################################################
$coinName = 'Ticket de Donacion'; // Nome da moeda online que representa o saldo (usada apenas no painel de usuário)
$coinName_mini = 'TD'; // Nome resumido da moeda

// Bonus em porcentagem ao adquirir moeda online em altas quantidades (Exemplo: a cada 100 moedas compradas, ganha 10%, ou seja, paga pelas 100, mas recebe 110)
$bonusActived = 1; // Deseja habilitar a bonificação por compra em quantidade? (1 = Sim | 0 = Não)

// Você pode inserir até 3 bonificações! Caso não queira usar alguma, basta setar os valores como '0' que será desconsiderada.

// Bonificação 1:
$buyCoins['bonus_count'][1] = '10'; // A partir de qual quantidade o bônus abaixo é dado?
$buyCoins['bonus_percent'][1] = '0'; // Qual a porcentagem de bonificação?

// Bonificação 2:
$buyCoins['bonus_count'][2] = '100'; // A partir de qual quantidade o bônus abaixo é dado?
$buyCoins['bonus_percent'][2] = '15'; // Qual a porcentagem de bonificação?

// Bonificação 3:
$buyCoins['bonus_count'][3] = '500'; // A partir de qual quantidade o bônus abaixo é dado?
$buyCoins['bonus_percent'][3] = '20'; // Qual a porcentagem de bonificação?

// Exclusão de fatura
$delFatura = 1; // O usuário pode excluir uma fatura? (1 = Sim | 0 = Não) - OBS: Uma fatura nunca é excluída, ela é ocultada, mas sempre permanecerá no banco de dados.


###########################################################
##         Transferência por coin/ticket in-game         ##
###########################################################
// Caso esteja habilitada a funcionalidade "Transferir moedas online para um personagem in-game", o jogador poderá converter seu saldo online para moedas in-game! Precisamos definir algumas informações...
$coinGame = 'Ticket de Donacion'; // Nome da moeda donate in-game (geralmente Coin, Ticket ou Gold)
$coinID = 10103; // ID da moeda


###########################################################
##                   Modulos de doação                   ##
###########################################################

$autoDelivery = 1; // Você deseja que a entrega do saldo seja feita de forma automática? (1 = Sim | 0 = Não) (se optar de forma manual, as doações pagas ficarão com status "Paga". Você terá que ir até o painel admin e concluí-las clicando no botão "Entregar". Quando concluir, o saldo será adicionado e o status passará a ser "Entregue")
$donateEmail = 'Entre a nuestro sitio web y de click en soporte !'; // Email que receberá os comprovantes de pagamento para as transações bancárias e módulos de confirmação manual

// PAGSEGURO CONFIGS:
$PagSeguro['actived'] = 0; // Opção ativa? (1 = Sim / 0 = Não)
$PagSeguro['email'] = 'l2latinos@gmail.com'; // Email da conta que receberá as doações
$PagSeguro['token'] = '7057cca2-be06-45cc-bdf2-c3f1274c23456825c0c64fe4bf58c800743e88c2b22ceb99-a4d7-4cf2-ba7d-0bf3314b47d1'; // Token gerado no PagSeguro
$PagSeguro['token_sandbox'] = '___TOKEN_AQUI___'; // Token gerado no ambiente de testes do PagSeguro
$PagSeguro['testando'] = 0; // Está testando o sistema através do PagSeguro Sandbox? (1 = Sim | 0 = Não)
$PagSeguro['coin_price'] = '1.00'; // Valor unitário (em Reais)

// PAYPAL CONFIGS:
$PayPal['actived'] = 1; // Opção ativa? (1 = Sim / 0 = Não)
$PayPal['business_email'] = 'L2Valhein@gmail.com'; // Email da conta que receberá as doações
$PayPal['USD']['coin_price'] = '0.19'; // Valor unitário (em Dolar)
$PayPal['BRL']['coin_price'] = '1.00'; // Valor unitário (em Reais)
$PayPal['EUR']['coin_price'] = '0.18'; // Valor unitário (em Euros)
$PayPal['testando'] = 1; // Está testando o sistema através do PayPal Sandbox? (1 = Sim | 0 = Não)

// MERCADOPAGO CONFIGS:
$MercadoPago['actived'] = 1; // Opção ativa? (1 = Sim / 0 = Não)
$MercadoPago['client_id'] = '5920435293667727'; // "CLIENT_ID" presente na página https://www.mercadopago.com/mlb/account/credentials?type=basic
$MercadoPago['client_secret'] = '72HyZZH8aubYkQsWESZDRphYQVCkifW4'; // "CLIENT_SECRET" presente na página https://www.mercadopago.com/mlb/account/credentials?type=basic
$MercadoPago['coin_price'] = '10.00'; // Valor unitário (em Reais)
$MercadoPago['testando'] = 0; // Está testando o sistema através do MercadoPago Sandbox? (1 = Sim | 0 = Não)

// TRANSACAO BANCARIA:
$Banking['actived'] = 0; // Opção ativa? (1 = Sim / 0 = Não)
$Banking['currency'] = 'BRL'; // Código da moeda
$Banking['coin_price'] = '1.00'; // Valor unitário
$Banking['bank_dados'] = '
<b>CAIXA ECONÔMICA FEDERAL OU CASAS LOTÉRICAS</b><br />
<b>AGÊNCIA:</b> 0056<br />
<b>OPERAÇÃO:</b> 013<br />
<b>CONTA POUPANÇA:</b> 00043364-8<br />
<b>TITULAR:</b> Orlando Michael S Tenorio<br /><br /><b>OU</b><br /><br /><b>CAIXA ECONÔMICA FEDERAL OU CASAS LOTÉRICAS</b><br /><b>AGÊNCIA:</b> 3190<br /><b>OPERAÇÃO:</b> 013<br /><b>CONTA POUPANÇA:</b> 00026222-0<br /><b>TITULAR:</b> José Rilk Da Silva Maciel';

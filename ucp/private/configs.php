<?php

###########################################################
##                   Configurações                       ##
###########################################################
$server_name = 'L2 Project Flow'; // Nome do servidor
$server_chronicle = 'Interlude'; // Crônica do servidor
$server_url = 'https://l2projectflow.com'; // Digite exatamente o URL do site (exemplo: www.l2server.com)
$panel_url = 'https://l2projectflow.com/ucp'; // Digite exatamente o URL onde se encontra este painel (exemplo: www.l2server.com/ucp)


###########################################################
##                   Banco de dados                      ##
###########################################################

# Qual método de conexão você irá utilizar?
$conMethod = 2; // 1 = MsSQL, 2 = SQLSRV, 3 = ODBC, 4 = PDO-ODBC

# Banco de dados de autenticações
$dbnm['DB'] = 'lin2db'; // Nome do banco (geralmente lin2db)
$host['DB'] = '45.143.7.193'; // Endereço do host/server
$port['DB'] = 1433; // Porta do host/server (padrão: 1433)
$user['DB'] = 'sa'; // Usuário
$pass['DB'] = 'vM7#qZ9!tD4$ps2L'; // Senha

# Banco de dados world
$dbnm['WORLD'] = 'lin2world'; // Nome do banco (geralmente lin2world)
$host['WORLD'] = '45.143.7.193'; // Endereço do host/server
$port['WORLD'] = 1433; // Porta do host/server (padrão: 1433)
$user['WORLD'] = 'sa'; // Usuário
$pass['WORLD'] = 'vM7#qZ9!tD4$ps2L'; // Senha

# Banco de dados das tabelas do site
$dbnm['SITE'] = 'lin2site'; // Nome do banco (geralmente lin2site)
$host['SITE'] = '45.143.7.193'; // Endereço do host/server
$port['SITE'] = 1433; // Porta do host/server (padrão: 1433)
$user['SITE'] = 'sa'; // Usuário
$pass['SITE'] = 'vM7#qZ9!tD4$ps2L'; // Senha


###########################################################
##                        CacheD                         ##
###########################################################
$cachedIP = '45.143.7.193'; // Qual o IP do dedicado onde está o CacheD?
$cachedPort = 2012; // Qual a porta do CacheD? (Padrão: 2012)
$itemDelivery = 1; // Seu servidor conta com o sistema Delivery? Se possuir, você pode utilizá-lo para entrega de itens. Caso não possua ou prefira não usá-lo, usaremos o sistema de cacheD para entregar os itens in-game. (1 = Usar Delivery | 0 = Usar CacheD)


###########################################################
##              Atualstudio Web Admin 3.0                ##
###########################################################
$admpass = 'senhadm33'; // Senha do painel admin


###########################################################
##               Configurações de e-mail                 ##
###########################################################
$server_email = 'support@l2projectflow.com'; // Seu endereço de e-mail utilizado para enviar e-mails automáticos (exemplo: nao-responda@seuservidor.com)
$vcmemail = 1; // É permitido criar várias contas com um mesmo endereço de e-mail? (1 = Sim | 0 = Não)
$cofemail = 0; // Ao criar conta é necessário confirmar e-mail? (1 = Sim | 0 = Não)
$chaemail = 1; // Os jogadores podem alterar o endereço de e-mail de suas contas? (1 = Sim | 0 = Não)
$chaemail_confirm = 0; // Para alterar o endereço de e-mail é necessário confirmar? Se sim, será enviado um e-mail para o endereço de e-mail atual solicitando confirmação. Caso a conta não possua endereço de e-mail, essa opção será ignorada (1 = Sim | 0 = Não)

# SMTP:
$useSMTP = 0; // Enviar e-mails via SMTP? (1 = Sim | 0 = Não)
$SMTP_host = 'cli20.alphaservers.com.br'; // Endereço do Host do SMTP
$SMTP_port = 465; // Porta de conexão para a saída de e-mails (consulte seu host, mas geralmente é 587 ou 465)
$SMTP_secu = 'ssl'; // Qual protocolo de segurança? ssl ou tls?
$SMTP_user = 'support@l2projectflow.com'; // Usuário de autenticação do SMTP (geralmente o e-mail remetente)
$SMTP_pass = '123123'; // Senha de autenticação do SMTP (geralmente a senha do e-mail remetente)


###########################################################
##                        Captcha                        ##
###########################################################
// O captcha é um gerador de códigos que são obrigatórios o preenchimento ao se registrar, logar no painel admin e etc.
$captcha_register_on = 1; // Captcha no formulário de registro (1 = Sim | 0 = Não)
$captcha_cp_on = 1; // Captcha ao logar no painel (1 = Sim | 0 = Não)
$captcha_forgotpass_on = 1; // Captcha ao enviar pedido de recuperação de conta para e-mail (1 = Sim | 0 = Não)


###########################################################

##              Controle de Cores layut ucp              ##

###########################################################
$ucpColor1 = '1'; // escolha Qual a tonalidade de cor fixa no menu lateral esquerda ? 
//(Escolha o numero de referença: 1=preto 2=laranja 3=verde 4=azul 5=vermelho 6=amarelo 7=roza 8=roxo 9=branco 10=marrom 11=cinza)

$ucpf5 = 0; // Você deseja que o laouyt da ucp mude as cores ao atualizar a pagina  de forma aleatoria? (1 = Sim | 0 = Não)")

########################
$ucpColor[1] = '3';#############
$ucpColor[4] = '1';###################
$numero1 = rand(0,5);#######
########################
$avatar[0] = 'dark_female';
$avatar[1] = 'dwarf_female';
$avatar[2] = 'elf_male';
$avatar[3] = 'human_male_fighter';
$avatar[4] = 'orc_female_fighter';
$avatar[5] = 'dark_male';
$avatar[6] = 'elf_female';
$avatar[7] = 'kamael_female';
$avatar[8] = 'dwarf_male';
$avatar[9] = 'human_female_fighter';
$avatar[10] = 'orc_male_fighter';
$avatar[11] = 'kamael_female';
$avatar[12] = 'human_female_mage';
$avatar[13] = 'human_male_mage';
$avatar[14] = 'orc_male_mage';
$avatar[15] = 'orc_female_mage';
$avatar[16] = 'unknow';
$numero = rand(0,16);

###########################################################
##                     Diretórios                        ##
###########################################################
$dir_gallery = 'imgs/gallery/'; // Diretório das imagens da galeria


###########################################################
##                  Cadastro de Contas                   ##
###########################################################
$suffixActive = 0; // Ativar sufixo no login? (método de segurança que acrescenta 3 valores aleatórios no login do usuário, para evitar roubo de contas através de listas de logins com senhas que outros admins possuem) (1 = Sim | 0 = Não)
$forceSuffix = 0; // O sufixo é obrigatório? (1 = Sim | 0 = Não) (Se definir '0', os usuários terão a opção "não quero isso" que ignora o sufixo)
$downRegfile = 1; // Download de arquivo TXT após cadastro bem sucedido? (1 = Sim | 0 = Não)
$passRegfile = 1; // Exibir senha no arquivo TXT gerado após cadastro bem sucedido? (1 = Sim | 0 = Não)

# Data de liberação do cadastro (antes dessa data não será possível criar contas) - Caso queira desabilitar, basta inserir uma data que já passou.
$reg['dia'] = '05'; // Dia
$reg['mes'] = '12'; // Mês
$reg['ano'] = '2025'; // Ano
$reg['hr'] = '18'; // Hora
$reg['min'] = '00'; // Minuto


###########################################################
##                 Rankings e Exibições                  ##
###########################################################
$cacheDelayMin = 3; // Intervalo em minutos que os caches de rankings são atualizados. Ex: se inserir '1' os rankings do painel serão atualizados a cada 1 minuto
$countTopPVP = 100; // Quantidade de jogadores no Top PvP
$countTopPK = 100; // Quantidade de jogadores no Top PK
$countTopON = 100; // Quantidade de jogadores no Top Online
$countTopCLAN = 50; // Quantidade de clans no Top Clan
$olyExibPoint = 1; // Ranking da Grand Olympiad deve exibir os pontos dos jogadores? (1 = Sim | 0 = Não)
$showRankReg = 1; // Exibir rankings antes da data de liberação do cadastro? (1 = Sim | 0 = Não)


###########################################################
##                   Cor, GMT e Idioma                   ##
###########################################################
$themeColor = 'black'; // Qual a tonalidade de cor predominante na template? (Escolha: default, black, blue, red, green ou purple)
$defaultLang = 'PT'; // Idioma padrão do painel (Escolha entre: PT, EN ou ES) - O painel conta com um sistema inteligente que detecta o idioma do navegador do usuário e exibe tudo naquele idioma, mas caso não consigamos detectar ou caso o navegador esteja num idioma diferente dos três citados anteriormente, o idioma setado aqui será o exibido
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
$funct['servic'] = 1; // Serviços (todos os serviços)
$funct['gamst1'] = 1; // Game Stats - Top PvP
$funct['gamst2'] = 1; // Game Stats - Top PK
$funct['gamst3'] = 1; // Game Stats - Top Clan
$funct['gamst4'] = 0; // Game Stats - Top Online
$funct['gamst5'] = 0; // Game Stats - Grand Olympiad
$funct['gamst6'] = 0; // Game Stats - Boss Status
$funct['gamst7'] = 1; // Game Stats - Castle & Siege
$funct['config'] = 1; // Configurações (alterar dados da conta)


###########################################################
##                Cadastro e Recuperação                 ##
###########################################################
// Caso indisponibilize acima as opções de "Se cadastrar através do painel" ou "Recuperar conta através do painel", você pode inserir abaixo links externos para que os jogadores possam se cadastrar ou recuperar suas contas em uma página externa (caso deixe em branco, as opções irão sumir)
$link_regist = "http://opcional"; // Link da página externa de cadastro
$link_forgot = "http://opcional"; // Link da página externa de recuperar


###########################################################
##                        Serviços                       ##
###########################################################

// Vamos definir aqui quais serviços estão disponíveis para os personagens e quantas moedas online eles custam...

# Remove Karma
$service['actv']['removekarma'] = 1; // Está disponível? (1 = Sim | 0 = Não)
$service['cost']['removekarma'] = 12; // Qual o custo?

# Character Nickname (altera nome)
$service['actv']['changename'] = 1; // Está disponível? (1 = Sim | 0 = Não)
$service['cost']['changename'] = 14; // Qual o custo?

# Clan Name (altera nome do clan do personagem, caso ele seja líder)
$service['actv']['clanname'] = 1; // Está disponível? (1 = Sim | 0 = Não)
$service['cost']['clanname'] = 15; // Qual o custo?

# Unstuck (move para coordenadas seguras)
$service['actv']['unstuck'] = 1; // Está disponível? (1 = Sim | 0 = Não)
$service['cost']['unstuck'] = 18; // Qual o custo?

# Change Base Class (altera base class)
$service['actv']['basechange'] = 1; // Está disponível? (1 = Sim | 0 = Não)
$service['cost']['basechange'] = 21; // Qual o custo?

// Outras configurações:

$addBaseSkills = 0; // Ao alterar a base class é necessário adicionar as skills daquela classe? (1 = Sim | 0 = Não) - Em muitas revisões o próprio servidor faz essa função. Se a sua é uma delas, deixe 0.

// Locs X, Y e Z utilizados no serviço de Unstuck
$unstuck_loc_x = '83257'; // Padrão: 83257
$unstuck_loc_y = '149058'; // Padrão: 149058
$unstuck_loc_z = '-3400'; // Padrão: -3400


###########################################################
##                  Aquisição de Saldo                   ##
###########################################################
$coinName = 'Flow Coin'; // Nome da moeda online que representa o saldo (usada apenas no painel de usuário)
$coinName_mini = 'Flow'; // Nome resumido da moeda
$coinQntV = 1; // Qual a quantidade comercializada? Você definirá o valor dessa quantidade logo abaixo. (ex: se definir 10 aqui e nas configurações dos "Modulos de doação" abaixo definir 1.00 como valor, o usuário poderá adquirir 10 por R$ 1,00, 20 por R$ 2,00, etc)

// Bonus em porcentagem ao adquirir moeda online em altas quantidades (Exemplo: a cada 100 moedas compradas, ganha 10%, ou seja, paga pelas 100, mas recebe 110)
$bonusActived = 1; // Deseja habilitar a bonificação por compra em quantidade? (1 = Sim | 0 = Não)

// Você pode inserir até 3 bonificações! Caso não queira usar alguma, basta setar os valores como '0' que será desconsiderada.

// Bonificação 1:
$buyCoins['bonus_count'][1] = '100'; // A partir de qual quantidade o bônus abaixo é dado?
$buyCoins['bonus_percent'][1] = '10'; // Qual a porcentagem de bonificação?

// Bonificação 2:
$buyCoins['bonus_count'][2] = '400'; // A partir de qual quantidade o bônus abaixo é dado?
$buyCoins['bonus_percent'][2] = '15'; // Qual a porcentagem de bonificação?

// Bonificação 3:
$buyCoins['bonus_count'][3] = '1000'; // A partir de qual quantidade o bônus abaixo é dado?
$buyCoins['bonus_percent'][3] = '20'; // Qual a porcentagem de bonificação?

// Exclusão de fatura
$delFatura = 1; // O usuário pode excluir uma fatura? (1 = Sim | 0 = Não) - OBS: Uma fatura nunca é excluída, ela é ocultada, mas sempre permanecerá no banco de dados.


###########################################################
##         Transferência por coin/ticket in-game         ##
###########################################################
// Caso esteja habilitada a funcionalidade "Transferir moedas online para um personagem in-game", o jogador poderá converter seu saldo online para moedas in-game! Precisamos definir algumas informações...
$coinGame = 'Flow Coin'; // Nome da moeda donate in-game (geralmente Coin, Ticket ou Gold)
$coinID = 9483; // ID da moeda


###########################################################
##                   Modulos de doação                   ##
###########################################################

$autoDelivery = 1; // Você deseja que a entrega do saldo seja feita de forma automática? (1 = Sim | 0 = Não) (se optar de forma manual, as doações pagas ficarão com status "Paga". Você terá que ir até o painel admin e concluí-las clicando no botão "Entregar". Quando concluir, o saldo será adicionado e o status passará a ser "Entregue")
$donateEmail = 'L2projectflow@gmail.com'; // Email que receberá os comprovantes de pagamento para as transações bancárias e módulos de confirmação manual


// G2APAY CONFIGS:
$EpicPay['actived'] = 0; // Opção ativa? (1 = Sim / 0 = Não)
$EpicPay['toke_mp'] = '___API_HASH_AQUI___'; // "Your API hash" presente na página https://pay.g2a.com/setting/merchant na página https://pay.g2a.com/setting/merchant
$EpicPay['currency'] = 'BRL'; // Código da moeda
$EpicPay['coin_price'] = '0.25'; // Valor da quantidade comercializada

// G2APAY CONFIGS:
$G2APay['actived'] = 0; // Opção ativa? (1 = Sim / 0 = Não)
$G2APay['api_hash'] = '___API_HASH_AQUI___'; // "Your API hash" presente na página https://pay.g2a.com/setting/merchant
$G2APay['api_secret'] = '___API_SECRET_AQUI___'; // "Your API Secret" presente na página https://pay.g2a.com/setting/merchant
$G2APay['currency'] = 'EUR'; // Código da moeda
$G2APay['coin_price'] = '0.30'; // Valor da quantidade comercializada

// PAGSEGURO CONFIGS:
$PagSeguro['actived'] = 0; // Opção ativa? (1 = Sim / 0 = Não)
$PagSeguro['email'] = 'seu@email.com'; // Email da conta que receberá as doações
$PagSeguro['token'] = '___TOKEN_AQUI___'; // Token gerado no PagSeguro
$PagSeguro['token_sandbox'] = '___TOKEN_AQUI___'; // Token gerado no ambiente de testes do PagSeguro
$PagSeguro['testando'] = 0; // Está testando o sistema através do PagSeguro Sandbox? (1 = Sim | 0 = Não)
$PagSeguro['coin_price'] = '1.00'; // Valor da quantidade comercializada (em Reais)

// PAYPAL CONFIGS:
$PayPal['actived'] = 0; // Opção ativa? (1 = Sim / 0 = Não)
$PayPal['business_email'] = 'seu@email.com'; // Email da conta que receberá as doações
$PayPal['USD']['coin_price'] = '0.40'; // Valor da quantidade comercializada (em Dolar)
$PayPal['BRL']['coin_price'] = '1.00'; // Valor da quantidade comercializada (em Reais)
$PayPal['EUR']['coin_price'] = '0.30'; // Valor da quantidade comercializada (em Euros)
$PayPal['testando'] = 0; // Está testando o sistema através do PayPal Sandbox? (1 = Sim | 0 = Não)

// TRANSACAO BANCARIA:
$Banking['actived'] = 0; // Opção ativa? (1 = Sim / 0 = Não)
$Banking['currency'] = 'BRL'; // Código da moeda
$Banking['coin_price'] = '1.00'; // Valor da quantidade comercializada
$Banking['bank_dados'] = '
<b>CAIXA ECONÔMICA FEDERAL OU CASAS LOTÉRICAS</b><br />
<b>AGÊNCIA:</b> 0000<br />
<b>OPERAÇÃO:</b> 013<br />
<b>CONTA POUPANÇA:</b> 000-1<br />
<b>TITULAR:</b> ADMIN NAME';

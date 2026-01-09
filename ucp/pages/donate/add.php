<?php if((!$indexing) || ($logged != 1)) { exit; }
if($funct['donate'] != 1) { fim($LANG[40003], 'ERROR', './'); }
require('private/classes/classDonate.php');
require('private/classes/classConfigs.php');

$accData = Configs::accData($_SESSION['acc']);
if(count($accData) == 0) {
    require("private/classes/classAccess.php");
}
?>

<ul class="breadcrumb">
    <li><a href='./?module=donate&page=add'><i class='fa fa-money'></i> <?php echo $LANG[12039]; ?></a></li>
    <li><?php echo $LANG[39010]; ?> <?php echo $coinName_mini; ?>'s</li>
</ul>

<h1><?php echo $LANG[39010]; ?> <?php echo $coinName_mini; ?>'s</h1>

<div class='pddInner'>
    
    <?php echo $LANG[10053].($bonusActived == 1 ? $LANG[40000] : ''); ?><br /><br />
    
    <div class='rulesbox' style='width:auto !important;'>
        <h1><?php echo $LANG[14000]; ?></h1>
        <?php echo $LANG[14001]; ?>
    </div>
    
    <label>
        <input type='checkbox' id='acceptrules' value='1' /> <b><?php echo $LANG[10054]; ?></b>
    </label>
    <br /><br /><br />
    
    <form id="donationForm" method='POST' action='./pay/checkout.php'>
        <table class='donateBox' border='0' cellpadding='0' cellspacing='0' style="width: 100%; max-width: 600px; margin: auto; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
            <tr>
                <th style="background-color: #4b4d4f; color: white; padding: 12px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    <i class='fa fa-credit-card-alt'></i> Método de Pagamento
                </th>
                <th style="background-color: #4b4d4f; color: white; padding: 12px; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    <i class='fa fa-cubes'></i> Quantidade
                </th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="metodo_pgto" value="MercadoPago" readonly style="min-width: 160px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px; background-color: #f9f9f9; margin-bottom: 10px;">
                </td>
                <td>
                    <input type="number" name="quantidade" id="quantidade" min="1" placeholder="Insira a quantidade" required style="min-width: 160px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
                </td>
            </tr>
        </table>

        <input type='hidden' name='personagem' value='<?=$_SESSION['acc']?>'>
        <input type='submit' class='default big' value='Enviar' style='margin: 20px auto 0; display:table;'/>
    </form>

    <!-- Caixa de aviso após o envio do formulário -->
    <div id="paymentAlert" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2); z-index: 1000; text-align: center;">
        <h2>⚠️ Após pagamento via PIX, clique no botão abaixo para verificar o pagamento!</h2>
        <img src="./imgs/inf.jpg" alt="Botão de Voltar" style="width: 50%; margin-top: 10px;">
        <br>
        <button id="backToSiteButton" style="margin-top: 10px; padding: 10px 20px; border: none; background-color: #e03a06; color: white; border-radius: 5px; cursor: pointer;">Estou Ciente</button>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type='text/javascript'>
$(document).ready(function(){
    // Manipulador de evento para o envio do formulário
    $('#donationForm').on('submit', function(e) {
        // Verifica se a checkbox está marcada
        if (!$('#acceptrules').is(':checked')) {
            e.preventDefault(); // Impede o envio do formulário
            alert('Você deve aceitar os termos antes de pagar!'); // Mensagem de alerta
        } else {
            e.preventDefault(); // Impede o envio padrão
            $('#paymentAlert').show(); // Mostra a caixa de aviso

            // Adiciona um manipulador de evento para o botão "Voltar para o site"
            $('#backToSiteButton').on('click', function() {
                $('#paymentAlert').hide(); // Esconde a caixa de aviso
                $('#donationForm').off('submit').submit(); // Remove o manipulador e envia o formulário
            });
        }
    });
});
</script>

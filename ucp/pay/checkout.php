<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $acc = $_POST['personagem'];
    $qtdCoins = $_POST['quantidade'];


    require __DIR__ . '/vendor/autoload.php';
    require_once __DIR__ . '/config.php';



    MercadoPago\SDK::setAccessToken(MERCADO_PAGO_CONFIG['access_token']); 


    $preference = new MercadoPago\Preference();
    


    $item = new MercadoPago\Item();
    $item->title = MERCADO_PAGO_CONFIG['produto'];  
    $item->quantity = (int)$qtdCoins;
    $item->unit_price = (float)MERCADO_PAGO_CONFIG['valor_moeda'];   

    $preference->items = array($item);


    $preference->external_reference = $acc;

 
    $preference->back_urls = array(
        "success" => MERCADO_PAGO_CONFIG['pagina_sucesso'],
        "failure" => MERCADO_PAGO_CONFIG['pagina_falha'],
        "pending" => MERCADO_PAGO_CONFIG['pagina_pendente'] . $preference->id
    );
    $preference->auto_return = "approved";
 
   if (MERCADO_PAGO_CONFIG['remover_cartao']) {
        $preference->payment_methods = array(
            "excluded_payment_types" => array(
                array("id" => "credit_card") // Exclui o pagamento por cartão de crédito
            )
        );
    }
 
    $preference->save();


    header("Location: " . $preference->init_point);
    exit;
}
?>

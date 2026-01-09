<?php
require __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';

MercadoPago\SDK::setAccessToken(MERCADO_PAGO_CONFIG['access_token']);

if (!isset($_GET['payment_id'])) {
    die("O ID do pagamento não foi passado.");
}

$paymentId = $_GET['payment_id']; 

function verificarStatusPagamento($paymentId) {
    try {
        $payment = MercadoPago\Payment::find_by_id($paymentId); 
        return $payment->status; 
    } catch (Exception $e) {
        error_log('Erro ao buscar o pagamento: ' . $e->getMessage());
        return 'error'; 
    }
}

$status = verificarStatusPagamento($paymentId);

echo '<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f7f7f7;
        font-family: Arial, sans-serif;
    }
    .container {
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        padding: 20px;
        background-color: #ffffff;
        width: 300px;
    }
    h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }
    .emoji {
        font-size: 50px; /* Tamanho do emoji */
    }
    .counter {
        font-size: 24px;
        font-weight: bold;
        margin-top: 10px;
    }
</style>';

$counter = 5;

if ($status === 'approved') {
    header("Location: " . MERCADO_PAGO_CONFIG['pagina_sucesso']);
    exit;
} elseif ($status === 'pending') {
    echo '<div class="container">
            <h1>Aguardando Confirmação</h1>
            <div class="emoji">⏳</div>
            <p>Seu pagamento está pendente. Verificando novamente em <span class="counter" id="counter">' . $counter . '</span> segundos...</p>
          </div>';

    echo '<script>
        var counter = ' . $counter . ';
        var countdown = setInterval(function() {
            counter--;
            document.getElementById("counter").innerText = counter;
            if (counter <= 0) {
                clearInterval(countdown);
                window.location.reload(); // Recarrega a página após o contador chegar a 0
            }
        }, 1000);
    </script>';
    exit;
} else {
    header("Location: " . MERCADO_PAGO_CONFIG['pagina_falha']);
    exit;
}
?>

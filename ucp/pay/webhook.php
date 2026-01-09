<?php
require __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';


$input = @file_get_contents("php://input");
$event = json_decode($input);


if ($event->type == 'payment') {
   
    $payment_id = $event->data->id;


    MercadoPago\SDK::setAccessToken(MERCADO_PAGO_CONFIG['access_token']);


    $payment = MercadoPago\Payment::find_by_id($payment_id);

    if ($payment->status == 'approved')
    {
   
    $amount = $payment->transaction_amount / 5;
    $email = $payment->payer->email;


    $acc = $payment->external_reference;

    
    $checkSql = "SELECT COUNT(*) FROM processed_payments WHERE payment_id = ?";
    $checkStmt = sqlsrv_query($conn, $checkSql, array($payment_id));
    $row = sqlsrv_fetch_array($checkStmt, SQLSRV_FETCH_NUMERIC);
    
    if ($row[0] == 0) { 
        $sql = "
        MERGE site_balance AS target
        USING (SELECT ? AS account, ? AS saldo) AS source
        ON (target.account = source.account)
        WHEN MATCHED THEN 
            UPDATE SET target.saldo = target.saldo + source.saldo
        WHEN NOT MATCHED THEN 
            INSERT (account, saldo) 
            VALUES (source.account, source.saldo);
        ";


        $params = array($acc, $amount);


        $stmt = sqlsrv_query($conn, $sql, $params);

        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }


        $insertProcessedSql = "INSERT INTO processed_payments (payment_id) VALUES (?)";
        $insertProcessedStmt = sqlsrv_query($conn, $insertProcessedSql, array($payment_id));

        if ($insertProcessedStmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }
    }


    sqlsrv_close($conn);
    }
}
?>

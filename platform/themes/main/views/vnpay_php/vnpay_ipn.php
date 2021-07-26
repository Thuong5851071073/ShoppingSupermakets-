<?php

/*
 * IPN URL: Record payment results from VNPAY
 * Implementation steps:
 * Check checksum
 * Find transactions in the database
 * Check the status of transactions before updating
 * Check the amount of transactions before updating
 * Update results to Database
 * Return recorded results to VNPAY
 */

require_once("./config.php");
$inputData = array();
$returnData = array();
$data = $_REQUEST;
foreach ($data as $key => $value) {
    if (substr($key, 0, 4) == "vnp_") {
        $inputData[$key] = $value;
    }
}

$vnp_SecureHash = $inputData['vnp_SecureHash'];
unset($inputData['vnp_SecureHashType']);
unset($inputData['vnp_SecureHash']);
ksort($inputData);
$i = 0;
$hashData = "";
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashData = $hashData . '&' . $key . "=" . $value;
    } else {
        $hashData = $hashData . $key . "=" . $value;
        $i = 1;
    }
}

$secureHash = md5($vnp_HashSecret . $hashData);

// Payment status
$Status = 0; // pending

$Id = $inputData['vnp_TxnRef'];
// Ex:
// $sql = "SELECT * FROM `orders` WHERE `OrderId`=" . sql_escape($Id);
// $result = $conn->query($sql);
// $row = mysqli_fetch_assoc($result);
//
$vnp_Amount = $inputData['vnp_Amount']; 
$vnp_Amount = (int)$vnp_Amount / 100;


try {
    // checksum
    if ($secureHash == $vnp_SecureHash) {
		// check OrderId
        if ($row["OrderId"] != NULL) {
			// check Status
            if ($row["Status"] != NULL && $row["Status"] == 0) {
				// check amount
				if($row['Amount'] != null && $row['Amount'] == $vnp_Amount ){
				if ($inputData['vnp_TransactionStatus']== '00') {
						$Status = 1; // Payment status success
						// Here code update payment status success into your database
						// ex:
						// $update = "UPDATE `orders` SET `Status`='".sql_escape($Status)."' WHERE `OrderId`=" . sql_escape($Id);
						
						$returnData['RspCode'] = '00';
						$returnData['Message'] = 'Confirm Success';
					} else {
						$Status = 2; // Payment status fail
						// Here code update payment status fail into your database
						// ex:
						// $update = "UPDATE `orders` SET `Status`='".sql_escape($Status)."' WHERE `OrderId`=" . sql_escape($Id);
						
						$returnData['RspCode'] = '00';
						$returnData['Message'] = 'Confirm Success';
					}
				}
				else
				{
					$returnData['RspCode'] = '04';
					$returnData['Message'] = 'Invalid Amount';
				}
            } else {
                $returnData['RspCode'] = '02';
                $returnData['Message'] = 'Order already confirmed';
            }
        } else {
            $returnData['RspCode'] = '01';
            $returnData['Message'] = 'Order not found';
        }
    } else {
        $returnData['RspCode'] = '97';
        $returnData['Message'] = 'Invalid Checksum';
    }
} catch (Exception $e) {
    $returnData['RspCode'] = '99';
    $returnData['Message'] = 'Unknow error';
}

echo json_encode($returnData);

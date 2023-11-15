<?php
include_once("conexao.php");

$id=$_POST['numero_cliente'];
$name_customer=$_POST['nome_cliente'];
$first_contact_name=$_POST['first_contact_name'];
$last_contact_name=$_POST['last_contact_name'];
$email=$_POST['phone'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$fk=$_POST['fk_employess_sales'];
$cred_limit=$_POST['cred_Limit'];

//query faz comando direto pro banco não se preocupando com o conteudo do banco
//SQLINJECTION or 1=1

//uso prepare quando inserir ou atulizar dados
//(deletar) dados ou ver dados
try{
    $insert=$conexao->prepare("INSERT INTO customers (customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, state, postalCode, country, salesRepEmployeeNumber, credLimit)VALUES(:customerNumber, :customerName, :contactLastName, :contactFirstName, :phone, :addressLine1, :addressLine2, :state, :postalCode, :country, :salesRepEmployeeNumber, :credLimit)");

$insert->execute(
    [
        ':customerNumber' => $id,
        ':customerName' => $name_customer,
        ':contactLastName' => $first_contact_name,
        ':contactFirstName' => $last_contact_name,
        ':phone' => $email,
        ':addressLine1' => $address1,
        ':addressLine2' => $address2,
        ':state' => $city,
        ':postalCode' => $state,
        ':country' => $country,
        ':salesRepEmployeeNumber' => $fk,
        ':cred_Limit'=> $cred_limit
    ]
);
return'funcionou';
}catch(PDOException $e){
    echo 'que pena';
}
//bind values
?>
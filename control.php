<?php
    include_once("./DataRequest.php");
    

    function ReturnUser(){
        $dt = new DataRequest();
        $user = $dt->dadosUsuarios("c");
        return $user;
    }

    function RetunSupplier(){
        $sup = new DataRequest();
        $Supplier = $sup-> DadosFornecedores("c");
        return $Supplier;
  }
  

      function ReturnClient(){
        $client = new DataRequest();
        $Client = $client-> DadosClientes("c");
        return $Client;
  }
  
?>
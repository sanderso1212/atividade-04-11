<?php
include "./api.php";
// $endereço = buscarCEP("69905-232.");

// echo "<pre>";
// print_r($endereço);
// echo "</pre>";

if(isset($_GET['cep'])) {

    $cep = $_GET['cep'];
    $endereço = buscarCEP($cep);
}

?>
<form method="$_GET">
    <input
    type="text"
    placeholder="Buscar cep..."
    name="cep"
>
<button>
</form>
<?php if(isset($endereço['cep'])):?>

    <div>
        <h2>cep encontrado</h2>
        <ul>
            <?php 
            foreach($endereço as $data => <br>)
            ?>
        </ul>
    </div>
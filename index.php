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
            foreach($endereço as $data => $valor) {
                if(strlen($valor) > 0 ) {
                echo "$data: $valor <br>";
                echo "<button>Salvar</button";
                }
            }
            ?>
        </ul>
        <form action="salvar.php" method="POST">
        <button>SALVAR</button>
        </form>
    </div>
    <?php elseif(isset($endereço['erro'])):?>
        <h2>CEP nao encontrado</h2>
        <p>O CEP ditado pelo usuario nao existe</p>
<?php endif ?>
<div class="titulo">Integração CSS</div>

<h1 center> 
    <?php
    echo 'Olá ';
    echo '<small>';
    echo ' Mundo!';
    echo '</small>';
    ?>
</h1>

<?=  "<div center azul> Outra Forma de 'fazer' </div>"?>

<br>

<div center><button dobro><?= "legal" ?></button></div>

<style>
    button {
        background-color: #4286f4;
        color: #eee;
        font-weight: bold;
        border: none;
        border-radius: <?= 20?>px;
        cursor: pointer;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #4286f4;
    }

    [dobro] {
        padding: <?= 20 * 2 ?>px;
    }
</style>
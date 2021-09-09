<?php
require_once("../Model/quarto.php");
session_start();
$quartos = $_SESSION["quartos"];
?>
<?php
    include('include/header.php');
?>
    <div>
        <article>
            <h2 id="titulo">ACOMODAÇÕES</h2>
            <p id="descricao">Todos os nossos quartos contam com ar condicionado split, calefação, televisores 29º LED, TV por assinatura, ventilador de teto, camas de box, frigobar, telefone, ventilador de teto, internet Wi Fi</p>
            <br><br>
        <section class="container">
        <?php foreach ($quartos as $quarto){ ?>
        <div class="card">
            <div class="card-image"><img class="quarto" src="../upload/<?php echo $quarto->getFoto();?>" alt="" style="height: 100%;"></div>
            <div class="desc">
                <h3><?php echo $quarto->getNome();?></h3>
                <span><?php echo $quarto->getDesc();?></span><br>
            </div>
        </div>
    <?php } ?>
</section>
            <aside>
            </aside>
        </article>
    </div>
<?php
    include('include/footer.php');
?>  
</body>
</html>
<?php
require_once("../Model/quarto.php");
session_start();
$quartos = $_SESSION["quartos"];
?>
<?php
    include('include/header.php');
?>
<br><br>
    <div>
        <article>
            <h2 class="titulos">ACOMODAÇÕES</h2>
            <p class="titulos">Todos os nossos quartos contam com ar condicionado split, calefação, televisores 29º LED, TV por assinatura, ventilador de teto, camas de box, frigobar, telefone, ventilador de teto, internet Wi Fi</p>
            <br><br>
        <section id="container-quartos">
        <?php foreach ($quartos as $quarto){ ?>
        <div id="card-quartos">
            <div id="card-image"><img class="quarto" src="../upload/<?php echo $quarto->getFoto();?>" alt="" style="height: 100%;"></div>
            <div id="desc">
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
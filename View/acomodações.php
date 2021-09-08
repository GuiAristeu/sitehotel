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
        <section class="container">
        <?php foreach ($quartos as $quarto){ ?>
        <div class="card">
            <div class="card-image"><img class="quarto" src="../upload/<?php echo $quarto->getFoto();?>" alt="" style="height: 100%;"></div>
            <div class="desc">
                <h2><?php echo $quarto->getNome();?></h2>
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
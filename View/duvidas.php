<?php
    include('include/header.php');
?>
    <div>
        <article>
            <section>
                <div class="duvidas">
                    <ul>
                        <li class="opcoes" onclick="expandirResposta('resposta1')"><a href="#">Reservas</a></li>
                        <p id="resposta1">Você pode fazer sua reserva através do nosso site <br>
                        Ou no site da <a href="https://www.ebooking.com/pt/" target="_blank">booking</a></p>
                        <li class="opcoes" onclick="expandirResposta('resposta2')"><a href="#">Como chegar</a></li>
                        <p id="resposta2">Confira a nossa link <a href="https://google.com/maps" target="_blank">localização</a> no google maps</p>
                        <li class="opcoes" onclick="expandirResposta('resposta3')"><a href="#">Check-in e check-out</a></li>
                        <p id="resposta3">Nosso checkin e checkout são feitos ao meio dia na recepção do hotel</p>
                    </ul>
                </div>
            </section>
        </article>
        <script src="include/script2.js"></script>
    </div>
<?php
    include('include/footer.php');
?> 
</body>
</html>
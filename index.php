<?php
session_start();
require ('_header.php');
 ?>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatico Slideshow Imagens --> 
  <div class="mySlides w3-display-container w3-center">
    <img src="img/trab1.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Los Angeles</h3>
      <p><b>Fazendo seu primeiro show internacional.</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/trab2.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
         
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/trab3.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Chicago</h3>
      <p><b>Dando uma entrevista para MTV.</b></p>    
    </div>
  </div>

  <!-- Seção "SOBRE" -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">CLASS A</h2>
    <p class="w3-opacity"><i>SÃO @#$%</i></p>
    <p class="w3-justify">Class A é um grupo de RAP, composto por Igor, PK e Oik.

Os meninos da ilha – nascidos na Ilha do Governador no Rio de Janeiro - já se conheciam das batalhas de rimas, quando em 2016, decidiram se unir
 para expressar através da música a realidade vista e vivida por eles, mesclando os beats do Rap com as batidas do funk. Assim nasceu o Class A!</p>
<p class="w3-justify">O nome do grupo faz referência a gíria que corre pelas ruas, literalmente, que remete a qualidade, alto nível, coisa boa, e o som de
les prova isso. Filhos do rap, o trio tem influências de nomes do cenário atual e do passado. Racionais e Sabotage são referências máximas, influenciados 
também pela linguagem romântica e jovem de Charlie Brow Jr. Emicida e Eminem são referência em freestyle. No cenário internacional, o trio se inspira nos c
ompanheiros de gravadora, Wiz Khalifa, Young Thug e Lil Uzi Verta além do ícone, B.I.G.</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Igor</p>
        <img src="img/igor.jpg" class="w3-round w3-margin-bottom" alt="Igor" style="width:60%">
      </div>
      <div class="w3-third">
        <p>PK</p>
        <img src="img/pk.jpg" class="w3-round w3-margin-bottom" alt="PK" style="width:60%">
      </div>
      <div class="w3-third">
        <p>OIK</p>
        <img src="img/oik.jpg" class="w3-round" alt="OIK" style="width:60%">
      </div>
    </div>
  </div>

  <!-- Seção "SHOWS" -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">PRÓXIMOS SHOWS</h2>
      <p class="w3-opacity w3-center"><i>Lembre-se de reservar seus ingressos!</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">Nova Hamburgo/RS - 31/07/2018<span class="w3-tag w3-red w3-margin-left">ESGOTADO!</span></li>
        <li class="w3-padding">Blumenau/SC - 05/08/2018<span class="w3-tag w3-red w3-margin-left">ESGOTADO!</span></li>
        <li class="w3-padding">Mesquita/RJ - 09/08/2018<span class="w3-tag w3-red w3-margin-left">ESGOTADO!</span></li>
      </ul>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="img/rj.jpg" alt="rj" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Rio de Janeiro - RJ</b></p>
            <p class="w3-opacity">15/08/2018</p>
            <p>CLASS A trazendos suas melhores músicas pra todo mundo curtir esse BAILÃO.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Comprar ingresso</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="img/sp.jpg" alt="sp" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Osasco - SP</b></p>
            <p class="w3-opacity">18/08/2018</p>
            <p>CLASS A trazendos suas melhores músicas pra todo mundo curtir esse BAILÃO.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Comprar ingresso</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="img/sg.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>São Gonçalo - RJ</b></p>
            <p class="w3-opacity">25/08/2018</p>
            <p>CLASS A trazendos suas melhores músicas pra todo mundo curtir esse BAILÃO.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Comprar ingressos</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navegação de compra -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Ingressos</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Ingressos, R$50 por pessoa</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Quantos ingressos?">
        <p><label><i class="fa fa-user"></i> Enviar para</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Seu email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">COMPRAR <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Fechar <i class="fa fa-remove"></i></button>
        <p class="w3-right">Precisa de<a href="#" class="w3-text-blue"> ajuda?</a></p>
      </div>
    </div>
  </div>

  <!-- Seção "CONTATOS" -->
  
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTATOS</h2>
    <p class="w3-opacity w3-center"><i>Quer eles na sua festa? Entre em contato!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i>Rio de Janeiro - RJ<br>
        <i class="fa fa-phone" style="width:30px"></i> Telefone: +55 21 995851761<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset ($_SESSION['msg']);
		}
		?>
      </div>
      <div class="w3-col m6">
        <form method="POST" action="processa.php">
<p>

	 <div class="w3-half"><input type="text" id="nome" name="nome" 
	placeholder="Digite seu nome." required></div>
</p>
<br>
<p>

	 <div class="w3-half"><input type="email" id="email" name="email"
	placeholder="Digite seu email." required></div>
</p>
<br>
<p>

	 <div class="w3-half"><input type="text" id="telefone" name="telefone"
	placeholder="Digite seu telefone." required></div>
</p>
<br>	
<p>
	
	<select id="estado" name="estado">
	<option value="">Selecione seu estado.</option>
	<option value="Acre">Acre</option>
	<option value="Alagoas">Alagoas</option>
	<option value="Amapá">Amapá</option>
	<option value="Amazonas">Amazonas</option>
	<option value="Bahia">Bahia</option>
	<option value="Ceará">Ceará</option>
	<option value="Distrito Federal">Distrito Federal</option>
	<option value="Espírito Santo">Espírito Santo</option>
	<option value="Goiás">Goiás</option>
	<option value="Maranhão">Maranhão</option>
	<option value="Mato Grosso">Mato Grosso</option>
	<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
	<option value="Minas Gerais">Minas Gerais</option>
	<option value="Pará">Pará</option>
	<option value="Paraíba">Paraíba</option>
	<option value="Paraná">Paraná</option>
	<option value="Pernambuco">Pernambuco</option>
	<option value="Piauí">Piauí</option>
	<option value="Rio de Janeiro">Rio de Janeiro</option>
	<option value="Rio Grande do Norte">Rio Grande do Norte</option>
	<option value="Rio Grande do Sul">Rio Grande do Sul</option>
	<option value="Rondônia">Rondônia</option>
	<option value="Roraima">Roraima</option>
	<option value="Santa Catarina">Santa Catarina</option>
	<option value="São Paulo">São Paulo</option>
	<option value="Sergipe">Sergipe</option>
	<option value="Tocantins">Tocantins</option>
	
	</select>
</p>

	<label></label>
	<input type="submit" id="enviar" name="enviar" value="OK">
	<input type="reset" id="reset" name="reset" value="Limpar">

</form>
      </div>
    </div>
  </div>
  

</div>

<?php require ('_footer.php'); ?>
<?php 
session_start();
//head da página
require_once 'header.php';

$navbar = require_once '../view/shared/navbar.php';
?>

<div class="container"> 
  <div class="row">
    <div class="col-md-8">
      <div class="row">
        <div class="mb-3 row">
          <h1>Dados</h1>
            <div class="col-sm-10">
              <label for="codigoPedido">Código do Pedido</label>
              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="12345678">
            </div>
          </div>
        </div>
        <div class="input-group col-6 align-self-start">
          <label for="clientName">Nome do Cliente</label>
          <select class="form-control" id="clientName">
            <option>Josevaldo</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="btnAdicionaCliente">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8" style="background-color:blueviolet;">
            <div class="input-group col-6 align-self-start">
              <label for="typeSnack">Tipo de Lanche</label>
                <select class="form-control" id="typeSnack">
                  <option>Josevaldo</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
             <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" id="btnAdicionaLanche">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
              </button>
            </div>
          </div>
        </div>
            <div class="col" style="background-color: aqua;">
              <label for="additional1">Adicionais</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Sim</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Não</label>
              </div>
            </div>
        </div>
        <div class="row align-items-start">
          <div class="col">
            <label for="Drink">Bebida</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Sim</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Não</label>
            </div>
          </div>
          <div class="col">
            <label for="ColdDrink">Bebida Gelada?</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Sim</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Não</label>
            </div>
          </div>
          <div class="col">
            <label for="additional2">Adicionais</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Catchup
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
              <label class="form-check-label" for="flexCheckChecked">
                Mostarda
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Maionese
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Batata Palha
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Molho
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Pimenta
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Purê
              </label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6 align-self-start">
            <label for="typesDrinks">Tipos de Bebidas</label>
          <div class="input-group">
          <select class="form-control" id="typeDrinks">
            <option>Josevaldo</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="btnAdicionaBebida">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
            </button>
          </div>
        </div>
            <div class="row" style="background-color: blue;">Data do pedido</div>
        </div>
      </div>
      <div class="row" style="background-color: blueviolet;">
        <label for="comments"></label>
        <div class="form-floating">
          <textarea class="form-control" placeholder="Faça as suas observações aqui" id="comments"></textarea>
          <label for="comments">Observações</label>
        </div>
      </div>
    </div>
    <div class="col" style="background-color: red;">
      <div class="form-floating">
        <label for="request">Pedido</label>
        <textarea style="resize: none" class="form-control" placeholder="Seu pedido:" id="request" disabled></textarea>
      </div>
    </div>
    </div>
  </div>
</div>
<?php //footer da página
require_once 'footer.php';
?>
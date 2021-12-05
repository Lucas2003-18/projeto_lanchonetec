
<?php 
session_start();
//head da página
require_once 'header.php';

$navbar = require_once './shared/navbar.php';
?>
<script>
    window.onload = function() {
        UnSelectAll('bebida');
        UnSelectAll('bebidaGelada');
        UnSelectAll('radioAdicionais');
    }
</script>
<div style="width: 100vw; height: calc(100vh - 56px); display: grid; grid-template-columns: 65% 35%;">
    <div style="width: 100%; height: 100%;">
        <div style="width: calc(100% - 20px); height: calc(35% - 20px); padding-top: 0.5vh; padding-left: 2vw; padding-top: 0.5vh; padding-left: 2vw; background-color: none; border: 10px double #e2e2e2; border-radius: 20px; margin: 10px;">
            <label for="codigoPedido">Código do Pedido</label>
            <input type="text" readonly class="form-control" id="staticEmail" value="12345678" style="width: calc(100% - 11.5vw);" disabled>

            <label for="clientName">Nome do Cliente</label>
            <div style="display: grid; grid-template-columns: 90% 10%;">
                <select class="form-control" id="clientName">
                    <option>Josevaldo</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                <button type="button" class="btn btn-outline-secondary" id="btnAdiciona" onclick="document.getElementById('exampleModal').style.display = 'block';">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                </button>

                <div id="exampleModal" style="position: fixed; background-color: rgba(0, 0, 0, 0.5); height: 100vh; width: 100vw; top: 0px; left: 0px; display:none; z-index: 999;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cadastro de Clientes</h5>
                                <button type="button" class="close" onclick="document.getElementById('exampleModal').style.display = 'none';">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Código:</label>
                                        <input type="text" class="form-control" id="recipient-codigo">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Nome:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Endereço:</label>
                                        <input type="text" class="form-control" id="recipient-endereco">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Telefone:</label>
                                        <input type="text" class="form-control" id="recipient-telefone">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" onclick="document.getElementById('exampleModal').style.display = 'none';">Fechar</button>
                                <button type="button" class="btn btn-primary" onclick="document.getElementById('exampleModal').style.display = 'none';">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- dados -->
        
        <div style="width: 100%; height: 65%; display: grid; grid-template-columns: 65% 35%;">
            <div style="width: 100%; height: 100%;">
                <div style="width: calc(100% - 20px); height: calc(25% - 20px); padding-top: 0.5vh; padding-left: 2vw; background-color: none; border: 10px double #e2e2e2; border-radius: 20px; margin: 10px;">
                    <label for="typeSnack">Tipo de Lanche</label>
                    <div style="display: grid; grid-template-columns: 90% 10%;">
                        <select class="form-control" id="typeSnack">
                            <option>Josevaldo</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <button class="btn btn-outline-secondary" type="button" id="btnAdiciona" style="margin-left: -120%;" onclick="document.getElementById('modalProdutos').style.display = 'block';">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </button>

                        <div id="modalProdutos" style="position: fixed; background-color: rgba(0, 0, 0, 0.5); height: 100vh; width: 100vw; top: 0px; left: 0px; display:none; z-index: 999;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Produtos</h5>
                                        <button type="button" class="close" onclick="document.getElementById('modalProdutos').style.display = 'none';">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Código:</label>
                                                <input type="number" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Descrição:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Preço:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" onclick="document.getElementById('modalProdutos').style.display = 'none';">Fechar</button>
                                        <button type="button" class="btn btn-primary" onclick="document.getElementById('modalProdutos').style.display = 'none';">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> <!-- tipos de lanche -->
                <div style="width: 100%; height: 25%; display: grid; grid-template-columns: 50% 50%;">
                    <div style="width: calc(100% - 20px); height: calc(100% - 20px); padding-top: 0.5vh; padding-left: 2vw; background-color: none; border: 10px double #e2e2e2; border-radius: 20px; margin: 10px;">
                        <label for="Drink">Bebida</label>
                        <br>
                        <div class="form-check form-check-inline" onclick="document.getElementById('darkerBebidaGelada').style.display = 'none';">
                            <input class="form-check-input" type="radio" name="bebida" id="bebidaS" value="sim">
                            <label class="form-check-label" for="bebidaS">Sim</label>
                        </div>
                        <div class="form-check form-check-inline" onclick="UnSelectAll('bebidaGelada'); document.getElementById('darkerBebidaGelada').style.display = 'block';">
                            <input class="form-check-input" type="radio" name="bebida" id="bebidaN" value="nao">
                            <label class="form-check-label" for="bebidaN">Não</label>
                        </div>
                    </div> <!-- bebidas -->
                    <div id="darkerBebidaGelada" style="position: absolute; left:21.125vw; width: calc(21.125vw - 20px); height: calc(19.305% - 20px); padding-top: 0.5vh; padding-left: 2vw; background-color: rgb(155,155,155,0.3);  border-radius: 20px; margin: 10px; display: none; z-index: 999;">
                    </div> <!-- escurece adicionais 2 -->
                    <div style="width: calc(100% - 20px); height: calc(100% - 20px); padding-top: 0.5vh; padding-left: 2vw; background-color: none; border: 10px double #e2e2e2; border-radius: 20px; margin: 10px;">
                        <label for="ColdDrink">Bebida Gelada?</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bebidaGelada" id="geladaS" value="Sim">
                            <label class="form-check-label" for="geladaS">Sim</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bebidaGelada" id="geladaN" value="nao">
                            <label class="form-check-label" for="geladaN">Não</label>
                        </div>
                    </div> <!-- bebida gelada -->
                </div>
                <div style="width: calc(100% - 20px); height: calc(25% - 20px); padding-top: 0.5vh; padding-left: 2vw; background-color: none; border: 10px double #e2e2e2; border-radius: 20px; margin: 10px;">
                    <label for="typesDrinks">Tipos de Bebidas</label>
                    <div style="display: grid; grid-template-columns: 90% 10%;">
                            <select class="form-control" id="typeSnack">
                                <option>Josevaldo</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <button class="btn btn-outline-secondary" type="button" id="btnAdiciona" style="margin-left: -120%;" onclick="document.getElementById('modalProdutos').style.display = 'block';">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                            </button>

                            <div id="modalProdutos" style="position: fixed; background-color: rgba(0, 0, 0, 0.5); height: 100vh; width: 100vw; top: 0px; left: 0px; display:none; z-index: 999;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Cadastro de Produtos</h5>
                                            <button type="button" class="close" onclick="document.getElementById('modalProdutos').style.display = 'none';">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Código:</label>
                                                    <input type="number" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Descrição:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Preço:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" onclick="document.getElementById('modalProdutos').style.display = 'none';">Fechar</button>
                                            <button type="button" class="btn btn-primary" onclick="document.getElementById('modalProdutos').style.display = 'none';">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div> <!-- tipos de bebidas -->
                <div style="width: calc(100% - 20px); height: calc(25% - 20px); padding-top: 0.5vh; padding-left: 2vw; background-color: none; border: 10px double #e2e2e2; border-radius: 20px; margin: 10px;">
                <label for="date" style="margin-left: 10px;">Data do pedido</label>
                <input class="form-control" type="date" style="border-radius: 20px; margin: 10px; width: calc(100% - 40px); resize:none;"></input>
                </div>
            </div>
            <div style="width: 100%; height: 100%;">
                <div style="width: calc(100% - 20px); height: calc(25% - 20px); padding-top: 0.5vh; padding-left: 2vw; background-color: none; border: 10px double #e2e2e2; border-radius: 20px; margin: 10px;">
                    <label for="additional1">Adicionais?</label>
                    <br>
                    <div class="form-check form-check-inline" onclick="document.getElementById('darkerAd2').style.display = 'none';">
                        <input class="form-check-input" type="radio" name="radioAdicionais" id="radioAdicionaisS" value="sim">
                        <label class="form-check-label" for="radioAdicionaisS">Sim</label>
                    </div>
                    <script>
                            function UnSelectAll(name){
                                var items = document.getElementsByName(name);
                                for(var i=0; i<items.length; i++){
                                    if(items[i].type=='checkbox' || items[i].type=='radio'){
                                        items[i].checked = false;
                                    }
                                }
                            }	
                    </script>
                    <div class="form-check form-check-inline" onclick="document.getElementById('darkerAd2').style.display = 'block'; UnSelectAll('adicionais');">
                        <input class="form-check-input" type="radio" name="radioAdicionais" id="radioAdicionaisN" value="nao">
                        <label class="form-check-label" for="radioAdicionaisN">Não</label>
                    </div>
                </div> <!-- adicionais -->
                <div id="darkerAd2" style="position: absolute; width: calc(22.75% - 20px); height: calc(38.95% - 20px); padding-top: 0.5vh; padding-left: 2vw; background-color: rgb(155,155,155,0.3);  border-radius: 20px; margin: 10px; display: none; z-index: 999;">
                </div> <!-- escurece adicionais 2 -->
                
                <div style="width: calc(100% - 20px); height: calc(66% - 20px); padding-top: 0.5vh; padding-left: 2vw; background-color: none; border: 10px double #e2e2e2; border-radius: 20px; margin: 10px; margin-top:20px;" id="ad2">
                    <label for="additional2">Adicionais:</label>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="adicionais" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Catchup
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="adicionais" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckChecked">
                        Mostarda
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="adicionais" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Maionese
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="adicionais" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Batata Palha
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="adicionais" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Molho
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="adicionais" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Pimenta
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="adicionais" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Purê
                    </label>
                    </div>

                </div> <!-- adicionais 2 -->
            </div>
        </div>
        <div style="background-color: none; border: 10px double #e2e2e2; border-radius: 20px; margin: 10px;">
            <label for="comments" style="margin-left: 10px;">Observações</label>
            <textarea class="form-control" placeholder="Faça as suas observações aqui" id="comments" style="border-radius: 20px; margin: 10px; width: calc(100% - 40px); resize:none;"></textarea>
        </div>
    </div>
    <div style="width: calc(100% - 20px); height: calc(100% - 30px); padding-top: 0.5vh; padding-left: 2vw; background-color: none; border: 10px double #e2e2e2; border-radius: 20px; margin: 10px; margin-left: 5px;">
        <label for="request">Pedido</label>
        <textarea style="resize: none; width: calc(100% - 1vw); height: 90%;" class="form-control" placeholder="Seu pedido:" id="request" disabled></textarea>
    </div> <!-- pedidos -->
</div>  
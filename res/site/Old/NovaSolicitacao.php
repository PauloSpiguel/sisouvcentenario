<?php
include "view/header.php";
?>
<style>
#divip {
    background-color: azure;
    border: 1px solid #0094ff;
    margin-left: 21%;
    margin-right: 21%;
}

#divip span {
    text-align: center;
    padding: 5px;
    margin: 0;
    font-size: 1.5em;
}

#formSolicitacao {
    margin-left: 20%;
    margin-right: 20%;
}
</style>

<div style="text-align: center">
    <br />
    <h2>Abertura de Manifestação</h2>
    <h3>Nova Solicitação</h3>
    <div id="divip">
        <span id="seuip"></span><br />
    </div>
</div>
<div class="divFormContent">
    <section>
        <form method="" name="" action="">
         <fieldset class="grupo" id="usuario">
            <legend>Identificação do Solicitante:</legend>
            <div style="display: flex">
                <div class="inputIcone" style="width:70%; margin-right: 10px">
                    <label for="idSolicitante">Nome:</label>
                    <input type="text" name="Solicitante" id="idSolicitante" onblur="Uppertxt()">
                    <i class=" fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                </div>
                <div class="inputIcone" style="width:30%">
                    <label for="idNasc">Data Nascimento:</label>
                    <input type="date" name="DataNac" id="idNasc" />
                    <i class=" fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i>
                </div>
            </div>
            <div style="display: flex">
                <div class="inputIcone" style="width:40%; margin-right: 10px">
                    <label for="idTipoDoc">Documento de identificação:</label>
                    <select name="TipoDoc" id="idTipoDoc">
                        <option selected>Selecione...</option>
                        <option>RG</option>
                        <option>CPF</option>
                        <option>CNPJ</option>
                        <option>Passaporte</option>
                    </select>
                    <i class=" fa fa-id-card fa-lg fa-fw" aria-hidden="true"></i>
                </div>
                <div class="inputIcone" style="width:60%">
                    <label for="idDoc">Número Documento:</label>
                    <input type="number" name="NumDoc" id="idDoc" size="20" maxlength="30" placeholder="N° Documento" />
                    <i class=" fa fa-sort-numeric-asc fa-lg fa-fw" aria-hidden="true"></i>
                </div>
            </div>
            <div style="display: flex">
                <div class="inputIcone" style="width: 50%; margin-right: 5px;">
                    <label for="idSenha">Senha:</label>
                    <input type="password" name="Senha" id="idSenha" size="20" maxlength="8" placeholder="Digite sua senha..." />
                    <i class="fa fa-unlock-alt fa-lg fa-fw" aria-hidden="true"></i>
                </div>
                <div class="inputIcone" style="width: 50%; margin-left: 5px;">
                    <label for="idConfSenha">Confirma Senha:</label>
                    <input type="password" name="ConfSenha" id="idConfSenha" size="20" maxlength="8" placeholder="Confirme sua senha..." />
                    <i class="fa fa-unlock-alt fa-lg fa-fw" aria-hidden="true"></i>
                </div>
            </div>
            <div class="inputIcone">
                <label for="idEmail">E-mail:</label>
                <input type="email" name="Email" id="idEmail" onblur="Lowertxt()" size="30" maxlength="40" placeholder="Ex: paulo@provedor.com.br" />
                <i class="fa fa-envelope-o fa-lg fa-fw" aria-hidden="true"></i>
            </div>
            <fieldset class="grupo" id="radios">
                <legend>Sexo:</legend>
                <div style="">
                    <input type="radio" name="sexo" value="masculino" id="idMasc"><label for="idMasc">Masculino</label>
                    <input type="radio" name="sexo" value="feminino" id="idFem"><label for="idFem">Feminino</label>
                </div>
            </fieldset>
        </fieldset>
        <fieldset class="grupo" id="endereco">
            <legend>Endereço do Solicitante:</legend>
            <div style="display: flex">
                <div class="inputIcone" style="width: 80%; margin-right: 10px">
                    <label for="idEndereco">Logradouro:</label>
                    <input type="text" name="Endereco" id="idEndereco" size="40" maxlength="80" placeholder="Ex: Rua Desembargador Munhoz de Melo" />
                    <i class=" fa fa-address-book-o fa-lg fa-fw" aria-hidden="true"></i>
                </div>
                <div class="inputIcone" style="width: 20%">
                    <label for="idNum">Número:</label>
                    <input type="number" name="Num" id="idNum" min="0" max="99999" placeholder="378" />
                    <i class=" fa fa-sort-numeric-asc fa-lg fa-fw" aria-hidden="true"></i>
                </div>
            </div>
            <div class="inputIcone">
                <div>
                    <label for="idComplemento">Complemanto:</label>
                    <input type="text" name="Complemento" id="idComplemento" size="40" maxlength="40" placeholder="Digite um complemento..." @*required="required"*@ />
                    <i class="fa fa-envelope-o fa-lg fa-fw" aria-hidden="true"></i>
                </div>
            </div>
            <div style="display: flex">
                <div class="inputIcone" style="width:70%; margin-right: 10px">
                    <label for="idBairro">Bairro:</label>
                    <input type="text" name="Bairro" id="idBairro" size="40" maxlength="50" placeholder="Ex: Centro" />
                    <i class=" fa fa-map-marker fa-lg fa-fw" aria-hidden="true"></i>
                </div>
                <div class="inputIcone" style="width: 30%">
                    <label for="idCEP">CEP:</label>
                    <input type="text" name="CEP" id="idCEP" size="15" maxlength="9" placeholder="Ex: 86630-000" />
                    <i class=" fa fa-map-marker fa-lg fa-fw" aria-hidden="true"></i>
                </div>
            </div>
            <div style="display: flex">
                <div class="inputIcone" style="width: 70%; margin-right: 10px">
                    <label for="idCidade">Município:</label>
                    <input type="text" name="Cidade" id="idCidade" size="30" maxlength="40" placeholder="Digite seu município..." list="cidades" />
                    <i class=" fa fa-home fa-lg fa-fw" aria-hidden="true"></i>
                </div>
                <div class="inputIcone" style="width: 30%">
                    <datalist id="cidades">
                        <option>Centenário do Sul</option>
                    </datalist>
                    <label>Estado:</label>
                    <select id="idEstado" name="UI">
                        <option value="">Selecione...</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espirito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                    <i class=" fa fa-globe fa-lg fa-fw" aria-hidden="true"></i>
                </div>
            </div>
        </fieldset>
        <fieldset class="grupo" id="contato">
            <legend>Contato</legend>
            <div style="display: flex">
                <div class="inputIcone" style="width: 50%; margin-right: 5px">
                    <label for="idFixo">Telefone Fixo:</label>
                    <input type="tel" name="Fixo" id="idFixo" size="15" maxlength="13" placeholder="(XX)XXXX-XXXX" />
                    <i class=" fa fa-phone fa-lg fa-fw" aria-hidden="true"></i>
                </div>
                <div class="inputIcone" style="width: 50%; margin-left: 5px">
                    <label for="idCel">Celular:</label>
                    <input type="tel" name="Cel" id="idCel" size="15" maxlength="14" placeholder="(XX)9XXXX-XXXX" />
                    <i class=" fa fa-mobile fa-lg fa-fw" aria-hidden="true"></i>
                </div>
            </div>
        </fieldset>
        <fieldset class="grupo" id="mensagem">
            <legend>Solicitação</legend>
            <fieldset class="grupo">
                <div class="inputIcone">
                    <label>Setor:</label>
                    <select name="Setor" id="idSetor">
                        <option selected>Selecione...</option>
                        <option>Setor de Educação</option>
                        <option>Setor de Administração</option>
                        <option>Setor de RH</option>
                        <option>Outros</option>
                    </select>
                    <i class=" fa fa-comments-o fa-lg fa-fw" aria-hidden="true"></i>
                </div>
                <div class="inputIcone">
                    <label>Tipo de Solicitação:</label>
                    <select name="TipoManifestacao" id="idTipoManifestacao">
                        <option selected>Selecione...</option>
                        <option>Solicitação de informação</option>
                        <option>Tapa buraco - manutenção de vias públicas</option>
                        <option>Corte total da árvore - erradicação</option>
                        <option>Funcionamento de poste de iluminação</option>
                        <option>Fiscalização - Poluição Sonora</option>
                        <option>Boca de lobo e bueiro</option>
                        <option>Coleta de entulho disposto irregularmente</option>
                        <option>Combate ao foco da dengue</option>
                        <option>Roçagem de mato/capim</option>
                        <option>Outros</option>
                    </select>
                    <i class=" fa fa-comments-o fa-lg fa-fw" aria-hidden="true"></i>
                </div>
                <div>
                    <label for="idMensagem">Mensagem:</label>
                    <textarea name="Manifestacao" id="idManifestacao" rows="5" cols="45" placeholder="Deixe aqui sua solicitação..."></textarea>
                </div>
                <div>
                    <label>Anexo (jpeg, png, mp3, rar, zip, mp4):</label>
                    <input type="file" name="btnAnexo" id="idAnexo" />
                </div><br />
                <div>
                    <input type="checkbox" name="checkEmail" id="idcheckEmail" value="true" checked />
                    <label for="idcheck-email">Receber notivicação desta solicitação por E-mail.</label>
                </div>
                <div class="inputIconeEnviar">
                    <button type="submit" class="botao submit" @*onclick="NovoProtocolo();"*@>Enviar</button>
                </div>
            </fieldset>
        </fieldset>
    </form>
</section>
</div>

<script type="application/javascript">
    var ip;
    function getIP(json) {
        document.getElementById("seuip").innerHTML = "Seu IP: " + (json.ip);
    }
</script>
<script type="application/javascript" src="https://api.ipify.org?format=jsonp&callback=getIP"></script>
<script>
    function NovoProtocolo() {
        var nProtocolo = document.getElementById("idProtocolo").textContent + "010001";
        document.getElementById("idProtocolo").innerHTML = nProtocolo;
    }
    //window.onload = function NovoProtocolo() {
    //    var nData = document.getElementById('idProtocolo').value;
    //    var i = "0001";
    //    var nProtocolo = nData + i;
    //    document.getElementById('idProtocolo').value = nProtocolo;
    //};
    function Uppertxt() {
    var x = document.getElementById("idSolicitante");
    x.value = x.value.toUpperCase();
    }
    function Lowertxt() {
    var x = document.getElementById("idEmail");
    x.value = x.value.toLowerCase();
    }
</script>
</script>
<?php include "view/footer.php";?>
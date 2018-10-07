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
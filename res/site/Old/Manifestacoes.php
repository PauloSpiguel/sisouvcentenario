<?php 
require_once("view/header.php");
require_once("funcoes.php");
?>
<section id="icon-manifestacao">
    <div class="para-voce2">
        <div class="container">
            <div class="box">
                <div class="icon">
                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                </div>
                <div class="content">
                    <h3>Pesquisar Protocolo</h3>
                    <span>Click aqui, para realizar uma consulta por um protocolo aberto.</span>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <a href="NovaSolicitacao.php"><i href="#" class="fa fa-hand-o-up" aria-hidden="true"></i></a>
                </div>
                <div class="content">
                    <h3>Solicitação</h3>
                    <span>Click aqui, para realizar uma Solicitação.</span>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                </div>
                <div class="content">
                    <h3>Sugestão</h3>
                    <span>Click aqui, para realizar uma sugestão.</span>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                </div>
                <div class="content">
                    <h3>Denúncia</h3>
                    <span>Click aqui, para realize uma denúncia!</span>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                </div>
                <div class="content">
                    <h3>Reclamação</h3>
                    <span>Click aqui, para realizar uma Reclamação.</span>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                </div>
                <div class="content">
                    <h3>Elogio</h3>
                    <span>Click aqui, para realizar um Elogio.</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="icon-resumo">
    <div class="Conteudo">
        <div class="painel-container">
            <div class="boxPainel" style="background-color: #428BCA">
                <div>
                    <div class="icone">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                    </div>
                    <h3 id="EstiloTexto">Total de Manifestações</h3>
                    <h1 id="EstiloTexto"><?php echo array_sum($baseEstatisticas);?></h1>
                </div>
            </div>
            <div class="boxPainel" style="background-color: #5CB85C">
                <div>
                    <div class="icone">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </div>
                    <h3 id="EstiloTexto">Manifestações em Aberto</h3>
                    <h1 id="EstiloTexto">3</h1>
                </div>
            </div>
            <div class="boxPainel" style="background-color: #F0AD4E">
                <div>
                    <div class="icone">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                    </div>
                    <h3 id="EstiloTexto">Tempo Médio de Atendimento</h3>
                    <h1 id="EstiloTexto">12.6 (dias)</h1>
                </div>
            </div>
            <div class="boxPainel" style="background-color: #9575CD">
                <div>
                    <div class="icone">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    <h3 id="EstiloTexto">Cidadãos Atendidos</h3>
                    <h1 id="EstiloTexto">10</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="icon-tabela-grafico">
    <article>
        <div class="Tabela">
            <header>
                <h1 class="h1Titulo">DEMOSTRATIVO DE MANIFESTAÇÕES</h1>
            </header>
            <table>
                <tr>
                    <th>Tipo Manifestação</th>
                    <th>Quantidade</th>
                    <th>%</th>
                </tr>
                <tr>
                    <td>Solicitações</td>
                    <td><?php echo ($baseEstatisticas['Solicitação']);?></td>
                    <td><?php echo ($listaValor[0]); ?></td>
                </tr>
                <tr>
                    <td>Sugestões</td>
                    <td><?php echo ($baseEstatisticas['Sugestões']);?></td>
                    <td><?php echo ($listaValor[1]); ?></td>
                </tr>
                <tr>
                    <td>Denúncias</td>
                    <td><?php echo ($baseEstatisticas['Denúncias']);?></td>
                    <td><?php echo ($listaValor[2]); ?></td>
                </tr>
                <tr>
                    <td>Reclamações</td>
                    <td><?php echo ($baseEstatisticas['Reclamações']);?></td>
                    <td><?php echo ($listaValor[3]); ?></td>
                </tr>
                <tr>
                    <td>Elogios</td>
                    <td><?php echo ($baseEstatisticas['Elogios']);?></td>
                    <td><?php echo ($listaValor[4]); ?></td>
                </tr>
                <tr class="linhaTotal">
                    <td>Total:</td>
                    <td><?php echo array_sum($baseEstatisticas);?></td>
                    <td><?php echo array_sum($listaValor)."%"; ?></td>
                </tr>
            </table>
            <br />
        </div>
    </article>
</section>
<?php require_once("view/footer.php"); ?>
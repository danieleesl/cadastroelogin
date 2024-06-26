<?php
session_start();
// print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');

}
$logado = $_SESSION['email'];


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
     <!-- <link id="icone" rel="shortcut icon" href="" />  -->
     <link rel="icon" href="icon.png" type="image/x-icon">
    <title>Openflow</title>

</head>

<body>
    <nav id="menu">
        <ul>
            <li>
                <a href="#curiosidades">
                    Curiosidades</a>
            </li>
            <li>
                <a href="#conclusao">
                    Conclusão
                </a>
            </li>
            <li>
                <a href="quemsomos.html">
                    Quem somos
                </a>
            </li>
            <li>
                <a href="#footer">
                    Contatos
                </a>
            </li>


            <li>
                <a href="sair.php">
                    Sair
                </a>
            </li>
        </ul>

    </nav>
    <div id="titulo">Openflow</div><br><br><br>
    <div class="subt">O que é Openflow?</div><br>



    <div id="texto">
        Trata-se de uma arquitetura de redes para a administração de Redes LAN e WAN com foco em equipamentos comerciais
        como Switches, Roteadores, Access Points, etc.
        A ideia do Openflow é trazer o plano de gerenciamento de todos os dispositivos da rede para um único software
        que será responsável por criar VLANs, Roteamento, QoS e etc.
        O OpenFlow nos permite controlar o fluxo de cada tráfego de rede – escolhendo as rotas que seus pacotes deverão
        seguir e o processamento que receberão. Desta forma, torna-se possível experimentar novos protocolos, novos
        modelos de segurança, e/ou novos esquemas de endereçamento, novos protocolos de rede, sem afetar a rede em
        produção, podendo-se segmentar/fatiar a rede em produção para testes, simulações e segmentações. Essa tecnologia
        é fundamental para a implementação de redes definidas por software (SDN - Software-Defined Networking).
        <br><br>
        Simplificando, o OpenFlow é como um conjunto de regras que os computadores de uma rede usam para decidir para
        onde enviar informações (como mensagens ou dados). É como um sistema de trânsito para a internet.
        Normalmente, essas regras são definidas por pessoas e ficam "dentro" dos computadores de rede. Com o OpenFlow,
        essas regras podem ser controladas por um "chefe" central, que diz para onde as informações devem ir.
        Isso é útil porque torna a rede mais flexível e fácil de ajustar conforme necessário. É como se o trânsito
        pudesse ser reorganizado instantaneamente para tornar a viagem mais eficiente, dependendo do que está
        acontecendo na estrada.<br><br>
        A imagem abaixo é um exemplo de dispositivos comerciais controlados pelo OpenFlow.(figura 1)

    </div> <br><br><br>

    <center><img src="img2.png" width="450" height="400"></center> <br><br><br>

    <div id="texto"> Em geral a arquitetura OpenFlow é composta pro três componentes: tabela de fluxo, canal seguro e o
        protocolo Openflow <strong>(OPF).</strong><br>

        <strong>Tabela de fluxo:</strong> Cada switch habilitado para OpenFlow possui uma tabela de fluxo que contém
        regras para processamento de pacotes. Estas regras determinam como o switch deve tratar os pacotes com base em
        critérios específicos (por exemplo, endereços de origem e destino, portas, etc.). A imagem a seguir representa a
        estrutura da tabela de fluxos (figura 2).<br><br>

        <center><img src="tabela.png" width="600" height="100"></center><br><br>

        <strong>Canal seguro:</strong>Assegura, por intermédio do protocolo SSL (Secure Socket Layer), que a troca de
        informações entre os equipamentos de rede e o comutador OpenFlow não tenha sua integridade comprometida. Para
        tanto, o SSL possibilita que todos os dados sejam criptografados;<br>
        <strong>Protocolo Openflow(OPF):</strong>Serve para estabelecer a comunicação entre os switches e roteadores, e
        o controlador. Por meio deste, são programadas as decisões tomadas nas tabelas de fluxos.<br><br>
        A depender do tipo de suporte ao Openflow, os dispositivos de rede podem ser agrupados em diferentes
        categogrias<br>
        <strong>Switches openflow dedicados:</strong> equipamentos que mão implementam o processamento dos protocolos
        clássicos da camada de enlace e de rede.<br>
        <strong>Switches com suporte Openflow:</strong>switches e roteadores ethernet comercialmente disponíveis que
        disponibilizam esta nova funcioanlidade.

    </div><br><br><br>

    <div class="subt" id="curiosidades">Curiosidades sobre o Openflow</div><br>

    <div id="texto">
        <p>Origem Acadêmica: O OpenFlow teve origem em pesquisas acadêmicas na Universidade Stanford e na Universidade
            da Califórnia, Berkeley, antes de se tornar uma tecnologia amplamente adotada na indústria de redes.</p>

        <p>Padrão Aberto: O OpenFlow é um padrão aberto, o que significa que não é controlado por uma única empresa ou
            organização. Isso levou à sua adoção generalizada e à criação de várias implementações e produtos
            compatíveis com o OpenFlow.</p>

        <p>Redes Definidas por Software (SDN): O OpenFlow é frequentemente associado às SDNs, pois desempenha um papel
            fundamental na separação do plano de controle do plano de dados em redes, permitindo a programação e o
            controle centralizados.</p>

        <p>Programabilidade: Uma das características marcantes do OpenFlow é a capacidade de programar o comportamento
            dos dispositivos de rede. Isso permite que os administradores de rede definam políticas de encaminhamento de
            tráfego de forma flexível.</p>

        <p>Fluxo Baseado: O OpenFlow opera em um modelo de fluxo, onde as regras são definidas para encaminhar pacotes
            com base em critérios específicos, como endereços IP, portas e outros campos de cabeçalho de pacote.

        <p>Conceito de Tabela de Fluxo: Os dispositivos OpenFlow mantêm uma tabela de fluxo que contém as regras de
            encaminhamento. Os pacotes que chegam são comparados com as regras na tabela de fluxo, e o dispositivo age
            com base na correspondência.

        <p>Suporte Multiplataforma: Existem várias implementações do protocolo OpenFlow, sendo que muitos fabricantes de
            equipamentos de rede oferecem suporte a ele em seus produtos, garantindo interoperabilidade.

        <p>Aplicações Diversas: Além de seu uso em data centers e redes empresariais, o OpenFlow também encontrou
            aplicação em ambientes como redes de campus universitários, redes de provedores de serviços e até mesmo em
            experimentos de pesquisa de redes.

        <p>Melhorias Contínuas: O OpenFlow continua evoluindo com o tempo para atender às necessidades em constante
            mudança das redes modernas. Isso inclui a introdução de versões mais recentes do protocolo com recursos
            adicionais.

        <p>Comunidade Ativa: Há uma comunidade ativa de desenvolvedores, pesquisadores e empresas que contribuem para o
            desenvolvimento e aprimoramento do OpenFlow, garantindo seu crescimento e relevância contínuos.Diversos
            fabricantes como Arista Networks, Big Switch Networks, Cisco, Embrane, IBM, Juniper, Nicira e NEC trabalham
            em projetos envolvendo o protocolo, inclusive alguns desses fabricantes já possuem Switches no mercado com
            suporte ao protocolo.

    </div><br><br><br>

    <div class="subt" id="conclusao">Conclusão</div><br><br>
    <div id="texto">O OpenFlow é apresentado como um mecanismo essencial para unificar o gerenciamento de dispositivos
        de rede, como switches, roteadores e pontos de acesso, por meio de um software centralizado.

        A principal proposta do OpenFlow é permitir o controle flexível do fluxo de tráfego de rede, direcionando
        pacotes conforme regras pré-definidas e adaptando o processamento que os pacotes recebidos. Essa flexibilidade é
        fundamental para experimentar novos protocolos, modelos de segurança e esquemas de endereçamento sem impactar a
        rede em produção. A segmentação da rede para testes, simulações e segmentações é destacada como uma aplicação
        valiosa dessa tecnologia.

        O OpenFlow é comparado a um sistema de trânsito para a internet, onde as regras de encaminhamento podem ser
        controladas centralmente, permitindo configurações dinâmicas e otimizações de rota. O texto enfatiza a origem
        acadêmica do OpenFlow, seu caráter de padrão aberto, e sua associação íntima com as Redes Definidas por Software
        (SDN). <br><br>

        Detalhamos os tres principais componentes da arquitetura Openflow: a tabela de fluxo, o canal seguro e o
        protocolo OpenFlow (OPF). A tabela de fluxo contém regras cruciais para o processamento de pacotes, enquanto o
        canal seguro utiliza SSL para garantir a integridade das trocas de informações entre os dispositivos e o
        comutador OpenFlow. O protocolo OpenFlow facilita a comunicação entre os dispositivos de rede e o controlador,
        permitindo a programação das decisões tomadas nas tabelas de fluxos.

        <br><br> O texto destaca a importância do OpenFlow em possibilitar a separação do plano de controle do plano de
        dados em redes, impulsionando a programabilidade e permitindo a definição flexível de políticas de
        encaminhamento de tráfego. A natureza baseada no fluxo do OpenFlow, com regras de encaminhamento definidas para
        critérios específicos.
    </div><br><br><br>


    <div class="subt">Palavras-chave para melhor compreensão da pesquisa</div><br><br>
    <div id="texto">LAN: Rede local. Interliga computadores presentes dentro de um mesmo espaço físico. Isso pode
        acontecer dentro de uma empresa, de uma escola ou dentro da sua própria casa, sendo possível a troca de
        informações e recursos entre os dispositivos participantes.<br><br>

        MAN: Rede metropolitana. Imaginemos, por exemplo, que uma empresa possui dois escritórios em uma mesma cidade e
        deseja que os computadores permaneçam interligados <br><br>

        WAN: Rede de longa distância. Vai além da MAN. Consegue abranger uma área maior, como um país ou até mesmo um
        continente.<br><br>

        WLAN: Rede local sem fio. Esse tipo de rede conecta-se à internet e é bastante usado tanto em ambientes
        residenciais quanto em empresas e em lugares públicos. <br><br>

        WMAN: Rede metropolitana sem fio. Esta é a versão sem fio da MAN, com um alcance de dezenas de quilômetros,
        sendo possível conectar redes de escritórios de uma mesma empresa ou de campus de universidades.<br><br>

        WWAN: Rede de Longa Distância Sem Fio. Com um alcance ainda maior, a WWAN, ou Rede de Longa Distância Sem Fio,
        alcança diversas partes do mundo. Justamente por isso, a WWAN está mais sujeita a ruídos.<br><br>

        SAN : Rede de Área de Armazenamento. São utilizadas para fazer a comunicação de um servidor e outros
        computadores, ficando restritas a isso.<br><br>

        PAN: Rede de Área Pessoal. São usadas para que dispositivos se comuniquem dentro de uma distância bastante
        limitada. Um exemplo disso são as redes Bluetooth e UWB.<br><br>

        VLAN: É um protocolo usado para organizar vários dispositivos dentro de uma rede física única sem precisar fazer
        mudanças físicas na infraestrutura <br><br><br>
    </div>

    <div class="subt"> Referencias</div><br><br>
    <div id="texto"><a id="lin"
            href="https://www.arubanetworks.com/techdocs/AOS-S/16.11/OAG/content/oag/abt-ope.htm">https://www.arubanetworks.com/techdocs/AOS-S/16.11/OAG/content/oag/abt-ope.htm</a><br><br>
        <a id="lin"
            href="https://www.comutadores.com.br/o-que-e-openflow/">https://www.comutadores.com.br/o-que-e-openflow/</a><br><br>
        <a id="lin"
            href="https://www.gta.ufrj.br/ensino/eel879/vf/openflow/">https://www.gta.ufrj.br/ensino/eel879/vf/openflow/</a><br><br>
    </div><br><br><br>
</body>
<footer>
    <footer id="footer">
        <div>Entre em contato comigo pelas redes</div>
        <div><a href="https://www.instagram.com/daniele.esteer/"><img id="ig" src="ig.png" alt="logo instagram"></a><a
                href="https://www.linkedin.com/in/daniele-lima-7002801aa/"><img id="link" src="link.png"
                    alt="logo linkedin"></a><a href="https://github.com/danieleesl/"><img id="git" src="git.png"
                    alt="logo github"></a></div>
        
        <div id="copy">&copy; 2024 Daniele Lima</div>
    </footer>

</html>
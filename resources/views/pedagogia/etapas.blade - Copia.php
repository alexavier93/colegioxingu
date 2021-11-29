@extends('layouts.app')

@section('title', 'Colégio Xingu - Etapas de Aprendizagem')

@section('content')

    <div id="etapas">

        <div class="page-title-content" style="background: url('{{ asset('assets/images/banner-pages/etapas-de-aprendizagem.jpg') }}')">
            <div class="container">
                <h1>Etapas de Aprendizagem</h1>
            </div>
        </div>

        <section class="intro">

            <div class="container">

                <div class="title-section text-center mb-3 mt-md-5">
                    <h2 class="m-0">LOREM IPSUM</h2>
                    <hr>
                </div>

                <div class="text-center col-md-10 offset-md-1">

                    <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, ea? Odit dicta,
                        in fugit maiores ullam obcaecati est ea vel. Cum repudiandae placeat provident recusandae dolores
                        molestias impedit veniam iste?</p>
                </div>

            </div>

        </section>

        <section class="etapa-1">

            <div class="container">

                <div class="row justify-content-center align-items-center">
                    <div class="col-md-12 col-lg-6 order-1 order-lg-1">
                        <div class="p-3 p-md-5 img-sobre">
                            <img class="img-fluid" src="{{ asset('/assets/images/img-sobre-xingu.png') }}"
                                alt="Colégio Xingu">
                        </div>

                    </div>

                    <div class="col-md-12 col-lg-5 my-3 my-md-0 order-2 order-lg-2">

                        <h2>EDUCAÇÃO INFANTIL - 3 A 5 ANOS</h2>

                        <p>A primeira etapa da vida escolar é a entrada na Educação
                            Infantil, momento que visa por meio dos vínculos com
                            professores e pares despertar o sentimento de pertencer a
                            um grupo. Valorizamos o brincar, a exploração de materiais não estruturados, as diferentes
                            linguagens e a pedagogia de projetos didáticos como organizadores dos nossos conteúdos, seguindo
                            os direitos de aprendizagem e desenvolvimento da BASE NACIONAL COMUM CURRICULAR.</p>

                        <p class="text-orange">HORÁRIO TARDE<br>Entrada: 13h15 - Saída: 17h00</p>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center">
                    <div class="col-md-12 col-lg-5 my-3 my-md-0 order-2 order-lg-1 text-start text-lg-end">

                        <h2>1º ANO - 6 ANOS</h2>

                        <p>Em diversos projetos e propostas, os alunos são os agentes
                            de sua própria aprendizagem, pois expõem o que sabem, ouvem, perguntam e pensam sobre os
                            comentários de outros,
                            enfrentam problemas, consideram informações apresentadas
                            pelo professor e demais colegas e, a partir de tudo isso,
                            produzem e aprendem. A maior parte das situações de
                            aprendizagem vividas nessa etapa é organizada para proporcionar aos alunos, experiências de
                            troca
                            com pares, em pequenos grupos ou com a turma inteira, o que é importante para que aprendam a
                            trabalhar em equipe e a compartilhar o que aprendem.
                        </p>

                        <p class="text-orange">HORÁRIO MANHÃ / TARDE<br>
                            Entrada: 7h30 - Saída: 11h45<br>
                            Entrada: 13h15 - Saída: 17h30</p>

                    </div>

                    <div class="col-md-12 col-lg-6 order-1 order-lg-2">
                        <div class="p-3 p-md-5 img-sobre">
                            <img class="img-fluid" src="{{ asset('/assets/images/img-sobre-xingu.png') }}"
                                alt="Colégio Xingu">
                        </div>

                    </div>

                </div>

                <div class="row justify-content-center align-items-center">

                    <div class="col-md-12 col-lg-6 order-1 order-lg-1">
                        <div class="p-3 p-md-5 img-sobre">
                            <img class="img-fluid" src="{{ asset('/assets/images/img-sobre-xingu.png') }}"
                                alt="Colégio Xingu">
                        </div>

                    </div>

                    <div class="col-md-12 col-lg-5 my-3 my-md-0 order-2 order-lg-2">

                        <h2>2º AO 5º ANO - 7 A 10 ANOS</h2>

                        <p>Nesta etapa, a escola oferece uma nova organização para o trabalho. As demandas escolares ficam
                            mais complexas, bem como a construção de novas competências. Os procedimentos de estudantes
                            assumem a necessidade de organização, estudo e compromisso com as tarefas de forma mais intensa.
                            As aulas passam a ter horários fixos e há mais professores.</p>

                        <p class="text-orange">
                            HORÁRIO MANHÃ / TARDE<br>

                            2º AO 5º ANO - MANHÃ - 7h30 às 11h45<br>
                            (2º ano: 2x por semana, 3º ao 5º ano: 3x por semana saída às 12h30)</p>

                        <hr class="bg-orange">

                        <p class="text-orange">2º AO 5º ANO - TARDE - 13h15 às 17h30<br>
                            (2º ano: 2x por semana, 3º ao 4º ano: 3x por semana saída às 18h15)</p>


                    </div>
                </div>

                <div class="row justify-content-center align-items-center">

                    <div class="col-md-12 col-lg-5 my-3 my-md-0 order-2 order-lg-1 text-start text-lg-end">

                        <h2>6º AO 9º ANO - 11 A 14 ANOS</h2>

                        <p>Neste segmento da escolaridade, observam-se as transformações da adolescência e, por conta delas,
                            novos desafios são propostos. Ensino e aprendizagem dialogam de forma a trabalhar as
                            habilidades, oferecendo ao aluno autonomia, estimulando-o a buscar a informação e a construir
                            conhecimentos, sendo o
                            protagonista de seu aprendizado, relacionado aos valores como ética, socialização, cidadania e o
                            respeito com o meio ambiente.</p>

                        <p class="text-orange">HORÁRIO MANHÃ / TARDE<br>
                            6º ao 8º ano: 7h15 às 12h05<br>
                            (2x por semana saída às 12h50)<br>
                            9º ano: 7h15 às 12h50</p>


                    </div>

                    <div class="col-md-12 col-lg-6 order-1 order-lg-2">
                        <div class="p-3 p-md-5 img-sobre">
                            <img class="img-fluid" src="{{ asset('/assets/images/img-sobre-xingu.png') }}"
                                alt="Colégio Xingu">
                        </div>


                    </div>

                </div>

            </div>

        </section>


        <section class="etapa-2">

            <div class="container">

                <div class="title-section text-center mb-3 mt-md-5">
                    <h2 class="m-0">ESCOLA AMPLIADA - PERÍODO INTEGRAL</h2>
                    <hr>
                </div>

                <div class="col-lg-10 offset-lg-1 text-center">
                    <p class="text-light">Atendemos com qualidade os alunos que permanecem na escola por período
                        integral, oferecendo suporte para o acompanhamento e realização das tarefas de casa, com uma rotina
                        planejada e dinâmica, proporcionando uma maior sociabilidade e desenvolvendo responsabilidade e
                        autonomia em um ambiente alegre, descontraído e seguro.</p>

                    <p class="text-orange">Professores formados - Estrutura física de sala de aula - Alimentação
                        supervisionada por nutricionista</p>

                    <p class="text-light">Projeto especial com tema escolhido anualmente que tem como objetivo
                        desenvolver as habilidades, a criatividade
                        e a integração com conteúdos relacionados de maneira interdisciplinar. Para escolher o tema do
                        projeto, é levado
                        em consideração as características do grupo, com propostas motivadoras e diversificadas. </p>

                    <p class="text-orange">Ed. Infantil e 1º ano (Ampliada da Manhã) - Entrada: 7h00 - Saída: 12h15
                        (Transição para o Pedagógico)<br>
                        2º ao 7º ano (Ampliada da Tarde) - Entrada: 13h15 - Saída: 18h30</p>

                </div>

                <div class="row justify-content-lg-center text-center col-md-12 col-lg-10 offset-lg-1">

                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="d-flex align-items-center flex-column mb-3">
                            <img class="mb-3" src="{{ asset('assets/images/icons/ingles.png') }}" title="Inglês"
                                alt="Inglês">
                            <div>
                                <h4 class="text-light">Inglês</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="d-flex align-items-center flex-column mb-3">
                            <img class="mb-3" src="{{ asset('assets/images/icons/artes.png') }}" title="Artes"
                                alt="Artes">
                            <div>
                                <h4 class="text-light">Artes</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="d-flex align-items-center flex-column mb-3">
                            <img class="mb-3" src="{{ asset('assets/images/icons/recreacao.png') }}"
                                title="Recreação" alt="Recreação">
                            <div>
                                <h4 class="text-light">Recreação</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="d-flex align-items-center flex-column mb-3">
                            <img class="mb-3" src="{{ asset('assets/images/icons/musica.png') }}" title="Música"
                                alt="Música">
                            <div>
                                <h4 class="text-light">Música</h4>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-10 offset-lg-1 text-center">
                    <p class="text-light">* Há opção de flexibilidade nos dias de permanência ( 1 a 5 dias por semana ).<br>
                        * O almoço é contratado diretamente com a Cantina Nutri. Consulte maiores informações <a href="" class="text-cyan">clicando aqui</a></p>
                </div>



            </div>

        </section>

        <section class="etapa-3">

            <div class="container">

                <div class="col-lg-8 offset-lg-2">

                    <h2 class="text-center text-cyan"><strong>ENSINO REMOTO / PRESENCIAL</strong></h2>

                    <p class="text-grey">O plano de contingência e a adoção de medidas com o objetivo de reduzir os
                        riscos de contágio e
                        disseminação da Covid-19 nos
                        ambientes educacionais, causou grandes mudanças no cenário da educação brasileira, e com a retomada
                        das
                        aulas presenciais de
                        maneira gradativa, o Colégio Xingu se adequou para oferecer a modalidade de ensino remoto/presencial
                        (com transmissões ao vivo
                        para alunos que optam por ficar com o ensino remoto). Nesse momento, dois grupos acompanham as
                        aulas:</p>

                    <p class="text-orange">Grupo presencial</p>
                    <p class="text-grey">Com até 100% da capacidade do estabelecimento escolar estabelecido pelo
                        Governo Municipal - de acordo
                        com decreto nº 17.727, de 21 de julho de 2021;</p>

                    <p class="text-orange">Grupo remoto</p>
                    <p class="text-grey">Por meio da plataforma Microsoft Teams (para famílias que optam por manter os
                        filhos em casa ). Foram
                        adotados protocolos de
                        segurança rigorosamente seguidos para garantir a segurança e saúde da comunidade escolar (alunos,
                        equipe
                        e familiares) – uso de
                        máscara, distanciamento, higienização constante das mãos, não compartilhamento de itens, álcool em
                        gel
                        disponível em todos os
                        ambientes, sinalização do espaço, orientação constante por parte dos professores e afastamento de
                        casos
                        suspeitos e confirmados.</p>



                </div>

            </div>

        </section>


    </div>

@endsection

@extends('layouts.app')

@section('title', 'Colégio Xingu - Proposta Pedagógica')

@section('content')

    <div id="pedagogia">

        <div class="page-title-content" style="background: url('{{ asset('assets/images/banner-pages/proposta-pedagogica.jpg') }}')">
            <div class="container">
                <h1>Proposta Pedagógica</h1>
            </div>
        </div>

        <section class="intro">

            <div class="container">

                <div class="title-section text-center mb-3 mt-md-5">
                    <h2 class="m-0">NOSSO ENSINO</h2>
                    <hr>
                </div>

                <div class="text-center col-md-10 offset-md-1">

                    <p class="text-light">Nossa proposta pedagógica visa formar cidadãos éticos, que sejam orientados
                        para o bem social,<br>para o bem-estar coletivo, com capacidade para aprender e pesquisar constantemente.
                    </p>
                </div>

            </div>

        </section>

        <section class="proposta">

            <div class="container">

                <div class="col-lg-8 offset-lg-2">

                    <h2 class="text-center mb-3">PRESSUPOSTOS PEDAGÓGICOS</h2>

                    <p>A escola fez uma opção por instrumentos fornecidos pela epistemologia genética, formulada e
                        desenvolvida
                        por Jean Piaget
                        e seus colaboradores, e pela teoria sócio-histórica, criada por L. S. Vygotsky e seu grupo. A teoria
                        sócio-histórica descreve
                        de que maneira o desenvolvimento, aprendizagem, cultura e educação se encontram integrados.</p>

                    <p>A epistemologia genética, por sua vez, formula uma teoria de desenvolvimento cognitivo, descrevendo
                        as
                        características do
                        pensamento das crianças em cada estágio de seu desenvolvimento. O conhecimento dessas
                        características
                        pelo professor
                        permite que a ação pedagógica aconteça numa relação de maior "intimidade intelectual" com as
                        crianças em
                        cada momento
                        do desenvolvimento de suas condições de pensamento. Os instrumentos fornecidos por essas teorias
                        contribuem para a
                        formulação de uma pedagogia de orientação construtivista. Segundo essa orientação, a aprendizagem é
                        um
                        processo realizado,
                        construído por cada pessoa à medida que age, física ou mentalmente, sobre as coisas que estão no
                        mundo.</p>

                    <p>O construtivismo não é um método para a prática pedagógica. É, sim, uma concepção sobre a forma como
                        acontece o aprendizado.
                        É uma teoria que emerge do avanço das Ciências e da Filosofia dos últimos séculos. Uma teoria que
                        nos
                        permite interpretar o
                        mundo em que vivemos.</p>

                    <p>Essa concepção contribui para a definição dos objetivos da educação e para a formulação da
                        interpretação
                        pedagógica. A intervenção pedagógica viabiliza por meio de procedimentos didáticos, isto é, de
                        propostas
                        de atividades
                        concebidas pelo professor em função daquilo que ele avalia estar acontecendo na classe a cada
                        momento.
                        Assim, a partir das
                        ideias pedagógicas pelas quais a escola optou, alunos e professores têm possibilidade de conquistar
                        e
                        exercer sua autonomia
                        moral e intelectual.</p>

                    <img class="w-100 my-4" src="{{ asset('assets/images/paulo-freire-frase.png') }}" alt="">

                    <h2 class="text-center mb-3">TEORIA PSICANALISTA</h2>

                    <p>A teoria psicanalista - criada por Sigmund Freud - oferece valiosa contribuição aos educadores que
                        buscam conhecer melhor
                        as crianças com as quais interagem. A teoria psicanalista reconhece o desenvolvimento da vida
                        emocional nas crianças e a
                        existência de um mundo mental infantil pleno de significações. Este "mundo interno" está todo o
                        tempo presente nas ações
                        físicas e intelectuais das crianças. Para aprender, estão em jogo diversos fatores:
                    </p>

                    <img class="w-100 my-4" src="{{ asset('assets/images/teoria.png') }}" alt="">

                    <p>Isso quer dizer que os conhecimentos anteriores determinam, junto com suas condições de pensamento, o
                        seu desenvolvimento escolar. A aprendizagem que uma criança inicia quando começa a frequentar uma
                        classe, parte sempre de concepções
                        econhecimentos que ela já construiu, os quais lhe servirão de instrumentos para se relacionar com as
                        novas situações de
                        aprendizagem que encontrará na escola. Partindo deste ponto, a experiência escolar deve assegurar a
                        realização de aprendizagens significativas, aquelas em que os novos conteúdos de aprendizagem se
                        relacionam com o que a criança já sabe, podendo assim,
                        serem assimilados por ela.
                    </p>

                </div>

            </div>

        </section>



    </div>

@endsection

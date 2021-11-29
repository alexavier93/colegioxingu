@component('mail::message')

<h1>Você recebeu um e-mail do site</h1>

<ul>
    <li><b>Nome:</b> {{ $data['nome'] }}</li>
    <li><b>E-mail:</b> {{ $data['email'] }}</li>
    <li><b>Cargo Pretendido:</b> {{ $data['cargo'] }}</li>
    <li><b>Classificação IBGE:</b> {{ $data['classificacao'] }}</li>
    <li><b>Mensagem:</b><br> {{ $data['mensagem'] }}</li>
</ul>

<p>E-mail enviado em {{ date('d/m/Y H:i:s') }}</p>

@endcomponent


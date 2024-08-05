<x-layout pageTitle="Todo: Login">
    <x-slot:btn>
        <a  href="{{route('login')}}"  class="btn btn-primary">Já possui conta? faça login</a>
    </x-slot:btn>
    <section id="createSection">
        <h1>Registrar-se</h1>


    @if($errors->any())
        <ul class="alert alert_error">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form method="POST" action="{{route('user.register_action')}}">
        @csrf
        <x-form.text_input name="name" label="Seu nome" required="required" placeholder="Digite o seu nome"/>
        <x-form.text_input name="email" type="email" label="Seu email" required="required" placeholder="Digite o seu email"/>
        <x-form.text_input name="password" type="password" label="Sua senha" required="required" placeholder="Digite sua senha"/>
        <x-form.text_input name="password_confirmation" type="password" label="Confirme sua senha" required="required" placeholder="Confirme sua senha"/>
        <x-form.button type="submit">Registrar</x-form.button>
    </form>
    </section>
</x-layout>
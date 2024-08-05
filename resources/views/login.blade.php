<x-layout pageTitle="Todo: Login">
    <x-slot:btn>
        <a href="{{route('register')}}" class="btn btn-primary">Já possui conta? faça login</a>
    </x-slot:btn>
    <section id="createSection">
        <h1>Login</h1>
    
    <form method="POST" action="{{route('user.login_action')}}">
        @csrf
        <x-form.text_input name="email" type="email" label="Seu email" required="required" placeholder="Digite o seu email"/>
        <x-form.text_input name="password" type="password" label="Sua senha" required="required" placeholder="Digite sua senha"/>
        <x-form.button type="submit">Logar</x-form.button>
    </form>
    </section>
</x-layout>
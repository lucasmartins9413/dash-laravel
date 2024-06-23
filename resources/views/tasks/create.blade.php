<x-layout pageTitle="Todo: Login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">Home</a>
    </x-slot:btn>
    

    <section id="createSection">
        <h1>Criar Tarefa</h1>

        <form action="">
            <label for="title">Título da Task</label>
            <input type="text" name="name" id="" required>

        </form>
    </section>
</x-layout>
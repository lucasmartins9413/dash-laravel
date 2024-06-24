<x-layout pageTitle="Todo: Login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">Home</a>
    </x-slot:btn>
    

    <section id="createSection">
        <h1>Criar Tarefa</h1>

        <form method="POST" action="{{route('tasks.create_action')}}">
            @csrf
            <x-form.text_input name="title" label="Título da task" required="required" placeholder="Digite o título da sua task"/>
            <x-form.text_input name="due_date" type="datetime-local" label="Data da task" required="required" placeholder="Digite o título da sua task"/>
            <x-form.select_input name="category_id" label="Categoria da task">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
                
            </x-form.select_input>
            <x-form.textarea_input label="Descrição da Task" name="description" placeholder="Digite a descrição da task"></x-form.textarea_input>
            <x-form.button type="reset">Resetar</x-form.button>
            <x-form.button type="submit">Criar Task</x-form.button>
        </form>
    </section>
</x-layout>
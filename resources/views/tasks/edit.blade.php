<x-layout pageTitle="Todo: Login">
    <x-slot:btn>
        <a href="{{route('register')}}" class="btn btn-primary">voltar</a>
    </x-slot:btn>
    <section id="createSection">
        <h1>Criar Tarefa</h1>

        <form method="POST" action="{{route('tasks.edit_action')}}">
            @csrf
            <input type="hidden" name="id" value="{{$task->id}}">
            <x-form.text_input name="title" label="Título da task" required="required" placeholder="Digite o título da sua task" value="{{$task->title}}"/>
            <x-form.text_input name="due_date" type="datetime-local" label="Data da task" required="required" value="{{$task->due_date}}"/>
            <x-form.select_input name="category_id" label="Categoria da task">
                @foreach ($categories as $category)
                    
                    <option value="{{$category->id}}"
                        @if($category->id == $task->category_id) selected @endif
                    >{{$category->title}}</option>
                @endforeach
                
            </x-form.select_input>
            <x-form.textarea_input label="Descrição da Task" name="description" placeholder="Digite a descrição da task" value="{{$task->description}}"></x-form.textarea_input>
            <x-form.button type="reset">Resetar</x-form.button>
            <x-form.button type="submit">Atualizar Task</x-form.button>
        </form>
    </section>
</x-layout>
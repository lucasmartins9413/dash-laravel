<x-layout>

    <x-slot:btn>
        <a href="{{route('tasks.create')}}" class="btn btn-primary">Criar Tarefa</a>
        <a href="{{route('logout')}}" class="btn btn-primary">Sair</a>
    </x-slot:btn>


    <section class="graphic">
        <div class="graph_header">
            <h2>Progresso do Dia</h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <img src="/assets/images/icon-prev.png" alt="">
                <date>13/12/2024</date>
                <img src="/assets/images/icon-next.png" alt="">
            </div>
        </div>

        <div class="graph_header-subtitle">Tarefas: <b>3/6</b></div>
        <div class="graph_placeholder">
            
        </div>
        <p class="tasks_left"><img src="/assets/images/icon-info.png" alt="">Restam 3 tarefas para serem realizadas</p>
    </section>
    <section class="list">
        <div class="list_header">
            <select name="" id="">
                <option value="1">Todas as tarefas</option>
            </select>
        </div>

        <div class="task_list">

            @foreach ($tasks as $task )
                <x-task :data=$task/>
            @endforeach


        </div>
    </section>
</x-layout>
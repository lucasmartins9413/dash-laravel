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
                <a href="{{route('home', ['date' => $date_prev_button])}}"><img src="/assets/images/icon-prev.png" alt=""></a>
                <date><p>{{$date_as_string}}</p></date>
                <a href="{{route('home', ['date' => $date_next_button])}}"><img src="/assets/images/icon-next.png" alt=""></a>
            </div>
        </div>

        <div class="graph_header-subtitle">Tarefas: <b>3/6</b></div>
        <div class="graph_placeholder">
            
        </div>
        <p class="tasks_left"><img src="/assets/images/icon-info.png" alt="">Restam 3 tarefas para serem realizadas</p>
    </section>
    <section class="list">
        <div class="list_header">
            <select name="" id="" onChange="changeTaskStatusFilter(this)">
                <option value="all_task">Todas as tarefas</option>
                <option value="task_pending">Tarefas Pendentes</option>
                <option value="task_done">Tarefas Realizadas</option>
            </select>
        </div>

        <div class="task_list">

            @foreach ($tasks as $task )
                <x-task :data=$task/>
            @endforeach


        </div>
    </section>

    <script>
        function changeTaskStatusFilter(e){
                
            if(e.value == 'task_pending'){
                showAllTasks();
                document.querySelectorAll('.task_done').forEach(function(element){
                    element.style.display = 'none';
                })
            }else if( e.value == 'task_done'){
                showAllTasks()
                document.querySelectorAll('.task_pending').forEach(function(element){
                    element.style.display = 'none';
                })
            }else{
                showAllTasks();
            }
        }


        function showAllTasks(){
            document.querySelectorAll('.task_single').forEach(function(element){
                element.style.display = 'block';
            })
        }
    </script>

    <script>
       async function taskUpdate(element) {
            let status = element.checked;
            let taskId = element.dataset.id;
            let url = '{{ route('tasks.update') }}';

            let rawResult = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-type': 'application/json',
                    'accept': "application/json"
                },
                body: JSON.stringify({ status, taskId, _token: '{{ csrf_token() }}' })
            });

            let result = await rawResult.json();
            if(result.success){
                alert('Task atualizada com sucesse');
            }else{
                element.checked = !status;
            }
        }
    </script>
</x-layout>
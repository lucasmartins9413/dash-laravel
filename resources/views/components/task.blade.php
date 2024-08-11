<div class="task_single {{$data['is_done'] ? 'task_done' : 'task_pending'}}">
    <div class="title">
        <input type="checkbox" onChange="taskUpdate(this)" data-id="{{$data['id']}}"
            @if($data && $data['is_done'])
                checked
            @endif
        >
        <h3>{{$data['title'] ?? ''}}</h3>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        <h3>{{ $data['category']->title ?? 'No Category' }}</h3>
    </div>
    <div class="actions">
        <a href="{{route('tasks.edit', ['id' => $data['id']])}}"><img src="/assets/images/icon-edit.png" alt=""></a>
        <a href="{{route('tasks.delete', ['id' => $data['id']])}}"><img src="/assets/images/icon-delete.png" alt=""></a>
    </div>
</div>

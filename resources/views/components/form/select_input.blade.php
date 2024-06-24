<label for="{{$name}}">{{$label ?? ''}}</label>
<select name="{{$name}}" id="{{$name}}" {{empty($required) ? '' : 'required'}}>
    <option value="" selected disabled value="">Selecione a categoria</option>
    {{$slot}}
</select>
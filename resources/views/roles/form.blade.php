<div class="form-group">
    {{ Form::label('name','Nombre') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del rol']) }}
    @error('name')
    <div class="text-danger">
        {{$message}}
    </div>
    @enderror
</div>
<h3 class="mt-4">Lista de permisos</h3>
@foreach ($permissions as $permission)
    <div>
        <label>
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class'=>'mr-1']) !!}
            {{ $permission->description }}
        </label>
    </div>
@endforeach

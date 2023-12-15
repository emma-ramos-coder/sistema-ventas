<div class="box box-info padding-1">
    <div class="box-body">
        <div class="mb-3 row">
        <div class="col form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre', 'disabled']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Email') }}
            {{ Form::email('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email','disabled']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        {{-- <div class="col form-group">
            {{ Form::label('Contraseña') }}
            {{ Form::text('password', $user->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        </div>
        <div class="mb-3 row">
            <h5>Lista de Roles:</h5>
            {!! Form::model($user, ['route'=>['users.update',$user],'method'=>'put']) !!}
            @foreach ($roles as $role)
            <div class="col-8 form-group">
                <label>
                    {{ Form::checkbox('roles[]', $role->id, null, ['class' => 'form-check-input']) }}
                    {{ $role->name }}
                </label>
            </div>
            @endforeach
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        <a class="btn btn-danger" href="{{ route('users.index') }}"> {{ __('Cancelar') }}</a>
    </div>
</div>

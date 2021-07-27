<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('var_1') }}
            {{ Form::text('var_1', $registro->var_1, ['class' => 'form-control' . ($errors->has('var_1') ? ' is-invalid' : ''), 'placeholder' => 'Var 1']) }}
            {!! $errors->first('var_1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('var_2') }}
            {{ Form::text('var_2', $registro->var_2, ['class' => 'form-control' . ($errors->has('var_2') ? ' is-invalid' : ''), 'placeholder' => 'Var 2']) }}
            {!! $errors->first('var_2', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
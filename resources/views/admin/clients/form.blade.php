<div class="row">


    <div class="file-field col s12">
        <div class="btn teal lighten-1">
            <span>File</span>
            {!! Form::file('photo', null,array('id'=>'image')) !!}
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="User Image">
            <label class="error">{{ $errors->first('photo') }}</label>
        </div>
    </div>
    <div class="input-field col s6">
        {!!Form::text('photo_alt', null,array('class'=>'validate','id'=>'photo_alt'))!!}
        <label for="photo_alt">Photo Alt</label>
    </div>






  <div class="input-field col s6">
        {!!Form::url('url', null,array('class'=>'valiname','id'=>'url'))!!}
        <label for="url">URL</label>
    </div>

















</div>
{!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}

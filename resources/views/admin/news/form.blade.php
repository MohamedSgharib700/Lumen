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
        {!!Form::text('title', null,array('class'=>'valititle','id'=>'title'))!!}
        <label for="title">Title</label>
    </div>
    <div class="input-field col s6">
        {!!Form::text('ar_title', null,array('class'=>'valiar_title','id'=>'ar_title'))!!}
        <label for="ar_title">Title</label>
    </div>

    <div class="input-field col s6">
        {!!Form::select('cat_id', $cats,null,array('class'=>'validate','id'=>'cat_id'))!!}
        <label for="cat_id">Product Category</label>

    </div>

















</div>
{!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}

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
        {!!Form::text('name', null,array('class'=>'validate','id'=>'name'))!!}
        <label for="name">Name</label>
    </div>

    <div class="input-field col s6">
        {!!Form::text('job_title', null,array('class'=>'validate','id'=>'job_title'))!!}
        <label for="job_title">Job Title</label>
    </div>

    <div class="input-field col s6">
        {!!Form::text('fb', null,array('class'=>'validate','id'=>'fb'))!!}
        <label for="fb">Facebook</label>
    </div>

    <div class="input-field col s6">
        {!!Form::text('tw', null,array('class'=>'validate','id'=>'tw'))!!}
        <label for="tw">Twitter</label>
    </div>

    <div class="input-field col s6">
        {!!Form::text('ins', null,array('class'=>'validate','id'=>'ins'))!!}
        <label for="ins">Instgram</label>
    </div>

    <div class="input-field col s6">
        {!!Form::text('link', null,array('class'=>'validate','id'=>'link'))!!}
        <label for="link">Linkden</label>
    </div>
    <div class="input-field col s6">
        {!!Form::text('about', null,array('class'=>'validate','id'=>'about'))!!}
        <label for="about">About</label>
    </div>
























</div>
{!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}

<div class="input-field col s6">
    {!!Form::text('tag', null,array('class'=>'validate','id'=>'name'))!!}
    <label for="name">Tag Name</label>
</div>
<div class="input-field col s6">
    {!!Form::text('ar_tag', null,array('class'=>'validate','id'=>'ar_name'))!!}
    <label for="ar_name">Arabic Tag Name</label>
</div>

{!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}

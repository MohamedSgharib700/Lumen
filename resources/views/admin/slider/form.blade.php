<!-- START FORM   -->

<div class="file-field  col s6">
    <div class="btn teal lighten-1">
        <span>Image</span>
        {!!Form::file('photo', null,array('id'=>'photo'))!!}
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Image">
    </div>
    <label class="error">{{ $errors->first('photo') }}</label>
</div>
<div class="input-field col s6">
    {!!Form::text('photo_alt', null,array('class'=>'validate','id'=>'photo_alt'))!!}
    <label for="photo_alt">Alternative Text </label>
    <label class="error">{{ $errors->first('photo_alt') }}</label>
</div>

<div class="input-field col s6">
    {!!Form::text('ar_photo_alt', null,array('class'=>'validate','id'=>'ar_photo_alt'))!!}
    <label for="ar_photo_alt">Arabic Alternative Text </label>
    <label class="error">{{ $errors->first('ar_photo_alt') }}</label>
</div>

<div class="input-field col s6">
    {!!Form::text('title', null,array('class'=>'validate','id'=>'title'))!!}
    <label for="title">Title</label>
    <label class="error">{{ $errors->first('title') }}</label>
</div>
<div class="input-field col s6">
    {!!Form::text('ar_title', null,array('class'=>'validate','id'=>'ar_title'))!!}
    <label for="ar_title">Arabic Title</label>
    <label class="error">{{ $errors->first('ar_title') }}</label>
</div>

<div class="input-field col s6">
    {!!Form::text('subtitle', null,array('class'=>'validate','id'=>'subtitle'))!!}
    <label for="subtitle">Sub Title </label>
    <label class="error">{{ $errors->first('title') }}</label>
</div>

<div class="input-field col s6">
    {!!Form::text('ar_subtitle', null,array('class'=>'validate','id'=>'ar_subtitle'))!!}
    <label for="ar_subtitle">Sub Title </label>
    <label class="error">{{ $errors->first('ar_subtitle') }}</label>
</div>


<div class="input-field col s6">
    {!!Form::text('button', null,array('class'=>'validate','id'=>'photo_alt'))!!}
    <label for="button">Button Text</label>
    <label class="error">{{ $errors->first('button') }}</label>
</div>


<div class="input-field col s6">
    {!!Form::text('ar_button', null,array('class'=>'validate','id'=>'photo_alt'))!!}
    <label for="ar_button">Arabic Button Text</label>
    <label class="error">{{ $errors->first('ar_button') }}</label>
</div>




<div class="input-field col s6">
    {!!Form::url('button_url', null,array('class'=>'validate','id'=>'button_url'))!!}
    <label for="button_url">Button Url </label>
    <label class="error">{{ $errors->first('button_url') }}</label>
</div>

 
<div class="input-field col s6">
    {!!Form::text('desc', null,array('class'=>'validate','id'=>'desc'))!!}
    <label for="desc">Photo Description </label>
    <label class="error">{{ $errors->first('desc') }}</label>
</div>
<div class="input-field col s6">
    {!!Form::text('ar_desc', null,array('class'=>'validate','id'=>'ar_desc'))!!}
    <label for="ar_desc">Arabic Photo Description </label>
    <label class="error">{{ $errors->first('ar_desc') }}</label>
</div>

  <div class="input-field col s6">
    {!!Form::select('status', array('1'=>'Active','0' =>'Disactive'),null,array('class'=>'validate'))!!}
    <label for="status">Status</label>

</div>

<div class="panel-footer">                                                               
    {!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
</div>

<!-- END FORM --> 


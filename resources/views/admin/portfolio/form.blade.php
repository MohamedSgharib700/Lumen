<div class="file-field col s12">
    <div class="btn teal lighten-1">
        <span>Project Image</span>
        {!!Form::file('photo', null,array('id'=>'photo'))!!}
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Image">
    </div>
    <label class="error">{{ $errors->first('photo') }}</label>
</div>

<div class="file-field col s6">
    <div class="btn teal lighten-1">
        <span>Galary</span>
        <input id="gallary" type="file" class="form-control" placeholder="Project Gallary"  name='gallary[]' multiple/>
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Project Galary">
    </div>
    <label class="error">{{ $errors->first('photo') }}</label>
</div>


<div class="input-field col s6">
    {!!Form::text('name', null,array('class'=>'validate','id'=>'name'))!!}
    <label for="name">Project Title</label>
    <label class="error">{{ $errors->first('name') }}</label>
</div>
<div class="input-field col s6">
    {!!Form::text('ar_name', null,array('class'=>'validate','id'=>'ar_name'))!!}
    <label for="ar_name">Arabic Project Title</label>
    <label class="error">{{ $errors->first('ar_name') }}</label>
</div>

<div class="input-field col s6">
    {!!Form::text('location', null,array('class'=>'validate','id'=>'location'))!!}
    <label for="location">Project Location</label>
    <label class="error">{{ $errors->first('location') }}</label>
</div>
<div class="input-field col s6">
    {!!Form::select('sub_cat_id', $cats,null,array('class'=>'validate','id'=>'sub_cat_id'))!!}
</div>
<div class="input-field col s12">
    <label for="blog">Project Description</label>
    {!!Form::textarea('desc', null,array('class'=>'materialize-textarea','id'=>'desc'))!!}
    <label class="error">{{ $errors->first('desc') }}</label>
</div>
<div class="input-field col s12">
    <label for="ar_desc">Arabic Project Description</label>
    {!!Form::textarea('ar_desc', null,array('class'=>'materialize-textarea','id'=>'ar_desc'))!!}
    <label class="error">{{ $errors->first('ar_desc') }}</label>
</div>
<div class="input-field col s6">
    {!!Form::text('client_name', null,array('class'=>'validate','id'=>'client_name'))!!}
    <label for="client_name">Client Name</label>
    <label class="error">{{ $errors->first('client_name') }}</label>
</div>

<div class="input-field col s6">
    {!!Form::text('fb', null,array('class'=>'validate','id'=>'fb'))!!}
    <label for="fb">Facebook</label>
    <label class="error">{{ $errors->first('fb') }}</label>
</div>

<div class="input-field col s6">
    {!!Form::text('tw', null,array('class'=>'validate','id'=>'tw'))!!}
    <label for="tw">Twitter</label>
    <label class="error">{{ $errors->first('tw') }}</label>
</div>


<div class="input-field col s6">
    {!!Form::text('ins', null,array('class'=>'validate','id'=>'ins'))!!}
    <label for="ins">Insta</label>
    <label class="error">{{ $errors->first('ins') }}</label>
</div>


<div class="input-field col s6">
    {!!Form::text('google plus', null,array('class'=>'validate','id'=>'google plus'))!!}
    <label for="google plus">G+</label>
    <label class="error">{{ $errors->first('google plus') }}</label>
</div>



<div class="col s12">

    <div class="card">
        <div class="card-content">
            <span class="card-title">Project Meta Info</span>
            <div class="row">
                <div class="input-field col s6">
                    {!!Form::text('custom_url', null,array('class'=>'validate','id'=>'custom_url'))!!}
                    <label for="custom_url">Custom Url</label>
                </div> 
                <div class="input-field col s6">
                    {!!Form::text('ar_custom_url', null,array('class'=>'validate','id'=>'custom_url'))!!}
                    <label for="ar_custom_url">Arabic Custom Url</label>
                </div>

                <div class="input-field col s6">
                    {!!Form::textarea('meta_description', null,array('class'=>'materialize-textarea','id'=>'meta_description'))!!}
                    <label for="meta_description">Project meta description</label>
                </div>
                 <div class="input-field col s6">
                    {!!Form::textarea('ar_meta_description', null,array('class'=>'materialize-textarea','id'=>'meta_description'))!!}
                    <label for="ar_meta_description"> Arabic Project meta description</label>
                </div> 
                
                <div class="input-field col s6">
                    {!!Form::textarea('meta_keyword', null,array('class'=>'materialize-textarea','id'=>'meta_keyword'))!!}
                    <label for="meta_keyword">Project meta keyword</label>
                </div>
                 <div class="input-field col s6">
                    {!!Form::textarea('ar_meta_keyword', null,array('class'=>'materialize-textarea','id'=>'meta_keyword'))!!}
                    <label for="ar_meta_keyword"> Arabic Project meta keyword</label>
                </div>
                
                  <div class="input-field col s6">
                    {!!Form::textarea('meta_title', null,array('class'=>'materialize-textarea','id'=>'meta_title'))!!}
                    <label for="meta_title">Project meta Title</label>
                </div>
                
                   <div class="input-field col s6">
                    {!!Form::textarea('ar_meta_title', null,array('class'=>'materialize-textarea','id'=>'ar_meta_title'))!!}
                    <label for="ar_meta_title">arabic Project meta Title</label>
                </div>
                
                
                  <div class="input-field col s6">
                    {!!Form::textarea('page_title', null,array('class'=>'materialize-textarea','id'=>'page_title'))!!}
                    <label for="page_title">Project Page Title</label>
                </div>
                
                     <div class="input-field col s6">
                    {!!Form::textarea('ar_page_title', null,array('class'=>'materialize-textarea','id'=>'ar_page_title'))!!}
                    <label for="ar_page_title">arabic Project Page Title</label>
                </div>
                
                
                
            </div>
        </div>
    </div>

</div>
<br>
<br/>
{!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
<script>
    CKEDITOR.replace('desc', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });
    CKEDITOR.replace('ar_desc', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });
</script>
<div class="file-field col s12">
    <div class="btn teal lighten-1">
        <span>Blog Image</span>
        {!!Form::file('photo', null,array('id'=>'photo'))!!}
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Image">
    </div>
    <label class="error">{{ $errors->first('photo') }}</label>
</div>

<div class="file-field col s12">
    <div class="btn teal lighten-1">
        <span>Blog Galary</span>
        <input id="gallary" type="file" class="form-control" placeholder="Blog Gallary"  name='gallary[]' multiple/>
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Blog Galary">
    </div>
    <label class="error">{{ $errors->first('photo') }}</label>
</div>

<div class="input-field col s12">
    {!!Form::text('video', null,array('class'=>'validate','id'=>'video'))!!}
    <label for="video">Video URL: *Paste the Embed src video</label>
    <label class="error">{{ $errors->first('video') }}</label>
</div>
<div class="input-field col s6">
    {!!Form::text('title', null,array('class'=>'validate','id'=>'title'))!!}
    <label for="title">Blog Title</label>
    <label class="error">{{ $errors->first('title') }}</label>
</div>

<div class="input-field col s12">
    {!!Form::select('sub_cat_id', $cats,null,array('class'=>'validate','id'=>'sub_cat_id'))!!}
</div>
<div class="input-field col s12">
    <label for="blog">Blog Description</label>
    {!!Form::textarea('desc', null,array('class'=>'materialize-textarea','id'=>'desc'))!!}
    <label class="error">{{ $errors->first('desc') }}</label>
</div>

<div class="col s12">
    <label for="blog">Blog</label>
    {!!Form::textarea('blog', null,array('class'=>'validate','id'=>'blog','placeholder'=>'Product Description','style'=>'padding-top:20px'))!!}
    <label class="error">{{ $errors->first('blog') }}</label>
</div>


<div class="input-field col s12">

    {!!Form::select('user_id', $users,null,array('class'=>'validate','id'=>'user_id'))!!}
    <label for="user_id">Author: </label>

</div>
<div class="col s12">


    <div class="card">
        <div class="card-content">
            <span class="card-title">Blog Meta Info</span>
            <div class="row">
                <div class="input-field col s6">
                    {!!Form::text('custom_url', null,array('class'=>'validate','id'=>'custom_url'))!!}
                    <label for="custom_url">Custom Url</label>
                </div> 
                

                <div class="input-field col s6">
                    {!!Form::textarea('meta_description', null,array('class'=>'materialize-textarea','id'=>'meta_description'))!!}
                    <label for="meta_description">Blog meta description</label>
                </div>
                  
                
                <div class="input-field col s6">
                    {!!Form::textarea('meta_keyword', null,array('class'=>'materialize-textarea','id'=>'meta_keyword'))!!}
                    <label for="meta_keyword">Blog meta keyword</label>
                </div>
                 
            </div>
        </div>
    </div>

</div>
<br>
<br/>
{!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
<script>
    CKEDITOR.replace('blog', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });
    CKEDITOR.replace('ar_blog', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });
</script>
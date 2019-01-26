<div class="row">
    <div class="input-field col s6">
        {!!Form::text('name', null,array('class'=>'validate','id'=>'name'))!!}
        <label for="name">Sub Category Name</label>
    </div>

  <div class="input-field col s6">
        {!!Form::text('ar_name', null,array('class'=>'validate','id'=>'ar_name'))!!}
        <label for="ar_name">Arabic Sub Category Name</label>
    </div>


    <div class="file-field col s12">
        <div class="btn teal lighten-1">
            <span>File</span>
            {!! Form::file('photo', null,array('id'=>'image')) !!}
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Sub Category Image">
            <label class="error">{{ $errors->first('photo') }}</label>
        </div>
    </div>
    <div class="input-field col s6">
        {!!Form::text('photo_alt', null,array('class'=>'validate','id'=>'photo_alt'))!!}
        <label for="photo_alt">photo alt</label>
    </div>
    <div class="input-field col s6">
        {!!Form::select('cat_id', $cats,null,array('class'=>'validate','id'=>'cat_id'))!!}
        <label for="cat_id">Category</label>

    </div>

    <div class="input-field col s6">
        {!!Form::text('custom_url', null,array('class'=>'validate','id'=>'custom_url'))!!}
        <label for="custom_url">Custom Url</label>
    </div>
      <div class="input-field col s6">
        {!!Form::text('ar_custom_url', null,array('class'=>'validate','id'=>'ar_custom_url'))!!}
        <label for="ar_custom_url">Arabic Custom Url</label>
    </div>

      <div class="input-field col s12">
          <label for="desc">Sub Category Description</label> </br> </br>

        {!!Form::textarea('desc', null,array('class'=>'validate','id'=>'desc'))!!}
    </div>
      <div class="input-field col s12">
                  <label for="ar_desc">Arabic Sub Category Description</label>  </br> </br>

        {!!Form::textarea('ar_desc', null,array('class'=>'validate','id'=>'ar_desc'))!!}
    </div>


    <div class="input-field col s6">
        {!!Form::textarea('meta_description', null,array('class'=>'materialize-textarea','id'=>'meta_description'))!!}
        <label for="meta_description">Sub Category meta description</label>
    </div>

    <div class="input-field col s6">
        {!!Form::textarea('meta_keyword', null,array('class'=>'materialize-textarea','id'=>'meta_keyword'))!!}
        <label for="meta_keyword">Sub Category meta keyword</label>
    </div>
    
      <div class="input-field col s6">
        {!!Form::textarea('meta_title', null,array('class'=>'materialize-textarea','id'=>'meta_title'))!!}
        <label for="meta_title">Sub Category meta title</label>
    </div>

      <div class="input-field col s6">
        {!!Form::textarea('page_title', null,array('class'=>'materialize-textarea','id'=>'page_title'))!!}
        <label for="page_title">Sub Category Page title</label>
    </div>
    
     <div class="input-field col s6">
                    {!!Form::textarea('ar_meta_title', null,array('class'=>'materialize-textarea','id'=>'ar_meta_title'))!!}
                    <label for="ar_meta_title">arabic Sub Category  meta Title</label>
                </div>
                     <div class="input-field col s6">
                    {!!Form::textarea('ar_page_title', null,array('class'=>'materialize-textarea','id'=>'ar_page_title'))!!}
                    <label for="ar_page_title">arabic Sub Category  Page Title</label>
                </div>
                










</div>
{!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}

<script>
   CKEDITOR.replace('desc', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });
    CKEDITOR.replace('ar_desc', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });
    
    </script>

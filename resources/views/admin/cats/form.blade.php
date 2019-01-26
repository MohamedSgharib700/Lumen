<div class="row">
    <div class="input-field col s6">
        {!!Form::text('name', null,array('class'=>'validate','id'=>'name'))!!}
        <label for="name">Category Name</label>
    </div>
  



    <div class="file-field col s12">
        <div class="btn teal lighten-1">
            <span>File</span>
            {!! Form::file('photo', null,array('id'=>'image')) !!}
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Category Image">
            <label class="error">{{ $errors->first('photo') }}</label>
        </div>
    </div>
    
     <div class="file-field col s12">
        <div class="btn teal lighten-1">
            <span>File</span>
            {!! Form::file('slider', null,array('id'=>'image')) !!}
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Slider Image">
            <label class="error">{{ $errors->first('slider') }}</label>
        </div>
    </div>
    
    
    <div class="input-field col s6">
        {!!Form::text('photo_alt', null,array('class'=>'validate','id'=>'photo_alt'))!!}
        <label for="photo_alt">photo alt</label>
    </div>

    <div class="input-field col s6">
        {!!Form::text('custom_url', null,array('class'=>'validate','id'=>'custom_url'))!!}
        <label for="custom_url">Custom Url</label>
    </div>
      

      <div class="input-field col s12">
          <label for="desc">Category Description</label> </br> </br>

        {!!Form::textarea('desc', null,array('class'=>'materialize-textarea','id'=>'desc'))!!}
    </div>
      


    <div class="input-field col s6">
        {!!Form::textarea('meta_description', null,array('class'=>'materialize-textarea','id'=>'meta_description'))!!}
        <label for="meta_description">Category meta description</label>
    </div>

    <div class="input-field col s6">
        {!!Form::textarea('meta_keyword', null,array('class'=>'materialize-textarea','id'=>'meta_keyword'))!!}
        <label for="meta_keyword">Category meta keyword</label>
    </div>










</div>
{!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}



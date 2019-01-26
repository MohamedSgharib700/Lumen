@extends('admin.dashboard')
@section('content')   
<!-- end START BREADCRUMB -->
{!! Form:: model($main,array('method' => 'PUT','action' => ['MainController@update'], 'files'=>true,'class' => 'update-ajax-form-request')) !!}
<div class="message">
</div><!-- div to display message after insert -->
 
        <div class="card card-transparent">
            <div class="card-content">
                <span class="card-title">Main Settings</span>
            </div>
        </div>
<div class="row">
        <div class="col s12 16">
            <ul class="tabs tab-demo z-depth-1" style="width: 100%;">
                <li class="tab col s3"><a href="#test1" class="active">About Us</a></li>
                <li class="tab col s3"><a class="" href="#test2">Social & Contact Info</a></li>
                <li class="tab col s3"><a href="#test3" >Logo & Sliders </a></li>

                <li class="tab col s3"><a href="#test4">Meta Data</a></li>
            </ul>
        </div>
        <div id="test1" class="col s12">
            <div class="file-field input-field s12">
                <div class="btn teal lighten-1">
                    <span>About Us Photo</span>
                    {!!Form::file('aboutusphoto', null,array('id'=>'aboutusphoto'))!!}
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="About Us Photo">
                </div>
                <label class="error">{{ $errors->first('aboutusphoto') }}</label>
            </div>
            <div class="input-field col s12">
                <label for="vision">About Us</label>
                {!!Form::textarea('aboutus', null,array('class'=>'materialize-textarea','id'=>'aboutus'))!!}
                <label class="error">{{ $errors->first('aboutus') }}</label>
            </div>


            <div class="input-field col s12">
                {!!Form::text('video_url', null,array('class'=>'validate','id'=>'video_url'))!!}
                <label for="video_url">Video URL</label>
                <label class="error">{{ $errors->first('video_url') }}</label>
            </div>


            <div class="input-field col s12">
                {!!Form::text('projdesc', null,array('class'=>'validate','id'=>'projdesc'))!!}
                <label for="projdesc">Project Details in Home Page</label>
                <label class="error">{{ $errors->first('projdesc') }}</label>
            </div>

            <div class="input-field col s12">
                <label for="vision">Why To Choose Us</label>
                {!!Form::textarea('why', null,array('class'=>'materialize-textarea','id'=>'why'))!!}
                <label class="error">{{ $errors->first('why') }}</label>
            </div>

            <div class="input-field col s12">
                <label for="vision">Vision</label>
                {!!Form::textarea('vision', null,array('class'=>'materialize-textarea','id'=>'vision'))!!}
                <label class="error">{{ $errors->first('vision') }}</label>
            </div>
            
          
            <div class="input-field col s12">
                <label for="mission">Mission</label>
                {!!Form::textarea('mission', null,array('class'=>'materialize-textarea','id'=>'mission'))!!}
                <label class="error">{{ $errors->first('mission') }}</label>
            </div>

          





        </div>
        <div id="test2" class="col s12">
            <div class="input-field col s6">
                {!!Form::text('phone', null,array('class'=>'validate','id'=>'phone'))!!}
                <label for="phone">Phone</label>
                <label class="error">{{ $errors->first('phone') }}</label>
            </div>
            <div class="input-field col s6">
                {!!Form::email('email', null,array('class'=>'validate','id'=>'email'))!!}
                <label for="email">Email</label>
                <label class="error">{{ $errors->first('email') }}</label>
            </div>
            <div class="input-field col s6">
                {!!Form::text('address', null,array('class'=>'validate','id'=>'address'))!!}
                <label for="address">Address 1</label>
                <label class="error">{{ $errors->first('address') }}</label>
            </div>
            <div class="input-field col s6">
                {!!Form::text('address2', null,array('class'=>'validate','id'=>'address2'))!!}
                <label for="address2">Address 2</label>
                <label class="error">{{ $errors->first('address2') }}</label>
            </div>

            <div class="input-field col s6">
                {!!Form::text('address3', null,array('class'=>'validate','id'=>'address3'))!!}
                <label for="address3">Address 3</label>
                <label class="error">{{ $errors->first('address3') }}</label>
            </div>



            <div class="input-field col s6">
                {!!Form::url('fb', null,array('class'=>'validate','id'=>'fb'))!!}
                <label for="fb">Facebook</label>
                <label class="error">{{ $errors->first('fb') }}</label>
            </div>
            <div class="input-field col s6">
                {!!Form::url('tw', null,array('class'=>'validate','id'=>'tw'))!!}
                <label for="fb">Twitter</label>
                <label class="error">{{ $errors->first('tw') }}</label>
            </div>
            <div class="input-field col s6">
                {!!Form::url('yt', null,array('class'=>'validate','id'=>'yt'))!!}
                <label for="fb">Youtbe</label>
                <label class="error">{{ $errors->first('yt') }}</label>
            </div>
            <div class="input-field col s6">
                {!!Form::url('linkedin', null,array('class'=>'validate','id'=>'linkedin'))!!}
                <label for="fb">Linked In</label>
                <label class="error">{{ $errors->first('linkedin') }}</label>
            </div>
            <div class="input-field col s6">
                {!!Form::url('gp', null,array('class'=>'validate','id'=>'gp'))!!}
                <label for="fb">Google +</label>
                <label class="error">{{ $errors->first('gp') }}</label>
            </div>
            <div class="input-field col s6">
                {!!Form::url('pin', null,array('class'=>'validate','id'=>'pin'))!!}
                <label for="fb">Pin</label>
                <label class="error">{{ $errors->first('pin') }}</label>
            </div>
            <div class="input-field col s6">
                {!!Form::url('be', null,array('class'=>'validate','id'=>'be'))!!}
                <label for="ins">Behance</label>
                <label class="error">{{ $errors->first('be') }}</label>
            </div>
            <div class="input-field col s6">
                {!!Form::url('ins', null,array('class'=>'validate','id'=>'ins'))!!}
                <label for="ins">Instgarm</label>
                <label class="error">{{ $errors->first('ins') }}</label>
            </div>
            <div class="input-field col s6">
                {!!Form::url('sky', null,array('class'=>'validate','id'=>'sky'))!!}
                <label for="sky">Skype</label>
                <label class="error">{{ $errors->first('sky') }}</label>
            </div>
            
               <div class="input-field col s6">
                {!!Form::url('stumble', null,array('class'=>'validate','id'=>'stumble'))!!}
                <label for="stumble">Stumble</label>
                <label class="error">{{ $errors->first('stumble') }}</label>
            </div>
              
              <div class="input-field col s6">
                {!!Form::url('tumbler', null,array('class'=>'validate','id'=>'tumbler'))!!}
                <label for="tumbler">Tumblr</label>
                <label class="error">{{ $errors->first('tumbler') }}</label>
            </div>
            
            


        </div>



    <div id="test3" class="col s12">
        <div class="file-field input-field s6">
            <div class="btn teal lighten-1">
                <span>Logo</span>
                {!!Form::file('logo', null,array('id'=>'photo'))!!}
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Logo">
            </div>
            <label class="error">{{ $errors->first('logo') }}</label>
        </div>

        <div class="file-field input-field s12">
            <div class="btn teal lighten-1">
                <span>About Us Slider</span>
                {!!Form::file('aboutusslider', null,array('id'=>'photo'))!!}
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="About Us Slider">
            </div>
            <label class="error">{{ $errors->first('aboutusslider') }}</label>
        </div>
        <div class="file-field input-field s12">
            <div class="btn teal lighten-1">
                <span>Contact Us Slider</span>
                {!!Form::file('contactusslider', null,array('id'=>'photo'))!!}
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Contact Us Slider">
            </div>
            <label class="error">{{ $errors->first('contactusslider') }}</label>
        </div>
        
          <div class="file-field input-field s12">
            <div class="btn teal lighten-1">
                <span>Portfolio Page Slider</span>
                {!!Form::file('portfolioslider', null,array('id'=>'photo'))!!}
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Portfolio Slider">
            </div>
            <label class="error">{{ $errors->first('portfolioslider') }}</label>
        </div>
        
        <div class="file-field input-field s12">
            <div class="btn teal lighten-1">
                <span>Social Background</span>
                {!!Form::file('socialphoto', null,array('id'=>'photo'))!!}
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Social Photo">
            </div>
            <label class="error">{{ $errors->first('socialphoto') }}</label>
        </div>



        <div class="file-field input-field s12">
            <div class="btn teal lighten-1">
                <span>Blog Slider</span>
                {!!Form::file('blogslider', null,array('id'=>'photo'))!!}
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Blog Slider">
            </div>
            <label class="error">{{ $errors->first('blogslider') }}</label>
        </div>

        <div class="file-field input-field s12">
            <div class="btn teal lighten-1">
                <span>Projects Slider</span>
                {!!Form::file('projectslider', null,array('id'=>'photo'))!!}
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Blog Slider">
            </div>
            <label class="error">{{ $errors->first('projectslider') }}</label>
        </div>









    </div>

        <div id="test4" class="col s12">
            <div class="input-field col s6">
                {!!Form::text('title', null,array('class'=>'validate','id'=>'title'))!!}
                <label for="title">Website Title</label>
                <label class="error">{{ $errors->first('title') }}</label>
            </div>


             <div class="input-field col s6">
                {!!Form::text('photo_alt', null,array('class'=>'validate','id'=>'photo_alt'))!!}
                <label for="photo_alt">Alt of logo </label>
                <label class="error">{{ $errors->first('photo_alt') }}</label>
            </div>

             <div class="input-field col s6">
                {!!Form::textarea('meta_description', null,array('class'=>'materialize-textarea','id'=>'meta_description'))!!}
                <label for="meta_description"> meta description</label>
            </div>


             <div class="input-field col s6">
                {!!Form::textarea('meta_keyword', null,array('class'=>'materialize-textarea','id'=>'meta_keyword'))!!}
                <label for="meta_keyword"> meta keyword</label>
            </div>
            
                <div class="input-field col s6">
                    {!!Form::textarea('meta_title', null,array('class'=>'materialize-textarea','id'=>'meta_title'))!!}
                    <label for="meta_title"> meta Title</label>
                </div>
                

          </div>

</div>
    <div class="panel-footer">                                                               
        {!! Form::submit('edit', array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
    </div>
    {!! Form::close() !!}  


    <script>
        CKEDITOR.replace('aboutus', {
            customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
        });
       


    </script>
    <!-- END BREADCRUMB -->   
    @stop

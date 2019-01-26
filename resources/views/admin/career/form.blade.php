<div class="row">


    <div class="file-field col s12">

        <div class="input-field col s6">
        {!!Form::text('job_title', null,array('class'=>'validate','id'=>'job_title'))!!}
        <label for="title">Career Title</label>
    </div>

    <div class="input-field col s12">
                    {!!Form::textarea('job_desc', null,array('class'=>'materialize-textarea','id'=>'job_desc'))!!}
                    <label for="job_dep">Details</label>
                </div>
    <div class="input-field col s6">
        {!!Form::text('job_dep', null,array('class'=>'validate','id'=>'job_dep'))!!}
        <label for="ar_title"> Department</label>
    </div>


    <div class="input-field col s6">
        {!!Form::text('location', null,array('class'=>'validate','id'=>'location'))!!}
        <label for="desc">Location</label>
    </div>
    <div class="input-field col s6">
        {!!Form::text('deadline', null,array('class'=>'validate','id'=>'deadline'))!!}
        <label for="ar_desc">Deadline</label>
    </div>
    
</div>
{!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
 <script>
    CKEDITOR.replace('job_desc', {
        customConfig: '{{ asset("admin-assets/ckeditor/config.js") }}'
    });
</script>

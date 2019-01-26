<!-- START FORM   -->
<div class="col-md-12">
    <div class="form-group col-md-6">
        <label class="control-label">NAme:</label> {{$messages->name}}<br/>


    </div>

    <div class="form-group col-md-12">
        <label class="control-label">email</label> {{$messages->email}}<br/>

    </div>

    <div class="form-group col-md-12">
        <label class="control-label">Subject</label> {{$messages->subject}}<br/>

    </div>

    <div class="form-group col-md-12">
        <label class="control-label">message</label> {{$messages->message}}<br/>

    </div>













    <script>

        CKEDITOR.replace('details_text', {
            customConfig: '{{ asset("adminstyle/ckeditor/config.js") }}'
        });
        CKEDITOR.replace('', {
            customConfig: '{{ asset("adminstyle/ckeditor/config.js") }}'
        });
    </script>
    <!-- END FORM --> 


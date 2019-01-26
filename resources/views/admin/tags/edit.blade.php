  
{!! Form:: model($section,array('method' => 'PATCH','action' => ['TagsController@update',$section->id], 'files'=>true,'class' => 'ajax-form-request')) !!}
<div class="message" style="padding-top: 20px">
</div><!-- div to display message after insert -->
@include ('admin.tags.form',['submitButton' => "Update"])
{!! Form::close() !!}  
 
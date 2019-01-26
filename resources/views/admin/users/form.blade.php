<div class="file-field col s6">
    <div class="btn teal lighten-1">
        <span>File</span>
        {!!Form::file('photo', null,array('id'=>'image'))!!}
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="User Image">
        <label class="error">{{ $errors->first('photo') }}</label>
    </div>
</div>
<div class="input-field col s6">
    <i class="material-icons prefix">email</i>
    {!!Form::email('email', null,array('class'=>'validate','id'=>'email'))!!}
    <label for="email">User Email</label>
    <label class="error">{{ $errors->first('email') }}</label>
</div>
<div class="input-field col s6">
    <i class="material-icons prefix">account_circle</i>
    {!!Form::text('name', null,array('class'=>'validate','id'=>'name'))!!}
    <label for="name">User First Name</label>
</div>
<div class="input-field col s6">
    <i class="material-icons prefix">account_circle</i>
    {!!Form::text('l_name', null,array('class'=>'validate','id'=>'l_name'))!!}
    <label for="name">User Second Name</label>
</div>
<div class="input-field col s6">
    <i class="material-icons prefix">lock</i>

    {!!Form::password('password', null,array('class'=>'validate','id'=>'password'))!!}
    <label for="password">Password</label>
    <label class="error">{{ $errors->first('password') }}</label>
</div>
<div class="input-field col s6">
    <i class="material-icons prefix">lock</i>
    {!!Form::password('password_confirmation', null,array('class'=>'validate','id'=>'password_confirmation'))!!}
    <label for="password_confirmation">Password Confirmation</label>
    <label class="error">{{ $errors->first('password_confirmation') }}</label>
</div>

<div class="input-field col s6">
    <i class="material-icons prefix">Permission</i>
    {!!Form::select('permission', $roles,null,array('class'=>'Materialize Select','id'=>'permession'))!!}
    <label for="name">User Permission</label>
</div>
<div class="input-field col s6">
    <i class="material-icons prefix">location_on</i>
    {!!Form::text('city', null,array('class'=>'validate','id'=>'city'))!!}
    <label for="city">User city</label>
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">location_on</i>
    {!!Form::text('address', null,array('class'=>'validate','id'=>'address'))!!}
    <label for="address">User Address</label>
</div>

<div class="input-field col s6">
    <i class="material-icons prefix">call</i>
    {!!Form::number('phone', null,array('class'=>'validate','id'=>'phone'))!!}
    <label for="phone">User Phone</label>
</div>
<div class="input-field col s6">
    @if(isset($user)&& $user->id !=1 ||  !isset($user) )
    {!!Form::select('permission1',array(1=>'Admin',0=>'Normal User'),null,array('class'=>'Materialize Select','id'=>'permission1'))!!}
    @endif

</div>



{!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}

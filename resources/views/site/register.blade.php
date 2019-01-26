

@extends('site.template.index')
@section('content')



<section class="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{            {trans('lan        g.register    ')}}</h2>
      </div    >
                            </div>
        </d            iv>

                                 <!-- /.contact-featur                        ed-area -->
                        <div class="contact-form-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                 <div class="message" >
                        </div>
                   

                                        {!! Form::open(array('url' =>'register','method'=>'POST','class'=>'form-horizontal login-form')) !!}
                                        <div class="heading">
                                            <h2>Login</h2>
                                            <h6>See What's going on today</h6>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                             <span style="color:red">{{ $errors->first('name') }}</span>
                                                    <input type="text" class="form-control" id="inputUsername" name='name' placeholder="Name" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                                 <div class="col-sm-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                             <span style="color:red">{{ $errors->first('email') }}</span>
                                                    <input type="text" class="form-control" id="inputUsername" name='email' placeholder="Email" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                                                  <span style="color:red">{{ $errors->first('password') }}
                                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" name='password'>
                                                </div>
                                            </div>
                                        </div>
                                          <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                                                  <span style="color:red">{{ $errors->first('password') }}
                                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password_confirmation" >
                                                </div>
                                            </div>
                                        </div>
                                        
                                         
                                        
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="submit" class="form-control" value="Register" >
                                            </div>
                                        </div>
                                        

                                        {!! Form::close() !!}
                                    </div>
                                    <div class="col-md-4">
                                        <div id="map" style="height: 370px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
                        <!-- /.contact -->




<!--        <section class="feedback">
        <div class="container">
                <div class="row">
                        <div class="col-xs-12">
                                <h2>Do you have a <span>Feedback ?</span></h2>
                                <p>Please inform us if you have face any problem or have any feedback about Floortec.</p>
                                <a type="button" class="btn btn-default" data-toggle="modal" data-target="#contact-sec-modal">Send Feedback</a>
                        </div>
                </div>
        </div>
        <div class="modal fade" id="contact-sec-modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <div class="container-fluid">
                                                <div class="row">
                                                        <div class="col-xs-12">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="modal-body">
                                        <div class="bg-grey">
                                                <div class="container">
                                                        <div class="row">
                                                                <div class="col-xs-12">
                                                                        <h3>Feedback</h3>
                                                                        <nav>
                                                                                <ol class="cd-multi-steps text-top">
                                                                                        <li class="visited"><a href="#0"><span>1</span></a></li>
                                                                                        <li class="visited"><a href="#1"><span>2</span></a></li>
                                                                                        <li class="current"><a href="#3"><span>3</span></a></li>
                                                                                        <li><a href="#4"><span>4</span></a></li>
                                                                                        <li><a href="#5"><span>5</span></a></li>
                                                                                        <li><a href="#6"><span>6</span></a></li>
                                                                                        <li><a href="#7"><span>7</span></a></li>
                                                                                        <li><a href="#8"><span>8</span></a></li>
                                                                                        <li><a href="#9"><span>9</span></a></li>
                                                                                        <li><a href="#10"><span>10</span></a></li>
                                                                                        <li><a href="#11"><span>11</span></a></li>
                                                                                        <li><a href="#12"><span>12</span></a></li>
                                                                                </ol>
                                                                        </nav>
                                                                        <p>Feedback<span>1 / 12</span></p>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="bg-white">
                                                <div class="container">
                                                        <div class="row">
                                                                <div class="col-xs-12">
                                                                        <form class="feedback-form">
                                                                                <div class="form-steps step_one active">
                                                                                        <div class="form-group">
                                                                                            <label for="name">Your Name</label>
                                                                                            <input type="text" class="form-control" placeholder="">
                                                                                        </div>
                                                                                        <a type="button" class="btn btn-default">continue</a>
                                                                                </div>
                                                                                <div class="form-steps step_two hidden">
                                                                                        <div class="form-group">
                                                                                            <label for="email">Your Email</label>
                                                                                            <input type="email" class="form-control" placeholder="">
                                                                                        </div>
                                                                                        <a type="button" class="btn btn-default">continue</a>
                                                                                </div>
                                                                                <div class="form-steps step_three hidden">
                                                                                        <label>How long has it been since you received our services?</label>
                                                                                        <ul>
                                                                                                <li class="active">Very satisfied</li>
                                                                                                <li>Satisfied</li>
                                                                                                <li>Neither satisfied nor dissatisfied</li>
                                                                                                <li>Dissatisfied</li>
                                                                                                <li>Very dissatisfied</li>
                                                                                        </ul>
                                                                                        <a type="button" class="btn btn-default">continue</a>
                                                                                </div>
                                                                                <div class="form-steps step_four hidden">
                                                                                        <label>Overall, are you satisfied with the services you received from Novochem?</label>
                                                                                        <ul>
                                                                                                <li>Very satisfied</li>
                                                                                                <li>Satisfied</li>
                                                                                                <li>Neither satisfied nor dissatisfied</li>
                                                                                                <li>Dissatisfied</li>
                                                                                                <li>Very dissatisfied</li>
                                                                                        </ul>
                                                                                        <a type="button" class="btn btn-default">continue</a>
                                                                                </div>
                                                                                <div class="form-steps step_five hidden">
                                                                                        <label>How do you feel about how Novochem dealt it's customers?</label>
                                                                                        <ul>
                                                                                                <li>Very satisfied</li>
                                                                                                <li>Satisfied</li>
                                                                                                <li>Neither satisfied nor dissatisfied</li>
                                                                                                <li>Dissatisfied</li>
                                                                                                <li>Very dissatisfied</li>
                                                                                        </ul>
                                                                                        <a type="button" class="btn btn-default">continue</a>
                                                                                </div>
                                                                                <div class="form-steps step_sex hidden">
                                                                                        <label>How did you feel about the communication process that you have been through with Novochem representatives?</label>
                                                                                        <ul>
                                                                                                <li>Very satisfied</li>
                                                                                                <li>Satisfied</li>
                                                                                                <li>Neither satisfied nor dissatisfied</li>
                                                                                                <li>Dissatisfied</li>
                                                                                                <li>Very dissatisfied</li>
                                                                                        </ul>
                                                                                        <a type="button" class="btn btn-default">continue</a>
                                                                                </div>
                                                                                <div class="form-steps step_seven hidden">
                                                                                        <label>Evaluate the after sales services and the technical support.</label>
                                                                                        <ul>
                                                                                                <li>Very satisfied</li>
                                                                                                <li>Satisfied</li>
                                                                                                <li>Neither satisfied nor dissatisfied</li>
                                                                                                <li>Dissatisfied</li>
                                                                                                <li>Very dissatisfied</li>
                                                                                        </ul>
                                                                                        <a type="button" class="btn btn-default">continue</a>
                                                                                </div>
                                                                                <div class="form-steps step_eight hidden">
                                                                                        <label>Are you satisfied with the delivery time?</label>
                                                                                        <ul>
                                                                                                <li>Very satisfied</li>
                                                                                                <li>Satisfied</li>
                                                                                                <li>Neither satisfied nor dissatisfied</li>
                                                                                                <li>Dissatisfied</li>
                                                                                                <li>Very dissatisfied</li>
                                                                                        </ul>
                                                                                        <a type="button" class="btn btn-default">continue</a>
                                                                                </div>
                                                                                <div class="form-steps step_nine hidden">
                                                                                        <label>Are you satisfied with the product quality?</label>
                                                                                        <ul>
                                                                                                <li>Very satisfied</li>
                                                                                                <li>Satisfied</li>
                                                                                                <li>Neither satisfied nor dissatisfied</li>
                                                                                                <li>Dissatisfied</li>
                                                                                                <li>Very dissatisfied</li>
                                                                                        </ul>
                                                                                        <a type="button" class="btn btn-default">continue</a>
                                                                                </div>
                                                                                <div class="form-steps step_ten hidden">
                                                                                        <label>What is your evaluation for your experience with Novochem?</label>
                                                                                        <ul>
                                                                                                <li>Very satisfied</li>
                                                                                                <li>Satisfied</li>
                                                                                                <li>Neither satisfied nor dissatisfied</li>
                                                                                                <li>Dissatisfied</li>
                                                                                                <li>Very dissatisfied</li>
                                                                                        </ul>
                                                                                        <a type="button" class="btn btn-default">continue</a>
                                                                                </div>
                                                                                <div class="form-steps step_eleven hidden">
                                                                                        <label>How strongly do you recommend Novochem to a friend?</label>
                                                                                        <ul>
                                                                                                <li>Strongly recommend</li>
                                                                                                <li>Recommend</li>
                                                                                                <li>Slightly recommend</li>
                                                                                                <li>Ask to avoid</li>
                                                                                                <li>Strongly ask to avoid</li>
                                                                                        </ul>
                                                                                        <a type="button" class="btn btn-default">continue</a>
                                                                                </div>
                                                                                <div class="form-steps step_twelve hidden">
                                                                                        <label>What do you hope to see at Novochem in the future?</label>
                                                                                        <textarea type="text" class="form-control" placeholder=""></textarea>
                                                                                        <a type="button" class="btn btn-default">continue</a>
                                                                                </div>
                                                                        </form>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
         /.contact-sec-modal 
</section>
 /.feedback -->


                        @endsection





@extends('site.template.index')
@section('content')

    <main id="main" role="main">
        <!-- page banner -->
        <header class="page-banner  ">
         <div class="stretch">
        <img alt="image description" src="{{asset('adminstyle/assets/images/gallery/'.$main->portfolioslider)}}">
        </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="holder">
                            <h1 class="heading text-uppercase"> Portfolio</h1>
                        </div>
                        <ul class="breadcrumbs list-inline">
                            <li><a href="{{url('/')}}">{{trans('lang.home')}}</a></li>
                            <li class="active"><a href="{{url('projects')}}">{{trans('lang.projects')}}</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- work section -->
        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
            <h4 class="modal-title" id="formModalLabel">Apply Now!</h4>
          </div>
          <div class="modal-body">
            {{-- <form id="demo-form" class="form-horizontal mb-lg ajax-form-request" action="{{ route('submitApplication') }}" method="post"> --}}
            
            <div class="form-group mt-lg">
              <label class="col-sm-3 control-label">Name</label>
              <div class="col-sm-9">
                <input type="text" name="name" class="form-control" placeholder="Type your name..." required/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Email</label>
              <div class="col-sm-9">
                <input type="email" name="email" class="form-control" placeholder="Type your email..." required/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label">phone</label>
              <div class="col-sm-9">
                <input type="phone" name="phone" class="form-control" placeholder="Type your PhoneL..." />
              </div>
            </div>
            <input type="hidden" name="job_title" value="">
            <div class="form-group">
              <label class="col-sm-3 control-label">Message</label>
              <div class="col-sm-9">
                <textarea rows="5" class="form-control" name="msg" placeholder="Tell Us about yourself..." required></textarea>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type="submit" value="Send Message" class="btn btn-primary" data-loading-text="Loading...">
            </div>

          
          </div>

        </div>
      </div>
    </div>
    </main>

@endsection
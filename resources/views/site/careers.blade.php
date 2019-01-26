@extends('site.template.index')
@section('content')

    <main id="main" role="main">
        <!-- page banner -->
        <header class="page-banner ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="holder">
                            <h1 class="heading text-uppercase">Careers</h1>
                        </div>
                        <ul class="breadcrumbs list-inline">
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">BLOG</a></li>
                            <li class="active"><a href="#">BLOG timeline default</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="stretch">
                <img src="{{asset('adminstyle/assets/images/gallery/'.$main->contactus)}}" alt="image description">
            </div>
        </header>
        <!-- love story -->
       <div class="container padding-top-100" style="z-index: -2147483648;">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <article class="features-col">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <!-- panel -->
              @if (count($careers)<1)
                <div class="" style="height:300px;">
                  <h3>There's No Oppened Vacancies For Now !</h3>
                </div>
              @else
              @foreach ($careers as $career)
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h3 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fa fa-cog"></i>{{ $career->job_title }}
                    </a>
                  </h3>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <p><strong>Location:</strong> {{ $career->location }} - <strong>Department:</strong> {{ $career->job_dep }} - <strong>Deadline:</strong> {{ $career->deadline }} </p>
                    <p> {{ $career->job_desc }} </p>
                    <p><a class="btn btn-primary mb-xl" data-toggle="modal" data-target="#formModal-{{$career->id}}">Apply Now</a></p>
                </div>
                </div>
              </div>

            @endforeach
            @endif
            </div>
          </article>
        </div>
      </div>
    </div>

    @foreach ($careers as $career)
    <!-- Modal -->
    <div class="modal fade" id="formModal-{{$career->id}}" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
            <h4 class="modal-title" id="formModalLabel">Apply Now!</h4>
          </div>
          <div class="modal-body">
            {{-- <form id="demo-form" class="form-horizontal mb-lg ajax-form-request" action="{{ route('submitApplication') }}" method="post"> --}}
            {!! Form::open(array('route' =>'sendcarrer','class' => 'ajax-form-request')) !!}
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
              <label class="col-sm-3 control-label">Subject</label>
              <div class="col-sm-9">
                <input type="subject" name="subject" class="form-control" placeholder="Type your subject..." />
              </div>
            </div>
            <input type="hidden" name="job_title" value="{{$career->job_title}}">
            <div class="form-group">
              <label class="col-sm-3 control-label">Message</label>
              <div class="col-sm-9">
                <textarea rows="5" class="form-control" name="message" placeholder="Tell Us about yourself..." required></textarea>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type="submit" value="Send Message" class="btn btn-primary" data-loading-text="Loading...">
            </div>

            {!! Form::close() !!}
          </div>

        </div>
      </div>
    </div>
    <!-- Modal -->
    @endforeach
    </main>

@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Main Functions</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div class="row text-center">
                    @if(Auth::user()->checkAdmin())
                      <div class="col-sm-4">
                          <a href="/management" style="text-decoration:none">
                                    <h4>Managment</h4>
                                    <img width="50px" src="{{asset('img/managment.png')}}"/>
                          </a>
                        </div>
                        @endif
                      <div class="col-sm-4">
                          <a href="/cashier" style="text-decoration:none">
                            <h4>Cashier</h4>
                            <img width="50px" src="{{asset('img/cashier-machine.png')}}"/>
                          </a>
                      </div>
                      @if(Auth::user()->checkAdmin())
                        <div class="col-sm-4">
                              <a href="/report" style="text-decoration:none">
                                <h4>Report</h4>
                                 <img width="50px" src="{{asset('img/report.png')}}"/>
                              </a>
                      </div>
                      @endif
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

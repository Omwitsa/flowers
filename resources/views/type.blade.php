@extends('shared.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-2"></div>
            <div class="col-xs-12 col-sm-8">
                <div class="card landing-card">
                    <div class="card-header">
                        <div class="text-center"><h3>{{Str::upper($subCategory)}} VARIETY</h3></div>
                        <div style="text-align: right">
                            <a style="color: #FFFFFF" href="/logout">logout <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="card-block">
                        @if ($subCategory === 'bronze')
                            
                        @endif

                        @if ($subCategory === 'silver')
                           
                        @endif

                        @if ($subCategory === 'spray')
                           
                        @endif
                    </div>
                    <div class="card-footer text-center">
                        <i>For immediate support call</i> &nbsp; 
                        <i class="fa fa-phone" aria-hidden="true"></i> <i>+254 730 779 200 </i> Or <br>
                        email <i class="fa fa-envelope" aria-hidden="true">&nbsp; flowersales@aaagrowers.co.ke</i><br><br>
                        AAA IT TEAM © 2024
                    </div>
                </div>
            </div>
        </div>
    </div>  
@stop

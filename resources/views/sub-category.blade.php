@extends('shared.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-2"></div>
            <div class="col-xs-12 col-sm-8">
                <div class="card landing-card">
                    <div class="card-header">
                        <div class="text-center"><h3>{{$category}} SUB-CATEGORY</h3></div>
                        <div style="text-align: right">
                            <a style="color: #FFFFFF" href="/logout">logout <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="card-block">
                        @if ($category === 'AAA ROSES')
                            <div class="row home-section">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="row type">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="/assets/images/flowers/singleflower.jpg" alt="Flowers" style="width:100%;">
                                        </div>
                                        <div class="col-xs-12 col-sm-6 text-center">
                                            <h1>Bronze</h1><br>
                                            <a href="/type/1__bronze" style="color: #FFFFFF" class="btn waves-effect waves-light btn-primary btn-outline-primary" wire:navigate>
                                                <i class="ti-shopping-cart"></i>View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="row type">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="/assets/images/flowers/mix-rose.jpg" alt="Flowers" style="width:100%;">
                                        </div>
                                        <div class="col-xs-12 col-sm-6 text-center">
                                            <h1>Silver</h1>
                                            <a href="/type/1__silver" style="color: #FFFFFF" class="btn waves-effect waves-light btn-primary btn-outline-primary" wire:navigate>
                                                <i class="ti-shopping-cart"></i>View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="row type">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="/assets/images/flowers/70.png" alt="Flowers" style="width:100%;">
                                        </div>
                                        <div class="col-xs-12 col-sm-6 text-center">
                                            <h1>Spray Roses</h1><br>
                                            <a href="/type/1__spray-roses" style="color: #FFFFFF" class="btn waves-effect waves-light btn-primary btn-outline-primary" wire:navigate>
                                                <i class="ti-shopping-cart"></i>View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($category === 'BELLISSIMA')
                            <div class="row home-section">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="row type">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="/assets/images/flowers/singleflower.jpg" alt="Flowers" style="width:100%;">
                                        </div>
                                        <div class="col-xs-12 col-sm-6 text-center">
                                            <h1>Platinum</h1><br>
                                            <a href="/type/2__platinum" style="color: #FFFFFF" class="btn waves-effect waves-light btn-primary btn-outline-primary" wire:navigate>
                                                <i class="ti-shopping-cart"></i>View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="row type">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="/assets/images/flowers/mix-rose.jpg" alt="Flowers" style="width:100%;">
                                        </div>
                                        <div class="col-xs-12 col-sm-6 text-center">
                                            <h1>Gold</h1>
                                            <a href="/type/2__gold" style="color: #FFFFFF" class="btn waves-effect waves-light btn-primary btn-outline-primary" wire:navigate>
                                                <i class="ti-shopping-cart"></i>View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="row type">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="/assets/images/flowers/70.png" alt="Flowers" style="width:100%;">
                                        </div>
                                        <div class="col-xs-12 col-sm-6 text-center">
                                            <h1>Gold+</h1><br>
                                            <a href="/type/2__gold+" style="color: #FFFFFF" class="btn waves-effect waves-light btn-primary btn-outline-primary" wire:navigate>
                                                <i class="ti-shopping-cart"></i>View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($category === 'WILD BLOOMS')
                            <div class="row home-section">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="row type">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="/assets/images/flowers/singleflower.jpg" alt="Flowers" style="width:100%;">
                                        </div>
                                        <div class="col-xs-12 col-sm-6 text-center">
                                            <h1>Chrysanthemums</h1><br>
                                            <a href="/type/3__chrysanthemums" style="color: #FFFFFF" class="btn waves-effect waves-light btn-primary btn-outline-primary" wire:navigate>
                                                <i class="ti-shopping-cart"></i>View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="row type">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="/assets/images/flowers/mix-rose.jpg" alt="Flowers" style="width:100%;">
                                        </div>
                                        <div class="col-xs-12 col-sm-6 text-center">
                                            <h1>Mathiolas</h1>
                                            <a href="/type/3__mathiolas" style="color: #FFFFFF" class="btn waves-effect waves-light btn-primary btn-outline-primary" wire:navigate>
                                                <i class="ti-shopping-cart"></i>View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="row type">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="/assets/images/flowers/70.png" alt="Flowers" style="width:100%;">
                                        </div>
                                        <div class="col-xs-12 col-sm-6 text-center">
                                            <h1>Carnations</h1><br>
                                            <a href="/type/3__carnations" style="color: #FFFFFF" class="btn waves-effect waves-light btn-primary btn-outline-primary" wire:navigate>
                                                <i class="ti-shopping-cart"></i>View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="row type">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="/assets/images/flowers/70.png" alt="Flowers" style="width:100%;">
                                        </div>
                                        <div class="col-xs-12 col-sm-6 text-center">
                                            <h1>Limonium</h1><br>
                                            <a href="#" style="color: #FFFFFF" class="btn waves-effect waves-light btn-info" wire:navigate>
                                                COMING SOON</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="row type">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="/assets/images/flowers/70.png" alt="Flowers" style="width:100%;">
                                        </div>
                                        <div class="col-xs-12 col-sm-6 text-center">
                                            <h1>Gemini</h1><br>
                                            <a href="#" style="color: #FFFFFF" class="btn waves-effect waves-light btn-info" wire:navigate>
                                            COMING SOON</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="row type">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="/assets/images/flowers/70.png" alt="Flowers" style="width:100%;">
                                        </div>
                                        <div class="col-xs-12 col-sm-6 text-center">
                                            <h1>Statice</h1><br>
                                            <a href="#" style="color: #FFFFFF" class="btn waves-effect waves-light btn-info" wire:navigate>
                                            COMING SOON</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($category === 'MIXED BOX')
                            <div class="row home-section">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="row type">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="/assets/images/flowers/singleflower.jpg" alt="Flowers" style="width:100%;">
                                        </div>
                                        <div class="col-xs-12 col-sm-6 text-center">
                                            <h1>AAA <br> ROSES</h1><br>
                                            <a href="/type/4__aaa-roses" style="color: #FFFFFF" class="btn waves-effect waves-light btn-primary btn-outline-primary" wire:navigate>
                                                <i class="ti-shopping-cart"></i>View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="row type">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="/assets/images/flowers/mix-rose.jpg" alt="Flowers" style="width:100%;">
                                        </div>
                                        <div class="col-xs-12 col-sm-6 text-center">
                                            <h1>BELLISSIMA</h1>
                                            <a href="/type/4__bellissima" style="color: #FFFFFF" class="btn waves-effect waves-light btn-primary btn-outline-primary" wire:navigate>
                                                <i class="ti-shopping-cart"></i>View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="row type">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="/assets/images/flowers/70.png" alt="Flowers" style="width:100%;">
                                        </div>
                                        <div class="col-xs-12 col-sm-6 text-center">
                                            <h1>WILD BLOOMS</h1><br>
                                            <a href="/type/4__wild-blooms" style="color: #FFFFFF" class="btn waves-effect waves-light btn-primary btn-outline-primary" wire:navigate>
                                                <i class="ti-shopping-cart"></i>View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="row type">
                                        <div class="col-xs-12 col-sm-6">
                                            <img src="/assets/images/flowers/70.png" alt="Flowers" style="width:100%;">
                                        </div>
                                        <div class="col-xs-12 col-sm-6 text-center">
                                            <h1>BOUQUET</h1><br>
                                            <a href="/type/4__bouquet" style="color: #FFFFFF" class="btn waves-effect waves-light btn-primary btn-outline-primary" wire:navigate>
                                                <i class="ti-shopping-cart"></i>View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

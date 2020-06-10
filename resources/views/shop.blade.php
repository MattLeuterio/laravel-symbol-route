@extends('layouts.main')

@section('content')

    <div class="app">
        {{-- Include Header --}}
        @include('partials.template.header')
        <main class="main-content">

            <section id="computers" class="main-section container">
                <div class="row">

                    <!-- Computers-->

                    <div class="card" style="width: 520px">
                        <div class="row product-row no-gutters">
                            <div class="col-md-5">
                                <img src="" class="card-img" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title"> </h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            ID:
                                        </li>
                                        <li class="list-group-item">
                                            Color: 
                                        </li>
                                        <li class="list-group-item">
                                            Brand: 
                                        </li>
                                        <li class="list-group-item text-success text-right">

                                        </li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">
                                    
                                    </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="software" class="main-section container">
                <div class="row">

                     <!-- Softwares -->
                

                    <div class="card" style="width: 520px">
                        <div class="row product-row no-gutters">
                            <div class="col-md-5">
                                <img src="" class="card-img" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            ID: 
                                        </li>
                                        <li class="list-group-item">
                                            House:
                                        </li>
                                        <li class="list-group-item">
                                            OS: 
                                        </li>
                                        <li class="list-group-item text-success text-right">
                                        
                                        </li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">
                                    
                                    </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </section>

        </main>
      
@endsection
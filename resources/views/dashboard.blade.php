@extends('layouts.main')

@section('content')
    <div id="dash-app" class="app">
        {{-- Include Header --}}
        @include('partials.template.header-dash')
        <main class="main-content d-flex">

            <div class="dash-sidebar">
                <h2>DASHBOARD</h2>
                <ul class="list-group list-group-flush mt-5">
                    <li class="list-group-item admin">
                        <a href="#">Administrative</a>
                    </li>
                    <li class="list-group-item retail">
                        <a href="#">Retail</a>
                    </li>
                </ul>
            </div>

            <div class="dash-main d-flex justify-content-center">
                <div class="container-table">

                    <!-- Administrative Table -->
                    <table id="administrative" class="table table-hover active">
                        <thead>
                          <tr class="text-primary">
                            <th scope="col">Sector</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Email</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Office Location</th>
                          </tr>
                        </thead>
                        <tbody>

                       

                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>

                       
                        </tbody>
                    </table>

                    <!-- Retail Table -->
                    <table id="retail" class="table table-hover">
                        <thead>
                          <tr class="text-primary">
                            <th scope="col">Sector</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Email</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Shop Location</th>
                          </tr>
                        </thead>
                        <tbody>



                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>


                        </tbody>
                    </table>
                </div>
            </div>
            
       
        </main>
@endsection
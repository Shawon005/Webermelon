@extends('master')
@section('content')
<style>
    a{
        text-decoration: none !important;
        color: black !important;
    }
</style>
<section>
    <div class="container">
        <div>
            <div class="row mt-4">
                <div class="card col-3 ">
                    <div class="card-body text-center">
                        <a class ="a_tex"href="{{route('transaction.show','jan')}}">
                            <h4 class="card-title">January</h4>
                            <p>Show Transaction of January</p>
                        </a>
                    </div>
                </div>
                <div class="card col-3 ">
                    <div class="card-body text-center">
                        <a class ="a_tex"href="{{route('transaction.show','fab')}}">
                            <h4 class="card-title">February</h4>
                            <p>Show Transaction of February</p>
                        </a>
                    </div>
                </div>
                <div class="card col-3">
                    <div class="card-body text-center">
                        <a class ="a_tex"href="{{route('transaction.show','mar')}}">
                            <h4 class="card-title">March</h4>
                            <p>Show Transaction of March</p>
                        </a>
                    </div>
                </div>
                <div class="card col-3 ">
                    <div class="card-body text-center">
                        <a class ="a_tex"href="{{route('transaction.show','apr')}}">
                            <h4 class="card-title">April</h4>
                            <p>Show Transaction of April</p>
                        </a>
                    </div>
                </div>
                <div class="card col-3 ">
                    <div class="card-body text-center">
                        <a class ="a_tex"href="{{route('transaction.show','may')}}">
                            <h4 class="card-title">May</h4>
                            <p>Show Transaction of May</p>
                        </a>
                    </div>
                </div>
                <div class="card col-3 ">
                    <div class="card-body text-center">
                        <a class ="a_tex"href="{{route('transaction.show','jun')}}">
                            <h4 class="card-title">June</h4>
                            <p>Show Transaction of June</p>
                        </a>
                    </div>
                </div>
                <div class="card col-3 ">
                    <div class="card-body text-center">
                        <a class ="a_tex"href="{{route('transaction.show','juy')}}">
                            <h4 class="card-title">July</h4>
                            <p>Show Transaction of July</p>
                        </a>
                    </div>
                </div>
                <div class="card col-3 ">
                    <div class="card-body text-center">
                        <a class ="a_tex"href="{{route('transaction.show','aug')}}">
                            <h4 class="card-title">August</h4>
                            <p>Show Transaction of August</p>
                        </a>
                    </div>
                </div>
                <div class="card col-3">
                    <div class="card-body text-center">
                        <a class ="a_tex"href="{{route('transaction.show','sep')}}">
                            <h4 class="card-title">September</h4>
                            <p>Show Transaction of September</p>
                        </a>
                    </div>
                </div>
                <div class="card col-3 ">
                    <div class="card-body text-center">
                        <a class ="a_tex" href="{{route('transaction.show','oct')}}">
                            <h4 class="card-title">October</h4>
                            <p>Show Transaction of October</p>
                        </a>
                    </div>
                </div>
                <div class="card col-3 ">
                    <div class="card-body text-center">
                        <a class ="a_tex"href="{{route('transaction.show','nov')}}">
                            <h4 class="card-title">November</h4>
                            <p>Show Transaction of November</p>
                        </a>
                    </div>
                </div>
                <div class="card col-3 ">
                    <div class="card-body text-center">
                        <a class ="a_tex"href="{{route('transaction.show','dec')}}">
                            <h4 class="card-title">December</h4>
                            <p>Show Transaction of December</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 mb-3">
                <h2><a href="{{route('transaction.index')}}">Transaction Table</a></h2>
            </div>
            <table class=" table table-dark table-striped-columns table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Profits</th>
                    <th scope="col">Losees</th>
                    <th scope="col">Funds</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trans as $id=>$tran)
                    <tr>
                    <th>{{$id+1}}</th>
                    <td>{{$tran->amount}}</td>
                    <td>{{$tran->profits}}</td>
                    <td>{{$tran->losses}}</td>
                    <td>{{$tran->funds}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection

<!-- @if(session('message'))
    <div class="alert alert-success">
        <span class="close" data-dismiss="alert"></span>
        <strong>{{session('message')}}</strong>
    </div>
@endif -->

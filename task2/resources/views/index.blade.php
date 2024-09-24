@extends('master')
@section('content')
<section>
    <div class="container">
        <div class="center">
            <div class="mt-5">
                <h2>Transaction </h2>
            </div>
            <form action="{{route('transaction.store')}}"method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-label">Amount</label>
                    <input type="text" class="form-control" id="exampleInputEmail2"name="amount" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Funds</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"name="funds" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Profits</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="profits">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label">losses</label>
                    <input type="text" class="form-control" id="exampleInputPassword2" name="losses">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection

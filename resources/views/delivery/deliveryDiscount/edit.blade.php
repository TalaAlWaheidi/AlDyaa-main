@extends('layouts.app')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Discount</h4>
                <form class="forms-sample" method="POST" action="{{ route('delivery.discounts.update', $discount->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputName1">Products Amount</label>
                        <input type="number"
                               step=".01"
                               class="form-control @error('amount') is-invalid @enderror "
                               name="amount"
                               id="exampleInputName1"
                               placeholder="Products Amount"
                               value="{{ $discount->products_amount }}"
                        >
                        @error('amount')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Discount Percentage</label>
                        <input type="text"
                               class="form-control @error('percentage') is-invalid @enderror"
                               name="percentage" id="exampleInputEmail3"
                               value="{{ $discount->discount_percentage }}"
                               placeholder="Discount Percentage"
                        >
                        @error('percentage')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('delivery.discounts.all') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>

@endsection

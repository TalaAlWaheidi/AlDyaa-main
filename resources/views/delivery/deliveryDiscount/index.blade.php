@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body ">
            <span class="card-title">Delivery Discounts Table</span>
            <div class="rtl">
                <a href="{{ route('delivery.discounts.create') }}"
                   class="w-auto btn btn-outline-success btn-rounded btn-fw top-right mb-3">Create New Discount</a>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Amount</th>
                                <th>Discount Percentage</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($discounts as $discount)
                                <tr>
                                    <td> {{ $discount->id  }} </td>
                                    <td> {{ $discount->products_amount  }} </td>
                                    <td> {{ $discount->discount_percentage  }} %</td>
                                    <td class="d-inline-flex">
                                        <x-delivery-discount-component
                                            id="{{ $discount->id  }}"
                                            amount="{{ $discount->products_amount  }}"
                                            percentage="{{ $discount->discount_percentage  }}%"
                                        ></x-delivery-discount-component>
                                        <a href="{{ route('delivery.discounts.edit', $discount->id) }}"
                                           class="btn btn-outline-info">Edit</a>
                                        <button class="btn btn-outline-danger" onclick="event.preventDefault();
                                            document.getElementById('delete-form-{{ $discount->id }}').submit();">
                                            delete
                                            <form id="delete-form-{{$discount->id}}"
                                                  action="{{ route('delivery.discounts.delete', $discount->id) }}"
                                                  method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{ $discount->id }}">
                                            </form>
                                        </button>
                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('melody/js/data-table.js')}}"></script>

@endsection

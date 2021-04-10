@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body ">
            <span class="card-title">Payment Methods Table</span>
            <div class="rtl">
                <a href="{{ route('setups.payment.create') }}"
                   class="w-auto btn btn-outline-success btn-rounded btn-fw top-right mb-3">Create New Payment</a>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Arabic Name</th>
                                <th>English Name</th>
                                <th>Active</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($payments as $payment)
                                <tr>
                                    <td> {{ $payment->id  }} </td>
                                    <td>
                                        @if($payment->image)
                                            <img src="{{ $payment->image  }}" alt="---">
                                        @else
                                        ------
                                        @endif

                                    </td>
                                    <td> {{ $payment->name_ar  }} </td>
                                    <td> {{ $payment->name_en ?? '------' }} </td>
                                    <td>
                                        @if($payment->active == 1 )
                                            <label class="badge badge-success badge-pill">Active</label>
                                        @else
                                            <label class="badge badge-danger badge-pill">Not Active</label>
                                        @endif


                                    </td>
                                    <td>
                                        <view-category-modal
                                            :category-id="{{ json_encode($payment->id)  }}"
                                            :name-ar="{{ json_encode($payment->name_ar) }}"
                                            :name-en="{{ json_encode($payment->name_en) }}"
                                            :active="{{ json_encode($payment->active) }}"
                                            :desc-ar="{{ json_encode($payment->description_ar) }}"
                                            :desc-en="{{  json_encode($payment->description_en )}}"
                                            :data-target="{{ json_encode('#exampleModal-'.$payment->id) }}"
                                            :modal-id="{{ json_encode('exampleModal-'.$payment->id) }}"
                                        ></view-category-modal>

                                        <a href="{{ route('setups.payment.edit', $payment->id) }}" class="btn btn-outline-info">Edit</a>
                                        <button class="btn btn-outline-danger" onclick="event.preventDefault();
                                            document.getElementById('delete-form-{{ $payment->id }}').submit();">
                                            delete
                                            <form id="delete-form-{{$payment->id}}" action="{{ route('setups.payment.delete', $payment->id) }}" method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{ $payment->id }}">
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

@extends('layouts.app')
@section('content')
    <div class="card">

        <div class="card-body ">
            <h4 class="card-title">App Configs Table</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>Arabic Name</th>
                                <th>English Name</th>
                                <th>Value</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($configs as $config)
                                <tr>
                                    <td> {{ $config->name_ar  }} </td>
                                    <td> {{ $config->name_en ?? '------' }} </td>
                                    <td> {{ $config->value }} </td>
                                    <td>
                                        <view-app-config-modal
                                            class="d-inline-flex"
                                            :config-id="{{ json_encode($config->id)  }}"
                                            :name-ar="{{ json_encode($config->name_ar) }}"
                                            :name-en="{{ json_encode($config->name_en) }}"
                                            :config-value="{{ json_encode($config->value) }}"
                                            :data-target="{{ json_encode('#exampleModal-'.$config->id) }}"
                                            :modal-id="{{ json_encode('exampleModal-'.$config->id) }}"
                                        ></view-app-config-modal>

                                        <a href="{{ route('setups.app-config.edit', $config->id) }}" class="btn btn-outline-info">Edit</a>

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

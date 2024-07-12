@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.datapelanggans.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.datapelanggans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.datapelanggans.fields.id') }}
                        </th>
                        <td>
                            {{ $datapelanggans->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.datapelanggans.fields.nama') }}
                        </th>
                        <td>
                            {{ $datapelanggans->nama }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.datapelanggans.fields.alamat') }}
                        </th>
                        <td>
                            {{ $datapelanggans->alamat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.datapelanggans.fields.nomor_hp') }}
                        </th>
                        <td>
                            {{ $datapelanggans->nomor_hp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.datapelanggans.fields.product_id') }}
                        </th>
                        <td>
                            {{ $datapelanggans->product_id }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.datapelanggans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

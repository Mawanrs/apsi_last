@extends('layouts.admin')
@section('content')
@can('datapelanggans_create')
    <div class="row mb-2">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.datapelanggans.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.datapelanggans.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.datapelanggans.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-datapelanggans">
                <thead>
                    <tr>
                        <th width="10"></th>
                        <th>{{ trans('cruds.datapelanggans.fields.id') }}</th>
                        <th>{{ trans('cruds.datapelanggans.fields.nama') }}</th>
                        <th>{{ trans('cruds.datapelanggans.fields.alamat') }}</th>
                        <th>{{ trans('cruds.datapelanggans.fields.nomor_hp') }}</th>
                        <th>{{ trans('cruds.datapelanggans.fields.product_id') }}</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datapelanggans as $key => $datapelanggan)
                        <tr data-entry-id="{{ $datapelanggan->id }}">
                            <td></td>
                            <td>{{ $datapelanggan->id ?? '' }}</td>
                            <td>{{ $datapelanggan->nama ?? '' }}</td>
                            <td>{{ $datapelanggan->alamat ?? '' }}</td>
                            <td>{{ $datapelanggan->nomor_hp ?? '' }}</td>
                            <td>{{ $datapelanggan->product_id ?? '' }}</td>
                            <td>
                                @can('datapelanggans_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.datapelanggans.show', $datapelanggan->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('datapelanggans_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.datapelanggans.edit', $datapelanggan->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('datapelanggans_delete')
                                    <form action="{{ route('admin.datapelanggans.destroy', $datapelanggan->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.are_you_sure') }}');" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@section('scripts')
@parent
{{-- <script>
    $(function () {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
        @can('datapelanggans_delete')
        let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
        let deleteButton = {
            text: deleteButtonTrans,
            url: "{{ route('admin.datapelanggans.massDestroy') }}",
            className: 'btn-danger',
            action: function (e, dt, node, config) {
                var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
                    return $(entry).data('entry-id')
                });

                if (ids.length === 0) {
                    alert('{{ trans('global.datatables.zero_selected') }}')

                    return
                }

                if (confirm('{{ trans('global.are_you_sure') }}')) {
                    $.ajax({
                        headers: {'x-csrf-token': _token},
                        method: 'POST',
                        url: config.url,
                        data: { ids: ids, _method: 'DELETE' }
                    })
                    .done(function () { location.reload() })
                }
            }
        }
        dtButtons.push(deleteButton)
        @endcan

        $.extend(true, $.fn.dataTable.defaults, {
            order: [[ 1, 'desc' ]],
            pageLength: 100,
        });
        $('.datatable-datapelanggans:not(.ajaxTable)').DataTable({ buttons: dtButtons })
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });
    })
</script> --}}
@endsection

@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.datapelanggans.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.datapelanggans.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">{{ trans('cruds.datapelanggans.fields.nama') }}</label>
                <input class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" type="text" name="nama" id="nama" value="{{ old('nama', '') }}">
                @if($errors->has('nama'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.datapelanggans.fields.nama_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="alamat">{{ trans('cruds.datapelanggans.fields.alamat') }}</label>
                <input class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}" type="text" name="alamat" id="alamat" value="{{ old('alamat', '') }}">
                @if($errors->has('alamat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('alamat') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.datapelanggans.fields.alamat_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nomor_hp">{{ trans('cruds.datapelanggans.fields.nomor_hp') }}</label>
                <input class="form-control {{ $errors->has('nomor_hp') ? 'is-invalid' : '' }}" type="text" name="nomor_hp" id="nomor_hp" value="{{ old('nomor_hp', '') }}">
                @if($errors->has('nomor_hp'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nomor_hp') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.datapelanggans.fields.nomor_hp_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product_id">{{ trans('cruds.datapelanggans.fields.product_id') }}</label>
                <input class="form-control {{ $errors->has('product_id') ? 'is-invalid' : '' }}" type="number" name="product_id" id="product_id" value="{{ old('product_id', '') }}">
                @if($errors->has('product_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product_id') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.datapelanggans.fields.product_id_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('scripts')
{{-- <script>
    Dropzone.options.imageDropzone = {
    // Dropzone configuration script if needed
}
</script> --}}
@endsection

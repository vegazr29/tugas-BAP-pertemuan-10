<div class="form-group {{ $errors->has('kode_matakuliah') ? 'has-error' : ''}}">
    <label for="kode_matakuliah" class="control-label">{{ 'Kode Matakuliah' }}</label>
    <input class="form-control" name="kode_matakuliah" type="text" id="kode_matakuliah" value="{{ isset($matakuliah->kode_matakuliah) ? $matakuliah->kode_matakuliah : ''}}" >
    {!! $errors->first('kode_matakuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_matakuliah') ? 'has-error' : ''}}">
    <label for="nama_matakuliah" class="control-label">{{ 'Nama Matakuliah' }}</label>
    <input class="form-control" name="nama_matakuliah" type="text" id="nama_matakuliah" value="{{ isset($matakuliah->nama_matakuliah) ? $matakuliah->nama_matakuliah : ''}}" >
    {!! $errors->first('nama_matakuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sks') ? 'has-error' : ''}}">
    <label for="sks" class="control-label">{{ 'Sks' }}</label>
    <input class="form-control" name="sks" type="number" id="sks" value="{{ isset($matakuliah->sks) ? $matakuliah->sks : ''}}" >
    {!! $errors->first('sks', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

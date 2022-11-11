<div class="form-group {{ $errors->has('DosenID') ? 'has-error' : ''}}">
    <label for="DosenID" class="control-label">{{ 'Dosenid' }}</label>
    <input class="form-control" name="DosenID" type="text" id="DosenID" value="{{ isset($dosen->DosenID) ? $dosen->DosenID : ''}}" >
    {!! $errors->first('DosenID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_dosen') ? 'has-error' : ''}}">
    <label for="nama_dosen" class="control-label">{{ 'Nama Dosen' }}</label>
    <input class="form-control" name="nama_dosen" type="text" id="nama_dosen" value="{{ isset($dosen->nama_dosen) ? $dosen->nama_dosen : ''}}" >
    {!! $errors->first('nama_dosen', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_matakuliah') ? 'has-error' : ''}}">
    <label for="nama_matakuliah" class="control-label">{{ 'Nama Matakuliah' }}</label>
    <input class="form-control" name="nama_matakuliah" type="text" id="nama_matakuliah" value="{{ isset($dosen->nama_matakuliah) ? $dosen->nama_matakuliah : ''}}" >
    {!! $errors->first('nama_matakuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kode_matakuliah') ? 'has-error' : ''}}">
    <label for="kode_matakuliah" class="control-label">{{ 'Kode Matakuliah' }}</label>
    <input class="form-control" name="kode_matakuliah" type="text" id="kode_matakuliah" value="{{ isset($dosen->kode_matakuliah) ? $dosen->kode_matakuliah : ''}}" >
    {!! $errors->first('kode_matakuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tahun_ajar') ? 'has-error' : ''}}">
    <label for="tahun_ajar" class="control-label">{{ 'Tahun Ajar' }}</label>
    <input class="form-control" name="tahun_ajar" type="text" id="tahun_ajar" value="{{ isset($dosen->tahun_ajar) ? $dosen->tahun_ajar : ''}}" >
    {!! $errors->first('tahun_ajar', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

<div class="form-group {{ $errors->has('StudentID') ? 'has-error' : ''}}">
    <label for="StudentID" class="control-label">{{ 'Studentid' }}</label>
    <input class="form-control" name="StudentID" type="text" id="StudentID" value="{{ isset($mahasiswa->StudentID) ? $mahasiswa->StudentID : ''}}" >
    {!! $errors->first('StudentID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Nama') ? 'has-error' : ''}}">
    <label for="Nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="Nama" type="text" id="Nama" value="{{ isset($mahasiswa->Nama) ? $mahasiswa->Nama : ''}}" >
    {!! $errors->first('Nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Jurusan') ? 'has-error' : ''}}">
    <label for="Jurusan" class="control-label">{{ 'Jurusan' }}</label>
    <input class="form-control" name="Jurusan" type="text" id="Jurusan" value="{{ isset($mahasiswa->Jurusan) ? $mahasiswa->Jurusan : ''}}" >
    {!! $errors->first('Jurusan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Tahun_masuk') ? 'has-error' : ''}}">
    <label for="Tahun_masuk" class="control-label">{{ 'Tahun Masuk' }}</label>
    <input class="form-control" name="Tahun_masuk" type="text" id="Tahun_masuk" value="{{ isset($mahasiswa->Tahun_masuk) ? $mahasiswa->Tahun_masuk : ''}}" >
    {!! $errors->first('Tahun_masuk', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

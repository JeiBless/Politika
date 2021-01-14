<div class="row">
    <div class="col-md-6">
        <div class="form-group">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="bmd-label-floating">Escribe una entidad</label>
            <input type="text" class="form-control" name="name" value="{{ isset($political_party->name) ? $political_party->name : '' }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="bmd-label-floating">Escribe sus iniciales</label>
            <input type="text" class="form-control" name="initials" value="{{ isset($political_party->initials) ? $political_party->initials : '' }}">
        </div>
    </div>
</div>


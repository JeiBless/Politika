<div class="row">
    <div class="col-md-6">
        <div class="form-group">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="bmd-label-floating">Nombre delito</label>
            <input type="text" class="form-control" name="name" value="{{ isset($crime->name) ? $crime->name : '' }}">
        </div>
    </div>
    <div class="col-md-6">
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Descripción</label>
            <div class="form-group">
                <label class="bmd-label-floating"> Especifica el delito, con la ley a la que esta vinculado.</label>
                <textarea class="form-control" rows="5" name="description">{{ isset($crime->description) ? $crime->description : '' }}</textarea>
            </div>
        </div>
    </div>
</div>


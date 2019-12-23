<div class="form-row">
    <div class="form-group col-md-6">
        <label for="nom">Nom</label>
        <input name="nom" type="text" class="form-control" id="nom" value="{{ isset($producte) ? $producte->nom : '' }}" required>
    </div>
    <div class="form-group col-md-6">
        <label for="referencia">Referència</label>
        <input name="referencia" type="text" class="form-control" id="referencia" value="{{ isset($producte) ? $producte->referencia : '' }}" required>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="preu">Preu</label>
        <input name="preu" type="number" step="0.01" class="form-control" id="preu" value="{{ isset($producte) ? $producte->preu : '' }}" required>
    </div>
</div>
<div class="form-group form-check">
    <input name="actiu" type="checkbox" class="form-check-input" id="actiu" {{ isset($producte) && $producte->actiu === 1 ? 'checked' : '' }}>
    <label class="form-check-label" for="actiu">Actiu</label>
</div>

<div class="text-center">
    <input type="submit" class="btn btn-primary" value="{{ $submit }}">  
</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    <label>Nom</label>
    <input type="text"  name="display_name" class="form-control"  placeholder="Nom de la permission">
</div>
<div class="form-group">
    <label>Code</label>
        <input type="text" name="name" class="form-control"  placeholder="Code de la permission">
</div>

<div class="form-group">
    <label>Description</label>
        <textarea rows="3" name="description" class="form-control"  placeholder="Description de la permission"></textarea>
</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
    <label>Nom</label>

    <input type="text"  name="display_name" class="form-control"  placeholder="Nom du rôle">

</div>
<div class="form-group">
    <label>Code</label>
        <input type="text" name="name" class="form-control"  placeholder="Code du rôle">
</div>

<div class="form-group">
    <label>Description</label>
        <textarea rows="3"  name="description" class="form-control"  placeholder="Description du rôle"></textarea>
</div>

<div class="form-group">
    <label>Permissions</label>
    <select class="form-control select2" name="permissions[]" multiple="multiple" data-placeholder="Ajouter des permissions" style="width: 100%;">
    </select>
</div>
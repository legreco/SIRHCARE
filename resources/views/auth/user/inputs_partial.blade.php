<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="form-group">
    <label>Nom</label>
    <input type="text"  name="name" class="form-control"  placeholder="Nom complet">
</div>
<div class="form-group">
    <label>Email</label>
        <input type="text" name="email" class="form-control"  placeholder="Email">
</div>
<div class="form-group">
    <label>Mot de passe</label>
    <input type="password" name="password" class="form-control"  placeholder="Entrer votre mot de passe">
</div>
<div class="form-group">
    <label>Confirmer mot de passe</label>
    <input type="password" name="password_confirmation" class="form-control"  placeholder="Confirmer votre mot de passe">
</div>

<div class="form-group">
    <label>Roles</label>
    <select class="form-control select2" name="roles[]" multiple="multiple" data-placeholder="Selectionnez des roles" style="width: 100%;">
    </select>
</div>

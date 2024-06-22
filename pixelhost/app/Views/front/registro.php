<form class="row g-3">
<div class="col-md-4">
    <label for="validationServer01" class="form-label">Nombre</label>
    <input type="text" class="form-control is-valid" id="validationServer01" value="" required>
    <div class="valid-feedback">
    Se ve bien!
    </div>
</div>
<div class="col-md-4">
    <label for="validationServer02" class="form-label">Apellido</label>
    <input type="text" class="form-control is-valid" id="validationServer02" value="" required>
    <div class="valid-feedback">
    Se ve bien!
    </div>
</div>
<div class="col-md-4">
    <label for="validationServerUsername" class="form-label">Usuario</label>
    <div class="input-group has-validation">
    <span class="input-group-text" id="inputGroupPrepend3">@</span>
    <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
    <div id="validationServerUsernameFeedback" class="invalid-feedback">
        Por favor, elija un nombre de usuario.
    </div>
    </div>
</div>
<div class="col-md-6">
    <label for="validationServer03" class="form-label">Ciudad</label>
    <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
    <div id="validationServer03Feedback" class="invalid-feedback">
    Proporcione una ciudad válida.
    </div>
</div>
<div class="col-md-3">
    <label for="validationServer04" class="form-label">Provincia</label>
    <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
    <option selected disabled value="">Elegir...</option>
    <option>...</option>
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
    Seleccione una provincia válida.
    </div>
</div>
<div class="col-md-3">
    <label for="validationServer05" class="form-label">Codigo postal</label>
    <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
    <div id="validationServer05Feedback" class="invalid-feedback">
    Proporcione un código postal válido.
    </div>
</div>
<div class="col-12">
    <div class="form-check">
    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
    <label class="form-check-label" for="invalidCheck3">
        Aceptar términos y condiciones
    </label>
    <div id="invalidCheck3Feedback" class="invalid-feedback">
        Debes aceptar antes de enviar.
    </div>
    </div>
</div>
<div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar formulario</button>
</div>
</form>
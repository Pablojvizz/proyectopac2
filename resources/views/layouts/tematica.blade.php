<form role="form" method="POST" action="{{ url('tematicas') }}" >
  {{ csrf_field() }}
  <div class="form-group row">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">

      @if($errors->has('nombre'))
        <span style="color:red">{{ $errors->first('nombre') }}</span>
      @endif

    </div>
  </div>
  <div class="form-group row">
    <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion"></textarea>

      @if($errors->has('descripcion'))
        <span style="color:red">{{ $errors->first('descripcion') }}</span>
      @endif

    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">-Crear-</button>
    </div>
  </div>
</form>
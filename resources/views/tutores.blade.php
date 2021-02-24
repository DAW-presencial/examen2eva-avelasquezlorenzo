@extends('base')

@section('main')
<form method="post">
    @csrf
    <fieldset class="border mt-5 p-2">
        <legend>Tutores</legend>
        <div class="row align-items-start">
            <div class="mb-3 col-6 form-group">
                <label for="enterprise" class="form-label">Empresa</label>
                <input class="form-control" name="enterprise" value="{{old('enterprise')}}" id="enterprise">
            </div>

            <div class="col-3 form-group">
                <label for="documentType">Tipo de documento</label>
                <select class="form-control" id="documentType">
                    <option value="nie" @if (old('status') === 'nie') selected @endif>NIE</option>
                    <option value="dni" @if (old('status') === 'dni') selected @endif>DNI</option>
                    <option value="otros" @if (old('status') === 'otros') selected @endif>OTROS</option>
                </select>
            </div>

            <div class="mb-3 col-3 form-group">
                <label for="document" class="form-label">Documento</label>
                <input class="form-control" name="document" value="{{old('document')}}" id="document">
            </div>
        </div>
        <div class="row align-items-start">
            <div class="mb-3 col-6">
                <label for="name" class="form-label">Nombre</label>
                <input class="form-control" name="name" value="{{old('name')}}" id="name" >
            </div>

            <div class="mb-3 col-3">
                <label for="lastName" class="form-label">Primer apellido</label>
                <input class="form-control" name="lastName" value="{{old('lastName')}}" id="lastName" >
            </div>

            <div class="mb-3 col-3">
                <label for="lastName2" class="form-label">Segundo apellido</label>
                <input class="form-control" name="lastName2" value="{{old('lastName2')}}" id="lastName2" >
            </div>
        </div>
        <div class="row align-items-start">
            <div class="mb-3 col-6">
                <label for="country" class="form-label">País</label>
                <input class="form-control" name="country" value="{{old('country')}}" id="country" >
            </div>

            <div class="mb-3 col-3">
                <label for="province" class="form-label">Provincia</label>
                <input class="form-control" name="province" value="{{old('province')}}" id="province" >
            </div>

            <div class="mb-3 col-3">
                <label for="municipality" class="form-label">Municipio</label>
                <input class="form-control" name="municipality" value="{{old('municipality')}}" id="municipality" >
            </div>    
        </div>
        <div class="row align-items-start">
            <div class="col-3 form-group">
                <label for="status">Estado</label>
                <select class="form-control" id="status">
                    <option value="active" @if (old('status') === 'active') selected @endif>Activo</option>
                    <option value="inactive" @if (old('status') === 'inactive') selected @endif>Inactivo</option>
                </select>
            </div>
            <div class="mb-3 col-6 form-group">
                <label for="phone" class="form-label">Teléfono</label>
                <input class="form-control" name="phone" value="{{old('phone')}}" id="phone">
            </div>

            <div class="mb-3 col-3 form-group">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" name="email" value="{{old('email')}}" id="email">
            </div>
        </div> 
    </fieldset>
    <button type="submit" class="btn btn-primary mt-3">Guardar</button>
</form>
@endsection
@extends('base')

@section('main')
<form method="post">
    @csrf
    <fieldset class="border mt-5 p-2">
        <legend>{{__('tutors.title')}}</legend>
        <div class="row align-items-start">
            <div class="mb-3 col-6 form-group">
                <label for="enterprise" class="form-label">{{__('tutors.enterprise')}}</label>
                <input class="form-control" name="enterprise" value="{{old('enterprise')}}" id="enterprise">
            </div>

            <div class="col-3 form-group">
                <label for="documentType">{{__('tutors.documentType')}}</label>
                <select class="form-control" id="documentType">
                    <option value="nie" @if (old('status') === 'nie') selected @endif>NIE</option>
                    <option value="dni" @if (old('status') === 'dni') selected @endif>DNI</option>
                    <option value="otros" @if (old('status') === 'otros') selected @endif>OTROS</option>
                </select>
            </div>

            <div class="mb-3 col-3 form-group">
                <label for="document" class="form-label">{{__('tutors.document')}}</label>
                <input class="form-control" name="document" value="{{old('document')}}" id="document">
            </div>
        </div>
        <div class="row align-items-start">
            <div class="mb-3 col-6">
                <label for="name" class="form-label">{{__('tutors.name')}}</label>
                <input class="form-control" name="name" value="{{old('name')}}" id="name" >
            </div>

            <div class="mb-3 col-3">
                <label for="lastName" class="form-label">{{__('tutors.lastName')}}</label>
                <input class="form-control" name="lastName" value="{{old('lastName')}}" id="lastName" >
            </div>

            <div class="mb-3 col-3">
                <label for="lastName2" class="form-label">{{__('tutors.lastName2')}}</label>
                <input class="form-control" name="lastName2" value="{{old('lastName2')}}" id="lastName2" >
            </div>
        </div>
        <div class="row align-items-start">
            <div class="mb-3 col-6">
                <label for="country" class="form-label">{{__('tutors.country')}}</label>
                <input class="form-control" name="country" value="{{old('country')}}" id="country" >
            </div>

            <div class="mb-3 col-3">
                <label for="province" class="form-label">{{__('tutors.province')}}</label>
                <input class="form-control" name="province" value="{{old('province')}}" id="province" >
            </div>

            <div class="mb-3 col-3">
                <label for="municipality" class="form-label">{{__('tutors.municipality')}}</label>
                <input class="form-control" name="municipality" value="{{old('municipality')}}" id="municipality" >
            </div>    
        </div>
        <div class="row align-items-start">
            <div class="col-3 form-group">
                <label for="status">{{__('tutors.status')}}</label>
                <select class="form-control" id="status">
                    <option value="active" @if (old('status') === 'active') selected @endif>{{__('tutors.active')}}</option>
                    <option value="inactive" @if (old('status') === 'inactive') selected @endif>{{__('tutors.inactive')}}</option>
                </select>
            </div>
            <div class="mb-3 col-6 form-group">
                <label for="phone" class="form-label">{{__('tutors.phone')}}</label>
                <input class="form-control" name="phone" value="{{old('phone')}}" id="phone">
            </div>

            <div class="mb-3 col-3 form-group">
                <label for="email" class="form-label">{{__('tutors.email')}}</label>
                <input class="form-control" name="email" value="{{old('email')}}" id="email">
            </div>
        </div> 
    </fieldset>
    <button type="submit" class="btn btn-primary mt-3">{{__('tutors.save')}}</button>
</form>
@endsection
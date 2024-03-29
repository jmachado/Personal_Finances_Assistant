@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('errors'))
                @include('partials.errors')
            @endif
            <div class="card">
                <div class="card-header">
                    {{ __('Edit Profile') }}
                </div>
                <div class="card-body">
                    <form action="{{ route('user.updateProfile') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="name">
                                {{ __('Name') }}
                            </label>
                            <div class="col-md-6">
                                <input autofocus="" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" required="" type="text" value="{{ old('name', $user->name) }}">
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>
                                            {{ $errors->first('name') }}
                                        </strong>
                                    </span>
                                    @endif
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="email">
                                {{ __('E-Mail Address') }}
                            </label>
                            <div class="col-md-6">
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" required="" type="email" value="{{ old('email', $user->email) }}">
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>
                                            {{ $errors->first('email') }}
                                        </strong>
                                    </span>
                                    @endif
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="phone">
                                {{ __('Phone Number') }}
                            </label>
                            <div class="col-md-6">
                                <input autofocus="" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" id="phone" name="phone" optional="" type="text" value="{{ old('phone', $user->phone) }}">
                                    @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>
                                            {{ $errors->first('phone') }}
                                        </strong>
                                    </span>
                                    @endif
                                </input>
                            </div>
                        </div>
                        {{-- begin --}}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="profile_photo">
                                {{ __('Profile Picture') }}
                            </label>
                            <div class="col-md-6">
                                <input autofocus="" class="form-data{{ $errors->has('profile_photo') ? ' is-invalid' : '' }}" id="profile_photo" name="profile_photo" type="file" value="{{ old('profile_photo', $user->profile_photo) }}">
                                    @if ($errors->has('profile_photo'))
                                    <span class="invalid-feedback">
                                        <strong>
                                            {{ $errors->first('profile_photo') }}
                                        </strong>
                                    </span>
                                    @endif
                                </input>
                            </div>
                        </div>
                        {{-- end --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button class="btn btn-primary" type="submit">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

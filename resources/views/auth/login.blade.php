@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Inicio de sesión">
                <b-alert show>
                    Por favor ingresa tus datos: 
                </b-alert>
                
                <b-form method="POST" action="{{ route('login') }}">
                    @csrf

                    <b-form-group
                                label="Correo electrónico:"
                                label-for="email"
                                description="Nunca compartimos tu correo. Está seguro con nosotros.">
                        <b-form-input type="email"
                            id="email" name="email"
                            value="{{ old('email') }}" autofocus required
                            placeholder="Ingresa aquí tu correo">
                        </b-form-input>
                    </b-form-group>

                    <b-form-group
                                label="Contraseña:"
                                label-for="password">
                        <b-form-input type="password"
                                id="password" name="password"
                                value="{{ old('password') }}" required
                                placeholder="Ingresa aquí tu contraseña">
                        </b-form-input>
                    </b-form-group>

                    <b-form-group>
                        <b-form-checkbox 
                            name="remember" 
                            {{ old('remember') ? 'checked="true"' : '' }}>

                            Recordar sesión
                        </b-form-checkbox>
                    </b-form-group>

                    <b-button type="submit" variant="primary">
                        Ingresar
                    </b-button>

                    @if (Route::has('password.request'))
                        <b-button href="{{ route('password.request') }}" variant="link">
                            ¿Olvidaste tu contraseña?
                        </b-button>
                    @endif


                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection

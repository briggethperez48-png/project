<x-guest-layout>
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-5">
            
            <div class="ml-3 text-left mb-4">
                <div class="text-center">
                    <img src="/project/storage/imagen/congreso-monarca.jpg  " alt="" class="img-fluid" style="max-width: 70%; height: auto;">
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="text-center mt-3 mb-1">
                    <h1>Inicio de sesión</h1>
                </div>
                <div class="card-body p-4">
                    
                    @if (session('status'))
                        <div class="alert alert-success mb-4" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger mb-4">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input id="email" type="email" name="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   value="{{ old('email') }}" required autofocus>
                        </div>

                        <div class="form-group mt-3">
                            <label for="password">Contraseña</label>
                            <input id="password" type="password" name="password" 
                                   class="form-control @error('password') is-invalid @enderror" 
                                   required autocomplete="current-password">
                        </div>

                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                            <label class="form-check-label text-muted" for="remember_me">
                                <small>Recuérdame</small>
                            </label>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-4">
                            @if (Route::has('password.request'))
                                <a class="small text-secondary" href="{{ route('password.request') }}">
                                    Olvidé mi contraseña
                                </a>
                            @endif

                            <button type="submit" class="btn btn-secondary ml-auto">
                                Acceder
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="inferior d-flex justify-content-left">
                <div>
                    <a href="{{url('/content/objetivos')}}">
                    <button type="submit" class="btn btn-dark mb-4 mt-3 px-4 py-2 shadow-sm rounded border-0"
                            style="color:#fff; font-size:20px; font-weight:600;">Regresar</button>
                    </a>
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-guest-layout>
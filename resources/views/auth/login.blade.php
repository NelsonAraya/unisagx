<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            height: 100vh; /* Full viewport height */
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa; /* Light background similar to Bootstrap's default */
            background-image: url('https://placehold.co/1920x1080/E0E0E0/333333?text=UNISAG+X'); /* Placeholder image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.95); /* Slightly transparent white background */
            padding: 2.5rem; /* p-10 equivalent */
            border-radius: 0.75rem; /* rounded-lg equivalent */
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175); /* shadow-xl equivalent */
            width: 100%;
            max-width: 28rem; /* max-w-md equivalent */
            margin: 1rem; /* mx-4 sm:mx-auto equivalent */
            border: 1px solid #e2e8f0; /* border border-gray-200 equivalent */
        }
        .form-control {
            border-radius: 0.375rem; /* rounded-md equivalent */
            transition: all 0.2s ease-in-out;
        }
        .form-control:focus {
            border-color: #3b82f6; /* blue-500 equivalent */
            box-shadow: 0 0 0 0.25rem rgba(59, 130, 246, 0.25); /* focus:ring-2 focus:ring-blue-500 equivalent */
        }
        .btn-primary {
            background-color: #2563eb; /* blue-600 equivalent */
            border-color: #2563eb;
            border-radius: 0.375rem; /* rounded-md equivalent */
            transition: background-color 0.2s ease-in-out;
        }
        .btn-primary:hover {
            background-color: #1d4ed8; /* blue-700 equivalent */
            border-color: #1d4ed8;
        }
        .form-check-input:checked {
            background-color: #2563eb; /* blue-600 equivalent */
            border-color: #2563eb;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-3xl font-weight-bold text-center text-gray-800 mb-5">Iniciar Sesión</h2>
        <form action="{{ route('usuarios.login') }}" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="id_log" class="form-label text-gray-700 font-weight-medium">Correo Electrónico o Rut</label>
                <input
                    type="text"
                    id="id_log"
                    name="usuario"
                    class="form-control"
                    placeholder=""
                    autocomplete="off"
                    value="{{ old('usuario') }}"
                    required
                >
                @if ($errors->has('usuario'))
                    <div class="text-danger">{{ $errors->first('usuario') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-gray-700 font-weight-medium">Contraseña</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="form-control"
                    placeholder=""
                    required
                >
                @if ($errors->has('password'))
                    <div class="text-danger">{{ $errors->first('password') }}</div>
                @endif
            </div>
            <div class="mb-4 d-flex justify-content-between align-items-center">
                <div class="form-check">
                    <input type="checkbox" id="remember_me" name="remember_me" class="form-check-input">
                    <label class="form-check-label text-gray-900" for="remember_me">Recordarme</label>
                </div>
                <a href="#" class="text-decoration-none text-blue-600">¿Olvidaste tu contraseña?</a>
            </div>
            <div>
                <button
                    type="submit"
                    class="btn btn-primary w-100 font-weight-semibold"
                >
                    Iniciar Sesión
                </button>
            </div>
        </form>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

reg
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/styleForm.css') }}?v={{ time() }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="/evento/resources/css/styleInd.css">
    <script src="/evento/resources/js/main.js"></script>

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" 
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>Registros</title>
</head>
<body>
    <section class="content">
        <div class="header2">
            <h2>
                Registro al Curso
            </h2>
        </div>
        <div class="form">
            <form action="{{url('/formulario')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('formulario.form', ['modo'=>'Crear'])
                
            </form>
        </div>
    </section>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <script>
        let estadoGuardado = "{{ old('EstadoProcedencia', $emplead1->EstadoProcedencia ?? '') }}";
        let paisGuardado = "{{ old('Pais', $emplead1->Pais ?? '') }}";
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script src="{{ asset('js/procedencia.js') }}?v={{ time() }}"></script>

    <script>
        $(document).ready(function(){
            $('.dynamic').change(function(){
                if($(this).val()!= ''){
                    var select = $(this).attr("id");
                    var value = $(this).val();
                    var dependent = $(this).data('dependent');
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"{{route('registroController.fetch')}}",
                        method:"POST",
                        data:{select:select, 
                                value:value, 
                                _token:_token, 
                                dependent:dependent
                            },
                        success:function(result){
                            $('#'+dependent).html(result);
                        }
                    })
                }
            });
        });
    </script>
</body>
</html>
@extends('layouts.mainv')
@section('encuesta')
<div>
    <div class="container" style="max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center; font-family: Arial, sans-serif; color: #333;">Formulario de Preguntas</h1>
        <form id="encuesta" style="font-family: Arial, sans-serif; color: #555;">

            <!-- Fallas de encendido -->

            <div class="pregunta" style="margin-bottom: 20px;">
                <label>1. ¿Cuándo intenta encender el carro, el motor gira con normalidad, pero no enciende cuando se suelta la llave? </label><br>
                <input type="radio" name="q1" value="Sí"> Sí
                <input type="radio" name="q1" value="No"> No
            </div>
            <div class="pregunta" style="margin-bottom: 20px;">
                <label>2. Al encender las luces delanteras y girar la llave para arrancar el vehículo, ¿se observa una disminución significativa en la intensidad de las luces?</label><br>
                <input type="radio" name="q2" value="Sí"> Sí
                <input type="radio" name="q2" value="No"> No
            </div>

            <!-- Fallas de frenos -->

            <div class="pregunta" style="margin-bottom: 20px;">
                <label>3. ¿Al frenar, el pedal se desplaza hasta el fondo y el automóvil no frena adecuadamente, se perciben sonidos inusuales o se activa la luz del ABS (sistema de frenos antibloqueo)?</label><br>
                <input type="radio" name="q3" value="Sí"> Sí
                <input type="radio" name="q3" value="No"> No
            </div>
            <div class="pregunta" style="margin-bottom: 20px;">
                <label>4. ¿Permanece iluminado el testigo del sistema de frenos antibloqueo (ABS) durante la conducción?</label><br>
                <input type="radio" name="q4" value="Sí"> Sí
                <input type="radio" name="q4" value="No"> No
            </div>

            <!-- Fallas del sistema electrico -->

            <div class="pregunta" style="margin-bottom: 20px;">
                <label>5. ¿Ha observado que una de las luces del vehículo no se enciende o que en el panel de instrumentos se muestra una luz de advertencia?</label><br>
                <input type="radio" name="q5" value="Sí"> Sí
                <input type="radio" name="q5" value="No"> No
            </div>
            <div class="pregunta" style="margin-bottom: 20px;">
                <label>6. ¿El indicador de la batería no se ilumina al girar la llave de encendido y tampoco se apaga después de arrancar el vehículo?</label><br>
                <input type="radio" name="q6" value="Sí"> Sí
                <input type="radio" name="q6" value="No"> No
            </div>

            <button type="button" onclick="submitForm()" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Terminar</button>
        </form>
        <div class="result" id="result" style="margin-top: 20px;"></div>
    </div>


    <script>
        const questions = [{
                type: 'Fallas de encendido',
                text: '¿Cuándo intenta encender el carro, el motor gira con normalidad, pero no enciende cuando se suelta la llave?',
                fallas: ['Falta de combustible', 'Falta de chispa'],
                taller: 'Mecánica'
            },
            {
                type: 'Fallas de encendido',
                text: 'Al encender las luces delanteras y girar la llave para arrancar el vehículo, ¿se observa una disminución significativa en la intensidad de las luces?',
                fallas: ['Batería descargada', 'Bornes flojos', 'Arranque en mal estado'],
                taller: 'Eléctrico'
            },
            {
                type: 'Fallas en el sistema de frenos',
                text: '¿Al frenar, el pedal se desplaza hasta el fondo y el automóvil no frena adecuadamente, se perciben sonidos inusuales o se activa la luz del ABS (sistema de frenos antibloqueo)?',
                fallas: ['Pastillas y balatas desgastadas', 'Fugas en el sistema hidráulico', 'Mal estado del booster'],
                taller: 'Mecánica'
            },
            {
                type: 'Fallas en el sistema de frenos',
                text: '¿Permanece iluminado el testigo del sistema de frenos antibloqueo (ABS) durante la conducción?',
                fallas: ['Sensores de velocidad de rueda', 'Módulo de control', 'Motor bomba'],
                taller: 'Taller de frenos'
            },
            {
                type: 'Fallas sistema eléctrico',
                text: '¿Ha observado que una de las luces del vehículo no se enciende o que en el panel de instrumentos se muestra una luz de advertencia?',
                fallas: ['Bombillo incorrecto del modelo vehicular', 'Mal alineación de luces'],
                taller: 'Eléctrico'
            },
            {
                type: 'Fallas sistema eléctrico',
                text: '¿El indicador de la batería no se ilumina al girar la llave de encendido y tampoco se apaga después de arrancar el vehículo?',
                fallas: ['Carga incorrecta del alternador'],
                taller: 'Eléctrico'
            }
        ];

        function submitForm() {
            const form = document.getElementById('encuesta');
            const resultDiv = document.getElementById('result');
            const formData = new FormData(form);
            const answers = [];
            let siCount = 0;

            for (let i = 1; i <= 6; i++) {
                const answer = formData.get('q' + i) || 'No';
                if (answer === 'Sí') {
                    siCount++;
                }
                answers.push(answer);
            }

            let resultHTML = '<h2>Resultados:</h2>';
            let fallasPorTipo = {};
            let talleresRecomendados = new Set();

            answers.forEach((answer, index) => {
                if (answer === 'Sí') {
                    const question = questions[index];
                    if (!fallasPorTipo[question.type]) {
                        fallasPorTipo[question.type] = [];
                    }
                    fallasPorTipo[question.type].push(...question.fallas);
                    talleresRecomendados.add(question.taller);
                }
            });

            resultHTML += '<h3>Posibles fallas presentadas en el vehículo:</h3><ul>';
            for (const [tipo, fallas] of Object.entries(fallasPorTipo)) {
                resultHTML += `<h4>${tipo}:</h4>`;
                fallas.forEach(falla => {
                    resultHTML += `<li>${falla}</li>`;
                });
            }
            resultHTML += '</ul>';

            resultHTML += '<h3>Tipos de talleres recomendados para revisión:</h3><ul>';
            talleresRecomendados.forEach(taller => {
                resultHTML += `<li>${taller}</li>`;
            });
            resultHTML += '</ul>';

            resultDiv.innerHTML = resultHTML;
        }
    </script>
</div>
@endsection
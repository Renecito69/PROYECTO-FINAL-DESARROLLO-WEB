function validarFecha() {
    var fecha = document.getElementById('fecha').value;
    var url = '/validarFecha?fecha=' + fecha;

    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true); // Cambiado 'get' a 'GET'
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                alert(response.mensaje);
                console.log(response.fecha);
            } else {
                alert('Ocurrió un error: ' + xhr.statusText);
            }
        }
    };
    xhr.onerror = function() {
        alert('Error de red.');
    };
    xhr.send();
}

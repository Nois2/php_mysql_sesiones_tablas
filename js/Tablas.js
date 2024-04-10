document.getElementById("consultaForm").addEventListener("submit", function(event) {
    var consultaInput = document.getElementById("consultaweb").value;
    if (consultaInput.trim().length < 5) {
        alert("La consulta debe tener al menos 5 caracteres.");
        event.preventDefault(); // Evita que se envíe el formulario
    } else if (consultaInput.trim() === "") {
        alert("Por favor, introduce una consulta.");
        event.preventDefault(); // Evita que se envíe el formulario
    }
});
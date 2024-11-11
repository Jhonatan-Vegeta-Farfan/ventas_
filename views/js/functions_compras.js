document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("compraForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the default form submission

        const formData = new FormData(this);

        fetch('Compras.php?tipo=registrar', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.status) {
                alert(data.mensaje);
                this.reset(); // Reset the form after successful submission
            } else {
                alert(data.mensaje);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error al registrar la compra. Intente de nuevo.');
        });
    });
});
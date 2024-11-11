
<body>

<h2>Registrar Compra</h2>
<form id="compraForm">
    <label for="id_producto">ID Producto:</label>
    <input type="number" id="id_producto" name="id_producto" required>

    <label for="cantidad">Cantidad:</label>
    <input type="number" id="cantidad" name="cantidad" required>

    <label for="precio">Precio:</label>
    <input type="number" step="0.01" id="precio" name="precio" required>

    <label for="id_trabajador">ID Trabajador:</label>
    <input type="number" id="id_trabajador" name="id_trabajador" required>

    <input type="submit" value="Registrar Compra">
</form>

</body>

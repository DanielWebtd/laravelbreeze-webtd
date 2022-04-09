<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Query Builder Laravel con Daniel WEBTD</title>
</head>
<body>

    <form action={{ route('query.builder') }} method="GET">
        @csrf
        <label for="extension">Extensión</label><br>
        <select name="extension" id="extension">
            <option value="">Seleccione extensión</option>
            <option value=".mp4">MP4</option>
            <option value=".mov">MOV</option>
            <option value=".wmv">WMV</option>
        </select>
        <br><br>
        <label for="fecha1">De Fecha publicación</label><br>
        <input type="date" name="fecha1" id="fecha1">
        <input type="date" name="fecha2" id="fecha2">
        <br><br>
        <label for="gananciaGenerada">Ganancia generada</label><br>
        <input type="number" name="gananciaGenerada" id="gananciaGenerada">
        <br><br>
        <select name="ordenacion" id="ordenacion">
            <option value="">Ordenar por</option>
            <option value="ganancia_generada">Ganancia generada</option>
            <option value="titulo">Título video</option>
        </select>
        <br><br>
        <input type="submit" value="Buscar">
    </form> 
</body>
</html>

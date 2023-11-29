<!DOCTYPE html>
<html>
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  <link rel="stylesheet" href="pdf.css">

</head>
<body>
  <div>
      <a href="paginaprincipal.php" class="button">Volver</a>
  </div>
  <div class="texto">
    <h1>Registro de Productos</h1>
  </div>
  <center>
    <table border="2">
      <thead>

      
        <tr>
          <th>id documento</th>
          <th>fondo, sbchdsviunhdufvd</th>
          
          <th>nombre documento </th>
          <th>fechra inicio</th>
          <th>fecha final</th>
          <th>ubicacion</th>
          <th>volumen soporte</th>
          <th>nombre porductor</th>
          <th>nombre creador</th>
          <th>forma ingreso</th>
          <th>descripcion</th>
          <th>estado conservacion</th>
          <th>condicion acceso</th>
          <th>condicion reproduccion</th>
          <th>documentos relacionados</th>
          <th>notas</th>
          <th>fecha registro</th>
          <th>respuesta registro</th>
          <th>respuesta control</th>


          
        </tr>
      </thead>
      <tbody>
        <?php
          $conexion = new mysqli("localhost", "root", "", "archivo_historico1");
          $id = $_GET["id"];
          $query ="SELECT unidad_documental1.id_documento, unidad_documental1.nombre_documento, unidad_documental1.fecha_inicio, unidad_documental1.fecha_final, unidad_documental1.ubicacion, unidad_documental1.volumen_soporte, unidad_documental1.nombre_productor, unidad_documental1.nombre_creador, unidad_documental1.forma_ingreso, unidad_documental1.descripcion, unidad_documental1.estado_conservacion, unidad_documental1.condicion_acceso, unidad_documental1.condicion_reproduccion, unidad_documental1.documentos_relacionados, unidad_documental1.notas, unidad_documental1.fecha_registro, unidad_documental1.resp_registro, unidad_documental1.resp_control,
          fondo.nombre_fondo, 
          subfondo.nombre_subfondo, 
          serie.nombre_serie, 
          subserie.nombre_subserie 
  FROM unidad_documental1
  LEFT JOIN fondo ON unidad_documental1.id_fondo = fondo.id_fondo
  LEFT JOIN subfondo ON unidad_documental1.id_subfondo = subfondo.id_subfondo
  LEFT JOIN serie ON unidad_documental1.id_serie = serie.id_serie
  LEFT JOIN subserie ON unidad_documental1.id_subserie = subserie.id_subserie
  WHERE ID_DOCUMENTO = $id";
  

          $resultado = $conexion->query($query);
          while($row = $resultado->fetch_assoc()){
        ?>
          <tr>
            <td> <?php echo $row['id_documento']; ?></td>
            <td> <?php echo $row['nombre_fondo'] ." - ". $row['nombre_subfondo'] ." - ". $row['nombre_serie'] ."-". $row['nombre_subserie']; ?></td>
            <td> <?php echo $row['nombre_documento']; ?></td>
            <td> <?php echo $row['fecha_inicio']; ?></td>
            <td> <?php echo $row['fecha_final']; ?></td>
            <td> <?php echo $row['ubicacion']; ?></td>
            <td> <?php echo $row['volumen_soporte']; ?></td>
            <td> <?php echo $row['nombre_productor']; ?></td>
            <td> <?php echo $row['nombre_creador']; ?></td>
            <td> <?php echo $row['forma_ingreso']; ?></td>
            <td> <?php echo $row['descripcion']; ?></td>
            <td> <?php echo $row['estado_conservacion']; ?></td>
            <td> <?php echo $row['condicion_acceso']; ?></td>
            <td> <?php echo $row['condicion_reproduccion']; ?></td>
            <td> <?php echo $row['documentos_relacionados']; ?></td>
            <td> <?php echo $row['notas']; ?></td>
            <td> <?php echo $row['fecha_registro']; ?></td>
            <td> <?php echo $row['resp_registro']; ?></td>
            <td> <?php echo $row['resp_control']; ?></td>
          </tr>

        <?php
            }
            
        ?>

      </tbody>
    </table>
    <div class="button-container">
      <button id="btnCrearPdf" class="button">Crear PDF de la Tabla</button>
    </div>
  </center>
  
  
  <script>
  document.addEventListener("DOMContentLoaded", () => {
  const $boton = document.querySelector("#btnCrearPdf");
  $boton.addEventListener("click", () => {
    const $tablaParaConvertir = document.querySelector("table");

    // Duplicar la tabla para mantenerla en el documento original
    const $tablaCopia = $tablaParaConvertir.cloneNode(true);

    // Crear un contenedor div para centrar la tabla
    const $contenedor = document.createElement("div");
    $contenedor.style.display = "flex";
    $contenedor.style.justifyContent = "center";
    $contenedor.style.alignItems = "center";
    $contenedor.style.height = "100%"; // Opcional: Ajusta la altura del contenedor

    // Agregar la tabla duplicada al contenedor
    $contenedor.appendChild($tablaCopia);

    html2pdf()
      .set({
        margin: 10,
        filename: 'tabla.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: "mm", format: "a4", orientation: 'landscape' }
      })
      .from($contenedor) // Ahora convierte el contenedor, que contiene la tabla centrada
      .save()
      .catch(err => console.log(err));
    });
  });

 
  </script>
  <div class="background-image"></div>
</body>
</html>


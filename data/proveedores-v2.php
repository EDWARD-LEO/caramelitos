<?php

//Data de prueba (el primer valor representaría al ID - PK)
$listProviders = [
  [1, "Corporación Tecnológica A", "Ecuador", "corporacion_a@gmail.com", "956111111"],
  [2, "Corporación Tecnológica B", "Chile", "corporacion_b@gmail.com", "956111112"],
  [3, "Corporación Tecnológica C", "Brasil", "corporacion_c@gmail.com", "956111113"],
  [5, "Corporación Tecnológica D", "Bolivia", "corporacion_d@gmail.com", "956111114"],
  [7, "Corporación Tecnológica E", "Ecuador", "corporacion_a@gmail.com", "956111111"],
  [8, "Corporación Tecnológica F", "Chile", "corporacion_b@gmail.com", "956111112"],
  [9, "Corporación Tecnológica G", "Brasil", "corporacion_c@gmail.com", "956111113"],
  [10, "Corporación Tecnológica H", "Bolivia", "corporacion_d@gmail.com", "956111114"],
  [15, "Corporación Tecnológica I", "Ecuador", "corporacion_a@gmail.com", "956111111"],
  [16, "Corporación Tecnológica J", "Chile", "corporacion_b@gmail.com", "956111112"],
  [17, "Corporación Tecnológica K", "Brasil", "corporacion_c@gmail.com", "956111113"],
  [18, "Corporación Tecnológica L", "Bolivia", "corporacion_d@gmail.com", "956111114"],
  [19, "Corporación Tecnológica M", "Ecuador", "corporacion_a@gmail.com", "956111111"],
  [20, "Corporación Tecnológica N", "Chile", "corporacion_b@gmail.com", "956111112"]
];

if (isset($_POST['operacion'])){
  if ($_POST['operacion'] == 'getData'){
    
    // *************************************************************************************************
    //NOTA: En esta segunda versión, se renderiza en el botón ELIMINAR y EDITAR el ID del registro
    //a través del atributo personalizado data-id='', que queremos manipular desde el FrontEnd,
    //además tenemos que agregarle una clase para cada botón para poder identificarlo.
    // *************************************************************************************************
    //Render <tr>
    $numFila = 1;
    foreach($listProviders as $row){
      echo "
        <tr>
          <td>{$numFila}</td>
          <td>{$row[1]}</td>
          <td>{$row[2]}</td>
          <td>{$row[3]}</td>
          <td>{$row[4]}</td>
          <td><span class='badge bg-success'>Activo</span></td>
          <td>
            <a href='#' class='btn btn-sm btn-outline-danger eliminar' data-idproveedor='{$row[0]}'><i class='fa-solid fa-trash'></i></a>
            <a href='#' class='btn btn-sm btn-outline-primary editar' data-idproveedor='{$row[0]}'><i class='fa-solid fa-pen-to-square'></i></a>
          </td>
        </tr>
      ";
      $numFila++;
    }

    //sleep(3);

  }
}

?>
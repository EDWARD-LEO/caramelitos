<?php

//Data de prueba (el primer valor representaría al ID - PK)
$listProviders = [
  [17, "Corporación Tecnológica A", "Ecuador", "corporacion_a@gmail.com", "956111111"],
  [20, "Corporación Tecnológica B", "Chile", "corporacion_b@gmail.com", "956111112"],
  [23, "Corporación Tecnológica C", "Brasil", "corporacion_c@gmail.com", "956111113"],
  [31, "Corporación Tecnológica D", "Bolivia", "corporacion_d@gmail.com", "956111114"]
];

if (isset($_POST['operacion'])){
  if ($_POST['operacion'] == 'getData'){
    
    //Render <tr>
    foreach($listProviders as $row){
      echo "
        <tr>
          <td>{$row[0]}</td>
          <td>{$row[1]}</td>
          <td>{$row[2]}</td>
          <td>{$row[3]}</td>
          <td>{$row[4]}</td>
          <td><span class='badge bg-success'>Activo</span></td>
          <td>
            <a href='#' class='btn btn-sm btn-outline-danger'><i class='fa-solid fa-trash'></i></a>
            <a href='#' class='btn btn-sm btn-outline-primary'><i class='fa-solid fa-pen-to-square'></i></a>
          </td>
        </tr>
      ";
    }

    sleep(3);

  }
}

?>
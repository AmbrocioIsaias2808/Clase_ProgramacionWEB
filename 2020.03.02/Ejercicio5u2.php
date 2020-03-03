<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <table border="1" width="950" height="150">
      <caption>Tabla con combinación de filas</caption>
      <tr align="center">
            <th>Celda 1</th>
            <th>Celda 2</th>
            <th>Celda 3</th>
            <th>Celda 4</th>
      </tr>
      <tr align="center">
        <td rowspan="3">Celda 5</td>
        <td>Celda 6</td>
        <td colspan="2">Celda 7</td>
      </tr>
      <tr align="center">
        <td>Celda 8</td>
        <td>Celda 9</td>
        <td rowspan="2">Celda 10</td>
      </tr>
      <tr align="center">
        <td colspan="2">Celda 11</td>
      </tr>
    </table>
  </body>
</html>

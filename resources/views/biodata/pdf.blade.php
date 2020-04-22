<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Data Mahasiswa</h1>
    <table class="table table-bordered">
    <thead>
      <tr>
        <td><b>Nama</b></td>
        <td><b>NIM</b></td>
        <td><b>Address</b></td>     
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>
          {{$data->name}}
        </td>
        <td>
          {{$data->nim}}
        </td>
        <td>
          {{$data->address}}
        </td>
      </tr>
      </tbody>
    </table>
  </body>
</html>
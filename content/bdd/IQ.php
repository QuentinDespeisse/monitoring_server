<?php
include $_SERVER['DOCUMENT_ROOT']."/enedis/include/header.inc.php"
?>   

<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>Plateforme de qualification</h1>
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="page-header float-right">
      <div class="page-title">
        <ol class="breadcrumb text-right">
          <li class="active">Plateforme de qualification</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<?php
include $_SERVER['DOCUMENT_ROOT']."/enedis/include/topbar.inc.php"
?>        

<div class="content mt-3">
  <div class="animated fadeIn">

   <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <strong class="card-title">Informations générales servers</strong>
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Apache frontal</th>
              <th scope="col">Instance</th>
              <th scope="col">User</th>
              <th scope="col">Password</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><a>http://apache.enedis.fr</a></td>
              <td><a>http://instance1.apache.enedis.fr</a></td>
              <td>@mdo</td>
              <td>@mdo1</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><a>http://apache.enedis.fr</a></td>
              <td><a>http://instance2.apache.enedis.fr</a></td>
              <td>@mdo</td>
              <td>@mdo2</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td><a>http://apache.enedis.fr</a></td>
              <td><a>http://instance3.apache.enedis.fr</a></td>
              <td>@mdo</td>
              <td>@mdo3</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>

<?php
include $_SERVER['DOCUMENT_ROOT']."/enedis/include/footer.inc.php"
?>
<?php
	include $_SERVER['DOCUMENT_ROOT']."/enedis/include/header.inc.php"
?>          

<div class="content mt-3">
<div class="animated fadeIn">
   
   <div class="col-lg-12">
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
								  <th scope="col">Etat</th>
								  <th scope="col"></th>
								  <th scope="col"></th>
								  <th scope="col"></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td><a href="http://apache.enedis.fr">http://apache.enedis.fr</a></td>
                                  <td><a href="http://instance1.apache.enedis.fr">http://instance1.apache.enedis.fr</a></td>
                                  <td>@mdo</td>
								  <td>@mdo1</td>
								  <td><span class="ti-heart" style="color:green"/></td>
								  <td><button type="button" class="btn btn-outline-success"><i class="fa fa-rss"></i>&nbsp; Start</button></td>
								  <td><button type="button" class="btn btn-outline-danger"><i class="fa fa-rss"></i>&nbsp; Stop</button></td>
								  <td><button type="button" class="btn btn-outline-link"><i class="fa fa-link"></i>&nbsp; Restart</button></td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                <td><a href="http://apache.enedis.fr">http://apache.enedis.fr</a></td>
                                  <td><a href="http://instance2.apache.enedis.fr">http://instance2.apache.enedis.fr</a></td>
                                  <td>@mdo</td>
								  <td>@mdo2</td>
								  <td><span class="ti-heart-broken" style="color:red"/></td>
								  <td><button type="button" class="btn btn-outline-success"><i class="fa fa-rss"></i>&nbsp; Start</button></td>
								  <td><button type="button" class="btn btn-outline-danger"><i class="fa fa-rss"></i>&nbsp; Stop</button></td>
								  <td><button type="button" class="btn btn-outline-link"><i class="fa fa-link"></i>&nbsp; Restart</button></td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td><a href="http://apache.enedis.fr">http://apache.enedis.fr</a></td>
                                  <td><a href="http://instance3.apache.enedis.fr">http://instance3.apache.enedis.fr</a></td>
                                  <td>@mdo</td>
								  <td>@mdo3</td>
								  <td><span class="ti-heart" style="color:green"/></td>
								  <td><button type="button" class="btn btn-outline-success"><i class="fa fa-rss"></i>&nbsp; Start</button></td>
								  <td><button type="button" class="btn btn-outline-danger"><i class="fa fa-rss"></i>&nbsp; Stop</button></td>
								  <td><button type="button" class="btn btn-outline-link"><i class="fa fa-link"></i>&nbsp; Restart</button></td>
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
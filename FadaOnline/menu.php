<!DOCTYPE HTML>
<html>
<head>
  <title>Fada do Dente</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
  <!-- Custom CSS -->
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <!-- Graph CSS -->
  <link href="css/lines.css" rel='stylesheet' type='text/css' />
  <link href="css/amostra_paciente.css" rel="stylesheet"> 
  <link href="css/menu.css" rel='stylesheet' type='text/css' />
  <link href="css/font-awesome.css" rel="stylesheet"> 
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <link href="css/custom.css" rel="stylesheet">
  <!-- Metis Menu Plugin JavaScript -->
  <script src="js/metisMenu.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- Graph JavaScript -->
  <script src="js/d3.v3.js"></script>
  <script src="js/rickshaw.js"></script>
</head>
<body>
  <div id="wrapper">
    <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href=""><img src="images/fadadodente.png" width="50" height="28"></a>
      </div> 
      <!-- /.navbar-header -->
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="<!-- imagem do usuario logado -->"></a>
          <ul class="dropdown-menu">
            <li class="dropdown-menu-header text-center">
              <strong><!-- Nome do Usuario Logado --></strong>
            </li>
            <li class="m_2"><a href="amostra_usuario.php"><i class="fa fa-user"></i> Perfil </a></li>
            <li class="m_2"><a href="#"><i class="fa fa-power-off"></i> Deslogar </a></li>  
          </ul>
        </li>
      </ul>
      <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
            <li>
              <a href="menu.php"><i class="fa fa-bars fa-fw nav_icon"></i>Menu</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-id-card nav_icon"></i>Cadastros<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="cadastro_usuario.php"><i id="coricone2" class="fas fa-user-circle"></i>  Usuários</a>
                </li>
                <li>
                  <a href="cadastro_paciente.php"><i id="coricone2" class="fas fa-user-plus"></i> Pacientes</a>
                </li>
                <li>
                  <a href="cadastro_dentista.php"><i id="coricone2" class="fas fa-user-md" style="margin-right: 2px;margin-left: 1px;"></i> Dentistas</a>
                </li>
                <li>
                  <a href="cadastro_funcionario.php"><i id="coricone2" class="fas fa-users" style="margin-right: 2px;margin-left: -1px;"></i></i>  Funcionarios</a>
                </li>
                <li>
                  <a href="cadastro_consulta.php"><img id="iconeconsulta2" src="images/icones_novos/cadastro_consulta2.png">  Consultas</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-info nav_icon" style="margin-left: 10px;margin-right: 7px;"></i><label style="">Informações</label><span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="amostra_paciente.php"><i id="coricone2" class="fas fa-user-plus"></i> Pacientes</a>
                </li>
                <li>
                  <a href="typography.html"><i id="coricone2" class="fas fa-user-md" style="margin-right: 2px;margin-left: 1px;"></i> Dentistas</a>
                </li>
                <li>
                  <a href="amostra_consulta.php"><img id="iconeconsulta" src="images/icones_novos/cadastro_consulta2.png">  Consultas</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-chart-pie nav_icon" style="margin-right: 2px;"></i><label>Relatórios</label><span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="graphs.html"><img id="iconeconsulta" src="images/icones_novos/cadastro_consulta2.png">  Consultas</a>
                </li>
                <li>
                  <a href="typography.html"><i id="coricone2" class="fas fa-user-plus"></i> Pacientes</a>
                </li>
                <li>
                  <a href="typography.html"><i id="coricone2" class="fas fa-user-md" style="margin-right: 2px;margin-left: 1px;"></i> Dentistas</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-desktop nav_icon"></i>Logs<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="graphs.html"><i id="coricone2" class="fas fa-clipboard"></i>  Consultas</a>
                </li>
                <li>
                  <a href="typography.html"><i id="coricone2" class="fas fa-user-md" style="margin-right: 2px;margin-left: 1px;"></i> Dentistas</a>
                </li>
                <li>
                  <a href="graphs.html"><i id="coricone2" class="fas fa-user-plus"></i> Pacientes</a>
                </li>
                <li>
                  <a href="graphs.html"><i id="coricone2" class="fas fa-user-circle"></i>  Usuários</a>
                </li>
                <li>
                  <a href="typography.html"><i id="coricone2" class="fas fa-asterisk"></i>  Geral</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-cogs fa-fw nav_icon" style="margin-right: 7px;"></i>Suporte<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="contato_suporte.html"><i id="coricone2" class="fas fa-comments"></i>  Contato</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.sidebar-collapse -->
      </div>
      <!-- /.navbar-static-side -->
    </nav>
    <div id="page-wrapper">
      <div class="graphs">
        <div class="col_3">
          <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
              <i class="pull-left fa fa-tag icon-rounded"></i>
              <div class="stats">
                <h5><strong>24<!-- Novas consultas (Quantidade) --></strong></h5>
                <span>Novas consultas</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
              <i class="pull-left fa fa-check user1 icon-rounded"></i>
              <div class="stats">
                <h5><strong>1019<!-- consultas ja feitas (Quantidade) --></strong></h5>
                <span>Consultas Feitas</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
              <i class="pull-left fa fa-users user2 icon-rounded"></i>
              <div class="stats">
                <h5><strong>1012<!-- Pacientes (Quantidade) --></strong></h5>
                <span>Pacientes</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 widget">
            <div class="r3_counter_box">
              <i class="pull-left fa fa-dollar dollar1 icon-rounded"></i>
              <div class="stats">
                <h5><strong>R$450<!-- Pacientes (Quantidade) --></strong></h5>
                <span>Toral Recebido</span>
              </div>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="col_1">
          <div class="col-md-4 span_7">	
            <div class="cal1 cal_2">
              <div class="clndr">
                <div class="clndr-controls">
                  <div class="clndr-control-button">
                    <p class="clndr-previous-button">previous</p>
                  </div>
                  <div class="month">July 2015</div>
                  <div class="clndr-control-button rightalign">
                    <p class="clndr-next-button">next</p>
                  </div>
                </div>
                <table class="clndr-table" border="0" cellspacing="0" cellpadding="0">
                  
                  <tbody>
                    <tr>
                      <td class="day adjacent-month last-month calendar-day-2015-06-28">
                        <div class="day-contents">28</div>
                      </td>
                      <td class="day adjacent-month last-month calendar-day-2015-06-29">
                        <div class="day-contents">29</div>
                      </td>
                      <td class="day adjacent-month last-month calendar-day-2015-06-30">
                        <div class="day-contents">30</div>
                      </td>
                      <td class="day calendar-day-2015-07-01">
                        <div class="day-contents">1</div>
                      </td>
                      <td class="day calendar-day-2015-07-02">
                        <div class="day-contents">2</div>
                      </td>
                      <td class="day calendar-day-2015-07-03">
                        <div class="day-contents">3</div>
                      </td>
                      <td class="day calendar-day-2015-07-04">
                        <div class="day-contents">4</div>
                      </td>
                    </tr>
                    <tr>
                      <td class="day calendar-day-2015-07-05">
                        <div class="day-contents">5</div>
                      </td>
                      <td class="day calendar-day-2015-07-06">
                        <div class="day-contents">6</div>
                      </td>
                      <td class="day calendar-day-2015-07-07">
                        <div class="day-contents">7</div>
                      </td>
                      <td class="day calendar-day-2015-07-08">
                        <div class="day-contents">8</div>
                      </td>
                      <td class="day calendar-day-2015-07-09">
                        <div class="day-contents">9</div>
                      </td>
                      <td class="day calendar-day-2015-07-10">
                        <div class="day-contents">10</div>
                      </td>
                      <td class="day calendar-day-2015-07-11">
                        <div class="day-contents">11</div>
                      </td>
                    </tr>
                    <tr>
                      <td class="day calendar-day-2015-07-12">
                        <div class="day-contents">12</div>
                      </td>
                      <td class="day calendar-day-2015-07-13">
                        <div class="day-contents">13</div>
                      </td>
                      <td class="day calendar-day-2015-07-14">
                        <div class="day-contents">14</div>
                      </td>
                      <td class="day calendar-day-2015-07-15">
                        <div class="day-contents">15</div>
                      </td>
                      <td class="day calendar-day-2015-07-16">
                        <div class="day-contents">16</div>
                      </td>
                      <td class="day calendar-day-2015-07-17">
                        <div class="day-contents">17</div>
                      </td>
                      <td class="day calendar-day-2015-07-18">
                        <div class="day-contents">18</div>
                      </td>
                    </tr>
                    <tr>
                      <td class="day calendar-day-2015-07-19">
                        <div class="day-contents">19</div>
                      </td>
                      <td class="day calendar-day-2015-07-20">
                        <div class="day-contents">20</div>
                      </td>
                      <td class="day calendar-day-2015-07-21">
                        <div class="day-contents">21</div>
                      </td>
                      <td class="day calendar-day-2015-07-22">
                        <div class="day-contents">22</div>
                      </td>
                      <td class="day calendar-day-2015-07-23">
                        <div class="day-contents">23</div>
                      </td>
                      <td class="day calendar-day-2015-07-24">
                        <div class="day-contents">24</div>
                      </td>
                      <td class="day calendar-day-2015-07-25">
                        <div class="day-contents">25</div>
                      </td>
                    </tr>
                    <tr>
                      <td class="day calendar-day-2015-07-26">
                        <div class="day-contents">26</div>
                      </td>
                      <td class="day calendar-day-2015-07-27">
                        <div class="day-contents">27</div>
                      </td>
                      <td class="day calendar-day-2015-07-28">
                        <div class="day-contents">28</div>
                      </td>
                      <td class="day calendar-day-2015-07-29">
                        <div class="day-contents">29</div>
                      </td>
                      <td class="day calendar-day-2015-07-30">
                        <div class="day-contents">30</div>
                      </td>
                      <td class="day calendar-day-2015-07-31">
                        <div class="day-contents">31</div>
                      </td>
                      <td class="day adjacent-month next-month calendar-day-2015-08-01">
                        <div class="day-contents">1</div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-4 span_8">
            <div class="activity_box">
              <div class="scrollbar" id="style-2">
                <div class="activity-row">
                  <div class="col-xs-3 activity-img"><img src='images/paciente.jpg' class="img-responsive" alt=""/></div>
                  <div class="col-xs-9 activity-desc" style="padding-bottom: 15px">
                    <h5>Nome do paciente<!-- Puxar do banco --></h5>
                    <p>Nome do dentista<!-- Puxar do Banco --></p>
                    <p>Descrição da Consulta<!-- Puxar do Banco --></p>
                    <p>8:03<!-- Horario --></p>
                  </div>
                  <div class="clearfix"> </div>
                </div>
                <div class="activity-row">
                  <div class="col-xs-3 activity-img"><img src='images/paciente.jpg' class="img-responsive" alt=""/></div>
                  <div class="col-xs-9 activity-desc" style="padding-bottom: 15px">
                    <h5>Nome do paciente<!-- Puxar do banco --></h5>
                    <p>Nome do dentista<!-- Puxar do Banco --></p>
                    <p>Descrição da Consulta<!-- Puxar do Banco --></p>
                    <p>8:03<!-- Horario --></p>
                  </div>
                  <div class="clearfix"> </div>
                </div>
                <div class="activity-row">
                  <div class="col-xs-3 activity-img"><img src='images/paciente.jpg' class="img-responsive" alt=""/></div>
                  <div class="col-xs-9 activity-desc" style="padding-bottom: 15px">
                    <h5>Nome do paciente<!-- Puxar do banco --></h5>
                    <p>Nome do dentista<!-- Puxar do Banco --></p>
                    <p>Descrição da Consulta<!-- Puxar do Banco --></p>
                    <p>8:03<!-- Horario --></p>
                  </div>
                  <div class="clearfix"> </div>
                </div>
                <div class="activity-row1">
                  <div class="col-xs-3 activity-img"><img src='images/paciente.jpg' class="img-responsive" alt=""/></div>
                  <div class="col-xs-9 activity-desc" style="padding-bottom: 15px">
                    <h5>Nome do paciente<!-- Puxar do banco --></h5>
                    <p>Nome do dentista<!-- Puxar do Banco --></p>
                    <p>Descrição da Consulta<!-- Puxar do Banco --></p>
                    <p>8:03<!-- Horario --></p>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="activity_box">
              <div class="scrollbar" id="style-2">
                <div class="activity-row">
                  <div class="col-xs-3 activity-img"><img src='images/paciente.jpg' class="img-responsive" alt=""/></div>
                  <div class="col-xs-9 activity-desc" style="padding-bottom: 15px">
                    <h5>Nome do paciente<!-- Puxar do banco --></h5>
                    <p>Nome do dentista<!-- Puxar do Banco --></p>
                    <p>Descrição da Consulta<!-- Puxar do Banco --></p>
                    <p>8:03<!-- Horario --></p>
                  </div>
                  <div class="clearfix"> </div>
                </div>
                <div class="activity-row">
                  <div class="col-xs-3 activity-img"><img src='images/paciente.jpg' class="img-responsive" alt=""/></div>
                  <div class="col-xs-9 activity-desc" style="padding-bottom: 15px">
                    <h5>Nome do paciente<!-- Puxar do banco --></h5>
                    <p>Nome do dentista<!-- Puxar do Banco --></p>
                    <p>Descrição da Consulta<!-- Puxar do Banco --></p>
                    <p>8:03<!-- Horario --></p>
                  </div>
                  <div class="clearfix"> </div>
                </div>
                <div class="activity-row">
                  <div class="col-xs-3 activity-img"><img src='images/paciente.jpg' class="img-responsive" alt=""/></div>
                  <div class="col-xs-9 activity-desc" style="padding-bottom: 15px">
                    <h5>Nome do paciente<!-- Puxar do banco --></h5>
                    <p>Nome do dentista<!-- Puxar do Banco --></p>
                    <p>Descrição da Consulta<!-- Puxar do Banco --></p>
                    <p>8:03<!-- Horario --></p>
                  </div>
                  <div class="clearfix"> </div>
                </div>
                <div class="activity-row1">
                  <div class="col-xs-3 activity-img"><img src='images/paciente.jpg' class="img-responsive" alt=""/></div>
                  <div class="col-xs-9 activity-desc" style="padding-bottom: 15px">
                    <h5>Nome do paciente<!-- Puxar do banco --></h5>
                    <p>Nome do dentista<!-- Puxar do Banco --></p>
                    <p>Descrição da Consulta<!-- Puxar do Banco --></p>
                    <p>8:03<!-- Horario --></p>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="span_11" style="padding: 0;border: 0;">
            <div class="col-md-6 col_4">
              <link rel="stylesheet" href="css/clndr.css" type="text/css" />
              <script src="js/underscore-min.js" type="text/javascript"></script>
              <script src= "js/moment-2.2.1.js" type="text/javascript"></script>
              <script src="js/clndr.js" type="text/javascript"></script>
              <script src="js/site.js" type="text/javascript"></script>
            </div>
            <div class="clearfix"> </div>
          </div>
          <div>
            <center><p id="textopreto">© 2018 Fada do Dente. Todos os Direitos Reservados. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desenvolvido por &nbsp;&nbsp;<a href="http://sw5.com.br/" target="_blank"><img id="logojf" src="images/sw5.png" width="75" height="39"></a></p></center>
          </div>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>

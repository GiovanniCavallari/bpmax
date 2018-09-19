<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Painel Administrativo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ URL::asset('admin-assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ URL::asset('admin-assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ URL::asset('admin-assets/css/fontastic.css') }}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ URL::asset('admin-assets/css/style.blue.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ URL::asset('admin-assets/css/custom.css') }}">
    <!-- colorpick -->
    <link rel="stylesheet" href="{{ URL::asset('admin-assets/vendor/colorpicker/colorpicker.css') }}" type="text/css" />
    
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ URL::asset('img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ URL::asset('img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">

      <!-- Header-->
      <header class="header">
        <nav class="navbar">

          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              
              <!-- Navbar Header-->
              <div class="navbar-header">
                  <a href="home.php" class="navbar-brand margintoplogo">
                    <div class="brand-text brand-big">
                      <img src="{{URL::asset('img/logo-bpmax.png')}}" alt="Logo BPMax" class="brand-text brand-big" style="width: 187px; height: auto">
                    </div>
                    <div class="brand-text brand-small">
                      <img src="../img/logomini.png" alt="Logo BPMax" class="brand-text brand-small" style="width: 30px; height: auto">
                    </div>
                  </a>
                  <div class="text-right divbotaomobile">
                    <a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                  </div>
              </div>

              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                
                <!-- usuario -->
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link">
                    <i class="fa fa-user"></i><span class="d-none d-sm-inline-block ml-2">{{Auth::user()->name}}</span>
                  </a>
                <!-- fim usuario -->

                <!-- sair -->
                <li class="nav-item">
                  <a href="{{route('user.logout')}}" class="nav-link logout">
                    Sair<i class="fa fa-sign-out"></i>
                  </a>
                </li>
                <!-- fim sair -->

              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- fim header -->

      <div class="page-content d-flex align-items-stretch"> 
        
        <!-- menu lateral -->
        <nav class="side-navbar">

          <ul class="list-unstyled margintoplinkhome">
            <li class="active">
              <a href="{{route('admin.dashboard')}}"> 
                <i class="icon-home"></i>
                Painel de Controle 
              </a>
            </li>
          </ul>

          <span class="heading">Sistema</span>
          <ul class="list-unstyled">
            <li>
              <a href="configuracoes.php"> <i class="fa fa-cogs"></i>Configurações </a>
            </li>

            <li>
              <a href="#menuDropdown18" aria-expanded="false" data-toggle="collapse"> 
                <i class="fas fa-briefcase-medical"></i>Alas do hospital
              </a>
              <ul id="menuDropdown18" class="collapse list-unstyled ">
                <li><a href="{{route('admin.alas.listar')}}">Listar</a></li>
                <li><a href="{{route('admin.alas.cadastrar')}}">Cadastrar</a></li>
              </ul>
            </li>

            <li>
              <a href="#menuDropdown6" aria-expanded="false" data-toggle="collapse"> 
                <i class="fa fa-robot"></i>Robôs
              </a>
              <ul id="menuDropdown6" class="collapse list-unstyled ">
                <li><a href="robos-listar.php">Listar</a></li>
                <li><a href="robos-cadastrar.php">Cadastrar</a></li>
              </ul>
            </li>

            <li>
              <a href="#menuDropdown7" aria-expanded="false" data-toggle="collapse"> 
                <i class="fa fa-user-md"></i>Colaboradores
              </a>
              <ul id="menuDropdown7" class="collapse list-unstyled ">
                <li><a href="moedas-listar.php">Listar</a></li>
                <li><a href="moedas-cadastrar.php">Cadastrar</a></li>
              </ul>
            </li>

            <li>
              <a href="#menuDropdown10" aria-expanded="false" data-toggle="collapse"> 
                <i class="fa fa-users"></i>Usuários
              </a>
              <ul id="menuDropdown10" class="collapse list-unstyled ">
                <li><a href="moedas-listar.php">Listar</a></li>
                <li><a href="moedas-cadastrar.php">Cadastrar</a></li>
              </ul>
            </li>

            <li>
              <a href="#menuDropdown12" aria-expanded="false" data-toggle="collapse"> 
                <i class="fa fa-list"></i>Registro de atividades
              </a>
              <ul id="menuDropdown12" class="collapse list-unstyled ">
                <li><a href="log-listar.php">Listar</a></li>
                <li><a href="log-buscar.php">Buscar</a></li>
              </ul>
            </li>
          </ul>

        </nav>
        <!-- fim menu lateral -->

        <!-- conteudo -->
        <div class="content-inner">

          @yield('content-admin')          

          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12 text-center">
                  <a href="" class="sizedeveloper">Desenvolvido pela Equipe BPMax &copy; Todos os direitos reservados.</a>
                </div>
              </div>
            </div>
          </footer>
        </div>
        <!-- fim conteudo -->

      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ URL::asset('admin-assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('admin-assets/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ URL::asset('admin-assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    
    @yield('scripts')
    
    <script src="{{ URL::asset('admin-assets/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ URL::asset('admin-assets/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ URL::asset('admin-assets/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('admin-assets/js/charts-custom.js') }}"></script>
    <!-- Main File-->
    <script src="{{ URL::asset('admin-assets/js/front.js') }}"></script>

    <!-- marcaras -->
    <script type="text/javascript">
      //MÁSCARAS
      /* Máscaras ER */

      function mascara(o,f){
          v_obj=o
          v_fun=f
          setTimeout("execmascara()",1)
      }

      function execmascara(){
          v_obj.value=v_fun(v_obj.value)
      }

      function mvalor(v){
          v=v.replace(/\D/g,"");//Remove tudo o que não é dígito
          v=v.replace(/(\d)(\d{2})$/,"$1.$2");//coloca a virgula antes dos 2 últimos dígitos
          return v;
      }

      function mnum(v){
          v=v.replace(/\D/g,"");       
          return v;
      }

      function formatar(mascara, documento, e) {
          var code = e.keyCode || e.code;
          if (code == 8 || code == 46) return;
          var i = documento.value.length;
          var saida = mascara.substring(0, 1);
          var texto = mascara.substring(i);
          if (texto.substring(0, 1) != saida) {
              documento.value += texto.substring(0, 1);
          }
      }

      function mascaraAll(t, mask){
         var i = t.value.length;
         var saida = mask.substring(1,0);
         var texto = mask.substring(i)
         if (texto.substring(0,1) != saida){
          t.value += texto.substring(0,1);
         }
       }

       function mascaraAll2(t, mask){
         var i = t.value.length;
         var saida = mask.substring(1,0);
         var texto = mask.substring(i)
         if (texto.substring(0,1) != saida){
          t.value += texto.substring(0,1);
         }
       }
  </script>
  </body>
</html>
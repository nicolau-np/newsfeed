<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('assets/img/maisfibras.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('assets/img/maisfibras.png')}}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('assets/css/style_form.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.css')}}">
<title>{{$title}}</title>
</head>
<body>
    <div class="container">
        @if ($type!="login")
        <div class="menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Mais Fibras</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-link @if($menu=='Home') active @endif" aria-current="page" href="/admin/">Home</a>
                      <a class="nav-link @if($menu=='Usuários') active @endif" href="/admin/usuarios/">Usuários</a>
                      <a class="nav-link @if($menu=='Categorias') active @endif" href="/admin/servicos/">Serviços</a>
                      <a class="nav-link @if($menu=='Subscritos') active @endif" href="/admin/subscritos/">Subscritos</a>
                      <a class="nav-link @if($menu=='Notícias') active @endif" href="/admin/noticias/">Notícias</a>
                      <a class="nav-link" href="/logout" tabindex="-1" aria-disabled="true">Logout</a>
                    </div>
                  </div>
                </div>
              </nav>
        </div>
        @endif
      
    
        <div class="content">
            @yield('content')
        </div>
    
        <div class="rodape">
    
        </div>  
    </div>
 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.esm.min.js"></script>

    <script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
  $(document).ready(function(){
// Summernote

$('.textarea').summernote({
      toolbar: [
        ['basic', ['style', 'fontname', 'fontsize']],
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['forecolor', 'backcolor']],
        ['block', ['ul', 'ol', 'paragraph']],
        ['media', ['link', 'picture', 'video', 'table', 'hr']],
        ['height', ['height', 'codeview', 'fullscreen', 'undo', 'redo']]
      ]
    });
  });
    
 
</script>
</body>
</html>
<link href="{{ asset('css/fontawesome/all.min.css') }}" rel="stylesheet">

<div class="page_content_wrap">

   <div class="content_wrap">
        <div class="text-align-center error-404">
            <i class="fa fa-exclamation-triangle"></i>
            <h1 class="huge titulo_404">{{__('Error 503')}}</h1>
          
         	<p class="subtitulo_404"><strong>{{__('Sorry - We are undergoing maintenance!')}}</strong></p>
         	<p class="contenido_404">{{__('The page you are looking for is under maintenance. Please try again later.')}} </p>
        </div>
    </div>
    
</div>

<style>

body{
	margin:0;
	background: #eaebef;
    font-family: 'Poppins-Black', sans-serif;
}

.page_content_wrap {
    background: linear-gradient(45deg, #bbbbbb, #fff);
    width: 100%;
    height: 100vh;
}

.content_wrap {
    position: absolute;
    z-index: 1;
}

.content_wrap {
    background: #fff;
    border-top: 45px solid #171717;
    position: absolute;
    z-index: 1;
    left: 50%;
    display: block;
    transform: translate(-50%, -50%);
    top: 50%;
    width: 35vw;
    border-radius: 10px;
    box-shadow: -10px 10px 2px rgb(0 0 0 / 30%);
    padding: 0rem 2rem 2rem 2rem;
    font-family: calibri;
    font-size: 1.5em;
}

h1.huge.titulo_404 {
    margin: 0;
    text-align: center;
    padding: 1rem 0 0 0;
    border-radius: 5px;
}

.content_wrap:before {
    content: "...";
    position: absolute;
    font-size: 100px;
    color: #6eab36;
    margin: -110px 0px 0px -10px;
    font-family: calibri;
}    

.content_wrap i {
    text-align: center;
    width: 100%;
    display: block;
    font-size: 40px;
    color: #6eab36;
    margin: 2rem 0 0rem 0;
}

p.contenido_404, p.subtitulo_404 {
    text-align: center;
}
</style>

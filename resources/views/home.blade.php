@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Touch 2.0</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    
      <div class="container-fluid gedf-wrapper">
              <div class="row">
                  <div class="col-md-3">
                      <div class="card">

                        <!-- columna izquierda datos personales -->
                          <div class="card-body">

                              <div class="h5"><h3></h3></div>
                              <div> <img  src="" alt=""> </div>                           
                              <div class="h7 text-muted">Nombre : Sofia Lourdes Sorhanet</div>
                              <div class="h7">Desarollador de Aplicaciones web, JavaScript, PHP, Java, Python, Ruby, Java, Node.js,
                                  etc.
                              </div>
                          </div>

                          <!-- seguidores y seguidos -->
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item">
                                  <div class="h6 text-muted">Seguidores</div>
                                  <div class="h5">52342</div>
                              </li>
                              <li class="list-group-item">
                                  <div class="h6 text-muted">Siguiendo</div>
                                  <div class="h5">6758</div>
                              </li>
                              <li class="list-group-item">Mensajes</li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-md-6 gedf-main">

                      <!--- hacer una publicacion-->
                      <div class="card gedf-card">
                          <div class="card-header">
                              <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                  <li class="nav-item">
                                      <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Hacer una Publicación</a>
                                  </li>
                                 

                                  <!-- publicar una imagen -->
                                  <li class="nav-item">
                                      <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Subi una Imagen</a>
                                  </li>
                              </ul>
                          </div>

                          <!-- area para escribir una publicacion -->
                          <div class="card-body">
                              <div class="tab-content" id="myTabContent">
                                  <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                      <div class="form-group">
                                          <label class="sr-only" for="message">posts</label>
                                          <textarea class="form-control" id="message" rows="3" placeholder="¿Qué tenés ganas de contar?"></textarea>
                                      </div>

                                  </div>
                                  <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                      <div class="form-group">
                                          <div class="custom-file">
                                              <input type="file" class="custom-file-input" id="customFile">
                                              <label class="custom-file-label" for="customFile">Carga de imágenes</label>
                                          </div>
                                      </div>
                                      <div class="py-4">
                                          
                                      </div>
                                  </div>
                              </div>

                              <!-- boton para compartir -->
                              <div class="btn-toolbar justify-content-between">
                                  <div class="btn-group">
                                      <button type="submit" class="btn btn-primary">Compartir</button>
                                  </div>
                                  <!-- menu desplegable -->
                                  <div class="btn-group">
                                      <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                          aria-expanded="false">
                                          <i class="fa fa-globe"></i>
                                      </button>
                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                          <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Publico</a>
                                          <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Amigos</a>
                                          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Solo yo</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

          <!--publicacion-->
                      <div class="card gedf-card">
                          <div class="card-header">
                              <div class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex justify-content-between align-items-center">
                                    <!-- primer imagen de publicacion -->
                                      <div class="mr-2">
                                          <img class="rounded-circle" width="45" src="" alt="">
                                      </div>
                                      <!-- usuario y quien publico  -->
                                      <div class="ml-2">
                                          <div class="h5 m-0"></div>
                                          <div class="h7 text-muted"></div>
                                      </div>
                                  </div>
                                  <div>
                                   
                                    <!-- boton para puntos de configuracion -->
                                      <div class="dropdown">
                                          <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              <i class="fa fa-ellipsis-h"></i>
                                          </button>
                                         
                                          <!-- eleccion de configuracion -->
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                              <div class="h6 dropdown-header">Configuracion</div>
                                              <a class="dropdown-item" href="#">Seguir</a>
                                              <a class="dropdown-item" href="#">Ocultar</a>
                                              <a class="dropdown-item" href="#">Reportar</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                          </div>

                          <!-- tiempo que lo publico -->
                          <div class="card-body">
                              <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>Hace 10 min </div>
                              <a class="card-link" href="#">
                                  <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adip.</h5>
                              </a>
                            <!-- texto publicAdo -->
                              <p class="card-text">
                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor
                                  sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                              </p>
                          </div>

                          <!-- boton de mg comentar  -->
                          <div class="card-footer">
                              <a href="#" class="card-link"><i class="fa fa-gittip"></i> Me gusta</a>
                              <a href="#" class="card-link"><i class="fa fa-comment"></i> Comentar</a>
                              <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Compartir</a>
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

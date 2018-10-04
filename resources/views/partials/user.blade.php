<!-- Modal -->
  <div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Datos del Usuario</h4>
        </div>
        <div class="modal-body">
          <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('CreateUser') }}">
                        {{ csrf_field() }}
                        <input id="id-user" type="hidden" class="form-control" placeholder="" >
                        <div class="form-group">
                            <label>Nombre</label>
                            <input id="name" type="text" class="form-control" placeholder="" >
                        </div>
                         <div class="form-group">
                            <label>Correo</label>
                            <input id="mail" type="email" class="form-control" placeholder="" >
                         </div>
                        <div class="form-group">
                            <label>Rol</label>
                            <select id="Rol" class="form-control">
                              @foreach($roles as $rol) 
                                <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                              @endforeach                  
                            </select>
                        </div>
                        <div id="tecnic" class="form-group">
                            <label>¿Es Técnico?</label>
                            <select id="tecnico" class="form-control">
                                <option value="00">No</option>
                              @foreach($tecnicos as $tecnico) 
                                <option value="{{ $tecnico->id }}">{{ $tecnico->nombres.' '.$tecnico->apellidos }}</option>
                              @endforeach                  
                            </select>
                        </div>
                        <div id="clave" class="form-group">
                            <label>Password</label>
                            <input id="Password" type="password" class="form-control" placeholder="" >
                        </div> 
                        <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                              <button id="actualizarUser" onclick="saveData()" type="button" class="btn btn-primary">Salvar Cambios</button>
                              <button id="salvarCambiosUser" onclick="saveUser()" type="button" class="btn btn-primary">Ingresar User</button>
                        </div>                       
                    </form>
                </div>
        </div>
        
      </div>
    </div>
  </div>
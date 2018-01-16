<script>
    $(function(){
       $('#form-user').submit(function(e){
//          alert("SUBMIT") ;
          e.preventDefault();
          LoadButton($('#btnSave'));
          $.post($(this).attr('action'), $(this).serialize(), function(data){
              Ready();
              ReloadGrid(grid, 'usuarios/data');
              CloseModal();
              OK("Guardado");
//              SweetAlert("success", "Guardado");
                  
          }).fail(function(err){
              Ready();
              Error(DisplayErrors(err));
//              SweetAlert("error", DisplayErrors(error));
          });
       });

    });
    
    
</script>

<form id ="form-user" action="{{route('usuarios.save', $user)}}">
    
    <h3><?php 
        if($user && $user->rol()->count()){
            echo $user->rol->NombreRol;
        }?>
    </h3>
    
    <div class="form-group">
        <LABEL>Nombre</LABEL>
        <input type="text" name="Nombre" class="form-control" placeholder="Usuario" value="{{$user ? $user->Nombre : ""}}" required="">
    </div>
    
    <div class="form-group">
        <LABEL>RFC</LABEL>
        <input type="text" name="RFC" class="form-control" placeholder="RFC" value="{{$user ? $user->RFC : ""}}" required="">
    </div>
    
    <div class="form-group">
        <LABEL>Correo</LABEL>
        <input type="email" name="Correo" class="form-control" placeholder="Correo" value="{{$user ? $user->Correo : ""}}" required="">
    </div>
    
    <div class="form-group">
        <LABEL>Rol</LABEL>
        <select class="form-control" name="rol_id" required="">
            <option value="">Seleccione</option>
            @foreach($roles as $r)
            <option value="{{$r->id}}" {{($user && $r->id == $user->rol_id ? "selected":"")}} > {{$r->NombreRol}}</option>
            @endforeach
        </select>
    </div>
    
    <div class="form-group">
        <LABEL>Password</LABEL>
        <input type="password" name="Password" class="form-control" placeholder="Password"  required="">
    </div>
    
    <div class="form-group">
        <LABEL>Confirmar</LABEL>
        <input type="password" name="Password_confirmation" class="form-control" placeholder="Confirmar" required="">
    </div>
    
    <p> 
        <button class="btn btn-success btn-lg" type="submit" id ="btnSave"><i class="fa fa-save"></i> Guardar</button>
        
    </p>
    
</form>
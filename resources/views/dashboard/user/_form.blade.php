
    
    
            @csrf
            <div class="form-group">
                <label for="name" class="bmd-label-floating">Nombre</label>
            <input type="text" name="name" class="form-control" id="name" value="{{old('name',$user->name)}}">
              
            </div>
            <div class="form-group">
                <label for="ci" class="bmd-label-floating">CI</label>
                <input type="text" name="ci" class="form-control" id="ci" value="{{old('ci',$user->ci)}}">
          
            </div>
            <div class="form-group">
                <label for="email" class="bmd-label-floating">Correo</label>
                <input type="email" name="email" class="form-control" id="email" value="{{old('email',$user->email)}}">
          
            </div>
            <div class="form-group">
                <label for="telf" class="bmd-label-floating">Telefono</label>
                <input type="telf" name="telf" class="form-control" id="telf" value="{{old('telf',$user->telf)}}">
          
            </div>
            <div class="form-group">
                <label for="form_control" class="bmd-label-floating"> Rol</label>
          <select name="rol_id" class="form-control selectpicker" data-live-search="true" id="rol_id">
          
           @include('dashboard.partials.option-rol-admin-regular')
          
           

          </select>
            </div>
          <div class="form-group">
            <label for="password" class="bmd-label-floating">Contrasena</label>

            
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
               
            
            <div class="form-group">
                <label for="password-confirm" class="bmd-label-floating">Confirmar Contrasena</label>

                
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
               
            </div>
        </div>
            
              <input type="submit" class="btn btn-success btn-lg btn-round" value="Guardar">
         
   
      





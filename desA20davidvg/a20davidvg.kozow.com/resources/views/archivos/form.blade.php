

 <div class="row mb-3">
    <label class="col-md-4 col-form-label text-md-end"for="nombre">Titulo:</label>
    <div class="col-md-6">
    <input type="text" class="form-control" name="titulo" id="titulo">
    @error("titulo")
        <small class="text-danger">{{$message}}</small>
    @enderror
    </div>
 </div>
 <div class="row mb-3">
        <label class =" col-md-4 col-form-label text-md-end"for="exampleFormControlTextarea1">Descripción</label>
        <div class="col-md-6">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" form="myForm" name="descripcion"></textarea>
      
 
    @error("descripcion")
        <small class="text-danger">{{$message}}</small>
    @enderror
 </div>
 </div>
    <div class="row mb-3">
        <label class="col-md-4 col-form-label text-md-end" for="enlace">Enlace:</label>
        <div class="col-md-6">
        <input type="file" class="form-control" name="enlace" id="enlace">
        @error("enlace")
            <small class="text-danger">{{$message}}</small>
        @enderror
        </div>    
    </div>



    </div>
   <center> <input type="submit" class= "btn btn-success" name="enviar"></center>
    
    
    
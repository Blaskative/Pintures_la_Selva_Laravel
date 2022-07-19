<div>

    <div class="container center">
        <div class="row">
            <div class="col-md-12">
                <h1 class="white">Pujar Fotografia</h1>
                <p class="white">Puja una fotografia per la teva web</p>
            </div>
        </div>
        
        <form form wire:submit.prevent="crear">
            <div class="row">
                <div class="col-md-3 center">
                   
                </div>
                <div class="col-md-6 col-md-offset-3 center">
                    <div class="btn-container">
                        <h1 class="imgupload"><i class="fa fa-file-image-o"></i></h1>
                        <h1 class="imgupload ok"><i class="fa fa-check"></i></h1>
                        <h1 class="imgupload stop"><i class="fa fa-times"></i></h1>
                        <p id="namefile">Comproba que sigui una fotografia</p>
                        <button type="button" id="btnup" class="btn btn-primary btn-lg">Escolleix la teva imatge!</button>
                        <input type="file" wire:model="photo" name="photo" id="photo">
                        <br> @error('photo') <span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
            <div class="row">
                <div class="col-md-6 d-flex justify-content-end">
                    <label style="color: white">Title</label>
                </div>
                <div class="col-md-6 d-flex justify-content-first">
                    <input type="text"  wire:model="titol" name="titol" placeholder="Posali un títol a la imatge">
                    <br> @error('titol') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <label style="color: white">Descripció</label>
                </div>
                <div class="col-md-6 d-flex justify-content-first">
                  
                    <select class="form-control" wire:model="apartat" style="width: 100%">
                            <option value="1">Catalegs</option>
                            <option value="2">Façanes</option>
                            <option value="3">Interiors de Cases</option>
                            <option value="4">Cel Oberts</option>
                            <option value="5">Locals</option>
                            <option value="6">Obra Nova</option>
                    </select>
                    <br> @error('apartat') <span class="text-danger">{{$message}}</span>@enderror
                </div>			
                <div class="col-md-12">
                    <input type="submit" class="btn btn-danger" name="btnAddMore" value="Enviar"/>
                </div>
            </div>
        </form>
    </div>
</div>

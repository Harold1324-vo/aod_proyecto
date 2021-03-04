<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">
    <h1>Formulario para los teclados.</h1>
    <form action="{{ route('keyboards.store') }}" method="post">
        @csrf
        <div>
            <label for="">Marca: </label>
            <input class="form-control" type="text" name="brand" id="" placeholder="Marca">
        </div>
        <div>
            <label for="">Modelo: </label>
            <input class="form-control" type="text" name="model" id="" placeholder="Modelo">
        </div>
        <div>
            <label for="">Fabricante: </label>
            <input class="form-control" type="text" name="maker" id="" placeholder="Fabricante">
        </div>
        <div>
            <label for="">Color: </label>
            <input class="form-control" type="text" name="color" id="" placeholder="Color">
        </div>
        <div>
            <label for="">Peso: </label>
            <input class="form-control" type="number" name="weight" id="" placeholder="Peso">
        </div>
        <div>
            <label for="">Altura: </label>
            <input class="form-control" type="number" name="hight" id="" placeholder="Altura">
        </div>
        <div>
            <label for="">Ancho: </label>
            <input class="form-control" type="number" name="broad" id="" placeholder="Ancho">
        </div>
        <div>
            <label for="">Resolución: </label>
            <input class="form-control" type="text" name="resolution" id="" placeholder="Resolución">
        </div>
        <div>
            <label for="">N° puertos USB: </label>
            <input class="form-control" type="number" name="usbNumber" id="" placeholder="N° puertos USB">
        </div>
        <div>
            <label for="">Plataforma: </label>
            <input class="form-control" type="text" name="platform" id="" placeholder="Plataforma">
        </div>
        <div>
            <label for="">Sistema Operativo: </label>
            <input class="form-control" type="text" name="so" id="" placeholder="Sistema Operativo">
        </div>
        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="">Comentarios: </label>
            <input class="form-control" type="text" name="commentary" id="" placeholder="Comentarios">
        </div>
        
        <input class="btn btn-primary" type="submit" value="Guardar">
    </form>
</div>
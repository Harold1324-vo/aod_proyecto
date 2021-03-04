<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">
    <h1>Formulario para las computadoras.</h1>
    <form action="{{ route('computers.store') }}" method="post">
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
            <label for="">Procesador: </label>
            <input class="form-control" type="text" name="processor" id="" placeholder="Procesador">
        </div>
        <div>
            <label for="">Tamaño de RAM: </label>
            <input class="form-control" type="number" name="sizeRam" id="" placeholder="Tamaño de RAM">
        </div>
        <div>
            <label for="">Tecnología de RAM: </label>
            <input class="form-control" type="text" name="typeRam" id="" placeholder="Tecnología de RAM">
        </div>
        <div>
            <label for="">Capacidad del HDD: </label>
            <input class="form-control" type="number" name="capacityHDD" id="" placeholder="Capacidad del HDD">
        </div>
        <div>
            <label for="">Peso: </label>
            <input class="form-control" type="number" name="weight" id="" placeholder="Peso">
        </div>
        <div>
            <label for="">Color: </label>
            <input class="form-control" type="text" name="color" id="" placeholder="Color">
        </div>
        <div>
            <label for="">Tamaño de la Pantalla: </label>
            <input class="form-control" type="number" name="sizeScreen" id="" placeholder="Tamaño de la Pantalla">
        </div>
        <div>
            <label for="">Sistema Operativo: </label>
            <input class="form-control" type="text" name="so" id="" placeholder="Sistema Operativo">
        </div>
        <div>
            <label for="">N° puertos USB: </label>
            <input class="form-control" type="number" name="usbNumber" id="" placeholder="N° puertos USB">
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
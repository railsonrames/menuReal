<h1>Edição de Restaurante</h1>
<hr>

<form action="{{route('restaurante.update', ['restaurante' => $restaurante->id])}}" method="post">
    {{csrf_field()}}

    <div class="form-group">
        <label for="">Nome do restaurante:</label>
        <input type="text" name="nome" id="" value="{{$restaurante->nome}}">
    </div>
    <div class="form-group">
        <label for="">Endereço do restaurante:</label>
        <input type="text" name="endereco" id="" value="{{$restaurante->endereco}}">
    </div>
    <div class="form-group">
        <label for="">Bairro do restaurante:</label>
        <input type="text" name="bairro" id="" value="{{$restaurante->bairro}}">
    </div>
    <div class="form-group">
        <label for="">Cidade do restaurante:</label>
        <input type="text" name="cidade" id="" value="{{$restaurante->cidade}}">
    </div>
    <div class="form-group">
        <label for="">Telefone do restaurante:</label>
        <input type="text" name="telefone" id="" value="{{$restaurante->telefone}}">
    </div>
    <div class="form-group">
        <label for="">Descirção do restaurante:</label>
        <textarea name="descricao" id="" cols="30" rows="10">{{$restaurante->descricao}}    </textarea>
    </div>
    <div class="form-group">
        <label for="">Responsável pelo restaurante:</label>
        <input type="text" name="id_usuario_responsavel" id="" value="{{$restaurante->id_usuario_responsavel}}">
    </div>
    <input class="btn btn-danger" type="submit" value="Atualizar">

</form>

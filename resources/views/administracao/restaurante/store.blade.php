<h1>Inserção de Restaurante</h1>
<hr>

<form action="{{route('restaurante.store')}}" method="post">
    {{csrf_field()}}

    <div class="form-group">
        <label for="">Nome do restaurante:</label>
        <input type="text" name="nome" id="">
    </div>
    <div class="form-group">
        <label for="">Endereço do restaurante:</label>
        <input type="text" name="endereco" id="">
    </div>
    <div class="form-group">
        <label for="">Bairro do restaurante:</label>
        <input type="text" name="bairro" id="">
    </div>
    <div class="form-group">
        <label for="">Cidade do restaurante:</label>
        <input type="text" name="cidade" id="">
    </div>
    <div class="form-group">
        <label for="">Telefone do restaurante:</label>
        <input type="text" name="telefone" id="">
    </div>
    <div class="form-group">
        <label for="">Descrição do restaurante:</label>
        <textarea name="descricao" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="">Responsável pelo restaurante:</label>
        <input type="text" name="id_usuario_responsavel" id="">
    </div>
    <input class="btn btn-danger" type="submit" value="Cadastrar">

</form>

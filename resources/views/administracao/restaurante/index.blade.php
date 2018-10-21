<table>
    <thread>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Criado em</th>
            <th>Ações</th>
        </tr>
    </thread>
    <tbody>
    @foreach($restaurantes as $r)
        <tr>
            <td>{{$r->nome}}</td>
            <td>{{$r->descricao}}</td>
            <td>{{$r->created_at}}</td>
            <td>
                <a href="{{route('restaurante.edit',['restaurante' => $r->id])}}">Editar</a>
                <a href="{{route('restaurante.delete',['id' => $r->id])}}">Excluir</a>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>

<div class="container-fluid">
    <h3>Produtos</h3>

    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th style="width: 50%">ID</th>
            <th>Nome</th>
            <th>Peso</th>
            <th>Descrição</th>
        </tr>
        </thead>
        <tbody>
        @foreach($produces as $prod)
            <tr>
                <td>{{ $prod->id }}</td>
                <td>{{ $prod->nome }}</td>
                <td>{{ $prod->peso}}</td>
                <td>{{ $prod->descricao}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@extends('layouts.main')
@section('titulo', 'ADPAN - RECIBO DIGITAL')
@section('conteudo')

@if (session('msg'))
        <script type="text/javascript">
            alert("{{ session('msg') }}");
        </script>
    @elseif (session('error'))
        <script type="text/javascript">
            alert("{{ session('error') }}");
        </script>
    @endif
    <h1>Bem-vindo usuário, a área logada do sistema de gestão de Igrejas - AD PAN</h1>
        <a href="/new">novo recibo</a><br>       
        <table>
            Contribuições
            <tr>
                <th>
                    Editar
                </th>
                <th>
                    Excluir
                </th>
                <th>
                    Nome
                </th>
                <th>
                    Tipo_recibo
                </th>
                <th>
                    valor
                </th>
                <th>
                    imprimir
                </th>
            </tr>
        <?php 
        foreach ($receitas as $receita) {
            echo "<tr>";
            echo "<td>";
            ?>
            <a href="{{ route('edit', ['id' => $receita->id]) }}">&#9998</a> </td>
            <?php
            echo "<td>";
        ?>
            <form method='POST' action="{{route('destroy', ['id' => $receita->id])}}">
            @csrf  
            @method('DELETE') 
                <input type='text' name='id_delete' value='{{$receita->id}}'style='display: none;'>
                
                </input>
                <button>
                🗑
                </button>
            </form>

            <?php echo "</td>";
            echo "<td>" . $receita->NOME . "</td>";
            echo "<td>" . $receita->TIPO . "</td>";
            echo "<td>" . $receita->VALOR . "</td>";
    echo "<td>";
?>
<a href="{{  route('pdf',['id' => $receita->id])}}">&#128438;</a></td>";
            <?php
            echo "</tr>";
        }
    ?>
            </tr>
        </table>
@endsection
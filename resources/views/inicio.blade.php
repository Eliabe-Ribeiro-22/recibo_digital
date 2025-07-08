<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADPAN RECIBO DIGITAL</title>
</head>
<body>
     @if (session('msg'))
        <script type="text/javascript">
            alert("{{ session('msg') }}");
        </script>
    @elseif (session('error'))
        <script type="text/javascript">
            alert("{{ session('error') }}");
        </script>
    @endif
    
    <header>cabeçalho</header>
    <main>
        <h1>Bem-vindo usuário, a área logada do sistema de gestão de Igrejas - AD PAN</h1>
        <a href="/new">novo recibo</a><br>       
        <table>
            Contribuições
            <tr>
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
            echo "<td>" . $receita->NOME . "</td>";
            echo "<td>" . "tipo_receita" . "<td>";
            echo "<td>" . $receita->VALOR . "</td>";
            echo "<td>&#128438;</td>";
            echo "</tr>";
        }
    ?>
            </tr>
        </table>
    </main>
    <footer>rodapé</footer>
</body>
</html>

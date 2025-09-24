<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Criar nova tarefa</h1>
    <form method="POST" action="/tasks">
        @csrf
        <label for="tecnico">Nome do tecnico: </label><br>
        <input type="text" id="tecnico" name="tecnico" required><br><br>

        <table id="itens-tabela">
            <thead>
                <tr>
                    <th>Descrição da tarefa</th>
                    <th>Valor</th>
                    <th>Data</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="itens[0][description]" required></td>
                    <td><input type="number" name="itens[0][valor]" required></td>
                    <td><input type="date" name="itens[0][data]" required></td>
                    <td><input type="button" name="removerLinha[this]" required></td>
                </tr>
            </tbody>
        </table>


        <button type="button" onclick="adicionarLinha()">adicionar Linha</button>

        <button type="submit">Salvar Tarefas</button>
    </form>

    <script>

        let contadorDeItens = 1;

        function adicionarLinha() {
            const tabela = document.getElementById('itens-tabela').getElementsByTagName('tbody')[0];
            const novaLinha = tabela.insertRow();

            // Célula 1: Descrição
            const celulaDescrição = novaLinha.insertCell(0);
            celulaDescrição.innerHTML = `<input type="text" name="itens[contadorDeItens][description]" required>`;

            
            // Célula 2: Valor
            const celulaValor = novaLinha.insertCell(1);
            celulaValor.innerHTML = `<input type="number" step="0.01" name="itens[contadorDeItens][valor]" required>`;
            
            // Célula 3: Data
            const celulaData = novaLinha.insertCell(2);
            celulaData.innerHTML = `<input type="date" name="itens[contadorDeItens][data]" required>`;
        
            // Célula 4: Botão remver
            const celulaBotao = novaLinha.insertCell(3);
            celulaBotao.innerHTML = `<button type="button" onclick="removerLinha(this)">Remover linha</button>`;
            
            contadorDeItens++;
        }


        function removerLinha(botao) {
            const linha = botao.parentNode.parentNode;
            linha.parentNode.removeChild(linha);
        }
    </script>
</body>
</html>
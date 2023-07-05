1. Listar todas as tarefas:
Rota: /tarefas
Método: GET
Resposta esperada: Retornar todas as tarefas listadas pelo comando POST.

2. Criar tarefas:
Rota: /tarefas
Método: POST
Parâmetros: Título(obrigatório); Descrição(obrigatório); Status(Completo ou Incompleto).
Resposta esperada: Cria uma nova tarefa com o id subjacente do ultimo id criado, onde contem o título da tarefa, sua descrição e o status.

3. Visualiza a tarefa específica listada:
Rota: /tarefas/{id}
Método: GET
Parâmetros: id(obrigatório).
Resposta esperada: Retorna a tarefa específica listada. Caso a tarefa não exista ele retornará dizendo que a tarefa não existe.

4. Atualizar uma tarefa:
Rota: /tarefas/{id}
Método: PUT
Parâmetros: ID(obrigatório); Título(opcional); Descrição(opcional); Status(Completo ou Incompleto).
Resposta esperada: Atualizar a tarefa específica mencionada pelo ID. Caso a tarefa não exista ele retornará dizendo que a tarefa não existe.

5. Excluir um tarefa especifica:
Rota: /tarefas/{id}
Método: DELETE
Parâmetros: ID(obrigatório).
Resposta esperada: Excluir a tarefa mencionada pelo id. Caso a tarefa não exista ele retornará dizendo que a tarefa não existe.

https://youtu.be/V6WSbCr3Qz4

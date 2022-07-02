<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo App</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png" alt="Logo">
        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">Criar Tarefa</a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graphHeader">
                        <h3>Progresso do dia</h3>
                        <div class="graphHeaderLine"></div>
                        <div class="dateComponent">
                            <img src="/assets/images/icon-prev.png" alt="">
                            13 de Dez
                            <img src="/assets/images/icon-next.png" alt="">
                        </div>
                    </div>
                    <div class="graphHeaderSubtitle">Tarefas: <b>3/6</b></div>
                    <div class="graphHeaderPlaceholder"></div>
                    <div class="tasksLeftFooter">
                        <img src="/assets/images/icon-info.png" alt="">
                        Restam 3 tarefas para serem realizadas
                    </div>

                </section>
                <section class="list">
                    <div class="listHeader">
                        <select class="listHeaderSelect">
                            <option value="1">Todas as Tarefas</option>
                        </select>
                    </div>
                    <div class="taskList">
                        <div class="task">
                            <div class="taskTitle">
                                <input type="checkbox" />
                                <div class="title">Titulo da Tarefa</div>
                            </div>
                            <div class="taskPriority">
                                <div class="sphere"></div>
                                <div>Titulo da Tarefa</div>
                            </div>
                            <div class="taskActions">
                                <a href="#"><img src="/assets/images/icon-edit.png" alt=""></a>
                                <a href="#"><img src="/assets/images/icon-delete.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </section>

            </main>
        </div>
    </div>
</body>

</html>

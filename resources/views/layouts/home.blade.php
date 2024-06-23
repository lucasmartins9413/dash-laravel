<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link rel="stylesheet" href="/assets/style/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img width="100%" src="/assets/images/logo.png" alt="">
        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">Criar Tarefa</a>
                <a href="#" class="btn btn-primary">Loggout</a>
            </nav>
            <main>

                <section class="graphic">
                    <div class="graph_header">
                        <h2>Progresso do Dia</h2>
                        <div class="graph_header-line"></div>
                        <div class="graph_header-date">
                            <img src="/assets/images/icon-prev.png" alt="">
                            <date>13/12/2024</date>
                            <img src="/assets/images/icon-next.png" alt="">
                        </div>
                    </div>

                    <div class="graph_header-subtitle">Tarefas: <b>3/6</b></div>
                    <div class="graph_placeholder">
                        
                    </div>
                    <p class="tasks_left"><img src="/assets/images/icon-info.png" alt="">Restam 3 tarefas para serem realizadas</p>
                </section>
                <section class="list">
                    <div class="list_header">
                        <select name="" id="">
                            <option value="1">Todas as tarefas</option>
                        </select>
                    </div>

                    <div class="task_list">
                        <div class="task_single">
                            <div class="title">
                                <input type="checkbox" name="" id="">
                                <h3>Título da tarefa</h3>
                            </div>
                            <div class="priority">
                                <div class="sphere"></div>
                                <h3>Título da tarefa</h3>
                            </div>
                            <div class="actions">
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
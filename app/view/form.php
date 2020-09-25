<main role="main" class="flex-shrink-0">

    <div class="container" id="app">

        <div class="alert alert-primary" role="alert">
          <h2>Добавление фото </h2>
        </div>
        <?php



       if(isset($data['success']))
       {
           echo '<div class="alert alert-success" role="alert">
           Файл успешно загружен!
        </div>';
       }

        if(isset($data['error']))
        {
            echo '<div class="alert alert-danger" role="alert">
            Произошла ошибка!
        </div>';
        }
           ?>
        <h1 class="title"></h1>
        <form id="upload-container" method="post" action="/add"  enctype="multipart/form-data" >

            <div>
                <input id="file-input" type="file" name="file" >
                <label for="file-input"></label>

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Телефон</label>
                <input  type="tel"  name="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required >
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required  value="">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Дата рождения</label>
                <input type="text" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required value="">
                <small id="emailHelp" class="form-text text-muted"></small>
                <br>
                <button  type="submit" class="btn btn-warning">Отправить</button>
            </div>

        </form>


</main>



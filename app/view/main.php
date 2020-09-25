
<main role="main">
<style>
    .card{
        width: 18rem;
    }

</style>
 <section class="jumbotron text-center">
<h2>Фотоальбом</h2>
  </section>

  <a class="album py-5 bg-light">
    <div class="container">

      <div class="row">
          <?php
          // var_dump($data);
          foreach ($data as $key => $value) {?>
          <div class="col-md-4">
          <div class="card">
              <img src="img/<?php echo $value['file']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                  <p class="card-text"><?php echo $value['email']; ?></p>
              </div>
          </div>
          </div>

        <?php }
          ?>

      </div>
        <br>
        <form method="post" action="/">
            <input type="hidden" name="query" value="">
            <button type="submit" class="btn btn-dark">Показать еще</button>
        </form>

    <br>
    </div>

  </div>

</main>

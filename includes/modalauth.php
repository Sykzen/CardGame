<div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="background-color: #e3f2fd">
    <div class="modal-content" style="background-color: #e3f2fd">
      <div class="modal-header">
        <div class="Container">
          <img src="static/brand.png" width="100" height="100" alt="" loading="lazy" />
          <p class="fs-6 fw-bolder">Connexion</p>
        </div>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="auth.php" method="post">
        <div class="p-4">
          <div class="modal-body">
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa-solid fa-user"></i>
              </span>
              <input type="text" name="Pseudo" class="form-control" placeholder="Pseudo" />
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary"><i class="fa-solid fa-lock"></i>
              </span>
              <input name="password" type="password" class="form-control" placeholder="password" />
            </div>
          </div>
          <button class="btn btn-primary text-center mt-2" type="submit" name="button" value="login">
            Déjà inscrit Se connecter
          </button>
          <button class="btn btn-primary text-center mt-2" type="submit" name="button" value="register">
            S'inscrire puis se connecter
          </button>
        </div>




        <div class="modal-footer">


        </div>
      </form>
    </div>
  </div>
</div>
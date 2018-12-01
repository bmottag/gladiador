    <section>
      <div class="bg-image novi-background page-title page-title-custom" style="background-image: url(<?php echo base_url("images/slide-14-3.jpg"); ?>)">
        <div class="page-title-text mar-bottom-4">Login</div>
        <div class="col-sm-10 col-lg-10 col-xl-3 section-auto">
          <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="forms" method="post" action="bat/rd-mailform.php">
            <div class="row spacing-20">
              <div class="col-sm-12">
                <div class="form-group form-wrap-validation">
                  <label class="form-label rd-input-label" for="forms-name2">E-mail</label>
                  <input class="form-control" id="forms-name2" type="text" name="name" data-constraints="@Required">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group form-wrap-validation">
                  <label class="form-label rd-input-label" for="forms-last-name2">Password</label>
                  <input class="form-control" id="forms-last-name2" type="text" name="last-name" data-constraints="@Required">
                </div>
              </div>
              <div class="col col-6"><a class="text-white" href="#">Forgot password?</a></div>
              <div class="col col-6">
                <label class="checkbox text-white">
                  <input type="checkbox" name="remember" checked="">
                  <i></i>Keep me logged in</label>
              </div>
              <div class="col-sm-12 form-button">
                <button class="btn btn-primary btn-block btn-effect-ujarak" type="submit">Login</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
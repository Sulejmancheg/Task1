<p style="margin: auto">
    admin: qwe123 <br>
    user: qwerty <br>
    test: test
</p>

<form action="<?= $this->getModel()->getPageUrl() ?>" class="form-signin" method="post">
    <div class="form-label-group">
	<input type="text" name="login" placeholder="Login" id="login" class="form-control" autofocus required>
	<label for="login">Login</label>
    </div>

    <div class="form-label-group">
	<input type="password" name="password" placeholder="Password" id="password" class="form-control" required>
	<label for="password">Password</label>
    </div>

	<button type="submit" class="w-100 btn btn-lg btn-primary">Войти</button>
</form>

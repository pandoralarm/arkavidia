<nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-konco fixed-top">
	<button style="height: 20px;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		<div class="btn-group">
			<button type="button" style=" font-size: 0.5em;" class="btn btn-konco dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img src="assets/images/icons/menu.png" style="height: 20px;"><br>Menu
			</button>
			<div class="dropdown-menu bg-konco">
				<a class="dropdown-item" href="<?php echo site_url('artikel') ?>">Artikel</a>
				<a class="dropdown-item" href="<?php echo site_url('catalog') ?>">Jual-Beli</a>
			</div>
		</div>
	</button>
	<a class="navbar-brand" href="<?php echo site_url('homepage') ?>"><img src="assets/images/Logo.png" alt="logo" style="height: 32px;"></a>


	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
			</li>
		</ul>

		<form class="form-inline">
			<input class="form-control" style="height: 40px; width: 50vw; min-width: 25vw;" type="search" placeholder="Cari" aria-label="Search">
			<button class="btn btn-secondary mr-2" style="height: 40px;" type="submit"><img src="assets/images/icons/find.png" style="height: 24px;"></button>
		</form>
		<div class="navbar-nav">
			<a class="btn btn-dark mr-1" href="daftar">Daftar</a>
		</div>

		<div class="btn-group">
			<a href="login" class="btn btn-outline-dark">
				Masuk
			</a>
		</div>
	</div>
</nav>

<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container">
  <div class="row">
    <div class="col">
    	<nav class="navbar navbar-dark bg-dark">
	  		<div class="container">
	        	<a class="navbar-brand" href="/coba">Lock (login)</a>
	   		</div>
        </nav>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    			<a href="/logout"><button type="button" class="btn btn-primary">Logout</button></a>
   		 </div>
      <h1>Halaman dua</h1>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>
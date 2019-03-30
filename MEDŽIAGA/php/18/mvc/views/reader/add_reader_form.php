<form class="mt-3" action="<?php echo ROOT?>reader/createReader" method="post">
  <h1>Add Reader</h1>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Serbentautas">
    </div>
    <div class="form-group col-md-6">
      <label for="surname">Surname</label>
      <input type="text" name="surname" class="form-control" id="surname" placeholder="Bordiūras">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="krumas@gmail.com">
    </div>
    <div class="form-group col-md-6">
      <label for="phone">Phone</label>
      <input type="text" name="phone" class="form-control" id="phone" placeholder="+370 600 12345">
    </div>
  </div>
  <button class="btn btn-primary ml-auto d-block" type="submit">Register</button>
  <input type="hidden" name="createReader">
</form>

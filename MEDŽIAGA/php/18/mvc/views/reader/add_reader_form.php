<form class="mt-3" action="<?php echo ROOT ?>reader/createReader" method="post">
  <h1>Add Reader</h1>
  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input class="form-control <?php if (isset($this->args['nameErrors'])) echo 'is-invalid'; ?>"
      <?php
      if (isset($this->args['name'])) echo 'value="' . $this->args['name'] . '"';
      ?>
      type="text" name="name"  id="name" placeholder="Serbentautas">
      <?php
      if (isset($this->args['nameErrors'])) {
        echo '<div class="invalid-feedback">';
        foreach ($this->args['nameErrors'] as $error) echo '<div>' . $error . '</div>';
        echo '</div>';
      }
      ?>
    </div>

    <div class="form-group col-md-6">
      <label for="surname">Surname</label>
      <input class="form-control <?php if (isset($this->args['surnameErrors'])) echo 'is-invalid'; ?>"  
      <?php
      if (isset($this->args['surname'])) echo 'value="' . $this->args['surname'] . '"';
      ?>
      type="text" name="surname"  id="surname" placeholder="Bordiūras">
      <?php
      if (isset($this->args['surnameErrors'])) {
        echo '<div class="invalid-feedback">';
        foreach ($this->args['surnameErrors'] as $error) echo '<div>' . $error . '</div>';
        echo '</div>';
      }
      ?>
    </div>

  </div>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input class="form-control <?php if (isset($this->args['emailErrors'])) echo 'is-invalid'; ?>" 
      <?php
      if (isset($this->args['email'])) echo 'value="' . $this->args['email'] . '"';
      ?>
      type="email" name="email" id="email" placeholder="krumas@gmail.com">
      <?php
      if (isset($this->args['emailErrors'])) {
        echo '<div class="invalid-feedback">';
        foreach ($this->args['emailErrors'] as $error) echo '<div>' . $error . '</div>';
        echo '</div>';
      }
      ?>
    </div>

    <div class="form-group col-md-6">
      <label for="phone" class="clearfix d-block">Phone</label>
      <select name="prefix" class="form-control w-25 float-left">
        <option <?php if (isset($this->args['prefix']) && $this->args['prefix'] == '+370') echo 'selected'; ?> value="+370">+370 Lithuania</option>
        <option <?php if (isset($this->args['prefix']) && $this->args['prefix'] == '+20') echo 'selected'; ?> value="+20">+20 Egypt</option>
        <option <?php if (isset($this->args['prefix']) && $this->args['prefix'] == '+1') echo 'selected'; ?> value="+1">+1 Puerto Rico</option>
      </select>
      <input class="form-control w-75 float-left <?php if (isset($this->args['phoneErrors'])) echo 'is-invalid'; ?>"
      <?php
      if (isset($this->args['phone'])) echo 'value="' . $this->args['phone'] . '"';
      ?>
      type="text" name="phone" class="form-control w-75 float-left" id="phone" placeholder="600 12345">
      <?php
      if (isset($this->args['phoneErrors'])) {
        echo '<div class="invalid-feedback">';
        foreach ($this->args['phoneErrors'] as $error) echo '<div>' . $error . '</div>';
        echo '</div>';
      }
      ?>
    </div>

  </div>
  <button class="btn btn-primary ml-auto d-block" type="submit">Register</button>
  <input type="hidden" name="createReader">
</form>
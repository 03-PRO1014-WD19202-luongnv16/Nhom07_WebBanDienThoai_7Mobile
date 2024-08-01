<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');


body {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  background-color: white;
  font-family: "lato", sans-serif;
}

.signupFrm {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}


.form {
  background-color: white;
  width: 600px;
  border-radius: 8px;
  padding: 20px 40px;
  box-shadow: 0 10px 25px rgba(92, 99, 105, .2);
}

.title {
  font-size: 50px;
  margin-bottom: 50px;
}

.inputContainer {
  position: relative;
  height: 45px;
  width: 90%;
  margin-bottom: 17px;
}

.input {
  position: absolute;
  top: 0px;
  left: 0px;
  height: 100%;
  width: 100%;
  border: 1px solid #DADCE0;
  border-radius: 7px;
  font-size: 16px;
  padding: 0 20px;
  outline: none;
  background: none;
  z-index: 1;
}


.label {
  position: absolute;
  top: 15px;
  left: 15px;
  padding: 0 4px;
  background-color: white;
  color: #DADCE0;
  font-size: 16px;
  transition: 0.5s;
  z-index: 0;
}

::placeholder {
  color: transparent;
}

.submitBtn {
  display: block;
  margin-left: auto;
  padding: 15px 30px;
  border: none;
  background-color: purple;
  color: white;
  border-radius: 6px;
  cursor: pointer;
  font-size: 16px;
  margin-top: 30px;
}

.submitBtn:hover {
  background-color: #9867C5;
  transform: translateY(-2px);
}
.input:focus + .label {
  top: -7px;
  left: 3px;
  z-index: 10;
  font-size: 14px;
  font-weight: 600;
  color: purple;
}

.input:not(:placeholder-shown)+ .label {
  top: -7px;
  left: 3px;
  z-index: 10;
  font-size: 14px;
  font-weight: 600;
}

.input:focus {
  border: 2px solid purple;
}

</style>
<?php if (isset($success)): ?>
    <p style="color: green;"><?= htmlspecialchars($success) ?></p>
<?php endif; ?>

<?php if (isset($error)): ?>
    <p style="color: red;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>
<div class="signupFrm">
    <div class="wrapper">
    <form action="<?= BASE_URL_ADMIN ?>/index.php?act=user-create" class="form" method="post">
      <h1 class="title">Sign up</h1>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="a" name="username">
        <label for="" class="label">user name</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="a" name="email">
        <label for="" class="label">Email</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="a" name="first_name">
        <label for="" class="label">First name</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="last_name" name="last_name">
        <label for="" class="label">Last name</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="a" name="phone">
        <label for="" class="label">phone number</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="a" name="address">
        <label for="" class="label">address</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="a" name="password">
        <label for="" class="label">Password</label>
      </div>
      <div class="inputContainer">
                            <label for="role">Role:</label>
                            <select name="role" id="role" required>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
      </div>
        <!-- <input type="submit" class="submitBtn" value="Sign up"> -->
        <button type="submit" class="submitBtn">Sign up</button>
    </form>
    </div>
  </div>
</body>
<?php
include "header.php";

?>
<h1>Регистрация</h1>
<form method="POST" action="login/user.php">
    <div class="form-group">
        <label for="firstName">Собствено име</label>
        <input type="text" name="firstName" class="form-control" placeholder="Напишете вашето собствено име" id="firstName"  required>
    </div>
    <div class="form-group">
        <label for="middleName">Бащино име</label>
        <input type="text" name="middleName" class="form-control" placeholder="Напишете вашето бащино име" id="middleName"  required>
    </div>
    <div class="form-group">
        <label for="lastName">Фамилно име</label>
        <input type="text" name="lastName" class="form-control" placeholder="Напишете вашето фамилно име" id="lastName"  required>
    </div>
    <div class="form-group">
        <label for="username">Потребителско име</label>
        <input type="text" name="username" class="form-control" placeholder="Напишете вашето потребителско име" id="username"  required>
    </div>
    <div class="form-group">
        <label for="position">Длъжност</label>
        <input type="text" name="position" class="form-control" placeholder="Напишете вашата длъжност" id="position"  required>
    </div>
    <div class="form-group">
        <label for="phoneNumber">Телефонен номер</label>
        <input type="text" name="phoneNumber" class="form-control" placeholder="Напишете телефонният си номер" id="phoneNumber"  required>
    </div>
    <div class="form-group">
        <label for="email">Имейл</label>
        <input type="email" name="email" class="form-control" placeholder="Напишете вашият имейл" id="email"  required>
    </div>
    <div class="form-group">
        <label for="password">Парола</label>
        <input type="password" name="password" class="form-control" placeholder="Напишете вашата парола" id="password"  required>
    </div>
    <div class="form-group">
        <label for="confirmPassword">Подтвърди парола</label>
        <input type="password" name="confirmPassword" class="form-control" placeholder="Напишете вашата парола отново" id="confirmPassword"  required>
    </div>
    <div class="form-group">
        <label for="department">Отдел</label>
        <input type="department" name="department" class="form-control" placeholder="Напишете вашият отдел" id="department"  required>
    </div>
    <div class="form-group">
        <input type="submit" value="Регестрирай" class="btn btn-primary">
        <input type="hidden" name="action" value="register">
    </div>
</form>
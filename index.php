<form method="POST" action="start/register.php">
    <div class="menu">
        <div class="user">
            <input type="text" name="user" placeholder="Enter Nickname" required>
        </div>
        <div class="password">
            <input type="password" name="password" placeholder="Enter password" required>
        </div>
        <div class="repeat-password">
            <input type="password" name="repeat-password" placeholder="repeat password" required>
        </div>
        <div class="email">
            <input type="email" name="email" placeholder="Enter email" required>
        </div>
        <div class="phoneNumber">
            <input type="number" name="phoneNumber" placeholder="Enter phoneNumber" required>
        </div>
        <div class="firstName">
            <input type="text" name="firstName" placeholder="Enter firstName" required>
        </div>
        <div class="middleName">
            <input type="text" name="middleName" placeholder="Enter middleName" required>
        </div>
        <div class="lastName">
            <input type="text" name="lastName" placeholder="Enter lastName" required>
        </div>
        <div name="department" class="department">
                <select id="department" name="department" class="select">
                    <option value="1" data-marker="1">>Отдел 1</option>
                    <option value="2" data-marker="2">>Отдел 2</option>
                </select>
        </div>
        <div name="position" class="position">
                <select id="position" name="position" class="select">
                    <option value="1" data-marker="1">>Длъжност 1</option>
                    <option value="2" data-marker="2">>Длъжност 2</option>
                </select>
        </div>
        <div class="button">
            <input type="submit" name="button" value="Enter">
        </div>
    </div>
</form>
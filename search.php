<form method="POST" action="searchbd.php">
    <div class="search">
        <input id="title" name="search" maxlength="50" class="input-title" required>
        <div name="choose-div" class="choose-div">
                    <select id="choose" name="choose" class="select">
                        <option value="1" data-marker="1">>Търси по всички</option>
                        <option value="2" data-marker="2">>Търси по име</option>
                        <option value="3" data-marker="3">>Търси по презиме</option>
                        <option value="4" data-marker="4">>Търси по фамилия</option>
                        <option value="5" data-marker="5">>Търси по длъжност</option>
                        <option value="6" data-marker="6">>Търси по телефон</option>
                        <option value="7" data-marker="7">>Търси по имейл</option>
                    </select>
        </div>
        <div class="button">
                <input type="submit" name="button" value="Enter">
        </div>
    </div>
</form>
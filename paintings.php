
<html>
    <body>
        <form action="add.php" method="post" enctype="multipart/form-data">
            <h4 class="parametr">Параметри</h4>
            <p>Заглавие:</p>
            <input id="title" name="title" maxlength="50" class="input-title" required>
            <p>Категория:</p>
            <p>
            <select id="news_type" name="news_type" class="select">
                <option value="1" data-marker="1">новина</option>
                <option value="2" data-marker="2">задание за работа</option>
            </select>
            </p>
            <p>Описание:</p>
            <textarea id="description" name="description" maxlength="600" class="input-description" placeholder="" style="height: 130px;" required></textarea>
            <p>.</p>
            <input type="submit" name="upload" value="Континиу">
        </form>
    </body>
</html>
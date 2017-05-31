<form onsubmit="" action="opendir.php" method="get">
    <label for="account">Name:</label>
    <input type="text" name="account">
    <label for="password">Password:</label>
    <input type="password" name="password">
    <label for="birthday">Birthday:</label>
    <input type="date" name="birthday">
    <select name="area">
        <option value="401">南屯區</option>
<!--        開發者希望可以看到郵遞區號==>設定value就行-->
        <option value="402">北屯區</option>
        <option value="403">西屯區</option>
    </select>
    <div>
        <label>
            <input type="radio" name="gender" value="Male" checked> Male<br>
        </label>
        <label>
            <input type="radio" name="gender" value="Female"> Female<br>
        </label>
    </div>
    <div>
        <input type="checkbox" name="Interests[]" value="A" checked>A<br>
        <input type="checkbox" name="Interests[]" value="B">B<br>
        <input type="checkbox" name="Interests[]" value="C">C<br>
        <input type="checkbox" name="Interests[]" value="D">D<br>
        <input type="checkbox" name="Interests[]" value="E">E<br>
        <input type="checkbox" name="Interests[]" value="F">F<br>
    </div>
    <textarea name="message" value="Please type your messages!"></textarea><br>
    <input type="file" name="uplaod"><br>
<!--    start to back-end 'cause developer start to do input & output.-->
    <input type="submit" value="Send">
    <input type="reset" value="Reset">
</form>
<!--// May use php.net-->
<!--// Directory Function || realpath
-->
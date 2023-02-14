
    <form>
          <label for="picture">
                Select a picture:
            </label>
            <select name="picture" id="picture">
            <option value="cat.jpg">Cat</option>
             <option value="apple.jpg">Apple</option>
            </select>
        <div>
            <label for="number">
                Number of kittens to show:
            </label>
            <input name="number" id="number"
                value="<?php
                if (isset($_GET['number'])) { echo htmlspecialchars($_GET['number'], ENT_QUOTES); }
                ?>">    
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
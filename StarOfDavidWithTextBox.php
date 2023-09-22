 <?php
      function DrawStarOfDavid($number) {
          $pattern = "";
          $rows = $number - 2;
          $half = floor($rows / 2);
          for ($i = 0; $i < $rows; $i++) {
              $spaces = abs($i - $half) + 1;
              for ($j = 0; $j < $number; $j++) {
                if (($i == $half) &  ($j < 1 | $j >= $number - 1) |
                    ($j < $spaces | $j >= $number - $spaces) &
                    !($i == ($half - 1) | $i == ($half + 1))) {
                  $pattern .= "_";
                }
                else {
                  $pattern .= "*";
                }
              }
              $pattern .= "\n";
          }
          return $pattern .= "\n";
      }
$DrawStarOfDavid = '';
if (isset($_POST['number'])) {
    $number = intval($_POST['number']);
	$DrawStarOfDavid = DrawStarOfDavid($number);
}
		
?>
	
	<!DOCTYPE html>
<html>
<head>      
        <form action="" method="post">
            <input type="number" name="number" placeholder="Enter a number" required>
            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="output-container">
        <div class="output-box">
            <p>Draw Star Of David:</p>
            <?php echo nl2br($DrawStarOfDavid); ?>
        </div>
		</div>
</body>
</html>
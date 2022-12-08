<?php
/**
 * Данные (Model)
 */
$vik = [
      [
          'text' => ' Вопрос для радио ',
          'type' => 'radio',
          'answers' => [
              'var 1',
              'var 2'
          ]
      ],
      [
          'text' => ' Вопрос для чек боксов ',
          'type' => 'check',
          'answers' => [
              'var 1',
              'var 2'
          ]
      ],
      [
          'text' => ' Вопрос для textarea ',
          'type' => 'textarea',
      ]
];
?>

<pre>
<?php
// var_dump($vik);
?>
</pre>

<form method="<?=$_SERVER['PHP_SELF'];?>">
<?php
/**
 * Код (View)
 */
    foreach ($vik as $q) {
        echo "<p>" . $q['text'] . "</p>";
        switch ($q['type']) {
            case 'radio':
                foreach ($q['answers'] as $a) {
                    echo "<label><input type='radio' name='1' > $a </label>";
                }
                break;
            case 'check':
                foreach ($q['answers'] as $a) {
                    echo "<label><input type='checkbox' > $a </label>";
                }
                break;
            case 'textarea':
                echo "<textarea></textarea>";
                break;
            default:
                echo "<p> Error type </p>";
        }
    }
?>
</form>
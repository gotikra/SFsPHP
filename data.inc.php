<div class="data">
                  <div class="myPhoto">
                    <?php  echo '<img src="/img/self.jpg">'; ?>
                      <div class="nameAndOrigin">
                         <?php echo 'Имя: ', '<em>', $myName, '</em>', '<br> ', 'Фамилия: ', '<em>', $mySName, '</em>',  '<br>', 'Город: ', '<em>',  $town, '</em>', '<br>', 'Возраст: ', '<em>', $age, '</em>' ; ?>
                      </div>                     
                  </div>

                  <div class="whatWeLearn">
                    <p> Изучил базовый синтаксис PHP </p>
                    <p> Изучил простые операции  </p>
                  </div>
</div>
<div class="fblock">
                  <?php  include 'knowledge.inc.php'; ?>
                    <p><?php echo 'Сумма сложения чисел ', $a, ' и ', $b, ' равна ', $c, ',' ;  ?> <br>
                    <?php echo 'при этом ', $a, $compres, $b ; ?></p>
                 <p><?php
                      $pi = 3.14;
                      $r = 734;
                      $S = $pi*$r^2 ;
                      echo $S;
                    ?></p>   

</div>
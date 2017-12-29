<?php
  $page = "home";
  include 'header.php';
?>

<div class="jumbotron">
  <h1>SAFER Cypher</h1>
  <p class="lead">Реализация шифра SAFER.</p>
</div>

<p>
<strong>SÁFER</strong> (англ. <strong>Secure And Fast Encryption Routine</strong> — безопасная и быстрая процедура шифрования) — в криптографии семейство симметричных блочных криптоалгоритмов на основе подстановочно-перестановочной сети. Основной вклад в разработку алгоритмов внёс Джеймс Мэсси. Первый вариант шифра был создан и опубликован в 1993 году.
</p>
<p>
Спустя некоторое время в первых вариантах алгоритма выявились некоторые слабости, обнаруженные Ларсом Кнудсеном и Шоном Мёрфи. Это повлекло за собой создание новых версий алгоритма, названных SAFER SK-64 и SAFER SK-128, в которых расписание ключей было изменено в соответствии со схемой, предложенной Кнудсеном. Также был разработан вариант с длиной ключа, уменьшенной до 40 бит — SAFER SK-40. Сокращение «SK» в названии алгоритмов расшифровывается как «Strengthened Key schedule» (Усиленное расписание ключей). Для новых вариантов шифра предлагалось использовать не 6, а по крайней мере 8 (максимум 10) раундов шифрования.
</p>
<p>
Алгоритм SAFER+ был разработан в 1998 году калифорнийской корпорацией Cylinc совместно с Армянской академией наук для участия в конкурсе AES, на котором прошёл лишь первый отборочный тур. Данный шифр имеет входной блок длиной 128 бит и размер ключа 128, 192 или 256 бит.
</p>
<p>
Последней из созданных разновидностей алгоритма SAFER является SAFER++, разработанный Мэсси в 2000 году и ставший дальнейшим развитием алгоритма SAFER+. Алгоритм принял участие в европейском конкурсе алгоритмов NESSIE, где был представлен в двух вариантах: шифр с 64-битным блоком и 128-битным блоком. Он прошёл во вторую фазу конкурса, но не был выбран в набор рекомендуемых NESSIE криптографических примитивов. Эксперты сочли, что шифр слишком медленный на всех машинах, кроме 8-битных (таких как смарт-карты), а запас безопасности шифра слишком мал.
</p>

<?php include 'footer.php' ?>
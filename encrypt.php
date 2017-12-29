<?php 
include 'helper.php';
 
$text = $_GET['text'];
$key_str = $_GET['key'];


if (isset($text) && isset($key_str)) {
    $key = get_valid_hex($key_str);

    $packed_key = pack('H*', $key);

    $ciphertext = mcrypt_encrypt(MCRYPT_SAFERPLUS, $packed_key, $text, MCRYPT_MODE_ECB);

    $result = base64_encode($ciphertext);    
}

?>


<?php 

$page = "en";
include 'header.php';

?>

<form action="">
    <div class="form-group">
        <label for="text_input">Текст</label>
        <input type="text" class="form-control" id="text_input" placeholder="Enter" name="text">
    </div>
    <div class="form-group">
        <label for="key_input">Ключ</label>
        <input type="text" class="form-control" id="key_input" placeholder="Enter key" name="key" value='<?= $key_str ?>'>
    </div>
    <div class="form-group">
        <label for="result">Result</label>
        <textarea class="form-control" id="result" rows="3"><?php if(isset($result)) echo $result ?></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Отправить</button>
    </div>
</form>

<?php include 'footer.php' ?>
